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

/* themes/pana/templates/views/views-view-grouping--schedule.html.twig */
class __TwigTemplate_36d7f12364511400b5bee57dd10d9c8ae1e8beb201ea7c7246f5ad50f82d0f6f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 19];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 17
        echo "<div class=\"col-md-4 mb-4 view-grouping\">
\t<div class=\"view-grouping-container\">
\t\t<div class=\"view-grouping-header\">";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</div>
\t\t<div class=\"view-grouping-content\">";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/views/views-view-grouping--schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  59 => 19,  55 => 17,);
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
 * Theme override to display a single views grouping.
 *
 * Available variables:
 * - view: The view object.
 * - grouping: The grouping instruction.
 * - grouping_level: A number indicating the hierarchical level of the grouping.
 * - title: The group heading.
 * - content: The content to be grouped.
 * - rows: The rows returned from the view.
 *
 * @see template_preprocess_views_view_grouping()
 */
#}
<div class=\"col-md-4 mb-4 view-grouping\">
\t<div class=\"view-grouping-container\">
\t\t<div class=\"view-grouping-header\">{{ title }}</div>
\t\t<div class=\"view-grouping-content\">{{ content }}</div>
\t</div>
</div>", "themes/pana/templates/views/views-view-grouping--schedule.html.twig", "/Users/hamad/WebServer/mastersconference/themes/pana/templates/views/views-view-grouping--schedule.html.twig");
    }
}
