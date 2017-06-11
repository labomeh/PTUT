<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e432fa73a058f70d30e9978766f6e9408635326f35acf1010844c97d20c7465e extends Twig_Template
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
        $__internal_266191b91b228c7d42873d20ac55914c1c7e0077a7b2b7642e1ec5f8ded33170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266191b91b228c7d42873d20ac55914c1c7e0077a7b2b7642e1ec5f8ded33170->enter($__internal_266191b91b228c7d42873d20ac55914c1c7e0077a7b2b7642e1ec5f8ded33170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b3ee220dce0378f631b1ffebe38647474e1645c3a0bdaed289158909904166b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ee220dce0378f631b1ffebe38647474e1645c3a0bdaed289158909904166b0->enter($__internal_b3ee220dce0378f631b1ffebe38647474e1645c3a0bdaed289158909904166b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_266191b91b228c7d42873d20ac55914c1c7e0077a7b2b7642e1ec5f8ded33170->leave($__internal_266191b91b228c7d42873d20ac55914c1c7e0077a7b2b7642e1ec5f8ded33170_prof);

        
        $__internal_b3ee220dce0378f631b1ffebe38647474e1645c3a0bdaed289158909904166b0->leave($__internal_b3ee220dce0378f631b1ffebe38647474e1645c3a0bdaed289158909904166b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
