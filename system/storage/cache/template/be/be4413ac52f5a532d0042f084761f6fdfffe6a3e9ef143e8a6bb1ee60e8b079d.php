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
class __TwigTemplate_edb0368f2b70c9b90486de01fce426487aa339943f1642468be14b35768db7a4 extends \Twig\Template
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
\t\t\t\t\t<img class=\"normal\" src=\"catalog/view/theme/journal3/image/goldmarket.png\"/>
\t\t\t\t\t<img class=\"img-active\" src=\"catalog/view/theme/journal3/image/goldmarket-active.png\"/>
\t\t\t\t</div>
\t\t\t\t<label class=\"card-item-text\">GOLD MARKET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
\t\t\t\t\t<img class=\"normal\" src=\"catalog/view/theme/journal3/image/from1to10.png\"/>
\t\t\t\t\t<img class=\"img-active\" src=\"catalog/view/theme/journal3/image/from1to10-active.png\"/>
\t\t\t\t</div>
\t\t\t\t<label class=\"card-item-text\">FROM 1-10 AED</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
\t\t\t\t\t<img class=\"normal\" src=\"catalog/view/theme/journal3/image/outlet.png\"/>
\t\t\t\t\t<img class=\"img-active\" src=\"catalog/view/theme/journal3/image/outlet-active.png\"/>
\t\t\t\t</div>
\t\t\t\t<label class=\"card-item-text\">OUTLET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
\t\t\t\t\t<img class=\"normal\" src=\"catalog/view/theme/journal3/image/bestdeals.png\"/>
\t\t\t\t\t<img class=\"img-active\" src=\"catalog/view/theme/journal3/image/bestdeals-active.png\"/>
\t\t\t\t</div>
\t\t\t\t<label class=\"card-item-text\">BEST DEALS</label>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<style>
\t/* card eleemnts custom css */

\t.icons-menu-385 .icon-menu-image img {
\t\tbackground: rgba(140, 187, 13, 0.993) !important;
\t\tborder-radius: 5%;
\t\tposition: relative;
\t\tbox-shadow: rgba(0, 0, 0, 0.24) 0 3px 8px !important;
\t}


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
\t.grid-item-top-3-1-1 {
\t\tmargin-bottom: 80px;
\t}
\t.grid-item-top-3-1-1 .module-item {
\t\twidth: 100px !important;
\t\theight: auto !important;
\t\tfont-size: 11px;
\t\ttext-align: center;
\t\tmargin: auto;
\t}
\t.grid-item-top-3-1-1 .module-item .item-content {
\t\ttext-align: center;
\t}
\t.grid-item-top-3-1-1 .module-item .item-content .catalog-title {
\t\twhite-space: nowrap;
\t\ttext-overflow: ellipsis;
\t}
\t.grid-item-top-3-1-1 .module-item .item-content img {
\t\tmin-width: 100px !important;
\t\tmin-height: 100px !important;
\t\tobject-fit: scale-down;
\t}
\t.grid-item-top-3-1-1 .module-item .item-content .subitems {
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
\t.module-products-359 .product-grid .product-thumb {
\t\tmargin: 5px !important;
\t\tborder-radius: 15px !important;
\t\tbox-shadow: rgba(0, 0, 0, 0.24) 0 3px 8px !important;
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
\t.manufacturer-thumb .image {
\t\tbackground: #f5f5f5;
\t\tborder-radius: 7px !important;
\t\tpadding: 8px;
\t}
\t.category-thumb .image,
\t.manufacturer-thumb .image img {
\t\tborder-radius: 7px !important;
\t}
\t.manufacturer-thumb .caption {
\t\tdisplay: none;
\t}
\t.module-manufacturers-317 .manufacturer-layout:not(.swiper-slide) {
\t\tpadding: 6px !important;
\t}
\t/** categories css custom */
\t.module-categories-372 .category-thumb {
\t\tpadding: 10px;
\t}

</style>

";
        // line 190
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 190);
        echo "
";
        // line 191
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 192
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 193
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 194
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 195
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 196
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 197
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 198
                echo "\t\t\t";
            } else {
                // line 199
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 200
                echo "\t\t\t";
            }
            // line 201
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 202
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 204
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 207
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 207);
        echo "
";
        // line 208
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
        return array (  285 => 208,  281 => 207,  274 => 204,  265 => 202,  262 => 201,  259 => 200,  256 => 199,  253 => 198,  250 => 197,  247 => 196,  244 => 195,  242 => 194,  238 => 193,  235 => 192,  233 => 191,  229 => 190,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
