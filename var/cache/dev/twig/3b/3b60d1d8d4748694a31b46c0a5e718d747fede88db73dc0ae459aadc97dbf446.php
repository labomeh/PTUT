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
        $__internal_08e71b412f8470cfeb744644de88f9af1a18c2fcd581840c5e3980158bd0a144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e71b412f8470cfeb744644de88f9af1a18c2fcd581840c5e3980158bd0a144->enter($__internal_08e71b412f8470cfeb744644de88f9af1a18c2fcd581840c5e3980158bd0a144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3905b7aa085b158ec18f0938985eed5b3486b5ba7c03076af52e17f492c6d9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3905b7aa085b158ec18f0938985eed5b3486b5ba7c03076af52e17f492c6d9e2->enter($__internal_3905b7aa085b158ec18f0938985eed5b3486b5ba7c03076af52e17f492c6d9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_08e71b412f8470cfeb744644de88f9af1a18c2fcd581840c5e3980158bd0a144->leave($__internal_08e71b412f8470cfeb744644de88f9af1a18c2fcd581840c5e3980158bd0a144_prof);

        
        $__internal_3905b7aa085b158ec18f0938985eed5b3486b5ba7c03076af52e17f492c6d9e2->leave($__internal_3905b7aa085b158ec18f0938985eed5b3486b5ba7c03076af52e17f492c6d9e2_prof);

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
