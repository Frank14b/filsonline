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

/* journal3/template/journal3/headers/desktop/slim.twig */
class __TwigTemplate_8dea282a703de5a1e3500bbd7ebbfc7c20f53fabe80432dbabf8a53879beaacb extends \Twig\Template
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
        echo "<div class=\"header header-compact header-sm\">
\t<div class=\"top-bar navbar-nav row\">

\t\t";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 4), "get", [0 => "langPosition"], "method", false, false, false, 4) == "top")) {
            // line 5
            echo "\t\t\t<div class=\"col-md-4 language-currency top-menu\" style=\"margin-bottom:-10px; padding-bottom:3px;\">
\t\t\t\t<div class=\"desktop-language-wrapper\" style=\"border-right: 1px solid #aaa; padding-right:5px; margin-top: -10px;\">
\t\t\t\t\t";
            // line 7
            echo ($context["language"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"desktop-currency-wrapper\" style=\"border-right: 1px solid #fff; padding-right:5px; margin-top: -10px;\">
\t\t\t\t\t";
            // line 10
            echo ($context["currency"] ?? null);
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"third-menu\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 12), "get", [0 => "desktop_top_menu_3"], "method", false, false, false, 12);
            echo "</div>
\t\t\t</div>
\t\t";
        }
        // line 15
        echo "
\t\t<div class=\"col-md-4\" style=\"font-size:11px; float:right; margin-top:-10px; margin-right:5%;\">
\t\t\t<a class=\"bold-600\"></a>
\t\t</div>

\t\t";
        // line 21
        echo "
\t\t<div class=\"col-md-4\" style=\"text-align: right\">
\t\t\t";
        // line 26
        echo "\t\t\t</label>
\t\t\t";
        // line 28
        echo "\t\t</div>

\t</div>

\t<div
\t\tclass=\"mid-bar navbar-nav\">
\t\t";
        // line 37
        echo "\t\t<div class=\"desktop-logo-wrapper col-md-3\">
\t\t\t<div id=\"logo\">
\t\t\t\t";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 39), "get", [0 => "logo_src"], "method", false, false, false, 39)) {
            // line 40
            echo "\t\t\t\t\t<a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "logo_src"], "method", false, false, false, 41);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "logo2x_src"], "method", false, false, false, 41)) {
                echo " srcset=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "logo_src"], "method", false, false, false, 41);
                echo " 1x, ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "logo2x_src"], "method", false, false, false, 41);
                echo " 2x\" ";
            }
            echo " width=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "logo_width"], "method", false, false, false, 41);
            echo "\" height=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "logo_height"], "method", false, false, false, 41);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\"/>
\t\t\t\t\t</a>
\t\t\t\t";
        } else {
            // line 44
            echo "\t\t\t\t\t<h1>
\t\t\t\t\t\t<a href=\"";
            // line 45
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a>
\t\t\t\t\t</h1>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"desktop-search-wrapper col-md-5 full-search\">
\t\t\t";
        // line 51
        echo ($context["search"] ?? null);
        echo "
\t\t</div>

\t\t<div class=\"header-cart-group\">
\t\t\t";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 55), "get", [0 => "langPosition"], "method", false, false, false, 55) == "search")) {
            // line 56
            echo "\t\t\t\t<div class=\"language-currency top-menu\">

\t\t\t<!--xml start-->
\t\t\t <div class=\"top-menu\">
\t\t\t\t<ul class=\"j-menu seller\">
\t\t\t\t<!--/* tmd vendor2 seler condtion  */-->
\t\t\t\t";
            // line 62
            if ((($context["customer2vendor"] ?? null) == 1)) {
                // line 63
                echo "\t\t\t\t<li class=\"tmd-menubox\"><a href=\"";
                echo ($context["allseller"] ?? null);
                echo "\"><i class=\"fa fa-users fa-fw\"></i> <span class=\"m-text\">";
                echo ($context["text_allseller"] ?? null);
                echo "</span></a></li>
\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t";
            if (($context["vendorlogged"] ?? null)) {
                // line 66
                echo "\t\t\t\t<li class=\"dropdown tmd_vendorsub\"><a href=\"#\" title=\"";
                echo ($context["text_selleraccount"] ?? null);
                echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-users\"></i> <span class=\"m-text\">";
                echo ($context["text_selleraccount"] ?? null);
                echo "</span></a>
\t\t\t\t  <ul class=\"dropdown-menu dropdown-menu-right \">

\t\t\t\t\t<li><a href=\"";
                // line 69
                echo ($context["vendor_profile"] ?? null);
                echo "\"><i class=\"fa fa-user fa-fw\"></i> ";
                echo ($context["text_profile"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 70
                echo ($context["dashboard"] ?? null);
                echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> ";
                echo ($context["text_dashboard"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 71
                echo ($context["products"] ?? null);
                echo "\"><i class=\"fa fa-list fa-fw\"></i> ";
                echo ($context["text_products"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 72
                echo ($context["review"] ?? null);
                echo "\"><i class=\"fa fa-star fa-fw\"></i> ";
                echo ($context["text_review"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 73
                echo ($context["managestore"] ?? null);
                echo "\"><i class=\"fa fa-cog fa-fw\"></i> ";
                echo ($context["text_managestore"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 74
                echo ($context["manageprofile"] ?? null);
                echo "\"><i class=\"fa fa-user fa-fw\"></i> ";
                echo ($context["text_manageprofile"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 75
                echo ($context["vdownload"] ?? null);
                echo "\"><i class=\"fa fa-cloud-download fa-fw\"></i> ";
                echo ($context["text_download"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 76
                echo ($context["manufacture"] ?? null);
                echo "\"><i class=\"fa fa-thumb-tack fa-fw\"></i> ";
                echo ($context["text_manufacture"] ?? null);
                echo "</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 77
                echo ($context["logouts"] ?? null);
                echo "\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
                echo ($context["text_logout"] ?? null);
                echo "</a></li>

\t\t\t\t  </ul>
\t\t\t\t </li>
\t\t\t\t";
            } else {
                // line 82
                echo "\t\t\t\t <li class=\"tmd-menubox\"><a href=\"";
                echo ($context["sellerlogin"] ?? null);
                echo "\"><i class=\"fa fa-sign-in fa-fw\"></i> <span class=\"m-text\">";
                echo ($context["text_loginseller"] ?? null);
                echo "</span></a></li>
\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<style>
\t\t\t\t\t.language-currency .top-menu{
\t\t\t\t\t pointer-events: all;
\t\t\t\t\t}
\t\t\t\t\t.tmd_vendorsub::after{display:none;}
\t\t\t\t</style>
\t\t\t<!--xml end-->
\t\t\t\t\t<div class=\"desktop-language-wrapper\">
\t\t\t\t\t\t";
            // line 94
            echo ($context["language"] ?? null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"desktop-currency-wrapper\">
\t\t\t\t\t\t";
            // line 97
            echo ($context["currency"] ?? null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 101
        echo "\t\t\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 101), "get", [0 => "secondaryMenuPosition"], "method", false, false, false, 101) == "cart")) {
            // line 102
            echo "\t\t\t\t<div class=\"top-menu secondary-menu\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "desktop_top_menu_2"], "method", false, false, false, 102);
            echo "</div>
\t\t\t";
        }
        // line 104
        echo "\t\t\t<div class=\"desktop-cart-wrapper\">
\t\t\t\t";
        // line 105
        echo ($context["cart"] ?? null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Custom menu (3rd menu ) available only on desktop screen more than 1024px -->
<div class=\"row custom-menu-div\" style=\"background:#E6E6E6; min-height: 30px;\">
</div>

<style>
\t.top-menu-item-6 {
\t\tdisplay: none;
\t}
\t.custom-menu-div {
\t\tbox-shadow: rgba(0, 0, 0, 0.15) 0px 1px 2px !important;
\t}

\t";
        // line 127
        echo "
\t@media only screen and (max-width: 1024px) {
\t\t.custom-menu-div, .language-text, .currency-text{
\t\t\tdisplay: none;
\t\t}
\t}

\t.bold-600 {
\t\tfont-weight: 600 !important;
\t}

  .top-menu-14 .j-menu li.top-menu-item-1>a::before,
  .top-menu-14 .j-menu li.top-menu-item-5>a::before,
  #cart>a>i::before {
    color: rgba(140, 187, 13, 0.993) !important;
  }
</style>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/headers/desktop/slim.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 127,  278 => 105,  275 => 104,  269 => 102,  266 => 101,  259 => 97,  253 => 94,  241 => 84,  233 => 82,  223 => 77,  217 => 76,  211 => 75,  205 => 74,  199 => 73,  193 => 72,  187 => 71,  181 => 70,  175 => 69,  166 => 66,  163 => 65,  155 => 63,  153 => 62,  145 => 56,  143 => 55,  136 => 51,  131 => 48,  123 => 45,  120 => 44,  98 => 41,  93 => 40,  91 => 39,  87 => 37,  79 => 28,  76 => 26,  72 => 21,  65 => 15,  59 => 12,  54 => 10,  48 => 7,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/headers/desktop/slim.twig", "C:\\xampp\\htdocs\\test2\\system\\storage\\modification\\catalog\\view\\theme\\journal3\\template\\journal3\\headers\\desktop\\slim.twig");
    }
}
