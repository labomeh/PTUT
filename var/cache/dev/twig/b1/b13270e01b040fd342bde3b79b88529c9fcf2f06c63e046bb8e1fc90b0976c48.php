<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_dd6f62aabeabb6197b082c73db7443d8e7c964246268d174b1d954b634973fa5 extends Twig_Template
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
        $__internal_085e0e4387dbd305cdf56dc708f4225d92f8d6af0d8d4e88f4d75bcf7222c5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085e0e4387dbd305cdf56dc708f4225d92f8d6af0d8d4e88f4d75bcf7222c5e7->enter($__internal_085e0e4387dbd305cdf56dc708f4225d92f8d6af0d8d4e88f4d75bcf7222c5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_8542bd6a10ca468141f1ec0f60f58784d5f97ed1b65fc6a22852a0c0d17fb39c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8542bd6a10ca468141f1ec0f60f58784d5f97ed1b65fc6a22852a0c0d17fb39c->enter($__internal_8542bd6a10ca468141f1ec0f60f58784d5f97ed1b65fc6a22852a0c0d17fb39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_085e0e4387dbd305cdf56dc708f4225d92f8d6af0d8d4e88f4d75bcf7222c5e7->leave($__internal_085e0e4387dbd305cdf56dc708f4225d92f8d6af0d8d4e88f4d75bcf7222c5e7_prof);

        
        $__internal_8542bd6a10ca468141f1ec0f60f58784d5f97ed1b65fc6a22852a0c0d17fb39c->leave($__internal_8542bd6a10ca468141f1ec0f60f58784d5f97ed1b65fc6a22852a0c0d17fb39c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
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
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
