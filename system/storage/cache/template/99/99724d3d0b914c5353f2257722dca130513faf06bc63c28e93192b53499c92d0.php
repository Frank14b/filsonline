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

/* journal3/template/common/language.twig */
class __TwigTemplate_13c9c4df129c38ebe02a2ad6baf258ffa76f86e31d64f42a8e10b808b5d4cc66 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 1), "get", [0 => "catalogLanguageStatus"], "method", false, false, false, 1)) {
            // line 2
            if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
                // line 3
                echo "  ";
                $context["current_language"] = null;
                // line 4
                echo "  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 5
                    echo "    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 5) == ($context["code"] ?? null))) {
                        // line 6
                        echo "      ";
                        $context["current_language"] = $context["language"];
                        // line 7
                        echo "    ";
                    }
                    // line 8
                    echo "  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "  <div class=\"t-10\" style=\"margin-bottom:-20px; margin-top: -10px\"><b class=\"text-primo\">Language</b></div>
  <div id=\"language\" class=\"language\">
    <form action=\"";
                // line 11
                echo ($context["action"] ?? null);
                echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-language\">
      <div class=\"dropdown drop-menu\">
        <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"language-flag-title\">
            <span class=\"symbol\"><img src=\"";
                // line 15
                echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "imageToBase64", [0 => (((("catalog/language/" . twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "code", [], "any", false, false, false, 15)) . "/") . twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "code", [], "any", false, false, false, 15)) . ".png")], "method", false, false, false, 15);
                echo "\" width=\"16\" height=\"11\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "name", [], "any", false, false, false, 15);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "name", [], "any", false, false, false, 15);
                echo "\"/></span>
            <span class=\"language-title t-10\">";
                // line 16
                echo twig_get_attribute($this->env, $this->source, ($context["current_language"] ?? null), "name", [], "any", false, false, false, 16);
                echo "</span>
          </span>
        </button>
        <div class=\"dropdown-menu j-dropdown\">
          <ul class=\"j-menu\">
            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 22
                    echo "              <li>
                <a class=\"language-select\" data-name=\"";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 23);
                    echo "\">
                  <span class=\"language-flag\"><img src=\"";
                    // line 24
                    echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "imageToBase64", [0 => (((("catalog/language/" . twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 24)) . "/") . twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 24)) . ".png")], "method", false, false, false, 24);
                    echo "\" width=\"16\" height=\"11\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 24);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 24);
                    echo "\"/></span>
                  <span class=\"language-title-dropdown\">";
                    // line 25
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 25);
                    echo "</span>
                </a>
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "          </ul>
        </div>
      </div>
      <input type=\"hidden\" name=\"code\" value=\"\"/>
      <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 33
                echo ($context["redirect"] ?? null);
                echo "\"/>
    </form>
  </div>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "journal3/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  120 => 29,  110 => 25,  102 => 24,  98 => 23,  95 => 22,  91 => 21,  83 => 16,  75 => 15,  68 => 11,  64 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/language.twig", "");
    }
}
