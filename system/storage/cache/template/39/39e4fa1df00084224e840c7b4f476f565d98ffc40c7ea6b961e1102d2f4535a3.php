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
class __TwigTemplate_3bd0e4096799eb959d1a1d73c99ffc5e25f1c513827ce89a891f6463ba7f45f9 extends \Twig\Template
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
}</style><script>
\$(document).ready(function () {
\$(\".links-menu-72 .links-menu-item\").removeClass(\"menu-item\")
\$(\".links-menu-384 .links-menu-item\").removeClass(\"menu-item\")
\$(\".links-menu-391 .links-menu-item\").removeClass(\"menu-item\")

let headerMenu = \$(\"footer .grid-row-1\").html()
\$(\"footer .grid-row-1\").hide()
\$(\".custom-menu-div\").html(headerMenu)

setTimeout(function () {
let counterend = \$('.date-couter').text()
let year = counterend.split(\"/\")[2]
let month = counterend.split(\"/\")[1]
let day = counterend.split(\"/\")[0]
let hour = counterend.split(\"/\")[4]
let minutes = counterend.split(\"/\")[5]
let seconds = counterend.split(\"/\")[6]
alert(new Date(year, month, day, hours, minutes, seconds))
}, 500)
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
