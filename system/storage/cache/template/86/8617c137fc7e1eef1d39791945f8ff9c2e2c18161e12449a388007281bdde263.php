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
class __TwigTemplate_3e3039c8ea5fe99f0f66dbca456c50c684d0c865cc3193b3f9fd1f14db1b36bb extends \Twig\Template
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
\t<div class=\"row\">
\t\t<div class=\"col-md-3 caard-item\">
\t\t\t<div class=\"card-item-img\"></div>
\t\t\t<label class=\"card-item-text\">GOLD MARKET</label>
\t\t</div>
\t\t<div class=\"col-md-3 caard-item\">
\t\t\t<div class=\"card-item-img\"></div>
\t\t\t<label class=\"card-item-text\">FROM 1-10 AED</label>
\t\t</div>
\t\t<div class=\"col-md-3 caard-item\">
\t\t\t<div class=\"card-item-img\"></div>
\t\t\t<label class=\"card-item-text\">OUTLET</label>
\t\t</div>
\t\t<div class=\"col-md-3 caard-item\">
\t\t\t<div class=\"card-item-img\"></div>
\t\t\t<label class=\"card-item-text\">BEST DEALS</label>
\t\t</div>
\t</div>
</div>

<style>
\t.first-items .caard-item .card-item-img{
    width: 50px;
    height: 50px;
    background: rgba(140, 187, 13, 0.993);
  }
</style>

";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 32);
        echo "
";
        // line 33
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 34
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 35
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 36
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 37
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 38
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 39
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 40
                echo "\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 42
                echo "\t\t\t";
            }
            // line 43
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 44
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 46
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 49
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 49);
        echo "
";
        // line 50
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
        return array (  127 => 50,  123 => 49,  116 => 46,  107 => 44,  104 => 43,  101 => 42,  98 => 41,  95 => 40,  92 => 39,  89 => 38,  86 => 37,  84 => 36,  80 => 35,  77 => 34,  75 => 33,  71 => 32,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}