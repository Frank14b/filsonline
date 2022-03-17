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

/* journal3/template/journal3/module/newsletter_admin_email.twig */
class __TwigTemplate_da8bc4902049fa6dc0ce277fb3cd93c9b532c48c677bb0f3c3fcd6213a1a8378 extends \Twig\Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
  <title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
<div style=\"width: 680px;\">
  ";
        // line 9
        if (($context["logo"] ?? null)) {
            // line 10
            echo "  <a href=\"";
            echo ($context["store_url"] ?? null);
            echo "\" title=\"";
            echo ($context["store_name"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" alt=\"";
            echo ($context["store_name"] ?? null);
            echo "\" style=\"margin-bottom: 20px; border: none;\"/></a>
  ";
        }
        // line 12
        echo "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        echo ($context["message"] ?? null);
        echo "</p>
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal3/template/journal3/module/newsletter_admin_email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  52 => 10,  50 => 9,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/journal3/module/newsletter_admin_email.twig", "");
    }
}
