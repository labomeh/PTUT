<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_e54ba81b6c17b07d0428a0daedfd35ab467be4baff09be38a39e83aa2f7d3736 extends Twig_Template
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
        $__internal_7f63af5b06ad0a3e41cf6c182d2cdf324e482be6f4b2ce630ed041a11a8d911d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f63af5b06ad0a3e41cf6c182d2cdf324e482be6f4b2ce630ed041a11a8d911d->enter($__internal_7f63af5b06ad0a3e41cf6c182d2cdf324e482be6f4b2ce630ed041a11a8d911d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_c1429933662e69a817ec72d81fd6bffedc02f6e85e68aac1c83fc0cdbb7d6141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1429933662e69a817ec72d81fd6bffedc02f6e85e68aac1c83fc0cdbb7d6141->enter($__internal_c1429933662e69a817ec72d81fd6bffedc02f6e85e68aac1c83fc0cdbb7d6141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7f63af5b06ad0a3e41cf6c182d2cdf324e482be6f4b2ce630ed041a11a8d911d->leave($__internal_7f63af5b06ad0a3e41cf6c182d2cdf324e482be6f4b2ce630ed041a11a8d911d_prof);

        
        $__internal_c1429933662e69a817ec72d81fd6bffedc02f6e85e68aac1c83fc0cdbb7d6141->leave($__internal_c1429933662e69a817ec72d81fd6bffedc02f6e85e68aac1c83fc0cdbb7d6141_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
