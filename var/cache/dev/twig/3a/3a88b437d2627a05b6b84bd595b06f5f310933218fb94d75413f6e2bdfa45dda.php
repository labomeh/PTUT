<?php

/* base.html.twig */
class __TwigTemplate_76ecb4b6eab5e517c7c918daf5462c70d04063a7d433480cdc8b6304e972c54f extends Twig_Template
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
        $__internal_bbfff6da71143fb2dae51a19332b7b4af35fd5ae110ca8f4438c10e730beaf38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbfff6da71143fb2dae51a19332b7b4af35fd5ae110ca8f4438c10e730beaf38->enter($__internal_bbfff6da71143fb2dae51a19332b7b4af35fd5ae110ca8f4438c10e730beaf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4a01e6f88e5dd70c57ca632fcf20eff527cce6a2e75d17c128fd7d8314c298ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a01e6f88e5dd70c57ca632fcf20eff527cce6a2e75d17c128fd7d8314c298ec->enter($__internal_4a01e6f88e5dd70c57ca632fcf20eff527cce6a2e75d17c128fd7d8314c298ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bbfff6da71143fb2dae51a19332b7b4af35fd5ae110ca8f4438c10e730beaf38->leave($__internal_bbfff6da71143fb2dae51a19332b7b4af35fd5ae110ca8f4438c10e730beaf38_prof);

        
        $__internal_4a01e6f88e5dd70c57ca632fcf20eff527cce6a2e75d17c128fd7d8314c298ec->leave($__internal_4a01e6f88e5dd70c57ca632fcf20eff527cce6a2e75d17c128fd7d8314c298ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0fa919e52de86d860efc86a4f761f69f9ecdd9909dd760308ecc75b6a7d804d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fa919e52de86d860efc86a4f761f69f9ecdd9909dd760308ecc75b6a7d804d->enter($__internal_d0fa919e52de86d860efc86a4f761f69f9ecdd9909dd760308ecc75b6a7d804d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00bbc8f8d6217501ac0197b6b11063abf6bd7555252a303cd55f02d53d5a2697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bbc8f8d6217501ac0197b6b11063abf6bd7555252a303cd55f02d53d5a2697->enter($__internal_00bbc8f8d6217501ac0197b6b11063abf6bd7555252a303cd55f02d53d5a2697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_00bbc8f8d6217501ac0197b6b11063abf6bd7555252a303cd55f02d53d5a2697->leave($__internal_00bbc8f8d6217501ac0197b6b11063abf6bd7555252a303cd55f02d53d5a2697_prof);

        
        $__internal_d0fa919e52de86d860efc86a4f761f69f9ecdd9909dd760308ecc75b6a7d804d->leave($__internal_d0fa919e52de86d860efc86a4f761f69f9ecdd9909dd760308ecc75b6a7d804d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9e0388f1fa7a4f5953f67b9b780adc4283e84fecfa1dd6624186814e9c7b7800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0388f1fa7a4f5953f67b9b780adc4283e84fecfa1dd6624186814e9c7b7800->enter($__internal_9e0388f1fa7a4f5953f67b9b780adc4283e84fecfa1dd6624186814e9c7b7800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_753384ffd8fdcffc069e885b5b83eb5348c7628405c724c7559f6056954cabc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753384ffd8fdcffc069e885b5b83eb5348c7628405c724c7559f6056954cabc7->enter($__internal_753384ffd8fdcffc069e885b5b83eb5348c7628405c724c7559f6056954cabc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_753384ffd8fdcffc069e885b5b83eb5348c7628405c724c7559f6056954cabc7->leave($__internal_753384ffd8fdcffc069e885b5b83eb5348c7628405c724c7559f6056954cabc7_prof);

        
        $__internal_9e0388f1fa7a4f5953f67b9b780adc4283e84fecfa1dd6624186814e9c7b7800->leave($__internal_9e0388f1fa7a4f5953f67b9b780adc4283e84fecfa1dd6624186814e9c7b7800_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df0f1454d5eb1617c052f7a1b6e70cb93b59d7bfe0a17a93052183e0bedb9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df0f1454d5eb1617c052f7a1b6e70cb93b59d7bfe0a17a93052183e0bedb9b2->enter($__internal_0df0f1454d5eb1617c052f7a1b6e70cb93b59d7bfe0a17a93052183e0bedb9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_379ff12d8d4dbf61ddfcdf7dcc5661ab3c5ab3953661952decc2ef290006f3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379ff12d8d4dbf61ddfcdf7dcc5661ab3c5ab3953661952decc2ef290006f3f2->enter($__internal_379ff12d8d4dbf61ddfcdf7dcc5661ab3c5ab3953661952decc2ef290006f3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_379ff12d8d4dbf61ddfcdf7dcc5661ab3c5ab3953661952decc2ef290006f3f2->leave($__internal_379ff12d8d4dbf61ddfcdf7dcc5661ab3c5ab3953661952decc2ef290006f3f2_prof);

        
        $__internal_0df0f1454d5eb1617c052f7a1b6e70cb93b59d7bfe0a17a93052183e0bedb9b2->leave($__internal_0df0f1454d5eb1617c052f7a1b6e70cb93b59d7bfe0a17a93052183e0bedb9b2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b69e9a85a7faede8440a4eeb71b826e4ee5a7a85de09e7a1ad2016a548529958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69e9a85a7faede8440a4eeb71b826e4ee5a7a85de09e7a1ad2016a548529958->enter($__internal_b69e9a85a7faede8440a4eeb71b826e4ee5a7a85de09e7a1ad2016a548529958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3799111cd72bd17575fbf9818c56dc7999c7916e5037813c8fc89aca42b64aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3799111cd72bd17575fbf9818c56dc7999c7916e5037813c8fc89aca42b64aef->enter($__internal_3799111cd72bd17575fbf9818c56dc7999c7916e5037813c8fc89aca42b64aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3799111cd72bd17575fbf9818c56dc7999c7916e5037813c8fc89aca42b64aef->leave($__internal_3799111cd72bd17575fbf9818c56dc7999c7916e5037813c8fc89aca42b64aef_prof);

        
        $__internal_b69e9a85a7faede8440a4eeb71b826e4ee5a7a85de09e7a1ad2016a548529958->leave($__internal_b69e9a85a7faede8440a4eeb71b826e4ee5a7a85de09e7a1ad2016a548529958_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp64\\www\\PTUT\\app\\Resources\\views\\base.html.twig");
    }
}
