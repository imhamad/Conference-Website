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

/* @pana/layout/footer.html.twig */
class __TwigTemplate_466531cdca3c34fa65923bb4190c519ddec2301dbd719a6ec936e4bb895934c8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 2, "t" => 72];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
        echo "<footer id=\"footer\" class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_theme"] ?? null)), "html", null, true);
        echo "\">
\t<!-- start Footer -->
\t";
        // line 4
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_forth", []))) {
            // line 5
            echo "\t  <div class=\"footer-widget\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t";
            // line 8
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 9
                echo "\t\t\t<!-- Start Footer First Region -->
\t\t\t";
                // line 10
                if (($context["footer_responsive"] ?? null)) {
                    // line 11
                    echo "\t\t\t<div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null)), "html", null, true);
                    echo " footer-widget-section\">
\t\t\t";
                } else {
                    // line 13
                    echo "\t\t\t<div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                    echo " footer-widget-section\">
\t\t\t";
                }
                // line 15
                echo "\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer First Region -->
\t\t\t";
            }
            // line 19
            echo "
\t\t\t";
            // line 20
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 21
                echo "\t\t\t<!-- Start Footer Second Region -->
\t\t\t";
                // line 22
                if (($context["footer_responsive"] ?? null)) {
                    // line 23
                    echo "\t\t\t<div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null)), "html", null, true);
                    echo " footer-widget-section\">
\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t<div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                    echo " footer-widget-section\">
\t\t\t";
                }
                // line 27
                echo "\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Second Region -->
\t\t\t";
            }
            // line 31
            echo "
\t\t\t";
            // line 32
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 33
                echo "\t\t\t<!-- Start Footer Third Region -->
\t\t\t";
                // line 34
                if (($context["footer_responsive"] ?? null)) {
                    // line 35
                    echo "\t\t\t<div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null)), "html", null, true);
                    echo " footer-widget-section\">
\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t<div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                    echo " footer-widget-section\">
\t\t\t";
                }
                // line 39
                echo "\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Third Region -->
\t\t\t";
            }
            // line 43
            echo "\t\t\t
\t\t\t";
            // line 44
            if ($this->getAttribute(($context["page"] ?? null), "footer_forth", [])) {
                // line 45
                echo "\t\t\t<!-- Start Footer Forth Region -->
\t\t\t";
                // line 46
                if (($context["footer_responsive"] ?? null)) {
                    // line 47
                    echo "\t\t\t<div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_forth_size"] ?? null)), "html", null, true);
                    echo " footer-widget-section\">
\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t<div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                    echo " footer-widget-section\">
\t\t\t";
                }
                // line 51
                echo "\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_forth", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Forth Region -->
\t\t\t";
            }
            // line 55
            echo "\t\t\t</div>
\t\t</div>
\t  </div>
\t";
        }
        // line 59
        echo "\t<!--End Footer -->

";
        // line 61
        if (($context["copyright"] ?? null)) {
            // line 62
            echo "\t<!-- Copyright -->
\t<div class=\"footer-bottom\">
\t  <div class=\"container\">
\t\t<div class=\"row\">
\t\t  <div class=\"col-12\">
\t\t\t<div class=\"copyright text-center\">
\t\t\t<li class=\"last leaf\"><a href=\"/sitemap\" title=\"\" target=\"blank\">SITE MAP</a></li> 
\t\t\t<li class=\"leaf\"><a href=\"/privacy-policy\" title=\"\" target=\"blank\">PRIVACY POLICY</a></li>
<li class=\"last leaf\"><a href=\"/contact\" title=\"\" target=\"blank\">CONTACT US</a></li>  

\t\t\t<p>";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Copyright ©"));
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["copyright_date"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("· All rights reserved."));
            echo "</p>   
\t\t\t<br>  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
\t<!-- End Copyright -->
";
        }
        // line 81
        echo "</footer>
";
        // line 82
        if (($context["scrolltop"] ?? null)) {
            // line 83
            echo "\t<div class=\"back-to-top\"><span class=\"ion-ios-arrow-up\"></span></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@pana/layout/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 83,  229 => 82,  226 => 81,  209 => 72,  197 => 62,  195 => 61,  191 => 59,  185 => 55,  177 => 51,  171 => 49,  165 => 47,  163 => 46,  160 => 45,  158 => 44,  155 => 43,  147 => 39,  141 => 37,  135 => 35,  133 => 34,  130 => 33,  128 => 32,  125 => 31,  117 => 27,  111 => 25,  105 => 23,  103 => 22,  100 => 21,  98 => 20,  95 => 19,  87 => 15,  81 => 13,  75 => 11,  73 => 10,  70 => 9,  68 => 8,  63 => 5,  61 => 4,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @file pana footer #}
<footer id=\"footer\" class=\"footer {{ footer_theme }}\">
\t<!-- start Footer -->
\t{% if page.footer_first or page.footer_second or page.footer_third or page.footer_forth %}
\t  <div class=\"footer-widget\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t{% if page.footer_first %}
\t\t\t<!-- Start Footer First Region -->
\t\t\t{% if footer_responsive %}
\t\t\t<div class=\"{{ footer_first_size }} footer-widget-section\">
\t\t\t{% else %}
\t\t\t<div class=\"{{ footer_class }} footer-widget-section\">
\t\t\t{% endif %}
\t\t\t\t{{ page.footer_first }}
\t\t\t</div>
\t\t\t<!-- End Footer First Region -->
\t\t\t{% endif %}

\t\t\t{% if page.footer_second %}
\t\t\t<!-- Start Footer Second Region -->
\t\t\t{% if footer_responsive %}
\t\t\t<div class=\"{{ footer_second_size }} footer-widget-section\">
\t\t\t{% else %}
\t\t\t<div class=\"{{ footer_class }} footer-widget-section\">
\t\t\t{% endif %}
\t\t\t\t{{ page.footer_second }}
\t\t\t</div>
\t\t\t<!-- End Footer Second Region -->
\t\t\t{% endif %}

\t\t\t{% if page.footer_third %}
\t\t\t<!-- Start Footer Third Region -->
\t\t\t{% if footer_responsive %}
\t\t\t<div class=\"{{ footer_third_size }} footer-widget-section\">
\t\t\t{% else %}
\t\t\t<div class=\"{{ footer_class }} footer-widget-section\">
\t\t\t{% endif %}
\t\t\t\t{{ page.footer_third }}
\t\t\t</div>
\t\t\t<!-- End Footer Third Region -->
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if page.footer_forth %}
\t\t\t<!-- Start Footer Forth Region -->
\t\t\t{% if footer_responsive %}
\t\t\t<div class=\"{{ footer_forth_size }} footer-widget-section\">
\t\t\t{% else %}
\t\t\t<div class=\"{{ footer_class }} footer-widget-section\">
\t\t\t{% endif %}
\t\t\t\t{{ page.footer_forth }}
\t\t\t</div>
\t\t\t<!-- End Footer Forth Region -->
\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t  </div>
\t{% endif %}
\t<!--End Footer -->

{% if copyright %}
\t<!-- Copyright -->
\t<div class=\"footer-bottom\">
\t  <div class=\"container\">
\t\t<div class=\"row\">
\t\t  <div class=\"col-12\">
\t\t\t<div class=\"copyright text-center\">
\t\t\t<li class=\"last leaf\"><a href=\"/sitemap\" title=\"\" target=\"blank\">SITE MAP</a></li> 
\t\t\t<li class=\"leaf\"><a href=\"/privacy-policy\" title=\"\" target=\"blank\">PRIVACY POLICY</a></li>
<li class=\"last leaf\"><a href=\"/contact\" title=\"\" target=\"blank\">CONTACT US</a></li>  

\t\t\t<p>{{ 'Copyright ©' | t }} {{ copyright_date }} {{ site_name }}{{ '· All rights reserved.' | t }}</p>   
\t\t\t<br>  
\t\t\t</div>
\t\t  </div>
\t\t</div>
\t  </div>
\t</div>
\t<!-- End Copyright -->
{% endif %}
</footer>
{% if scrolltop %}
\t<div class=\"back-to-top\"><span class=\"ion-ios-arrow-up\"></span></div>
{% endif %}
", "@pana/layout/footer.html.twig", "/Users/hamad/WebServer/content-upload/themes/pana/templates/layout/footer.html.twig");
    }
}
