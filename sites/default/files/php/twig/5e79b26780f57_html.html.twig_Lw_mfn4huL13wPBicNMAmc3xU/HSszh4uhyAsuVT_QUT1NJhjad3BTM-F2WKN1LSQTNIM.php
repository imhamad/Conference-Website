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

/* themes/pana/templates/layout/html.html.twig */
class __TwigTemplate_388eaad90909f38cb60b5afc154fa2b7bfee49d9b70eaf9fcdf9d08391978b90 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 27, "if" => 44];
        $filters = ["clean_class" => 29, "escape" => 38, "raw" => 40, "safe_join" => 41, "t" => 57];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
        // line 27
        $context["body_classes"] = [0 => ((        // line 28
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), 1 => (( !        // line 29
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null)))))), 2 => ((        // line 30
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 3 => (($this->getAttribute(        // line 31
($context["path_info"] ?? null), "args", [])) ? (("path-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["path_info"] ?? null), "args", [])))) : ("")), 4 => ((        // line 32
($context["current_path"] ?? null)) ? (("page" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["current_path"] ?? null))))) : ("")), 5 => ((        // line 33
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), 6 => "single-page"];
        // line 37
        echo "<!DOCTYPE html>
<html";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null)), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <title>";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
    <js-placeholder token=\"";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
\t";
        // line 44
        if (($context["custom_css"] ?? null)) {
            // line 45
            echo "\t  <style type=\"text/css\" media=\"all\">
\t   ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["custom_css"] ?? null)), "html", null, true);
            echo "
\t  </style>
\t";
        }
        // line 49
        echo "  </head>
    ";
        // line 50
        if (($context["single_page_menu"] ?? null)) {
            echo "\t
\t<body";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
            echo " data-spy=\"scroll\" data-target=\".single-page-menu\" data-offset=\"70\" >
\t<div id=\"home\"></div>
\t";
        } else {
            // line 54
            echo "\t<body";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method"), "removeClass", [0 => "single-page"], "method")), "html", null, true);
            echo ">
\t";
        }
        // line 56
        echo "\t<a href=\"#main-content\" class=\"visually-hidden focusable\">
\t  ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "
\t</a>
    ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
    ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
    ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)));
        echo "\">
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 62,  133 => 61,  129 => 60,  125 => 59,  120 => 57,  117 => 56,  111 => 54,  105 => 51,  101 => 50,  98 => 49,  92 => 46,  89 => 45,  87 => 44,  83 => 43,  79 => 42,  75 => 41,  71 => 40,  66 => 38,  63 => 37,  61 => 33,  60 => 32,  59 => 31,  58 => 30,  57 => 29,  56 => 28,  55 => 27,);
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
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in',
    not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
    node_type ? 'page-node-type-' ~ node_type|clean_class,
\tpath_info.args ? 'path-' ~ path_info.args,
\tcurrent_path ? 'page' ~ current_path|clean_class,
    db_offline ? 'db-offline',
\t'single-page',
  ]
%}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
\t{% if custom_css %}
\t  <style type=\"text/css\" media=\"all\">
\t   {{custom_css}}
\t  </style>
\t{% endif %}
  </head>
    {% if single_page_menu %}\t
\t<body{{ attributes.addClass(body_classes) }} data-spy=\"scroll\" data-target=\".single-page-menu\" data-offset=\"70\" >
\t<div id=\"home\"></div>
\t{% else %}
\t<body{{ attributes.addClass(body_classes).removeClass('single-page') }}>
\t{% endif %}
\t<a href=\"#main-content\" class=\"visually-hidden focusable\">
\t  {{ 'Skip to main content'|t }}
\t</a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
\t</body>
</html>", "themes/pana/templates/layout/html.html.twig", "/Users/hamad/WebServer/mastersconference/themes/pana/templates/layout/html.html.twig");
    }
}
