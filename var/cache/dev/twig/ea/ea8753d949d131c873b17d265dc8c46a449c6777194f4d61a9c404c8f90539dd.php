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
        $__internal_bf1a60fadfbf62da5ba64302fb965705c8bfe19e25774c5921f78b23df5465bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1a60fadfbf62da5ba64302fb965705c8bfe19e25774c5921f78b23df5465bb->enter($__internal_bf1a60fadfbf62da5ba64302fb965705c8bfe19e25774c5921f78b23df5465bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_dd1878a2afec4d75599afc21463246e3e21bb48c7ff02404e668baaa59438cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1878a2afec4d75599afc21463246e3e21bb48c7ff02404e668baaa59438cdd->enter($__internal_dd1878a2afec4d75599afc21463246e3e21bb48c7ff02404e668baaa59438cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_bf1a60fadfbf62da5ba64302fb965705c8bfe19e25774c5921f78b23df5465bb->leave($__internal_bf1a60fadfbf62da5ba64302fb965705c8bfe19e25774c5921f78b23df5465bb_prof);

        
        $__internal_dd1878a2afec4d75599afc21463246e3e21bb48c7ff02404e668baaa59438cdd->leave($__internal_dd1878a2afec4d75599afc21463246e3e21bb48c7ff02404e668baaa59438cdd_prof);

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
