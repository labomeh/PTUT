<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c443dfc8997382417f00cd583f23c5c6b43695ff6845be3f77a69dda8f0fd765 extends Twig_Template
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
        $__internal_75a0eb78b16a1c6a2eae8ff1ddd0bf771a7a42d3571fd071825c053c73151231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a0eb78b16a1c6a2eae8ff1ddd0bf771a7a42d3571fd071825c053c73151231->enter($__internal_75a0eb78b16a1c6a2eae8ff1ddd0bf771a7a42d3571fd071825c053c73151231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_71f13beb1229b25085b1b94e8ea48e091038153bd882072dae1c1d79b5a4f90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f13beb1229b25085b1b94e8ea48e091038153bd882072dae1c1d79b5a4f90f->enter($__internal_71f13beb1229b25085b1b94e8ea48e091038153bd882072dae1c1d79b5a4f90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_75a0eb78b16a1c6a2eae8ff1ddd0bf771a7a42d3571fd071825c053c73151231->leave($__internal_75a0eb78b16a1c6a2eae8ff1ddd0bf771a7a42d3571fd071825c053c73151231_prof);

        
        $__internal_71f13beb1229b25085b1b94e8ea48e091038153bd882072dae1c1d79b5a4f90f->leave($__internal_71f13beb1229b25085b1b94e8ea48e091038153bd882072dae1c1d79b5a4f90f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
