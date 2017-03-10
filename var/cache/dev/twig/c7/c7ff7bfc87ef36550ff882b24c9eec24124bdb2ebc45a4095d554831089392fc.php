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
        $__internal_d3238d3c37b5412c1072acaf67a4ff4f37d320e8178e44ae30c9e4433ec51ac9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3238d3c37b5412c1072acaf67a4ff4f37d320e8178e44ae30c9e4433ec51ac9->enter($__internal_d3238d3c37b5412c1072acaf67a4ff4f37d320e8178e44ae30c9e4433ec51ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_40fb39c1661708b696f1c93453275c2689c68e73ee99dcb0bee27a7fcfc7cd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fb39c1661708b696f1c93453275c2689c68e73ee99dcb0bee27a7fcfc7cd61->enter($__internal_40fb39c1661708b696f1c93453275c2689c68e73ee99dcb0bee27a7fcfc7cd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d3238d3c37b5412c1072acaf67a4ff4f37d320e8178e44ae30c9e4433ec51ac9->leave($__internal_d3238d3c37b5412c1072acaf67a4ff4f37d320e8178e44ae30c9e4433ec51ac9_prof);

        
        $__internal_40fb39c1661708b696f1c93453275c2689c68e73ee99dcb0bee27a7fcfc7cd61->leave($__internal_40fb39c1661708b696f1c93453275c2689c68e73ee99dcb0bee27a7fcfc7cd61_prof);

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
