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
        $__internal_ee328d51bbc5b8fb45a71f5e6231c95ab17d7b3dfe3b73d1c24c2a08f10f27fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee328d51bbc5b8fb45a71f5e6231c95ab17d7b3dfe3b73d1c24c2a08f10f27fa->enter($__internal_ee328d51bbc5b8fb45a71f5e6231c95ab17d7b3dfe3b73d1c24c2a08f10f27fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c75b4c4777c356791a7385eed12f72e90a6ed5eb34def3502dfdd91f4478b5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75b4c4777c356791a7385eed12f72e90a6ed5eb34def3502dfdd91f4478b5cc->enter($__internal_c75b4c4777c356791a7385eed12f72e90a6ed5eb34def3502dfdd91f4478b5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_ee328d51bbc5b8fb45a71f5e6231c95ab17d7b3dfe3b73d1c24c2a08f10f27fa->leave($__internal_ee328d51bbc5b8fb45a71f5e6231c95ab17d7b3dfe3b73d1c24c2a08f10f27fa_prof);

        
        $__internal_c75b4c4777c356791a7385eed12f72e90a6ed5eb34def3502dfdd91f4478b5cc->leave($__internal_c75b4c4777c356791a7385eed12f72e90a6ed5eb34def3502dfdd91f4478b5cc_prof);

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
