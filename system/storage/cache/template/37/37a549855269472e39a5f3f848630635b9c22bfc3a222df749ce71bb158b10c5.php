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
class __TwigTemplate_d41a959f39be30e01b8c94057afc9d812ceb71af2f9f7510e8ff99473e7a9e57 extends \Twig\Template
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
        // line 9
        $macros["self"] = $this->macros["self"] = $this;
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 10), "get", [0 => "catalogSearchStatus"], "method", false, false, false, 10)) {
            // line 11
            echo "<div id=\"search\" class=\"dropdown\">
  <button class=\"dropdown-toggle search-trigger\" data-toggle=\"dropdown\"></button>
  <div class=\"dropdown-menu j-dropdown\">
    <div class=\"header-search\">
     
      <button type=\"button\" style=\"border-radius:7px 0 0 7px; font-size:10px;\" class=\"search-button\" data-search-url=\"";
            // line 16
            echo ($context["search_url"] ?? null);
            echo "\"></button>

      <input type=\"text\" name=\"search\" value=\"";
            // line 18
            echo ($context["search"] ?? null);
            echo "\" placeholder=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 18), "get", [0 => "searchStyleSearchPlaceholder"], "method", false, false, false, 18);
            echo "\" class=\"search-input\" data-category_id=\"";
            echo ($context["category_id"] ?? null);
            echo "\"/>
       ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 19), "get", [0 => "searchStyleSearchCategoriesSelectorStatus"], "method", false, false, false, 19) && ($context["categories"] ?? null))) {
                // line 20
                echo "        <div class=\"search-categories dropdown drop-menu\">
          <div class=\"search-categories-button dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 21
                echo ((($context["category_id"] ?? null)) ? (($context["category"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "searchStyleSearchCategories"], "method", false, false, false, 21)));
                echo "</div>

          <div class=\"dropdown-menu j-dropdown\">
              <ul class=\"j-menu\">
                <li data-category_id=\"0\" class=\"category-level-1\"><a>";
                // line 25
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 25), "get", [0 => "searchStyleSearchCategories"], "method", false, false, false, 25);
                echo "</a></li>
                ";
                // line 26
                echo twig_call_macro($macros["self"], "macro_renderSearchCategories", [($context["j3"] ?? null), ($context["categories"] ?? null), ($context["category_id"] ?? null), 1], 26, $context, $this->getSourceContext());
                echo "
              </ul>
          </div>
        </div>
      ";
            }
            // line 31
            echo "
    </div>
  </div>
</div>
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
            echo "  ";
            $macros["self"] = $this;
            // line 3
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 4
                echo "    ";
                $context["classes"] = ["selected" => (twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 4) == ($context["category_id"] ?? null))];
                // line 5
                echo "    <li data-category_id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 5);
                echo "\" class=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "classes", [0 => ($context["classes"] ?? null)], "method", false, false, false, 5);
                echo " category-level-";
                echo ($context["index"] ?? null);
                echo "\"><a>";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 5);
                echo "</a></li>
    ";
                // line 6
                echo twig_call_macro($macros["self"], "macro_renderSearchCategories", [($context["j3"] ?? null), twig_get_attribute($this->env, $this->source, $context["category"], "items", [], "any", false, false, false, 6), ($context["category_id"] ?? null), (($context["index"] ?? null) + 1)], 6, $context, $this->getSourceContext());
                echo "
  ";
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
        return array (  132 => 6,  121 => 5,  118 => 4,  113 => 3,  110 => 2,  94 => 1,  85 => 31,  77 => 26,  73 => 25,  66 => 21,  63 => 20,  61 => 19,  53 => 18,  48 => 16,  41 => 11,  39 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/search.twig", "");
    }
}
