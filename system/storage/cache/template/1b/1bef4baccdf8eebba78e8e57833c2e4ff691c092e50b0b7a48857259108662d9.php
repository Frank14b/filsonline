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
class __TwigTemplate_c8f36124c7b51a2eada374461160999c5c06f018cc2a1b3f16e56a4fbccecc43 extends \Twig\Template
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

";
        // line 37
        echo "
<style>
\t/* card eleemnts custom css */
  .icons-menu-385 {
    margin-top: -120px !important;
    margin-bottom: -40px !important;
  }
\t.icons-menu-385 .icon-menu-image img {
\t\tbackground: rgba(140, 187, 13, 0.993) !important;
\t\tborder-radius: 5%;
\t\tposition: relative;
\t\tbox-shadow: rgba(0, 0, 0, 0.24) 0 3px 8px !important;
    padding: 10px;
    margin: auto;
\t}
  .icons-menu-385 .icon-menu-image .links-text {
    color: #111 !important;
  }
  .icons-menu-385 .icon-menu-image img:hover {
    background: #555 !important;
\t\tborder: 2px solid rgba(140, 187, 13, 0.993);
  }

\t.first-items .caard-item .card-item-img {
\t\twidth: 100px;
\t\theight: 100px;
\t\tbackground: rgba(140, 187, 13, 0.993);
\t\tmargin: auto;
\t\tborder-radius: 5%;
\t\tposition: relative;
\t\tbox-shadow: rgba(0, 0, 0, 0.24) 0 3px 8px !important;
\t}
\t.first-items .caard-item .card-item-img .img-active {
\t\tdisplay: none;
\t}
\t.first-items .caard-item .card-item-img:hover {
\t\tbackground: #111;
\t\tborder: 2px solid rgba(140, 187, 13, 0.993);
\t}
\t.first-items .caard-item .card-item-img:hover .img-active {
\t\tdisplay: block;
\t}
\t.first-items .caard-item .card-item-img:hover .normal {
\t\tdisplay: none;
\t}
\t.first-items .caard-item {
\t\ttext-align: center;
\t}
\t.first-items .caard-item .card-item-text {
\t\tfont-weight: 800;
\t}
\t.first-items .caard-item .card-item-img img {
\t\tobject-fit: contain;
\t\tobject-position: middle;
\t\twidth: 100px;
\t\theight: 90px;
\t\tpadding: 0.5em;
\t}

\t/** home slide custom css */
\t.module-master_slider-333 .ms-view {
\t\tborder-radius: 3em;
\t\tbox-shadow: rgba(50, 50, 93, 0.55) 0 13px 27px 5px, rgba(0, 0, 0, 0.5) 0 8px 16px -8px;
\t}
\t.ms-slide {
\t\tborder-radius: 3em;
\t}
\t.ms-time-bar {
\t\tdisplay: none;
\t}

\t/** module module-catalog-119 css custom */
\t.module-catalog-119 .title.module-title {
\t\ttext-align: center;
\t\ttext-transform: capitalize;
\t}
\t.grid-item-top-2-1-1 {
\t\tmargin-bottom: 80px;
\t}
\t.grid-item-top-2-1-1 .module-item {
\t\twidth: 100px !important;
\t\theight: auto !important;
\t\tfont-size: 11px;
\t\ttext-align: center;
\t\tmargin: auto;
\t}
\t.grid-item-top-2-1-1 .module-item .item-content {
\t\ttext-align: center;
\t}
\t.grid-item-top-2-1-1 .module-item .item-content .catalog-title {
\t\twhite-space: nowrap;
\t\ttext-overflow: ellipsis;
\t}
\t.grid-item-top-2-1-1 .module-item .item-content img {
\t\tmin-width: 100px !important;
\t\tmin-height: 100px !important;
\t\tobject-fit: scale-down;
\t}
\t.grid-item-top-2-1-1 .module-item .item-content .subitems {
\t\tdisplay: none;
\t}
\t.catalog-title {
\t\tdisplay: block !important;
\t}
\t.module-catalog-119 .catalog-title {
\t\tmargin-right: 0 !important;
\t}
\t.item-assets {
\t\tdisplay: block !important;
\t}

\t/** banners custom css */

\t.module-products-360 {
\t\tmargin-bottom: 50px;
\t}

\t.module-banners-323 .module-item:not(.swiper-slide),
\t.module-banners-365 .module-item:not(.swiper-slide) {
\t\twidth: 100% !important;
\t}

\t/* first product caroussel custom css */
\t.module-products-359 .product-grid .product-thumb, 
\t.module-products-360 .product-grid .product-thumb,
\t.module-products-381 .product-grid .product-thumb,
\t.module-products-390 .product-grid .product-thumb{
\t\tborder-radius: 15px !important;
\t\tbox-shadow: rgba(0, 0, 0, 0.24) 0 3px 8px !important;
\t}
\t.module-products-359 .product-grid .product-thumb,
\t.module-products-390 .product-grid .product-thumb {
\t\tmargin: 5px !important;
\t}
\t.module-products-360 .product-layout.swiper-slide {
\t\tmargin: 5px;
\t}
\t.module-products-360 .product-grid .product-thumb .product-img {
\t\tborder-width: 0 !important;
\t}

\t/** home coupon zone custom css */
\t.grid-col-top-4-8 {
\t\tposition: relative;
\t\theight: 350px;
\t}
\t/** brands custom css */
\t.module-manufacturers-317 .category-thumb .image,
\t.grid-item-top-6-1-2 .manufacturer-thumb .image {
\t\tbackground: url(\"catalog/view/theme/journal3/image/bg-outlet.png\")center/cover;
\t\tborder-radius: 7px !important;
\t\tpadding: 20px;
\t}
\t.category-thumb .image,
\t.grid-item-top-6-1-2 .manufacturer-thumb .image img {
\t\tborder-radius: 7px !important;
\t}
\t.grid-item-top-6-1-2 .manufacturer-thumb .caption {
\t\tdisplay: none;
\t}
\t.module-manufacturers-317 .manufacturer-layout:not(.swiper-slide) {
\t\tpadding: 6px !important;
\t}
\t/** categories css custom */
\t.module-categories-372 .category-thumb {
\t\tpadding: 10px;
\t}

\t.module-categories-379 .category-layout:not(.swiper-slide) {
\t\tpadding: 10px
\t}
\t.module-grid-392 .grid-row-1 .grid-col-1 {
\t\tmargin-top: -100px;
\t}
\t.colCounter{
\t\tmargin-top: -10px;
\t\ttext-align: center;
\t\tcolor: #fff;
\t\tfont-weight: bold;
\t}

\t.colCounter label {
\t\tbackground: #f5f5f5;
\t\tcolor: #222;
\t\tmargin: 15px;
\t\tpadding: 15px;
\t\tpadding-left: 20px;
\t\tpadding-right: 20px;
\t\tfont-size: 40px;
\t\tfont-weight: bold;
\t\tborder-radius: 15px;
\t}
</style>

";
        // line 231
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 231);
        echo "
";
        // line 232
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 233
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 234
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 235
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 236
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 237
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 238
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 239
                echo "\t\t\t";
            } else {
                // line 240
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 241
                echo "\t\t\t";
            }
            // line 242
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 243
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 245
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 248
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 248);
        echo "
";
        // line 249
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
        return array (  294 => 249,  290 => 248,  283 => 245,  274 => 243,  271 => 242,  268 => 241,  265 => 240,  262 => 239,  259 => 238,  256 => 237,  253 => 236,  251 => 235,  247 => 234,  244 => 233,  242 => 232,  238 => 231,  42 => 37,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
