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

/* journal3/template/common/footer.twig */
class __TwigTemplate_a0af6688e08adb9774ccaaa8e7367da98ae3c2bde95195ffa490040e29e98d54 extends \Twig\Template
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
        if ( !array_key_exists("j3", $context)) {
            // line 2
            echo "\t<style>
\t\tbody {
\t\t\tdisplay: none !important;
\t\t}
\t</style>
\t<script>
\t\twindow.location = 'index.php?route=journal3/startup/error';
\t</script>
";
        }
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom"], "method", false, false, false, 11);
        echo "

";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 13), "isPopup", [], "method", false, false, false, 13)) {
            // line 14
            echo "
\t<footer>
\t\t";
            // line 16
            echo ($context["footer_menu"] ?? null);
            echo "
\t</footer>

";
        }
        // line 19
        echo "</div><!-- .site-wrapper -->";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom_menu"], "method", false, false, false, 19);
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "side_menu"], "method", false, false, false, 19);
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "notification"], "method", false, false, false, 19);
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 19), "getScripts", [0 => "footer"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 20
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 20), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 20);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "performanceJSDefer"], "method", false, false, false, 20)) {
                echo " defer ";
            }
            echo "></script>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "customJS"], "method", false, false, false, 20)) {
            // line 21
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "customJS"], "method", false, false, false, 21);
            echo "</script>";
        }
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 21), "isPopup", [], "method", false, false, false, 21) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "customCodeFooter"], "method", false, false, false, 21))) {
            // line 22
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 22), "get", [0 => "customCodeFooter"], "method", false, false, false, 22);
        }
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 22), "isPopup", [], "method", false, false, false, 22) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 22), "get", [0 => "scrollTop"], "method", false, false, false, 22))) {
            // line 23
            echo "<div class=\"scroll-top\">
\t<i class=\"fa fa-angle-up\"></i>
</div>";
        }
        // line 25
        echo "<style>
/* footer last menu custom css */
.links-menu-72 .module-body,
.links-menu-384 .module-body {
\tlist-style-type: none;
\ttext-align: center;
}
.links-menu-72 .module-body li,
.links-menu-384 .module-body li {
\tdisplay: inline-block !important;
\ttext-align: center;
}
.links-menu-72 .module-body li a {
\tcolor: #ddd;
\ttext-decoration: none;
\tfont-size: 12px;
\tpadding: 10px 2em 5px 1px;
\ttext-align: center;
}
.links-menu-384 .module-body li a {
\tcolor: #111;
\ttext-decoration: none;
\tpadding: 10px 5em 5px 1px;
\ttext-align: center;
}
.links-menu-384 .module-body {
\tpadding-left: 5em;
\tpadding-bottom: 5px;
\tpadding-top: 5px;
}
.links-menu-391 .module-body li a {
\tcolor: #111;
\ttext-decoration: none;
\ttext-align: center;
\theight: 90px;
\twidth: 90px;
\tbackground: #f5f5f5;
\tborder-radius: 50%;
\tmargin: 20px;
\tfont-size: 45px !important;
}
.links-menu-391 .module-body li a:hover {
\tbox-shadow: rgba(0, 0, 0, 0.24) 0 3px 8px !important;
}</style>


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
\t.module-products-359 .product-grid .product-thumb, 
\t.module-products-360 .product-grid .product-thumb,
\t.module-products-381 .product-grid .product-thumb,
\t.module-products-390 .product-grid .product-thumb,
\t.module-products-257 .product-grid .product-thumb,
    .module-products-400 .product-grid .product-thumb,
\t.module-products-415 .product-grid .product-thumb,
\t.module-products-417 .product-grid .product-thumb
    {
\t\tborder-radius: 15px !important;
\t\tbox-shadow: rgba(0, 0, 0, 0.24) 0 3px 8px !important;
\t}
\t.module-products-359 .product-grid .product-thumb,
\t.module-products-390 .product-grid .product-thumb,
    .module-products-400 .product-grid .product-thumb,
\t.module-products-415 .product-grid .product-thumb
\t{
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
  .grid-item-top-6-1-2 .manufacturer-thumb .image {
    border-radius: 7px !important;
    padding: 20px;
    background: #f5f5f5 !important;
  }

\t.grid-item-top-6-1-2 .module-manufacturers-317 .manufacturer-thumb .image {
\t\tbackground: url(\"catalog/view/theme/journal3/image/bg-outlet.png\")center/cover;
\t}

\t.category-thumb .image,
\t.grid-item-top-6-1-2 .manufacturer-thumb .image img {
\t\tborder-radius: 7px !important;
\t}
\t.grid-item-top-6-1-2 .manufacturer-thumb .caption {
\t\tdisplay: none;
\t}
\t.module-manufacturers-317 .manufacturer-layout:not(.swiper-slide),
  .module-manufacturers-402 .manufacturer-layout:not(.swiper-slide)  {
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
\t\tbackground: #fff;
\t\tcolor: #222;
\t\tmargin: 15px;
\t\tpadding: 15px;
\t\tpadding-left: 25px;
\t\tpadding-right: 25px;
\t\tfont-size: 40px;
\t\tfont-weight: bold;
\t\tborder-radius: 15px;
\t}
\t.date-couter {
\t\tdisplay: none;
\t}
</style>


<script>
\$(document).ready(function () {
\$(\".links-menu-72 .links-menu-item\").removeClass(\"menu-item\")
\$(\".links-menu-384 .links-menu-item\").removeClass(\"menu-item\")
\$(\".links-menu-391 .links-menu-item\").removeClass(\"menu-item\")

let headerMenu = \$(\"footer .grid-row-1\").html()
\$(\"footer .grid-row-1\").hide()
\$(\".custom-menu-div\").html(headerMenu)

let counterend = \$('.date-couter').text()
if (counterend) {

setInterval(function () {
let today = new Date()
let endedDate = new Date(counterend);

var one_day = 1000 * 60 * 60 * 24;
var one_hour = 1000 * 60 * 60;
var one_minute = 1000 * 60;

let dayLeft = Math.ceil((endedDate.getTime() - today.getTime()) / (one_day))
let hourLeft = Math.ceil((endedDate.getTime() - today.getTime()) / (one_hour))
let minuteLeft = Math.ceil((endedDate.getTime() - today.getTime()) / (one_minute))

\$(\"#day-counter\").text(((dayLeft - 1) < 10) ? '0' + (
dayLeft - 1
) : (dayLeft - 1))
\$(\"#day-counter2\").text(((hourLeft - 1) < 10) ? '0' + (
hourLeft - 1
) : (hourLeft - 1))
\$(\"#day-counter3\").text(((60 - today.getMinutes()) < 10) ? '0' + (
Math.ceil(60 - today.getMinutes())
) : (60 - today.getMinutes()))
}, 1000)
}
})</script></body></html>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  99 => 23,  95 => 22,  89 => 21,  76 => 20,  68 => 19,  61 => 16,  57 => 14,  55 => 13,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}
