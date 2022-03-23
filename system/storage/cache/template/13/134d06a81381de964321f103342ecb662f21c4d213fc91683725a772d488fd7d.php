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

/* extension/module/tmd_vendor.twig */
class __TwigTemplate_547375525bcf9adec419e5f06c0f11fbcfb34a70e15025ecbf7f1d7a62606b8a extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-tmd_vendor\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-tmd_vendor\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 29
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              <select name=\"tmd_vendor_status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 32
        if (($context["tmd_vendor_status"] ?? null)) {
            // line 33
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 34
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 36
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 37
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 39
        echo "              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-bgcolor\">";
        // line 43
        echo ($context["entry_bgcolor"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              <input type=\"text\" name=\"tmd_vendor_bgcolor\" value=\"";
        // line 45
        echo ($context["tmd_vendor_bgcolor"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_bgcolor"] ?? null);
        echo "\" id=\"input-bgcolor\" class=\"form-control demo\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-textcolor\">";
        // line 49
        echo ($context["entry_textcolor"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              <input type=\"text\" name=\"tmd_vendor_textcolor\" value=\"";
        // line 51
        echo ($context["tmd_vendor_textcolor"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_textcolor"] ?? null);
        echo "\" id=\"input-textcolor\" class=\"form-control demo\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-imgsize\">";
        // line 55
        echo ($context["entry_imgsize"] ?? null);
        echo "</label>
            <div class=\"col-sm-3\">
              <input type=\"text\" name=\"tmd_vendor_imgwidth\" value=\"";
        // line 57
        echo ($context["tmd_vendor_imgwidth"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_imgwidth"] ?? null);
        echo "\" id=\"input-imgsize\" class=\"form-control\" />
            </div>
            <div class=\"col-sm-3\">
              <input type=\"text\" name=\"tmd_vendor_imgheight\" value=\"";
        // line 60
        echo ($context["tmd_vendor_imgheight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_imgheight"] ?? null);
        echo "\" id=\"input-imgsize\" class=\"form-control\" />
            </div>
          </div>
\t\t  
\t\t  <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-imagetype\">";
        // line 65
        echo ($context["entry_imgbotrder"] ?? null);
        echo "</label>
            <div class=\"col-sm-6\">
              <select name=\"tmd_vendor_imagetype\" id=\"input-imagetype\" class=\"form-control\">
                ";
        // line 68
        if ((($context["tmd_vendor_imagetype"] ?? null) == "round")) {
            // line 69
            echo "                <option value=\"round\" selected=\"selected\">";
            echo ($context["entry_round"] ?? null);
            echo "</option>
                <option value=\"rect\">";
            // line 70
            echo ($context["entry_squre"] ?? null);
            echo "</option>
                ";
        } else {
            // line 72
            echo "                <option value=\"round\">";
            echo ($context["entry_round"] ?? null);
            echo "</option>
                <option value=\"rect\" selected=\"selected\">";
            // line 73
            echo ($context["entry_squre"] ?? null);
            echo "</option>
                ";
        }
        // line 75
        echo "              </select>
            </div>
          </div>
\t\t  
\t\t  
        </form>
      </div>
    </div>
  </div>
</div>
<script src=\"view/javascript/colorbox/jquery.minicolors.js\"></script>
<link rel=\"stylesheet\" href=\"view/javascript/colorbox/jquery.minicolors.css\">
<script type=\"text/javascript\"><!--
\$(document).ready( function() {
    \$('.demo').each( function() {
      \$(this).minicolors({
    control: \$(this).attr('data-control') || 'hue',
    defaultValue: \$(this).attr('data-defaultValue') || '',
    inline: \$(this).attr('data-inline') === 'true',
    letterCase: \$(this).attr('data-letterCase') || 'lowercase',
    opacity: \$(this).attr('data-opacity'),
    position: \$(this).attr('data-position') || 'bottom left',
    change: function(hex, opacity) {
    if( !hex ) return;
    if( opacity ) hex += ', ' + opacity;
      try {
        console.log(hex);
      } catch(e) {}
    },
    theme: 'bootstrap'
    });
    });
});
//--></script>
";
        // line 109
        echo ($context["footer"] ?? null);
        echo "

";
    }

    public function getTemplateName()
    {
        return "extension/module/tmd_vendor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 109,  220 => 75,  215 => 73,  210 => 72,  205 => 70,  200 => 69,  198 => 68,  192 => 65,  182 => 60,  174 => 57,  169 => 55,  160 => 51,  155 => 49,  146 => 45,  141 => 43,  135 => 39,  130 => 37,  125 => 36,  120 => 34,  115 => 33,  113 => 32,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/tmd_vendor.twig", "");
    }
}
