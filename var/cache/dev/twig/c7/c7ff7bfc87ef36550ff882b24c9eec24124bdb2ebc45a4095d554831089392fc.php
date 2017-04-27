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
        $__internal_77d046335575e4027bf959339fcf9e67369296ec29a59b12c0dc139c2e293fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d046335575e4027bf959339fcf9e67369296ec29a59b12c0dc139c2e293fae->enter($__internal_77d046335575e4027bf959339fcf9e67369296ec29a59b12c0dc139c2e293fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_911be0d2b0e9a41b158afc635cf80ebe38cf52ef810d6da84c04b0e105867669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911be0d2b0e9a41b158afc635cf80ebe38cf52ef810d6da84c04b0e105867669->enter($__internal_911be0d2b0e9a41b158afc635cf80ebe38cf52ef810d6da84c04b0e105867669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_77d046335575e4027bf959339fcf9e67369296ec29a59b12c0dc139c2e293fae->leave($__internal_77d046335575e4027bf959339fcf9e67369296ec29a59b12c0dc139c2e293fae_prof);

        
        $__internal_911be0d2b0e9a41b158afc635cf80ebe38cf52ef810d6da84c04b0e105867669->leave($__internal_911be0d2b0e9a41b158afc635cf80ebe38cf52ef810d6da84c04b0e105867669_prof);

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
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
