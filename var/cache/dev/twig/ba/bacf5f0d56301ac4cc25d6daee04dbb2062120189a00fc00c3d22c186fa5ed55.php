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
        $__internal_da3d1806c1f4f7e0b6f7b5331acd7c7388ede8407463de2c20e99e10e4e1e9ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3d1806c1f4f7e0b6f7b5331acd7c7388ede8407463de2c20e99e10e4e1e9ad->enter($__internal_da3d1806c1f4f7e0b6f7b5331acd7c7388ede8407463de2c20e99e10e4e1e9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4c5465b74e2c51cecd635fd4bc319f933cf320137ccba6a74de020c75f551028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5465b74e2c51cecd635fd4bc319f933cf320137ccba6a74de020c75f551028->enter($__internal_4c5465b74e2c51cecd635fd4bc319f933cf320137ccba6a74de020c75f551028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_da3d1806c1f4f7e0b6f7b5331acd7c7388ede8407463de2c20e99e10e4e1e9ad->leave($__internal_da3d1806c1f4f7e0b6f7b5331acd7c7388ede8407463de2c20e99e10e4e1e9ad_prof);

        
        $__internal_4c5465b74e2c51cecd635fd4bc319f933cf320137ccba6a74de020c75f551028->leave($__internal_4c5465b74e2c51cecd635fd4bc319f933cf320137ccba6a74de020c75f551028_prof);

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
