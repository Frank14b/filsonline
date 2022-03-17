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
class __TwigTemplate_cc2c20c934fe40d6ff369ae34fa4d4da9a238b60998084d1c36f635d553090f3 extends \Twig\Template
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
    width: 100px !important;
    height: auto !important;
    font-size: 11px;
    text-align: center;
    margin:auto;
  }
  .grid-item-top-3-1-1 .module-item .item-content {
    text-align: center;
  }
  .grid-item-top-3-1-1 .module-item .item-content .catalog-title{
    white-space: nowrap;
    text-overflow: ellipsis;
  }
  .grid-item-top-3-1-1 .module-item .item-content img {
    min-width: 100px !important;
    min-height: 100px !important;
    object-fit: scale-down;
  }
  .grid-item-top-3-1-1 .module-item .item-content .subitems{
    display: none;
  }
  .catalog-title {
    display: block !important;
  }
  .module-catalog-119 .catalog-title {
    margin-right: 0 !important;
  }
  .item-assets{
    display: block !important;
  }

  /** banners custom css */

  .module-products-360 {
    margin-bottom: 50px;
    margin-top: -40px;
  }

  .module-banners-132 .module-item a img{
    object-fit: contain;
  }
</style>

";
        // line 136
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 136);
        echo "
";
        // line 137
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 138
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 139
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 140
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 141
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 142
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 143
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 144
                echo "\t\t\t";
            } else {
                // line 145
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 146
                echo "\t\t\t";
            }
            // line 147
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 148
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 150
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 153
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 153);
        echo "
";
        // line 154
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
        return array (  231 => 154,  227 => 153,  220 => 150,  211 => 148,  208 => 147,  205 => 146,  202 => 145,  199 => 144,  196 => 143,  193 => 142,  190 => 141,  188 => 140,  184 => 139,  181 => 138,  179 => 137,  175 => 136,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
