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
class __TwigTemplate_fe6d777682e4bec88ad1b4944808ca19b2d60433395888e609c5858b464723e7 extends \Twig\Template
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
                // line 21
                if ((($context["description"] ?? null) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 21), "get", [0 => "categoryPageCategoryDescriptionStatus"], "method", false, false, false, 21))) {
                    // line 22
                    echo "            <div class=\"category-text\">";
                    echo ($context["description"] ?? null);
                    echo "</div>
          ";
                }
                // line 24
                echo "        </div>
      ";
            }
            // line 26
            echo "      ";
        }
        // line 27
        echo "      ";
        echo ($context["content_top"] ?? null);
        echo "
      ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 28), "get", [0 => "subcategoriesStatus"], "method", false, false, false, 28)) {
            // line 29
            echo "        ";
            if (($context["categories"] ?? null)) {
                // line 30
                echo "          <div class=\"refine-categories refine-";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 30), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 30);
                echo "\">
            ";
                // line 31
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 31), "get", [0 => "refineTitle"], "method", false, false, false, 31)) {
                    // line 32
                    echo "              <h3 class=\"refine-title title\">";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "refineTitleText"], "method", false, false, false, 32);
                    echo "</h3>
            ";
                }
                // line 34
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 34), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 34) == "carousel")) {
                    // line 35
                    echo "            <div class=\"swiper\" data-items-per-row='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 35), "get", [0 => "subcategoriesItemsPerRow"], "method", false, false, false, 35), twig_constant("JSON_FORCE_OBJECT"));
                    echo "' data-options='";
                    echo json_encode(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "carousel", [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 35), "getJs", [], "method", false, false, false, 35), 1 => "subcategoriesCarouselStyle"], "method", false, false, false, 35), twig_constant("JSON_FORCE_OBJECT"));
                    echo "'>
              <div class=\"swiper-container\" ";
                    // line 36
                    if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "isRTL", [], "method", false, false, false, 36)) {
                        echo "dir=\"rtl\"";
                    }
                    echo ">
                <div class=\"swiper-wrapper\">
                  ";
                } else {
                    // line 39
                    echo "                  <div class=\"refine-items\">
                    ";
                }
                // line 41
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 42
                    echo "                      <div class=\"refine-item ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 42), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 42) == "carousel")) {
                        echo "swiper-slide";
                    }
                    echo "\">
                        <a href=\"";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 43);
                    echo "\">
                          ";
                    // line 44
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 44), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 44) != "links")) {
                        // line 45
                        echo "                            <img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 45);
                        echo "\" ";
                        if (twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 45)) {
                            echo "data-srcset=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 45);
                            echo " 1x, ";
                            echo twig_get_attribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 45);
                            echo " 2x\"";
                        }
                        echo " alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 45);
                        echo "\" width=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 45), "get", [0 => "image_dimensions_subcategory.width"], "method", false, false, false, 45);
                        echo "\" height=\"";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 45), "get", [0 => "image_dimensions_subcategory.height"], "method", false, false, false, 45);
                        echo "\"/>
                          ";
                    }
                    // line 47
                    echo "                          <span class=\"refine-name\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 47);
                    echo "</span>
                        </a>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 51), "get", [0 => "subcategoriesDisplay"], "method", false, false, false, 51) != "carousel")) {
                    // line 52
                    echo "                  </div>
                  ";
                } else {
                    // line 54
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
                // line 63
                echo "          </div>
        ";
            }
            // line 65
            echo "      ";
        }
        // line 66
        echo "      <div class=\"main-products-wrapper\">
      ";
        // line 67
        if (($context["products"] ?? null)) {
            // line 68
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "sortBarStatus"], "method", false, false, false, 68)) {
                // line 69
                echo "        <div class=\"products-filter\">
          <div class=\"grid-list\">
            <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 71
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "globalProductView"], "method", false, false, false, 71) == "grid")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_grid"] ?? null);
                echo "\" data-view=\"grid\"></button>
            <button id=\"btn-list-view\" class=\"view-btn ";
                // line 72
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 72), "get", [0 => "globalProductView"], "method", false, false, false, 72) == "list")) {
                    echo "active";
                }
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_list"] ?? null);
                echo "\" data-view=\"list\"></button>
            <a href=\"";
                // line 73
                echo ($context["compare"] ?? null);
                echo "\" id=\"compare-total\" class=\"compare-btn\">";
                echo ($context["text_compare"] ?? null);
                echo "</a>
          </div>
          <div class=\"select-group\">
            <div class=\"input-group input-group-sm sort-by\">
              <label class=\"input-group-addon\" for=\"input-sort\">";
                // line 77
                echo ($context["text_sort"] ?? null);
                echo "</label>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 80
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 80) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 81
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 81);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 81);
                        echo "</option>
                  ";
                    } else {
                        // line 83
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 83);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 83);
                        echo "</option>
                  ";
                    }
                    // line 85
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "              </select>
            </div>
            <div class=\"input-group input-group-sm per-page\">
              <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 89
                echo ($context["text_limit"] ?? null);
                echo "</label>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 92
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 92) == ($context["limit"] ?? null))) {
                        // line 93
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 93);
                        echo "\" selected=\"selected\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 93);
                        echo "</option>
                  ";
                    } else {
                        // line 95
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 95);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 95);
                        echo "</option>
                  ";
                    }
                    // line 97
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "              </select>
            </div>
          </div>
        </div>
        ";
            }
            // line 103
            echo "        <div class=\"main-products product-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 103), "get", [0 => "globalProductView"], "method", false, false, false, 103);
            echo "\">
          ";
            // line 104
            $context["display"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 104), "get", [0 => "globalProductView"], "method", false, false, false, 104);
            // line 105
            echo "          ";
            $this->loadTemplate("journal3/template/journal3/product_card.twig", "journal3/template/product/category.twig", 105)->display($context);
            // line 106
            echo "        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 108
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 109
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        }
        // line 112
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 113
            echo "        <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 115
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 118
        echo "      </div>
      ";
        // line 119
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 120
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 122
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/rich_snippets", 1 => ($context["breadcrumbs"] ?? null)], "method", false, false, false, 122);
        echo "
";
        // line 123
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
        return array (  404 => 123,  400 => 122,  395 => 120,  391 => 119,  388 => 118,  380 => 115,  374 => 113,  371 => 112,  365 => 109,  361 => 108,  357 => 106,  354 => 105,  352 => 104,  347 => 103,  340 => 98,  334 => 97,  326 => 95,  318 => 93,  315 => 92,  311 => 91,  306 => 89,  301 => 86,  295 => 85,  287 => 83,  279 => 81,  276 => 80,  272 => 79,  267 => 77,  258 => 73,  250 => 72,  242 => 71,  238 => 69,  235 => 68,  233 => 67,  230 => 66,  227 => 65,  223 => 63,  212 => 54,  208 => 52,  205 => 51,  194 => 47,  174 => 45,  172 => 44,  168 => 43,  161 => 42,  156 => 41,  152 => 39,  144 => 36,  137 => 35,  134 => 34,  128 => 32,  126 => 31,  121 => 30,  118 => 29,  116 => 28,  111 => 27,  108 => 26,  104 => 24,  98 => 22,  96 => 21,  92 => 19,  89 => 18,  86 => 17,  80 => 15,  78 => 14,  73 => 12,  68 => 10,  62 => 8,  60 => 7,  57 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/product/category.twig", "");
    }
}
