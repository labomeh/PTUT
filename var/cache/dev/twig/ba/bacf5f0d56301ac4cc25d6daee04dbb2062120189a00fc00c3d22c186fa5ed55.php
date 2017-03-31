<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f36809a933f07499a17a19595c53b10aa963ae08aa007722828a211328d0e041 extends Twig_Template
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
        $__internal_4d186cbaca4a8d72973fc82b6351c023a0cd9ca927deac2939eb71bf1da400d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d186cbaca4a8d72973fc82b6351c023a0cd9ca927deac2939eb71bf1da400d0->enter($__internal_4d186cbaca4a8d72973fc82b6351c023a0cd9ca927deac2939eb71bf1da400d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_cc135d4cc3e2351e2ea271f8077bb775d0bc6b7a82290995c88f5376c0e24099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc135d4cc3e2351e2ea271f8077bb775d0bc6b7a82290995c88f5376c0e24099->enter($__internal_cc135d4cc3e2351e2ea271f8077bb775d0bc6b7a82290995c88f5376c0e24099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4d186cbaca4a8d72973fc82b6351c023a0cd9ca927deac2939eb71bf1da400d0->leave($__internal_4d186cbaca4a8d72973fc82b6351c023a0cd9ca927deac2939eb71bf1da400d0_prof);

        
        $__internal_cc135d4cc3e2351e2ea271f8077bb775d0bc6b7a82290995c88f5376c0e24099->leave($__internal_cc135d4cc3e2351e2ea271f8077bb775d0bc6b7a82290995c88f5376c0e24099_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
