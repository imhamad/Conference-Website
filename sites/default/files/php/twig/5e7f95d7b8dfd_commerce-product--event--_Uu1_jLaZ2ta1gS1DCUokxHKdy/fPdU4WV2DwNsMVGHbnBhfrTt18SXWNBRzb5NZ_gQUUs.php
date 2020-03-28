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

/* themes/pana/templates/commerce/commerce-product--event--teaser.html.twig */
class __TwigTemplate_9a45855c84a3a029179522b209e95d3fd70d8f6c8e48234d0e4b8cd6bb4d75e2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 23];
        $filters = ["escape" => 28, "date" => 41];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'date'],
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
        // line 23
        $context["classes"] = [0 => "product-teaser", 1 => "event-teaser"];
        // line 28
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

<div class=\"event-image\">";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_image", [])), "html", null, true);
        echo "</div>
<div class=\"event-content-wrap\">
<div class=\"event-content-container\">
\t<div class=\"event-content\">
\t\t<div class=\"event-title\">
\t\t<a href=\"";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "title", [])), "html", null, true);
        echo "</a>
\t\t<div class=\"event-price\">";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"event-meta\">
\t\t<div class=\"event-date-wrap\">
\t\t\t<div class=\"event-date\">
\t\t\t<span class=\"event-date-day\">";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_event_time", []), "value", [])), "jS"), "html", null, true);
        echo "</span>
\t\t\t<span class=\"event-date-month\">";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_event_time", []), "value", [])), "M"), "html", null, true);
        echo "</span>
\t\t\t<span class=\"event-date-year\">";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_event_time", []), "value", [])), "Y"), "html", null, true);
        echo "</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"event-time\">
\t\t<span class=\"ion-ios-clock-outline\"></span> ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_event_time", []), "value", [])), "g:i A"), "html", null, true);
        echo "
\t\t</div>
\t\t<div class=\"event-venue-wrap\">
\t\t<span class=\"ion-ios-location\"></span>
\t\t<div class=\"event-venue\">";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_event_venue", []), "value", [])), "html", null, true);
        echo "<span>,</span></div>
\t\t<div class=\"event-location\">";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_event_location", [])), "html", null, true);
        echo "</div>
\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
<div class=\"event-button\">
\t<a class=\"button\" href=\"";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\">Get Tickets</a>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/commerce/commerce-product--event--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 59,  111 => 52,  107 => 51,  100 => 47,  93 => 43,  89 => 42,  85 => 41,  77 => 36,  71 => 35,  63 => 30,  57 => 28,  55 => 23,);
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
 *
 * Default product template.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - product: The rendered product fields.
 *   Use 'product' to print them all, or print a subset such as
 *   'product.title'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ product|without('title') }}
 *   @endcode
 * - product_entity: The product entity.
 * - product_url: The product URL.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
\t'product-teaser',
\t'event-teaser',
  ]
%}
<div{{ attributes.addClass(classes) }}>

<div class=\"event-image\">{{ product.field_image }}</div>
<div class=\"event-content-wrap\">
<div class=\"event-content-container\">
\t<div class=\"event-content\">
\t\t<div class=\"event-title\">
\t\t<a href=\"{{ product_url }}\">{{ product.title }}</a>
\t\t<div class=\"event-price\">{{ product.variation_price }}</div>
\t\t</div>
\t\t<div class=\"event-meta\">
\t\t<div class=\"event-date-wrap\">
\t\t\t<div class=\"event-date\">
\t\t\t<span class=\"event-date-day\">{{ product_entity.field_event_time.value | date(\"jS\") }}</span>
\t\t\t<span class=\"event-date-month\">{{ product_entity.field_event_time.value | date(\"M\") }}</span>
\t\t\t<span class=\"event-date-year\">{{ product_entity.field_event_time.value | date(\"Y\") }}</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"event-time\">
\t\t<span class=\"ion-ios-clock-outline\"></span> {{ product_entity.field_event_time.value | date(\"g:i A\") }}
\t\t</div>
\t\t<div class=\"event-venue-wrap\">
\t\t<span class=\"ion-ios-location\"></span>
\t\t<div class=\"event-venue\">{{ product_entity.field_event_venue.value }}<span>,</span></div>
\t\t<div class=\"event-location\">{{ product.field_event_location }}</div>
\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
<div class=\"event-button\">
\t<a class=\"button\" href=\"{{ product_url }}\">Get Tickets</a>
</div>

</div>
", "themes/pana/templates/commerce/commerce-product--event--teaser.html.twig", "/Users/hamad/WebServer/content-upload/themes/pana/templates/commerce/commerce-product--event--teaser.html.twig");
    }
}
