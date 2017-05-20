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
        $__internal_dde023c02a409e7b4ff7da050b3c9b88033009f7944c694de4b0d5c6bf17d990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde023c02a409e7b4ff7da050b3c9b88033009f7944c694de4b0d5c6bf17d990->enter($__internal_dde023c02a409e7b4ff7da050b3c9b88033009f7944c694de4b0d5c6bf17d990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_1476d61e0bc67f50a0f569ac9b9604f735077f964f9667d310fd4c4d39e3e320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1476d61e0bc67f50a0f569ac9b9604f735077f964f9667d310fd4c4d39e3e320->enter($__internal_1476d61e0bc67f50a0f569ac9b9604f735077f964f9667d310fd4c4d39e3e320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_dde023c02a409e7b4ff7da050b3c9b88033009f7944c694de4b0d5c6bf17d990->leave($__internal_dde023c02a409e7b4ff7da050b3c9b88033009f7944c694de4b0d5c6bf17d990_prof);

        
        $__internal_1476d61e0bc67f50a0f569ac9b9604f735077f964f9667d310fd4c4d39e3e320->leave($__internal_1476d61e0bc67f50a0f569ac9b9604f735077f964f9667d310fd4c4d39e3e320_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0224b4f27448cd512443cfe4db0c289b9e57904361b381ca73ae9ff6263c2882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0224b4f27448cd512443cfe4db0c289b9e57904361b381ca73ae9ff6263c2882->enter($__internal_0224b4f27448cd512443cfe4db0c289b9e57904361b381ca73ae9ff6263c2882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8aee87289ee79954ec38b5d447af4416e4c7d7818cf3fec9c24e040c1e7aee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8aee87289ee79954ec38b5d447af4416e4c7d7818cf3fec9c24e040c1e7aee1->enter($__internal_f8aee87289ee79954ec38b5d447af4416e4c7d7818cf3fec9c24e040c1e7aee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f8aee87289ee79954ec38b5d447af4416e4c7d7818cf3fec9c24e040c1e7aee1->leave($__internal_f8aee87289ee79954ec38b5d447af4416e4c7d7818cf3fec9c24e040c1e7aee1_prof);

        
        $__internal_0224b4f27448cd512443cfe4db0c289b9e57904361b381ca73ae9ff6263c2882->leave($__internal_0224b4f27448cd512443cfe4db0c289b9e57904361b381ca73ae9ff6263c2882_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7553ba6c36b652becf39f8a5c2d4e1b12e7e589cac8ac02e6f0e57eed86c458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7553ba6c36b652becf39f8a5c2d4e1b12e7e589cac8ac02e6f0e57eed86c458->enter($__internal_b7553ba6c36b652becf39f8a5c2d4e1b12e7e589cac8ac02e6f0e57eed86c458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f2b0d9f27ea043acd03c0c452ebce4e4815057e1b654460a235812562b7bb346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b0d9f27ea043acd03c0c452ebce4e4815057e1b654460a235812562b7bb346->enter($__internal_f2b0d9f27ea043acd03c0c452ebce4e4815057e1b654460a235812562b7bb346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2b0d9f27ea043acd03c0c452ebce4e4815057e1b654460a235812562b7bb346->leave($__internal_f2b0d9f27ea043acd03c0c452ebce4e4815057e1b654460a235812562b7bb346_prof);

        
        $__internal_b7553ba6c36b652becf39f8a5c2d4e1b12e7e589cac8ac02e6f0e57eed86c458->leave($__internal_b7553ba6c36b652becf39f8a5c2d4e1b12e7e589cac8ac02e6f0e57eed86c458_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_97db418ae2b1dd491affb3b1c09daf048e06d6dadf0327983bcfffd7c793621e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97db418ae2b1dd491affb3b1c09daf048e06d6dadf0327983bcfffd7c793621e->enter($__internal_97db418ae2b1dd491affb3b1c09daf048e06d6dadf0327983bcfffd7c793621e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0175959ed1d296415b2aa0c2cd723bc9608dd52e3560f4eb19263e98f66ae9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0175959ed1d296415b2aa0c2cd723bc9608dd52e3560f4eb19263e98f66ae9c7->enter($__internal_0175959ed1d296415b2aa0c2cd723bc9608dd52e3560f4eb19263e98f66ae9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0175959ed1d296415b2aa0c2cd723bc9608dd52e3560f4eb19263e98f66ae9c7->leave($__internal_0175959ed1d296415b2aa0c2cd723bc9608dd52e3560f4eb19263e98f66ae9c7_prof);

        
        $__internal_97db418ae2b1dd491affb3b1c09daf048e06d6dadf0327983bcfffd7c793621e->leave($__internal_97db418ae2b1dd491affb3b1c09daf048e06d6dadf0327983bcfffd7c793621e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_026524ee096c210485ff16baa23d9c34997eb6cec2b0598bd4782f3786a1715f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026524ee096c210485ff16baa23d9c34997eb6cec2b0598bd4782f3786a1715f->enter($__internal_026524ee096c210485ff16baa23d9c34997eb6cec2b0598bd4782f3786a1715f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_095b0cb3420cb6c9c40dc5a8dafe0976e35e110b156d34d3aa8cc09568037aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095b0cb3420cb6c9c40dc5a8dafe0976e35e110b156d34d3aa8cc09568037aca->enter($__internal_095b0cb3420cb6c9c40dc5a8dafe0976e35e110b156d34d3aa8cc09568037aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_095b0cb3420cb6c9c40dc5a8dafe0976e35e110b156d34d3aa8cc09568037aca->leave($__internal_095b0cb3420cb6c9c40dc5a8dafe0976e35e110b156d34d3aa8cc09568037aca_prof);

        
        $__internal_026524ee096c210485ff16baa23d9c34997eb6cec2b0598bd4782f3786a1715f->leave($__internal_026524ee096c210485ff16baa23d9c34997eb6cec2b0598bd4782f3786a1715f_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\ptut\\app/Resources\\views/base.html.twig");
    }
}
