<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2b975ac0ecdcb0b8f9ba78ebecd896e0eb47be8a32c32d0511fde3011742e0bf extends Twig_Template
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
        $__internal_73943971513d8ea09c545106d73d5e0afb2938ec03d5098a2fb70b6afa1d6fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73943971513d8ea09c545106d73d5e0afb2938ec03d5098a2fb70b6afa1d6fb8->enter($__internal_73943971513d8ea09c545106d73d5e0afb2938ec03d5098a2fb70b6afa1d6fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c9e2fdaa1141ea02c8a78b69c29d2c905677bcb5ac20bcda9ae109868f3eb59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e2fdaa1141ea02c8a78b69c29d2c905677bcb5ac20bcda9ae109868f3eb59b->enter($__internal_c9e2fdaa1141ea02c8a78b69c29d2c905677bcb5ac20bcda9ae109868f3eb59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_73943971513d8ea09c545106d73d5e0afb2938ec03d5098a2fb70b6afa1d6fb8->leave($__internal_73943971513d8ea09c545106d73d5e0afb2938ec03d5098a2fb70b6afa1d6fb8_prof);

        
        $__internal_c9e2fdaa1141ea02c8a78b69c29d2c905677bcb5ac20bcda9ae109868f3eb59b->leave($__internal_c9e2fdaa1141ea02c8a78b69c29d2c905677bcb5ac20bcda9ae109868f3eb59b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
