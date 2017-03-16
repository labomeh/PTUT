<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_ad3d50a8c1716d27acccfd469660829cc3a9cac32557a1577eab2d7fd7e5c8a8 extends Twig_Template
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
        $__internal_4b6d3c6ec496cba36424bfd1e067b5964cf4d1fea834c92e64c405d4915cb9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6d3c6ec496cba36424bfd1e067b5964cf4d1fea834c92e64c405d4915cb9e5->enter($__internal_4b6d3c6ec496cba36424bfd1e067b5964cf4d1fea834c92e64c405d4915cb9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_cc091247fbfeb57843ff1e9db2517ec143d52577e587c65d49b7a2e98f202c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc091247fbfeb57843ff1e9db2517ec143d52577e587c65d49b7a2e98f202c36->enter($__internal_cc091247fbfeb57843ff1e9db2517ec143d52577e587c65d49b7a2e98f202c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4b6d3c6ec496cba36424bfd1e067b5964cf4d1fea834c92e64c405d4915cb9e5->leave($__internal_4b6d3c6ec496cba36424bfd1e067b5964cf4d1fea834c92e64c405d4915cb9e5_prof);

        
        $__internal_cc091247fbfeb57843ff1e9db2517ec143d52577e587c65d49b7a2e98f202c36->leave($__internal_cc091247fbfeb57843ff1e9db2517ec143d52577e587c65d49b7a2e98f202c36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
