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
        $__internal_28101e06a1e7b155d1a8dffd1e14059b795d79cc13e914b3e1b53456dd5f0c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28101e06a1e7b155d1a8dffd1e14059b795d79cc13e914b3e1b53456dd5f0c00->enter($__internal_28101e06a1e7b155d1a8dffd1e14059b795d79cc13e914b3e1b53456dd5f0c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4ff4eef3c9302ab946456e8306dd986085de16833bc96bfbb38ad7afc706c52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ff4eef3c9302ab946456e8306dd986085de16833bc96bfbb38ad7afc706c52c->enter($__internal_4ff4eef3c9302ab946456e8306dd986085de16833bc96bfbb38ad7afc706c52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_28101e06a1e7b155d1a8dffd1e14059b795d79cc13e914b3e1b53456dd5f0c00->leave($__internal_28101e06a1e7b155d1a8dffd1e14059b795d79cc13e914b3e1b53456dd5f0c00_prof);

        
        $__internal_4ff4eef3c9302ab946456e8306dd986085de16833bc96bfbb38ad7afc706c52c->leave($__internal_4ff4eef3c9302ab946456e8306dd986085de16833bc96bfbb38ad7afc706c52c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a264e6c143f5c8d72bca5034c2120c5df9c2299b9c7710c1cb9674804362afc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a264e6c143f5c8d72bca5034c2120c5df9c2299b9c7710c1cb9674804362afc2->enter($__internal_a264e6c143f5c8d72bca5034c2120c5df9c2299b9c7710c1cb9674804362afc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0d6d4ecc8932e2b28758f0302a5643526315a4fd68aed80a4f9ace5dfeb15dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d6d4ecc8932e2b28758f0302a5643526315a4fd68aed80a4f9ace5dfeb15dc->enter($__internal_b0d6d4ecc8932e2b28758f0302a5643526315a4fd68aed80a4f9ace5dfeb15dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b0d6d4ecc8932e2b28758f0302a5643526315a4fd68aed80a4f9ace5dfeb15dc->leave($__internal_b0d6d4ecc8932e2b28758f0302a5643526315a4fd68aed80a4f9ace5dfeb15dc_prof);

        
        $__internal_a264e6c143f5c8d72bca5034c2120c5df9c2299b9c7710c1cb9674804362afc2->leave($__internal_a264e6c143f5c8d72bca5034c2120c5df9c2299b9c7710c1cb9674804362afc2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a811e919daaaeefe8bd861c2d4ae64926a08cf7bbaff6c152dd2d156faa70be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a811e919daaaeefe8bd861c2d4ae64926a08cf7bbaff6c152dd2d156faa70be->enter($__internal_4a811e919daaaeefe8bd861c2d4ae64926a08cf7bbaff6c152dd2d156faa70be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d3c480c78ea6d8375206649feafd6478baf1189ad356d8298a2047fb152fe74d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c480c78ea6d8375206649feafd6478baf1189ad356d8298a2047fb152fe74d->enter($__internal_d3c480c78ea6d8375206649feafd6478baf1189ad356d8298a2047fb152fe74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d3c480c78ea6d8375206649feafd6478baf1189ad356d8298a2047fb152fe74d->leave($__internal_d3c480c78ea6d8375206649feafd6478baf1189ad356d8298a2047fb152fe74d_prof);

        
        $__internal_4a811e919daaaeefe8bd861c2d4ae64926a08cf7bbaff6c152dd2d156faa70be->leave($__internal_4a811e919daaaeefe8bd861c2d4ae64926a08cf7bbaff6c152dd2d156faa70be_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f249061627408b089ceb6a6c79663a5459c4b289ac0a4e7d65e3e864909d1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f249061627408b089ceb6a6c79663a5459c4b289ac0a4e7d65e3e864909d1a9->enter($__internal_2f249061627408b089ceb6a6c79663a5459c4b289ac0a4e7d65e3e864909d1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_193440dd21af8ce1950cba5c1d9eeef8354fa960961e40dffffb31c500e100ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193440dd21af8ce1950cba5c1d9eeef8354fa960961e40dffffb31c500e100ae->enter($__internal_193440dd21af8ce1950cba5c1d9eeef8354fa960961e40dffffb31c500e100ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_193440dd21af8ce1950cba5c1d9eeef8354fa960961e40dffffb31c500e100ae->leave($__internal_193440dd21af8ce1950cba5c1d9eeef8354fa960961e40dffffb31c500e100ae_prof);

        
        $__internal_2f249061627408b089ceb6a6c79663a5459c4b289ac0a4e7d65e3e864909d1a9->leave($__internal_2f249061627408b089ceb6a6c79663a5459c4b289ac0a4e7d65e3e864909d1a9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7e05fa056ac8758b1bdeb9569a55de11cf927539096199ae16907943df844057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e05fa056ac8758b1bdeb9569a55de11cf927539096199ae16907943df844057->enter($__internal_7e05fa056ac8758b1bdeb9569a55de11cf927539096199ae16907943df844057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c853f3ea9c5f0563e4079c9cd4715479d7fd859b3a265c5f60783dddf550589a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c853f3ea9c5f0563e4079c9cd4715479d7fd859b3a265c5f60783dddf550589a->enter($__internal_c853f3ea9c5f0563e4079c9cd4715479d7fd859b3a265c5f60783dddf550589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c853f3ea9c5f0563e4079c9cd4715479d7fd859b3a265c5f60783dddf550589a->leave($__internal_c853f3ea9c5f0563e4079c9cd4715479d7fd859b3a265c5f60783dddf550589a_prof);

        
        $__internal_7e05fa056ac8758b1bdeb9569a55de11cf927539096199ae16907943df844057->leave($__internal_7e05fa056ac8758b1bdeb9569a55de11cf927539096199ae16907943df844057_prof);

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
