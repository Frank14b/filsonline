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
class __TwigTemplate_d799d9f7a9243bdbd20ec461e7f3d4529a8ca24b9658885f8f5ee5c9d84572cb extends \Twig\Template
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
                echo "    <div id=\"content\" class=\"";
                echo ($context["class"] ?? null);
                echo "\">";
                echo ($context["content_top"] ?? null);
                echo ($context["content_bottom"] ?? null);
                echo "</div>
    ";
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
        return array (  93 => 20,  89 => 19,  82 => 16,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  50 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
