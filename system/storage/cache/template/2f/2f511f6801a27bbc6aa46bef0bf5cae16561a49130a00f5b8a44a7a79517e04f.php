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

/* vendor/vendor_setting.twig */
class __TwigTemplate_f84ca71668c9cb000b9c372185852b7ee6037ca817890306d4e85b6151389b38 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-megaheader\" data-toggle=\"tooltip\" title=\"";
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
\t";
        // line 17
        if (($context["success"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo "  
\t
\t";
        // line 28
        if (($context["error_keynotfound"] ?? null)) {
            // line 29
            echo "\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_keynotfound"] ?? null);
            echo "
\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t</div>
\t";
        }
        // line 32
        echo " 
\t<div class=\"loadlicensekey\"></div>\t\t

    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h2 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 37
        echo ($context["text_add"] ?? null);
        echo "</h2>
      </div>
    <div class=\"panel-body\">
        <form action=\"";
        // line 40
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-megaheader\" class=\"form-horizontal\">\t\t
\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 42
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
\t\t\t\t
\t\t\t\t<li ";
        // line 44
        if (($context["error_showorderwarning"] ?? null)) {
            echo " class=\"warningorder\" ";
        }
        echo "><a href=\"#tab-data\" data-toggle=\"tab\"><i class=\"fa fa-hand-paper-o\" aria-hidden=\"true\"></i> ";
        echo ($context["tab_data"] ?? null);
        echo "</a></li>

\t\t\t\t<li><a href=\"#tab-language\" data-toggle=\"tab\"><i class=\"fa fa-language\" aria-hidden=\"true\"></i> ";
        // line 46
        echo ($context["tab_selerlanguage"] ?? null);
        echo "</a></li>
\t\t\t\t<!--############13 02 2021############-->
\t\t\t\t<li><a href=\"#tab-vendortabsetting\" data-toggle=\"tab\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 48
        echo ($context["tab_vendortabsetting"] ?? null);
        echo "</a></li>
\t\t\t\t<!--############13 02 2021############-->
\t\t\t\t
\t\t\t\t<!--advance settings-->
\t\t\t\t<li><a href=\"#tab-signupsetting\" data-toggle=\"tab\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 52
        echo ($context["tab_signupsetting"] ?? null);
        echo "</a></li>
\t\t\t\t<!--advance settings-->
\t\t\t</ul>
\t\t\t
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-vgeneral\" data-toggle=\"tab\"><i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>";
        // line 59
        echo ($context["tab_vgeneral"] ?? null);
        echo "</a></li>\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#tab-vdata\" data-toggle=\"tab\"><i class=\"fa fa-eye-slash\" aria-hidden=\"true\"></i> ";
        // line 60
        echo ($context["tab_vdata"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tab-content\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-vgeneral\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-vendor_customer2vendor\"><span data-toggle=\"tooltip\" title=\"";
        // line 66
        echo ($context["help_customer2vendor"] ?? null);
        echo "\">";
        echo ($context["entry_customer2vendor"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-sm-6\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t";
        // line 69
        if (($context["vendor_customer2vendor"] ?? null)) {
            // line 70
            echo "\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_customer2vendor\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t   ";
            // line 72
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t   ";
        } else {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_customer2vendor\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 77
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t";
        }
        // line 80
        echo "\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_customer2vendor"] ?? null)) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_customer2vendor\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 83
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 86
            echo "\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_customer2vendor\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t";
            // line 88
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t";
        }
        // line 90
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-vendor_vendor2customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 95
        echo ($context["help_vendor2customer"] ?? null);
        echo "\">";
        echo ($context["entry_vendor2customer"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-sm-6\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t";
        // line 98
        if (($context["vendor_vendor2customer"] ?? null)) {
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vendor2customer\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t   ";
            // line 101
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t   ";
        } else {
            // line 104
            echo "\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vendor2customer\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t";
            // line 106
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_vendor2customer"] ?? null)) {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vendor2customer\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
            // line 112
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vendor2customer\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t";
            // line 117
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 119
        echo "\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-vendorautoapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 124
        echo ($context["help_vendorautoapprove"] ?? null);
        echo "\">";
        echo ($context["entry_vendorautoapprove"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-sm-6\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t";
        // line 127
        if (($context["vendor_vendorautoapprove"] ?? null)) {
            // line 128
            echo "\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vendorautoapprove\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t   ";
            // line 130
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t   ";
        } else {
            // line 133
            echo "\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vendorautoapprove\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t";
            // line 135
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 138
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_vendorautoapprove"] ?? null)) {
            // line 139
            echo "\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vendorautoapprove\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
            // line 141
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 144
            echo "\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vendorautoapprove\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t";
            // line 146
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 148
        echo "\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-proautoapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 153
        echo ($context["help_proautoapprove"] ?? null);
        echo "\">";
        echo ($context["entry_proautoapprove"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-sm-6\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 156
        if (($context["vendor_proautoapprove"] ?? null)) {
            // line 157
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_proautoapprove\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 159
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t   ";
        } else {
            // line 162
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_proautoapprove\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 164
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 167
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_proautoapprove"] ?? null)) {
            // line 168
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_proautoapprove\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 170
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_proautoapprove\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 175
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 177
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-proautoapprove\"><span data-toggle=\"tooltip\" title=\"";
        // line 182
        echo ($context["help_hidevendorcontact"] ?? null);
        echo "\">";
        echo ($context["entry_hidevendorcontact"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-sm-6\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 185
        if (($context["vendor_hidevendorcontact"] ?? null)) {
            // line 186
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevendorcontact\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 188
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t   ";
        } else {
            // line 191
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevendorcontact\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 193
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 196
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_hidevendorcontact"] ?? null)) {
            // line 197
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevendorcontact\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 199
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 202
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevendorcontact\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 204
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 206
        echo "\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t<div class=\"form-group hide\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-vendor_vpostcode\"><span data-toggle=\"tooltip\" title=\"";
        // line 211
        echo ($context["help_postcode"] ?? null);
        echo "\">";
        echo ($context["entry_vpostcode"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-sm-6\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 214
        if (($context["vendor_vpostcode"] ?? null)) {
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vpostcode\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 217
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t   ";
        } else {
            // line 220
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vpostcode\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 222
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 225
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_vpostcode"] ?? null)) {
            // line 226
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vpostcode\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 228
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 231
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vpostcode\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 233
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-vendorterms\"><span data-toggle=\"tooltip\" title=\"";
        // line 240
        echo ($context["help_vendorterms"] ?? null);
        echo "\">";
        echo ($context["entry_vendorterms"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<select name=\"vendor_vprivacy_id\" id=\"input-vendorterms\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 243
        echo ($context["text_none"] ?? null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 245
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 245) == ($context["vendor_vprivacy_id"] ?? null))) {
                echo "\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 246
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 246);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 246);
                echo "</option>\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 247
                echo "\t\t\t\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                // line 248
                echo twig_get_attribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 248);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 248);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 250
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-vdata\">
\t\t\t\t\t\t\t<legend class=\"allsellers\">  <i class=\"fa fa-eye-slash\" aria-hidden=\"true\"></i> ";
        // line 257
        echo ($context["text_forallseller"] ?? null);
        echo "</legend>\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-hidevname\"><span data-toggle=\"tooltip\" title=\"";
        // line 260
        echo ($context["help_hidevname"] ?? null);
        echo "\">";
        echo ($context["entry_hidevname"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-sm-6\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 263
        if (($context["vendor_hidevendorname"] ?? null)) {
            // line 264
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevendorname\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 266
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t   ";
        } else {
            // line 269
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevendorname\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 271
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 274
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_hidevendorname"] ?? null)) {
            // line 275
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevendorname\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 277
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 280
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevendorname\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 282
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 284
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-vendor_hidevemail\"><span data-toggle=\"tooltip\" title=\"";
        // line 289
        echo ($context["help_hidevemail"] ?? null);
        echo "\">";
        echo ($context["entry_hidevemail"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-sm-6\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 292
        if (($context["vendor_hidevemail"] ?? null)) {
            // line 293
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevemail\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 295
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t   ";
        } else {
            // line 298
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevemail\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 300
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 303
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_hidevemail"] ?? null)) {
            // line 304
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevemail\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 306
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 309
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevemail\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 311
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 313
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-vendor_hidevponeno\"><span data-toggle=\"tooltip\" title=\"";
        // line 317
        echo ($context["help_hidevponeno"] ?? null);
        echo "\">";
        echo ($context["entry_hidevphoneno"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-sm-6\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 320
        if (($context["vendor_hidevponeno"] ?? null)) {
            // line 321
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevponeno\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 323
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t   ";
        } else {
            // line 326
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevponeno\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 328
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 331
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_hidevponeno"] ?? null)) {
            // line 332
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevponeno\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 334
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 337
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevponeno\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 339
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 341
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-3 control-label\" for=\"input-vendor_hidevsocialicon\"><span data-toggle=\"tooltip\" title=\"";
        // line 346
        echo ($context["help_hidevsocialicon"] ?? null);
        echo "\">";
        echo ($context["entry_hidevsocialicon"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group col-sm-6\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 349
        if (($context["vendor_hidevsocialicon"] ?? null)) {
            // line 350
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevsocialicon\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t   ";
            // line 352
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t   ";
        } else {
            // line 355
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevsocialicon\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 357
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 360
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_hidevsocialicon"] ?? null)) {
            // line 361
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevsocialicon\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 363
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 366
            echo "\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_hidevsocialicon\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 368
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 370
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--08 04 2020-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t   
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-data\">
\t\t\t\t\t<div class=\"alert alert-info\"><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i> The status that you have selected here will appear on the front of seller dashboard orders and Earn Payment!!. </div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-showorder-status\">
\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 382
        echo ($context["help_showorder_status"] ?? null);
        echo "\">";
        echo ($context["entry_showorder_status"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t";
        // line 385
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            echo "\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t";
            // line 388
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 388), ($context["vendor_showorder_status"] ?? null))) {
                // line 389
                echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"vendor_showorder_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 389);
                echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t";
                // line 390
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 390);
                echo "
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 392
                echo "\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"vendor_showorder_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 392);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t  ";
                // line 393
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 393);
                echo "
\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 394
            echo " 
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 398
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t ";
        // line 399
        if (($context["error_showorder_status"] ?? null)) {
            // line 400
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_showorder_status"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 402
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-earnpayment-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 406
        echo ($context["help_earnpayment_status"] ?? null);
        echo "\">";
        echo ($context["entry_earnpayment_status"] ?? null);
        echo "</span></label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            echo "\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 412
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 412), ($context["vendor_earnpayment_status"] ?? null))) {
                // line 413
                echo "\t\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"vendor_earnpayment_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 413);
                echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
                // line 414
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 414);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 416
                echo "\t\t\t\t\t\t\t\t\t\t\t  <input type=\"checkbox\" name=\"vendor_earnpayment_status[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 416);
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t  ";
                // line 417
                echo twig_get_attribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 417);
                echo "
\t\t\t\t\t\t\t\t\t\t\t ";
            }
            // line 418
            echo " 
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 422
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 423
        if (($context["error_earnpayment_status"] ?? null)) {
            // line 424
            echo "\t\t\t\t\t\t\t<div class=\"text-danger\">";
            echo ($context["error_earnpayment_status"] ?? null);
            echo "</div>
\t\t\t\t\t\t\t";
        }
        // line 426
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane \" id=\"tab-language\">
\t\t\t\t\t<legend class=\"allsellers\"> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> 
\t\t\t\t\t\t";
        // line 432
        echo ($context["text_selerlanguage"] ?? null);
        echo "</legend>\t
\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language-lable\">
\t\t\t\t\t\t\t";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 435
            echo "\t\t\t\t\t\t\t\t<li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 435);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 435);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 435);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 435);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 435);
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 437
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t";
        // line 439
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 440
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 440);
            echo "\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sellerlist";
            // line 442
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 442);
            echo "\">";
            echo ($context["text_sellerlist"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 444
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 444);
            echo "][sellerlist]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["vendor_languages"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 444)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["vendor_languages"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 444)] ?? null) : null), "sellerlist", [], "any", false, false, false, 444)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_sellerlist"] ?? null);
            echo "\" id=\"input-sellerlist[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 444);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sellerprofile[";
            // line 447
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 447);
            echo "]\">";
            echo ($context["text_sellerprofile"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 449
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 449);
            echo "][sellerprofile]\" value=\"";
            echo (((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["vendor_languages"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 449)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["vendor_languages"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 449)] ?? null) : null), "sellerprofile", [], "any", false, false, false, 449)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_sellerprofile"] ?? null);
            echo "\" id=\"input-sellerprofile[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 449);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-loginseller[";
            // line 454
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 454);
            echo "]\">";
            echo ($context["text_loginseller"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 456
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 456);
            echo "][loginseller]\" value=\"";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["vendor_languages"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 456)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["vendor_languages"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 456)] ?? null) : null), "loginseller", [], "any", false, false, false, 456)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_loginseller"] ?? null);
            echo "\" id=\"input-loginseller[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 456);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-loginseller[";
            // line 459
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 459);
            echo "]\">";
            echo ($context["text_afterloginseller"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 461
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 461);
            echo "][afterloginseller]\" value=\"";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["vendor_languages"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 461)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["vendor_languages"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 461)] ?? null) : null), "afterloginseller", [], "any", false, false, false, 461)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_afterloginseller"] ?? null);
            echo "\" id=\"input-afterloginseller[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 461);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sellerdash[";
            // line 466
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 466);
            echo "]\">";
            echo ($context["text_sellerdash"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 468
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 468);
            echo "][sellerdash]\" value=\"";
            echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["vendor_languages"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 468)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["vendor_languages"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 468)] ?? null) : null), "sellerdash", [], "any", false, false, false, 468)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_sellerdash"] ?? null);
            echo "\" id=\"input-sellerdash[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 468);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sellerproduct[";
            // line 471
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 471);
            echo "]\">";
            echo ($context["text_sellerproduct"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 473
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 473);
            echo "][sellerproduct]\" value=\"";
            echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["vendor_languages"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 473)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["vendor_languages"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 473)] ?? null) : null), "sellerproduct", [], "any", false, false, false, 473)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_sellerproduct"] ?? null);
            echo "\" id=\"input-sellerproduct[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 473);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sellerreview[";
            // line 478
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 478);
            echo "]\">";
            echo ($context["text_sellerreview"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 480
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 480);
            echo "][sellerreview]\" value=\"";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["vendor_languages"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 480)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["vendor_languages"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 480)] ?? null) : null), "sellerreview", [], "any", false, false, false, 480)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_sellerreview"] ?? null);
            echo "\" id=\"input-sellerreview[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 480);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-managestore[";
            // line 483
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 483);
            echo "]\">";
            echo ($context["text_managestore"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 485
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 485);
            echo "][managestore]\" value=\"";
            echo (((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["vendor_languages"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 485)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["vendor_languages"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 485)] ?? null) : null), "managestore", [], "any", false, false, false, 485)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_managestore"] ?? null);
            echo "\" id=\"input-managestore[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 485);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-manageprofile[";
            // line 490
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 490);
            echo "]\">";
            echo ($context["text_manageprofile"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 492
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 492);
            echo "][manageprofile]\" value=\"";
            echo (((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["vendor_languages"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 492)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["vendor_languages"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 492)] ?? null) : null), "manageprofile", [], "any", false, false, false, 492)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_manageprofile"] ?? null);
            echo "\" id=\"input-manageprofile[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 492);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-download[";
            // line 495
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 495);
            echo "]\">";
            echo ($context["text_download"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 497
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 497);
            echo "][download]\" value=\"";
            echo (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["vendor_languages"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 497)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["vendor_languages"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 497)] ?? null) : null), "download", [], "any", false, false, false, 497)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_download"] ?? null);
            echo "\" id=\"input-download[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 497);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-manufacture[";
            // line 502
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 502);
            echo "]\">";
            echo ($context["text_manufacture"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 504
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 504);
            echo "][manufacture]\" value=\"";
            echo (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["vendor_languages"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 504)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["vendor_languages"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 504)] ?? null) : null), "manufacture", [], "any", false, false, false, 504)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_manufacture"] ?? null);
            echo "\" id=\"input-manufacture[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 504);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sellerlogout[";
            // line 507
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 507);
            echo "]\">";
            echo ($context["text_logout"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 509
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 509);
            echo "][sellerlogout]\" value=\"";
            echo (((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = ($context["vendor_languages"] ?? null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 509)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["vendor_languages"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 509)] ?? null) : null), "sellerlogout", [], "any", false, false, false, 509)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_logout"] ?? null);
            echo "\" id=\"input-sellerlogout[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 509);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--############13 02 2021############-->
\t\t\t\t\t\t\t\t<div class=\"form-group\">\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-byseller[";
            // line 515
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 515);
            echo "]\">";
            echo ($context["text_byseller"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 517
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 517);
            echo "][byseller]\" value=\"";
            echo (((($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = ($context["vendor_languages"] ?? null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 517)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["vendor_languages"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 517)] ?? null) : null), "byseller", [], "any", false, false, false, 517)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_byseller"] ?? null);
            echo "\" id=\"input-byseller[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 517);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--############13 02 2021############-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<legend class=\"allsellers\"> <i class=\"fa fa-book\" aria-hidden=\"true\"></i> ";
            // line 522
            echo ($context["text_productpage"] ?? null);
            echo "</legend>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-selernameinpro[";
            // line 525
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 525);
            echo "]\"><span data-toggle=\"tooltip\" title=\"";
            echo ($context["help_selernameinpro"] ?? null);
            echo "\" > ";
            echo ($context["text_selernameinpro"] ?? null);
            echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"vendor_languages[";
            // line 527
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 527);
            echo "][selernameinpro]\" value=\"";
            echo (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["vendor_languages"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 527)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["vendor_languages"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 527)] ?? null) : null), "selernameinpro", [], "any", false, false, false, 527)) : (""));
            echo "\" placeholder=\"";
            echo ($context["text_selernameinpro"] ?? null);
            echo "\" id=\"input-selernameinpro[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 527);
            echo "]\" class=\"form-control\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<!--############ 13 02 2021 ############Start-->
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sellershortcut[";
            // line 532
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 532);
            echo "]\">";
            echo ($context["entry_sellershortcut"] ?? null);
            echo "</label>
\t\t\t\t                    <div class=\"col-sm-10\">
\t\t\t\t                    <textarea type=\"text\" name=\"vendor_languages[";
            // line 534
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 534);
            echo "][sellershortcut]\" value=\"\" placeholder=\"";
            echo ($context["entry_message"] ?? null);
            echo "\" id=\"input-sellershortcut[";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 534);
            echo "]\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = ($context["vendor_languages"] ?? null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 534)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["vendor_languages"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 534)] ?? null) : null), "sellershortcut", [], "any", false, false, false, 534)) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--############ 13 02 2021 ############Start-->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 539
        echo "\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t
\t\t\t\t<!--advance settings-->\t
\t\t\t\t<div class=\"tab-pane\" id=\"tab-signupsetting\">\t
\t\t\t\t
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"active\"><a href=\"#tab-personaldetails\" data-toggle=\"tab\">";
        // line 547
        echo ($context["tab_personaldetails"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-generalstore\" data-toggle=\"tab\">";
        // line 548
        echo ($context["tab_generalstore"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-datastore\" data-toggle=\"tab\">";
        // line 549
        echo ($context["tab_datastore"] ?? null);
        echo "</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-paymentdetail\" data-toggle=\"tab\">";
        // line 550
        echo ($context["tab_paymentdetail"] ?? null);
        echo "</a></li>
\t\t\t\t\t</ul>
\t\t\t
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-personaldetails\">\t
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-12\">\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"table-responsive\"> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover signupdata\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 562
        echo ($context["text_sortorderofsignup"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 564
        echo ($context["text_required"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 565
        echo ($context["text_showhidesignup"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 573
        echo ($context["entry_display_name"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 578
        if (($context["vendor_required_displayname"] ?? null)) {
            // line 579
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_displayname\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 581
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 584
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_displayname\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 586
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 589
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_displayname"] ?? null)) {
            // line 590
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_displayname\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 592
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 595
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_displayname\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 597
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 599
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 603
        if (($context["vendor_status_displayname"] ?? null)) {
            // line 604
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_displayname\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 606
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 609
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_displayname\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 611
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 614
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_displayname"] ?? null)) {
            // line 615
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_displayname\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 617
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 620
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_displayname\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 622
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 624
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 630
        echo ($context["entry_lastname"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 634
        if (($context["vendor_required_lastname"] ?? null)) {
            // line 635
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_lastname\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 637
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 640
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_lastname\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 642
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 645
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_lastname"] ?? null)) {
            // line 646
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_lastname\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 648
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 651
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_lastname\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 653
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 655
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 659
        if (($context["vendor_status_lastname"] ?? null)) {
            // line 660
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_lastname\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 662
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 665
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_lastname\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 667
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 670
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_lastname"] ?? null)) {
            // line 671
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_lastname\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 673
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 676
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_lastname\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 678
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 680
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 686
        echo ($context["entry_telephone"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 690
        if (($context["vendor_required_telephone"] ?? null)) {
            // line 691
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_telephone\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 693
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 696
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_telephone\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 698
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 701
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_telephone"] ?? null)) {
            // line 702
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_telephone\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 704
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 707
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_telephone\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 709
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 711
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 715
        if (($context["vendor_status_telephone"] ?? null)) {
            // line 716
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_telephone\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 718
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 721
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_telephone\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 723
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 726
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_telephone"] ?? null)) {
            // line 727
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_telephone\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 729
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 732
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_telephone\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 734
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 736
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 742
        echo ($context["entry_fax"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 746
        if (($context["vendor_required_fax"] ?? null)) {
            // line 747
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_fax\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 749
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 752
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_fax\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 754
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 757
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_fax"] ?? null)) {
            // line 758
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_fax\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 760
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 763
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_fax\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 765
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 767
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 771
        if (($context["vendor_status_fax"] ?? null)) {
            // line 772
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_fax\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 774
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 777
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_fax\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 779
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 782
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_fax"] ?? null)) {
            // line 783
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_fax\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 785
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 788
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_fax\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 790
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 792
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 798
        echo ($context["entry_company"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 802
        if (($context["vendor_required_company"] ?? null)) {
            // line 803
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_company\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 805
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 808
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_company\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 810
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 813
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_company"] ?? null)) {
            // line 814
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_company\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 816
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 819
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_company\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 821
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 823
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 827
        if (($context["vendor_status_company"] ?? null)) {
            // line 828
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_company\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 830
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 833
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_company\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 835
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 838
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_company"] ?? null)) {
            // line 839
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_company\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 841
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 844
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_company\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 846
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 848
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 854
        echo ($context["entry_address_1"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 858
        if (($context["vendor_required_address_1"] ?? null)) {
            // line 859
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_address_1\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 861
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 864
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_address_1\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 866
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 869
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_address_1"] ?? null)) {
            // line 870
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_address_1\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 872
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 875
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_address_1\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 877
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 879
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 883
        if (($context["vendor_status_address_1"] ?? null)) {
            // line 884
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_address_1\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 886
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 889
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_address_1\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 891
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 894
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_address_1"] ?? null)) {
            // line 895
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_address_1\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 897
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 900
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_address_1\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 902
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 904
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 910
        echo ($context["entry_address_2"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 914
        if (($context["vendor_required_address_2"] ?? null)) {
            // line 915
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_address_2\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 917
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 920
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_address_2\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 922
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 925
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_address_2"] ?? null)) {
            // line 926
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_address_2\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 928
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 931
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_address_2\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 933
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 935
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 939
        if (($context["vendor_status_address_2"] ?? null)) {
            // line 940
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_address_2\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 942
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 945
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_address_2\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 947
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 950
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_address_2"] ?? null)) {
            // line 951
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_address_2\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 953
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 956
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_address_2\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 958
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 960
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 966
        echo ($context["entry_city"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 970
        if (($context["vendor_required_city"] ?? null)) {
            // line 971
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_city\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 973
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 976
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_city\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 978
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 981
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_city"] ?? null)) {
            // line 982
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_city\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 984
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 987
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_city\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 989
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 991
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 995
        if (($context["vendor_status_city"] ?? null)) {
            // line 996
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_city\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 998
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1001
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_city\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1003
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1006
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_city"] ?? null)) {
            // line 1007
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_city\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1009
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1012
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_city\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1014
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1016
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1022
        echo ($context["entry_country"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1026
        if (($context["vendor_required_country"] ?? null)) {
            // line 1027
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_country\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1029
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1032
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_country\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1034
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1037
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_country"] ?? null)) {
            // line 1038
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_country\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1040
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1043
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_country\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1045
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1047
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1051
        if (($context["vendor_status_country"] ?? null)) {
            // line 1052
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_country\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1054
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1057
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_country\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1059
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1062
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_country"] ?? null)) {
            // line 1063
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_country\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1065
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1068
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_country\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1070
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1072
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1078
        echo ($context["entry_zone"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1082
        if (($context["vendor_required_zone"] ?? null)) {
            // line 1083
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_zone\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1085
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1088
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_zone\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1090
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1093
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_zone"] ?? null)) {
            // line 1094
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_zone\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1096
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1099
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_zone\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1101
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1103
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1107
        if (($context["vendor_status_zone"] ?? null)) {
            // line 1108
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_zone\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1110
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1113
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_zone\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1115
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1118
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_zone"] ?? null)) {
            // line 1119
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_zone\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1121
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1124
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_zone\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1126
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1128
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1134
        echo ($context["entry_postcode"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1138
        if (($context["vendor_vpostcode"] ?? null)) {
            // line 1139
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vpostcode\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1141
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1144
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vpostcode\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1146
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1149
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_vpostcode"] ?? null)) {
            // line 1150
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vpostcode\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1152
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1155
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_vpostcode\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1157
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1159
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1163
        if (($context["vendor_status_postcode"] ?? null)) {
            // line 1164
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_postcode\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1166
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1169
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_postcode\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1171
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1174
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_postcode"] ?? null)) {
            // line 1175
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_postcode\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1177
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1180
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_postcode\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1182
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1184
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1190
        echo ($context["entry_about"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1194
        if (($context["vendor_required_about"] ?? null)) {
            // line 1195
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_about\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1197
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1200
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_about\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1202
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1205
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_about"] ?? null)) {
            // line 1206
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_about\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1208
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1211
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_about\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1213
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1215
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1219
        if (($context["vendor_status_about"] ?? null)) {
            // line 1220
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_about\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1222
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1225
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_about\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1227
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1230
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_about"] ?? null)) {
            // line 1231
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_about\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1233
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1236
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_about\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1238
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1240
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-generalstore\">\t
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-12\">\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"table-responsive\"> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover signupdata\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 1260
        echo ($context["text_sortorderofsignup"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1262
        echo ($context["text_required"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 1263
        echo ($context["text_showhidesignup"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1271
        echo ($context["entry_meta_description"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1276
        if (($context["vendor_required_meta_description"] ?? null)) {
            // line 1277
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_meta_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1279
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1282
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_meta_description\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1284
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1287
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_meta_description"] ?? null)) {
            // line 1288
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_meta_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1290
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1293
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_meta_description\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1295
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1297
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1301
        if (($context["vendor_status_meta_description"] ?? null)) {
            // line 1302
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_meta_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1304
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1307
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_meta_description\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1309
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1312
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_meta_description"] ?? null)) {
            // line 1313
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_meta_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1315
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1318
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_meta_description\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1320
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1322
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1329
        echo ($context["entry_description"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1334
        if (($context["vendor_required_description"] ?? null)) {
            // line 1335
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1337
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1340
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_description\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1342
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1345
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_description"] ?? null)) {
            // line 1346
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1348
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1351
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_description\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1353
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1355
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1359
        if (($context["vendor_status_description"] ?? null)) {
            // line 1360
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_description\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1362
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1365
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_description\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1367
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1370
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_description"] ?? null)) {
            // line 1371
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_description\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1373
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1376
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_description\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1378
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1380
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1387
        echo ($context["entry_shipping_policy"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1392
        if (($context["vendor_required_shipping_policy"] ?? null)) {
            // line 1393
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_shipping_policy\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1395
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1398
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_shipping_policy\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1400
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1403
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_shipping_policy"] ?? null)) {
            // line 1404
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_shipping_policy\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1406
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1409
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_shipping_policy\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1411
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1413
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1417
        if (($context["vendor_status_shipping_policy"] ?? null)) {
            // line 1418
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_shipping_policy\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1420
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1423
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_shipping_policy\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1425
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1428
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_shipping_policy"] ?? null)) {
            // line 1429
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_shipping_policy\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1431
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1434
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_shipping_policy\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1436
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1438
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1445
        echo ($context["entry_return_policy"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1450
        if (($context["vendor_required_return_policy"] ?? null)) {
            // line 1451
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_return_policy\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1453
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1456
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_return_policy\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1458
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1461
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_return_policy"] ?? null)) {
            // line 1462
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_return_policy\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1464
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1467
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_return_policy\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1469
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1471
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1475
        if (($context["vendor_status_return_policy"] ?? null)) {
            // line 1476
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_return_policy\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1478
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1481
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_return_policy\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1483
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1486
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_return_policy"] ?? null)) {
            // line 1487
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_return_policy\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1489
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1492
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_return_policy\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1494
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1496
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1503
        echo ($context["entry_meta_keyword"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1508
        if (($context["vendor_required_meta_keyword"] ?? null)) {
            // line 1509
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_meta_keyword\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1511
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1514
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_meta_keyword\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1516
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1519
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_meta_keyword"] ?? null)) {
            // line 1520
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_meta_keyword\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1522
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1525
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_meta_keyword\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1527
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1529
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1533
        if (($context["vendor_status_meta_keyword"] ?? null)) {
            // line 1534
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_meta_keyword\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1536
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1539
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_meta_keyword\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1541
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1544
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_meta_keyword"] ?? null)) {
            // line 1545
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_meta_keyword\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1547
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1550
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_meta_keyword\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1552
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1554
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-datastore\">\t
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-12\">\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"table-responsive\"> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover signupdata\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 1571
        echo ($context["text_sortorderofsignup"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1573
        echo ($context["text_required"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 1574
        echo ($context["text_showhidesignup"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1582
        echo ($context["entry_bank_detail"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1587
        if (($context["vendor_required_bank_detail"] ?? null)) {
            // line 1588
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_bank_detail\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1590
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1593
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_bank_detail\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1595
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1598
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_bank_detail"] ?? null)) {
            // line 1599
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_bank_detail\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1601
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1604
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_bank_detail\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1606
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1608
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1612
        if (($context["vendor_status_bank_detail"] ?? null)) {
            // line 1613
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_bank_detail\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1615
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1618
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_bank_detail\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1620
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1623
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_bank_detail"] ?? null)) {
            // line 1624
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_bank_detail\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1626
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1629
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_bank_detail\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1631
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1633
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1640
        echo ($context["entry_storeabout"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1645
        if (($context["vendor_required_storeabout"] ?? null)) {
            // line 1646
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_storeabout\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1648
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1651
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_storeabout\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1653
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1656
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_storeabout"] ?? null)) {
            // line 1657
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_storeabout\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1659
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1662
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_storeabout\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1664
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1666
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1670
        if (($context["vendor_status_storeabout"] ?? null)) {
            // line 1671
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_storeabout\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1673
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1676
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_storeabout\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1678
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1681
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_storeabout"] ?? null)) {
            // line 1682
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_storeabout\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1684
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1687
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_storeabout\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1689
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1691
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1699
        echo ($context["entry_mapurl"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1704
        if (($context["vendor_required_mapurl"] ?? null)) {
            // line 1705
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_mapurl\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1707
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1710
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_mapurl\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1712
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1715
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_mapurl"] ?? null)) {
            // line 1716
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_mapurl\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1718
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1721
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_mapurl\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1723
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1725
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1729
        if (($context["vendor_status_mapurl"] ?? null)) {
            // line 1730
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_mapurl\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1732
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1735
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_mapurl\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1737
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1740
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_mapurl"] ?? null)) {
            // line 1741
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_mapurl\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1743
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1746
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_mapurl\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1748
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1750
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1758
        echo ($context["entry_tax_number"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1763
        if (($context["vendor_required_tax_number"] ?? null)) {
            // line 1764
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_tax_number\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1766
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1769
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_tax_number\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1771
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1774
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_tax_number"] ?? null)) {
            // line 1775
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_tax_number\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1777
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1780
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_tax_number\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1782
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1784
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1788
        if (($context["vendor_status_tax_number"] ?? null)) {
            // line 1789
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_tax_number\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1791
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1794
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_tax_number\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1796
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1799
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_tax_number"] ?? null)) {
            // line 1800
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_tax_number\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1802
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1805
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_tax_number\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1807
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1809
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1817
        echo ($context["entry_shipping_charge"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1822
        if (($context["vendor_required_shipping_charge"] ?? null)) {
            // line 1823
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_shipping_charge\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1825
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1828
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_shipping_charge\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1830
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1833
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_shipping_charge"] ?? null)) {
            // line 1834
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_shipping_charge\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1836
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1839
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_shipping_charge\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1841
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1843
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1847
        if (($context["vendor_status_shipping_charge"] ?? null)) {
            // line 1848
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_shipping_charge\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1850
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1853
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_shipping_charge\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1855
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1858
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_shipping_charge"] ?? null)) {
            // line 1859
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_shipping_charge\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1861
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1864
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_shipping_charge\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1866
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1868
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1874
        echo ($context["entry_url"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1879
        if (($context["vendor_required_url"] ?? null)) {
            // line 1880
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_url\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1882
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1885
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_url\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1887
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1890
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_required_url"] ?? null)) {
            // line 1891
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_url\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1893
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1896
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_required_url\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1898
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1900
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1904
        if (($context["vendor_status_url"] ?? null)) {
            // line 1905
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_url\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1907
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1910
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_url\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1912
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1915
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_url"] ?? null)) {
            // line 1916
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_url\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1918
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1921
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_url\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1923
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1925
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1932
        echo ($context["entry_logo"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1940
        if (($context["vendor_status_logo"] ?? null)) {
            // line 1941
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_logo\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1943
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1946
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_logo\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1948
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1951
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_logo"] ?? null)) {
            // line 1952
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_logo\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1954
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1957
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_logo\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1959
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1961
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 1967
        echo ($context["entry_banner"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 1975
        if (($context["vendor_status_banner"] ?? null)) {
            // line 1976
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_banner\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1978
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1981
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_banner\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1983
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1986
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_banner"] ?? null)) {
            // line 1987
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_banner\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1989
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 1992
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_banner\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1994
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 1996
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 2001
        echo ($context["entry_image"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2008
        if (($context["vendor_status_image"] ?? null)) {
            // line 2009
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_image\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2011
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2014
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_image\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2016
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2019
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_image"] ?? null)) {
            // line 2020
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_image\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2022
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2025
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_image\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2027
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2029
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-paymentdetail\">\t
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-sm-12\">\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"table-responsive\"> 
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover signupdata\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 2046
        echo ($context["text_sortorderofsignup"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 2049
        echo ($context["text_showhidesignup"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 2057
        echo ($context["text_paypal"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2063
        if (($context["vendor_status_paypal"] ?? null)) {
            // line 2064
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_paypal\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2066
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2069
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_paypal\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2071
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2074
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_paypal"] ?? null)) {
            // line 2075
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_paypal\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2077
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2080
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_paypal\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2082
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2084
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
        // line 2091
        echo ($context["text_bank"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 2096
        if (($context["vendor_status_bank"] ?? null)) {
            // line 2097
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_bank\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2099
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2102
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_bank\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2104
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2107
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_status_bank"] ?? null)) {
            // line 2108
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_bank\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2110
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 2113
            echo "\t\t\t\t\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_status_bank\" value=\"0\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 2115
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 2117
        echo "\t\t\t\t\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!--advance settings-->\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<!--############ 13 02 2021 ############Start-->\t
\t\t\t\t<div class=\"tab-pane\" id=\"tab-vendortabsetting\">\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-12\">\t\t\t\t\t
\t\t\t\t\t<div class=\"table-responsive component\">
\t\t\t\t\t  <table class=\"table table-bordered table-hover personaldata\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t  <tr>
\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 2139
        echo ($context["text_sortorderoftab"] ?? null);
        echo "</th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 2141
        echo ($context["text_showhidetab"] ?? null);
        echo "</th>
\t\t\t\t\t\t  </tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody >
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr data-sort=\"";
        // line 2146
        echo ($context["vendor_profilestoresort"] ?? null);
        echo "\">
\t\t\t\t\t\t  <td class=\"text-left\">
\t\t\t\t\t\t\t<i class=\"fa fa-arrows\"></i>
\t\t\t\t\t\t\t<span>";
        // line 2149
        echo ($context["entry_profilesort"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"vendor_profilestoresort\" class=\"personalsort\" value=\"";
        // line 2150
        echo ($context["vendor_profilestoresort"] ?? null);
        echo "\" />
\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  
\t\t\t\t\t\t  <td class=\"text-right\">
\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t";
        // line 2155
        if (($context["vendor_profile"] ?? null)) {
            // line 2156
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_profile\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 2158
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 2161
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_profile\" value=\"1\" />
\t\t\t\t\t\t\t\t\t";
            // line 2163
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        }
        // line 2166
        echo "\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_profile"] ?? null)) {
            // line 2167
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_profile\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 2169
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 2172
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_profile\" value=\"0\" />
\t\t\t\t\t\t\t\t\t";
            // line 2174
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 2176
        echo "\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t  </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr data-sort=\"";
        // line 2180
        echo ($context["vendor_aboutstoresort"] ?? null);
        echo "\">
\t\t\t\t\t\t  <td class=\"text-left\">
\t\t\t\t\t\t\t<i class=\"fa fa-arrows\"></i>
\t\t\t\t\t\t\t<span>";
        // line 2183
        echo ($context["entry_aboutstoresort"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"vendor_aboutstoresort\" class=\"personalsort\" value=\"";
        // line 2184
        echo ($context["vendor_aboutstoresort"] ?? null);
        echo "\" />
\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  
\t\t\t\t\t\t  <td class=\"text-right\">
\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t";
        // line 2189
        if (($context["vendor_aboutstore"] ?? null)) {
            // line 2190
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_aboutstore\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 2192
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 2195
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_aboutstore\" value=\"1\" />
\t\t\t\t\t\t\t\t\t";
            // line 2197
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        }
        // line 2200
        echo "\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_aboutstore"] ?? null)) {
            // line 2201
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_aboutstore\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 2203
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 2206
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_aboutstore\" value=\"0\" />
\t\t\t\t\t\t\t\t\t";
            // line 2208
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 2210
        echo "\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t  </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tr data-sort=\"";
        // line 2214
        echo ($context["vendor_tabproductsort"] ?? null);
        echo "\">
\t\t\t\t\t\t  <td class=\"text-left\">
\t\t\t\t\t\t\t<i class=\"fa fa-arrows\"></i>
\t\t\t\t\t\t\t<span>";
        // line 2217
        echo ($context["entry_productsort"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"vendor_tabproductsort\" class=\"personalsort\" value=\"";
        // line 2218
        echo ($context["vendor_tabproductsort"] ?? null);
        echo ">\" />
\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  
\t\t\t\t\t\t  <td class=\"text-right\">
\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t";
        // line 2223
        if (($context["vendor_tabproduct"] ?? null)) {
            // line 2224
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_tabproduct\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 2226
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 2229
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_tabproduct\" value=\"1\" />
\t\t\t\t\t\t\t\t\t";
            // line 2231
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        }
        // line 2234
        echo "\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_tabproduct"] ?? null)) {
            // line 2235
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_tabproduct\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 2237
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 2240
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_tabproduct\" value=\"0\" />
\t\t\t\t\t\t\t\t\t";
            // line 2242
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 2244
        echo "\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t  </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t  <tr data-sort=\"";
        // line 2248
        echo ($context["vendor_reviewsort"] ?? null);
        echo "\">
\t\t\t\t\t\t  <td class=\"text-left\">
\t\t\t\t\t\t\t<i class=\"fa fa-arrows\"></i>
\t\t\t\t\t\t\t<span>";
        // line 2251
        echo ($context["entry_review"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"vendor_reviewsort\" class=\"personalsort\" value=\"";
        // line 2252
        echo ($context["vendor_reviewsort"] ?? null);
        echo "\" />
\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  
\t\t\t\t\t\t  <td class=\"text-right\">
\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t";
        // line 2257
        if (($context["vendor_review"] ?? null)) {
            // line 2258
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_review\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 2260
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 2263
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_review\" value=\"1\" />
\t\t\t\t\t\t\t\t\t";
            // line 2265
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        }
        // line 2268
        echo "\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_review"] ?? null)) {
            // line 2269
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_review\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 2271
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 2274
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_review\" value=\"0\" />
\t\t\t\t\t\t\t\t\t";
            // line 2276
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 2278
        echo "\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t  </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t
\t\t\t\t\t\t<tr data-sort=\"";
        // line 2282
        echo ($context["vendor_productreviewsort"] ?? null);
        echo "\">
\t\t\t\t\t\t  <td class=\"text-left\">
\t\t\t\t\t\t\t<i class=\"fa fa-arrows\"></i>
\t\t\t\t\t\t\t<span>";
        // line 2285
        echo ($context["entry_productreviewsort"] ?? null);
        echo "</span>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"vendor_productreviewsort\" class=\"personalsort\" value=\"";
        // line 2286
        echo ($context["vendor_productreviewsort"] ?? null);
        echo "\" />
\t\t\t\t\t\t  </td>
\t\t\t\t\t\t  
\t\t\t\t\t\t  <td class=\"text-right\">
\t\t\t\t\t\t\t <div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t";
        // line 2291
        if (($context["vendor_productreview"] ?? null)) {
            // line 2292
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_productreview\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 2294
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 2297
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_productreview\" value=\"1\" />
\t\t\t\t\t\t\t\t\t";
            // line 2299
            echo ($context["text_yes"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        }
        // line 2302
        echo "\t\t\t\t\t\t\t\t";
        if ( !($context["vendor_productreview"] ?? null)) {
            // line 2303
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm active\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_productreview\" value=\"0\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
            // line 2305
            echo ($context["text_no"] ?? null);
            echo "
\t\t\t\t\t\t\t\t   </label>
\t\t\t\t\t\t\t\t";
        } else {
            // line 2308
            echo "\t\t\t\t\t\t\t\t   <label class=\"btn btn-success btn-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vendor_productreview\" value=\"0\" />
\t\t\t\t\t\t\t\t\t";
            // line 2310
            echo ($context["text_no"] ?? null);
            echo "</label>
\t\t\t\t\t\t\t\t";
        }
        // line 2312
        echo "\t\t\t\t\t\t\t </div>
\t\t\t\t\t\t  </td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!--############ 13 02 2021 End############-->\t\t\t
\t\t\t</div>\t\t\t\t
\t\t</form>
      </div>
    </div>
  </div>
</div>
<!--############ 13 02 2021 End############-->\t
<script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>
<link href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
<script type=\"text/javascript\"><!--
\$( \".component table tbody\" ).sortable();
\$( '.personaldata tbody' ).sortable({
\t\t  update : function () {
           \$('.personaldata tr').each(function(idx) {
\t\t\t\t\t\$(this).find('.personalsort').val(idx);
\t\t\t});
        }
});
var \$sorted_items,
getSorted = function(selector, attrName) {
    return \$(
      \$(selector).toArray().sort(function(a, b){
          var aVal = parseInt(a.getAttribute(attrName)),
              bVal = parseInt(b.getAttribute(attrName));
          return aVal - bVal;
      })
    );
};

\$sorted_items = getSorted('.personaldata tbody tr', 'data-sort').clone();
\$('.personaldata tbody').html(\$sorted_items);
//--></script>
  <!--############ 13 02 2021 End############-->\t
<script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
\$('#language-lable a:first').tab('show');
//--></script>
<style>

.form-horizontal #tab-vendortabsetting .control-label{text-align:left!important;}

.btn-group > .btn.active, .btn-success.btn-success:active:hover, .btn-success.active:hover, .open > .btn-success.dropdown-toggle:hover, .btn-success:active:focus, .btn-success.active:focus, .open > .btn-success.dropdown-toggle:focus, .btn-success:active.focus, .btn-success.active.focus, .open > .btn-success.dropdown-toggle.focus
{ 
background-color: #3DBEEF;
  border-color: #3DBEEF;}
.btn-success {\t
color: #000;
    background-color: #fff;
    border-color: #fff;
    border: solid 1px #dccc;
    padding: 7px;
}
.btn-success:hover{
\tbackground-color: #0F89B7;
    border-color: #0F89B7;
}
.allsellers{background:#f5f5f5; padding:8px;}
<!--04 05 2020-->
 ";
        // line 2382
        if (($context["error_showorderwarning"] ?? null)) {
            echo " 
.warningorder {}
.warningorder a{color: #FD003D!important;border: solid 1px #FD003D!important; border-bottom:none!important;}
";
        }
        // line 2385
        echo " 
<!--04 05 2020-->
</style>
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\$('.loadlicensekey').load('index.php?route=vendor/keysubmit/loadfrom&user_token=";
        // line 2390
        echo ($context["user_token"] ?? null);
        echo "');
});
//--></script> 
";
        // line 2393
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "vendor/vendor_setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4771 => 2393,  4765 => 2390,  4758 => 2385,  4751 => 2382,  4679 => 2312,  4674 => 2310,  4670 => 2308,  4664 => 2305,  4660 => 2303,  4657 => 2302,  4651 => 2299,  4647 => 2297,  4641 => 2294,  4637 => 2292,  4635 => 2291,  4627 => 2286,  4623 => 2285,  4617 => 2282,  4611 => 2278,  4606 => 2276,  4602 => 2274,  4596 => 2271,  4592 => 2269,  4589 => 2268,  4583 => 2265,  4579 => 2263,  4573 => 2260,  4569 => 2258,  4567 => 2257,  4559 => 2252,  4555 => 2251,  4549 => 2248,  4543 => 2244,  4538 => 2242,  4534 => 2240,  4528 => 2237,  4524 => 2235,  4521 => 2234,  4515 => 2231,  4511 => 2229,  4505 => 2226,  4501 => 2224,  4499 => 2223,  4491 => 2218,  4487 => 2217,  4481 => 2214,  4475 => 2210,  4470 => 2208,  4466 => 2206,  4460 => 2203,  4456 => 2201,  4453 => 2200,  4447 => 2197,  4443 => 2195,  4437 => 2192,  4433 => 2190,  4431 => 2189,  4423 => 2184,  4419 => 2183,  4413 => 2180,  4407 => 2176,  4402 => 2174,  4398 => 2172,  4392 => 2169,  4388 => 2167,  4385 => 2166,  4379 => 2163,  4375 => 2161,  4369 => 2158,  4365 => 2156,  4363 => 2155,  4355 => 2150,  4351 => 2149,  4345 => 2146,  4337 => 2141,  4332 => 2139,  4308 => 2117,  4303 => 2115,  4299 => 2113,  4293 => 2110,  4289 => 2108,  4286 => 2107,  4280 => 2104,  4276 => 2102,  4270 => 2099,  4266 => 2097,  4264 => 2096,  4256 => 2091,  4247 => 2084,  4242 => 2082,  4238 => 2080,  4232 => 2077,  4228 => 2075,  4225 => 2074,  4219 => 2071,  4215 => 2069,  4209 => 2066,  4205 => 2064,  4203 => 2063,  4194 => 2057,  4183 => 2049,  4177 => 2046,  4158 => 2029,  4153 => 2027,  4149 => 2025,  4143 => 2022,  4139 => 2020,  4136 => 2019,  4130 => 2016,  4126 => 2014,  4120 => 2011,  4116 => 2009,  4114 => 2008,  4104 => 2001,  4097 => 1996,  4092 => 1994,  4088 => 1992,  4082 => 1989,  4078 => 1987,  4075 => 1986,  4069 => 1983,  4065 => 1981,  4059 => 1978,  4055 => 1976,  4053 => 1975,  4042 => 1967,  4034 => 1961,  4029 => 1959,  4025 => 1957,  4019 => 1954,  4015 => 1952,  4012 => 1951,  4006 => 1948,  4002 => 1946,  3996 => 1943,  3992 => 1941,  3990 => 1940,  3979 => 1932,  3970 => 1925,  3965 => 1923,  3961 => 1921,  3955 => 1918,  3951 => 1916,  3948 => 1915,  3942 => 1912,  3938 => 1910,  3932 => 1907,  3928 => 1905,  3926 => 1904,  3920 => 1900,  3915 => 1898,  3911 => 1896,  3905 => 1893,  3901 => 1891,  3898 => 1890,  3892 => 1887,  3888 => 1885,  3882 => 1882,  3878 => 1880,  3876 => 1879,  3868 => 1874,  3860 => 1868,  3855 => 1866,  3851 => 1864,  3845 => 1861,  3841 => 1859,  3838 => 1858,  3832 => 1855,  3828 => 1853,  3822 => 1850,  3818 => 1848,  3816 => 1847,  3810 => 1843,  3805 => 1841,  3801 => 1839,  3795 => 1836,  3791 => 1834,  3788 => 1833,  3782 => 1830,  3778 => 1828,  3772 => 1825,  3768 => 1823,  3766 => 1822,  3758 => 1817,  3748 => 1809,  3743 => 1807,  3739 => 1805,  3733 => 1802,  3729 => 1800,  3726 => 1799,  3720 => 1796,  3716 => 1794,  3710 => 1791,  3706 => 1789,  3704 => 1788,  3698 => 1784,  3693 => 1782,  3689 => 1780,  3683 => 1777,  3679 => 1775,  3676 => 1774,  3670 => 1771,  3666 => 1769,  3660 => 1766,  3656 => 1764,  3654 => 1763,  3646 => 1758,  3636 => 1750,  3631 => 1748,  3627 => 1746,  3621 => 1743,  3617 => 1741,  3614 => 1740,  3608 => 1737,  3604 => 1735,  3598 => 1732,  3594 => 1730,  3592 => 1729,  3586 => 1725,  3581 => 1723,  3577 => 1721,  3571 => 1718,  3567 => 1716,  3564 => 1715,  3558 => 1712,  3554 => 1710,  3548 => 1707,  3544 => 1705,  3542 => 1704,  3534 => 1699,  3524 => 1691,  3519 => 1689,  3515 => 1687,  3509 => 1684,  3505 => 1682,  3502 => 1681,  3496 => 1678,  3492 => 1676,  3486 => 1673,  3482 => 1671,  3480 => 1670,  3474 => 1666,  3469 => 1664,  3465 => 1662,  3459 => 1659,  3455 => 1657,  3452 => 1656,  3446 => 1653,  3442 => 1651,  3436 => 1648,  3432 => 1646,  3430 => 1645,  3422 => 1640,  3413 => 1633,  3408 => 1631,  3404 => 1629,  3398 => 1626,  3394 => 1624,  3391 => 1623,  3385 => 1620,  3381 => 1618,  3375 => 1615,  3371 => 1613,  3369 => 1612,  3363 => 1608,  3358 => 1606,  3354 => 1604,  3348 => 1601,  3344 => 1599,  3341 => 1598,  3335 => 1595,  3331 => 1593,  3325 => 1590,  3321 => 1588,  3319 => 1587,  3311 => 1582,  3300 => 1574,  3296 => 1573,  3291 => 1571,  3272 => 1554,  3267 => 1552,  3263 => 1550,  3257 => 1547,  3253 => 1545,  3250 => 1544,  3244 => 1541,  3240 => 1539,  3234 => 1536,  3230 => 1534,  3228 => 1533,  3222 => 1529,  3217 => 1527,  3213 => 1525,  3207 => 1522,  3203 => 1520,  3200 => 1519,  3194 => 1516,  3190 => 1514,  3184 => 1511,  3180 => 1509,  3178 => 1508,  3170 => 1503,  3161 => 1496,  3156 => 1494,  3152 => 1492,  3146 => 1489,  3142 => 1487,  3139 => 1486,  3133 => 1483,  3129 => 1481,  3123 => 1478,  3119 => 1476,  3117 => 1475,  3111 => 1471,  3106 => 1469,  3102 => 1467,  3096 => 1464,  3092 => 1462,  3089 => 1461,  3083 => 1458,  3079 => 1456,  3073 => 1453,  3069 => 1451,  3067 => 1450,  3059 => 1445,  3050 => 1438,  3045 => 1436,  3041 => 1434,  3035 => 1431,  3031 => 1429,  3028 => 1428,  3022 => 1425,  3018 => 1423,  3012 => 1420,  3008 => 1418,  3006 => 1417,  3000 => 1413,  2995 => 1411,  2991 => 1409,  2985 => 1406,  2981 => 1404,  2978 => 1403,  2972 => 1400,  2968 => 1398,  2962 => 1395,  2958 => 1393,  2956 => 1392,  2948 => 1387,  2939 => 1380,  2934 => 1378,  2930 => 1376,  2924 => 1373,  2920 => 1371,  2917 => 1370,  2911 => 1367,  2907 => 1365,  2901 => 1362,  2897 => 1360,  2895 => 1359,  2889 => 1355,  2884 => 1353,  2880 => 1351,  2874 => 1348,  2870 => 1346,  2867 => 1345,  2861 => 1342,  2857 => 1340,  2851 => 1337,  2847 => 1335,  2845 => 1334,  2837 => 1329,  2828 => 1322,  2823 => 1320,  2819 => 1318,  2813 => 1315,  2809 => 1313,  2806 => 1312,  2800 => 1309,  2796 => 1307,  2790 => 1304,  2786 => 1302,  2784 => 1301,  2778 => 1297,  2773 => 1295,  2769 => 1293,  2763 => 1290,  2759 => 1288,  2756 => 1287,  2750 => 1284,  2746 => 1282,  2740 => 1279,  2736 => 1277,  2734 => 1276,  2726 => 1271,  2715 => 1263,  2711 => 1262,  2706 => 1260,  2684 => 1240,  2679 => 1238,  2675 => 1236,  2669 => 1233,  2665 => 1231,  2662 => 1230,  2656 => 1227,  2652 => 1225,  2646 => 1222,  2642 => 1220,  2640 => 1219,  2634 => 1215,  2629 => 1213,  2625 => 1211,  2619 => 1208,  2615 => 1206,  2612 => 1205,  2606 => 1202,  2602 => 1200,  2596 => 1197,  2592 => 1195,  2590 => 1194,  2583 => 1190,  2575 => 1184,  2570 => 1182,  2566 => 1180,  2560 => 1177,  2556 => 1175,  2553 => 1174,  2547 => 1171,  2543 => 1169,  2537 => 1166,  2533 => 1164,  2531 => 1163,  2525 => 1159,  2520 => 1157,  2516 => 1155,  2510 => 1152,  2506 => 1150,  2503 => 1149,  2497 => 1146,  2493 => 1144,  2487 => 1141,  2483 => 1139,  2481 => 1138,  2474 => 1134,  2466 => 1128,  2461 => 1126,  2457 => 1124,  2451 => 1121,  2447 => 1119,  2444 => 1118,  2438 => 1115,  2434 => 1113,  2428 => 1110,  2424 => 1108,  2422 => 1107,  2416 => 1103,  2411 => 1101,  2407 => 1099,  2401 => 1096,  2397 => 1094,  2394 => 1093,  2388 => 1090,  2384 => 1088,  2378 => 1085,  2374 => 1083,  2372 => 1082,  2365 => 1078,  2357 => 1072,  2352 => 1070,  2348 => 1068,  2342 => 1065,  2338 => 1063,  2335 => 1062,  2329 => 1059,  2325 => 1057,  2319 => 1054,  2315 => 1052,  2313 => 1051,  2307 => 1047,  2302 => 1045,  2298 => 1043,  2292 => 1040,  2288 => 1038,  2285 => 1037,  2279 => 1034,  2275 => 1032,  2269 => 1029,  2265 => 1027,  2263 => 1026,  2256 => 1022,  2248 => 1016,  2243 => 1014,  2239 => 1012,  2233 => 1009,  2229 => 1007,  2226 => 1006,  2220 => 1003,  2216 => 1001,  2210 => 998,  2206 => 996,  2204 => 995,  2198 => 991,  2193 => 989,  2189 => 987,  2183 => 984,  2179 => 982,  2176 => 981,  2170 => 978,  2166 => 976,  2160 => 973,  2156 => 971,  2154 => 970,  2147 => 966,  2139 => 960,  2134 => 958,  2130 => 956,  2124 => 953,  2120 => 951,  2117 => 950,  2111 => 947,  2107 => 945,  2101 => 942,  2097 => 940,  2095 => 939,  2089 => 935,  2084 => 933,  2080 => 931,  2074 => 928,  2070 => 926,  2067 => 925,  2061 => 922,  2057 => 920,  2051 => 917,  2047 => 915,  2045 => 914,  2038 => 910,  2030 => 904,  2025 => 902,  2021 => 900,  2015 => 897,  2011 => 895,  2008 => 894,  2002 => 891,  1998 => 889,  1992 => 886,  1988 => 884,  1986 => 883,  1980 => 879,  1975 => 877,  1971 => 875,  1965 => 872,  1961 => 870,  1958 => 869,  1952 => 866,  1948 => 864,  1942 => 861,  1938 => 859,  1936 => 858,  1929 => 854,  1921 => 848,  1916 => 846,  1912 => 844,  1906 => 841,  1902 => 839,  1899 => 838,  1893 => 835,  1889 => 833,  1883 => 830,  1879 => 828,  1877 => 827,  1871 => 823,  1866 => 821,  1862 => 819,  1856 => 816,  1852 => 814,  1849 => 813,  1843 => 810,  1839 => 808,  1833 => 805,  1829 => 803,  1827 => 802,  1820 => 798,  1812 => 792,  1807 => 790,  1803 => 788,  1797 => 785,  1793 => 783,  1790 => 782,  1784 => 779,  1780 => 777,  1774 => 774,  1770 => 772,  1768 => 771,  1762 => 767,  1757 => 765,  1753 => 763,  1747 => 760,  1743 => 758,  1740 => 757,  1734 => 754,  1730 => 752,  1724 => 749,  1720 => 747,  1718 => 746,  1711 => 742,  1703 => 736,  1698 => 734,  1694 => 732,  1688 => 729,  1684 => 727,  1681 => 726,  1675 => 723,  1671 => 721,  1665 => 718,  1661 => 716,  1659 => 715,  1653 => 711,  1648 => 709,  1644 => 707,  1638 => 704,  1634 => 702,  1631 => 701,  1625 => 698,  1621 => 696,  1615 => 693,  1611 => 691,  1609 => 690,  1602 => 686,  1594 => 680,  1589 => 678,  1585 => 676,  1579 => 673,  1575 => 671,  1572 => 670,  1566 => 667,  1562 => 665,  1556 => 662,  1552 => 660,  1550 => 659,  1544 => 655,  1539 => 653,  1535 => 651,  1529 => 648,  1525 => 646,  1522 => 645,  1516 => 642,  1512 => 640,  1506 => 637,  1502 => 635,  1500 => 634,  1493 => 630,  1485 => 624,  1480 => 622,  1476 => 620,  1470 => 617,  1466 => 615,  1463 => 614,  1457 => 611,  1453 => 609,  1447 => 606,  1443 => 604,  1441 => 603,  1435 => 599,  1430 => 597,  1426 => 595,  1420 => 592,  1416 => 590,  1413 => 589,  1407 => 586,  1403 => 584,  1397 => 581,  1393 => 579,  1391 => 578,  1383 => 573,  1372 => 565,  1368 => 564,  1363 => 562,  1348 => 550,  1344 => 549,  1340 => 548,  1336 => 547,  1326 => 539,  1306 => 534,  1299 => 532,  1285 => 527,  1276 => 525,  1270 => 522,  1256 => 517,  1249 => 515,  1234 => 509,  1227 => 507,  1215 => 504,  1208 => 502,  1194 => 497,  1187 => 495,  1175 => 492,  1168 => 490,  1154 => 485,  1147 => 483,  1135 => 480,  1128 => 478,  1114 => 473,  1107 => 471,  1095 => 468,  1088 => 466,  1074 => 461,  1067 => 459,  1055 => 456,  1048 => 454,  1034 => 449,  1027 => 447,  1015 => 444,  1008 => 442,  1002 => 440,  998 => 439,  994 => 437,  977 => 435,  973 => 434,  968 => 432,  960 => 426,  954 => 424,  952 => 423,  949 => 422,  940 => 418,  935 => 417,  930 => 416,  925 => 414,  920 => 413,  918 => 412,  910 => 409,  902 => 406,  896 => 402,  890 => 400,  888 => 399,  885 => 398,  876 => 394,  871 => 393,  866 => 392,  861 => 390,  856 => 389,  854 => 388,  846 => 385,  838 => 382,  824 => 370,  819 => 368,  815 => 366,  809 => 363,  805 => 361,  802 => 360,  796 => 357,  792 => 355,  786 => 352,  782 => 350,  780 => 349,  772 => 346,  765 => 341,  760 => 339,  756 => 337,  750 => 334,  746 => 332,  743 => 331,  737 => 328,  733 => 326,  727 => 323,  723 => 321,  721 => 320,  713 => 317,  707 => 313,  702 => 311,  698 => 309,  692 => 306,  688 => 304,  685 => 303,  679 => 300,  675 => 298,  669 => 295,  665 => 293,  663 => 292,  655 => 289,  648 => 284,  643 => 282,  639 => 280,  633 => 277,  629 => 275,  626 => 274,  620 => 271,  616 => 269,  610 => 266,  606 => 264,  604 => 263,  596 => 260,  590 => 257,  576 => 250,  569 => 248,  566 => 247,  559 => 246,  554 => 245,  550 => 244,  546 => 243,  538 => 240,  531 => 235,  526 => 233,  522 => 231,  516 => 228,  512 => 226,  509 => 225,  503 => 222,  499 => 220,  493 => 217,  489 => 215,  487 => 214,  479 => 211,  472 => 206,  467 => 204,  463 => 202,  457 => 199,  453 => 197,  450 => 196,  444 => 193,  440 => 191,  434 => 188,  430 => 186,  428 => 185,  420 => 182,  413 => 177,  408 => 175,  404 => 173,  398 => 170,  394 => 168,  391 => 167,  385 => 164,  381 => 162,  375 => 159,  371 => 157,  369 => 156,  361 => 153,  354 => 148,  349 => 146,  345 => 144,  339 => 141,  335 => 139,  332 => 138,  326 => 135,  322 => 133,  316 => 130,  312 => 128,  310 => 127,  302 => 124,  295 => 119,  290 => 117,  286 => 115,  280 => 112,  276 => 110,  273 => 109,  267 => 106,  263 => 104,  257 => 101,  253 => 99,  251 => 98,  243 => 95,  236 => 90,  231 => 88,  227 => 86,  221 => 83,  217 => 81,  214 => 80,  208 => 77,  204 => 75,  198 => 72,  194 => 70,  192 => 69,  184 => 66,  175 => 60,  171 => 59,  161 => 52,  154 => 48,  149 => 46,  140 => 44,  135 => 42,  130 => 40,  124 => 37,  117 => 32,  109 => 29,  107 => 28,  103 => 26,  95 => 23,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vendor/vendor_setting.twig", "");
    }
}
