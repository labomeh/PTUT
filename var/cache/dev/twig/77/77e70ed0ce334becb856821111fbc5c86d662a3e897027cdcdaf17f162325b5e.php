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
        $__internal_0253932986a5cb931287bfd5684e963791a3d27a5767e01f58daeb71bab0f3d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0253932986a5cb931287bfd5684e963791a3d27a5767e01f58daeb71bab0f3d8->enter($__internal_0253932986a5cb931287bfd5684e963791a3d27a5767e01f58daeb71bab0f3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_11cef444b26500baba9830103726b6e9f67d8e4f4c8349ccafe632d3315c3572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11cef444b26500baba9830103726b6e9f67d8e4f4c8349ccafe632d3315c3572->enter($__internal_11cef444b26500baba9830103726b6e9f67d8e4f4c8349ccafe632d3315c3572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0253932986a5cb931287bfd5684e963791a3d27a5767e01f58daeb71bab0f3d8->leave($__internal_0253932986a5cb931287bfd5684e963791a3d27a5767e01f58daeb71bab0f3d8_prof);

        
        $__internal_11cef444b26500baba9830103726b6e9f67d8e4f4c8349ccafe632d3315c3572->leave($__internal_11cef444b26500baba9830103726b6e9f67d8e4f4c8349ccafe632d3315c3572_prof);

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
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
