<?php

/* PTUTPlatformBundle:Platform:article_1.html.twig */
class __TwigTemplate_cccf1c4fcbf5bcbc7e3df5beab177cf1b340aaf0631314ed2a2192184b5a15e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PTUTPlatformBundle:Platform:layout.html.twig", "PTUTPlatformBundle:Platform:article_1.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1a59e177ea5c5dd723618055b3dcd7b9773ec138840460b0300f775e9ff5471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a59e177ea5c5dd723618055b3dcd7b9773ec138840460b0300f775e9ff5471->enter($__internal_d1a59e177ea5c5dd723618055b3dcd7b9773ec138840460b0300f775e9ff5471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:article_1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1a59e177ea5c5dd723618055b3dcd7b9773ec138840460b0300f775e9ff5471->leave($__internal_d1a59e177ea5c5dd723618055b3dcd7b9773ec138840460b0300f775e9ff5471_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a00b2c25cb0b382d6ffdc233079852c985c5e9b0f78522d960db1a0020f97a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00b2c25cb0b382d6ffdc233079852c985c5e9b0f78522d960db1a0020f97a54->enter($__internal_a00b2c25cb0b382d6ffdc233079852c985c5e9b0f78522d960db1a0020f97a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>dqsdqsfqsfqs</h1>

<h2>sqdqsdq</h2>

<h3>sqdqsdsq</h3>

<p>sqdqsdsq</p>

";
        
        $__internal_a00b2c25cb0b382d6ffdc233079852c985c5e9b0f78522d960db1a0020f97a54->leave($__internal_a00b2c25cb0b382d6ffdc233079852c985c5e9b0f78522d960db1a0020f97a54_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform:article_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PTUTPlatformBundle:Platform:layout.html.twig\" %}

{% block body %}

<h1>dqsdqsfqsfqs</h1>

<h2>sqdqsdq</h2>

<h3>sqdqsdsq</h3>

<p>sqdqsdsq</p>

{%endblock%}", "PTUTPlatformBundle:Platform:article_1.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/article_1.html.twig");
    }
}
