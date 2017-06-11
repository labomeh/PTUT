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
        $__internal_f462e62a3687990abc21b5a4f2630a540dcad592382b22cddd82ff4de09a39fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f462e62a3687990abc21b5a4f2630a540dcad592382b22cddd82ff4de09a39fe->enter($__internal_f462e62a3687990abc21b5a4f2630a540dcad592382b22cddd82ff4de09a39fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a5beb4cfa3d09feb0cc66bf78400e14029cbeb6c78f94bbd8fbdaba8878dcc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5beb4cfa3d09feb0cc66bf78400e14029cbeb6c78f94bbd8fbdaba8878dcc4e->enter($__internal_a5beb4cfa3d09feb0cc66bf78400e14029cbeb6c78f94bbd8fbdaba8878dcc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f462e62a3687990abc21b5a4f2630a540dcad592382b22cddd82ff4de09a39fe->leave($__internal_f462e62a3687990abc21b5a4f2630a540dcad592382b22cddd82ff4de09a39fe_prof);

        
        $__internal_a5beb4cfa3d09feb0cc66bf78400e14029cbeb6c78f94bbd8fbdaba8878dcc4e->leave($__internal_a5beb4cfa3d09feb0cc66bf78400e14029cbeb6c78f94bbd8fbdaba8878dcc4e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc5bd1aaabd4e193c0a20079f9e7d953aa671efc97169b4a03dabb8800047ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5bd1aaabd4e193c0a20079f9e7d953aa671efc97169b4a03dabb8800047ffa->enter($__internal_cc5bd1aaabd4e193c0a20079f9e7d953aa671efc97169b4a03dabb8800047ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5ec7902b071d4f1709253abdd04d81e2897705ebc1a6b468a542c7eb193ddee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5ec7902b071d4f1709253abdd04d81e2897705ebc1a6b468a542c7eb193ddee->enter($__internal_b5ec7902b071d4f1709253abdd04d81e2897705ebc1a6b468a542c7eb193ddee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b5ec7902b071d4f1709253abdd04d81e2897705ebc1a6b468a542c7eb193ddee->leave($__internal_b5ec7902b071d4f1709253abdd04d81e2897705ebc1a6b468a542c7eb193ddee_prof);

        
        $__internal_cc5bd1aaabd4e193c0a20079f9e7d953aa671efc97169b4a03dabb8800047ffa->leave($__internal_cc5bd1aaabd4e193c0a20079f9e7d953aa671efc97169b4a03dabb8800047ffa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32cd298d474621559046ec1d6c2edb76ba0718c956c62260e42aba93377d7b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32cd298d474621559046ec1d6c2edb76ba0718c956c62260e42aba93377d7b27->enter($__internal_32cd298d474621559046ec1d6c2edb76ba0718c956c62260e42aba93377d7b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_54d350e1182432f4f2dad1f0cccfef8af673de28477453b76114386969653472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d350e1182432f4f2dad1f0cccfef8af673de28477453b76114386969653472->enter($__internal_54d350e1182432f4f2dad1f0cccfef8af673de28477453b76114386969653472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_54d350e1182432f4f2dad1f0cccfef8af673de28477453b76114386969653472->leave($__internal_54d350e1182432f4f2dad1f0cccfef8af673de28477453b76114386969653472_prof);

        
        $__internal_32cd298d474621559046ec1d6c2edb76ba0718c956c62260e42aba93377d7b27->leave($__internal_32cd298d474621559046ec1d6c2edb76ba0718c956c62260e42aba93377d7b27_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb213c367c57c6d8464d2d62012cb38d398d663c3b561f6ee8f0b4c935172da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb213c367c57c6d8464d2d62012cb38d398d663c3b561f6ee8f0b4c935172da6->enter($__internal_cb213c367c57c6d8464d2d62012cb38d398d663c3b561f6ee8f0b4c935172da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71a5ad36e24993a66d933ff1f45281550562284be2ccf6fdbd3634063319d23d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a5ad36e24993a66d933ff1f45281550562284be2ccf6fdbd3634063319d23d->enter($__internal_71a5ad36e24993a66d933ff1f45281550562284be2ccf6fdbd3634063319d23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_71a5ad36e24993a66d933ff1f45281550562284be2ccf6fdbd3634063319d23d->leave($__internal_71a5ad36e24993a66d933ff1f45281550562284be2ccf6fdbd3634063319d23d_prof);

        
        $__internal_cb213c367c57c6d8464d2d62012cb38d398d663c3b561f6ee8f0b4c935172da6->leave($__internal_cb213c367c57c6d8464d2d62012cb38d398d663c3b561f6ee8f0b4c935172da6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5af702602e1c14168e8f148b95b76168f6346fd050394845fae3a1e80ad37161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5af702602e1c14168e8f148b95b76168f6346fd050394845fae3a1e80ad37161->enter($__internal_5af702602e1c14168e8f148b95b76168f6346fd050394845fae3a1e80ad37161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d5417b28d631ae65fa596b29fede614d8633a6096ee474c14e05bac1a5b02e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5417b28d631ae65fa596b29fede614d8633a6096ee474c14e05bac1a5b02e51->enter($__internal_d5417b28d631ae65fa596b29fede614d8633a6096ee474c14e05bac1a5b02e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d5417b28d631ae65fa596b29fede614d8633a6096ee474c14e05bac1a5b02e51->leave($__internal_d5417b28d631ae65fa596b29fede614d8633a6096ee474c14e05bac1a5b02e51_prof);

        
        $__internal_5af702602e1c14168e8f148b95b76168f6346fd050394845fae3a1e80ad37161->leave($__internal_5af702602e1c14168e8f148b95b76168f6346fd050394845fae3a1e80ad37161_prof);

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
