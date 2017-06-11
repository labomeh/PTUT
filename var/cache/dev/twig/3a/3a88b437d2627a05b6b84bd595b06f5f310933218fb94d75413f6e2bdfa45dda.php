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
        $__internal_8473f33c129677baebf348f9f9bc6996a16a7ca2e8a6059c3d8a77f1cf410a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8473f33c129677baebf348f9f9bc6996a16a7ca2e8a6059c3d8a77f1cf410a95->enter($__internal_8473f33c129677baebf348f9f9bc6996a16a7ca2e8a6059c3d8a77f1cf410a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ebf92e634f73e5d33ab04c819faa5ab0fcebb475abc89fcd9d2b77c7ecc89dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf92e634f73e5d33ab04c819faa5ab0fcebb475abc89fcd9d2b77c7ecc89dfa->enter($__internal_ebf92e634f73e5d33ab04c819faa5ab0fcebb475abc89fcd9d2b77c7ecc89dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8473f33c129677baebf348f9f9bc6996a16a7ca2e8a6059c3d8a77f1cf410a95->leave($__internal_8473f33c129677baebf348f9f9bc6996a16a7ca2e8a6059c3d8a77f1cf410a95_prof);

        
        $__internal_ebf92e634f73e5d33ab04c819faa5ab0fcebb475abc89fcd9d2b77c7ecc89dfa->leave($__internal_ebf92e634f73e5d33ab04c819faa5ab0fcebb475abc89fcd9d2b77c7ecc89dfa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39a114d12f272bb7fe7daa448770933ed115ba7f7b6ad2c4f71bdfdc1c94f3ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a114d12f272bb7fe7daa448770933ed115ba7f7b6ad2c4f71bdfdc1c94f3ee->enter($__internal_39a114d12f272bb7fe7daa448770933ed115ba7f7b6ad2c4f71bdfdc1c94f3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_456c61ea6baafa39920f5a45f51334f0b2a0150cc73a37a0a1acc412054c0b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_456c61ea6baafa39920f5a45f51334f0b2a0150cc73a37a0a1acc412054c0b11->enter($__internal_456c61ea6baafa39920f5a45f51334f0b2a0150cc73a37a0a1acc412054c0b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_456c61ea6baafa39920f5a45f51334f0b2a0150cc73a37a0a1acc412054c0b11->leave($__internal_456c61ea6baafa39920f5a45f51334f0b2a0150cc73a37a0a1acc412054c0b11_prof);

        
        $__internal_39a114d12f272bb7fe7daa448770933ed115ba7f7b6ad2c4f71bdfdc1c94f3ee->leave($__internal_39a114d12f272bb7fe7daa448770933ed115ba7f7b6ad2c4f71bdfdc1c94f3ee_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_796aef9e9cc7591eb8b3456cdf265807b4488308336fb097faeba44be352b4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_796aef9e9cc7591eb8b3456cdf265807b4488308336fb097faeba44be352b4f2->enter($__internal_796aef9e9cc7591eb8b3456cdf265807b4488308336fb097faeba44be352b4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7548f03d7950a924c9105997867c855ec5f9941b73543e88b4a76655b5eefe1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7548f03d7950a924c9105997867c855ec5f9941b73543e88b4a76655b5eefe1b->enter($__internal_7548f03d7950a924c9105997867c855ec5f9941b73543e88b4a76655b5eefe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7548f03d7950a924c9105997867c855ec5f9941b73543e88b4a76655b5eefe1b->leave($__internal_7548f03d7950a924c9105997867c855ec5f9941b73543e88b4a76655b5eefe1b_prof);

        
        $__internal_796aef9e9cc7591eb8b3456cdf265807b4488308336fb097faeba44be352b4f2->leave($__internal_796aef9e9cc7591eb8b3456cdf265807b4488308336fb097faeba44be352b4f2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_aab2e4ef1ab7be9ecd6c15700c524710ef0de0cf7ac7a39ad8530870e1acb706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aab2e4ef1ab7be9ecd6c15700c524710ef0de0cf7ac7a39ad8530870e1acb706->enter($__internal_aab2e4ef1ab7be9ecd6c15700c524710ef0de0cf7ac7a39ad8530870e1acb706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_185c3e5eed00ff5a5cfaa3a94239c45f239e0cb7c53fdff5653f615b99cda289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185c3e5eed00ff5a5cfaa3a94239c45f239e0cb7c53fdff5653f615b99cda289->enter($__internal_185c3e5eed00ff5a5cfaa3a94239c45f239e0cb7c53fdff5653f615b99cda289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_185c3e5eed00ff5a5cfaa3a94239c45f239e0cb7c53fdff5653f615b99cda289->leave($__internal_185c3e5eed00ff5a5cfaa3a94239c45f239e0cb7c53fdff5653f615b99cda289_prof);

        
        $__internal_aab2e4ef1ab7be9ecd6c15700c524710ef0de0cf7ac7a39ad8530870e1acb706->leave($__internal_aab2e4ef1ab7be9ecd6c15700c524710ef0de0cf7ac7a39ad8530870e1acb706_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea2258843a91b55d41336b8d340ceef3e4ce27a35488038d3297ca8d385935b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2258843a91b55d41336b8d340ceef3e4ce27a35488038d3297ca8d385935b0->enter($__internal_ea2258843a91b55d41336b8d340ceef3e4ce27a35488038d3297ca8d385935b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4f78ebde12b0ef286423b60d3cbe72dd0f29c95a1902862eb0df9918bf6856ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f78ebde12b0ef286423b60d3cbe72dd0f29c95a1902862eb0df9918bf6856ca->enter($__internal_4f78ebde12b0ef286423b60d3cbe72dd0f29c95a1902862eb0df9918bf6856ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4f78ebde12b0ef286423b60d3cbe72dd0f29c95a1902862eb0df9918bf6856ca->leave($__internal_4f78ebde12b0ef286423b60d3cbe72dd0f29c95a1902862eb0df9918bf6856ca_prof);

        
        $__internal_ea2258843a91b55d41336b8d340ceef3e4ce27a35488038d3297ca8d385935b0->leave($__internal_ea2258843a91b55d41336b8d340ceef3e4ce27a35488038d3297ca8d385935b0_prof);

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
