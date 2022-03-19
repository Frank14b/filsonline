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

/* journal3/template/common/header.twig */
class __TwigTemplate_a7dd3357b551785b338acd4cfb891065ed63670738458745bd709fe2586df97e extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 12
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\" class=\"";
        echo twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 12), "getClasses", [], "method", false, false, false, 12), " ");
        echo "\" data-jb=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "JOURNAL3_BUILD"], "method", false, false, false, 12);
        echo "\" data-jv=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "JOURNAL3_VERSION"], "method", false, false, false, 12);
        echo "\" data-ov=\"";
        echo twig_constant("VERSION");
        echo "\">
<head typeof=\"og:website\">
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 17
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 18
        echo ($context["base"] ?? null);
        echo "\" />
<link rel=\"preload\" href=\"";
        // line 19
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 19), "get", [0 => "icons_preload_url"], "method", false, false, false, 19);
        echo "\" as=\"font\" crossorigin>
";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 20), "hasFonts", [], "method", false, false, false, 20)) {
            // line 21
            echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com/\" crossorigin>
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
<link href=\"catalog/view/theme/journal3/stylesheet/custom.css\" rel=\"stylesheet\">
";
        }
        // line 25
        if (($context["description"] ?? null)) {
            // line 26
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 28
        if (($context["keywords"] ?? null)) {
            // line 29
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 31
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 31), "isPopup", [], "method", false, false, false, 31)) {
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/seo/meta_tags"], "method", false, false, false, 32));
            foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
                // line 33
                echo "<meta ";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 33);
                echo "=\"";
                echo $context["key"];
                echo "\" content=\"";
                echo twig_get_attribute($this->env, $this->source, $context["tag"], "content", [], "any", false, false, false, 33);
                echo "\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "SENTRY_JS_DSN"], "method", false, false, false, 36)) {
            // line 37
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "constant", [0 => "SENTRY_JS_DSN"], "method", false, false, false, 37);
            echo "
";
        }
        // line 39
        echo "<script>window['Journal'] = ";
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 39), "getJs", [], "method", false, false, false, 39));
        echo ";</script>
";
        // line 40
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 40), "isPopup", [], "method", false, false, false, 40)) {
            // line 41
            echo "<script>";
            echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/mql"], "method", false, false, false, 41);
            echo "</script>
";
        }
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 43), "hasFonts", [], "method", false, false, false, 43)) {
            // line 44
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 44), "get", [0 => "performanceAsyncFontsStatus"], "method", false, false, false, 44)) {
                // line 45
                echo "<script>WebFontConfig = { google: { families: ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 45), "getFonts", [0 => true], "method", false, false, false, 45);
                echo " } };</script>
<script src=\"https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js\" async></script>
";
            } else {
                // line 48
                echo "<link href=\"https://fonts.googleapis.com/css?family=";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 48), "getFonts", [0 => false], "method", false, false, false, 48);
                echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
            }
        }
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 51), "getStyles", [0 => ($context["styles"] ?? null)], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["style"], "content", [], "any", false, false, false, 52)) {
                // line 53
                echo "<style>";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "content", [], "any", false, false, false, 53);
                echo "</style>
";
            } else {
                // line 55
                echo "<link href=\"";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 55), "staticUrl", [0 => twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 55), 1 => false], "method", false, false, false, 55);
                echo "\" type=\"text/css\" rel=\"";
                echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 55);
                echo "\" media=\"all\" />
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 59
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 59);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 59);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 62
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "<style>
";
        // line 65
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 65), "getCss", [], "method", false, false, false, 65);
        echo "
</style>
";
        // line 67
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 67), "get", [0 => "customCSS"], "method", false, false, false, 67)) {
            // line 68
            echo "<style>";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 68), "get", [0 => "customCSS"], "method", false, false, false, 68);
            echo "</style>
";
        }
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 70), "getScripts", [0 => "header", 1 => ($context["scripts"] ?? null)], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 71
            echo "<script src=\"";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 71), "staticUrl", [0 => $context["script"], 1 => false], "method", false, false, false, 71);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 71), "get", [0 => "performanceJSDefer"], "method", false, false, false, 71)) {
                echo " defer ";
            }
            echo "></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 73), "get", [0 => "customCodeHeader"], "method", false, false, false, 73)) {
            // line 74
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 74), "get", [0 => "customCodeHeader"], "method", false, false, false, 74);
            echo "
";
        }
        // line 76
        echo "</head>
<body class=\"";
        // line 77
        echo ($context["class"] ?? null);
        echo "\">

";
        // line 79
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 79), "get", [0 => "journal3_home_h1"], "method", false, false, false, 79)) {
            // line 80
            echo "  <h1 class=\"sr-only\" style=\"position: absolute; height: 1px; width: 1px; clip: rect(0,0,0,0);\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 80), "get", [0 => "journal3_home_h1"], "method", false, false, false, 80);
            echo "</h1>
";
        }
        // line 82
        echo "
";
        // line 83
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 83), "get", [0 => "oldBrowserStatus"], "method", false, false, false, 83)) {
            // line 84
            echo "<div class=\"old-browser\">
  <div class=\"ob-content\">
    <h2 class=\"ob-title\">";
            // line 86
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 86), "get", [0 => "oldBrowserTitle"], "method", false, false, false, 86);
            echo "</h2>
    <span class=\"ob-text\">";
            // line 87
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 87), "get", [0 => "oldBrowserText"], "method", false, false, false, 87);
            echo "</span>
    <div class=\"ob-links\">
      <a href=\"https://www.google.com/chrome/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 90
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 90), "get", [0 => "oldBrowserChrome"], "method", false, false, false, 90);
            echo "\" alt=\"Chrome\" />
        <span class=\"ob-name\">Chrome</span>
      </a>
      <a href=\"https://www.mozilla.org/firefox/new/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 94
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 94), "get", [0 => "oldBrowserFirefox"], "method", false, false, false, 94);
            echo "\" alt=\"Firefox\" />
        <span class=\"ob-name\">Firefox</span>
      </a>
      <a href=\"https://www.microsoft.com/en-us/windows/microsoft-edge\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 98
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 98), "get", [0 => "oldBrowserEdge"], "method", false, false, false, 98);
            echo "\" alt=\"edge\" />
        <span class=\"ob-name\">Microsoft Edge</span>
      </a>
      <a href=\"https://www.opera.com/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 102
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 102), "get", [0 => "oldBrowserOpera"], "method", false, false, false, 102);
            echo "\" alt=\"opera\" />
        <span class=\"ob-name\">Opera</span>
      </a>
      <a href=\"https://www.apple.com/lae/safari/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 106
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 106), "get", [0 => "oldBrowserSafari"], "method", false, false, false, 106);
            echo "\" alt=\"safari\" />
        <span class=\"ob-name\">Safari on Mac</span>
      </a>
    </div>
  </div>
</div>
";
        }
        // line 113
        echo "
";
        // line 114
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 114), "isPopup", [], "method", false, false, false, 114)) {
            // line 115
            echo "<div class=\"mobile-container mobile-main-menu-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 117
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 117), "get", [0 => "headerMobileMenuTitle"], "method", false, false, false, 117);
            echo "</span>
    ";
            // line 118
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 118), "get", [0 => "mobileLangPosition"], "method", false, false, false, 118) == "menu")) {
                // line 119
                echo "      <div class=\"language-currency top-menu\">
        <div class=\"mobile-currency-wrapper\">
            ";
                // line 121
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 121), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 121)) ? (($context["currency"] ?? null)) : (""));
                echo "
        </div>
        <div class=\"mobile-language-wrapper\">
            ";
                // line 124
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 124), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 124)) ? (($context["language"] ?? null)) : (""));
                echo "
        </div>
      </div>
    ";
            }
            // line 128
            echo "    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-main-menu-wrapper\">
    ";
            // line 131
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 131), "isPhone", [], "method", false, false, false, 131) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 131), "isTablet", [], "method", false, false, false, 131) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 131), "get", [0 => "mobileHeaderOn"], "method", false, false, false, 131) == "tablet")))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 131), "get", [0 => "mobile_main_menu"], "method", false, false, false, 131)) : (""));
            echo "
  </div>
</div>

<div class=\"mobile-container mobile-filter-container\">
  <div class=\"mobile-wrapper-header\"></div>
  <div class=\"mobile-filter-wrapper\"></div>
</div>

<div class=\"mobile-container mobile-cart-content-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 142
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 142), "get", [0 => "headerMobileCartTitle"], "method", false, false, false, 142);
            echo "</span>
    <a class=\"x\"></a>
  </div>
  <div class=\"mobile-cart-content-wrapper cart-content\"></div>
</div>
";
        }
        // line 148
        echo "
";
        // line 149
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "popup"], "method", false, false, false, 149);
        echo "

<div class=\"site-wrapper\">

  ";
        // line 153
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "header_notice"], "method", false, false, false, 153);
        echo "

  ";
        // line 155
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 155), "isPopup", [], "method", false, false, false, 155)) {
            // line 156
            echo "  <header class=\"header-";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 156), "get", [0 => "headerType"], "method", false, false, false, 156);
            echo "\">
    ";
            // line 157
            if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "document", [], "any", false, false, false, 157), "hasClass", [0 => "mobile-header-active"], "method", false, false, false, 157) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 157), "get", [0 => "headerType"], "method", false, false, false, 157))) {
                // line 158
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/desktop/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 158), "get", [0 => "headerType"], "method", false, false, false, 158)) . ".twig"), "journal3/template/common/header.twig", 158)->display($context);
                // line 159
                echo "    ";
            }
            // line 160
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 160), "get", [0 => "mobileHeaderType"], "method", false, false, false, 160)) {
                // line 161
                echo "      ";
                $this->loadTemplate((("journal3/template/journal3/headers/mobile/header_mobile_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "settings", [], "any", false, false, false, 161), "get", [0 => "mobileHeaderType"], "method", false, false, false, 161)) . ".twig"), "journal3/template/common/header.twig", 161)->display($context);
                // line 162
                echo "    ";
            }
            // line 163
            echo "  </header>
  ";
        }
        // line 165
        echo "
  ";
        // line 166
        echo twig_get_attribute($this->env, $this->source, ($context["j3"] ?? null), "loadController", [0 => "journal3/layout", 1 => "fullscreen_slider"], "method", false, false, false, 166);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal3/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 166,  432 => 165,  428 => 163,  425 => 162,  422 => 161,  419 => 160,  416 => 159,  413 => 158,  411 => 157,  406 => 156,  404 => 155,  399 => 153,  392 => 149,  389 => 148,  380 => 142,  366 => 131,  361 => 128,  354 => 124,  348 => 121,  344 => 119,  342 => 118,  338 => 117,  334 => 115,  332 => 114,  329 => 113,  319 => 106,  312 => 102,  305 => 98,  298 => 94,  291 => 90,  285 => 87,  281 => 86,  277 => 84,  275 => 83,  272 => 82,  266 => 80,  264 => 79,  259 => 77,  256 => 76,  251 => 74,  249 => 73,  236 => 71,  232 => 70,  226 => 68,  224 => 67,  219 => 65,  216 => 64,  208 => 62,  204 => 61,  193 => 59,  189 => 58,  177 => 55,  171 => 53,  169 => 52,  165 => 51,  158 => 48,  151 => 45,  149 => 44,  147 => 43,  141 => 41,  139 => 40,  134 => 39,  129 => 37,  127 => 36,  113 => 33,  109 => 32,  107 => 31,  101 => 29,  99 => 28,  93 => 26,  91 => 25,  85 => 21,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  53 => 12,  50 => 11,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "journal3/template/common/header.twig", "");
    }
}