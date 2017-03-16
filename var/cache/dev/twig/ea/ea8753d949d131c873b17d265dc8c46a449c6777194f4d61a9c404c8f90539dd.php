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
        $__internal_157957b52ac3b429f7591047e2e83239ab8e1b1885cf28aaf3ad1f4b74b5b6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157957b52ac3b429f7591047e2e83239ab8e1b1885cf28aaf3ad1f4b74b5b6b8->enter($__internal_157957b52ac3b429f7591047e2e83239ab8e1b1885cf28aaf3ad1f4b74b5b6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b0288e6a54324032f3b15d1fa22d7cf6864e119f5ba64684003fbd98880152e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0288e6a54324032f3b15d1fa22d7cf6864e119f5ba64684003fbd98880152e8->enter($__internal_b0288e6a54324032f3b15d1fa22d7cf6864e119f5ba64684003fbd98880152e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_157957b52ac3b429f7591047e2e83239ab8e1b1885cf28aaf3ad1f4b74b5b6b8->leave($__internal_157957b52ac3b429f7591047e2e83239ab8e1b1885cf28aaf3ad1f4b74b5b6b8_prof);

        
        $__internal_b0288e6a54324032f3b15d1fa22d7cf6864e119f5ba64684003fbd98880152e8->leave($__internal_b0288e6a54324032f3b15d1fa22d7cf6864e119f5ba64684003fbd98880152e8_prof);

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
