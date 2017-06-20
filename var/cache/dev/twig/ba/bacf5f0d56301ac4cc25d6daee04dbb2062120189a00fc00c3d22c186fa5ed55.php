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
        $__internal_7ae877bca6b335a0d38883e73de1f24900612f87e08de854c81a343de7a48e0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae877bca6b335a0d38883e73de1f24900612f87e08de854c81a343de7a48e0f->enter($__internal_7ae877bca6b335a0d38883e73de1f24900612f87e08de854c81a343de7a48e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_710d6bdd89069571ae5086c8cd0592b580a5642a004687e30fd0cf2fce5db2f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710d6bdd89069571ae5086c8cd0592b580a5642a004687e30fd0cf2fce5db2f1->enter($__internal_710d6bdd89069571ae5086c8cd0592b580a5642a004687e30fd0cf2fce5db2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7ae877bca6b335a0d38883e73de1f24900612f87e08de854c81a343de7a48e0f->leave($__internal_7ae877bca6b335a0d38883e73de1f24900612f87e08de854c81a343de7a48e0f_prof);

        
        $__internal_710d6bdd89069571ae5086c8cd0592b580a5642a004687e30fd0cf2fce5db2f1->leave($__internal_710d6bdd89069571ae5086c8cd0592b580a5642a004687e30fd0cf2fce5db2f1_prof);

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
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
