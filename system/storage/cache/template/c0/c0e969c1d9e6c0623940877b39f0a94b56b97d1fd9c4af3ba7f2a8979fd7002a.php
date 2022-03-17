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
class __TwigTemplate_e3f2ebc78b6458b695233d56752628c531d2d01e46a178f11bc4f64bfebb3906 extends \Twig\Template
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
          <img class=\"img-active\" src=\"catalog/view/theme/journal3/image/goldmarket-active.png\"/>
        </div>
\t\t\t\t<label class=\"card-item-text\">GOLD MARKET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
          <img class=\"normal\" src=\"catalog/view/theme/journal3/image/from1to10.png\"/>
          <img class=\"img-active\" src=\"catalog/view/theme/journal3/image/from1to10-active.png\"/>
        </div>
\t\t\t\t<label class=\"card-item-text\">FROM 1-10 AED</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
          <img class=\"normal\" src=\"catalog/view/theme/journal3/image/outlet.png\"/>
          <img class=\"img-active\" src=\"catalog/view/theme/journal3/image/outlet-active.png\"/>
        </div>
\t\t\t\t<label class=\"card-item-text\">OUTLET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
          <img class=\"normal\" src=\"catalog/view/theme/journal3/image/bestdeals.png\"/>
          <img class=\"img-active\" src=\"catalog/view/theme/journal3/image/bestdeals-active.png\"/>
        </div>
\t\t\t\t<label class=\"card-item-text\">BEST DEALS</label>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<style>
/* card eleemnts custom css */
\t.first-items .caard-item .card-item-img {
\t\twidth: 100px;
\t\theight: 100px;
\t\tbackground: rgba(140, 187, 13, 0.993);
\t\tmargin: auto;
    border-radius: 5%;
    position: relative;
\t}
  .first-items .caard-item .card-item-img .img-active {
    display: none;
\t}
  .first-items .caard-item .card-item-img:hover {
    background: #111;
    border: 2px solid rgba(140, 187, 13, 0.993);
  }
  .first-items .caard-item .card-item-img:hover .img-active{
    display: block;
  }
  .first-items .caard-item .card-item-img:hover .normal{
    display: none;
  }
\t.first-items .caard-item {
\t\ttext-align: center;
\t}
  .first-items .caard-item .card-item-text {
    font-weight: 800;
  }
  .first-items .caard-item .card-item-img img {
    object-fit: contain;
    object-position: middle;
    width: 100px;
\t\theight: 90px;
    padding: 0.5em;
\t}

  /** home slide custom css */
  .ms-view {
    border-radius: 3em;
    box-shadow: rgba(50, 50, 93, 0.55) 0px 13px 27px 5px, rgba(0, 0, 0, 0.5) 0px 8px 16px -8px; 
  }
  .ms-time-bar {
    display: none;
  }

  /** module module-catalog-119 css custom */
  .module-catalog-119 .title.module-title {
    text-align: center;
    text-transform: capitalize;
  }
  .grid-item-top-3-1-1 {
    margin-bottom: 80px;
  }
  .grid-item-top-3-1-1 .module-item {
    width: 80px !important;
    height: 80px !important;
    font-size: 11px;
    text-align: center;
    margin: auto;
  }
  .grid-item-top-3-1-1 .module-item .item-content {
    text-align: center;
  }
  .grid-item-top-3-1-1 .module-item .item-content .catalog-title{
    
  }
  .grid-item-top-3-1-1 .module-item .item-content img {
    min-width: 80px !important;
    min-height: 80px !important;
    object-fit: scale-down;
  }
  .grid-item-top-3-1-1 .module-item .item-content .subitems{
    display: none;
  }
</style>

";
        // line 115
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 115);
        echo "
";
        // line 116
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 117
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 118
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 119
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 120
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 121
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 122
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 123
                echo "\t\t\t";
            } else {
                // line 124
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 125
                echo "\t\t\t";
            }
            // line 126
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 127
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 129
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 132
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 132);
        echo "
";
        // line 133
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
        return array (  210 => 133,  206 => 132,  199 => 129,  190 => 127,  187 => 126,  184 => 125,  181 => 124,  178 => 123,  175 => 122,  172 => 121,  169 => 120,  167 => 119,  163 => 118,  160 => 117,  158 => 116,  154 => 115,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
