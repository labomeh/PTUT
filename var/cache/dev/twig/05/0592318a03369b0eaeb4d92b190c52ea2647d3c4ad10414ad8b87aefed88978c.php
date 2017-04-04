<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_27dfc0357f4a86ef8dd9df905b055f309b691c61cae3b23e342a366881a19fbb extends Twig_Template
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
        $__internal_9b19f88eb6d3ee39e7f93c94f2a74fab3ffbdf7f686ccb812b660cc94c1105ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b19f88eb6d3ee39e7f93c94f2a74fab3ffbdf7f686ccb812b660cc94c1105ec->enter($__internal_9b19f88eb6d3ee39e7f93c94f2a74fab3ffbdf7f686ccb812b660cc94c1105ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_495b05217a2120c487cbb2a18a46ca39eb8cce6804c2472654599dc124b8b3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495b05217a2120c487cbb2a18a46ca39eb8cce6804c2472654599dc124b8b3d6->enter($__internal_495b05217a2120c487cbb2a18a46ca39eb8cce6804c2472654599dc124b8b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_9b19f88eb6d3ee39e7f93c94f2a74fab3ffbdf7f686ccb812b660cc94c1105ec->leave($__internal_9b19f88eb6d3ee39e7f93c94f2a74fab3ffbdf7f686ccb812b660cc94c1105ec_prof);

        
        $__internal_495b05217a2120c487cbb2a18a46ca39eb8cce6804c2472654599dc124b8b3d6->leave($__internal_495b05217a2120c487cbb2a18a46ca39eb8cce6804c2472654599dc124b8b3d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
