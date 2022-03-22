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
class __TwigTemplate_62fa91330e65c43eb1330b930cb3350066a4572a9ee50d98dcd14735aa16c888 extends \Twig\Template
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
            echo "    ";
            // line 12
            echo "    <span id=\"cart-items\" class=\"count-badge ";
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
                    echo "            <td class=\"text-left td-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 24);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 24);
                    echo "</a><br /> ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 24)) {
                        // line 25
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 25));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 26
                            echo "            <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 26);
                            echo "</span><small> ";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 26);
                            echo "</small><br /> ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "            ";
                    }
                    // line 28
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 28)) {
                        // line 29
                        echo "            <span>";
                        echo ($context["text_recurring"] ?? null);
                        echo "</span><small> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 29);
                        echo "</small> ";
                    }
                    echo "</td>
            <td class=\"text-right td-qty\">x ";
                    // line 30
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 30);
                    echo "</td>
            <td class=\"text-right td-total\">";
                    // line 31
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 31);
                    echo "</td>
            <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"cart.remove('";
                    // line 32
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 32);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"cart-remove\"><i class=\"fa fa-times-circle\"></i></button></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 36
                    echo "          <tr>
            <td class=\"text-center\"></td>
            <td class=\"text-left\">";
                    // line 38
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 38);
                    echo "</td>
            <td class=\"text-right\">x&nbsp;1</td>
            <td class=\"text-right\">";
                    // line 40
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 40);
                    echo "</td>
            <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                    // line 41
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 41);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "        </table>
      </li>
      <li class=\"cart-totals\">
        <div>
          <table class=\"table table-bordered\">
            ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    // line 50
                    echo "            <tr>
              <td class=\"text-right td-total-title\">";
                    // line 51
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 51);
                    echo "</td>
              <td class=\"text-right td-total-text\">";
                    // line 52
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 52);
                    echo "</td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "          </table>
          <div class=\"cart-buttons\">
            <a class=\"btn-cart btn\" href=\"";
                // line 57
                echo ($context["cart"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_cart"] ?? null);
                echo "</span></a>
            <a class=\"btn-checkout btn\" href=\"";
                // line 58
                echo ($context["checkout"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_checkout"] ?? null);
                echo "</span></a>
          </div>
        </div>
      </li>
      ";
            } else {
                // line 63
                echo "      <li>
        <p class=\"text-center cart-empty\">";
                // line 64
                echo ($context["text_empty"] ?? null);
                echo "</p>
      </li>
      ";
            }
            // line 67
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
        return array (  242 => 67,  236 => 64,  233 => 63,  223 => 58,  217 => 57,  213 => 55,  204 => 52,  200 => 51,  197 => 50,  193 => 49,  186 => 44,  175 => 41,  171 => 40,  166 => 38,  162 => 36,  157 => 35,  146 => 32,  142 => 31,  138 => 30,  129 => 29,  126 => 28,  123 => 27,  113 => 26,  108 => 25,  101 => 24,  89 => 22,  87 => 21,  84 => 20,  80 => 19,  76 => 17,  74 => 16,  62 => 12,  60 => 7,  54 => 5,  52 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/cart.twig", "");
    }
}