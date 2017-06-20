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
        $__internal_38fbbb633f9d6f161c1396748017dcad2d5d4a59b726c61095515a35e9017b5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fbbb633f9d6f161c1396748017dcad2d5d4a59b726c61095515a35e9017b5b->enter($__internal_38fbbb633f9d6f161c1396748017dcad2d5d4a59b726c61095515a35e9017b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_953a6a4a8c77605d4955329b5b4b4f19808799c3cad4296c910438aaae37c8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953a6a4a8c77605d4955329b5b4b4f19808799c3cad4296c910438aaae37c8c3->enter($__internal_953a6a4a8c77605d4955329b5b4b4f19808799c3cad4296c910438aaae37c8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_38fbbb633f9d6f161c1396748017dcad2d5d4a59b726c61095515a35e9017b5b->leave($__internal_38fbbb633f9d6f161c1396748017dcad2d5d4a59b726c61095515a35e9017b5b_prof);

        
        $__internal_953a6a4a8c77605d4955329b5b4b4f19808799c3cad4296c910438aaae37c8c3->leave($__internal_953a6a4a8c77605d4955329b5b4b4f19808799c3cad4296c910438aaae37c8c3_prof);

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
