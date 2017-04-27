<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f1155fae3f7ce79e8d63ceb17cf70bc06c1a4e82455a76235e918e1472cb0499 extends Twig_Template
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
        $__internal_d103b25a9d2334dfbdad2abe6f1acbb5d43acc010556f22f08daaeaa4b1e7046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d103b25a9d2334dfbdad2abe6f1acbb5d43acc010556f22f08daaeaa4b1e7046->enter($__internal_d103b25a9d2334dfbdad2abe6f1acbb5d43acc010556f22f08daaeaa4b1e7046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_8b85c180c74dad980fc6124408e3115d6bb3d4af10faad11c9aee21e0f3f9e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b85c180c74dad980fc6124408e3115d6bb3d4af10faad11c9aee21e0f3f9e80->enter($__internal_8b85c180c74dad980fc6124408e3115d6bb3d4af10faad11c9aee21e0f3f9e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d103b25a9d2334dfbdad2abe6f1acbb5d43acc010556f22f08daaeaa4b1e7046->leave($__internal_d103b25a9d2334dfbdad2abe6f1acbb5d43acc010556f22f08daaeaa4b1e7046_prof);

        
        $__internal_8b85c180c74dad980fc6124408e3115d6bb3d4af10faad11c9aee21e0f3f9e80->leave($__internal_8b85c180c74dad980fc6124408e3115d6bb3d4af10faad11c9aee21e0f3f9e80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
