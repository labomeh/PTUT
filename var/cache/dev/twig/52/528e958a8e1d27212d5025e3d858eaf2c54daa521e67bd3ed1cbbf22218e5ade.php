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
        $__internal_053a727df579aaeee30ce52c9ad42e41a0df21578e8df3c2b1880a12c6ef3937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053a727df579aaeee30ce52c9ad42e41a0df21578e8df3c2b1880a12c6ef3937->enter($__internal_053a727df579aaeee30ce52c9ad42e41a0df21578e8df3c2b1880a12c6ef3937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_90e1cf12b4992da7e540bac28b6947b7bf046a304ae0d5b90a3dc3069695d8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e1cf12b4992da7e540bac28b6947b7bf046a304ae0d5b90a3dc3069695d8af->enter($__internal_90e1cf12b4992da7e540bac28b6947b7bf046a304ae0d5b90a3dc3069695d8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_053a727df579aaeee30ce52c9ad42e41a0df21578e8df3c2b1880a12c6ef3937->leave($__internal_053a727df579aaeee30ce52c9ad42e41a0df21578e8df3c2b1880a12c6ef3937_prof);

        
        $__internal_90e1cf12b4992da7e540bac28b6947b7bf046a304ae0d5b90a3dc3069695d8af->leave($__internal_90e1cf12b4992da7e540bac28b6947b7bf046a304ae0d5b90a3dc3069695d8af_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_85d1ae2c36fce40334006658037c78f7bc4380e2e3efa8f4b5ffd85af98e41b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d1ae2c36fce40334006658037c78f7bc4380e2e3efa8f4b5ffd85af98e41b1->enter($__internal_85d1ae2c36fce40334006658037c78f7bc4380e2e3efa8f4b5ffd85af98e41b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_692a986629446eeed32313dc90bd3227f0829004b7ba2e4fd62af0e639fbcb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692a986629446eeed32313dc90bd3227f0829004b7ba2e4fd62af0e639fbcb36->enter($__internal_692a986629446eeed32313dc90bd3227f0829004b7ba2e4fd62af0e639fbcb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_692a986629446eeed32313dc90bd3227f0829004b7ba2e4fd62af0e639fbcb36->leave($__internal_692a986629446eeed32313dc90bd3227f0829004b7ba2e4fd62af0e639fbcb36_prof);

        
        $__internal_85d1ae2c36fce40334006658037c78f7bc4380e2e3efa8f4b5ffd85af98e41b1->leave($__internal_85d1ae2c36fce40334006658037c78f7bc4380e2e3efa8f4b5ffd85af98e41b1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd85c26dfc3675c5a938ca311543b4cfcce96a4cbe7e6665fb1439818248ef57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd85c26dfc3675c5a938ca311543b4cfcce96a4cbe7e6665fb1439818248ef57->enter($__internal_cd85c26dfc3675c5a938ca311543b4cfcce96a4cbe7e6665fb1439818248ef57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_78f9a76c7b2b59d9575ccbbca3dead3e2b5897c537c3d421ebfaa10f81c4f01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f9a76c7b2b59d9575ccbbca3dead3e2b5897c537c3d421ebfaa10f81c4f01d->enter($__internal_78f9a76c7b2b59d9575ccbbca3dead3e2b5897c537c3d421ebfaa10f81c4f01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_78f9a76c7b2b59d9575ccbbca3dead3e2b5897c537c3d421ebfaa10f81c4f01d->leave($__internal_78f9a76c7b2b59d9575ccbbca3dead3e2b5897c537c3d421ebfaa10f81c4f01d_prof);

        
        $__internal_cd85c26dfc3675c5a938ca311543b4cfcce96a4cbe7e6665fb1439818248ef57->leave($__internal_cd85c26dfc3675c5a938ca311543b4cfcce96a4cbe7e6665fb1439818248ef57_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ddc4aae0259e33553babe2afa33f70066c2813f38516d7c7de9b4af931b6b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ddc4aae0259e33553babe2afa33f70066c2813f38516d7c7de9b4af931b6b6a->enter($__internal_1ddc4aae0259e33553babe2afa33f70066c2813f38516d7c7de9b4af931b6b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be6fbc17c8843de8d91e87a7d3b0efce7db83e3bb6c8892e1fe98debd0598dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6fbc17c8843de8d91e87a7d3b0efce7db83e3bb6c8892e1fe98debd0598dc8->enter($__internal_be6fbc17c8843de8d91e87a7d3b0efce7db83e3bb6c8892e1fe98debd0598dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_be6fbc17c8843de8d91e87a7d3b0efce7db83e3bb6c8892e1fe98debd0598dc8->leave($__internal_be6fbc17c8843de8d91e87a7d3b0efce7db83e3bb6c8892e1fe98debd0598dc8_prof);

        
        $__internal_1ddc4aae0259e33553babe2afa33f70066c2813f38516d7c7de9b4af931b6b6a->leave($__internal_1ddc4aae0259e33553babe2afa33f70066c2813f38516d7c7de9b4af931b6b6a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b3818b9a57ababfcd3046f059121742bf128ed7f5b1f307de8ac3b731a43304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b3818b9a57ababfcd3046f059121742bf128ed7f5b1f307de8ac3b731a43304->enter($__internal_4b3818b9a57ababfcd3046f059121742bf128ed7f5b1f307de8ac3b731a43304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5903381b3e3b05ec6d424dd154e30db69c54fe4f9ade9da3fdfe160342b64c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5903381b3e3b05ec6d424dd154e30db69c54fe4f9ade9da3fdfe160342b64c7c->enter($__internal_5903381b3e3b05ec6d424dd154e30db69c54fe4f9ade9da3fdfe160342b64c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5903381b3e3b05ec6d424dd154e30db69c54fe4f9ade9da3fdfe160342b64c7c->leave($__internal_5903381b3e3b05ec6d424dd154e30db69c54fe4f9ade9da3fdfe160342b64c7c_prof);

        
        $__internal_4b3818b9a57ababfcd3046f059121742bf128ed7f5b1f307de8ac3b731a43304->leave($__internal_4b3818b9a57ababfcd3046f059121742bf128ed7f5b1f307de8ac3b731a43304_prof);

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
