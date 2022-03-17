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
class __TwigTemplate_7380eded3dc590755b7690e34627747a407c3a53049d79ef0ed6c9f1a1919f4b extends \Twig\Template
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
\t\t\t<div class=\"col-md-3 caard-item\">
\t\t\t\t<div class=\"card-item-img\"></div>
\t\t\t\t<label class=\"card-item-text\">GOLD MARKET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 caard-item\">
\t\t\t\t<div class=\"card-item-img\"></div>
\t\t\t\t<label class=\"card-item-text\">FROM 1-10 AED</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 caard-item\">
\t\t\t\t<div class=\"card-item-img\"></div>
\t\t\t\t<label class=\"card-item-text\">OUTLET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 caard-item\">
\t\t\t\t<div class=\"card-item-img\"></div>
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
\t}
\t.first-items .caard-item {
\t\ttext-align: center;
\t}
</style>

";
        // line 39
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 39);
        echo "
";
        // line 40
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 41
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 42
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 43
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 44
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 45
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 46
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 47
                echo "\t\t\t";
            } else {
                // line 48
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 49
                echo "\t\t\t";
            }
            // line 50
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 51
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 53
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 56
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 56);
        echo "
";
        // line 57
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
        return array (  134 => 57,  130 => 56,  123 => 53,  114 => 51,  111 => 50,  108 => 49,  105 => 48,  102 => 47,  99 => 46,  96 => 45,  93 => 44,  91 => 43,  87 => 42,  84 => 41,  82 => 40,  78 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
