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

/* themes/pana/templates/commerce/commerce-product--event.html.twig */
class __TwigTemplate_f3c4449922d740bbd8b671a0800c05cb3b8da8ace39e22a532bae744149c3ee3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 23];
        $filters = ["escape" => 29, "date" => 45, "without" => 66];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'date', 'without'],
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
        $context["classes"] = [0 => "product-post", 1 => "event-post"];
        // line 28
        echo "
<div";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"product-image\">";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_image", [])), "html", null, true);
        echo "</div>
\t\t</div>
\t\t<div class=\"col-md-6 product-content-wrap event-content-wrap\">
\t\t\t<div class=\"event-category\">";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_event_category", [])), "html", null, true);
        echo "</div>
\t\t\t<div class=\"event-title\">
\t\t\t<div class=\"product-title\">";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_title", [])), "html", null, true);
        echo "</div> 
\t\t\t<div class=\"product-price\">";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"event-meta-wrap\">
\t\t\t\t<div class=\"row event-duration\">
\t\t\t\t<div class=\"col-md-4 event-date\">
\t\t\t\t<h6 class=\"event-meta-tile\">Date</h6>
\t\t\t\t";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_event_time", []), "value", [])), "F jS Y"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 event-time\">
\t\t\t\t<h6 class=\"event-meta-tile\">Time</h6>
\t\t\t\t";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_event_time", []), "value", [])), "g:i A"), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"col-md-5 event-venue-wrap\">
\t\t\t<h6 class=\"event-meta-tile\">Venue</h6>
\t\t\t<div class=\"event-venue\">";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product_entity"] ?? null), "field_event_venue", []), "value", [])), "html", null, true);
        echo "<span>,</span></div>
\t\t\t<div class=\"event-location\">";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_event_location", [])), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t<div class=\"product-body\">";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "body", [])), "html", null, true);
        echo "</div>
\t\t\t
\t\t\t<div class=\"product-variation-wrap clearfix\">
\t\t\t\t<div class=\"ticket-button product-add-cart\">";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variations", [])), "html", null, true);
        echo "</div>
\t\t\t</div>";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null)), "variation_attributes", "variation_price", "variation_title", "variations", "field_image", "field_event_time", "field_event_category", "field_event_location", "field_event_venue", "body"), "html", null, true);
        // line 68
        echo "</div>
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/commerce/commerce-product--event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 68,  128 => 66,  124 => 63,  118 => 60,  110 => 55,  106 => 54,  98 => 49,  91 => 45,  82 => 39,  78 => 38,  73 => 36,  67 => 33,  60 => 29,  57 => 28,  55 => 23,);
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
\t'product-post',
\t'event-post',
  ]
%}

<div{{ attributes.addClass(classes) }}>

\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"product-image\">{{ product.field_image }}</div>
\t\t</div>
\t\t<div class=\"col-md-6 product-content-wrap event-content-wrap\">
\t\t\t<div class=\"event-category\">{{ product.field_event_category }}</div>
\t\t\t<div class=\"event-title\">
\t\t\t<div class=\"product-title\">{{ product.variation_title }}</div> 
\t\t\t<div class=\"product-price\">{{ product.variation_price }}</div>
\t\t\t</div>
\t\t\t<div class=\"event-meta-wrap\">
\t\t\t\t<div class=\"row event-duration\">
\t\t\t\t<div class=\"col-md-4 event-date\">
\t\t\t\t<h6 class=\"event-meta-tile\">Date</h6>
\t\t\t\t{{ product_entity.field_event_time.value | date(\"F jS Y\") }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 event-time\">
\t\t\t\t<h6 class=\"event-meta-tile\">Time</h6>
\t\t\t\t{{ product_entity.field_event_time.value | date(\"g:i A\") }}
\t\t\t\t</div>
\t\t\t\t
\t\t\t<div class=\"col-md-5 event-venue-wrap\">
\t\t\t<h6 class=\"event-meta-tile\">Venue</h6>
\t\t\t<div class=\"event-venue\">{{ product_entity.field_event_venue.value }}<span>,</span></div>
\t\t\t<div class=\"event-location\">{{ product.field_event_location }}</div>
\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t</div>
\t\t\t<div class=\"product-body\">{{ product.body }}</div>
\t\t\t
\t\t\t<div class=\"product-variation-wrap clearfix\">
\t\t\t\t<div class=\"ticket-button product-add-cart\">{{ product.variations }}</div>
\t\t\t</div>
\t\t\t
\t{{- product|without('variation_attributes','variation_price','variation_title','variations','field_image','field_event_time','field_event_category','field_event_location','field_event_venue','body') -}}
\t
\t\t</div>
\t</div>

</div>", "themes/pana/templates/commerce/commerce-product--event.html.twig", "/Users/hamad/WebServer/mastersconference/themes/pana/templates/commerce/commerce-product--event.html.twig");
    }
}
