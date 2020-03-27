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

/* themes/pana/templates/layout/page--404.html.twig */
class __TwigTemplate_5ed2d9556f7c9d9c181e0665314ed3ca8539ca731104fd95349982deb1f0e48c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 48, "if" => 50];
        $filters = ["escape" => 46];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
        $this->loadTemplate("@pana/layout/header.html.twig", "themes/pana/templates/layout/page--404.html.twig", 48)->display($context);
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
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "content_wide_top", [])) {
            // line 66
            echo "\t<!-- Start content top -->
\t<section id=\"content-wide-top\" class=\"content-wide\">        
\t\t";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_wide_top", [])), "html", null, true);
            echo "
\t</section>
\t<!-- End content top -->
\t";
        }
        // line 72
        echo "
\t<!-- layout -->
\t<section id=\"page-wrapper\" class=\"page-wrapper\">

\t  <div class=\"container\">\t
\t\t<div class=\"row layout\">
\t\t  <!--- Start content -->
\t\t\t<div class=\"content-layout\">
\t\t\t  <div class=\"col-12\">
\t\t\t\t<div class=\"error-404 text-middle text-center\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"error-404-number\">404</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<h2 class=\"text-medium\">Sorry, This Page Could Not Be Found!</h2>
\t\t\t\t\t<p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
\t\t\t\t\t<a class=\"button\" href=\"";
        // line 90
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
        echo "\">Go Back to Homepage</a>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t  <!---End content -->
\t\t</div>
\t  </div>

\t</section>
\t<!-- End layout -->

\t";
        // line 104
        if ($this->getAttribute(($context["page"] ?? null), "content_wide", [])) {
            // line 105
            echo "\t<!-- Start content wide -->
\t<section id=\"content-wide\" class=\"content-wide\">        
\t\t";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_wide", [])), "html", null, true);
            echo "
\t</section>
\t<!-- End content wide -->
\t";
        }
        // line 111
        echo "
";
        // line 112
        $this->loadTemplate("@pana/layout/footer.html.twig", "themes/pana/templates/layout/page--404.html.twig", 112)->display($context);
        // line 113
        echo "
</div>
</div>
";
        // line 116
        if (($context["preloader"] ?? null)) {
            // line 117
            echo "<div class=\"preloader\">
\t<div class=\"preloader-spinner\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/layout/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 117,  167 => 116,  162 => 113,  160 => 112,  157 => 111,  150 => 107,  146 => 105,  144 => 104,  127 => 90,  107 => 72,  100 => 68,  96 => 66,  94 => 65,  90 => 63,  80 => 56,  73 => 51,  71 => 50,  68 => 49,  66 => 48,  62 => 47,  55 => 46,);
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


\t{% if page.content_wide_top %}
\t<!-- Start content top -->
\t<section id=\"content-wide-top\" class=\"content-wide\">        
\t\t{{ page.content_wide_top }}
\t</section>
\t<!-- End content top -->
\t{% endif %}

\t<!-- layout -->
\t<section id=\"page-wrapper\" class=\"page-wrapper\">

\t  <div class=\"container\">\t
\t\t<div class=\"row layout\">
\t\t  <!--- Start content -->
\t\t\t<div class=\"content-layout\">
\t\t\t  <div class=\"col-12\">
\t\t\t\t<div class=\"error-404 text-middle text-center\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"error-404-number\">404</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<h2 class=\"text-medium\">Sorry, This Page Could Not Be Found!</h2>
\t\t\t\t\t<p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
\t\t\t\t\t<a class=\"button\" href=\"{{ front_page }}\">Go Back to Homepage</a>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t  <!---End content -->
\t\t</div>
\t  </div>

\t</section>
\t<!-- End layout -->

\t{% if page.content_wide %}
\t<!-- Start content wide -->
\t<section id=\"content-wide\" class=\"content-wide\">        
\t\t{{ page.content_wide }}
\t</section>
\t<!-- End content wide -->
\t{% endif %}

{% include '@pana/layout/footer.html.twig' %}

</div>
</div>
{% if preloader %}
<div class=\"preloader\">
\t<div class=\"preloader-spinner\"></div>
</div>
{% endif %}", "themes/pana/templates/layout/page--404.html.twig", "/Users/hamad/WebServer/mastersconference/themes/pana/templates/layout/page--404.html.twig");
    }
}
