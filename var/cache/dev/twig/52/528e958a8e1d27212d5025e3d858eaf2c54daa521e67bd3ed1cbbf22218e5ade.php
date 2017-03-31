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
        $__internal_8b1cfcac47142a760d686ca6cc58d08b8c4af7c8f44962f8130e59e6e095b8a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1cfcac47142a760d686ca6cc58d08b8c4af7c8f44962f8130e59e6e095b8a4->enter($__internal_8b1cfcac47142a760d686ca6cc58d08b8c4af7c8f44962f8130e59e6e095b8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_41c9987df05a2271e9b6860886bbadf770f4d1c1f7a76e9f49845f72cdf6a23e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c9987df05a2271e9b6860886bbadf770f4d1c1f7a76e9f49845f72cdf6a23e->enter($__internal_41c9987df05a2271e9b6860886bbadf770f4d1c1f7a76e9f49845f72cdf6a23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_8b1cfcac47142a760d686ca6cc58d08b8c4af7c8f44962f8130e59e6e095b8a4->leave($__internal_8b1cfcac47142a760d686ca6cc58d08b8c4af7c8f44962f8130e59e6e095b8a4_prof);

        
        $__internal_41c9987df05a2271e9b6860886bbadf770f4d1c1f7a76e9f49845f72cdf6a23e->leave($__internal_41c9987df05a2271e9b6860886bbadf770f4d1c1f7a76e9f49845f72cdf6a23e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_52926b4434491a5846094f31b8be66b9472312f497b6bafa803b450a6e4bbf4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52926b4434491a5846094f31b8be66b9472312f497b6bafa803b450a6e4bbf4e->enter($__internal_52926b4434491a5846094f31b8be66b9472312f497b6bafa803b450a6e4bbf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd63005c785d2fded053669462d91788029df592cb66d1c2889c099897bdc1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd63005c785d2fded053669462d91788029df592cb66d1c2889c099897bdc1c2->enter($__internal_dd63005c785d2fded053669462d91788029df592cb66d1c2889c099897bdc1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dd63005c785d2fded053669462d91788029df592cb66d1c2889c099897bdc1c2->leave($__internal_dd63005c785d2fded053669462d91788029df592cb66d1c2889c099897bdc1c2_prof);

        
        $__internal_52926b4434491a5846094f31b8be66b9472312f497b6bafa803b450a6e4bbf4e->leave($__internal_52926b4434491a5846094f31b8be66b9472312f497b6bafa803b450a6e4bbf4e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddba4776d0ad6316d2f4b3cdb66471e55dcfcc274a743de294c5b42bd369979e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddba4776d0ad6316d2f4b3cdb66471e55dcfcc274a743de294c5b42bd369979e->enter($__internal_ddba4776d0ad6316d2f4b3cdb66471e55dcfcc274a743de294c5b42bd369979e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2ad82fd48e98e28e59e8e77cfbc47c64f25ffd9e0182904dded725e25bd7cbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad82fd48e98e28e59e8e77cfbc47c64f25ffd9e0182904dded725e25bd7cbad->enter($__internal_2ad82fd48e98e28e59e8e77cfbc47c64f25ffd9e0182904dded725e25bd7cbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2ad82fd48e98e28e59e8e77cfbc47c64f25ffd9e0182904dded725e25bd7cbad->leave($__internal_2ad82fd48e98e28e59e8e77cfbc47c64f25ffd9e0182904dded725e25bd7cbad_prof);

        
        $__internal_ddba4776d0ad6316d2f4b3cdb66471e55dcfcc274a743de294c5b42bd369979e->leave($__internal_ddba4776d0ad6316d2f4b3cdb66471e55dcfcc274a743de294c5b42bd369979e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_93a20135f9d91019ddd103e9b088789de6784e0cf06803b6a505b3627e705d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93a20135f9d91019ddd103e9b088789de6784e0cf06803b6a505b3627e705d34->enter($__internal_93a20135f9d91019ddd103e9b088789de6784e0cf06803b6a505b3627e705d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0c1d03be01e062296d260b22d553d58c5238c2e4d6f7aa4c93e26c2054e8fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c1d03be01e062296d260b22d553d58c5238c2e4d6f7aa4c93e26c2054e8fd3->enter($__internal_e0c1d03be01e062296d260b22d553d58c5238c2e4d6f7aa4c93e26c2054e8fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e0c1d03be01e062296d260b22d553d58c5238c2e4d6f7aa4c93e26c2054e8fd3->leave($__internal_e0c1d03be01e062296d260b22d553d58c5238c2e4d6f7aa4c93e26c2054e8fd3_prof);

        
        $__internal_93a20135f9d91019ddd103e9b088789de6784e0cf06803b6a505b3627e705d34->leave($__internal_93a20135f9d91019ddd103e9b088789de6784e0cf06803b6a505b3627e705d34_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_53ef9bcff14c00fbd7f46639dd8c0d225bbc29593c2d5b0ba92b323f8649904d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ef9bcff14c00fbd7f46639dd8c0d225bbc29593c2d5b0ba92b323f8649904d->enter($__internal_53ef9bcff14c00fbd7f46639dd8c0d225bbc29593c2d5b0ba92b323f8649904d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bf06d019b2b6750b7d27b817c7a46edcc367465ac9f5199943bfb06efd3172ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf06d019b2b6750b7d27b817c7a46edcc367465ac9f5199943bfb06efd3172ae->enter($__internal_bf06d019b2b6750b7d27b817c7a46edcc367465ac9f5199943bfb06efd3172ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bf06d019b2b6750b7d27b817c7a46edcc367465ac9f5199943bfb06efd3172ae->leave($__internal_bf06d019b2b6750b7d27b817c7a46edcc367465ac9f5199943bfb06efd3172ae_prof);

        
        $__internal_53ef9bcff14c00fbd7f46639dd8c0d225bbc29593c2d5b0ba92b323f8649904d->leave($__internal_53ef9bcff14c00fbd7f46639dd8c0d225bbc29593c2d5b0ba92b323f8649904d_prof);

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
