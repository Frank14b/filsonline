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

/* journal3/template/common/search.twig */
class __TwigTemplate_0696bb9de49ef72bcc14402f5db9eae02b4367e6033b4fd11247549add22f22c extends \Twig\Template
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
        // line 11
        $macros["self"] = $this->macros["self"] = $this;
        // line 12
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 12), "get", [0 => "catalogSearchStatus"], "method", false, false, false, 12)) {
            // line 13
            echo "\t<div id=\"search\" class=\"dropdown\">
\t\t<button class=\"dropdown-toggle search-trigger\" data-toggle=\"dropdown\"></button>
\t\t<div class=\"dropdown-menu j-dropdown\">
\t\t\t<div class=\"header-search\">

\t\t\t\t<button type=\"button\" style=\"border-radius:7px 0 0 7px;background:rgba(240, 242, 245, 1)\" class=\"search-button\" data-search-url=\"";
            // line 18
            echo ($context["search_url"] ?? null);
            echo "\"></button>

\t\t\t\t<input type=\"text\" name=\"search\" value=\"";
            // line 20
            echo ($context["search"] ?? null);
            echo "\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "searchStyleSearchPlaceholder"], "method", false, false, false, 20);
            echo "\" class=\"search-input\" style=\"font-size:11px;\" data-category_id=\"";
            echo ($context["category_id"] ?? null);
            echo "\"/>

\t\t\t\t";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 22), "get", [0 => "searchStyleSearchCategoriesSelectorStatus"], "method", false, false, false, 22) && ($context["categories"] ?? null))) {
                // line 23
                echo "\t\t\t\t\t<div style=\"border-radius:0 7px 7px 0; font-size:11px\" class=\"search-categories dropdown drop-menu\">
\t\t\t\t\t\t<div class=\"search-categories-button dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 24
                echo ((($context["category_id"] ?? null)) ? (($context["category"] ?? null)) : ("All Categories"));
                echo "</div>

\t\t\t\t\t\t<div class=\"dropdown-menu j-dropdown\">
\t\t\t\t\t\t\t<ul class=\"j-menu\">
\t\t\t\t\t\t\t\t<li data-category_id=\"0\" class=\"category-level-1\">
\t\t\t\t\t\t\t\t\t<a>";
                // line 29
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "searchStyleSearchCategories"], "method", false, false, false, 29);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                // line 31
                echo twig_call_macro($macros["self"], "macro_renderSearchCategories", [($context["j3"] ?? null), ($context["categories"] ?? null), ($context["category_id"] ?? null), 1], 31, $context, $this->getSourceContext());
                echo "
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 36
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    // line 1
    public function macro_renderSearchCategories($__j3__ = null, $__categories__ = null, $__category_id__ = null, $__index__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "j3" => $__j3__,
            "categories" => $__categories__,
            "category_id" => $__category_id__,
            "index" => $__index__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "\t";
            $macros["self"] = $this;
            // line 3
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 4
                echo "\t\t";
                $context["classes"] = ["selected" => (twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 4) == ($context["category_id"] ?? null))];
                // line 5
                echo "\t\t<li data-category_id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 5);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 5);
                echo " category-level-";
                echo ($context["index"] ?? null);
                echo "\">
\t\t\t<a>";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 6);
                echo "</a>
\t\t</li>
\t\t";
                // line 8
                echo twig_call_macro($macros["self"], "macro_renderSearchCategories", [($context["j3"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "items", [], "any", false, false, false, 8), ($context["category_id"] ?? null), (($context["index"] ?? null) + 1)], 8, $context, $this->getSourceContext());
                echo "
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 8,  133 => 6,  124 => 5,  121 => 4,  116 => 3,  113 => 2,  97 => 1,  88 => 36,  80 => 31,  75 => 29,  67 => 24,  64 => 23,  62 => 22,  53 => 20,  48 => 18,  41 => 13,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/search.twig", "");
    }
}
