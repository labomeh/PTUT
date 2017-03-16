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
        $__internal_e9eff2c1be128f2c9a8af0e11a90e6b4d93f89ec03c201dbd94002e809265393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9eff2c1be128f2c9a8af0e11a90e6b4d93f89ec03c201dbd94002e809265393->enter($__internal_e9eff2c1be128f2c9a8af0e11a90e6b4d93f89ec03c201dbd94002e809265393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_69c23db64349d673c62c0760f48140f27d4ed6d79ec54961036b3fd029dc1cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c23db64349d673c62c0760f48140f27d4ed6d79ec54961036b3fd029dc1cfa->enter($__internal_69c23db64349d673c62c0760f48140f27d4ed6d79ec54961036b3fd029dc1cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e9eff2c1be128f2c9a8af0e11a90e6b4d93f89ec03c201dbd94002e809265393->leave($__internal_e9eff2c1be128f2c9a8af0e11a90e6b4d93f89ec03c201dbd94002e809265393_prof);

        
        $__internal_69c23db64349d673c62c0760f48140f27d4ed6d79ec54961036b3fd029dc1cfa->leave($__internal_69c23db64349d673c62c0760f48140f27d4ed6d79ec54961036b3fd029dc1cfa_prof);

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
