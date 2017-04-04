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
        $__internal_310412c50a649bc03e61447ec2534fd0d117ea18f45705c5549933a903f588a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310412c50a649bc03e61447ec2534fd0d117ea18f45705c5549933a903f588a5->enter($__internal_310412c50a649bc03e61447ec2534fd0d117ea18f45705c5549933a903f588a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_bd4809da1a778a836a854ba58136e5392f2d2bf9cb8e3f97b376f48a385a754a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4809da1a778a836a854ba58136e5392f2d2bf9cb8e3f97b376f48a385a754a->enter($__internal_bd4809da1a778a836a854ba58136e5392f2d2bf9cb8e3f97b376f48a385a754a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_310412c50a649bc03e61447ec2534fd0d117ea18f45705c5549933a903f588a5->leave($__internal_310412c50a649bc03e61447ec2534fd0d117ea18f45705c5549933a903f588a5_prof);

        
        $__internal_bd4809da1a778a836a854ba58136e5392f2d2bf9cb8e3f97b376f48a385a754a->leave($__internal_bd4809da1a778a836a854ba58136e5392f2d2bf9cb8e3f97b376f48a385a754a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d3bc65f20567ad190af8370036d296699e3317d8504d5ffaca9428845845013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3bc65f20567ad190af8370036d296699e3317d8504d5ffaca9428845845013->enter($__internal_3d3bc65f20567ad190af8370036d296699e3317d8504d5ffaca9428845845013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1f922ae1fa3db4e5eaa7a73aab23b6b156f26b217e5a9861d91657cf5ac6a47a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f922ae1fa3db4e5eaa7a73aab23b6b156f26b217e5a9861d91657cf5ac6a47a->enter($__internal_1f922ae1fa3db4e5eaa7a73aab23b6b156f26b217e5a9861d91657cf5ac6a47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1f922ae1fa3db4e5eaa7a73aab23b6b156f26b217e5a9861d91657cf5ac6a47a->leave($__internal_1f922ae1fa3db4e5eaa7a73aab23b6b156f26b217e5a9861d91657cf5ac6a47a_prof);

        
        $__internal_3d3bc65f20567ad190af8370036d296699e3317d8504d5ffaca9428845845013->leave($__internal_3d3bc65f20567ad190af8370036d296699e3317d8504d5ffaca9428845845013_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6a901e07f0f46253cf6640c3ed2d143262e238ed330d6d4d1ce20e4d38d4635b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a901e07f0f46253cf6640c3ed2d143262e238ed330d6d4d1ce20e4d38d4635b->enter($__internal_6a901e07f0f46253cf6640c3ed2d143262e238ed330d6d4d1ce20e4d38d4635b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f2d446c094eb5c048b96570416e6aa9973dfd7213d776e22eae25eccc5c5d092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d446c094eb5c048b96570416e6aa9973dfd7213d776e22eae25eccc5c5d092->enter($__internal_f2d446c094eb5c048b96570416e6aa9973dfd7213d776e22eae25eccc5c5d092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2d446c094eb5c048b96570416e6aa9973dfd7213d776e22eae25eccc5c5d092->leave($__internal_f2d446c094eb5c048b96570416e6aa9973dfd7213d776e22eae25eccc5c5d092_prof);

        
        $__internal_6a901e07f0f46253cf6640c3ed2d143262e238ed330d6d4d1ce20e4d38d4635b->leave($__internal_6a901e07f0f46253cf6640c3ed2d143262e238ed330d6d4d1ce20e4d38d4635b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_37fa5469918e16f03e9c3d04546172c702622e289216b9ff55629a3632bbad65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37fa5469918e16f03e9c3d04546172c702622e289216b9ff55629a3632bbad65->enter($__internal_37fa5469918e16f03e9c3d04546172c702622e289216b9ff55629a3632bbad65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fae6d19dc4a9121a58c0eef6e8c29bc0dc01934193a0370a7e102db6b1fa478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fae6d19dc4a9121a58c0eef6e8c29bc0dc01934193a0370a7e102db6b1fa478->enter($__internal_9fae6d19dc4a9121a58c0eef6e8c29bc0dc01934193a0370a7e102db6b1fa478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9fae6d19dc4a9121a58c0eef6e8c29bc0dc01934193a0370a7e102db6b1fa478->leave($__internal_9fae6d19dc4a9121a58c0eef6e8c29bc0dc01934193a0370a7e102db6b1fa478_prof);

        
        $__internal_37fa5469918e16f03e9c3d04546172c702622e289216b9ff55629a3632bbad65->leave($__internal_37fa5469918e16f03e9c3d04546172c702622e289216b9ff55629a3632bbad65_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55f5d139763f1ac4f1ca89a8eb2a47c5174d19b2fc5aebd5d3840629694b276e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f5d139763f1ac4f1ca89a8eb2a47c5174d19b2fc5aebd5d3840629694b276e->enter($__internal_55f5d139763f1ac4f1ca89a8eb2a47c5174d19b2fc5aebd5d3840629694b276e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fb4c208381ac4a44b140123df5382ec780e334833e27b6de340cadfe6900805e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4c208381ac4a44b140123df5382ec780e334833e27b6de340cadfe6900805e->enter($__internal_fb4c208381ac4a44b140123df5382ec780e334833e27b6de340cadfe6900805e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fb4c208381ac4a44b140123df5382ec780e334833e27b6de340cadfe6900805e->leave($__internal_fb4c208381ac4a44b140123df5382ec780e334833e27b6de340cadfe6900805e_prof);

        
        $__internal_55f5d139763f1ac4f1ca89a8eb2a47c5174d19b2fc5aebd5d3840629694b276e->leave($__internal_55f5d139763f1ac4f1ca89a8eb2a47c5174d19b2fc5aebd5d3840629694b276e_prof);

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
