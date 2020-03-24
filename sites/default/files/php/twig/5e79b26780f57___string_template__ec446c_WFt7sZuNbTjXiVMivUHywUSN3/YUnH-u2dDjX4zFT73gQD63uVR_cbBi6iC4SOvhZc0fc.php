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

/* __string_template__ec446c0d8985b6969e8a3ffeee25a1c24461fff33ae804308e824fe475cc187e */
class __TwigTemplate_55df48f13393f32b357c6e45db1938767208e0b5582707dd2c9cac8e0a9b4844 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 2];
        $filters = ["render" => 6, "escape" => 12];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['render', 'escape'],
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
        // line 1
        echo "<div class=\"event-session-item\">
\t";
        // line 2
        if (((($context["field_event_speaker"] ?? null) || ($context["field_sponsor"] ?? null)) || ($context["field_event_venue"] ?? null))) {
            // line 3
            echo "\t<div class=\"toggle-content-wrap\">
\t\t<div class=\"toggle-content\">
\t\t\t<div class=\"toggle-content-inner\">
\t\t\t";
            // line 6
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["field_event_venue"] ?? null))) {
                // line 7
                echo "\t\t\t<div class=\"toggle-item session-venue\">
\t\t\t<div class=\"toggle-item-inner\">
\t\t\t<span class=\"toggle-item-icon ion-ios-location\"></span>
\t\t\t<div class=\"toggle-detail-wrap\">
\t\t\t<div class=\"toggle-item-title\">Venue</div>
\t\t\t<div class=\"toggle-item-content\">";
                // line 12
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_venue"] ?? null)), "html", null, true);
                echo "</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t    ";
            }
            // line 17
            echo "\t\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["field_event_speaker"] ?? null))) {
                // line 18
                echo "\t\t\t<div class=\"toggle-item session-speaker\">
\t\t\t<div class=\"toggle-item-inner\">
\t\t\t<span class=\"toggle-item-icon ion-mic-a\"></span>
\t\t\t<div class=\"toggle-detail-wrap\">
\t\t\t<div class=\"toggle-item-title\">Speaker</div>
\t\t\t<div class=\"toggle-item-content\">";
                // line 23
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_speaker"] ?? null)), "html", null, true);
                echo "</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 28
            echo "\t\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["field_sponsor"] ?? null))) {
                // line 29
                echo "\t\t\t<div class=\"toggle-item session-sponsor\">
\t\t\t<div class=\"toggle-item-inner\">
\t\t\t<span class=\"toggle-item-icon ion-ribbon-b\"></span>
\t\t\t<div class=\"toggle-detail-wrap\">
\t\t\t<div class=\"toggle-item-title\">Sponsor</div>
\t\t\t<div class=\"toggle-item-content\">";
                // line 34
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_sponsor"] ?? null)), "html", null, true);
                echo "</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            // line 39
            echo "\t\t\t</div>
\t\t\t<span class=\"toggle-nav\">
\t\t\t\t<span class=\"toggle-nav-item\"></span>
\t\t\t</span>
\t\t</div>
\t</div>
\t";
        }
        // line 46
        echo "\t<div class=\"session-time\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_time"] ?? null)), "html", null, true);
        echo "</div>
\t<h5 class=\"session-title\">";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</h5>
\t<div class=\"session-content\">";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__ec446c0d8985b6969e8a3ffeee25a1c24461fff33ae804308e824fe475cc187e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 48,  132 => 47,  127 => 46,  118 => 39,  110 => 34,  103 => 29,  100 => 28,  92 => 23,  85 => 18,  82 => 17,  74 => 12,  67 => 7,  65 => 6,  60 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"event-session-item\">
\t{% if field_event_speaker or field_sponsor or field_event_venue %}
\t<div class=\"toggle-content-wrap\">
\t\t<div class=\"toggle-content\">
\t\t\t<div class=\"toggle-content-inner\">
\t\t\t{% if field_event_venue | render %}
\t\t\t<div class=\"toggle-item session-venue\">
\t\t\t<div class=\"toggle-item-inner\">
\t\t\t<span class=\"toggle-item-icon ion-ios-location\"></span>
\t\t\t<div class=\"toggle-detail-wrap\">
\t\t\t<div class=\"toggle-item-title\">Venue</div>
\t\t\t<div class=\"toggle-item-content\">{{ field_event_venue }}</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t    {% endif %}
\t\t\t{% if field_event_speaker | render %}
\t\t\t<div class=\"toggle-item session-speaker\">
\t\t\t<div class=\"toggle-item-inner\">
\t\t\t<span class=\"toggle-item-icon ion-mic-a\"></span>
\t\t\t<div class=\"toggle-detail-wrap\">
\t\t\t<div class=\"toggle-item-title\">Speaker</div>
\t\t\t<div class=\"toggle-item-content\">{{ field_event_speaker }}</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t{% endif %}
\t\t\t{% if field_sponsor | render %}
\t\t\t<div class=\"toggle-item session-sponsor\">
\t\t\t<div class=\"toggle-item-inner\">
\t\t\t<span class=\"toggle-item-icon ion-ribbon-b\"></span>
\t\t\t<div class=\"toggle-detail-wrap\">
\t\t\t<div class=\"toggle-item-title\">Sponsor</div>
\t\t\t<div class=\"toggle-item-content\">{{ field_sponsor }}</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<span class=\"toggle-nav\">
\t\t\t\t<span class=\"toggle-nav-item\"></span>
\t\t\t</span>
\t\t</div>
\t</div>
\t{% endif %}
\t<div class=\"session-time\">{{ field_event_time }}</div>
\t<h5 class=\"session-title\">{{ title }}</h5>
\t<div class=\"session-content\">{{ body }}</div>
</div>", "__string_template__ec446c0d8985b6969e8a3ffeee25a1c24461fff33ae804308e824fe475cc187e", "");
    }
}
