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
        $__internal_23228e7d9b9eba674f81db45b27a1b09ce9da87f5cdbbb808c4a03fc5a7bcc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23228e7d9b9eba674f81db45b27a1b09ce9da87f5cdbbb808c4a03fc5a7bcc43->enter($__internal_23228e7d9b9eba674f81db45b27a1b09ce9da87f5cdbbb808c4a03fc5a7bcc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_86225aea2a771fb4d6ae2dc32802895ff01d52fe5da74a2aea34322596631d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86225aea2a771fb4d6ae2dc32802895ff01d52fe5da74a2aea34322596631d4e->enter($__internal_86225aea2a771fb4d6ae2dc32802895ff01d52fe5da74a2aea34322596631d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_23228e7d9b9eba674f81db45b27a1b09ce9da87f5cdbbb808c4a03fc5a7bcc43->leave($__internal_23228e7d9b9eba674f81db45b27a1b09ce9da87f5cdbbb808c4a03fc5a7bcc43_prof);

        
        $__internal_86225aea2a771fb4d6ae2dc32802895ff01d52fe5da74a2aea34322596631d4e->leave($__internal_86225aea2a771fb4d6ae2dc32802895ff01d52fe5da74a2aea34322596631d4e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2649149739fb48778e03f4ff76260217a60567b223dc6a03735a5ea859638c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2649149739fb48778e03f4ff76260217a60567b223dc6a03735a5ea859638c6->enter($__internal_b2649149739fb48778e03f4ff76260217a60567b223dc6a03735a5ea859638c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d94c020ae1f72339f867fde48f9d35714bfbbb618cda6aa36c646dde5946e40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94c020ae1f72339f867fde48f9d35714bfbbb618cda6aa36c646dde5946e40e->enter($__internal_d94c020ae1f72339f867fde48f9d35714bfbbb618cda6aa36c646dde5946e40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d94c020ae1f72339f867fde48f9d35714bfbbb618cda6aa36c646dde5946e40e->leave($__internal_d94c020ae1f72339f867fde48f9d35714bfbbb618cda6aa36c646dde5946e40e_prof);

        
        $__internal_b2649149739fb48778e03f4ff76260217a60567b223dc6a03735a5ea859638c6->leave($__internal_b2649149739fb48778e03f4ff76260217a60567b223dc6a03735a5ea859638c6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_69a99bfb07326cee5bac0cb8c76855ea9f6ff646058a4b7f0e9a1d7b73050195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a99bfb07326cee5bac0cb8c76855ea9f6ff646058a4b7f0e9a1d7b73050195->enter($__internal_69a99bfb07326cee5bac0cb8c76855ea9f6ff646058a4b7f0e9a1d7b73050195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_67d47a05d8848d4080467ec17917e73c775514361828d5b48994a92d714d2675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d47a05d8848d4080467ec17917e73c775514361828d5b48994a92d714d2675->enter($__internal_67d47a05d8848d4080467ec17917e73c775514361828d5b48994a92d714d2675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_67d47a05d8848d4080467ec17917e73c775514361828d5b48994a92d714d2675->leave($__internal_67d47a05d8848d4080467ec17917e73c775514361828d5b48994a92d714d2675_prof);

        
        $__internal_69a99bfb07326cee5bac0cb8c76855ea9f6ff646058a4b7f0e9a1d7b73050195->leave($__internal_69a99bfb07326cee5bac0cb8c76855ea9f6ff646058a4b7f0e9a1d7b73050195_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cc03260e784d28d8bc5a2a5f74472a5f156a9e015af8ff4cb235f71dbfcde15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc03260e784d28d8bc5a2a5f74472a5f156a9e015af8ff4cb235f71dbfcde15->enter($__internal_3cc03260e784d28d8bc5a2a5f74472a5f156a9e015af8ff4cb235f71dbfcde15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2ae34df67172c9a83f551f2b2037bf624f4d710a11142be9b37826ac23c3b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ae34df67172c9a83f551f2b2037bf624f4d710a11142be9b37826ac23c3b4d->enter($__internal_b2ae34df67172c9a83f551f2b2037bf624f4d710a11142be9b37826ac23c3b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2ae34df67172c9a83f551f2b2037bf624f4d710a11142be9b37826ac23c3b4d->leave($__internal_b2ae34df67172c9a83f551f2b2037bf624f4d710a11142be9b37826ac23c3b4d_prof);

        
        $__internal_3cc03260e784d28d8bc5a2a5f74472a5f156a9e015af8ff4cb235f71dbfcde15->leave($__internal_3cc03260e784d28d8bc5a2a5f74472a5f156a9e015af8ff4cb235f71dbfcde15_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b825a756f0fa9afbea2d48e28e741839698964708a1aefdab21e58d06804a1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b825a756f0fa9afbea2d48e28e741839698964708a1aefdab21e58d06804a1c3->enter($__internal_b825a756f0fa9afbea2d48e28e741839698964708a1aefdab21e58d06804a1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4d2cc5688da88f685f4c447702fed3ff47541ec65e4fe82291e33c3390f58eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2cc5688da88f685f4c447702fed3ff47541ec65e4fe82291e33c3390f58eb0->enter($__internal_4d2cc5688da88f685f4c447702fed3ff47541ec65e4fe82291e33c3390f58eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4d2cc5688da88f685f4c447702fed3ff47541ec65e4fe82291e33c3390f58eb0->leave($__internal_4d2cc5688da88f685f4c447702fed3ff47541ec65e4fe82291e33c3390f58eb0_prof);

        
        $__internal_b825a756f0fa9afbea2d48e28e741839698964708a1aefdab21e58d06804a1c3->leave($__internal_b825a756f0fa9afbea2d48e28e741839698964708a1aefdab21e58d06804a1c3_prof);

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
