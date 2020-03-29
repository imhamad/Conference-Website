<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/pana/templates/layout/page.html.twig */
class __TwigTemplate_53dd02c5cb4ff82d2d75081eebc59668dbb3491ec1aab16a9920e7e8ffc59d87 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 48, "if" => 50];
        $filters = ["escape" => 46, "render" => 89];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape', 'render'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 46
        echo "<div id=\"wrapper\" class=\"wrapper ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_layout"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_style"] ?? null)), "html", null, true);
        echo "\">
<div class=\"layout-wrap ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_header"] ?? null)), "html", null, true);
        echo "\">
\t";
        // line 48
        $this->loadTemplate("@pana/layout/header.html.twig", "themes/pana/templates/layout/page.html.twig", 48)->display($context);
        // line 49
        echo "
\t";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "slider", [])) {
            // line 51
            echo "\t<!-- Slider -->
\t<section id=\"slider\" class=\"clearfix\">        
\t\t<div id=\"slider-wrap\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slider", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Slider -->
\t";
        }
        // line 63
        echo "
\t";
        // line 64
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 65
            echo "\t<!-- Page Title -->
\t<section id=\"page-title\" class=\"page-title\">
\t\t<div class=\"container\">
\t\t\t";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
\t\t\t";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
\t\t</div>
\t</section>
\t  <!-- End Page Title -->
\t";
        }
        // line 74
        echo "

\t";
        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "content_wide_top", [])) {
            // line 77
            echo "\t<!-- Start content top -->
\t<section id=\"content-wide-top\" class=\"content-wide\">        
\t\t";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_wide_top", [])), "html", null, true);
            echo "
\t</section>
\t<!-- End content top -->
\t";
        }
        // line 83
        echo "   
\t";
        // line 84
        if ((( !twig_test_empty($this->getAttribute(($context["page"] ?? null), "content", [])) || $this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 85
            echo "\t<!-- layout -->
\t<section id=\"page-wrapper\" class=\"page-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row content-layout\">
\t\t\t  ";
            // line 89
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", []))) {
                // line 90
                echo "\t\t\t  <!--- Start Left SideBar -->
\t\t\t\t<div class =\"";
                // line 91
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
                echo "  sidebar\">
\t\t\t\t\t";
                // line 92
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  ";
            }
            // line 96
            echo "
\t\t\t  ";
            // line 97
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 98
                echo "\t\t\t  <!--- Start content -->
\t\t\t\t<div class=\"";
                // line 99
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
                echo "  main-content\">
\t\t\t\t\t";
                // line 100
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End content -->
\t\t\t  ";
            }
            // line 104
            echo "             
\t\t\t  ";
            // line 105
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
                // line 106
                echo "\t\t\t  <!--- Start Right SideBar -->
\t\t\t\t<div class=\"";
                // line 107
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
                echo "  sidebar\">
\t\t\t\t\t";
                // line 108
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  ";
            }
            // line 112
            echo "\t\t\t</div>
\t\t</div>
\t\t\t\t\t  <div class=\"container-fluid width--adjustment pt-3\">
             <div class=\"row\">
\t\t\t ";
            // line 116
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "custom_left", []))) {
                // line 117
                echo "\t\t\t <div class=\"col-md-6\">
\t\t\t ";
                // line 118
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "custom_left", [])), "html", null, true);
                echo "
\t\t\t </div>
\t\t\t ";
            }
            // line 121
            echo "\t\t\t ";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "custom_right", []))) {
                // line 122
                echo "\t\t\t <div class=\"col-md-6\">
\t\t\t ";
                // line 123
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "custom_right", [])), "html", null, true);
                echo "
\t\t\t </div>
\t\t\t ";
            }
            // line 126
            echo "\t\t\t <div>
\t\t\t </div>
\t</section>
\t<!-- End layout -->
\t";
        }
        // line 131
        echo "



\t";
        // line 135
        if ($this->getAttribute(($context["page"] ?? null), "content_wide", [])) {
            // line 136
            echo "\t<!-- Start content wide -->
\t<section id=\"content-wide\" class=\"content-wide\">        
\t\t";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_wide", [])), "html", null, true);
            echo "
\t</section>
\t<!-- End content wide -->
\t";
        }
        // line 142
        echo "
\t";
        // line 143
        $this->loadTemplate("@pana/layout/footer.html.twig", "themes/pana/templates/layout/page.html.twig", 143)->display($context);
        // line 144
        echo "</div>
</div>
";
        // line 146
        if (($context["preloader"] ?? null)) {
            // line 147
            echo "<div class=\"preloader\">
\t<div class=\"preloader-spinner\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 147,  258 => 146,  254 => 144,  252 => 143,  249 => 142,  242 => 138,  238 => 136,  236 => 135,  230 => 131,  223 => 126,  217 => 123,  214 => 122,  211 => 121,  205 => 118,  202 => 117,  200 => 116,  194 => 112,  187 => 108,  183 => 107,  180 => 106,  178 => 105,  175 => 104,  168 => 100,  164 => 99,  161 => 98,  159 => 97,  156 => 96,  149 => 92,  145 => 91,  142 => 90,  140 => 89,  134 => 85,  132 => 84,  129 => 83,  122 => 79,  118 => 77,  116 => 76,  112 => 74,  104 => 69,  100 => 68,  95 => 65,  93 => 64,  90 => 63,  80 => 56,  73 => 51,  71 => 50,  68 => 49,  66 => 48,  62 => 47,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"wrapper\" class=\"wrapper {{ site_layout }} {{ header_style }}\">
<div class=\"layout-wrap {{ sticky_header }}\">
\t{% include '@pana/layout/header.html.twig' %}

\t{% if page.slider %}
\t<!-- Slider -->
\t<section id=\"slider\" class=\"clearfix\">        
\t\t<div id=\"slider-wrap\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t{{ page.slider }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Slider -->
\t{% endif %}

\t{%  if page.page_title and not is_front %}
\t<!-- Page Title -->
\t<section id=\"page-title\" class=\"page-title\">
\t\t<div class=\"container\">
\t\t\t{{ page.page_title }}
\t\t\t{{ page.breadcrumb }}
\t\t</div>
\t</section>
\t  <!-- End Page Title -->
\t{% endif %}


\t{% if page.content_wide_top %}
\t<!-- Start content top -->
\t<section id=\"content-wide-top\" class=\"content-wide\">        
\t\t{{ page.content_wide_top }}
\t</section>
\t<!-- End content top -->
\t{% endif %}
   
\t{% if page.content is not empty or page.sidebar_first or page.sidebar_second %}
\t<!-- layout -->
\t<section id=\"page-wrapper\" class=\"page-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row content-layout\">
\t\t\t  {% if page.sidebar_first | render %}
\t\t\t  <!--- Start Left SideBar -->
\t\t\t\t<div class =\"{{sidebarfirst}}  sidebar\">
\t\t\t\t\t{{ page.sidebar_first }}
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  {% endif %}

\t\t\t  {% if page.content | render %}
\t\t\t  <!--- Start content -->
\t\t\t\t<div class=\"{{contentlayout}}  main-content\">
\t\t\t\t\t{{ page.content }}
\t\t\t\t</div>
\t\t\t  <!---End content -->
\t\t\t  {% endif %}
             
\t\t\t  {% if page.sidebar_second | render %}
\t\t\t  <!--- Start Right SideBar -->
\t\t\t\t<div class=\"{{sidebarsecond}}  sidebar\">
\t\t\t\t\t{{ page.sidebar_second }}
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  {% endif %}
\t\t\t</div>
\t\t</div>
\t\t\t\t\t  <div class=\"container-fluid width--adjustment pt-3\">
             <div class=\"row\">
\t\t\t {% if page.custom_left | render %}
\t\t\t <div class=\"col-md-6\">
\t\t\t {{ page.custom_left }}
\t\t\t </div>
\t\t\t {% endif %}
\t\t\t {% if page.custom_right | render %}
\t\t\t <div class=\"col-md-6\">
\t\t\t {{ page.custom_right }}
\t\t\t </div>
\t\t\t {% endif %}
\t\t\t <div>
\t\t\t </div>
\t</section>
\t<!-- End layout -->
\t{% endif %}




\t{% if page.content_wide %}
\t<!-- Start content wide -->
\t<section id=\"content-wide\" class=\"content-wide\">        
\t\t{{ page.content_wide }}
\t</section>
\t<!-- End content wide -->
\t{% endif %}

\t{% include '@pana/layout/footer.html.twig' %}
</div>
</div>
{% if preloader %}
<div class=\"preloader\">
\t<div class=\"preloader-spinner\"></div>
</div>
{% endif %}", "themes/pana/templates/layout/page.html.twig", "/Users/hamad/WebServer/content-upload/themes/pana/templates/layout/page.html.twig");
    }
}
