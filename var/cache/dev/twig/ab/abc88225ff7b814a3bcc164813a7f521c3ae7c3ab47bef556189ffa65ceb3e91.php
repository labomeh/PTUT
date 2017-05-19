<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f678339ef624e0a41259bde234ed5b2a1c12f9e1b385bfb0965c06697d63feda extends Twig_Template
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
        $__internal_6d97de7a5d52ae95da82839a0189e2eac3df4a43c622f7924750b54bf9450be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d97de7a5d52ae95da82839a0189e2eac3df4a43c622f7924750b54bf9450be7->enter($__internal_6d97de7a5d52ae95da82839a0189e2eac3df4a43c622f7924750b54bf9450be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_30288147d05c9624bcb858f90db919459887ce285a9db0f484d80f37c514dcee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30288147d05c9624bcb858f90db919459887ce285a9db0f484d80f37c514dcee->enter($__internal_30288147d05c9624bcb858f90db919459887ce285a9db0f484d80f37c514dcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6d97de7a5d52ae95da82839a0189e2eac3df4a43c622f7924750b54bf9450be7->leave($__internal_6d97de7a5d52ae95da82839a0189e2eac3df4a43c622f7924750b54bf9450be7_prof);

        
        $__internal_30288147d05c9624bcb858f90db919459887ce285a9db0f484d80f37c514dcee->leave($__internal_30288147d05c9624bcb858f90db919459887ce285a9db0f484d80f37c514dcee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
