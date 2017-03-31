<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3dd3fcec98b9598adbbda2902b15ece9856c667421bac9f24eff70e939156bf extends Twig_Template
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
        $__internal_c0d15da7a79ccaa6b2857ab717184fe0855af437d332aa0220e0b58fbaa50469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d15da7a79ccaa6b2857ab717184fe0855af437d332aa0220e0b58fbaa50469->enter($__internal_c0d15da7a79ccaa6b2857ab717184fe0855af437d332aa0220e0b58fbaa50469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ff4d29d39db98fba1e16089923e00a5357c671dcf1fc66b4062de47393e9d180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff4d29d39db98fba1e16089923e00a5357c671dcf1fc66b4062de47393e9d180->enter($__internal_ff4d29d39db98fba1e16089923e00a5357c671dcf1fc66b4062de47393e9d180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c0d15da7a79ccaa6b2857ab717184fe0855af437d332aa0220e0b58fbaa50469->leave($__internal_c0d15da7a79ccaa6b2857ab717184fe0855af437d332aa0220e0b58fbaa50469_prof);

        
        $__internal_ff4d29d39db98fba1e16089923e00a5357c671dcf1fc66b4062de47393e9d180->leave($__internal_ff4d29d39db98fba1e16089923e00a5357c671dcf1fc66b4062de47393e9d180_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
