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
class __TwigTemplate_6c8f1e6d4cdc812bc45e5fe6438ec5c67002bbf2a4290eb81653c843596d3b96 extends \Twig\Template
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
    <div class=\"row\">
       <div class=\"col-md-3 caard-item\">
          <div class=\"card-item-img\">

          </div>
          <label class=\"card-item-text\">GOLD MARKET</label>
       </div>
       <div class=\"col-md-3 caard-item\">
          <div class=\"card-item-img\">

          </div>
          <label class=\"card-item-text\">FROM 1-10 AED</label>
       </div>
       <div class=\"col-md-3 caard-item\">
          <div class=\"card-item-img\">

          </div>
          <label class=\"card-item-text\">OUTLET</label>
       </div>
       <div class=\"col-md-3 caard-item\">
          <div class=\"card-item-img\">

          </div>
          <label class=\"card-item-text\">BEST DEALS</label>
       </div>
    </div>
</div>

";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 32);
        echo "
";
        // line 33
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 34
            echo "<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
            // line 35
            echo ($context["column_left"] ?? null);
            echo "
    ";
            // line 36
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 37
                echo "    ";
                $context["class"] = "col-sm-6";
                // line 38
                echo "    ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 39
                echo "    ";
                $context["class"] = "col-sm-9";
                // line 40
                echo "    ";
            } else {
                // line 41
                echo "    ";
                $context["class"] = "col-sm-12";
                // line 42
                echo "    ";
            }
            // line 43
            echo "    ";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 44
                echo "    <div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
    ";
            }
            // line 46
            echo "    ";
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
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
