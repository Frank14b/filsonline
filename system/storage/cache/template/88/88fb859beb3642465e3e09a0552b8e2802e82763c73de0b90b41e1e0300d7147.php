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
class __TwigTemplate_23a9f7b11a05744af4995277e75e8c3bfd3b61ab72db38d69f75f7042c90d4b9 extends \Twig\Template
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
\t\t\t\t<div class=\"card-item-img\"></div>
\t\t\t\t<label class=\"card-item-text\">GOLD MARKET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\"></div>
\t\t\t\t<label class=\"card-item-text\">FROM 1-10 AED</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\"></div>
\t\t\t\t<label class=\"card-item-text\">OUTLET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
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
  .first-items .caard-item .card-item-img:hover {
    background: #222;
    border: 2px solid rgba(140, 187, 13, 0.993);
  }
\t.first-items .caard-item {
\t\ttext-align: center;
\t}
  .first-items .caard-item .card-item-text {
    font-weight: 800;
  }
</style>

";
        // line 46
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 46);
        echo "
";
        // line 47
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 48
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 49
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 50
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 51
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 52
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 53
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 54
                echo "\t\t\t";
            } else {
                // line 55
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 56
                echo "\t\t\t";
            }
            // line 57
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 58
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 60
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 63
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 63);
        echo "
";
        // line 64
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
        return array (  141 => 64,  137 => 63,  130 => 60,  121 => 58,  118 => 57,  115 => 56,  112 => 55,  109 => 54,  106 => 53,  103 => 52,  100 => 51,  98 => 50,  94 => 49,  91 => 48,  89 => 47,  85 => 46,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
