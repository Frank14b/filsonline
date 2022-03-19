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

/* journal3/template/common/currency.twig */
class __TwigTemplate_1201b142a6ad9afc68a520e132a2e3df05400ae5edb998561880736658678bba extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1), "get", [0 => "catalogCurrencyStatus"], "method", false, false, false, 1)) {
            // line 2
            if ((twig_length_filter($this->env, ($context["currencies"] ?? null)) > 1)) {
                // line 3
                echo "  ";
                $context["current_currency"] = null;
                // line 4
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 5
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null))) {
                        // line 6
                        echo "      ";
                        $context["current_currency"] = $context["currency"];
                        // line 7
                        echo "    ";
                    }
                    // line 8
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "  ";
                // line 10
                echo "  <div id=\"currency\" class=\"currency\">
    <form action=\"";
                // line 11
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
      <div class=\"dropdown drop-menu\">
        <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"currency-symbol-title\" style=\"color:#444; text-transform: capitalize\">
            ";
                // line 15
                if (twig_get_attribute($this->env, $this->source, ($context["current_currency"] ?? null), "symbol_left", [], "any", false, false, false, 15)) {
                    // line 16
                    echo "              <span class=\"symbol\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["current_currency"] ?? null), "symbol_left", [], "any", false, false, false, 16);
                    echo "</span>
              <span class=\"currency-title\">";
                    // line 17
                    echo twig_get_attribute($this->env, $this->source, ($context["current_currency"] ?? null), "title", [], "any", false, false, false, 17);
                    echo "</span>
              <span class=\"currency-code\">";
                    // line 18
                    echo twig_get_attribute($this->env, $this->source, ($context["current_currency"] ?? null), "code", [], "any", false, false, false, 18);
                    echo "</span>
            ";
                } else {
                    // line 20
                    echo "              <span class=\"symbol\">";
                    echo twig_get_attribute($this->env, $this->source, ($context["current_currency"] ?? null), "symbol_right", [], "any", false, false, false, 20);
                    echo "</span>
              <span class=\"currency-title\">";
                    // line 21
                    echo twig_get_attribute($this->env, $this->source, ($context["current_currency"] ?? null), "title", [], "any", false, false, false, 21);
                    echo "</span>
              <span class=\"currency-code\">";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, ($context["current_currency"] ?? null), "code", [], "any", false, false, false, 22);
                    echo "</span>
            ";
                }
                // line 24
                echo "          </span>
        </button>
        <div class=\"dropdown-menu j-dropdown\">
          <ul class=\"j-menu\">
            ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 29
                    echo "              ";
                    if (twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 29)) {
                        // line 30
                        echo "                <li>
                  <a class=\"currency-select\" data-name=\"";
                        // line 31
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 31);
                        echo "\">
                    <span class=\"currency-symbol\">";
                        // line 32
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 32);
                        echo "</span>
                    <span class=\"currency-title-dropdown\">";
                        // line 33
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 33);
                        echo "</span>
                    <span class=\"currency-code-dropdown\">";
                        // line 34
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 34);
                        echo "</span>
                  </a>
                </li>
              ";
                    } else {
                        // line 38
                        echo "                <li>
                  <a class=\"currency-select\" data-name=\"";
                        // line 39
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 39);
                        echo "\">
                    <span class=\"currency-symbol\">";
                        // line 40
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 40);
                        echo "</span>
                    <span class=\"currency-title-dropdown\">";
                        // line 41
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 41);
                        echo "</span>
                    <span class=\"currency-code-dropdown\">";
                        // line 42
                        echo twig_get_attribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 42);
                        echo "</span>
                  </a>
                </li>
              ";
                    }
                    // line 46
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "          </ul>
        </div>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\"/>
      <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 51
                echo ($context["redirect"] ?? null);
                echo "\"/>
    </form>
  </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 51,  169 => 47,  163 => 46,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  141 => 38,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  119 => 30,  116 => 29,  112 => 28,  106 => 24,  101 => 22,  97 => 21,  92 => 20,  87 => 18,  83 => 17,  78 => 16,  76 => 15,  69 => 11,  66 => 10,  64 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/currency.twig", "");
    }
}
