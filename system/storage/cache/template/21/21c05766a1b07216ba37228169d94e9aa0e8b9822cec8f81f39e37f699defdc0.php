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

/* journal3/template/common/cart.twig */
class __TwigTemplate_66077686932f19a191b96675496d0da25b127ba667e763b0aaf8b72d2acd8f12 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1), "get", [0 => "catalogMiniCartStatus"], "method", false, false, false, 1)) {
            // line 2
            echo "<div id=\"cart\" class=\"dropdown\">
  <a data-toggle=\"dropdown\" data-loading-text=\"";
            // line 3
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"dropdown-toggle cart-heading\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 3), "get", [0 => "cartStyleCartCheckoutLink"], "method", false, false, false, 3)) {
                echo "href=\"";
                echo ($context["cart"] ?? null);
                echo "\"";
            }
            echo ">
    ";
            // line 4
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 4), "get", [0 => "cartStyleCartCustomText"], "method", false, false, false, 4) == "default")) {
                // line 5
                echo "    <span id=\"cart-total\">";
                echo ($context["text_items"] ?? null);
                echo "</span>
    ";
            }
            // line 7
            echo "    <i class=\"fa fa-shopping-cart\">
      ";
            // line 8
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 8), "get", [0 => "cartStyleCartCustomText"], "method", false, false, false, 8) == "custom")) {
                // line 9
                echo "        <span class=\"cart-label\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 9), "get", [0 => "cartStyleCartLabel"], "method", false, false, false, 9);
                echo "</span>
      ";
            }
            // line 11
            echo "    </i>
    <span id=\"cart-items\" class=\"count-badge ";
            // line 12
            if ( !($context["items_count"] ?? null)) {
                echo "count-zero";
            }
            echo "\">";
            echo ($context["items_count"] ?? null);
            echo "</span>
  </a>
  <div id=\"cart-content\" class=\"dropdown-menu cart-content j-dropdown\">
    <ul>
      ";
            // line 16
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                // line 17
                echo "      <li class=\"cart-products\">
        <table class=\"table\">
          ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 20
                    echo "          <tr>
            <td class=\"text-center td-image\">";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21)) {
                        // line 22
                        echo "              <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                        echo "\"/></a>
              ";
                    }
                    // line 24
                    echo "            
\t\t\t\t  <!-- xml -->
\t\t\t\t   <td class=\"text-left td-name\"><a href=\"";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 26);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 26);
                    echo "</a>
\t\t\t\t\t";
                    // line 27
                    if (($context["customer2vendor"] ?? null)) {
                        // line 28
                        echo "\t\t\t\t\t";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "sellerdisplay", [], "any", false, false, false, 28)) {
                            // line 29
                            echo "\t\t\t\t\t";
                            echo ($context["text_byseller"] ?? null);
                            echo "
\t\t\t\t\t<a href=\"";
                            // line 30
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "vendor_ids", [], "any", false, false, false, 30);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "sellerdisplay", [], "any", false, false, false, 30);
                            echo "</a>
\t\t\t\t\t";
                        }
                        // line 32
                        echo "\t\t\t\t\t";
                    }
                    // line 33
                    echo "\t\t\t\t ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 33)) {
                        // line 34
                        echo "\t\t\t\t<!-- xml -->
\t\t\t\t
            ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 36));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 37
                            echo "            <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 37);
                            echo "</span><small> ";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 37);
                            echo "</small><br /> ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 38
                        echo "            ";
                    }
                    // line 39
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 39)) {
                        // line 40
                        echo "            <span>";
                        echo ($context["text_recurring"] ?? null);
                        echo "</span><small> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 40);
                        echo "</small> ";
                    }
                    echo "</td>
            <td class=\"text-right td-qty\">x ";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41);
                    echo "</td>
            <td class=\"text-right td-total\">";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 42);
                    echo "</td>
            <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"cart.remove('";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 43);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"cart-remove\"><i class=\"fa fa-times-circle\"></i></button></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 47
                    echo "          <tr>
            <td class=\"text-center\"></td>
            <td class=\"text-left\">";
                    // line 49
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 49);
                    echo "</td>
            <td class=\"text-right\">x&nbsp;1</td>
            <td class=\"text-right\">";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 51);
                    echo "</td>
            <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 52);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "        </table>
      </li>
      <li class=\"cart-totals\">
        <div>
          <table class=\"table table-bordered\">
            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    // line 61
                    echo "            <tr>
              <td class=\"text-right td-total-title\">";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 62);
                    echo "</td>
              <td class=\"text-right td-total-text\">";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 63);
                    echo "</td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "          </table>
          <div class=\"cart-buttons\">
            <a class=\"btn-cart btn\" href=\"";
                // line 68
                echo ($context["cart"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_cart"] ?? null);
                echo "</span></a>
            <a class=\"btn-checkout btn\" href=\"";
                // line 69
                echo ($context["checkout"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_checkout"] ?? null);
                echo "</span></a>
          </div>
        </div>
      </li>
      ";
            } else {
                // line 74
                echo "      <li>
        <p class=\"text-center cart-empty\">";
                // line 75
                echo ($context["text_empty"] ?? null);
                echo "</p>
      </li>
      ";
            }
            // line 78
            echo "    </ul>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 78,  276 => 75,  273 => 74,  263 => 69,  257 => 68,  253 => 66,  244 => 63,  240 => 62,  237 => 61,  233 => 60,  226 => 55,  215 => 52,  211 => 51,  206 => 49,  202 => 47,  197 => 46,  186 => 43,  182 => 42,  178 => 41,  169 => 40,  166 => 39,  163 => 38,  153 => 37,  149 => 36,  145 => 34,  142 => 33,  139 => 32,  132 => 30,  127 => 29,  124 => 28,  122 => 27,  116 => 26,  112 => 24,  100 => 22,  98 => 21,  95 => 20,  91 => 19,  87 => 17,  85 => 16,  74 => 12,  71 => 11,  65 => 9,  63 => 8,  60 => 7,  54 => 5,  52 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/cart.twig", "");
    }
}
