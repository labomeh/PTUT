<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd6bde29c12e4a2fad6dc1d6352473d5a801a0fc30fd61fb769919c8608a3c95 extends Twig_Template
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
        $__internal_70c7f246634d0a37a9de2796f4bb1865e0c2b60e7cdd19fda7f914b2aa471e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c7f246634d0a37a9de2796f4bb1865e0c2b60e7cdd19fda7f914b2aa471e13->enter($__internal_70c7f246634d0a37a9de2796f4bb1865e0c2b60e7cdd19fda7f914b2aa471e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_2239b84fddbf79c57d71b5e2c73176ca1860e3451d82c8ae563ddc4f37261ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2239b84fddbf79c57d71b5e2c73176ca1860e3451d82c8ae563ddc4f37261ce4->enter($__internal_2239b84fddbf79c57d71b5e2c73176ca1860e3451d82c8ae563ddc4f37261ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_70c7f246634d0a37a9de2796f4bb1865e0c2b60e7cdd19fda7f914b2aa471e13->leave($__internal_70c7f246634d0a37a9de2796f4bb1865e0c2b60e7cdd19fda7f914b2aa471e13_prof);

        
        $__internal_2239b84fddbf79c57d71b5e2c73176ca1860e3451d82c8ae563ddc4f37261ce4->leave($__internal_2239b84fddbf79c57d71b5e2c73176ca1860e3451d82c8ae563ddc4f37261ce4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
