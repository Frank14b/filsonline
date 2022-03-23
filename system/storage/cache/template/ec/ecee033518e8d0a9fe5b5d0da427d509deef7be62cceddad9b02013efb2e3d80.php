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

/* journal3/template/journal3/headers/mobile/header_mobile_1.twig */
class __TwigTemplate_0997becdd9face9aa655d47794b53a0f2a7a932d89295551632a4939cf6cc067 extends \Twig\Template
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
        echo "<div class=\"mobile-header mobile-default mobile-1\">
  <div class=\"mobile-top-bar\">
    <div class=\"mobile-top-menu-wrapper\">
    
    </div>
    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 6), "get", [0 => "mobileLangPosition"], "method", false, false, false, 6) == "top")) {
            // line 7
            echo "    <div class=\"language-currency top-menu\">
      <div class=\"mobile-currency-wrapper\">
        ";
            // line 9
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 9), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 9)) ? (($context["currency"] ?? null)) : (""));
            echo "
      </div>
      <div class=\"mobile-language-wrapper\">
        ";
            // line 12
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 12), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 12)) ? (($context["language"] ?? null)) : (""));
            echo "
      </div>
    </div>
    ";
        }
        // line 16
        echo "  </div>
  <div class=\"mobile-bar sticky-bar\">
    <div class=\"mobile-logo-wrapper\">
      ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 19), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 19)) {
            // line 20
            echo "        <div id=\"logo\">
          ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "logo_src"], "method", false, false, false, 21)) {
                // line 22
                echo "            <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
              <img src=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "logo_src"], "method", false, false, false, 23);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "logo2x_src"], "method", false, false, false, 23)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "logo_src"], "method", false, false, false, 23);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "logo2x_src"], "method", false, false, false, 23);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "logo_width"], "method", false, false, false, 23);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 23), "get", [0 => "logo_height"], "method", false, false, false, 23);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
            </a>
          ";
            } else {
                // line 26
                echo "            <h1><a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["name"] ?? null);
                echo "</a></h1>
          ";
            }
            // line 28
            echo "        </div>
      ";
        }
        // line 30
        echo "    </div>
    <div class=\"mobile-bar-group\">
      <div class=\"menu-trigger\"></div>
      ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "mobileCustomMenuStatus1"], "method", false, false, false, 33)) {
            // line 34
            echo "      <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "mobileCustomMenuLink1.href"], "method", false, false, false, 34);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "mobileCustomMenuLink1.attrs"], "method", false, false, false, 34)], "method", false, false, false, 34);
            echo ">
        ";
            // line 35
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "mobileCustomMenuLink1.name"], "method", false, false, false, 35), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 35), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "mobileCustomMenuLink1.total"], "method", false, false, false, 35)], "method", false, false, false, 35), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "mobileCustomMenuLink1.classes"], "method", false, false, false, 35)], "method", false, false, false, 35);
            echo "
      </a>
      ";
        }
        // line 38
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 38), "get", [0 => "mobileCustomMenuStatus2"], "method", false, false, false, 38)) {
            // line 39
            echo "      <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 39), "get", [0 => "mobileCustomMenuLink2.href"], "method", false, false, false, 39);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 39), "get", [0 => "mobileCustomMenuLink2.attrs"], "method", false, false, false, 39)], "method", false, false, false, 39);
            echo ">
        ";
            // line 40
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 40), "get", [0 => "mobileCustomMenuLink2.name"], "method", false, false, false, 40), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 40), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 40), "get", [0 => "mobileCustomMenuLink2.total"], "method", false, false, false, 40)], "method", false, false, false, 40), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 40), "get", [0 => "mobileCustomMenuLink2.classes"], "method", false, false, false, 40)], "method", false, false, false, 40);
            echo "
      </a>
      ";
        }
        // line 43
        echo "      <div class=\"mobile-search-wrapper mini-search\">
        ";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 44), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 44)) ? (($context["search"] ?? null)) : (""));
        echo "
      </div>
      <div class=\"mobile-cart-wrapper mini-cart\">
        ";
        // line 47
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 47), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 47)) ? (($context["cart"] ?? null)) : (""));
        echo "
      </div>
    </div>
  </div>
</div>

<style>
  @media only screen and (max-width: 1024px) {
\t\t.custom-menu-div, .language-text, .currency-text{
\t\t\tdisplay: none;
\t\t}
\t}
</style>";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/mobile/header_mobile_1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 47,  153 => 44,  150 => 43,  144 => 40,  137 => 39,  134 => 38,  128 => 35,  121 => 34,  119 => 33,  114 => 30,  110 => 28,  102 => 26,  80 => 23,  75 => 22,  73 => 21,  70 => 20,  68 => 19,  63 => 16,  56 => 12,  50 => 9,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/mobile/header_mobile_1.twig", "C:\\xampp\\htdocs\\test2\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\mobile\\header_mobile_1.twig");
    }
}
