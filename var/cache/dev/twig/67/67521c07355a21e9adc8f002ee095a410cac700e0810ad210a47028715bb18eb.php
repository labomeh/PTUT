<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0b2e340029cc87b1c12b1220a336951822d49ce04d09d92fdb3a875c8bbc0834 extends Twig_Template
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
        $__internal_f095fd1b341c617fffc16aadaa742937c2e85a925afc80716b4b1839fc81e26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f095fd1b341c617fffc16aadaa742937c2e85a925afc80716b4b1839fc81e26c->enter($__internal_f095fd1b341c617fffc16aadaa742937c2e85a925afc80716b4b1839fc81e26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d1341f58d62fb6214bf27957c24de44a32cb71b0dc766c03cd2311230a45368b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1341f58d62fb6214bf27957c24de44a32cb71b0dc766c03cd2311230a45368b->enter($__internal_d1341f58d62fb6214bf27957c24de44a32cb71b0dc766c03cd2311230a45368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f095fd1b341c617fffc16aadaa742937c2e85a925afc80716b4b1839fc81e26c->leave($__internal_f095fd1b341c617fffc16aadaa742937c2e85a925afc80716b4b1839fc81e26c_prof);

        
        $__internal_d1341f58d62fb6214bf27957c24de44a32cb71b0dc766c03cd2311230a45368b->leave($__internal_d1341f58d62fb6214bf27957c24de44a32cb71b0dc766c03cd2311230a45368b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
