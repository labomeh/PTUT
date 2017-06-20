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
        $__internal_23efac6bf16bb51db5f0813771aa7afce779d054e269da62984c700dc4463630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23efac6bf16bb51db5f0813771aa7afce779d054e269da62984c700dc4463630->enter($__internal_23efac6bf16bb51db5f0813771aa7afce779d054e269da62984c700dc4463630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1ac04fe52bc0cd69612fbf498cdb2719ba1fa11fc37fb1a1e6bf98f75662987a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac04fe52bc0cd69612fbf498cdb2719ba1fa11fc37fb1a1e6bf98f75662987a->enter($__internal_1ac04fe52bc0cd69612fbf498cdb2719ba1fa11fc37fb1a1e6bf98f75662987a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_23efac6bf16bb51db5f0813771aa7afce779d054e269da62984c700dc4463630->leave($__internal_23efac6bf16bb51db5f0813771aa7afce779d054e269da62984c700dc4463630_prof);

        
        $__internal_1ac04fe52bc0cd69612fbf498cdb2719ba1fa11fc37fb1a1e6bf98f75662987a->leave($__internal_1ac04fe52bc0cd69612fbf498cdb2719ba1fa11fc37fb1a1e6bf98f75662987a_prof);

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
