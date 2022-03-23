<?php
class ControllerMailOrder extends Controller {
	public function index(&$route, &$args) {
		if (isset($args[0])) {
			$order_id = $args[0];
		} else {
			$order_id = 0;
		}

		if (isset($args[1])) {
			$order_status_id = $args[1];
		} else {
			$order_status_id = 0;
		}	

		if (isset($args[2])) {
			$comment = $args[2];
		} else {
			$comment = '';
		}
		
		if (isset($args[3])) {
			$notify = $args[3];
		} else {
			$notify = '';
		}
						
		// We need to grab the old order status ID
		$order_info = $this->model_checkout_order->getOrder($order_id);
		
		if ($order_info) {
			// If order status is 0 then becomes greater than 0 send main html email
			if (!$order_info['order_status_id'] && $order_status_id) {
				$this->add($order_info, $order_status_id, $comment, $notify);
			} 
			
			// If order status is not 0 then send update text email
			if ($order_info['order_status_id'] && $order_status_id && $notify) {
				$this->edit($order_info, $order_status_id, $comment, $notify);
			}		
		}
	}
		
	public function add($order_info, $order_status_id, $comment, $notify) {
		// Check for any downloadable products
		$download_status = false;

		$order_products = $this->model_checkout_order->getOrderProducts($order_info['order_id']);
		
		foreach ($order_products as $order_product) {
			// Check if there are any linked downloads
			$product_download_query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "product_to_download` WHERE product_id = '" . (int)$order_product['product_id'] . "'");

			if ($product_download_query->row['total']) {
				$download_status = true;
			}
		}
		
		// Load the language for any mails that might be required to be sent out
		$language = new Language($order_info['language_code']);
		$language->load($order_info['language_code']);
		$language->load('mail/order_add');

		// HTML Mail
		$data['title'] = sprintf($language->get('text_subject'), $order_info['store_name'], $order_info['order_id']);

		$data['text_greeting'] = sprintf($language->get('text_greeting'), $order_info['store_name']);
		$data['text_link'] = $language->get('text_link');
		$data['text_download'] = $language->get('text_download');
		$data['text_order_detail'] = $language->get('text_order_detail');
		$data['text_instruction'] = $language->get('text_instruction');
		$data['text_order_id'] = $language->get('text_order_id');
		$data['text_date_added'] = $language->get('text_date_added');
		$data['text_payment_method'] = $language->get('text_payment_method');
		$data['text_shipping_method'] = $language->get('text_shipping_method');
		$data['text_email'] = $language->get('text_email');
		$data['text_telephone'] = $language->get('text_telephone');
		$data['text_ip'] = $language->get('text_ip');
		$data['text_order_status'] = $language->get('text_order_status');
		$data['text_payment_address'] = $language->get('text_payment_address');
		$data['text_shipping_address'] = $language->get('text_shipping_address');
		$data['text_product'] = $language->get('text_product');
		$data['text_model'] = $language->get('text_model');
		$data['text_quantity'] = $language->get('text_quantity');
		$data['text_price'] = $language->get('text_price');
		$data['text_total'] = $language->get('text_total');
		$data['text_footer'] = $language->get('text_footer');

		$data['logo'] = $order_info['store_url'] . 'image/' . $this->config->get('config_logo');
		$data['store_name'] = $order_info['store_name'];
		$data['store_url'] = $order_info['store_url'];
		$data['customer_id'] = $order_info['customer_id'];
		$data['link'] = $order_info['store_url'] . 'index.php?route=account/order/info&order_id=' . $order_info['order_id'];

		if ($download_status) {
			$data['download'] = $order_info['store_url'] . 'index.php?route=account/download';
		} else {
			$data['download'] = '';
		}

		$data['order_id'] = $order_info['order_id'];
		$data['date_added'] = date($language->get('date_format_short'), strtotime($order_info['date_added']));
		$data['payment_method'] = $order_info['payment_method'];
		$data['shipping_method'] = $order_info['shipping_method'];
		$data['email'] = $order_info['email'];
		$data['telephone'] = $order_info['telephone'];
		$data['ip'] = $order_info['ip'];

		$order_status_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id = '" . (int)$order_status_id . "' AND language_id = '" . (int)$order_info['language_id'] . "'");
	
		if ($order_status_query->num_rows) {
			$data['order_status'] = $order_status_query->row['name'];
		} else {
			$data['order_status'] = '';
		}

		if ($comment && $notify) {
			$data['comment'] = nl2br($comment);
		} else {
			$data['comment'] = '';
		}

		if ($order_info['payment_address_format']) {
			$format = $order_info['payment_address_format'];
		} else {
			$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
		}

		$find = array(
			'{firstname}',
			'{lastname}',
			'{company}',
			'{address_1}',
			'{address_2}',
			'{city}',
			'{postcode}',
			'{zone}',
			'{zone_code}',
			'{country}'
		);

		$replace = array(
			'firstname' => $order_info['payment_firstname'],
			'lastname'  => $order_info['payment_lastname'],
			'company'   => $order_info['payment_company'],
			'address_1' => $order_info['payment_address_1'],
			'address_2' => $order_info['payment_address_2'],
			'city'      => $order_info['payment_city'],
			'postcode'  => $order_info['payment_postcode'],
			'zone'      => $order_info['payment_zone'],
			'zone_code' => $order_info['payment_zone_code'],
			'country'   => $order_info['payment_country']
		);

		$data['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

		if ($order_info['shipping_address_format']) {
			$format = $order_info['shipping_address_format'];
		} else {
			$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
		}

		$find = array(
			'{firstname}',
			'{lastname}',
			'{company}',
			'{address_1}',
			'{address_2}',
			'{city}',
			'{postcode}',
			'{zone}',
			'{zone_code}',
			'{country}'
		);

		$replace = array(
			'firstname' => $order_info['shipping_firstname'],
			'lastname'  => $order_info['shipping_lastname'],
			'company'   => $order_info['shipping_company'],
			'address_1' => $order_info['shipping_address_1'],
			'address_2' => $order_info['shipping_address_2'],
			'city'      => $order_info['shipping_city'],
			'postcode'  => $order_info['shipping_postcode'],
			'zone'      => $order_info['shipping_zone'],
			'zone_code' => $order_info['shipping_zone_code'],
			'country'   => $order_info['shipping_country']
		);

		$data['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

		$this->load->model('tool/upload');

		// Products
		$data['products'] = array();

		foreach ($order_products as $order_product) {
			$option_data = array();

			$order_options = $this->model_checkout_order->getOrderOptions($order_info['order_id'], $order_product['order_product_id']);

			foreach ($order_options as $order_option) {
				if ($order_option['type'] != 'file') {
					$value = $order_option['value'];
				} else {
					$upload_info = $this->model_tool_upload->getUploadByCode($order_option['value']);

					if ($upload_info) {
						$value = $upload_info['name'];
					} else {
						$value = '';
					}
				}

				$option_data[] = array(
					'name'  => $order_option['name'],
					'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
				);
			}

			$data['products'][] = array(
				'name'     => $order_product['name'],
				'model'    => $order_product['model'],
				'option'   => $option_data,
				'quantity' => $order_product['quantity'],
				'price'    => $this->currency->format($order_product['price'] + ($this->config->get('config_tax') ? $order_product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
				'total'    => $this->currency->format($order_product['total'] + ($this->config->get('config_tax') ? ($order_product['tax'] * $order_product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value'])
			);
		}

		// Vouchers
		$data['vouchers'] = array();

		$order_vouchers = $this->model_checkout_order->getOrderVouchers($order_info['order_id']);

		foreach ($order_vouchers as $order_voucher) {
			$data['vouchers'][] = array(
				'description' => $order_voucher['description'],
				'amount'      => $this->currency->format($order_voucher['amount'], $order_info['currency_code'], $order_info['currency_value']),
			);
		}

		// Order Totals
		$data['totals'] = array();
		
		$order_totals = $this->model_checkout_order->getOrderTotals($order_info['order_id']);

		foreach ($order_totals as $order_total) {
			$data['totals'][] = array(
				'title' => $order_total['title'],
				'text'  => $this->currency->format($order_total['value'], $order_info['currency_code'], $order_info['currency_value']),
			);
		}
	
		$this->load->model('setting/setting');
		
		$from = $this->model_setting_setting->getSettingValue('config_email', $order_info['store_id']);
		
		if (!$from) {
			$from = $this->config->get('config_email');
		}
		
		$mail = new Mail($this->config->get('config_mail_engine'));
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

		$mail->setTo($order_info['email']);
		$mail->setFrom($from);
		$mail->setSender(html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8'));
		$mail->setSubject(html_entity_decode(sprintf($language->get('text_subject'), $order_info['store_name'], $order_info['order_id']), ENT_QUOTES, 'UTF-8'));
		$mail->setHtml($this->load->view('mail/order_add', $data));
		$mail->send();
	}
	
	public function edit($order_info, $order_status_id, $comment) {
		$language = new Language($order_info['language_code']);
		$language->load($order_info['language_code']);
		$language->load('mail/order_edit');

		$data['text_order_id'] = $language->get('text_order_id');
		$data['text_date_added'] = $language->get('text_date_added');
		$data['text_order_status'] = $language->get('text_order_status');
		$data['text_link'] = $language->get('text_link');
		$data['text_comment'] = $language->get('text_comment');
		$data['text_footer'] = $language->get('text_footer');

		$data['order_id'] = $order_info['order_id'];
		$data['date_added'] = date($language->get('date_format_short'), strtotime($order_info['date_added']));
		
		$order_status_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id = '" . (int)$order_status_id . "' AND language_id = '" . (int)$order_info['language_id'] . "'");
	
		if ($order_status_query->num_rows) {
			$data['order_status'] = $order_status_query->row['name'];
		} else {
			$data['order_status'] = '';
		}

		if ($order_info['customer_id']) {
			$data['link'] = $order_info['store_url'] . 'index.php?route=account/order/info&order_id=' . $order_info['order_id'];
		} else {
			$data['link'] = '';
		}

		$data['comment'] = strip_tags($comment);

		$this->load->model('setting/setting');
		
		$from = $this->model_setting_setting->getSettingValue('config_email', $order_info['store_id']);
		
		if (!$from) {
			$from = $this->config->get('config_email');
		}
		
		$mail = new Mail($this->config->get('config_mail_engine'));
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

		$mail->setTo($order_info['email']);
		$mail->setFrom($from);
		$mail->setSender(html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8'));
		$mail->setSubject(html_entity_decode(sprintf($language->get('text_subject'), $order_info['store_name'], $order_info['order_id']), ENT_QUOTES, 'UTF-8'));
		
			$mail->setText($this->load->view('mail/order_edit', $data));
			$mail->send();
			/* xml */
			$vendor2customers = $this->config->get('vendor_vendor2customer');
			$emailtemplete = $this->db->query("SELECT * from " . DB_PREFIX . "vendor_mail vm left join " . DB_PREFIX . "vendor_mail_language vml on vml.mail_id=vm.mail_id WHERE vm.sellertype = 'seller_order_status_update_email' and vml.language_id='".$this->config->get('config_language_id')."' and vm.status='1'");
			
			if(!empty($emailtemplete->row['sellertype'])) {
				if($emailtemplete->row['sellertype']=='seller_order_status_update_email') {
				$subject=$emailtemplete->row['subject'];
				$message=$emailtemplete->row['message'];
				$orderss_query = $this->db->query("SELECT vendor_id FROM " . DB_PREFIX . "vendor_order_product WHERE order_id = '" .$order_info['order_id'] . "' group by vendor_id");

				if(!empty($orderss_query->rows)) {

				foreach($orderss_query->rows as $vendorids) {

					$vendor_id=$vendorids['vendor_id'];
					$vendorinfo = $this->db->query("SELECT * from " . DB_PREFIX . "vendor WHERE vendor_id = '" .$vendor_id. "'");
					if(!empty($vendorinfo->row['email'])) {
						// Products
						$seller_product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product  op LEFT JOIN " . DB_PREFIX . "vendor_order_product vop ON (op.order_id = vop.order_id) WHERE op.order_id = '" . (int)$order_info['order_id'] . "' and vop.vendor_id='".$vendor_id."' GROUP BY vop.order_product_id");


					$sellerproduct['products'] = array();

					foreach ($seller_product_query->rows as $product) {
						$option_data = array();

						$order_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_info['order_id'] . "' AND order_product_id = '" . (int)$product['order_product_id'] . "'");

						foreach ($order_option_query->rows as $option) {
							if ($option['type'] != 'file') {
								$value = $option['value'];
							} else {
								$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

								if ($upload_info) {
									$value = $upload_info['name'];
								} else {
									$value = '';
								}
							}

							$option_data[] = array(
								'name'  => $option['name'],
								'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
							);
							}



							$this->load->model('vendor/vendor');
							$seller_info = $this->model_vendor_vendor->getVendor($product['vendor_id']);

							if ($this->request->server['HTTPS']) {
							$server = $this->config->get('config_ssl');
							} else {
							$server = $this->config->get('config_url');
							}

							if(isset($seller_info['display_name'])){
							$sellerdisplay = $seller_info['display_name'];
							} else{
								$sellerdisplay ='';
							}
						if(isset($seller_info['vendor_id'])){
							$vendor_ids = $server .'index.php?route=vendor/vendor_profile&'.'&vendor_id=' . $seller_info['vendor_id'];
						} else{
							$vendor_ids ='';
						}

							$customer2vendors = $this->config->get('vendor_customer2vendor');
							if($customer2vendors==1){
							 $data['customer2vendor'] = $customer2vendors;
							} else {
							 $data['customer2vendor']= false;
							}

						$sellerproduct['products'][] = array(
							'name'     => $product['name'],
							'sellerdisplay'   => $sellerdisplay,
							'vendor_ids'      => $vendor_ids,
							'model'    => $product['model'],
							'option'   => $option_data,
							'quantity' => $product['quantity'],
							'price'    => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
							'total'    => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value'])
						);
						}

						$language = new Language($order_info['language_code']);
						$language->load($order_info['language_code']);
						$language->load('vendor/seller_order');

						$sellerproduct['text_shipping_address']= $language->get('text_shipping_address');
						$sellerproduct['text_payment_address']=$language->get('text_payment_address');
						$sellerproduct['text_product']= $language->get('text_product');
						$sellerproduct['text_model']=$language->get('text_model');
						$sellerproduct['text_quantity']=$language->get('text_quantity');
						$sellerproduct['text_price']=$language->get('text_price');
						$sellerproduct['text_total']=$language->get('text_total');
						$sellerproduct['text_order_detail']=$language->get('text_order_detail');
						$sellerproduct['text_order_detail']=$language->get('text_order_detail');
						$sellerproduct['text_email']=$language->get('text_email');
						$sellerproduct['text_shipping_method']=$language->get('text_shipping_method');
						$sellerproduct['text_payment_method']=$language->get('text_payment_method');
						$sellerproduct['text_telephone']=$language->get('text_telephone');
						$sellerproduct['text_ip']=$language->get('text_ip');
						$sellerproduct['title'] = sprintf($language->get('text_subject'), $order_info['store_name'], $order_info['order_id']);

						if($vendor2customers==1){
						 $sellerproduct['vendor2customer'] = $vendor2customers;
						} else {
						 $sellerproduct['vendor2customer']= false;
						}


						$sellerproduct['order_id'] = $order_info['order_id'];
						$sellerproduct['email'] = $order_info['email'];
						$sellerproduct['date_added'] = date($language->get('date_format_short'), strtotime($order_info['date_added']));
						$sellerproduct['shipping_method'] = $order_info['shipping_method'];
						$sellerproduct['payment_method'] = $order_info['payment_method'];
						$sellerproduct['telephone'] = $order_info['telephone'];
						$sellerproduct['ip'] = $order_info['ip'];
						// Order Totals
							$sellerproduct['sellrtotals'] = array();
							$sellerproductorder_totals = $this->model_checkout_order->getOrderTotals($order_info['order_id']);

							foreach ($sellerproductorder_totals as $sellerorder_total) {
								$sellerproduct['sellrtotals'][] = array(
									'title' => $sellerorder_total['title'],
									'text'  => $this->currency->format($sellerorder_total['value'], $order_info['currency_code'], $order_info['currency_value']),
								);
							}


						/* payment address start */
						if ($order_info['payment_address_format']) {
						$format = $order_info['payment_address_format'];
						} else {
							$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
						}

						$find = array(
							'{firstname}',
							'{lastname}',
							'{company}',
							'{address_1}',
							'{address_2}',
							'{city}',
							'{postcode}',
							'{zone}',
							'{zone_code}',
							'{country}'
						);

						$replace = array(
							'firstname' => $order_info['payment_firstname'],
							'lastname'  => $order_info['payment_lastname'],
							'company'   => $order_info['payment_company'],
							'address_1' => $order_info['payment_address_1'],
							'address_2' => $order_info['payment_address_2'],
							'city'      => $order_info['payment_city'],
							'postcode'  => $order_info['payment_postcode'],
							'zone'      => $order_info['payment_zone'],
							'zone_code' => $order_info['payment_zone_code'],
							'country'   => $order_info['payment_country']
						);

						$sellerproduct['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

					/* payment address end */

					/* shipping address start */
						if ($order_info['shipping_address_format']) {
							$format = $order_info['shipping_address_format'];
						} else {
							$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
						}

						$find = array(
							'{firstname}',
							'{lastname}',
							'{company}',
							'{address_1}',
							'{address_2}',
							'{city}',
							'{postcode}',
							'{zone}',
							'{zone_code}',
							'{country}'
						);

						$replace = array(
							'firstname' => $order_info['shipping_firstname'],
							'lastname'  => $order_info['shipping_lastname'],
							'company'   => $order_info['shipping_company'],
							'address_1' => $order_info['shipping_address_1'],
							'address_2' => $order_info['shipping_address_2'],
							'city'      => $order_info['shipping_city'],
							'postcode'  => $order_info['shipping_postcode'],
							'zone'      => $order_info['shipping_zone'],
							'zone_code' => $order_info['shipping_zone_code'],
							'country'   => $order_info['shipping_country']
						);

						$sellerproduct['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

						/* shipping address end */

						$selerhtmldata=$this->load->view('vendor/seller_order', $sellerproduct);

						$find = array(
							'{order_id}',
							'{display_name}',
							'{email}',
							'{seller_telephone}',
							'{address_1}',
							'{seller_lastname}'	,
							'{seller_firstname}',
							'{product_info}',
							'{productname}'
						);
						$replace = array(
							'order_id' => $order_info['order_id'],
							'display_name'=> $vendorinfo->row['display_name'],
							'email' 	=> $vendorinfo->row['email'],
							'seller_telephone' => $vendorinfo->row['telephone'],
							'address_1' => $vendorinfo->row['address_1'],
							'seller_lastname' => $vendorinfo->row['lastname'],
							'seller_firstname' => $vendorinfo->row['firstname'],
							'product_info' => $selerhtmldata,
							'productname' =>  $product['name'],


						);

						$subject= str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $subject))));
						$message= str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $emailtemplete->row['message']))));


						$mail = new Mail($this->config->get('config_mail_engine'));
						$mail->parameter = $this->config->get('config_mail_parameter');
						$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
						$mail->smtp_username = $this->config->get('config_mail_smtp_username');
						$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
						$mail->smtp_port = $this->config->get('config_mail_smtp_port');
						$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');


						$mail->setTo($vendorinfo->row['email']);
						$mail->setFrom($this->config->get('config_email'));
						$mail->setSender(html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8'));
						$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
						$mail->setHtml(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
						$mail->send();

					}

				}
			}
		} 
		}
		/// xml Seller Alert Mail ////
			
	}
	
	// Admin Alert Mail
	public function alert(&$route, &$args) {
		if (isset($args[0])) {
			$order_id = $args[0];
		} else {
			$order_id = 0;
		}
		
		if (isset($args[1])) {
			$order_status_id = $args[1];
		} else {
			$order_status_id = 0;
		}	
		
		if (isset($args[2])) {
			$comment = $args[2];
		} else {
			$comment = '';
		}
		
		if (isset($args[3])) {
			$notify = $args[3];
		} else {
			$notify = '';
		}

		$order_info = $this->model_checkout_order->getOrder($order_id);
		
		if ($order_info && !$order_info['order_status_id'] && $order_status_id && in_array('order', (array)$this->config->get('config_mail_alert'))) {	
			$this->load->language('mail/order_alert');
			
			// HTML Mail
			$data['text_received'] = $this->language->get('text_received');
			$data['text_order_id'] = $this->language->get('text_order_id');
			$data['text_date_added'] = $this->language->get('text_date_added');
			$data['text_order_status'] = $this->language->get('text_order_status');
			$data['text_product'] = $this->language->get('text_product');
			$data['text_total'] = $this->language->get('text_total');
			$data['text_comment'] = $this->language->get('text_comment');
			
			$data['order_id'] = $order_info['order_id'];
			$data['date_added'] = date($this->language->get('date_format_short'), strtotime($order_info['date_added']));

			$order_status_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_status WHERE order_status_id = '" . (int)$order_status_id . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

			if ($order_status_query->num_rows) {
				$data['order_status'] = $order_status_query->row['name'];
			} else {
				$data['order_status'] = '';
			}

			$this->load->model('tool/upload');
			
			$data['products'] = array();

			$order_products = $this->model_checkout_order->getOrderProducts($order_id);

			foreach ($order_products as $order_product) {
				$option_data = array();
				
				$order_options = $this->model_checkout_order->getOrderOptions($order_info['order_id'], $order_product['order_product_id']);
				
				foreach ($order_options as $order_option) {
					if ($order_option['type'] != 'file') {
						$value = $order_option['value'];
					} else {
						$upload_info = $this->model_tool_upload->getUploadByCode($order_option['value']);
	
						if ($upload_info) {
							$value = $upload_info['name'];
						} else {
							$value = '';
						}
					}

					$option_data[] = array(
						'name'  => $order_option['name'],
						'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
					);					
				}
					
				$data['products'][] = array(
					'name'     => $order_product['name'],
					'model'    => $order_product['model'],
					'quantity' => $order_product['quantity'],
					'option'   => $option_data,
					'total'    => html_entity_decode($this->currency->format($order_product['total'] + ($this->config->get('config_tax') ? ($order_product['tax'] * $order_product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value']), ENT_NOQUOTES, 'UTF-8')
				);
			}
			
			$data['vouchers'] = array();
			
			$order_vouchers = $this->model_checkout_order->getOrderVouchers($order_id);

			foreach ($order_vouchers as $order_voucher) {
				$data['vouchers'][] = array(
					'description' => $order_voucher['description'],
					'amount'      => html_entity_decode($this->currency->format($order_voucher['amount'], $order_info['currency_code'], $order_info['currency_value']), ENT_NOQUOTES, 'UTF-8')
				);					
			}

			$data['totals'] = array();
			
			$order_totals = $this->model_checkout_order->getOrderTotals($order_id);

			foreach ($order_totals as $order_total) {
				$data['totals'][] = array(
					'title' => $order_total['title'],
					'value' => html_entity_decode($this->currency->format($order_total['value'], $order_info['currency_code'], $order_info['currency_value']), ENT_NOQUOTES, 'UTF-8')
				);
			}

			$data['comment'] = strip_tags($order_info['comment']);

			$mail = new Mail($this->config->get('config_mail_engine'));
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($this->config->get('config_email'));
			$mail->setFrom($this->config->get('config_email'));
			$mail->setSender(html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode(sprintf($this->language->get('text_subject'), $this->config->get('config_name'), $order_info['order_id']), ENT_QUOTES, 'UTF-8'));
			$mail->setText($this->load->view('mail/order_alert', $data));
			$mail->send();

			// Send to additional alert emails
			$emails = explode(',', $this->config->get('config_mail_alert_email'));

			foreach ($emails as $email) {
				$email = trim($email);
				if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$mail->setTo($email);
					$mail->send();
				}
			}

			/* xml */
				/* tmd vendor2 customer condtion  */
				$vendor2customers = $this->config->get('vendor_vendor2customer');
				/* tmd vendor2 customer condtion  */
				$emailtemplete = $this->db->query("SELECT * from " . DB_PREFIX . "vendor_mail vm left join " . DB_PREFIX . "vendor_mail_language vml on vml.mail_id=vm.mail_id WHERE vm.sellertype = 'customer_to_seller_order_email' and vml.language_id='".$this->config->get('config_language_id')."' and vm.status='1'");
				if(!empty($emailtemplete->row['sellertype'])) {
				if($emailtemplete->row['sellertype']=='customer_to_seller_order_email') {
				$subject=$emailtemplete->row['subject'];
				$message=$emailtemplete->row['message'];
				$orderss_query = $this->db->query("SELECT vendor_id FROM " . DB_PREFIX . "vendor_order_product WHERE order_id = '" .$order_info['order_id'] . "' group by vendor_id");

				if(!empty($orderss_query->rows)) {

				foreach($orderss_query->rows as $vendorids) {

					$vendor_id=$vendorids['vendor_id'];
					$vendorinfo = $this->db->query("SELECT * from " . DB_PREFIX . "vendor WHERE vendor_id = '" .$vendor_id. "'");
					if(!empty($vendorinfo->row['email'])) {
						// Products
						$seller_product_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_product  op LEFT JOIN " . DB_PREFIX . "vendor_order_product vop ON (op.order_id = vop.order_id) WHERE op.order_id = '" . (int)$order_info['order_id'] . "' and vop.vendor_id='".$vendor_id."' GROUP BY vop.order_product_id");


					$sellerproduct['products'] = array();

					foreach ($seller_product_query->rows as $product) {
						$option_data = array();

						$order_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_info['order_id'] . "' AND order_product_id = '" . (int)$product['order_product_id'] . "'");

						foreach ($order_option_query->rows as $option) {
							if ($option['type'] != 'file') {
								$value = $option['value'];
							} else {
								$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

								if ($upload_info) {
									$value = $upload_info['name'];
								} else {
									$value = '';
								}
							}

							$option_data[] = array(
								'name'  => $option['name'],
								'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
							);
							}



							$this->load->model('vendor/vendor');
							$seller_info = $this->model_vendor_vendor->getVendor($product['vendor_id']);

							if ($this->request->server['HTTPS']) {
							$server = $this->config->get('config_ssl');
							} else {
							$server = $this->config->get('config_url');
							}

							if(isset($seller_info['display_name'])){
							$sellerdisplay = $seller_info['display_name'];
							} else{
								$sellerdisplay ='';
							}
						if(isset($seller_info['vendor_id'])){
							$vendor_ids = $server .'index.php?route=vendor/vendor_profile&'.'&vendor_id=' . $seller_info['vendor_id'];
						} else{
							$vendor_ids ='';
						}

							$customer2vendors = $this->config->get('vendor_customer2vendor');
							if($customer2vendors==1){
							 $data['customer2vendor'] = $customer2vendors;
							} else {
							 $data['customer2vendor']= false;
							}

						$sellerproduct['products'][] = array(
							'name'     => $product['name'],
							'sellerdisplay'   => $sellerdisplay,
							'vendor_ids'      => $vendor_ids,
							'model'    => $product['model'],
							'option'   => $option_data,
							'quantity' => $product['quantity'],
							'price'    => $this->currency->format($product['price'] + ($this->config->get('config_tax') ? $product['tax'] : 0), $order_info['currency_code'], $order_info['currency_value']),
							'total'    => $this->currency->format($product['total'] + ($this->config->get('config_tax') ? ($product['tax'] * $product['quantity']) : 0), $order_info['currency_code'], $order_info['currency_value'])
						);
						}

						$language = new Language($order_info['language_code']);
						$language->load($order_info['language_code']);
						$language->load('vendor/seller_order');

						$sellerproduct['text_shipping_address']= $language->get('text_shipping_address');
						$sellerproduct['text_payment_address']=$language->get('text_payment_address');
						$sellerproduct['text_product']= $language->get('text_product');
						$sellerproduct['text_model']=$language->get('text_model');
						$sellerproduct['text_quantity']=$language->get('text_quantity');
						$sellerproduct['text_price']=$language->get('text_price');
						$sellerproduct['text_total']=$language->get('text_total');
						$sellerproduct['text_order_detail']=$language->get('text_order_detail');
						$sellerproduct['text_order_detail']=$language->get('text_order_detail');
						$sellerproduct['text_email']=$language->get('text_email');
						$sellerproduct['text_shipping_method']=$language->get('text_shipping_method');
						$sellerproduct['text_payment_method']=$language->get('text_payment_method');
						$sellerproduct['text_telephone']=$language->get('text_telephone');
						$sellerproduct['text_ip']=$language->get('text_ip');
						$sellerproduct['title'] = sprintf($language->get('text_subject'), $order_info['store_name'], $order_info['order_id']);

						if($vendor2customers==1){
						 $sellerproduct['vendor2customer'] = $vendor2customers;
						} else {
						 $sellerproduct['vendor2customer']= false;
						}


						$sellerproduct['order_id'] = $order_info['order_id'];
						$sellerproduct['email'] = $order_info['email'];
						$sellerproduct['date_added'] = date($language->get('date_format_short'), strtotime($order_info['date_added']));
						$sellerproduct['shipping_method'] = $order_info['shipping_method'];
						$sellerproduct['payment_method'] = $order_info['payment_method'];
						$sellerproduct['telephone'] = $order_info['telephone'];
						$sellerproduct['ip'] = $order_info['ip'];
						// Order Totals
							$sellerproduct['sellrtotals'] = array();
							$sellerproductorder_totals = $this->model_checkout_order->getOrderTotals($order_info['order_id']);

							foreach ($sellerproductorder_totals as $sellerorder_total) {
								$sellerproduct['sellrtotals'][] = array(
									'title' => $sellerorder_total['title'],
									'text'  => $this->currency->format($sellerorder_total['value'], $order_info['currency_code'], $order_info['currency_value']),
								);
							}


						/* payment address start */
						if ($order_info['payment_address_format']) {
						$format = $order_info['payment_address_format'];
						} else {
							$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
						}

						$find = array(
							'{firstname}',
							'{lastname}',
							'{company}',
							'{address_1}',
							'{address_2}',
							'{city}',
							'{postcode}',
							'{zone}',
							'{zone_code}',
							'{country}'
						);

						$replace = array(
							'firstname' => $order_info['payment_firstname'],
							'lastname'  => $order_info['payment_lastname'],
							'company'   => $order_info['payment_company'],
							'address_1' => $order_info['payment_address_1'],
							'address_2' => $order_info['payment_address_2'],
							'city'      => $order_info['payment_city'],
							'postcode'  => $order_info['payment_postcode'],
							'zone'      => $order_info['payment_zone'],
							'zone_code' => $order_info['payment_zone_code'],
							'country'   => $order_info['payment_country']
						);

						$sellerproduct['payment_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

					/* payment address end */

					/* shipping address start */
						if ($order_info['shipping_address_format']) {
							$format = $order_info['shipping_address_format'];
						} else {
							$format = '{firstname} {lastname}' . "\n" . '{company}' . "\n" . '{address_1}' . "\n" . '{address_2}' . "\n" . '{city} {postcode}' . "\n" . '{zone}' . "\n" . '{country}';
						}

						$find = array(
							'{firstname}',
							'{lastname}',
							'{company}',
							'{address_1}',
							'{address_2}',
							'{city}',
							'{postcode}',
							'{zone}',
							'{zone_code}',
							'{country}'
						);

						$replace = array(
							'firstname' => $order_info['shipping_firstname'],
							'lastname'  => $order_info['shipping_lastname'],
							'company'   => $order_info['shipping_company'],
							'address_1' => $order_info['shipping_address_1'],
							'address_2' => $order_info['shipping_address_2'],
							'city'      => $order_info['shipping_city'],
							'postcode'  => $order_info['shipping_postcode'],
							'zone'      => $order_info['shipping_zone'],
							'zone_code' => $order_info['shipping_zone_code'],
							'country'   => $order_info['shipping_country']
						);

						$sellerproduct['shipping_address'] = str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $format))));

						/* shipping address end */

						$selerhtmldata=$this->load->view('vendor/seller_order', $sellerproduct);

						$find = array(
							'{order_id}',
							'{display_name}',
							'{email}',
							'{seller_telephone}',
							'{address_1}',
							'{seller_lastname}'	,
							'{seller_firstname}',
							'{product_info}',
							'{productname}',
							/* 01 10 2020 */
							'{customername}',
							'{customeremail}',
							'{customertelephone}',
							'{customer_id}',
							/* 01 10 2020 */
						);
						$replace = array(
							'order_id' => $order_info['order_id'],
							'display_name'=> $vendorinfo->row['display_name'],
							'email' 	=> $vendorinfo->row['email'],
							'seller_telephone' => $vendorinfo->row['telephone'],
							'address_1' => $vendorinfo->row['address_1'],
							'seller_lastname' => $vendorinfo->row['lastname'],
							'seller_firstname' => $vendorinfo->row['firstname'],
							'product_info' => $selerhtmldata,
							'productname' =>  $product['name'],
							/* 01 10 2020 */
							'customername' =>  $order_info['firstname'].' '. $order_info['lastname'],
							'customeremail' =>  $order_info['email'],
							'customertelephone' =>  $order_info['telephone'],
							'customer_id' =>  $order_info['customer_id']
							/* 01 10 2020 */
						);

						$subject= str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $subject))));
						$message= str_replace(array("\r\n", "\r", "\n"), '<br />', preg_replace(array("/\s\s+/", "/\r\r+/", "/\n\n+/"), '<br />', trim(str_replace($find, $replace, $emailtemplete->row['message']))));


						$mail = new Mail($this->config->get('config_mail_engine'));
						$mail->parameter = $this->config->get('config_mail_parameter');
						$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
						$mail->smtp_username = $this->config->get('config_mail_smtp_username');
						$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
						$mail->smtp_port = $this->config->get('config_mail_smtp_port');
						$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');


						$mail->setTo($vendorinfo->row['email']);
						$mail->setFrom($this->config->get('config_email'));
						$mail->setSender(html_entity_decode($order_info['store_name'], ENT_QUOTES, 'UTF-8'));
						$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
						$mail->setHtml(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
						$mail->send();

					}

				}
			}
			} 
		}
		
		/// xml Seller Alert Mail ////
		
		}
	}
}
