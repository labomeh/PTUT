<?php

/* ::base.html.twig */
class __TwigTemplate_aa068f60139572ba38c888cd19d2a7b936fa05b8d69f1ddd0141087ead89194d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_183cc57194bc8d026a1d5d2ee52e641fb6f43b44082d11ae7db9ec74397da4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_183cc57194bc8d026a1d5d2ee52e641fb6f43b44082d11ae7db9ec74397da4ff->enter($__internal_183cc57194bc8d026a1d5d2ee52e641fb6f43b44082d11ae7db9ec74397da4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b5ec5baa0b27ef2ac62ffeb7e929d778ddb84b356a9ac53ca1844abc70d57d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ec5baa0b27ef2ac62ffeb7e929d778ddb84b356a9ac53ca1844abc70d57d02->enter($__internal_b5ec5baa0b27ef2ac62ffeb7e929d778ddb84b356a9ac53ca1844abc70d57d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_183cc57194bc8d026a1d5d2ee52e641fb6f43b44082d11ae7db9ec74397da4ff->leave($__internal_183cc57194bc8d026a1d5d2ee52e641fb6f43b44082d11ae7db9ec74397da4ff_prof);

        
        $__internal_b5ec5baa0b27ef2ac62ffeb7e929d778ddb84b356a9ac53ca1844abc70d57d02->leave($__internal_b5ec5baa0b27ef2ac62ffeb7e929d778ddb84b356a9ac53ca1844abc70d57d02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d022e1df68a0ca0dd3b3f8518f9ad8b76d66c19544087f5745bf0622c183f650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d022e1df68a0ca0dd3b3f8518f9ad8b76d66c19544087f5745bf0622c183f650->enter($__internal_d022e1df68a0ca0dd3b3f8518f9ad8b76d66c19544087f5745bf0622c183f650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1189cdf0f52fbcc0da2d1949913266ae7acceaf1c9c479be8e64fe415249cf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1189cdf0f52fbcc0da2d1949913266ae7acceaf1c9c479be8e64fe415249cf36->enter($__internal_1189cdf0f52fbcc0da2d1949913266ae7acceaf1c9c479be8e64fe415249cf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1189cdf0f52fbcc0da2d1949913266ae7acceaf1c9c479be8e64fe415249cf36->leave($__internal_1189cdf0f52fbcc0da2d1949913266ae7acceaf1c9c479be8e64fe415249cf36_prof);

        
        $__internal_d022e1df68a0ca0dd3b3f8518f9ad8b76d66c19544087f5745bf0622c183f650->leave($__internal_d022e1df68a0ca0dd3b3f8518f9ad8b76d66c19544087f5745bf0622c183f650_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_357409bbccfb772f21650588c444d6de5ea1abbc0e77479f87544f60aa891b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357409bbccfb772f21650588c444d6de5ea1abbc0e77479f87544f60aa891b8d->enter($__internal_357409bbccfb772f21650588c444d6de5ea1abbc0e77479f87544f60aa891b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9f9e7f76d2713a541f4c28c79ae73d0a1663e5d67d59cc1cb7ac125def2bfd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f9e7f76d2713a541f4c28c79ae73d0a1663e5d67d59cc1cb7ac125def2bfd7f->enter($__internal_9f9e7f76d2713a541f4c28c79ae73d0a1663e5d67d59cc1cb7ac125def2bfd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9f9e7f76d2713a541f4c28c79ae73d0a1663e5d67d59cc1cb7ac125def2bfd7f->leave($__internal_9f9e7f76d2713a541f4c28c79ae73d0a1663e5d67d59cc1cb7ac125def2bfd7f_prof);

        
        $__internal_357409bbccfb772f21650588c444d6de5ea1abbc0e77479f87544f60aa891b8d->leave($__internal_357409bbccfb772f21650588c444d6de5ea1abbc0e77479f87544f60aa891b8d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f8bca1a8b6a0208d1a13c68f160719906350458f40168c2b7fdd56bebfd5703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8bca1a8b6a0208d1a13c68f160719906350458f40168c2b7fdd56bebfd5703->enter($__internal_8f8bca1a8b6a0208d1a13c68f160719906350458f40168c2b7fdd56bebfd5703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0ef556bc6f5cadaef468e2bbdc2c8dc681c6be2917db03826a99b9adf879bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ef556bc6f5cadaef468e2bbdc2c8dc681c6be2917db03826a99b9adf879bb0->enter($__internal_f0ef556bc6f5cadaef468e2bbdc2c8dc681c6be2917db03826a99b9adf879bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0ef556bc6f5cadaef468e2bbdc2c8dc681c6be2917db03826a99b9adf879bb0->leave($__internal_f0ef556bc6f5cadaef468e2bbdc2c8dc681c6be2917db03826a99b9adf879bb0_prof);

        
        $__internal_8f8bca1a8b6a0208d1a13c68f160719906350458f40168c2b7fdd56bebfd5703->leave($__internal_8f8bca1a8b6a0208d1a13c68f160719906350458f40168c2b7fdd56bebfd5703_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b51858d1a69cfdcf78cd15afb6004bf61305848a1a70603abb6afb19b0e5b14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51858d1a69cfdcf78cd15afb6004bf61305848a1a70603abb6afb19b0e5b14b->enter($__internal_b51858d1a69cfdcf78cd15afb6004bf61305848a1a70603abb6afb19b0e5b14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3f5967880e1b44189941852e42710705a93eec16ec70d5cc405653de6dca6b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5967880e1b44189941852e42710705a93eec16ec70d5cc405653de6dca6b5d->enter($__internal_3f5967880e1b44189941852e42710705a93eec16ec70d5cc405653de6dca6b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f5967880e1b44189941852e42710705a93eec16ec70d5cc405653de6dca6b5d->leave($__internal_3f5967880e1b44189941852e42710705a93eec16ec70d5cc405653de6dca6b5d_prof);

        
        $__internal_b51858d1a69cfdcf78cd15afb6004bf61305848a1a70603abb6afb19b0e5b14b->leave($__internal_b51858d1a69cfdcf78cd15afb6004bf61305848a1a70603abb6afb19b0e5b14b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp64\\www\\PTUT\\app/Resources\\views/base.html.twig");
    }
}
