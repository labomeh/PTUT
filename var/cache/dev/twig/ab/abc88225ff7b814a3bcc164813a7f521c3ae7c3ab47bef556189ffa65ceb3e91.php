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
        $__internal_d4d67cdef34c3554da2bf7f75054ae1ec975909eaf5e3929ce8a35a698b0ad80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d67cdef34c3554da2bf7f75054ae1ec975909eaf5e3929ce8a35a698b0ad80->enter($__internal_d4d67cdef34c3554da2bf7f75054ae1ec975909eaf5e3929ce8a35a698b0ad80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_64f9fb36f215b826a5884b171ec023fbf16380b3c00692715f0d96af45d41106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f9fb36f215b826a5884b171ec023fbf16380b3c00692715f0d96af45d41106->enter($__internal_64f9fb36f215b826a5884b171ec023fbf16380b3c00692715f0d96af45d41106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d4d67cdef34c3554da2bf7f75054ae1ec975909eaf5e3929ce8a35a698b0ad80->leave($__internal_d4d67cdef34c3554da2bf7f75054ae1ec975909eaf5e3929ce8a35a698b0ad80_prof);

        
        $__internal_64f9fb36f215b826a5884b171ec023fbf16380b3c00692715f0d96af45d41106->leave($__internal_64f9fb36f215b826a5884b171ec023fbf16380b3c00692715f0d96af45d41106_prof);

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
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
