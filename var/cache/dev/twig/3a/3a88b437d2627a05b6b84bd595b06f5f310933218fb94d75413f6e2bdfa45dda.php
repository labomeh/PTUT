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
        $__internal_c681f1aca0f62a7feb5aac05288b466f875f1813bcd332b1a0ad777912e49085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c681f1aca0f62a7feb5aac05288b466f875f1813bcd332b1a0ad777912e49085->enter($__internal_c681f1aca0f62a7feb5aac05288b466f875f1813bcd332b1a0ad777912e49085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f3e4be138bfb1e9e404be559b9a32b39c151e52f8edc947d17febbae28caf219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e4be138bfb1e9e404be559b9a32b39c151e52f8edc947d17febbae28caf219->enter($__internal_f3e4be138bfb1e9e404be559b9a32b39c151e52f8edc947d17febbae28caf219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c681f1aca0f62a7feb5aac05288b466f875f1813bcd332b1a0ad777912e49085->leave($__internal_c681f1aca0f62a7feb5aac05288b466f875f1813bcd332b1a0ad777912e49085_prof);

        
        $__internal_f3e4be138bfb1e9e404be559b9a32b39c151e52f8edc947d17febbae28caf219->leave($__internal_f3e4be138bfb1e9e404be559b9a32b39c151e52f8edc947d17febbae28caf219_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d441a314e611fca6dbd0bc1bcd82037f8932a2e9f3ed23948d96d20e1234046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d441a314e611fca6dbd0bc1bcd82037f8932a2e9f3ed23948d96d20e1234046->enter($__internal_5d441a314e611fca6dbd0bc1bcd82037f8932a2e9f3ed23948d96d20e1234046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9e756cc0861aed4b00cbbf11029d445907f148cfc668f1a8cfc7446a500e1463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e756cc0861aed4b00cbbf11029d445907f148cfc668f1a8cfc7446a500e1463->enter($__internal_9e756cc0861aed4b00cbbf11029d445907f148cfc668f1a8cfc7446a500e1463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9e756cc0861aed4b00cbbf11029d445907f148cfc668f1a8cfc7446a500e1463->leave($__internal_9e756cc0861aed4b00cbbf11029d445907f148cfc668f1a8cfc7446a500e1463_prof);

        
        $__internal_5d441a314e611fca6dbd0bc1bcd82037f8932a2e9f3ed23948d96d20e1234046->leave($__internal_5d441a314e611fca6dbd0bc1bcd82037f8932a2e9f3ed23948d96d20e1234046_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db8dc796e26dcfa512f09bde596a5582f695b46051c7a60268ec545d15beb45d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8dc796e26dcfa512f09bde596a5582f695b46051c7a60268ec545d15beb45d->enter($__internal_db8dc796e26dcfa512f09bde596a5582f695b46051c7a60268ec545d15beb45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c72ba49686d0c9ef6ddafd429c29d3a268628d744b4550654bbeb07935012b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72ba49686d0c9ef6ddafd429c29d3a268628d744b4550654bbeb07935012b4d->enter($__internal_c72ba49686d0c9ef6ddafd429c29d3a268628d744b4550654bbeb07935012b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c72ba49686d0c9ef6ddafd429c29d3a268628d744b4550654bbeb07935012b4d->leave($__internal_c72ba49686d0c9ef6ddafd429c29d3a268628d744b4550654bbeb07935012b4d_prof);

        
        $__internal_db8dc796e26dcfa512f09bde596a5582f695b46051c7a60268ec545d15beb45d->leave($__internal_db8dc796e26dcfa512f09bde596a5582f695b46051c7a60268ec545d15beb45d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_066269934a99a06a0f4c01f4c43a39f46f253013775d623492c232c71d7ea901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066269934a99a06a0f4c01f4c43a39f46f253013775d623492c232c71d7ea901->enter($__internal_066269934a99a06a0f4c01f4c43a39f46f253013775d623492c232c71d7ea901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ef35b47961976779e25f80b7bc0e1e12483583bf261a6cdd758c5f55e57dfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef35b47961976779e25f80b7bc0e1e12483583bf261a6cdd758c5f55e57dfb6->enter($__internal_4ef35b47961976779e25f80b7bc0e1e12483583bf261a6cdd758c5f55e57dfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4ef35b47961976779e25f80b7bc0e1e12483583bf261a6cdd758c5f55e57dfb6->leave($__internal_4ef35b47961976779e25f80b7bc0e1e12483583bf261a6cdd758c5f55e57dfb6_prof);

        
        $__internal_066269934a99a06a0f4c01f4c43a39f46f253013775d623492c232c71d7ea901->leave($__internal_066269934a99a06a0f4c01f4c43a39f46f253013775d623492c232c71d7ea901_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52d08bce33c30f0569810bf74d1f85de2e725dedeeebc89d3aa393246484cb2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d08bce33c30f0569810bf74d1f85de2e725dedeeebc89d3aa393246484cb2a->enter($__internal_52d08bce33c30f0569810bf74d1f85de2e725dedeeebc89d3aa393246484cb2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4ca9661cd43403d77c79243864b061285720a663e1fd65ccecb811f7a8be09bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ca9661cd43403d77c79243864b061285720a663e1fd65ccecb811f7a8be09bd->enter($__internal_4ca9661cd43403d77c79243864b061285720a663e1fd65ccecb811f7a8be09bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4ca9661cd43403d77c79243864b061285720a663e1fd65ccecb811f7a8be09bd->leave($__internal_4ca9661cd43403d77c79243864b061285720a663e1fd65ccecb811f7a8be09bd_prof);

        
        $__internal_52d08bce33c30f0569810bf74d1f85de2e725dedeeebc89d3aa393246484cb2a->leave($__internal_52d08bce33c30f0569810bf74d1f85de2e725dedeeebc89d3aa393246484cb2a_prof);

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
