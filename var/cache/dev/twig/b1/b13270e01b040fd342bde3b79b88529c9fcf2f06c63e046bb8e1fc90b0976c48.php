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
        $__internal_85e4fb3aedabbf4fc80fc859edaf346f238ee7c59ac17e9ec74e8fe270eb3d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e4fb3aedabbf4fc80fc859edaf346f238ee7c59ac17e9ec74e8fe270eb3d75->enter($__internal_85e4fb3aedabbf4fc80fc859edaf346f238ee7c59ac17e9ec74e8fe270eb3d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_5315eb0d9b5fe9052c6a8c9fd0357a78a11faa5a728f1197b7c273b24f03c737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5315eb0d9b5fe9052c6a8c9fd0357a78a11faa5a728f1197b7c273b24f03c737->enter($__internal_5315eb0d9b5fe9052c6a8c9fd0357a78a11faa5a728f1197b7c273b24f03c737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_85e4fb3aedabbf4fc80fc859edaf346f238ee7c59ac17e9ec74e8fe270eb3d75->leave($__internal_85e4fb3aedabbf4fc80fc859edaf346f238ee7c59ac17e9ec74e8fe270eb3d75_prof);

        
        $__internal_5315eb0d9b5fe9052c6a8c9fd0357a78a11faa5a728f1197b7c273b24f03c737->leave($__internal_5315eb0d9b5fe9052c6a8c9fd0357a78a11faa5a728f1197b7c273b24f03c737_prof);

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
", "@Framework/Form/form_start.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
