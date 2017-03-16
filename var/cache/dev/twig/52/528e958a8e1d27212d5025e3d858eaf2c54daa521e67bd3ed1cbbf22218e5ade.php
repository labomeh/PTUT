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
        $__internal_09c3a06778c62cac44e281166a71426daf354e991146245e0e1f634db1531964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09c3a06778c62cac44e281166a71426daf354e991146245e0e1f634db1531964->enter($__internal_09c3a06778c62cac44e281166a71426daf354e991146245e0e1f634db1531964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_31d354669c8285daeea0eb3d4f0c94b17d805ef06d6c09d0b12a773ac6f3d51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d354669c8285daeea0eb3d4f0c94b17d805ef06d6c09d0b12a773ac6f3d51a->enter($__internal_31d354669c8285daeea0eb3d4f0c94b17d805ef06d6c09d0b12a773ac6f3d51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_09c3a06778c62cac44e281166a71426daf354e991146245e0e1f634db1531964->leave($__internal_09c3a06778c62cac44e281166a71426daf354e991146245e0e1f634db1531964_prof);

        
        $__internal_31d354669c8285daeea0eb3d4f0c94b17d805ef06d6c09d0b12a773ac6f3d51a->leave($__internal_31d354669c8285daeea0eb3d4f0c94b17d805ef06d6c09d0b12a773ac6f3d51a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6230b8cdf94dedaed9528698c757fe35040c5246dafcf5c4dd532be00ea83171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6230b8cdf94dedaed9528698c757fe35040c5246dafcf5c4dd532be00ea83171->enter($__internal_6230b8cdf94dedaed9528698c757fe35040c5246dafcf5c4dd532be00ea83171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c39037c6f24d1d5e38200e3f43df266ab8b3ac8a3494741b46814f063faa033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c39037c6f24d1d5e38200e3f43df266ab8b3ac8a3494741b46814f063faa033->enter($__internal_0c39037c6f24d1d5e38200e3f43df266ab8b3ac8a3494741b46814f063faa033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c39037c6f24d1d5e38200e3f43df266ab8b3ac8a3494741b46814f063faa033->leave($__internal_0c39037c6f24d1d5e38200e3f43df266ab8b3ac8a3494741b46814f063faa033_prof);

        
        $__internal_6230b8cdf94dedaed9528698c757fe35040c5246dafcf5c4dd532be00ea83171->leave($__internal_6230b8cdf94dedaed9528698c757fe35040c5246dafcf5c4dd532be00ea83171_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db88e912eaae7be3927b59685b0e7178203f59375c9078655dff73a6d2bd8ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db88e912eaae7be3927b59685b0e7178203f59375c9078655dff73a6d2bd8ecb->enter($__internal_db88e912eaae7be3927b59685b0e7178203f59375c9078655dff73a6d2bd8ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8d83cdbcf9ef6774f6bc7126adb8bf0be86d27ebb90c0defd6fac21bfb3c0747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d83cdbcf9ef6774f6bc7126adb8bf0be86d27ebb90c0defd6fac21bfb3c0747->enter($__internal_8d83cdbcf9ef6774f6bc7126adb8bf0be86d27ebb90c0defd6fac21bfb3c0747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8d83cdbcf9ef6774f6bc7126adb8bf0be86d27ebb90c0defd6fac21bfb3c0747->leave($__internal_8d83cdbcf9ef6774f6bc7126adb8bf0be86d27ebb90c0defd6fac21bfb3c0747_prof);

        
        $__internal_db88e912eaae7be3927b59685b0e7178203f59375c9078655dff73a6d2bd8ecb->leave($__internal_db88e912eaae7be3927b59685b0e7178203f59375c9078655dff73a6d2bd8ecb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c88909d5a3a16e035d840b2801eef5daa41196aeaa71cdc62b30c6476949832d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c88909d5a3a16e035d840b2801eef5daa41196aeaa71cdc62b30c6476949832d->enter($__internal_c88909d5a3a16e035d840b2801eef5daa41196aeaa71cdc62b30c6476949832d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd444a6f10a6bd366b158dcd9bdd3d7f757199f1cf4e650aab9fa38290219a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd444a6f10a6bd366b158dcd9bdd3d7f757199f1cf4e650aab9fa38290219a3b->enter($__internal_cd444a6f10a6bd366b158dcd9bdd3d7f757199f1cf4e650aab9fa38290219a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd444a6f10a6bd366b158dcd9bdd3d7f757199f1cf4e650aab9fa38290219a3b->leave($__internal_cd444a6f10a6bd366b158dcd9bdd3d7f757199f1cf4e650aab9fa38290219a3b_prof);

        
        $__internal_c88909d5a3a16e035d840b2801eef5daa41196aeaa71cdc62b30c6476949832d->leave($__internal_c88909d5a3a16e035d840b2801eef5daa41196aeaa71cdc62b30c6476949832d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0cce1c5070da5d1e1f244e5e1e84f420ad5ed37fbaa58fcb69e5b7708056d83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cce1c5070da5d1e1f244e5e1e84f420ad5ed37fbaa58fcb69e5b7708056d83e->enter($__internal_0cce1c5070da5d1e1f244e5e1e84f420ad5ed37fbaa58fcb69e5b7708056d83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_54ee832e9749883c348dd5666015d97bbecff3e42bda3bfe2ea59829c646ee60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ee832e9749883c348dd5666015d97bbecff3e42bda3bfe2ea59829c646ee60->enter($__internal_54ee832e9749883c348dd5666015d97bbecff3e42bda3bfe2ea59829c646ee60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_54ee832e9749883c348dd5666015d97bbecff3e42bda3bfe2ea59829c646ee60->leave($__internal_54ee832e9749883c348dd5666015d97bbecff3e42bda3bfe2ea59829c646ee60_prof);

        
        $__internal_0cce1c5070da5d1e1f244e5e1e84f420ad5ed37fbaa58fcb69e5b7708056d83e->leave($__internal_0cce1c5070da5d1e1f244e5e1e84f420ad5ed37fbaa58fcb69e5b7708056d83e_prof);

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
