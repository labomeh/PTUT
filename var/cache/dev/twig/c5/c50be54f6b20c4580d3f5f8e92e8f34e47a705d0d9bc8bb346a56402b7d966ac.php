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
        $__internal_83034e508a758a946c7e074fdd2dc66bbac2c430dc7d1340e15cc6ded6de389f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83034e508a758a946c7e074fdd2dc66bbac2c430dc7d1340e15cc6ded6de389f->enter($__internal_83034e508a758a946c7e074fdd2dc66bbac2c430dc7d1340e15cc6ded6de389f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_ca446d064483941d176024898ee4462a933636f56ae7b336134f8d7901dab7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca446d064483941d176024898ee4462a933636f56ae7b336134f8d7901dab7a5->enter($__internal_ca446d064483941d176024898ee4462a933636f56ae7b336134f8d7901dab7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_83034e508a758a946c7e074fdd2dc66bbac2c430dc7d1340e15cc6ded6de389f->leave($__internal_83034e508a758a946c7e074fdd2dc66bbac2c430dc7d1340e15cc6ded6de389f_prof);

        
        $__internal_ca446d064483941d176024898ee4462a933636f56ae7b336134f8d7901dab7a5->leave($__internal_ca446d064483941d176024898ee4462a933636f56ae7b336134f8d7901dab7a5_prof);

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
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
