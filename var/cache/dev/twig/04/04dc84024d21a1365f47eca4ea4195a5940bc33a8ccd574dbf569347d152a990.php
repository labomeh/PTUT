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
        $__internal_20225ea3738cfa580234254e6969d50818b094a4fcdeaf35872da7ae85abe857 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20225ea3738cfa580234254e6969d50818b094a4fcdeaf35872da7ae85abe857->enter($__internal_20225ea3738cfa580234254e6969d50818b094a4fcdeaf35872da7ae85abe857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b037a5b9fa80dd121b0ab35b652b7e476c0d2b396fb108cb0c528be5557123bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b037a5b9fa80dd121b0ab35b652b7e476c0d2b396fb108cb0c528be5557123bc->enter($__internal_b037a5b9fa80dd121b0ab35b652b7e476c0d2b396fb108cb0c528be5557123bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_20225ea3738cfa580234254e6969d50818b094a4fcdeaf35872da7ae85abe857->leave($__internal_20225ea3738cfa580234254e6969d50818b094a4fcdeaf35872da7ae85abe857_prof);

        
        $__internal_b037a5b9fa80dd121b0ab35b652b7e476c0d2b396fb108cb0c528be5557123bc->leave($__internal_b037a5b9fa80dd121b0ab35b652b7e476c0d2b396fb108cb0c528be5557123bc_prof);

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
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
