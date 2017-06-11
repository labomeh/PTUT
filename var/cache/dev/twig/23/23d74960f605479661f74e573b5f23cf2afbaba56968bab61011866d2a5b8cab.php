<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f8d837562761f99e567bcf8958a6c7f32e26a7929e143cf261520b2ead9a6c3b extends Twig_Template
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
        $__internal_b3732143fa60ff3b7d5d1e596e19e50f18ba20beb95d1df3f6e7fcc74d8aaca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3732143fa60ff3b7d5d1e596e19e50f18ba20beb95d1df3f6e7fcc74d8aaca5->enter($__internal_b3732143fa60ff3b7d5d1e596e19e50f18ba20beb95d1df3f6e7fcc74d8aaca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_19128d4342573ec2856914a7ecc92b1e16a46d7334cf3446efd579f2a614378e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19128d4342573ec2856914a7ecc92b1e16a46d7334cf3446efd579f2a614378e->enter($__internal_19128d4342573ec2856914a7ecc92b1e16a46d7334cf3446efd579f2a614378e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b3732143fa60ff3b7d5d1e596e19e50f18ba20beb95d1df3f6e7fcc74d8aaca5->leave($__internal_b3732143fa60ff3b7d5d1e596e19e50f18ba20beb95d1df3f6e7fcc74d8aaca5_prof);

        
        $__internal_19128d4342573ec2856914a7ecc92b1e16a46d7334cf3446efd579f2a614378e->leave($__internal_19128d4342573ec2856914a7ecc92b1e16a46d7334cf3446efd579f2a614378e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
