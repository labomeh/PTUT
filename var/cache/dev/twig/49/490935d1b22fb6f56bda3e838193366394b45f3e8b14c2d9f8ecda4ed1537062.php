<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8bd0d709545c2e0eff3699e9dee149826229f8811ac78dddb18b7dfce31ebdb2 extends Twig_Template
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
        $__internal_583678b854688d2fa9ec4a0cbba03e6369333aabb8a194d9f6f8f3388d6bb67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583678b854688d2fa9ec4a0cbba03e6369333aabb8a194d9f6f8f3388d6bb67e->enter($__internal_583678b854688d2fa9ec4a0cbba03e6369333aabb8a194d9f6f8f3388d6bb67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_2387e22c0e0f89f954ce0fdc274bc5661ee3fb1ec5d716379ffd0e49f3487100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2387e22c0e0f89f954ce0fdc274bc5661ee3fb1ec5d716379ffd0e49f3487100->enter($__internal_2387e22c0e0f89f954ce0fdc274bc5661ee3fb1ec5d716379ffd0e49f3487100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_583678b854688d2fa9ec4a0cbba03e6369333aabb8a194d9f6f8f3388d6bb67e->leave($__internal_583678b854688d2fa9ec4a0cbba03e6369333aabb8a194d9f6f8f3388d6bb67e_prof);

        
        $__internal_2387e22c0e0f89f954ce0fdc274bc5661ee3fb1ec5d716379ffd0e49f3487100->leave($__internal_2387e22c0e0f89f954ce0fdc274bc5661ee3fb1ec5d716379ffd0e49f3487100_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
