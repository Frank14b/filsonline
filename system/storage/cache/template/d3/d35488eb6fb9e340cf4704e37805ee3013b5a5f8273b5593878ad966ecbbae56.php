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

/* journal3/template/common/home.twig */
class __TwigTemplate_ad569a3305f268b180d72edd2de1a3876e73abe28ce137569fb27edcb414d1e4 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo "

<div class=\"container first-items\">
\t<div class=\"col-md-10\" style=\"margin:auto; padding-top: 2em\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
          <img class=\"normal\" src=\"catalog/view/theme/journal3/image/goldmarket.png\"/>
          <img class=\"active\" src=\"catalog/view/theme/journal3/image/goldmarket-active.png\"/>
        </div>
\t\t\t\t<label class=\"card-item-text\">GOLD MARKET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
          <img class=\"normal\" src=\"catalog/view/theme/journal3/image/from1to10.png\"/>
          <img class=\"active\" src=\"catalog/view/theme/journal3/image/from1to10-active.png\"/>
        </div>
\t\t\t\t<label class=\"card-item-text\">FROM 1-10 AED</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\"></div>
\t\t\t\t<label class=\"card-item-text\">OUTLET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
          <img class=\"normal\" src=\"catalog/view/theme/journal3/image/bestdeals.png\"/>
          <img class=\"active\" src=\"catalog/view/theme/journal3/image/bestdeals-active.png\"/>
        </div>
\t\t\t\t<label class=\"card-item-text\">BEST DEALS</label>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<style>
\t.first-items .caard-item .card-item-img {
\t\twidth: 100px;
\t\theight: 100px;
\t\tbackground: rgba(140, 187, 13, 0.993);
\t\tmargin: auto;
    border-radius: 5%;
    position: relative;
\t}
  .first-items .caard-item .card-item-img .active {
    display: none;
\t}
  .first-items .caard-item .card-item-img:hover {
    background: #111;
    border: 2px solid rgba(140, 187, 13, 0.993);
  }
  .first-items .caard-item .card-item-img:hover .first-items .caard-item .card-item-img .active{
    display: block;
  }
  .first-items .caard-item .card-item-img:hover .first-items .caard-item .card-item-img .normal{
    display: none;
  }
\t.first-items .caard-item {
\t\ttext-align: center;
\t}
  .first-items .caard-item .card-item-text {
    font-weight: 800;
  }
  .first-items .caard-item .card-item-img img {
    width: 100%;
    object-fit: contain;
    object-position: middle;
    width: auto;
\t\theight: 90px;
    padding: 0.5em;
\t}
</style>

";
        // line 73
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 73);
        echo "
";
        // line 74
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 75
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 76
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 77
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 78
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 79
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 80
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 81
                echo "\t\t\t";
            } else {
                // line 82
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 83
                echo "\t\t\t";
            }
            // line 84
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 85
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 87
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 90
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 90);
        echo "
";
        // line 91
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 91,  164 => 90,  157 => 87,  148 => 85,  145 => 84,  142 => 83,  139 => 82,  136 => 81,  133 => 80,  130 => 79,  127 => 78,  125 => 77,  121 => 76,  118 => 75,  116 => 74,  112 => 73,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
