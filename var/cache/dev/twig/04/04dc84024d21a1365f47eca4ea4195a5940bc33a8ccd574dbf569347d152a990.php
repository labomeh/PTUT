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
        $__internal_aaef7e827f308a28db224672c61672d97d92c401a1d6db74ee96afe5f5f7268c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaef7e827f308a28db224672c61672d97d92c401a1d6db74ee96afe5f5f7268c->enter($__internal_aaef7e827f308a28db224672c61672d97d92c401a1d6db74ee96afe5f5f7268c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8e887de60a46a1471e80997c6240caee013b16caa4393c50a2fa58ef1e3aa3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e887de60a46a1471e80997c6240caee013b16caa4393c50a2fa58ef1e3aa3c3->enter($__internal_8e887de60a46a1471e80997c6240caee013b16caa4393c50a2fa58ef1e3aa3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_aaef7e827f308a28db224672c61672d97d92c401a1d6db74ee96afe5f5f7268c->leave($__internal_aaef7e827f308a28db224672c61672d97d92c401a1d6db74ee96afe5f5f7268c_prof);

        
        $__internal_8e887de60a46a1471e80997c6240caee013b16caa4393c50a2fa58ef1e3aa3c3->leave($__internal_8e887de60a46a1471e80997c6240caee013b16caa4393c50a2fa58ef1e3aa3c3_prof);

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
