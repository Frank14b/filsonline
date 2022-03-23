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
class __TwigTemplate_0577580bb28cf7d391b176ec25a22420aa56511fe12209ed6d20d46ac88f8ff5 extends \Twig\Template
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

\t\t\t<!--xml start-->
\t\t\t <div class=\"top-menu\">
\t\t\t\t<ul class=\"j-menu seller\">
\t\t\t\t<!--/* tmd vendor2 seler condtion  */-->
\t\t\t\t";
            // line 13
            if ((($context["customer2vendor"] ?? null) == 1)) {
                // line 14
                echo "\t\t\t\t<li class=\"tmd-menubox\"><a href=\"";
                echo ($context["allseller"] ?? null);
                echo "\"><i class=\"fa fa-users fa-fw\"></i> <span class=\"m-text\">";
                echo ($context["text_allseller"] ?? null);
                echo "</span></a></li>
\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t";
            if (($context["vendorlogged"] ?? null)) {
                // line 17
                echo "\t\t\t\t<li class=\"dropdown tmd_vendorsub\"><a href=\"#\" title=\"";
                echo ($context["text_selleraccount"] ?? null);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-users\"></i> <span class=\"m-text\">";
                echo ($context["text_selleraccount"] ?? null);
                echo "</span></a>
\t\t\t\t  <ul class=\"dropdown-menu dropdown-menu-right \">

\t\t\t\t\t<li><a href=\"";
                // line 20
                echo ($context["vendor_profile"] ?? null);
                echo "\"><i class=\"fa fa-user fa-fw\"></i> ";
                echo ($context["text_profile"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 21
                echo ($context["dashboard"] ?? null);
                echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> ";
                echo ($context["text_dashboard"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 22
                echo ($context["products"] ?? null);
                echo "\"><i class=\"fa fa-list fa-fw\"></i> ";
                echo ($context["text_products"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 23
                echo ($context["review"] ?? null);
                echo "\"><i class=\"fa fa-star fa-fw\"></i> ";
                echo ($context["text_review"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 24
                echo ($context["managestore"] ?? null);
                echo "\"><i class=\"fa fa-cog fa-fw\"></i> ";
                echo ($context["text_managestore"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 25
                echo ($context["manageprofile"] ?? null);
                echo "\"><i class=\"fa fa-user fa-fw\"></i> ";
                echo ($context["text_manageprofile"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 26
                echo ($context["vdownload"] ?? null);
                echo "\"><i class=\"fa fa-cloud-download fa-fw\"></i> ";
                echo ($context["text_download"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 27
                echo ($context["manufacture"] ?? null);
                echo "\"><i class=\"fa fa-thumb-tack fa-fw\"></i> ";
                echo ($context["text_manufacture"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 28
                echo ($context["logouts"] ?? null);
                echo "\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
                echo ($context["text_logout"] ?? null);
                echo "</a></li>

\t\t\t\t  </ul>
\t\t\t\t </li>
\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t <li class=\"tmd-menubox\"><a href=\"";
                echo ($context["sellerlogin"] ?? null);
                echo "\"><i class=\"fa fa-sign-in fa-fw\"></i> <span class=\"m-text\">";
                echo ($context["text_loginseller"] ?? null);
                echo "</span></a></li>
\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<style>
\t\t\t\t\t.language-currency .top-menu{
\t\t\t\t\t pointer-events: all;
\t\t\t\t\t}
\t\t\t\t\t.tmd_vendorsub::after{display:none;}
\t\t\t\t</style>
\t\t\t<!--xml end-->
      <div class=\"mobile-currency-wrapper\">
        ";
            // line 45
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 45), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 45)) ? (($context["currency"] ?? null)) : (""));
            echo "
      </div>
      <div class=\"mobile-language-wrapper\">
        ";
            // line 48
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 48), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 48)) ? (($context["language"] ?? null)) : (""));
            echo "
      </div>
    </div>
    ";
        }
        // line 52
        echo "  </div>
  <div class=\"mobile-bar sticky-bar\">
    <div class=\"mobile-logo-wrapper\">
      ";
        // line 55
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 55), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 55)) {
            // line 56
            echo "        <div id=\"logo\">
          ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 57), "get", [0 => "logo_src"], "method", false, false, false, 57)) {
                // line 58
                echo "            <a href=\"";
                echo ($context["home"] ?? null);
                echo "\">
              <img src=\"";
                // line 59
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo_src"], "method", false, false, false, 59);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo2x_src"], "method", false, false, false, 59)) {
                    echo "srcset=\"";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo_src"], "method", false, false, false, 59);
                    echo " 1x, ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo2x_src"], "method", false, false, false, 59);
                    echo " 2x\"";
                }
                echo " width=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo_width"], "method", false, false, false, 59);
                echo "\" height=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 59), "get", [0 => "logo_height"], "method", false, false, false, 59);
                echo "\" alt=\"";
                echo ($context["name"] ?? null);
                echo "\" title=\"";
                echo ($context["name"] ?? null);
                echo "\"/>
            </a>
          ";
            } else {
                // line 62
                echo "            <h1><a href=\"";
                echo ($context["home"] ?? null);
                echo "\">";
                echo ($context["name"] ?? null);
                echo "</a></h1>
          ";
            }
            // line 64
            echo "        </div>
      ";
        }
        // line 66
        echo "    </div>
    <div class=\"mobile-bar-group\">
      <div class=\"menu-trigger\"></div>
      ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 69), "get", [0 => "mobileCustomMenuStatus1"], "method", false, false, false, 69)) {
            // line 70
            echo "      <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 70), "get", [0 => "mobileCustomMenuLink1.href"], "method", false, false, false, 70);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 70), "get", [0 => "mobileCustomMenuLink1.attrs"], "method", false, false, false, 70)], "method", false, false, false, 70);
            echo ">
        ";
            // line 71
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "mobileCustomMenuLink1.name"], "method", false, false, false, 71), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 71), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "mobileCustomMenuLink1.total"], "method", false, false, false, 71)], "method", false, false, false, 71), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "mobileCustomMenuLink1.classes"], "method", false, false, false, 71)], "method", false, false, false, 71);
            echo "
      </a>
      ";
        }
        // line 74
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 74), "get", [0 => "mobileCustomMenuStatus2"], "method", false, false, false, 74)) {
            // line 75
            echo "      <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 75), "get", [0 => "mobileCustomMenuLink2.href"], "method", false, false, false, 75);
            echo "\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "linkAttrs", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 75), "get", [0 => "mobileCustomMenuLink2.attrs"], "method", false, false, false, 75)], "method", false, false, false, 75);
            echo ">
        ";
            // line 76
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "countBadge", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => "mobileCustomMenuLink2.name"], "method", false, false, false, 76), 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "cache", [], "any", false, false, false, 76), "update", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => "mobileCustomMenuLink2.total"], "method", false, false, false, 76)], "method", false, false, false, 76), 2 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 76), "get", [0 => "mobileCustomMenuLink2.classes"], "method", false, false, false, 76)], "method", false, false, false, 76);
            echo "
      </a>
      ";
        }
        // line 79
        echo "      <div class=\"mobile-search-wrapper mini-search\">
        ";
        // line 80
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 80), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 80)) ? (($context["search"] ?? null)) : (""));
        echo "
      </div>
      <div class=\"mobile-cart-wrapper mini-cart\">
        ";
        // line 83
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 83), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 83)) ? (($context["cart"] ?? null)) : (""));
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
        return array (  263 => 83,  257 => 80,  254 => 79,  248 => 76,  241 => 75,  238 => 74,  232 => 71,  225 => 70,  223 => 69,  218 => 66,  214 => 64,  206 => 62,  184 => 59,  179 => 58,  177 => 57,  174 => 56,  172 => 55,  167 => 52,  160 => 48,  154 => 45,  142 => 35,  134 => 33,  124 => 28,  118 => 27,  112 => 26,  106 => 25,  100 => 24,  94 => 23,  88 => 22,  82 => 21,  76 => 20,  67 => 17,  64 => 16,  56 => 14,  54 => 13,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/mobile/header_mobile_1.twig", "C:\\xampp\\htdocs\\test2\\system\\storage\\modification\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\mobile\\header_mobile_1.twig");
    }
}
