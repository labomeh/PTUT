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
        $__internal_13854f2b7bdec92dfaf3719674dba6ddd37ca852ca5c53b6c76289d5eeae8976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13854f2b7bdec92dfaf3719674dba6ddd37ca852ca5c53b6c76289d5eeae8976->enter($__internal_13854f2b7bdec92dfaf3719674dba6ddd37ca852ca5c53b6c76289d5eeae8976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_a7bdd0a4b8d2d3e0e5e126c432e7c973ecf3fb0512ddffdddbab723d74a806f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bdd0a4b8d2d3e0e5e126c432e7c973ecf3fb0512ddffdddbab723d74a806f1->enter($__internal_a7bdd0a4b8d2d3e0e5e126c432e7c973ecf3fb0512ddffdddbab723d74a806f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_13854f2b7bdec92dfaf3719674dba6ddd37ca852ca5c53b6c76289d5eeae8976->leave($__internal_13854f2b7bdec92dfaf3719674dba6ddd37ca852ca5c53b6c76289d5eeae8976_prof);

        
        $__internal_a7bdd0a4b8d2d3e0e5e126c432e7c973ecf3fb0512ddffdddbab723d74a806f1->leave($__internal_a7bdd0a4b8d2d3e0e5e126c432e7c973ecf3fb0512ddffdddbab723d74a806f1_prof);

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
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
