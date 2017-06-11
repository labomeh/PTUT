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
        $__internal_e5dc6db5dc54bbf324e5e25181d81ea5897e2575dcb880383aca23c59c1e09ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5dc6db5dc54bbf324e5e25181d81ea5897e2575dcb880383aca23c59c1e09ca->enter($__internal_e5dc6db5dc54bbf324e5e25181d81ea5897e2575dcb880383aca23c59c1e09ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_1c5790f62cab84c45b07908a52ae5eae95cdce6ec0a95bdf081735270a47baf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5790f62cab84c45b07908a52ae5eae95cdce6ec0a95bdf081735270a47baf2->enter($__internal_1c5790f62cab84c45b07908a52ae5eae95cdce6ec0a95bdf081735270a47baf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_e5dc6db5dc54bbf324e5e25181d81ea5897e2575dcb880383aca23c59c1e09ca->leave($__internal_e5dc6db5dc54bbf324e5e25181d81ea5897e2575dcb880383aca23c59c1e09ca_prof);

        
        $__internal_1c5790f62cab84c45b07908a52ae5eae95cdce6ec0a95bdf081735270a47baf2->leave($__internal_1c5790f62cab84c45b07908a52ae5eae95cdce6ec0a95bdf081735270a47baf2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_885ebf4a69bb57b465dd1815ae06593b9e7d56a8d707630df696ea4bb83a4122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885ebf4a69bb57b465dd1815ae06593b9e7d56a8d707630df696ea4bb83a4122->enter($__internal_885ebf4a69bb57b465dd1815ae06593b9e7d56a8d707630df696ea4bb83a4122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b793e2ad49e4d993885686d4db8079242e441ae8720113211a065f4fc79a8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b793e2ad49e4d993885686d4db8079242e441ae8720113211a065f4fc79a8af->enter($__internal_8b793e2ad49e4d993885686d4db8079242e441ae8720113211a065f4fc79a8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8b793e2ad49e4d993885686d4db8079242e441ae8720113211a065f4fc79a8af->leave($__internal_8b793e2ad49e4d993885686d4db8079242e441ae8720113211a065f4fc79a8af_prof);

        
        $__internal_885ebf4a69bb57b465dd1815ae06593b9e7d56a8d707630df696ea4bb83a4122->leave($__internal_885ebf4a69bb57b465dd1815ae06593b9e7d56a8d707630df696ea4bb83a4122_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3da9a96a67ad4bf96f2cca47bec2e8182afcb7440367e679bc38088efed7e17b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3da9a96a67ad4bf96f2cca47bec2e8182afcb7440367e679bc38088efed7e17b->enter($__internal_3da9a96a67ad4bf96f2cca47bec2e8182afcb7440367e679bc38088efed7e17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f2d1904da55565f9a2b1a895374a3657b79a0c5fe5a57d076cebb4a702cd5685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d1904da55565f9a2b1a895374a3657b79a0c5fe5a57d076cebb4a702cd5685->enter($__internal_f2d1904da55565f9a2b1a895374a3657b79a0c5fe5a57d076cebb4a702cd5685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f2d1904da55565f9a2b1a895374a3657b79a0c5fe5a57d076cebb4a702cd5685->leave($__internal_f2d1904da55565f9a2b1a895374a3657b79a0c5fe5a57d076cebb4a702cd5685_prof);

        
        $__internal_3da9a96a67ad4bf96f2cca47bec2e8182afcb7440367e679bc38088efed7e17b->leave($__internal_3da9a96a67ad4bf96f2cca47bec2e8182afcb7440367e679bc38088efed7e17b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_518a0a5a84078745d255d2f31579037d7fb54d9d204a1309959f4651b8f5622d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518a0a5a84078745d255d2f31579037d7fb54d9d204a1309959f4651b8f5622d->enter($__internal_518a0a5a84078745d255d2f31579037d7fb54d9d204a1309959f4651b8f5622d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf888191be53a818c050b195a02bdfba7e103fc6f42c8f31caf7ce08718db97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf888191be53a818c050b195a02bdfba7e103fc6f42c8f31caf7ce08718db97b->enter($__internal_cf888191be53a818c050b195a02bdfba7e103fc6f42c8f31caf7ce08718db97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cf888191be53a818c050b195a02bdfba7e103fc6f42c8f31caf7ce08718db97b->leave($__internal_cf888191be53a818c050b195a02bdfba7e103fc6f42c8f31caf7ce08718db97b_prof);

        
        $__internal_518a0a5a84078745d255d2f31579037d7fb54d9d204a1309959f4651b8f5622d->leave($__internal_518a0a5a84078745d255d2f31579037d7fb54d9d204a1309959f4651b8f5622d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8851aa1a57f8396b86165df97cd48de7b4d2c7b738e1ec36ed4ad9a96fe2877f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8851aa1a57f8396b86165df97cd48de7b4d2c7b738e1ec36ed4ad9a96fe2877f->enter($__internal_8851aa1a57f8396b86165df97cd48de7b4d2c7b738e1ec36ed4ad9a96fe2877f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_436b2e8042b0173b3d0ec4d1660dcf986483c6ce18a85bce501e4933cb99ad3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436b2e8042b0173b3d0ec4d1660dcf986483c6ce18a85bce501e4933cb99ad3d->enter($__internal_436b2e8042b0173b3d0ec4d1660dcf986483c6ce18a85bce501e4933cb99ad3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_436b2e8042b0173b3d0ec4d1660dcf986483c6ce18a85bce501e4933cb99ad3d->leave($__internal_436b2e8042b0173b3d0ec4d1660dcf986483c6ce18a85bce501e4933cb99ad3d_prof);

        
        $__internal_8851aa1a57f8396b86165df97cd48de7b4d2c7b738e1ec36ed4ad9a96fe2877f->leave($__internal_8851aa1a57f8396b86165df97cd48de7b4d2c7b738e1ec36ed4ad9a96fe2877f_prof);

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
