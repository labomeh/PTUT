<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_24079ab91f6fc05b0786c44f0732f4460ad51d3629e8245f249e9cd450444fb4 extends Twig_Template
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
        $__internal_98c4adec1be1e955b1be94a67fca897dc2fa61f24c83382d30c768424c10fd52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98c4adec1be1e955b1be94a67fca897dc2fa61f24c83382d30c768424c10fd52->enter($__internal_98c4adec1be1e955b1be94a67fca897dc2fa61f24c83382d30c768424c10fd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_ae84456491a0de278a3fc967ab4b3eb1541b66b7216dbb97113413db79fdeecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae84456491a0de278a3fc967ab4b3eb1541b66b7216dbb97113413db79fdeecc->enter($__internal_ae84456491a0de278a3fc967ab4b3eb1541b66b7216dbb97113413db79fdeecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_98c4adec1be1e955b1be94a67fca897dc2fa61f24c83382d30c768424c10fd52->leave($__internal_98c4adec1be1e955b1be94a67fca897dc2fa61f24c83382d30c768424c10fd52_prof);

        
        $__internal_ae84456491a0de278a3fc967ab4b3eb1541b66b7216dbb97113413db79fdeecc->leave($__internal_ae84456491a0de278a3fc967ab4b3eb1541b66b7216dbb97113413db79fdeecc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
