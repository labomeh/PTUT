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
        $__internal_c28ca344600cfe5348ca98ccf66078ba5802254f5db5e01fd77c929d690b7fb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28ca344600cfe5348ca98ccf66078ba5802254f5db5e01fd77c929d690b7fb2->enter($__internal_c28ca344600cfe5348ca98ccf66078ba5802254f5db5e01fd77c929d690b7fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_762f3e3e8ed31b2e3ff2fb061c03299578af93eaa48d82618e5b34da0627f935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762f3e3e8ed31b2e3ff2fb061c03299578af93eaa48d82618e5b34da0627f935->enter($__internal_762f3e3e8ed31b2e3ff2fb061c03299578af93eaa48d82618e5b34da0627f935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c28ca344600cfe5348ca98ccf66078ba5802254f5db5e01fd77c929d690b7fb2->leave($__internal_c28ca344600cfe5348ca98ccf66078ba5802254f5db5e01fd77c929d690b7fb2_prof);

        
        $__internal_762f3e3e8ed31b2e3ff2fb061c03299578af93eaa48d82618e5b34da0627f935->leave($__internal_762f3e3e8ed31b2e3ff2fb061c03299578af93eaa48d82618e5b34da0627f935_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc6790b9f2eaddd36ee15e3d73cf2591d9b998233f455c50b6b107cfc3892c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6790b9f2eaddd36ee15e3d73cf2591d9b998233f455c50b6b107cfc3892c34->enter($__internal_dc6790b9f2eaddd36ee15e3d73cf2591d9b998233f455c50b6b107cfc3892c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c64677b84df8dca73456a67077b30c083636b2c2aa025574f100981aca3e56f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64677b84df8dca73456a67077b30c083636b2c2aa025574f100981aca3e56f9->enter($__internal_c64677b84df8dca73456a67077b30c083636b2c2aa025574f100981aca3e56f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c64677b84df8dca73456a67077b30c083636b2c2aa025574f100981aca3e56f9->leave($__internal_c64677b84df8dca73456a67077b30c083636b2c2aa025574f100981aca3e56f9_prof);

        
        $__internal_dc6790b9f2eaddd36ee15e3d73cf2591d9b998233f455c50b6b107cfc3892c34->leave($__internal_dc6790b9f2eaddd36ee15e3d73cf2591d9b998233f455c50b6b107cfc3892c34_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_71bd5860ce4eec7eaaac6f2a37b1810d40081bea069625331d7921255bfcd72f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71bd5860ce4eec7eaaac6f2a37b1810d40081bea069625331d7921255bfcd72f->enter($__internal_71bd5860ce4eec7eaaac6f2a37b1810d40081bea069625331d7921255bfcd72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0584ab220d6a6363ce8d6d2cadf27c617b14c3151cff1573764a241257582553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0584ab220d6a6363ce8d6d2cadf27c617b14c3151cff1573764a241257582553->enter($__internal_0584ab220d6a6363ce8d6d2cadf27c617b14c3151cff1573764a241257582553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0584ab220d6a6363ce8d6d2cadf27c617b14c3151cff1573764a241257582553->leave($__internal_0584ab220d6a6363ce8d6d2cadf27c617b14c3151cff1573764a241257582553_prof);

        
        $__internal_71bd5860ce4eec7eaaac6f2a37b1810d40081bea069625331d7921255bfcd72f->leave($__internal_71bd5860ce4eec7eaaac6f2a37b1810d40081bea069625331d7921255bfcd72f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_02e71fe52fa94756f4647648ea6cf2e02b44cd5b0e11b25fb65e756310aed0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e71fe52fa94756f4647648ea6cf2e02b44cd5b0e11b25fb65e756310aed0e3->enter($__internal_02e71fe52fa94756f4647648ea6cf2e02b44cd5b0e11b25fb65e756310aed0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a93f5b8f86035a2055a4f1ccc3eb18d8fc0db25df2aa437e455796d4cd8c7488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93f5b8f86035a2055a4f1ccc3eb18d8fc0db25df2aa437e455796d4cd8c7488->enter($__internal_a93f5b8f86035a2055a4f1ccc3eb18d8fc0db25df2aa437e455796d4cd8c7488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a93f5b8f86035a2055a4f1ccc3eb18d8fc0db25df2aa437e455796d4cd8c7488->leave($__internal_a93f5b8f86035a2055a4f1ccc3eb18d8fc0db25df2aa437e455796d4cd8c7488_prof);

        
        $__internal_02e71fe52fa94756f4647648ea6cf2e02b44cd5b0e11b25fb65e756310aed0e3->leave($__internal_02e71fe52fa94756f4647648ea6cf2e02b44cd5b0e11b25fb65e756310aed0e3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_204446838d271b4f8cc872a8a914580adeee02e6b9597fc1de1c9945c9729334 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204446838d271b4f8cc872a8a914580adeee02e6b9597fc1de1c9945c9729334->enter($__internal_204446838d271b4f8cc872a8a914580adeee02e6b9597fc1de1c9945c9729334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc571666a7a9a220b3ec187306b09e8e8918bea5fec83dc1927906f2ceea049c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc571666a7a9a220b3ec187306b09e8e8918bea5fec83dc1927906f2ceea049c->enter($__internal_bc571666a7a9a220b3ec187306b09e8e8918bea5fec83dc1927906f2ceea049c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bc571666a7a9a220b3ec187306b09e8e8918bea5fec83dc1927906f2ceea049c->leave($__internal_bc571666a7a9a220b3ec187306b09e8e8918bea5fec83dc1927906f2ceea049c_prof);

        
        $__internal_204446838d271b4f8cc872a8a914580adeee02e6b9597fc1de1c9945c9729334->leave($__internal_204446838d271b4f8cc872a8a914580adeee02e6b9597fc1de1c9945c9729334_prof);

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
