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
class __TwigTemplate_cdfa620348a872762262a1118a734e345df5802b1d82b52fb908572c6acc7cf2 extends \Twig\Template
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
    width: 100px;
    height: 100px;
    background: rgba(140, 187, 13, 0.993);
    margin: auto;
  }
  .first-items .caard-item {
    
  }
</style>

";
        // line 36
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 36);
        echo "
";
        // line 37
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 38
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 39
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 40
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 41
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 42
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 43
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 44
                echo "\t\t\t";
            } else {
                // line 45
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 46
                echo "\t\t\t";
            }
            // line 47
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 48
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 50
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 53
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 53);
        echo "
";
        // line 54
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
        return array (  131 => 54,  127 => 53,  120 => 50,  111 => 48,  108 => 47,  105 => 46,  102 => 45,  99 => 44,  96 => 43,  93 => 42,  90 => 41,  88 => 40,  84 => 39,  81 => 38,  79 => 37,  75 => 36,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
