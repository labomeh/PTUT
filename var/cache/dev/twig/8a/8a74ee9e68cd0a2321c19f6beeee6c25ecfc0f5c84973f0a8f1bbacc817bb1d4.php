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
        $__internal_f7c9701ea3d66a8baa2370c4d800a1799655249d272a3fb8abce5f1d0ea5008f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7c9701ea3d66a8baa2370c4d800a1799655249d272a3fb8abce5f1d0ea5008f->enter($__internal_f7c9701ea3d66a8baa2370c4d800a1799655249d272a3fb8abce5f1d0ea5008f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_50f6c637aa7e15766bae2bedfc1c107a6480b698cde12d0375a23e7d16059eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f6c637aa7e15766bae2bedfc1c107a6480b698cde12d0375a23e7d16059eca->enter($__internal_50f6c637aa7e15766bae2bedfc1c107a6480b698cde12d0375a23e7d16059eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_f7c9701ea3d66a8baa2370c4d800a1799655249d272a3fb8abce5f1d0ea5008f->leave($__internal_f7c9701ea3d66a8baa2370c4d800a1799655249d272a3fb8abce5f1d0ea5008f_prof);

        
        $__internal_50f6c637aa7e15766bae2bedfc1c107a6480b698cde12d0375a23e7d16059eca->leave($__internal_50f6c637aa7e15766bae2bedfc1c107a6480b698cde12d0375a23e7d16059eca_prof);

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
