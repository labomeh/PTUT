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
        $__internal_7cef5ca7afd1ebda4a42a3c286a873f46cb0b9cf23bde3ef5e466d522cc109a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cef5ca7afd1ebda4a42a3c286a873f46cb0b9cf23bde3ef5e466d522cc109a3->enter($__internal_7cef5ca7afd1ebda4a42a3c286a873f46cb0b9cf23bde3ef5e466d522cc109a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_71c7ebe61f187d718bc4fef36a99b189b02100646d83334bd54717a7ae676d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c7ebe61f187d718bc4fef36a99b189b02100646d83334bd54717a7ae676d74->enter($__internal_71c7ebe61f187d718bc4fef36a99b189b02100646d83334bd54717a7ae676d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_7cef5ca7afd1ebda4a42a3c286a873f46cb0b9cf23bde3ef5e466d522cc109a3->leave($__internal_7cef5ca7afd1ebda4a42a3c286a873f46cb0b9cf23bde3ef5e466d522cc109a3_prof);

        
        $__internal_71c7ebe61f187d718bc4fef36a99b189b02100646d83334bd54717a7ae676d74->leave($__internal_71c7ebe61f187d718bc4fef36a99b189b02100646d83334bd54717a7ae676d74_prof);

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
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
