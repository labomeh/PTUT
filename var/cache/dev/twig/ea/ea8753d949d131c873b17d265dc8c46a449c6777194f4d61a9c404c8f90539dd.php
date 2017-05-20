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
        $__internal_3a00f6a884ea0556c63dd0ea048164620ea80bb1bbbb9a97b1ec86c82b32fb42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a00f6a884ea0556c63dd0ea048164620ea80bb1bbbb9a97b1ec86c82b32fb42->enter($__internal_3a00f6a884ea0556c63dd0ea048164620ea80bb1bbbb9a97b1ec86c82b32fb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b8ef4013517481be9735ff691a7fa216321a0198d9582334a49aa9dad20e8e84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ef4013517481be9735ff691a7fa216321a0198d9582334a49aa9dad20e8e84->enter($__internal_b8ef4013517481be9735ff691a7fa216321a0198d9582334a49aa9dad20e8e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_3a00f6a884ea0556c63dd0ea048164620ea80bb1bbbb9a97b1ec86c82b32fb42->leave($__internal_3a00f6a884ea0556c63dd0ea048164620ea80bb1bbbb9a97b1ec86c82b32fb42_prof);

        
        $__internal_b8ef4013517481be9735ff691a7fa216321a0198d9582334a49aa9dad20e8e84->leave($__internal_b8ef4013517481be9735ff691a7fa216321a0198d9582334a49aa9dad20e8e84_prof);

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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
