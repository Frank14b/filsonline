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
class __TwigTemplate_1c16edefb80bfc2b700430d9ce64534669d8359eaf91716a1753bfa72431c11f extends \Twig\Template
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
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 2);
        echo "
";
        // line 3
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 4
            echo "<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
            // line 5
            echo ($context["column_left"] ?? null);
            echo "
    ";
            // line 6
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 7
                echo "    ";
                $context["class"] = "col-sm-6";
                // line 8
                echo "    ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 9
                echo "    ";
                $context["class"] = "col-sm-9";
                // line 10
                echo "    ";
            } else {
                // line 11
                echo "    ";
                $context["class"] = "col-sm-12";
                // line 12
                echo "    ";
            }
            // line 13
            echo "    ";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 14
                echo "    ";
                // line 15
                echo "    ";
            }
            // line 16
            echo "    ";
            echo ($context["column_right"] ?? null);
            echo "</div>
</div>
";
        }
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets"], "method", false, false, false, 19);
        echo "
";
        // line 20
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
        return array (  93 => 20,  89 => 19,  82 => 16,  79 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  54 => 6,  50 => 5,  47 => 4,  45 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
