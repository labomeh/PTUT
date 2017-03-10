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
        $__internal_624fa5f6a61015b5bb82f8ee27eab497d472c0b6414ec7da96d447e6e32c0ffc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624fa5f6a61015b5bb82f8ee27eab497d472c0b6414ec7da96d447e6e32c0ffc->enter($__internal_624fa5f6a61015b5bb82f8ee27eab497d472c0b6414ec7da96d447e6e32c0ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_328472924530911ebade9ad298492963af3a339b62974121c49c0de91e5594f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328472924530911ebade9ad298492963af3a339b62974121c49c0de91e5594f6->enter($__internal_328472924530911ebade9ad298492963af3a339b62974121c49c0de91e5594f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_624fa5f6a61015b5bb82f8ee27eab497d472c0b6414ec7da96d447e6e32c0ffc->leave($__internal_624fa5f6a61015b5bb82f8ee27eab497d472c0b6414ec7da96d447e6e32c0ffc_prof);

        
        $__internal_328472924530911ebade9ad298492963af3a339b62974121c49c0de91e5594f6->leave($__internal_328472924530911ebade9ad298492963af3a339b62974121c49c0de91e5594f6_prof);

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
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
