<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ba06bfa98ee853a1a747b17506774099e14f6edcf9c831b8415133f93f46ac9d extends Twig_Template
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
        $__internal_c3c886d94b0f929855bb6b14940eb23aa0db7108f1cc6b38aeacb00f0b3b712f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c886d94b0f929855bb6b14940eb23aa0db7108f1cc6b38aeacb00f0b3b712f->enter($__internal_c3c886d94b0f929855bb6b14940eb23aa0db7108f1cc6b38aeacb00f0b3b712f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_22d5f96dc45753da5794247fb1326cc59e4eccb7ab34f9ec96b834019f59a84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d5f96dc45753da5794247fb1326cc59e4eccb7ab34f9ec96b834019f59a84f->enter($__internal_22d5f96dc45753da5794247fb1326cc59e4eccb7ab34f9ec96b834019f59a84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c3c886d94b0f929855bb6b14940eb23aa0db7108f1cc6b38aeacb00f0b3b712f->leave($__internal_c3c886d94b0f929855bb6b14940eb23aa0db7108f1cc6b38aeacb00f0b3b712f_prof);

        
        $__internal_22d5f96dc45753da5794247fb1326cc59e4eccb7ab34f9ec96b834019f59a84f->leave($__internal_22d5f96dc45753da5794247fb1326cc59e4eccb7ab34f9ec96b834019f59a84f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
