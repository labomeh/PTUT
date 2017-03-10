<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e432fa73a058f70d30e9978766f6e9408635326f35acf1010844c97d20c7465e extends Twig_Template
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
        $__internal_9f617d34a7b8bfd6a4e724f1d5e44dc0411288ae4881ec00a02825d92c1e7a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f617d34a7b8bfd6a4e724f1d5e44dc0411288ae4881ec00a02825d92c1e7a25->enter($__internal_9f617d34a7b8bfd6a4e724f1d5e44dc0411288ae4881ec00a02825d92c1e7a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8c9c63ebe0f7d6170c2e777e967d162c4988104e5fbc75ab32307f5ad18a997b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9c63ebe0f7d6170c2e777e967d162c4988104e5fbc75ab32307f5ad18a997b->enter($__internal_8c9c63ebe0f7d6170c2e777e967d162c4988104e5fbc75ab32307f5ad18a997b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9f617d34a7b8bfd6a4e724f1d5e44dc0411288ae4881ec00a02825d92c1e7a25->leave($__internal_9f617d34a7b8bfd6a4e724f1d5e44dc0411288ae4881ec00a02825d92c1e7a25_prof);

        
        $__internal_8c9c63ebe0f7d6170c2e777e967d162c4988104e5fbc75ab32307f5ad18a997b->leave($__internal_8c9c63ebe0f7d6170c2e777e967d162c4988104e5fbc75ab32307f5ad18a997b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
