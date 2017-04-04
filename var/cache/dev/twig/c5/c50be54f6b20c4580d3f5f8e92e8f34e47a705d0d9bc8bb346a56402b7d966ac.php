<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_8747bb49491923b1c62dec7e0c5ecc064ae0a446a660317fbc53c0be5866f34b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec17f4db537e86b1a67cf1087f9e24077dc6f0a679347f48f19e2e0e29a3f44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec17f4db537e86b1a67cf1087f9e24077dc6f0a679347f48f19e2e0e29a3f44e->enter($__internal_ec17f4db537e86b1a67cf1087f9e24077dc6f0a679347f48f19e2e0e29a3f44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_6850db948b41eb5c2964aac43ec38a5bf4b3de60d9fc596c89535d17b6f6e6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6850db948b41eb5c2964aac43ec38a5bf4b3de60d9fc596c89535d17b6f6e6b7->enter($__internal_6850db948b41eb5c2964aac43ec38a5bf4b3de60d9fc596c89535d17b6f6e6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_ec17f4db537e86b1a67cf1087f9e24077dc6f0a679347f48f19e2e0e29a3f44e->leave($__internal_ec17f4db537e86b1a67cf1087f9e24077dc6f0a679347f48f19e2e0e29a3f44e_prof);

        
        $__internal_6850db948b41eb5c2964aac43ec38a5bf4b3de60d9fc596c89535d17b6f6e6b7->leave($__internal_6850db948b41eb5c2964aac43ec38a5bf4b3de60d9fc596c89535d17b6f6e6b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
