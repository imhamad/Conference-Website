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

/* themes/pana/templates/commerce/commerce-product--event-ticket.html.twig */
class __TwigTemplate_a0f40850c3ce40e5a75e0ae547b019a387049a35bfdf3f031fa93726f8e0af89 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 23, "if" => 33];
        $filters = ["escape" => 28, "render" => 33];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        // line 23
        $context["classes"] = [0 => "product-post", 1 => "pricing-table"];
        // line 28
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
\t<div class=\"text-center pricing-wrap\">
\t\t<div class=\"pricing-header\">
\t\t\t<div class=\"pricing-name\">";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_title", [])), "html", null, true);
        echo "</div>
\t\t\t<div class=\"pricing-pice\">";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
        echo "</div>
\t\t\t";
        // line 33
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "body", []))) {
            // line 34
            echo "\t\t\t<div class=\"text-sm pricing-body\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "body", [])), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 36
        echo "\t\t</div>
\t\t<div class=\"pricing-content\">
\t\t\t";
        // line 38
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "field_ticket_feature", []))) {
            // line 39
            echo "\t\t\t<div class=\"pricing-features\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_ticket_feature", [])), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 41
        echo "\t\t\t\t
\t\t\t<div class=\"ticket-button pricing-btn\">
\t\t\t";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variations", [])), "html", null, true);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/commerce/commerce-product--event-ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 43,  92 => 41,  86 => 39,  84 => 38,  80 => 36,  74 => 34,  72 => 33,  68 => 32,  64 => 31,  57 => 28,  55 => 23,);
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
\t'pricing-table',
  ]
%}
<div{{ attributes.addClass(classes) }}>
\t<div class=\"text-center pricing-wrap\">
\t\t<div class=\"pricing-header\">
\t\t\t<div class=\"pricing-name\">{{ product.variation_title }}</div>
\t\t\t<div class=\"pricing-pice\">{{ product.variation_price }}</div>
\t\t\t{% if product.body | render %}
\t\t\t<div class=\"text-sm pricing-body\">{{ product.body }}</div>
\t\t\t{% endif %}
\t\t</div>
\t\t<div class=\"pricing-content\">
\t\t\t{% if product.field_ticket_feature | render %}
\t\t\t<div class=\"pricing-features\">{{ product.field_ticket_feature }}</div>
\t\t\t{% endif %}
\t\t\t\t
\t\t\t<div class=\"ticket-button pricing-btn\">
\t\t\t{{ product.variations }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>", "themes/pana/templates/commerce/commerce-product--event-ticket.html.twig", "/Users/hamad/WebServer/content-upload/themes/pana/templates/commerce/commerce-product--event-ticket.html.twig");
    }
}
