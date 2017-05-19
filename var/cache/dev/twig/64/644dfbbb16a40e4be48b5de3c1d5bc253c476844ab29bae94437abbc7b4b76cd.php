<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9308a8ccba52188e80c554863505af1a2dee7de0f104544430be61cf936a5a28 extends Twig_Template
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
        $__internal_cc6cb256f79210c236483855b7aca0fea05d4b1dd0fbf27b786b3b1a6a4dc507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6cb256f79210c236483855b7aca0fea05d4b1dd0fbf27b786b3b1a6a4dc507->enter($__internal_cc6cb256f79210c236483855b7aca0fea05d4b1dd0fbf27b786b3b1a6a4dc507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_327ec0ca02a8c9dfd58ea702e96863761decc1cfd9630ecb17d64a108e850f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327ec0ca02a8c9dfd58ea702e96863761decc1cfd9630ecb17d64a108e850f59->enter($__internal_327ec0ca02a8c9dfd58ea702e96863761decc1cfd9630ecb17d64a108e850f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cc6cb256f79210c236483855b7aca0fea05d4b1dd0fbf27b786b3b1a6a4dc507->leave($__internal_cc6cb256f79210c236483855b7aca0fea05d4b1dd0fbf27b786b3b1a6a4dc507_prof);

        
        $__internal_327ec0ca02a8c9dfd58ea702e96863761decc1cfd9630ecb17d64a108e850f59->leave($__internal_327ec0ca02a8c9dfd58ea702e96863761decc1cfd9630ecb17d64a108e850f59_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
