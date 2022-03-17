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

/* journal3/template/product/category.twig */
class __TwigTemplate_75385b8dd88e2b12816da75562f0aa98b931dc76c8b1bb860d9a93652ec8f3d0 extends \Twig\Template
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
<ul class=\"breadcrumb\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 4
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 4);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 4);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 7), "get", [0 => "pageTitlePosition"], "method", false, false, false, 7) == "top")) {
            // line 8
            echo "  <h1 class=\"title page-title\"><span>";
            echo ($context["heading_title"] ?? null);
            echo "</span></h1>
";
        }
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "top"], "method", false, false, false, 10);
        echo "
<div class=\"container\">
  <div class=\"row\">";
        // line 12
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\">
      ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 14), "get", [0 => "pageTitlePosition"], "method", false, false, false, 14) == "default")) {
            // line 15
            echo "        <h1 class=\"title page-title\">";
            echo ($context["heading_title"] ?? null);
            echo "</h1>
      ";
        }
        // line 17
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 17), "get", [0 => "categoryPageDescStatus"], "method", false, false, false, 17)) {
            // line 18
            echo "      ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 19
                echo "        <div class=\"category-description\">          
          ";
                // line 20
                if ((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 20), "get", [0 => "categoryPageCategoryDescriptionStatus"], "method", false, false, false, 20))) {
                    // line 21
                    echo "            <div class=\"category-text\">";
                    echo ($context["description"] ?? null);
                    echo "</div>
          ";
                }
                // line 23
                echo "        </div>
      ";
            }
            // line 25
            echo "      ";
        }
        // line 26
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 27), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 27)) {
            // line 28
            echo "        ";
            if (($context["categories"] ?? null)) {
                // line 29
                echo "          <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 29);
                echo "\">
            ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "refineTitle"], "method", false, false, false, 30)) {
                    // line 31
                    echo "              <h3 class=\"refine-title title\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "refineTitleText"], "method", false, false, false, 31);
                    echo "</h3>
            ";
                }
                // line 33
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 33) == "carousel")) {
                    // line 34
                    echo "            <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "subcategoriesItemsPerRow"], "method", false, false, false, 34), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 34), "getJs", [], "method", false, false, false, 34), 1 => "subcategoriesCarouselStyle"], "method", false, false, false, 34), twig_constant("JSON_FORCE_OBJECT"));
                    echo "'>
              <div class=\"swiper-container\" ";
                    // line 35
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 35)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                <div class=\"swiper-wrapper\">
                  ";
                } else {
                    // line 38
                    echo "                  <div class=\"refine-items\">
                    ";
                }
                // line 40
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 41
                    echo "                      <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 41), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 41) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                        <a href=\"";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 42);
                    echo "\">
                          ";
                    // line 43
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 43), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 43) != "links")) {
                        // line 44
                        echo "                            <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 44);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 44)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 44);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 44);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 44);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 44), "get", [0 => "image_dimensions_subcategory.width"], "method", false, false, false, 44);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 44), "get", [0 => "image_dimensions_subcategory.height"], "method", false, false, false, 44);
                        echo "\"/>
                          ";
                    }
                    // line 46
                    echo "                          <span class=\"refine-name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 46);
                    echo "</span>
                        </a>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 50), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 50) != "carousel")) {
                    // line 51
                    echo "                  </div>
                  ";
                } else {
                    // line 53
                    echo "                </div>
              </div>
              <div class=\"swiper-buttons\">
                <div class=\"swiper-button-prev\"></div>
                <div class=\"swiper-button-next\"></div>
              </div>
              <div class=\"swiper-pagination\"></div>
            </div>
            ";
                }
                // line 62
                echo "          </div>
        ";
            }
            // line 64
            echo "      ";
        }
        // line 65
        echo "      <div class=\"main-products-wrapper\">
      ";
        // line 66
        if (($context["products"] ?? null)) {
            // line 67
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 67), "get", [0 => "sortBarStatus"], "method", false, false, false, 67)) {
                // line 68
                echo "        <div class=\"products-filter\">
          <div class=\"grid-list\">
            <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 70
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 70), "get", [0 => "globalProductView"], "method", false, false, false, 70) == "grid")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\" data-view=\"grid\"></button>
            <button id=\"btn-list-view\" class=\"view-btn ";
                // line 71
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "globalProductView"], "method", false, false, false, 71) == "list")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\" data-view=\"list\"></button>
            <a href=\"";
                // line 72
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"compare-btn\">";
                echo ($context["text_compare"] ?? null);
                echo "</a>
          </div>
          <div class=\"select-group\">
            <div class=\"input-group input-group-sm sort-by\">
              <label class=\"input-group-addon\" for=\"input-sort\">";
                // line 76
                echo ($context["text_sort"] ?? null);
                echo "</label>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 79
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 79) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 80
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 80);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 80);
                        echo "</option>
                  ";
                    } else {
                        // line 82
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 82);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 82);
                        echo "</option>
                  ";
                    }
                    // line 84
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "              </select>
            </div>
            <div class=\"input-group input-group-sm per-page\">
              <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 88
                echo ($context["text_limit"] ?? null);
                echo "</label>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
                // line 90
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 91
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 91) == ($context["limit"] ?? null))) {
                        // line 92
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 92);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 92);
                        echo "</option>
                  ";
                    } else {
                        // line 94
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 94);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 94);
                        echo "</option>
                  ";
                    }
                    // line 96
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "              </select>
            </div>
          </div>
        </div>
        ";
            }
            // line 102
            echo "        <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "globalProductView"], "method", false, false, false, 102);
            echo "\">
          ";
            // line 103
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 103), "get", [0 => "globalProductView"], "method", false, false, false, 103);
            // line 104
            echo "          ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/product/category.twig", 104)->display($context);
            // line 105
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 107
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 108
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        }
        // line 111
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 112
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 114
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 117
        echo "      </div>
      ";
        // line 118
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 119
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 121
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 121);
        echo "
";
        // line 122
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 122,  399 => 121,  394 => 119,  390 => 118,  387 => 117,  379 => 114,  373 => 112,  370 => 111,  364 => 108,  360 => 107,  356 => 105,  353 => 104,  351 => 103,  346 => 102,  339 => 97,  333 => 96,  325 => 94,  317 => 92,  314 => 91,  310 => 90,  305 => 88,  300 => 85,  294 => 84,  286 => 82,  278 => 80,  275 => 79,  271 => 78,  266 => 76,  257 => 72,  249 => 71,  241 => 70,  237 => 68,  234 => 67,  232 => 66,  229 => 65,  226 => 64,  222 => 62,  211 => 53,  207 => 51,  204 => 50,  193 => 46,  173 => 44,  171 => 43,  167 => 42,  160 => 41,  155 => 40,  151 => 38,  143 => 35,  136 => 34,  133 => 33,  127 => 31,  125 => 30,  120 => 29,  117 => 28,  115 => 27,  110 => 26,  107 => 25,  103 => 23,  97 => 21,  95 => 20,  92 => 19,  89 => 18,  86 => 17,  80 => 15,  78 => 14,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/category.twig", "");
    }
}
