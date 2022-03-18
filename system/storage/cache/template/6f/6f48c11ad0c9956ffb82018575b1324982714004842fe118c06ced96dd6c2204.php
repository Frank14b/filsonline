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
class __TwigTemplate_28d456479959c560e276caf73d182f156b6d78c8094935e4cf2b2cbacb3e2add extends \Twig\Template
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
  .module-master_slider-333 .ms-view {
    border-radius: 3em;
    box-shadow: rgba(50, 50, 93, 0.55) 0px 13px 27px 5px, rgba(0, 0, 0, 0.5) 0px 8px 16px -8px; 
  }
  .ms-slide {
    border-radius: 3em;
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
  }

  .module-banners-323 .module-item:not(.swiper-slide), 
  .module-banners-365 .module-item:not(.swiper-slide) {
    width: 100% !important;
  }

  /* first product caroussel custom css */
  .module-products-359 .product-grid .product-thumb {
    margin: 5px !important;
    border-radius: 15px !important;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px !important;
  }
  .module-products-360 .product-layout.swiper-slide {
    margin: 5px;
  }
  .module-products-360 .product-grid .product-thumb .product-img {
    border-width: 0px !important;
  }

  /** home coupon zone custom css */
  .grid-col-top-4-8 {
    position: relative;
    height: 350px;
  }
  /** brands custom css */
  .module-manufacturers-317 .category-thumb .image, .manufacturer-thumb .image {
    background: #f5f5f5;
    border-radius: 7px !important;
    padding: 8px;
  }
  .category-thumb .image, .manufacturer-thumb .image img {
    border-radius: 7px !important;
  }
  .manufacturer-thumb .caption {
    display: none;
  }
  .module-manufacturers-317 .manufacturer-layout:not(.swiper-slide) {
    padding: 6px !important;
  }
  /** categories css custom */
  .module-categories-372 .category-thumb{
    padding: 10px;
  }
</style>

";
        // line 177
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 177);
        echo "
";
        // line 178
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 179
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 180
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 181
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 182
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 183
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 184
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 185
                echo "\t\t\t";
            } else {
                // line 186
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 187
                echo "\t\t\t";
            }
            // line 188
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 189
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 191
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 194
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 194);
        echo "
";
        // line 195
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
        return array (  272 => 195,  268 => 194,  261 => 191,  252 => 189,  249 => 188,  246 => 187,  243 => 186,  240 => 185,  237 => 184,  234 => 183,  231 => 182,  229 => 181,  225 => 180,  222 => 179,  220 => 178,  216 => 177,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
