<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f52e31fbf87ff51ac6b3b3a5d70a0d2149ae3b1926e6e441cd6d6335239c6f2e extends Twig_Template
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
        $__internal_b2c28bf8ace080bb30c8b2db1da6dc68a3d205608def660c95a7f2ee9f82b37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c28bf8ace080bb30c8b2db1da6dc68a3d205608def660c95a7f2ee9f82b37d->enter($__internal_b2c28bf8ace080bb30c8b2db1da6dc68a3d205608def660c95a7f2ee9f82b37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_2b27a15393131a5ba481b2629209c1d138e5b38c9dde48e48f73bd998c8d4ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b27a15393131a5ba481b2629209c1d138e5b38c9dde48e48f73bd998c8d4ee8->enter($__internal_2b27a15393131a5ba481b2629209c1d138e5b38c9dde48e48f73bd998c8d4ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b2c28bf8ace080bb30c8b2db1da6dc68a3d205608def660c95a7f2ee9f82b37d->leave($__internal_b2c28bf8ace080bb30c8b2db1da6dc68a3d205608def660c95a7f2ee9f82b37d_prof);

        
        $__internal_2b27a15393131a5ba481b2629209c1d138e5b38c9dde48e48f73bd998c8d4ee8->leave($__internal_2b27a15393131a5ba481b2629209c1d138e5b38c9dde48e48f73bd998c8d4ee8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
