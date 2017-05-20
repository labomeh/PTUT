<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0e6c94996293795a39cf37d4f4f9f7cd6f0f4480a01afcf77fa000d801671c33 extends Twig_Template
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
        $__internal_91ea19279069bac8e8f371be3519a6d872777c7134a8a23e6dfa0b0d0a780627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91ea19279069bac8e8f371be3519a6d872777c7134a8a23e6dfa0b0d0a780627->enter($__internal_91ea19279069bac8e8f371be3519a6d872777c7134a8a23e6dfa0b0d0a780627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_d2307c06e68f6285633ebb03f71d0222c32d0ea7339881c3e653591ead5754be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2307c06e68f6285633ebb03f71d0222c32d0ea7339881c3e653591ead5754be->enter($__internal_d2307c06e68f6285633ebb03f71d0222c32d0ea7339881c3e653591ead5754be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_91ea19279069bac8e8f371be3519a6d872777c7134a8a23e6dfa0b0d0a780627->leave($__internal_91ea19279069bac8e8f371be3519a6d872777c7134a8a23e6dfa0b0d0a780627_prof);

        
        $__internal_d2307c06e68f6285633ebb03f71d0222c32d0ea7339881c3e653591ead5754be->leave($__internal_d2307c06e68f6285633ebb03f71d0222c32d0ea7339881c3e653591ead5754be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
