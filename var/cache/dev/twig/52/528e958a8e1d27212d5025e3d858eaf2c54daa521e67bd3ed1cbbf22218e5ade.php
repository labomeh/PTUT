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
        $__internal_766d87d289bcd08c214cd6ee304df83fa51cd175262c17fc202f7f414399366d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766d87d289bcd08c214cd6ee304df83fa51cd175262c17fc202f7f414399366d->enter($__internal_766d87d289bcd08c214cd6ee304df83fa51cd175262c17fc202f7f414399366d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5baa88f2cc3ac3eeea8d6f922a1b0714c114de0a1b8aeb0a20b5cbaaf627c3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5baa88f2cc3ac3eeea8d6f922a1b0714c114de0a1b8aeb0a20b5cbaaf627c3b8->enter($__internal_5baa88f2cc3ac3eeea8d6f922a1b0714c114de0a1b8aeb0a20b5cbaaf627c3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_766d87d289bcd08c214cd6ee304df83fa51cd175262c17fc202f7f414399366d->leave($__internal_766d87d289bcd08c214cd6ee304df83fa51cd175262c17fc202f7f414399366d_prof);

        
        $__internal_5baa88f2cc3ac3eeea8d6f922a1b0714c114de0a1b8aeb0a20b5cbaaf627c3b8->leave($__internal_5baa88f2cc3ac3eeea8d6f922a1b0714c114de0a1b8aeb0a20b5cbaaf627c3b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bafd5cd0f7f08e6787a38266ca996d401242ce06f3c1f6326a3b956e1004ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bafd5cd0f7f08e6787a38266ca996d401242ce06f3c1f6326a3b956e1004ac2->enter($__internal_0bafd5cd0f7f08e6787a38266ca996d401242ce06f3c1f6326a3b956e1004ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ebb6288d0d164b192b4190488657f099c5b8708c10b7a7c6de11d405ad19a468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb6288d0d164b192b4190488657f099c5b8708c10b7a7c6de11d405ad19a468->enter($__internal_ebb6288d0d164b192b4190488657f099c5b8708c10b7a7c6de11d405ad19a468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ebb6288d0d164b192b4190488657f099c5b8708c10b7a7c6de11d405ad19a468->leave($__internal_ebb6288d0d164b192b4190488657f099c5b8708c10b7a7c6de11d405ad19a468_prof);

        
        $__internal_0bafd5cd0f7f08e6787a38266ca996d401242ce06f3c1f6326a3b956e1004ac2->leave($__internal_0bafd5cd0f7f08e6787a38266ca996d401242ce06f3c1f6326a3b956e1004ac2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_538fe9d31f75dfa57568260ee568845b2985a77508447720cfad475afe4ad8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_538fe9d31f75dfa57568260ee568845b2985a77508447720cfad475afe4ad8a4->enter($__internal_538fe9d31f75dfa57568260ee568845b2985a77508447720cfad475afe4ad8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2fbb29ace5bbc35a516fa0919143c7fb0d1c3ad786e8521801ff738ef0849137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbb29ace5bbc35a516fa0919143c7fb0d1c3ad786e8521801ff738ef0849137->enter($__internal_2fbb29ace5bbc35a516fa0919143c7fb0d1c3ad786e8521801ff738ef0849137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2fbb29ace5bbc35a516fa0919143c7fb0d1c3ad786e8521801ff738ef0849137->leave($__internal_2fbb29ace5bbc35a516fa0919143c7fb0d1c3ad786e8521801ff738ef0849137_prof);

        
        $__internal_538fe9d31f75dfa57568260ee568845b2985a77508447720cfad475afe4ad8a4->leave($__internal_538fe9d31f75dfa57568260ee568845b2985a77508447720cfad475afe4ad8a4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3cde33b016c59e6a1c0bc75b3466e0f9a34b252066cc23a25050e1b50d8a4cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3cde33b016c59e6a1c0bc75b3466e0f9a34b252066cc23a25050e1b50d8a4cc->enter($__internal_e3cde33b016c59e6a1c0bc75b3466e0f9a34b252066cc23a25050e1b50d8a4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5b3a53589abb710a68d8ac00d57542447fb4cc30630329b5c42e4111d8f7d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b3a53589abb710a68d8ac00d57542447fb4cc30630329b5c42e4111d8f7d71->enter($__internal_e5b3a53589abb710a68d8ac00d57542447fb4cc30630329b5c42e4111d8f7d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5b3a53589abb710a68d8ac00d57542447fb4cc30630329b5c42e4111d8f7d71->leave($__internal_e5b3a53589abb710a68d8ac00d57542447fb4cc30630329b5c42e4111d8f7d71_prof);

        
        $__internal_e3cde33b016c59e6a1c0bc75b3466e0f9a34b252066cc23a25050e1b50d8a4cc->leave($__internal_e3cde33b016c59e6a1c0bc75b3466e0f9a34b252066cc23a25050e1b50d8a4cc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a07b33821767cd24f475a6627453e9b141cd65aa03c37486c2bf81c24cdc677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a07b33821767cd24f475a6627453e9b141cd65aa03c37486c2bf81c24cdc677->enter($__internal_5a07b33821767cd24f475a6627453e9b141cd65aa03c37486c2bf81c24cdc677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c1368797ea70c5fb12ef5cc9cb4aa1ad7aa62f5463ee1618bd58f3f375444c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1368797ea70c5fb12ef5cc9cb4aa1ad7aa62f5463ee1618bd58f3f375444c58->enter($__internal_c1368797ea70c5fb12ef5cc9cb4aa1ad7aa62f5463ee1618bd58f3f375444c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c1368797ea70c5fb12ef5cc9cb4aa1ad7aa62f5463ee1618bd58f3f375444c58->leave($__internal_c1368797ea70c5fb12ef5cc9cb4aa1ad7aa62f5463ee1618bd58f3f375444c58_prof);

        
        $__internal_5a07b33821767cd24f475a6627453e9b141cd65aa03c37486c2bf81c24cdc677->leave($__internal_5a07b33821767cd24f475a6627453e9b141cd65aa03c37486c2bf81c24cdc677_prof);

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
