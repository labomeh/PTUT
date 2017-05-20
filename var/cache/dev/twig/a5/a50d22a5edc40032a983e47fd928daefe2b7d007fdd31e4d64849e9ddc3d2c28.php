<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_1c0f35855be11553e0fe22297f1b4fdcfb9a842cb78203f718b41a78ddb29b92 extends Twig_Template
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
        $__internal_6edd76b37f7d1d140de0e4bf1fb04e12d627de6af80a6eda38c8cbd7acd66597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edd76b37f7d1d140de0e4bf1fb04e12d627de6af80a6eda38c8cbd7acd66597->enter($__internal_6edd76b37f7d1d140de0e4bf1fb04e12d627de6af80a6eda38c8cbd7acd66597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_5fe2a433407c8c5dafd9dc7667fdf4ace10577436af4ff508913a58365bf2ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe2a433407c8c5dafd9dc7667fdf4ace10577436af4ff508913a58365bf2ba3->enter($__internal_5fe2a433407c8c5dafd9dc7667fdf4ace10577436af4ff508913a58365bf2ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_6edd76b37f7d1d140de0e4bf1fb04e12d627de6af80a6eda38c8cbd7acd66597->leave($__internal_6edd76b37f7d1d140de0e4bf1fb04e12d627de6af80a6eda38c8cbd7acd66597_prof);

        
        $__internal_5fe2a433407c8c5dafd9dc7667fdf4ace10577436af4ff508913a58365bf2ba3->leave($__internal_5fe2a433407c8c5dafd9dc7667fdf4ace10577436af4ff508913a58365bf2ba3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
