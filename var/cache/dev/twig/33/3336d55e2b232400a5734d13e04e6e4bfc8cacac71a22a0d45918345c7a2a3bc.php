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
        $__internal_34a5760c9b6f6ab2c4e18d0f24c2c23c3d9bde7cf52ce6f0c50eab956cd00e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a5760c9b6f6ab2c4e18d0f24c2c23c3d9bde7cf52ce6f0c50eab956cd00e49->enter($__internal_34a5760c9b6f6ab2c4e18d0f24c2c23c3d9bde7cf52ce6f0c50eab956cd00e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6e16214d70863ae5171901c3207c48c9628a135a527e45adc28cf3eb4ef40702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e16214d70863ae5171901c3207c48c9628a135a527e45adc28cf3eb4ef40702->enter($__internal_6e16214d70863ae5171901c3207c48c9628a135a527e45adc28cf3eb4ef40702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_34a5760c9b6f6ab2c4e18d0f24c2c23c3d9bde7cf52ce6f0c50eab956cd00e49->leave($__internal_34a5760c9b6f6ab2c4e18d0f24c2c23c3d9bde7cf52ce6f0c50eab956cd00e49_prof);

        
        $__internal_6e16214d70863ae5171901c3207c48c9628a135a527e45adc28cf3eb4ef40702->leave($__internal_6e16214d70863ae5171901c3207c48c9628a135a527e45adc28cf3eb4ef40702_prof);

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
