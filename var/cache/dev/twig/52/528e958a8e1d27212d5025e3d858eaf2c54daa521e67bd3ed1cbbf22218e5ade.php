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
        $__internal_8a82720e150b56a6f812a7d0e5254064c28d3ceef67238fbbaa437bb655cacc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a82720e150b56a6f812a7d0e5254064c28d3ceef67238fbbaa437bb655cacc9->enter($__internal_8a82720e150b56a6f812a7d0e5254064c28d3ceef67238fbbaa437bb655cacc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_5d278ab028303ad8e8489c50f71dbdbff1c6d6c6c75258911f4932fa62db064c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d278ab028303ad8e8489c50f71dbdbff1c6d6c6c75258911f4932fa62db064c->enter($__internal_5d278ab028303ad8e8489c50f71dbdbff1c6d6c6c75258911f4932fa62db064c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8a82720e150b56a6f812a7d0e5254064c28d3ceef67238fbbaa437bb655cacc9->leave($__internal_8a82720e150b56a6f812a7d0e5254064c28d3ceef67238fbbaa437bb655cacc9_prof);

        
        $__internal_5d278ab028303ad8e8489c50f71dbdbff1c6d6c6c75258911f4932fa62db064c->leave($__internal_5d278ab028303ad8e8489c50f71dbdbff1c6d6c6c75258911f4932fa62db064c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c1c796d55e02fcbb26c6830950513f5cb07f390111f1c7c0a5bd1c2c3a4a868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1c796d55e02fcbb26c6830950513f5cb07f390111f1c7c0a5bd1c2c3a4a868->enter($__internal_5c1c796d55e02fcbb26c6830950513f5cb07f390111f1c7c0a5bd1c2c3a4a868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7332bc92e990bca9075cdcb928d165c5564e0856ae733566cfa62e12430f4928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7332bc92e990bca9075cdcb928d165c5564e0856ae733566cfa62e12430f4928->enter($__internal_7332bc92e990bca9075cdcb928d165c5564e0856ae733566cfa62e12430f4928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7332bc92e990bca9075cdcb928d165c5564e0856ae733566cfa62e12430f4928->leave($__internal_7332bc92e990bca9075cdcb928d165c5564e0856ae733566cfa62e12430f4928_prof);

        
        $__internal_5c1c796d55e02fcbb26c6830950513f5cb07f390111f1c7c0a5bd1c2c3a4a868->leave($__internal_5c1c796d55e02fcbb26c6830950513f5cb07f390111f1c7c0a5bd1c2c3a4a868_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fff6948dbe055b237d0abba1197802d7dea2a77c6a9afa7bf7e9f6521158cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fff6948dbe055b237d0abba1197802d7dea2a77c6a9afa7bf7e9f6521158cc5->enter($__internal_2fff6948dbe055b237d0abba1197802d7dea2a77c6a9afa7bf7e9f6521158cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c51f041de9cce5b3de2d1458a7cb6a2b957812f51bf09ddad5608b3bb484d4b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c51f041de9cce5b3de2d1458a7cb6a2b957812f51bf09ddad5608b3bb484d4b1->enter($__internal_c51f041de9cce5b3de2d1458a7cb6a2b957812f51bf09ddad5608b3bb484d4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c51f041de9cce5b3de2d1458a7cb6a2b957812f51bf09ddad5608b3bb484d4b1->leave($__internal_c51f041de9cce5b3de2d1458a7cb6a2b957812f51bf09ddad5608b3bb484d4b1_prof);

        
        $__internal_2fff6948dbe055b237d0abba1197802d7dea2a77c6a9afa7bf7e9f6521158cc5->leave($__internal_2fff6948dbe055b237d0abba1197802d7dea2a77c6a9afa7bf7e9f6521158cc5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e232a08b68c1a15634c85686548ae8f5740d6852a0d54da4eec534cb9a50b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e232a08b68c1a15634c85686548ae8f5740d6852a0d54da4eec534cb9a50b72->enter($__internal_1e232a08b68c1a15634c85686548ae8f5740d6852a0d54da4eec534cb9a50b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aaf9aa338d449729adf192802178ade54f2bfdbe3c55187d8222fb12bcd7b58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf9aa338d449729adf192802178ade54f2bfdbe3c55187d8222fb12bcd7b58d->enter($__internal_aaf9aa338d449729adf192802178ade54f2bfdbe3c55187d8222fb12bcd7b58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aaf9aa338d449729adf192802178ade54f2bfdbe3c55187d8222fb12bcd7b58d->leave($__internal_aaf9aa338d449729adf192802178ade54f2bfdbe3c55187d8222fb12bcd7b58d_prof);

        
        $__internal_1e232a08b68c1a15634c85686548ae8f5740d6852a0d54da4eec534cb9a50b72->leave($__internal_1e232a08b68c1a15634c85686548ae8f5740d6852a0d54da4eec534cb9a50b72_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7df8dff15a23fa42073bae54917bd1e6339f46f0c4ecdb278a38589691c60af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7df8dff15a23fa42073bae54917bd1e6339f46f0c4ecdb278a38589691c60af->enter($__internal_e7df8dff15a23fa42073bae54917bd1e6339f46f0c4ecdb278a38589691c60af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_71e3b4d8c4ce1b6c3bd5c5215fbfa8123e87bdd211d3c783b08e8a809366ea78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e3b4d8c4ce1b6c3bd5c5215fbfa8123e87bdd211d3c783b08e8a809366ea78->enter($__internal_71e3b4d8c4ce1b6c3bd5c5215fbfa8123e87bdd211d3c783b08e8a809366ea78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_71e3b4d8c4ce1b6c3bd5c5215fbfa8123e87bdd211d3c783b08e8a809366ea78->leave($__internal_71e3b4d8c4ce1b6c3bd5c5215fbfa8123e87bdd211d3c783b08e8a809366ea78_prof);

        
        $__internal_e7df8dff15a23fa42073bae54917bd1e6339f46f0c4ecdb278a38589691c60af->leave($__internal_e7df8dff15a23fa42073bae54917bd1e6339f46f0c4ecdb278a38589691c60af_prof);

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
