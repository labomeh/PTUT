<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_c4bd20018e0fbad59f3b7de5d1f00ccec1b0d56d952fd169bf466198bb251fef extends Twig_Template
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
        $__internal_7b89d16a66e71ebffaf7c969240c45c039b43929a635d24a5e176de8565c0b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b89d16a66e71ebffaf7c969240c45c039b43929a635d24a5e176de8565c0b0b->enter($__internal_7b89d16a66e71ebffaf7c969240c45c039b43929a635d24a5e176de8565c0b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2b09b24e7545ce35094d4ff46bb28543d7d5307952b8efdd0342317555d580ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b09b24e7545ce35094d4ff46bb28543d7d5307952b8efdd0342317555d580ff->enter($__internal_2b09b24e7545ce35094d4ff46bb28543d7d5307952b8efdd0342317555d580ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_7b89d16a66e71ebffaf7c969240c45c039b43929a635d24a5e176de8565c0b0b->leave($__internal_7b89d16a66e71ebffaf7c969240c45c039b43929a635d24a5e176de8565c0b0b_prof);

        
        $__internal_2b09b24e7545ce35094d4ff46bb28543d7d5307952b8efdd0342317555d580ff->leave($__internal_2b09b24e7545ce35094d4ff46bb28543d7d5307952b8efdd0342317555d580ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
