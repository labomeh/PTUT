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
        $__internal_5dbc4f2b2a49ef330d1e1671e56c623e3dc75478a1ed7194a1d50a6239b1da8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dbc4f2b2a49ef330d1e1671e56c623e3dc75478a1ed7194a1d50a6239b1da8b->enter($__internal_5dbc4f2b2a49ef330d1e1671e56c623e3dc75478a1ed7194a1d50a6239b1da8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4ebb00533cd3b3d7ee43f6c00d09c43e74e978359560ba6f3f4b2504e580c4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ebb00533cd3b3d7ee43f6c00d09c43e74e978359560ba6f3f4b2504e580c4b0->enter($__internal_4ebb00533cd3b3d7ee43f6c00d09c43e74e978359560ba6f3f4b2504e580c4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5dbc4f2b2a49ef330d1e1671e56c623e3dc75478a1ed7194a1d50a6239b1da8b->leave($__internal_5dbc4f2b2a49ef330d1e1671e56c623e3dc75478a1ed7194a1d50a6239b1da8b_prof);

        
        $__internal_4ebb00533cd3b3d7ee43f6c00d09c43e74e978359560ba6f3f4b2504e580c4b0->leave($__internal_4ebb00533cd3b3d7ee43f6c00d09c43e74e978359560ba6f3f4b2504e580c4b0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_673659da485ae536cb51e5c20457fe4f3056071e0654511c41098f77b743f2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_673659da485ae536cb51e5c20457fe4f3056071e0654511c41098f77b743f2d8->enter($__internal_673659da485ae536cb51e5c20457fe4f3056071e0654511c41098f77b743f2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40531b31eef9571f4959ad641767d941be2bd3c3e299c44ebbbf010312647dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40531b31eef9571f4959ad641767d941be2bd3c3e299c44ebbbf010312647dd2->enter($__internal_40531b31eef9571f4959ad641767d941be2bd3c3e299c44ebbbf010312647dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_40531b31eef9571f4959ad641767d941be2bd3c3e299c44ebbbf010312647dd2->leave($__internal_40531b31eef9571f4959ad641767d941be2bd3c3e299c44ebbbf010312647dd2_prof);

        
        $__internal_673659da485ae536cb51e5c20457fe4f3056071e0654511c41098f77b743f2d8->leave($__internal_673659da485ae536cb51e5c20457fe4f3056071e0654511c41098f77b743f2d8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_611687927d2be7b6b059dab36840ddc9255bad69aaaf430c83ad47054d8d6272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611687927d2be7b6b059dab36840ddc9255bad69aaaf430c83ad47054d8d6272->enter($__internal_611687927d2be7b6b059dab36840ddc9255bad69aaaf430c83ad47054d8d6272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d229c0c616db3d3b8eb1ae724845b2053d8af0e80d505de3d1352d35e4eb3c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d229c0c616db3d3b8eb1ae724845b2053d8af0e80d505de3d1352d35e4eb3c8a->enter($__internal_d229c0c616db3d3b8eb1ae724845b2053d8af0e80d505de3d1352d35e4eb3c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d229c0c616db3d3b8eb1ae724845b2053d8af0e80d505de3d1352d35e4eb3c8a->leave($__internal_d229c0c616db3d3b8eb1ae724845b2053d8af0e80d505de3d1352d35e4eb3c8a_prof);

        
        $__internal_611687927d2be7b6b059dab36840ddc9255bad69aaaf430c83ad47054d8d6272->leave($__internal_611687927d2be7b6b059dab36840ddc9255bad69aaaf430c83ad47054d8d6272_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6faf6eb000144670b42c84d29aecac915d1b91300f51757ac36e92e172096d05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6faf6eb000144670b42c84d29aecac915d1b91300f51757ac36e92e172096d05->enter($__internal_6faf6eb000144670b42c84d29aecac915d1b91300f51757ac36e92e172096d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28ce4824c50eb81522c6daabb75324169adb8b06019aa7176d2f0b5071a84b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ce4824c50eb81522c6daabb75324169adb8b06019aa7176d2f0b5071a84b2c->enter($__internal_28ce4824c50eb81522c6daabb75324169adb8b06019aa7176d2f0b5071a84b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_28ce4824c50eb81522c6daabb75324169adb8b06019aa7176d2f0b5071a84b2c->leave($__internal_28ce4824c50eb81522c6daabb75324169adb8b06019aa7176d2f0b5071a84b2c_prof);

        
        $__internal_6faf6eb000144670b42c84d29aecac915d1b91300f51757ac36e92e172096d05->leave($__internal_6faf6eb000144670b42c84d29aecac915d1b91300f51757ac36e92e172096d05_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d3425e301a7d0a6ef7053e487651b61530adb2f733885c9dd31e821b89601a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3425e301a7d0a6ef7053e487651b61530adb2f733885c9dd31e821b89601a40->enter($__internal_d3425e301a7d0a6ef7053e487651b61530adb2f733885c9dd31e821b89601a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c5a542d0114de3022cfe01399ea920cb792ca44de4d2daa81578bc685c81a6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a542d0114de3022cfe01399ea920cb792ca44de4d2daa81578bc685c81a6c0->enter($__internal_c5a542d0114de3022cfe01399ea920cb792ca44de4d2daa81578bc685c81a6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c5a542d0114de3022cfe01399ea920cb792ca44de4d2daa81578bc685c81a6c0->leave($__internal_c5a542d0114de3022cfe01399ea920cb792ca44de4d2daa81578bc685c81a6c0_prof);

        
        $__internal_d3425e301a7d0a6ef7053e487651b61530adb2f733885c9dd31e821b89601a40->leave($__internal_d3425e301a7d0a6ef7053e487651b61530adb2f733885c9dd31e821b89601a40_prof);

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
", "base.html.twig", "C:\\wamp64\\www\\ptut\\app\\Resources\\views\\base.html.twig");
    }
}
