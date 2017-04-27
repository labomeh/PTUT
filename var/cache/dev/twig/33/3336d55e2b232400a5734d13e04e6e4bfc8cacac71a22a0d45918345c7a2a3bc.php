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
        $__internal_634a7422f158b2e4ca30d4c06d5aa734f787f9493b22013af8ad1b56e7bb5976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634a7422f158b2e4ca30d4c06d5aa734f787f9493b22013af8ad1b56e7bb5976->enter($__internal_634a7422f158b2e4ca30d4c06d5aa734f787f9493b22013af8ad1b56e7bb5976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9f7fe9fd7407c3a9ffe2780773cb499fadb306851d866ad7ddd1a77fd24ea72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7fe9fd7407c3a9ffe2780773cb499fadb306851d866ad7ddd1a77fd24ea72b->enter($__internal_9f7fe9fd7407c3a9ffe2780773cb499fadb306851d866ad7ddd1a77fd24ea72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_634a7422f158b2e4ca30d4c06d5aa734f787f9493b22013af8ad1b56e7bb5976->leave($__internal_634a7422f158b2e4ca30d4c06d5aa734f787f9493b22013af8ad1b56e7bb5976_prof);

        
        $__internal_9f7fe9fd7407c3a9ffe2780773cb499fadb306851d866ad7ddd1a77fd24ea72b->leave($__internal_9f7fe9fd7407c3a9ffe2780773cb499fadb306851d866ad7ddd1a77fd24ea72b_prof);

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
