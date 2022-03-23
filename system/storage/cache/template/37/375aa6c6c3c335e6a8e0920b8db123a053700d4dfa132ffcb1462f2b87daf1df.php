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
class __TwigTemplate_2d8139e8a296b7d9ade8572fbf0048641779bc8d1ebf675a22611469a9fc93b4 extends \Twig\Template
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
            echo "  
    <span id=\"cart-items\" class=\"count-badge ";
            // line 8
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
            // line 12
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                // line 13
                echo "      <li class=\"cart-products\">
        <table class=\"table\">
          ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 16
                    echo "          <tr>
            <td class=\"text-center td-image\">";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 17)) {
                        // line 18
                        echo "              <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 18);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 18);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 18);
                        echo "\"/></a>
              ";
                    }
                    // line 20
                    echo "            <td class=\"text-left td-name\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 20);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 20);
                    echo "</a><br /> ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 20)) {
                        // line 21
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 21));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 22
                            echo "            <span>";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 22);
                            echo "</span><small> ";
                            echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 22);
                            echo "</small><br /> ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo "            ";
                    }
                    // line 24
                    echo "            ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 24)) {
                        // line 25
                        echo "            <span>";
                        echo ($context["text_recurring"] ?? null);
                        echo "</span><small> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 25);
                        echo "</small> ";
                    }
                    echo "</td>
            <td class=\"text-right td-qty\">x ";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 26);
                    echo "</td>
            <td class=\"text-right td-total\">";
                    // line 27
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 27);
                    echo "</td>
            <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"cart.remove('";
                    // line 28
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 28);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"cart-remove\"><i class=\"fa fa-times-circle\"></i></button></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 32
                    echo "          <tr>
            <td class=\"text-center\"></td>
            <td class=\"text-left\">";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 34);
                    echo "</td>
            <td class=\"text-right\">x&nbsp;1</td>
            <td class=\"text-right\">";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 36);
                    echo "</td>
            <td class=\"text-center text-danger\"><button type=\"button\" onclick=\"voucher.remove('";
                    // line 37
                    echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 37);
                    echo "');\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-times\"></i></button></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        </table>
      </li>
      <li class=\"cart-totals\">
        <div>
          <table class=\"table table-bordered\">
            ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    // line 46
                    echo "            <tr>
              <td class=\"text-right td-total-title\">";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 47);
                    echo "</td>
              <td class=\"text-right td-total-text\">";
                    // line 48
                    echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 48);
                    echo "</td>
            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "          </table>
          <div class=\"cart-buttons\">
            <a class=\"btn-cart btn\" href=\"";
                // line 53
                echo ($context["cart"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_cart"] ?? null);
                echo "</span></a>
            <a class=\"btn-checkout btn\" href=\"";
                // line 54
                echo ($context["checkout"] ?? null);
                echo "\"><i class=\"fa\"></i><span>";
                echo ($context["text_checkout"] ?? null);
                echo "</span></a>
          </div>
        </div>
      </li>
      ";
            } else {
                // line 59
                echo "      <li>
        <p class=\"text-center cart-empty\">";
                // line 60
                echo ($context["text_empty"] ?? null);
                echo "</p>
      </li>
      ";
            }
            // line 63
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
        return array (  242 => 63,  236 => 60,  233 => 59,  223 => 54,  217 => 53,  213 => 51,  204 => 48,  200 => 47,  197 => 46,  193 => 45,  186 => 40,  175 => 37,  171 => 36,  166 => 34,  162 => 32,  157 => 31,  146 => 28,  142 => 27,  138 => 26,  129 => 25,  126 => 24,  123 => 23,  113 => 22,  108 => 21,  101 => 20,  89 => 18,  87 => 17,  84 => 16,  80 => 15,  76 => 13,  74 => 12,  63 => 8,  60 => 7,  54 => 5,  52 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/cart.twig", "");
    }
}
