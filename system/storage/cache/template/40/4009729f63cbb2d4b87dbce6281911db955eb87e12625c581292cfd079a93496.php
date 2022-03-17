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

/* extension/module/gateway.twig */
class __TwigTemplate_565137d912797837937cab84499b739675ec1ed15b58e779128bf6629c93fc57 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-gateway\" data-toggle=\"tooltip\" title=\"";
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
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
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
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-gateway\" class=\"form-horizontal\">

    \t\t<div class=\"form-group\">
        \t  <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 30
        echo ($context["entry_gateway_status"] ?? null);
        echo "</label>
        \t  <div class=\"col-sm-10\">
        \t    <select name=\"module_gateway_status\" id=\"input-status\" class=\"form-control\">
        \t      ";
        // line 33
        if (($context["module_gateway_status"] ?? null)) {
            // line 34
            echo "        \t      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
        \t      <option value=\"0\">";
            // line 35
            echo ($context["text_disabled"] ?? null);
            echo "</option>
        \t      ";
        } else {
            // line 37
            echo "        \t      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
        \t      <option value=\"0\" selected=\"selected\">";
            // line 38
            echo ($context["text_disabled"] ?? null);
            echo "</option>
        \t      ";
        }
        // line 40
        echo "        \t    </select>
        \t  </div>
        \t</div>
        \t<hr>


\t        <ul class=\"nav nav-tabs\">
\t            <li class=\"active\"><a href=\"#tab-gateway\" data-toggle=\"tab\">";
        // line 47
        echo ($context["tab_gateway"] ?? null);
        echo "</a></li>
\t            <li><a href=\"#tab-order\" data-toggle=\"tab\">";
        // line 48
        echo ($context["tab_order"] ?? null);
        echo "</a></li>
            </ul>

         \t<div class=\"tab-content\">
\t          <div class=\"tab-pane active\" id=\"tab-gateway\">
\t          \t<div class=\"form-group\">
\t          \t \t<label class=\"control-label col-sm-2\">";
        // line 54
        echo ($context["entry_gateway_sender"] ?? null);
        echo "</label>
\t          \t \t<div class=\"col-sm-10\">
\t          \t \t\t<input type=\"text\" name=\"module_gateway_sender\" value=\"";
        // line 56
        echo ($context["module_gateway_sender"] ?? null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo ($context["entry_gateway_sender"] ?? null);
        echo "\" >
\t          \t \t</div>
\t          \t</div>

\t          \t <div class=\"form-group\">
\t          \t \t<label class=\"control-label col-sm-2\">";
        // line 61
        echo ($context["entry_apikey"] ?? null);
        echo "</label>
\t          \t \t<div class=\"col-sm-10\">
\t          \t \t\t<input type=\"text\" name=\"module_gateway_apikey\" value=\"";
        // line 63
        echo ($context["module_gateway_apikey"] ?? null);
        echo "\" class=\"form-control\"  placeholder=\"";
        echo ($context["entry_apikey"] ?? null);
        echo "\">
\t          \t \t</div>
\t          \t </div>
\t          </div>

\t           <div class=\"tab-pane\" id=\"tab-order\">

       \t\t\t\t<div class=\"table-responsive\">
\t\t                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
\t\t                  <thead>
\t\t                    <tr>
\t\t                      <th class=\"text-left\">";
        // line 74
        echo ($context["text_keyword"] ?? null);
        echo "</th>
\t\t                      <th class=\"text-left\">";
        // line 75
        echo ($context["text_variable"] ?? null);
        echo "</th>
\t\t                    </tr>
\t\t                  </thead>
\t\t                  <tbody>
\t\t                  \t<tr>
\t\t                  \t\t<td>
\t\t                  \t\t";
        // line 81
        echo ($context["text_customer"] ?? null);
        echo " <br>
\t\t                  \t\t";
        // line 82
        echo ($context["text_order_id"] ?? null);
        echo " <br>
\t\t                  \t\t";
        // line 83
        echo ($context["text_store_url"] ?? null);
        echo " <br>
\t\t                  \t\t";
        // line 84
        echo ($context["text_store_name"] ?? null);
        echo " <br>
\t\t                  \t\t";
        // line 85
        echo ($context["text_product"] ?? null);
        echo " <br>
\t\t                  \t\t";
        // line 86
        echo ($context["text_price"] ?? null);
        echo " <br>
\t\t                  \t\t";
        // line 87
        echo ($context["text_comment"] ?? null);
        echo " <br>

\t\t                  \t\t</td>
\t\t                  \t\t<td>
\t\t                  \t\t\t";
        // line 91
        echo ($context["text_var_customer"] ?? null);
        echo " <br>
\t\t                  \t\t\t";
        // line 92
        echo ($context["text_var_order_id"] ?? null);
        echo " <br>
\t\t                  \t\t\t";
        // line 93
        echo ($context["text_var_store_url"] ?? null);
        echo " <br>
\t\t                  \t\t\t";
        // line 94
        echo ($context["text_var_store_name"] ?? null);
        echo " <br>
\t\t                  \t\t\t";
        // line 95
        echo ($context["text_var_product"] ?? null);
        echo " <br>
\t\t                  \t\t\t";
        // line 96
        echo ($context["text_var_price"] ?? null);
        echo " <br>
\t\t                  \t\t\t";
        // line 97
        echo ($context["text_var_comment"] ?? null);
        echo " <br>
\t\t                  \t\t</td>
\t\t                  \t\t
\t\t                  \t</tr>
\t\t                  </tbody>
\t\t                </table>
\t\t              </div>



\t           ";
        // line 108
        echo "
\t           \t";
        // line 109
        if (($context["order_statuses"] ?? null)) {
            // line 110
            echo "\t           \t\t<div class=\"col\" style=\"float: left;width: 100%;\">
\t           \t\t\t";
            // line 111
            $context["row"] = 1;
            // line 112
            echo "\t           \t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
                // line 113
                echo "\t           \t\t<div style=\"display: block; padding: 13px 7px;\" data-toggle=\"collapse\" data-target=\"#sms";
                echo ($context["row"] ?? null);
                echo "\" class=\"collapsed\" aria-expanded=\"false\">";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 113);
                echo "<i style=\"float:right\" class=\"fa fa-plus\"></i></div>
\t\t          \t\t<div id=\"sms";
                // line 114
                echo ($context["row"] ?? null);
                echo "\" class=\"collapse\" aria-expanded=\"false\" style=\"height: 0px;\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"order-status-";
                // line 116
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 116);
                echo "\">";
                echo ($context["entry_status"] ?? null);
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<select name=\"module_gateway_order[";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 118);
                echo "][status]\" id=\"order-status-";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 118);
                echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
                // line 119
                if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["module_gateway_order"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 119)] ?? null) : null), "status", [], "any", false, false, false, 119)) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" >";
                    // line 121
                    echo ($context["text_disabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 123
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
                    echo ($context["text_enabled"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
                    // line 124
                    echo ($context["text_disabled"] ?? null);
                    echo "</option>

\t\t\t\t\t\t\t\t\t\t";
                }
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t          \t\t\t\t\t\t\t\t\t
\t\t          \t\t\t<div class=\"form-group row\">
\t\t          \t\t\t\t<label class=\"col-sm-2 control-label\" for=\"order-template-";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 133);
                echo "\">";
                echo ($context["entry_template"] ?? null);
                echo "</label>
\t          \t\t\t\t\t<div class=\"col-sm-10\">
\t          \t\t\t\t\t\t<textarea name=\"module_gateway_order[";
                // line 135
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 135);
                echo "][template]\" row=\"5\"  id=\"order-template-";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 135);
                echo "\" placeholder=\"";
                echo ($context["entry_template"] ?? null);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["module_gateway_order"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 135)] ?? null) : null), "template", [], "any", false, false, false, 135);
                echo "</textarea>
\t          \t\t\t\t\t</div>
\t\t\t          \t\t</div>
\t\t          \t\t</div>
\t           \t\t\t";
                // line 139
                $context["row"] = (($context["row"] ?? null) + 1);
                // line 140
                echo "\t           \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "\t           \t\t</div>
\t           \t";
        }
        // line 143
        echo "
\t        </div>


        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 152
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/gateway.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 152,  378 => 143,  374 => 141,  368 => 140,  366 => 139,  353 => 135,  346 => 133,  338 => 127,  332 => 124,  327 => 123,  322 => 121,  317 => 120,  315 => 119,  309 => 118,  302 => 116,  297 => 114,  290 => 113,  285 => 112,  283 => 111,  280 => 110,  278 => 109,  275 => 108,  262 => 97,  258 => 96,  254 => 95,  250 => 94,  246 => 93,  242 => 92,  238 => 91,  231 => 87,  227 => 86,  223 => 85,  219 => 84,  215 => 83,  211 => 82,  207 => 81,  198 => 75,  194 => 74,  178 => 63,  173 => 61,  163 => 56,  158 => 54,  149 => 48,  145 => 47,  136 => 40,  131 => 38,  126 => 37,  121 => 35,  116 => 34,  114 => 33,  108 => 30,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/gateway.twig", "");
    }
}
