<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_54a401c09d8ea77c280ac987856b5d9d29383e87b33a18e4aed09b720cf07d61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64a102c795e36d2e3583826e2336156ee8976fd2ebc745f353188d1af7afe7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a102c795e36d2e3583826e2336156ee8976fd2ebc745f353188d1af7afe7ac->enter($__internal_64a102c795e36d2e3583826e2336156ee8976fd2ebc745f353188d1af7afe7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_86bb09b703f9a296aa4c0c8ee14db2d906d745949d8d7afa8eec05a644a5c3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86bb09b703f9a296aa4c0c8ee14db2d906d745949d8d7afa8eec05a644a5c3af->enter($__internal_86bb09b703f9a296aa4c0c8ee14db2d906d745949d8d7afa8eec05a644a5c3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_64a102c795e36d2e3583826e2336156ee8976fd2ebc745f353188d1af7afe7ac->leave($__internal_64a102c795e36d2e3583826e2336156ee8976fd2ebc745f353188d1af7afe7ac_prof);

        
        $__internal_86bb09b703f9a296aa4c0c8ee14db2d906d745949d8d7afa8eec05a644a5c3af->leave($__internal_86bb09b703f9a296aa4c0c8ee14db2d906d745949d8d7afa8eec05a644a5c3af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
