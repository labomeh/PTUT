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
        $__internal_e77a8fc0b84c17179e73486742fecce9b95a5fc18de387f0ee885999bb20a3bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77a8fc0b84c17179e73486742fecce9b95a5fc18de387f0ee885999bb20a3bf->enter($__internal_e77a8fc0b84c17179e73486742fecce9b95a5fc18de387f0ee885999bb20a3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_1a09c0ad38467d64c68de7e607fc977716e6d75fa5255649eee390df12d5e1d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a09c0ad38467d64c68de7e607fc977716e6d75fa5255649eee390df12d5e1d6->enter($__internal_1a09c0ad38467d64c68de7e607fc977716e6d75fa5255649eee390df12d5e1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e77a8fc0b84c17179e73486742fecce9b95a5fc18de387f0ee885999bb20a3bf->leave($__internal_e77a8fc0b84c17179e73486742fecce9b95a5fc18de387f0ee885999bb20a3bf_prof);

        
        $__internal_1a09c0ad38467d64c68de7e607fc977716e6d75fa5255649eee390df12d5e1d6->leave($__internal_1a09c0ad38467d64c68de7e607fc977716e6d75fa5255649eee390df12d5e1d6_prof);

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
