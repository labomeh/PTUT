<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f0f06e433ec143ef21bc214e9c967e0f4bb2fd3dc910a86dec11f21110be4dad extends Twig_Template
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
        $__internal_649bfb33bf41aaf19b7549070b04f48bc9586ba0e309738aad91bbd57fca1414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649bfb33bf41aaf19b7549070b04f48bc9586ba0e309738aad91bbd57fca1414->enter($__internal_649bfb33bf41aaf19b7549070b04f48bc9586ba0e309738aad91bbd57fca1414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1081982f269b02d76fa0463eea419f3758d4fa9477eab5775c4fd2ce6bf5a2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1081982f269b02d76fa0463eea419f3758d4fa9477eab5775c4fd2ce6bf5a2d0->enter($__internal_1081982f269b02d76fa0463eea419f3758d4fa9477eab5775c4fd2ce6bf5a2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_649bfb33bf41aaf19b7549070b04f48bc9586ba0e309738aad91bbd57fca1414->leave($__internal_649bfb33bf41aaf19b7549070b04f48bc9586ba0e309738aad91bbd57fca1414_prof);

        
        $__internal_1081982f269b02d76fa0463eea419f3758d4fa9477eab5775c4fd2ce6bf5a2d0->leave($__internal_1081982f269b02d76fa0463eea419f3758d4fa9477eab5775c4fd2ce6bf5a2d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
