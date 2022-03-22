<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* journal3/template/checkout/register.twig */
class __TwigTemplate_05202e444e9c9c8b6ff122c9f2beb53f7c2a9fc64bc613e703ea7a1206124966 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row register-page\">
  <div class=\"col-sm-6\">
    <fieldset id=\"account\">
      <legend>";
        // line 4
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
      <div class=\"form-group\" style=\"display: ";
        // line 5
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <label class=\"control-label\">";
        // line 6
        echo ($context["entry_customer_group"] ?? null);
        echo "</label>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 8
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 8) == ($context["customer_group_id"] ?? null))) {
                // line 9
                echo "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 11
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 11);
                echo "\" checked=\"checked\" />
            ";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 12);
                echo "</label>
        </div>
        ";
            } else {
                // line 15
                echo "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 17);
                echo "\" />
            ";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 18);
                echo "</label>
        </div>
        ";
            }
            // line 21
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-firstname\">";
        // line 23
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 24
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-lastname\">";
        // line 27
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 28
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-email\">";
        // line 31
        echo ($context["entry_email"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 32
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-payment-email\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-telephone\">";
        // line 35
        echo ($context["entry_telephone"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 36
        echo ($context["entry_telephone"] ?? null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\" />
      </div>
      ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 39
            echo "      
      ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 40) == "account")) {
                // line 41
                echo "      
      ";
                // line 42
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 42) == "select")) {
                    // line 43
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 43);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 43);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 44
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 44);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 44);
                    echo "</label>
        <select name=\"custom_field[";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 45);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 45);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 45);
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 46
                    echo ($context["text_select"] ?? null);
                    echo "</option>
          
          
          
          ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 50));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 51
                        echo "          
          
          
          <option value=\"";
                        // line 54
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 54);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 54);
                        echo "</option>
          
          
          
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    echo "        
        
        
        </select>
      </div>
      ";
                }
                // line 65
                echo "      
      ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 66) == "radio")) {
                    // line 67
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 67);
                    echo "\">
        <label class=\"control-label\">";
                    // line 68
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 68);
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 69));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 70
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 72
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 72);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72);
                        echo "\" />
              ";
                        // line 73
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 73);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo " </div>
      </div>
      ";
                }
                // line 78
                echo "      
      ";
                // line 79
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 79) == "checkbox")) {
                    // line 80
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 80);
                    echo "\">
        <label class=\"control-label\">";
                    // line 81
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 81);
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 82
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 82));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 83
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 85
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 85);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                        echo "\" />
              ";
                        // line 86
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    echo " </div>
      </div>
      ";
                }
                // line 91
                echo "      
      ";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 92) == "text")) {
                    // line 93
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 93);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 94
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 94);
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 95
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 95);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 95);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 95);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 98
                echo "      
      ";
                // line 99
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 99) == "textarea")) {
                    // line 100
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 100);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 101);
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 102);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 102);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 102);
                    echo "</textarea>
      </div>
      ";
                }
                // line 105
                echo "      
      ";
                // line 106
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 106) == "file")) {
                    // line 107
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 107);
                    echo "\">
        <label class=\"control-label\">";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 108);
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 111);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    echo "\" />
      </div>
      ";
                }
                // line 114
                echo "      
      ";
                // line 115
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 115) == "date")) {
                    // line 116
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 116);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 117);
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 119
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 119);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 119);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 119);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 125
                echo "      
      ";
                // line 126
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 126) == "time")) {
                    // line 127
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 127);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 128);
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 130);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 130);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 136
                echo "      
      ";
                // line 137
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 137) == "time")) {
                    // line 138
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 138);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 141);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 141);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 141);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 147
                echo "      
      ";
            }
            // line 149
            echo "      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "    </fieldset>
    <fieldset>
      <legend>";
        // line 153
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-password\">";
        // line 155
        echo ($context["entry_password"] ?? null);
        echo "</label>
        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 156
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-payment-password\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-confirm\">";
        // line 159
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
        <input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 160
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-payment-confirm\" class=\"form-control\" />
      </div>
    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <fieldset id=\"address\">
      <legend>";
        // line 166
        echo ($context["text_your_address"] ?? null);
        echo "</legend>

      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-address-1\">";
        // line 169
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 170
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-address-2\">";
        // line 173
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 174
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-city\">";
        // line 177
        echo ($context["entry_city"] ?? null);
        echo "</label>
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 178
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-payment-city\" class=\"form-control\" />
      </div>
     test
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-country\">";
        // line 182
        echo ($context["entry_country"] ?? null);
        echo "</label>
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 184
        echo ($context["text_select"] ?? null);
        echo "</option>
          
          
          
         ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 189
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 189) == ($context["country_id"] ?? null))) {
                // line 190
                echo "          
          
          
          <option value=\"";
                // line 193
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 193);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 193);
                echo "</option>
          
          
          
          ";
            } else {
                // line 198
                echo "          
          
          
          <option value=\"";
                // line 201
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 201);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 201);
                echo "</option>
          
          
          
          ";
            }
            // line 206
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "        
        
        
        </select>
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-zone\">";
        // line 213
        echo ($context["entry_zone"] ?? null);
        echo "</label>
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
      ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 218
            echo "      
      ";
            // line 219
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 219) == "address")) {
                // line 220
                echo "      
      ";
                // line 221
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 221) == "select")) {
                    // line 222
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 222);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 223
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 223);
                    echo "</label>
        <select name=\"custom_field[";
                    // line 224
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 224);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                    echo "]\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 224);
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 225
                    echo ($context["text_select"] ?? null);
                    echo "</option>
          
          
          
          ";
                    // line 229
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 229));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 230
                        echo "          
          
          
          <option value=\"";
                        // line 233
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 233);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 233);
                        echo "</option>
          
          
          
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 238
                    echo "        
        
        
        </select>
      </div>
      ";
                }
                // line 244
                echo "      
      ";
                // line 245
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 245) == "radio")) {
                    // line 246
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 246);
                    echo "\">
        <label class=\"control-label\">";
                    // line 247
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 247);
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 248
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 248));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 249
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 251
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 251);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                        echo "]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 251);
                        echo "\" />
              ";
                        // line 252
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 252);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 254
                    echo " </div>
      </div>
      ";
                }
                // line 257
                echo "      
      ";
                // line 258
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 258) == "checkbox")) {
                    // line 259
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 259);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 259);
                    echo "\">
        <label class=\"control-label\">";
                    // line 260
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 260);
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 261
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 261);
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 261));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 262
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 264
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 264);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                        echo "][]\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 264);
                        echo "\" />
              ";
                        // line 265
                        echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 265);
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 267
                    echo " </div>
      </div>
      ";
                }
                // line 270
                echo "      
      ";
                // line 271
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 271) == "text")) {
                    // line 272
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 272);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 273
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 273);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 273);
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 274
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 274);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 274);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 274);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 274);
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 277
                echo "      
      ";
                // line 278
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 278) == "textarea")) {
                    // line 279
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 279);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 280
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 280);
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 281
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 281);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281);
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 281);
                    echo "\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 281);
                    echo "\" class=\"form-control\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 281);
                    echo "</textarea>
      </div>
      ";
                }
                // line 284
                echo "      
      ";
                // line 285
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 285) == "file")) {
                    // line 286
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 286);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 286);
                    echo "\">
        <label class=\"control-label\">";
                    // line 287
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 287);
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 289
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 289);
                    echo "\" data-loading-text=\"";
                    echo ($context["text_loading"] ?? null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo ($context["button_upload"] ?? null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 290
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 290);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 290);
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 290);
                    echo "\" />
      </div>
      ";
                }
                // line 293
                echo "      
      ";
                // line 294
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 294) == "date")) {
                    // line 295
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 295);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 295);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 296
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 296);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 296);
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 298
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 298);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 298);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 298);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 298);
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 298);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 304
                echo "      
      ";
                // line 305
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 305) == "time")) {
                    // line 306
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 306);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 306);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 307
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 307);
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 309
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 309);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 309);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 309);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 309);
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 309);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 315
                echo "      
      ";
                // line 316
                if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 316) == "time")) {
                    // line 317
                    echo "      <div id=\"payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 317);
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 317);
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 318
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 318);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 318);
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 320
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 320);
                    echo "][";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 320);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 320);
                    echo "\" placeholder=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 320);
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 320);
                    echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 326
                echo "      
      ";
            }
            // line 328
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "    </fieldset>

    ";
        // line 331
        echo ($context["captcha"] ?? null);
        echo "</div>
</div>
<div class=\"checkbox\">
  <label for=\"newsletter\">
    <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" />
    ";
        // line 336
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
</div>
";
        // line 338
        if (($context["shipping_required"] ?? null)) {
            // line 339
            echo "<div class=\"checkbox\">
  <label>
    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\" />
    ";
            // line 342
            echo ($context["entry_shipping"] ?? null);
            echo "</label>
</div>
";
        }
        // line 345
        if (($context["text_agree"] ?? null)) {
            // line 346
            echo "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">";
            // line 347
            echo ($context["text_agree"] ?? null);
            echo " 
    &nbsp;
    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    <button type=\"button\" id=\"button-register\" data-loading-text=\"";
            // line 350
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><span>";
            echo ($context["button_continue"] ?? null);
            echo "</span></button>
  </div>
</div>
";
        } else {
            // line 354
            echo "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">
    <button type=\"button\" id=\"button-register\" data-loading-text=\"";
            // line 356
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\"><span>";
            echo ($context["button_continue"] ?? null);
            echo "</span></button>
  </div>
</div>
";
        }
        // line 359
        echo " 
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('#address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
\t\t\$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
\t\t\$('#address .form-group:first').before(this);
\t}
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#collapse-payment-address .custom-field').hide();
\t\t\t\$('#collapse-payment-address .custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 479
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 484
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 489
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 512
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 518
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 525
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//--></script> 
";
    }

    public function getTemplateName()
    {
        return "journal3/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1297 => 525,  1287 => 518,  1278 => 512,  1252 => 489,  1244 => 484,  1236 => 479,  1114 => 359,  1105 => 356,  1101 => 354,  1092 => 350,  1086 => 347,  1083 => 346,  1081 => 345,  1075 => 342,  1070 => 339,  1068 => 338,  1063 => 336,  1055 => 331,  1051 => 329,  1045 => 328,  1041 => 326,  1024 => 320,  1017 => 318,  1010 => 317,  1008 => 316,  1005 => 315,  988 => 309,  981 => 307,  974 => 306,  972 => 305,  969 => 304,  952 => 298,  945 => 296,  938 => 295,  936 => 294,  933 => 293,  923 => 290,  915 => 289,  910 => 287,  903 => 286,  901 => 285,  898 => 284,  884 => 281,  878 => 280,  871 => 279,  869 => 278,  866 => 277,  852 => 274,  846 => 273,  839 => 272,  837 => 271,  834 => 270,  829 => 267,  820 => 265,  812 => 264,  808 => 262,  802 => 261,  798 => 260,  791 => 259,  789 => 258,  786 => 257,  781 => 254,  772 => 252,  764 => 251,  760 => 249,  754 => 248,  750 => 247,  743 => 246,  741 => 245,  738 => 244,  730 => 238,  717 => 233,  712 => 230,  708 => 229,  701 => 225,  693 => 224,  687 => 223,  680 => 222,  678 => 221,  675 => 220,  673 => 219,  670 => 218,  666 => 217,  659 => 213,  651 => 207,  645 => 206,  635 => 201,  630 => 198,  620 => 193,  615 => 190,  612 => 189,  608 => 188,  601 => 184,  596 => 182,  589 => 178,  585 => 177,  579 => 174,  575 => 173,  569 => 170,  565 => 169,  559 => 166,  550 => 160,  546 => 159,  540 => 156,  536 => 155,  531 => 153,  527 => 151,  520 => 149,  516 => 147,  499 => 141,  492 => 139,  485 => 138,  483 => 137,  480 => 136,  463 => 130,  456 => 128,  449 => 127,  447 => 126,  444 => 125,  427 => 119,  420 => 117,  413 => 116,  411 => 115,  408 => 114,  398 => 111,  390 => 110,  385 => 108,  378 => 107,  376 => 106,  373 => 105,  359 => 102,  353 => 101,  346 => 100,  344 => 99,  341 => 98,  327 => 95,  321 => 94,  314 => 93,  312 => 92,  309 => 91,  304 => 88,  295 => 86,  287 => 85,  283 => 83,  277 => 82,  273 => 81,  266 => 80,  264 => 79,  261 => 78,  256 => 75,  247 => 73,  239 => 72,  235 => 70,  229 => 69,  225 => 68,  218 => 67,  216 => 66,  213 => 65,  205 => 59,  192 => 54,  187 => 51,  183 => 50,  176 => 46,  168 => 45,  162 => 44,  155 => 43,  153 => 42,  150 => 41,  148 => 40,  145 => 39,  141 => 38,  136 => 36,  132 => 35,  126 => 32,  122 => 31,  116 => 28,  112 => 27,  106 => 24,  102 => 23,  93 => 21,  87 => 18,  83 => 17,  79 => 15,  73 => 12,  69 => 11,  65 => 9,  62 => 8,  58 => 7,  54 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/checkout/register.twig", "");
    }
}