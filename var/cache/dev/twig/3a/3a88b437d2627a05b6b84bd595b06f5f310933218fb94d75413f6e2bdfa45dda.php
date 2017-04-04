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
        $__internal_7a34c2e7778cc85facf57cbc409de736d304cabc7bcbbe6fd64d6349df4c21e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a34c2e7778cc85facf57cbc409de736d304cabc7bcbbe6fd64d6349df4c21e5->enter($__internal_7a34c2e7778cc85facf57cbc409de736d304cabc7bcbbe6fd64d6349df4c21e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_d4f7615337768dbb99af05e720063e4369e70692e7223033390cecb8f626bb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f7615337768dbb99af05e720063e4369e70692e7223033390cecb8f626bb21->enter($__internal_d4f7615337768dbb99af05e720063e4369e70692e7223033390cecb8f626bb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7a34c2e7778cc85facf57cbc409de736d304cabc7bcbbe6fd64d6349df4c21e5->leave($__internal_7a34c2e7778cc85facf57cbc409de736d304cabc7bcbbe6fd64d6349df4c21e5_prof);

        
        $__internal_d4f7615337768dbb99af05e720063e4369e70692e7223033390cecb8f626bb21->leave($__internal_d4f7615337768dbb99af05e720063e4369e70692e7223033390cecb8f626bb21_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_96f66d0b46a6f556e540fee5e922f04d375985ecef499307a60858480eda6404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f66d0b46a6f556e540fee5e922f04d375985ecef499307a60858480eda6404->enter($__internal_96f66d0b46a6f556e540fee5e922f04d375985ecef499307a60858480eda6404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d63fc42448aebf52f6df67d7ede41d50fe9d685e859952951ae6ad444ba5302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d63fc42448aebf52f6df67d7ede41d50fe9d685e859952951ae6ad444ba5302->enter($__internal_2d63fc42448aebf52f6df67d7ede41d50fe9d685e859952951ae6ad444ba5302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2d63fc42448aebf52f6df67d7ede41d50fe9d685e859952951ae6ad444ba5302->leave($__internal_2d63fc42448aebf52f6df67d7ede41d50fe9d685e859952951ae6ad444ba5302_prof);

        
        $__internal_96f66d0b46a6f556e540fee5e922f04d375985ecef499307a60858480eda6404->leave($__internal_96f66d0b46a6f556e540fee5e922f04d375985ecef499307a60858480eda6404_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_368c7331ef04698ccd43ab47a8dde72b15d4b8aeaa423ed77cd9a83bb3c9862c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368c7331ef04698ccd43ab47a8dde72b15d4b8aeaa423ed77cd9a83bb3c9862c->enter($__internal_368c7331ef04698ccd43ab47a8dde72b15d4b8aeaa423ed77cd9a83bb3c9862c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_55bc144ca548d96cf934fa07aef56eeca326768e5469547d253c0028475f1d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bc144ca548d96cf934fa07aef56eeca326768e5469547d253c0028475f1d26->enter($__internal_55bc144ca548d96cf934fa07aef56eeca326768e5469547d253c0028475f1d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_55bc144ca548d96cf934fa07aef56eeca326768e5469547d253c0028475f1d26->leave($__internal_55bc144ca548d96cf934fa07aef56eeca326768e5469547d253c0028475f1d26_prof);

        
        $__internal_368c7331ef04698ccd43ab47a8dde72b15d4b8aeaa423ed77cd9a83bb3c9862c->leave($__internal_368c7331ef04698ccd43ab47a8dde72b15d4b8aeaa423ed77cd9a83bb3c9862c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8077a45c9ada6b7f9e4062866ff8eaf4cfa41cec459ae87d3e226eddbe66e58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8077a45c9ada6b7f9e4062866ff8eaf4cfa41cec459ae87d3e226eddbe66e58d->enter($__internal_8077a45c9ada6b7f9e4062866ff8eaf4cfa41cec459ae87d3e226eddbe66e58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a91d934702193377f3ed478a9894e61d7763934171ddd60b631c915632f87b0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91d934702193377f3ed478a9894e61d7763934171ddd60b631c915632f87b0a->enter($__internal_a91d934702193377f3ed478a9894e61d7763934171ddd60b631c915632f87b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a91d934702193377f3ed478a9894e61d7763934171ddd60b631c915632f87b0a->leave($__internal_a91d934702193377f3ed478a9894e61d7763934171ddd60b631c915632f87b0a_prof);

        
        $__internal_8077a45c9ada6b7f9e4062866ff8eaf4cfa41cec459ae87d3e226eddbe66e58d->leave($__internal_8077a45c9ada6b7f9e4062866ff8eaf4cfa41cec459ae87d3e226eddbe66e58d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f96c66297d016ba7f4d7548d6d541b5637606f8e91474ed1aa7a510a03b2e3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96c66297d016ba7f4d7548d6d541b5637606f8e91474ed1aa7a510a03b2e3c7->enter($__internal_f96c66297d016ba7f4d7548d6d541b5637606f8e91474ed1aa7a510a03b2e3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1259f7bb00562ebb528b5e6b02f41413572e52248a9522cf7e2963b9dd8c5a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1259f7bb00562ebb528b5e6b02f41413572e52248a9522cf7e2963b9dd8c5a82->enter($__internal_1259f7bb00562ebb528b5e6b02f41413572e52248a9522cf7e2963b9dd8c5a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1259f7bb00562ebb528b5e6b02f41413572e52248a9522cf7e2963b9dd8c5a82->leave($__internal_1259f7bb00562ebb528b5e6b02f41413572e52248a9522cf7e2963b9dd8c5a82_prof);

        
        $__internal_f96c66297d016ba7f4d7548d6d541b5637606f8e91474ed1aa7a510a03b2e3c7->leave($__internal_f96c66297d016ba7f4d7548d6d541b5637606f8e91474ed1aa7a510a03b2e3c7_prof);

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
