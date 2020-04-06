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

/* themes/pana/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_a21e2f01be24708904763005d39bb1b46cb2449e69dfb0e812367117290ada36 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12];
        $filters = ["t" => 13, "escape" => 14];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
        // line 7
        echo "
<div class=\"task-bar alert alert-dismissable clearfix\">
\t<div class=\"clearfix\">
        <div class=\"col-md-12\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t";
        // line 12
        if (($context["primary"] ?? null)) {
            // line 13
            echo "\t\t  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Primary tabs"));
            echo "</h2>
\t\t  <ul class=\"tabs primary\">";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null)), "html", null, true);
            echo "</ul>
\t\t";
        }
        // line 16
        echo "\t\t";
        if (($context["secondary"] ?? null)) {
            // line 17
            echo "\t\t  <h2 class=\"visually-hidden\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Secondary tabs"));
            echo "</h2>
\t\t  <ul class=\"tabs secondary\">";
            // line 18
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null)), "html", null, true);
            echo "</ul>
\t\t";
        }
        // line 20
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  82 => 18,  77 => 17,  74 => 16,  69 => 14,  64 => 13,  62 => 12,  55 => 7,);
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
 * Theme override to display primary and secondary local tasks.
 */
#}

<div class=\"task-bar alert alert-dismissable clearfix\">
\t<div class=\"clearfix\">
        <div class=\"col-md-12\">
\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t\t{% if primary %}
\t\t  <h2 class=\"visually-hidden\">{{ 'Primary tabs'|t }}</h2>
\t\t  <ul class=\"tabs primary\">{{ primary }}</ul>
\t\t{% endif %}
\t\t{% if secondary %}
\t\t  <h2 class=\"visually-hidden\">{{ 'Secondary tabs'|t }}</h2>
\t\t  <ul class=\"tabs secondary\">{{ secondary }}</ul>
\t\t{% endif %}
        </div>
    </div>
</div>", "themes/pana/templates/navigation/menu-local-tasks.html.twig", "/Users/hamad/WebServer/content-upload/themes/pana/templates/navigation/menu-local-tasks.html.twig");
    }
}
