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
        $__internal_35acdb8952f482be2b160aa78b8e0a12ae24cd5e1842931be3e6c13bb3ef8c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35acdb8952f482be2b160aa78b8e0a12ae24cd5e1842931be3e6c13bb3ef8c8f->enter($__internal_35acdb8952f482be2b160aa78b8e0a12ae24cd5e1842931be3e6c13bb3ef8c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_10f1729a3a307320d1977a71539d22b177c2d9bd7d9b8c01ada5b6a417a53366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f1729a3a307320d1977a71539d22b177c2d9bd7d9b8c01ada5b6a417a53366->enter($__internal_10f1729a3a307320d1977a71539d22b177c2d9bd7d9b8c01ada5b6a417a53366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_35acdb8952f482be2b160aa78b8e0a12ae24cd5e1842931be3e6c13bb3ef8c8f->leave($__internal_35acdb8952f482be2b160aa78b8e0a12ae24cd5e1842931be3e6c13bb3ef8c8f_prof);

        
        $__internal_10f1729a3a307320d1977a71539d22b177c2d9bd7d9b8c01ada5b6a417a53366->leave($__internal_10f1729a3a307320d1977a71539d22b177c2d9bd7d9b8c01ada5b6a417a53366_prof);

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
