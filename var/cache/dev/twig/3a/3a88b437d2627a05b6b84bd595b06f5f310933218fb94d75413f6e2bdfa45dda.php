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
        $__internal_26d9517758012a33c8abdf5d71f979a56b277b59ca1a3035cc7881d551585029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d9517758012a33c8abdf5d71f979a56b277b59ca1a3035cc7881d551585029->enter($__internal_26d9517758012a33c8abdf5d71f979a56b277b59ca1a3035cc7881d551585029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_005fb0c1355ac79e53a797b5d726838d9d04d6e191e4250dc3080d265e282bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005fb0c1355ac79e53a797b5d726838d9d04d6e191e4250dc3080d265e282bbc->enter($__internal_005fb0c1355ac79e53a797b5d726838d9d04d6e191e4250dc3080d265e282bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_26d9517758012a33c8abdf5d71f979a56b277b59ca1a3035cc7881d551585029->leave($__internal_26d9517758012a33c8abdf5d71f979a56b277b59ca1a3035cc7881d551585029_prof);

        
        $__internal_005fb0c1355ac79e53a797b5d726838d9d04d6e191e4250dc3080d265e282bbc->leave($__internal_005fb0c1355ac79e53a797b5d726838d9d04d6e191e4250dc3080d265e282bbc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_766651d89037603e9db899bf482f73d4a2a7ce42ad43a57c681fb71c92c741cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766651d89037603e9db899bf482f73d4a2a7ce42ad43a57c681fb71c92c741cf->enter($__internal_766651d89037603e9db899bf482f73d4a2a7ce42ad43a57c681fb71c92c741cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5fcc1650bd341b62e1c3848fb12c6fbe60a678be8dd72d1ca532fe80aa7754f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcc1650bd341b62e1c3848fb12c6fbe60a678be8dd72d1ca532fe80aa7754f7->enter($__internal_5fcc1650bd341b62e1c3848fb12c6fbe60a678be8dd72d1ca532fe80aa7754f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5fcc1650bd341b62e1c3848fb12c6fbe60a678be8dd72d1ca532fe80aa7754f7->leave($__internal_5fcc1650bd341b62e1c3848fb12c6fbe60a678be8dd72d1ca532fe80aa7754f7_prof);

        
        $__internal_766651d89037603e9db899bf482f73d4a2a7ce42ad43a57c681fb71c92c741cf->leave($__internal_766651d89037603e9db899bf482f73d4a2a7ce42ad43a57c681fb71c92c741cf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a6ef446ec33ee581537c5207a768968bb3dac3a684e16d22be281c65c582925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6ef446ec33ee581537c5207a768968bb3dac3a684e16d22be281c65c582925->enter($__internal_7a6ef446ec33ee581537c5207a768968bb3dac3a684e16d22be281c65c582925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5c4e9ea2066ab0b09ee6d902a0dcf39de3d444da6142743cf28a7c8cd6d3d582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4e9ea2066ab0b09ee6d902a0dcf39de3d444da6142743cf28a7c8cd6d3d582->enter($__internal_5c4e9ea2066ab0b09ee6d902a0dcf39de3d444da6142743cf28a7c8cd6d3d582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5c4e9ea2066ab0b09ee6d902a0dcf39de3d444da6142743cf28a7c8cd6d3d582->leave($__internal_5c4e9ea2066ab0b09ee6d902a0dcf39de3d444da6142743cf28a7c8cd6d3d582_prof);

        
        $__internal_7a6ef446ec33ee581537c5207a768968bb3dac3a684e16d22be281c65c582925->leave($__internal_7a6ef446ec33ee581537c5207a768968bb3dac3a684e16d22be281c65c582925_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec5394be19ce01398f0b8ead530c7cad08461ca0a4af94371c701ca9b74624e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5394be19ce01398f0b8ead530c7cad08461ca0a4af94371c701ca9b74624e2->enter($__internal_ec5394be19ce01398f0b8ead530c7cad08461ca0a4af94371c701ca9b74624e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d243fa0774fd5bc40d1265ac61929b1844bf5eed6acba6ad127d220ab3c53bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d243fa0774fd5bc40d1265ac61929b1844bf5eed6acba6ad127d220ab3c53bf4->enter($__internal_d243fa0774fd5bc40d1265ac61929b1844bf5eed6acba6ad127d220ab3c53bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d243fa0774fd5bc40d1265ac61929b1844bf5eed6acba6ad127d220ab3c53bf4->leave($__internal_d243fa0774fd5bc40d1265ac61929b1844bf5eed6acba6ad127d220ab3c53bf4_prof);

        
        $__internal_ec5394be19ce01398f0b8ead530c7cad08461ca0a4af94371c701ca9b74624e2->leave($__internal_ec5394be19ce01398f0b8ead530c7cad08461ca0a4af94371c701ca9b74624e2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e37d11519edf6c605e6ccbcb71969fb693c76a8229629116684b2516af34854b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37d11519edf6c605e6ccbcb71969fb693c76a8229629116684b2516af34854b->enter($__internal_e37d11519edf6c605e6ccbcb71969fb693c76a8229629116684b2516af34854b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0cf7708d8b9e79daa201ab77a23213b97acdfa69d298a84defa2aa0e6ed25da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf7708d8b9e79daa201ab77a23213b97acdfa69d298a84defa2aa0e6ed25da4->enter($__internal_0cf7708d8b9e79daa201ab77a23213b97acdfa69d298a84defa2aa0e6ed25da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0cf7708d8b9e79daa201ab77a23213b97acdfa69d298a84defa2aa0e6ed25da4->leave($__internal_0cf7708d8b9e79daa201ab77a23213b97acdfa69d298a84defa2aa0e6ed25da4_prof);

        
        $__internal_e37d11519edf6c605e6ccbcb71969fb693c76a8229629116684b2516af34854b->leave($__internal_e37d11519edf6c605e6ccbcb71969fb693c76a8229629116684b2516af34854b_prof);

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
