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
        $__internal_9d27c1f38ef5a5a60837003572e5b691c9fbb7b371174a9014569a57c4f289ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d27c1f38ef5a5a60837003572e5b691c9fbb7b371174a9014569a57c4f289ee->enter($__internal_9d27c1f38ef5a5a60837003572e5b691c9fbb7b371174a9014569a57c4f289ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b5d65ecf7d0bdb31db6873b20c8cc7d5209488d7e94ed19e9c0ce23d784eab86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d65ecf7d0bdb31db6873b20c8cc7d5209488d7e94ed19e9c0ce23d784eab86->enter($__internal_b5d65ecf7d0bdb31db6873b20c8cc7d5209488d7e94ed19e9c0ce23d784eab86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9d27c1f38ef5a5a60837003572e5b691c9fbb7b371174a9014569a57c4f289ee->leave($__internal_9d27c1f38ef5a5a60837003572e5b691c9fbb7b371174a9014569a57c4f289ee_prof);

        
        $__internal_b5d65ecf7d0bdb31db6873b20c8cc7d5209488d7e94ed19e9c0ce23d784eab86->leave($__internal_b5d65ecf7d0bdb31db6873b20c8cc7d5209488d7e94ed19e9c0ce23d784eab86_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4acbabb4182e0f1c6288cc4eeeef42f82de035b33e6c99b9cf526de06602ab9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4acbabb4182e0f1c6288cc4eeeef42f82de035b33e6c99b9cf526de06602ab9b->enter($__internal_4acbabb4182e0f1c6288cc4eeeef42f82de035b33e6c99b9cf526de06602ab9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ff2e72e241245e02f1d4185bc84d2d3f4c36acd48eac2050db1a84cd4f11b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff2e72e241245e02f1d4185bc84d2d3f4c36acd48eac2050db1a84cd4f11b7a->enter($__internal_3ff2e72e241245e02f1d4185bc84d2d3f4c36acd48eac2050db1a84cd4f11b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3ff2e72e241245e02f1d4185bc84d2d3f4c36acd48eac2050db1a84cd4f11b7a->leave($__internal_3ff2e72e241245e02f1d4185bc84d2d3f4c36acd48eac2050db1a84cd4f11b7a_prof);

        
        $__internal_4acbabb4182e0f1c6288cc4eeeef42f82de035b33e6c99b9cf526de06602ab9b->leave($__internal_4acbabb4182e0f1c6288cc4eeeef42f82de035b33e6c99b9cf526de06602ab9b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a13bbc43f5f7c2b224b5bfb9573b51716b399c3fe12a2916c5c5ee90dc90b8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13bbc43f5f7c2b224b5bfb9573b51716b399c3fe12a2916c5c5ee90dc90b8b1->enter($__internal_a13bbc43f5f7c2b224b5bfb9573b51716b399c3fe12a2916c5c5ee90dc90b8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_481080404746e0d59170c46ebd00f40802d394b1f20a25910d437e1fa73b87a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481080404746e0d59170c46ebd00f40802d394b1f20a25910d437e1fa73b87a2->enter($__internal_481080404746e0d59170c46ebd00f40802d394b1f20a25910d437e1fa73b87a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_481080404746e0d59170c46ebd00f40802d394b1f20a25910d437e1fa73b87a2->leave($__internal_481080404746e0d59170c46ebd00f40802d394b1f20a25910d437e1fa73b87a2_prof);

        
        $__internal_a13bbc43f5f7c2b224b5bfb9573b51716b399c3fe12a2916c5c5ee90dc90b8b1->leave($__internal_a13bbc43f5f7c2b224b5bfb9573b51716b399c3fe12a2916c5c5ee90dc90b8b1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_404c6b34f68bdc9a12b4ba4abf1322504f7dba74ea1c8b4c26df62a4895ff153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404c6b34f68bdc9a12b4ba4abf1322504f7dba74ea1c8b4c26df62a4895ff153->enter($__internal_404c6b34f68bdc9a12b4ba4abf1322504f7dba74ea1c8b4c26df62a4895ff153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70f48fcc500c709a491bde31e97b313e280a6262a80d238974ddc0524876cdb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f48fcc500c709a491bde31e97b313e280a6262a80d238974ddc0524876cdb1->enter($__internal_70f48fcc500c709a491bde31e97b313e280a6262a80d238974ddc0524876cdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_70f48fcc500c709a491bde31e97b313e280a6262a80d238974ddc0524876cdb1->leave($__internal_70f48fcc500c709a491bde31e97b313e280a6262a80d238974ddc0524876cdb1_prof);

        
        $__internal_404c6b34f68bdc9a12b4ba4abf1322504f7dba74ea1c8b4c26df62a4895ff153->leave($__internal_404c6b34f68bdc9a12b4ba4abf1322504f7dba74ea1c8b4c26df62a4895ff153_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a82280aaa704c474c77d7ff113c4af31ed9bbe44ca24c167651e10e82988c84f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82280aaa704c474c77d7ff113c4af31ed9bbe44ca24c167651e10e82988c84f->enter($__internal_a82280aaa704c474c77d7ff113c4af31ed9bbe44ca24c167651e10e82988c84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_52ac4bd672759e2f97ae1f882500ad17766925af8dfe1b27e0131474203dda7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ac4bd672759e2f97ae1f882500ad17766925af8dfe1b27e0131474203dda7d->enter($__internal_52ac4bd672759e2f97ae1f882500ad17766925af8dfe1b27e0131474203dda7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_52ac4bd672759e2f97ae1f882500ad17766925af8dfe1b27e0131474203dda7d->leave($__internal_52ac4bd672759e2f97ae1f882500ad17766925af8dfe1b27e0131474203dda7d_prof);

        
        $__internal_a82280aaa704c474c77d7ff113c4af31ed9bbe44ca24c167651e10e82988c84f->leave($__internal_a82280aaa704c474c77d7ff113c4af31ed9bbe44ca24c167651e10e82988c84f_prof);

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
