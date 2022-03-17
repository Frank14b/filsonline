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
class __TwigTemplate_03ca80b931f9f8fd1227fbd04c49a00a559ad3c9637c8abf789a5c098f211ab1 extends \Twig\Template
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
          <img src=\"catalog/view/theme/journal3/image/goldmarket.png\"/>
        </div>
\t\t\t\t<label class=\"card-item-text\">GOLD MARKET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
          <img src=\"catalog/view/theme/journal3/image/from1to10.png\"/>
        </div>
\t\t\t\t<label class=\"card-item-text\">FROM 1-10 AED</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\"></div>
\t\t\t\t<label class=\"card-item-text\">OUTLET</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-6 caard-item\">
\t\t\t\t<div class=\"card-item-img\">
          <img src=\"catalog/view/theme/journal3/image/bestdeals.png\"/>
        </div>
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
    position: relative;
\t}
  .first-items .caard-item .card-item-img:hover {
    background: #111;
    border: 2px solid rgba(140, 187, 13, 0.993);
  }
\t.first-items .caard-item {
\t\ttext-align: center;
\t}
  .first-items .caard-item .card-item-text {
    font-weight: 800;
  }
  .first-items .caard-item .card-item-img img {
    width: 100%;
    object-fit: contain;
    object-position: middle;
    width: auto;
\t\theight: 90px;
    padding: 1em;
\t}
</style>

";
        // line 61
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 61);
        echo "
";
        // line 62
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 63
            echo "\t<div id=\"common-home\" class=\"container\">
\t\t<div class=\"row\">";
            // line 64
            echo ($context["column_left"] ?? null);
            echo "
\t\t\t";
            // line 65
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 66
                echo "\t\t\t\t";
                $context["class"] = "col-sm-6";
                // line 67
                echo "\t\t\t";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 68
                echo "\t\t\t\t";
                $context["class"] = "col-sm-9";
                // line 69
                echo "\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t";
                $context["class"] = "col-sm-12";
                // line 71
                echo "\t\t\t";
            }
            // line 72
            echo "\t\t\t";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 73
                echo "\t\t\t\t<div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 75
            echo "\t\t\t";
            echo ($context["column_right"] ?? null);
            echo "</div>
\t</div>
";
        }
        // line 78
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 78);
        echo "
";
        // line 79
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
        return array (  156 => 79,  152 => 78,  145 => 75,  136 => 73,  133 => 72,  130 => 71,  127 => 70,  124 => 69,  121 => 68,  118 => 67,  115 => 66,  113 => 65,  109 => 64,  106 => 63,  104 => 62,  100 => 61,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
