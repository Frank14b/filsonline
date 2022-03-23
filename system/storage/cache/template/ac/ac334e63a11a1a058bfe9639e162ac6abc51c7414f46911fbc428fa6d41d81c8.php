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
class __TwigTemplate_fc00161fd5a9f1231a0427135d0208c09abe01d55705f8ff6c3c5552a372f78c extends \Twig\Template
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
            echo "    <svg class=\"icon icon-cart\"><use xlink:href=\"#icon-cart\">
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
    </use></svg>
    <span id=\"cart-items\" class=\"count-badge ";
            // line 13
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
            // line 17
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                // line 18
                echo "      <li class=\"cart-products\">
        <table class=\"table\">
          ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 21
                    echo "          <tr>
            <td class=\"text-center td-image\">";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 22)) {
                        // line 23
                        echo "              <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 23);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 23);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 23);
                        echo "\"/></a>
              ";
                    }
                    // line 25
                    echo "            <td class=\"text-left td-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 25);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 25);
                    echo "</a><br /> ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25)) {
                        // line 26
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 26));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 27
                            echo "            <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 27);
                            echo "</span><small> ";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 27);
                            echo "</small><br /> ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 28
                        echo "            ";
                    }
                    // line 29
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 29)) {
                        // line 30
                        echo "            <span>";
                        echo ($context["text_recurring"] ?? null);
                        echo "</span><small> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 30);
                        echo "</small> ";
                    }
                    echo "</td>
            <td class=\"text-right td-qty\">x ";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31);
                    echo "</td>
            <td class=\"text-right td-total\">";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 32);
                    echo "</td>
            <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"cart.remove('";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 33);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"cart-remove\"><i class=\"fa fa-times-circle\"></i></button></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 37
                    echo "          <tr>
            <td class=\"text-center\"></td>
            <td class=\"text-left\">";
                    // line 39
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 39);
                    echo "</td>
            <td class=\"text-right\">x&nbsp;1</td>
            <td class=\"text-right\">";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 41);
                    echo "</td>
            <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 42);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "        </table>
      </li>
      <li class=\"cart-totals\">
        <div>
          <table class=\"table table-bordered\">
            ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    // line 51
                    echo "            <tr>
              <td class=\"text-right td-total-title\">";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 52);
                    echo "</td>
              <td class=\"text-right td-total-text\">";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 53);
                    echo "</td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "          </table>
          <div class=\"cart-buttons\">
            <a class=\"btn-cart btn\" href=\"";
                // line 58
                echo ($context["cart"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_cart"] ?? null);
                echo "</span></a>
            <a class=\"btn-checkout btn\" href=\"";
                // line 59
                echo ($context["checkout"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_checkout"] ?? null);
                echo "</span></a>
          </div>
        </div>
      </li>
      ";
            } else {
                // line 64
                echo "      <li>
        <p class=\"text-center cart-empty\">";
                // line 65
                echo ($context["text_empty"] ?? null);
                echo "</p>
      </li>
      ";
            }
            // line 68
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
        return array (  254 => 68,  248 => 65,  245 => 64,  235 => 59,  229 => 58,  225 => 56,  216 => 53,  212 => 52,  209 => 51,  205 => 50,  198 => 45,  187 => 42,  183 => 41,  178 => 39,  174 => 37,  169 => 36,  158 => 33,  154 => 32,  150 => 31,  141 => 30,  138 => 29,  135 => 28,  125 => 27,  120 => 26,  113 => 25,  101 => 23,  99 => 22,  96 => 21,  92 => 20,  88 => 18,  86 => 17,  75 => 13,  71 => 11,  65 => 9,  63 => 8,  60 => 7,  54 => 5,  52 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/cart.twig", "");
    }
}
