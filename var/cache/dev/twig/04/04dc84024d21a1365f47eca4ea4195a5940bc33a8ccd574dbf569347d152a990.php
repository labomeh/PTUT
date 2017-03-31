<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0468f05df4181cc993fdbbb1cec4990b280077f600dc89689db138ed15838f93 extends Twig_Template
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
        $__internal_ccef4ca7a99dd9c4367c8281ae7323044ef52dfde76294da2593a0bdd5eaf523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccef4ca7a99dd9c4367c8281ae7323044ef52dfde76294da2593a0bdd5eaf523->enter($__internal_ccef4ca7a99dd9c4367c8281ae7323044ef52dfde76294da2593a0bdd5eaf523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e3c9fbccc3fa32543cf5fce4bc0a62ea48c17000634f7e2e19a3b2d04d6d25ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c9fbccc3fa32543cf5fce4bc0a62ea48c17000634f7e2e19a3b2d04d6d25ae->enter($__internal_e3c9fbccc3fa32543cf5fce4bc0a62ea48c17000634f7e2e19a3b2d04d6d25ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ccef4ca7a99dd9c4367c8281ae7323044ef52dfde76294da2593a0bdd5eaf523->leave($__internal_ccef4ca7a99dd9c4367c8281ae7323044ef52dfde76294da2593a0bdd5eaf523_prof);

        
        $__internal_e3c9fbccc3fa32543cf5fce4bc0a62ea48c17000634f7e2e19a3b2d04d6d25ae->leave($__internal_e3c9fbccc3fa32543cf5fce4bc0a62ea48c17000634f7e2e19a3b2d04d6d25ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
