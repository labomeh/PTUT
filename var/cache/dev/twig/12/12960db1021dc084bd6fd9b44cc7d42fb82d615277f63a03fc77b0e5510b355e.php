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
        $__internal_538af27032ba464c54a7be3e101a48ae63ab0c34a0f0344b46d8ca43a8eb8d59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538af27032ba464c54a7be3e101a48ae63ab0c34a0f0344b46d8ca43a8eb8d59->enter($__internal_538af27032ba464c54a7be3e101a48ae63ab0c34a0f0344b46d8ca43a8eb8d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_d9dff17963776dbfc7a2edb8154104ec88f6c3a275a1b2b399f66d23d232d317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dff17963776dbfc7a2edb8154104ec88f6c3a275a1b2b399f66d23d232d317->enter($__internal_d9dff17963776dbfc7a2edb8154104ec88f6c3a275a1b2b399f66d23d232d317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_538af27032ba464c54a7be3e101a48ae63ab0c34a0f0344b46d8ca43a8eb8d59->leave($__internal_538af27032ba464c54a7be3e101a48ae63ab0c34a0f0344b46d8ca43a8eb8d59_prof);

        
        $__internal_d9dff17963776dbfc7a2edb8154104ec88f6c3a275a1b2b399f66d23d232d317->leave($__internal_d9dff17963776dbfc7a2edb8154104ec88f6c3a275a1b2b399f66d23d232d317_prof);

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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
