<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_39a586061736587286c44e67c3b13141969ee101a76afb1d9b6f7bb2cdee03b1 extends Twig_Template
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
        $__internal_cd4a062c1208984975727824c9a5b269ff3352d02db2acae033a49d1b81a5e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4a062c1208984975727824c9a5b269ff3352d02db2acae033a49d1b81a5e5e->enter($__internal_cd4a062c1208984975727824c9a5b269ff3352d02db2acae033a49d1b81a5e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_a0b6fab504b838dda7a454ab8443fc76ebd987c21ecc635adc474bd81aa18110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b6fab504b838dda7a454ab8443fc76ebd987c21ecc635adc474bd81aa18110->enter($__internal_a0b6fab504b838dda7a454ab8443fc76ebd987c21ecc635adc474bd81aa18110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_cd4a062c1208984975727824c9a5b269ff3352d02db2acae033a49d1b81a5e5e->leave($__internal_cd4a062c1208984975727824c9a5b269ff3352d02db2acae033a49d1b81a5e5e_prof);

        
        $__internal_a0b6fab504b838dda7a454ab8443fc76ebd987c21ecc635adc474bd81aa18110->leave($__internal_a0b6fab504b838dda7a454ab8443fc76ebd987c21ecc635adc474bd81aa18110_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
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
", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
