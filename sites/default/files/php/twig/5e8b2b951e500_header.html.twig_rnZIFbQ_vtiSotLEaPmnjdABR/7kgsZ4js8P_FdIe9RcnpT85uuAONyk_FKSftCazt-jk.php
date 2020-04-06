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

/* @pana/layout/header.html.twig */
class __TwigTemplate_940904af97a45eba06803d6054677f4d7d6719e00854f33d71c29aab6eaf4067 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 7];
        $filters = ["escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 2
        echo "<!-- Header Start -->
<header class=\"header\">
\t<div class=\"header-content\">
\t\t<div class=\"navbar navbar-expand-md navbar-dark ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_color"] ?? null)), "html", null, true);
        echo "\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 7
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 8
            echo "\t\t\t\t<div class=\"navbar-brand header-brand\">
\t\t\t\t\t";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 12
        echo "
\t\t\t\t";
        // line 13
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || ($context["header_link_url"] ?? null))) {
            // line 14
            echo "\t\t\t\t<div id=\"main-menu\" class=\"primary-navbar collapse navbar-collapse ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_align"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 15
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 16
                echo "\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t
\t\t\t\t";
            // line 19
            if (($context["header_link_url"] ?? null)) {
                // line 20
                echo "\t\t\t\t<div class=\"header-link-button\">
\t\t\t\t<div class=\"nav menu\">
\t\t\t\t\t";
                // line 23
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"button\" href=\"/tickets\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_link_text"] ?? null)), "html", null, true);
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 27
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t\t
\t\t\t\t";
        // line 30
        if (($this->getAttribute(($context["page"] ?? null), "user_account", []) || $this->getAttribute(($context["page"] ?? null), "cart", []))) {
            // line 31
            echo "\t\t\t\t<div class=\"header-element icon-element\">
\t\t\t\t\t<div class=\"header-element-icon\">
\t\t\t\t\t";
            // line 33
            if ($this->getAttribute(($context["page"] ?? null), "user_account", [])) {
                // line 34
                echo "\t\t\t\t\t\t<div class=\"header-element-item header-element-account\">
\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-toggle header-icon account-icon\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"ion-android-contact\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div id=\"user-account-block-wrap\" class=\"dropdown-menu user-account-block-wrap\">
\t\t\t\t\t\t";
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "user_account", [])), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 44
            if ($this->getAttribute(($context["page"] ?? null), "cart", [])) {
                // line 45
                echo "\t\t\t\t\t\t<div class=\"header-element-item header-element-cart\">
\t\t\t\t\t\t\t<div class=\"header-icon text-xs-left header-cart\">";
                // line 46
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cart", [])), "html", null, true);
                echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 52
        echo "\t\t\t\t
\t\t\t\t";
        // line 53
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 54
            echo "\t\t\t\t<div class=\"header-section\">
\t\t\t\t";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 58
        echo "\t\t\t\t
\t\t\t\t<button class=\"navbar-toggler nav-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- Header End -->
";
    }

    public function getTemplateName()
    {
        return "@pana/layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 58,  167 => 55,  164 => 54,  162 => 53,  159 => 52,  154 => 49,  148 => 46,  145 => 45,  143 => 44,  140 => 43,  133 => 39,  126 => 34,  124 => 33,  120 => 31,  118 => 30,  115 => 29,  111 => 27,  103 => 23,  99 => 20,  97 => 19,  94 => 18,  88 => 16,  86 => 15,  81 => 14,  79 => 13,  76 => 12,  70 => 9,  67 => 8,  65 => 7,  60 => 5,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @pana theme header #}
<!-- Header Start -->
<header class=\"header\">
\t<div class=\"header-content\">
\t\t<div class=\"navbar navbar-expand-md navbar-dark {{ nav_color }}\">
\t\t\t<div class=\"container\">
\t\t\t\t{% if page.branding %}
\t\t\t\t<div class=\"navbar-brand header-brand\">
\t\t\t\t\t{{ page.branding }}
\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if page.primary_menu or header_link_url %}
\t\t\t\t<div id=\"main-menu\" class=\"primary-navbar collapse navbar-collapse {{ nav_align }}\">
\t\t\t\t{% if page.primary_menu %}
\t\t\t\t{{ page.primary_menu }}
\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t{% if header_link_url %}
\t\t\t\t<div class=\"header-link-button\">
\t\t\t\t<div class=\"nav menu\">
\t\t\t\t\t{# <a class=\"button\" href=\"{{ header_link_url }}\">{{ header_link_text }}</a> #}
\t\t\t\t\t\t\t\t\t\t<a class=\"button\" href=\"/tickets\">{{ header_link_text }}</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t\t\t
\t\t\t\t{% if page.user_account or page.cart %}
\t\t\t\t<div class=\"header-element icon-element\">
\t\t\t\t\t<div class=\"header-element-icon\">
\t\t\t\t\t{% if page.user_account %}
\t\t\t\t\t\t<div class=\"header-element-item header-element-account\">
\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-toggle header-icon account-icon\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"ion-android-contact\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div id=\"user-account-block-wrap\" class=\"dropdown-menu user-account-block-wrap\">
\t\t\t\t\t\t{{ page.user_account }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t{% endif %}
\t\t\t\t\t
\t\t\t\t\t{% if page.cart %}
\t\t\t\t\t\t<div class=\"header-element-item header-element-cart\">
\t\t\t\t\t\t\t<div class=\"header-icon text-xs-left header-cart\">{{ page.cart }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t{% if page.header %}
\t\t\t\t<div class=\"header-section\">
\t\t\t\t{{ page.header }}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t<button class=\"navbar-toggler nav-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- Header End -->
", "@pana/layout/header.html.twig", "/Users/hamad/WebServer/content-upload/themes/pana/templates/layout/header.html.twig");
    }
}
