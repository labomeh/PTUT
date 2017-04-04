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
        $__internal_eff6b8ae4e3b2bbc2475d72d135e82d8a215728ab1b33d416622478a6f6f57cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff6b8ae4e3b2bbc2475d72d135e82d8a215728ab1b33d416622478a6f6f57cc->enter($__internal_eff6b8ae4e3b2bbc2475d72d135e82d8a215728ab1b33d416622478a6f6f57cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_07fc4729c9b18c01880d73f72d3cad7e7aa8fd942d6f08ae80121a3baffd0808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fc4729c9b18c01880d73f72d3cad7e7aa8fd942d6f08ae80121a3baffd0808->enter($__internal_07fc4729c9b18c01880d73f72d3cad7e7aa8fd942d6f08ae80121a3baffd0808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_eff6b8ae4e3b2bbc2475d72d135e82d8a215728ab1b33d416622478a6f6f57cc->leave($__internal_eff6b8ae4e3b2bbc2475d72d135e82d8a215728ab1b33d416622478a6f6f57cc_prof);

        
        $__internal_07fc4729c9b18c01880d73f72d3cad7e7aa8fd942d6f08ae80121a3baffd0808->leave($__internal_07fc4729c9b18c01880d73f72d3cad7e7aa8fd942d6f08ae80121a3baffd0808_prof);

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
