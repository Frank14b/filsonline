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

/* journal3/template/common/footer.twig */
class __TwigTemplate_bdc9ff298ddf525bf76b4c12f72186f3618d393f0ce92047289a188202048f49 extends \Twig\Template
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
        if ( !array_key_exists("j3", $context)) {
            // line 2
            echo "  <style>
    body {
      display: none !important;
    }
  </style>
  <script>
    window.location = 'index.php?route=journal3/startup/error';
  </script>
";
        }
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom"], "method", false, false, false, 11);
        echo "

";
        // line 13
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 13), "isPopup", [], "method", false, false, false, 13)) {
            // line 14
            echo "
<footer>
  ";
            // line 16
            echo ($context["footer_menu"] ?? null);
            echo "
</footer>

";
        }
        // line 20
        echo "</div><!-- .site-wrapper -->

";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "bottom_menu"], "method", false, false, false, 22);
        echo "

";
        // line 24
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "side_menu"], "method", false, false, false, 24);
        echo "

";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "notification"], "method", false, false, false, 26);
        echo "

";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 28), "getScripts", [0 => "footer"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 29
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 29), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 29);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 29), "get", [0 => "performanceJSDefer"], "method", false, false, false, 29)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
";
        // line 32
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 32), "get", [0 => "customJS"], "method", false, false, false, 32)) {
            // line 33
            echo "<script type=\"text/javascript\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 33), "get", [0 => "customJS"], "method", false, false, false, 33);
            echo "</script>
";
        }
        // line 35
        echo "
";
        // line 36
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 36), "isPopup", [], "method", false, false, false, 36) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 36), "get", [0 => "customCodeFooter"], "method", false, false, false, 36))) {
            // line 37
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 37), "get", [0 => "customCodeFooter"], "method", false, false, false, 37);
            echo "
";
        }
        // line 39
        echo "
";
        // line 40
        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 40), "isPopup", [], "method", false, false, false, 40) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 40), "get", [0 => "scrollTop"], "method", false, false, false, 40))) {
            // line 41
            echo "<div class=\"scroll-top\">
  <i class=\"fa fa-angle-up\"></i>
</div>
";
        }
        // line 45
        echo "
<style>
/* footer last menu custom css */
.links-menu-72 .module-body, .links-menu-384 .module-body{
  list-style-type: none;
  text-align: center;
}
.links-menu-72 .module-body li, .links-menu-384 .module-body li {
  display: inline-block !important;
  text-align: center;
}
.links-menu-72 .module-body li a{
  color: #ddd;
  text-decoration: none;
  font-size: 12px;
  padding: 10px 2em 5px 1px;
  text-align: center;
}
.links-menu-384 .module-body li a {
  color: #111;
  text-decoration: none;
  padding: 10px 7em 5px 1px;
  text-align: center;
}
.links-menu-384 .module-body{
  padding-left:5em;
  padding-bottom: 5px;
  padding-top: 5px;
}
</style>

<script>
  \$(document).ready(function() {
    \$(\".links-menu-72 .links-menu-item\").removeClass(\"menu-item\")
    \$(\".links-menu-384 .links-menu-item\").removeClass(\"menu-item\")

    let headerMenu = \$(\"footer .grid-row-1\").html()
    \$(\"footer .grid-row-1\").hide()
    \$(\".custom-menu-div\").html(headerMenu)
  })
</script>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 45,  130 => 41,  128 => 40,  125 => 39,  120 => 37,  118 => 36,  115 => 35,  109 => 33,  107 => 32,  104 => 31,  91 => 29,  87 => 28,  82 => 26,  77 => 24,  72 => 22,  68 => 20,  61 => 16,  57 => 14,  55 => 13,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}