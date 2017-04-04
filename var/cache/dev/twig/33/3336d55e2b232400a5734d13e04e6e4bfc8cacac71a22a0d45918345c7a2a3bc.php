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
        $__internal_bf04b27d69b19f0fbf283a816611dc44dfd581edba892d2109e799e907fffda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf04b27d69b19f0fbf283a816611dc44dfd581edba892d2109e799e907fffda2->enter($__internal_bf04b27d69b19f0fbf283a816611dc44dfd581edba892d2109e799e907fffda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_c5e55401da83d10d91ea3a0e6446c828329b7ac5c3812e4af9948828e8d2de9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e55401da83d10d91ea3a0e6446c828329b7ac5c3812e4af9948828e8d2de9b->enter($__internal_c5e55401da83d10d91ea3a0e6446c828329b7ac5c3812e4af9948828e8d2de9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bf04b27d69b19f0fbf283a816611dc44dfd581edba892d2109e799e907fffda2->leave($__internal_bf04b27d69b19f0fbf283a816611dc44dfd581edba892d2109e799e907fffda2_prof);

        
        $__internal_c5e55401da83d10d91ea3a0e6446c828329b7ac5c3812e4af9948828e8d2de9b->leave($__internal_c5e55401da83d10d91ea3a0e6446c828329b7ac5c3812e4af9948828e8d2de9b_prof);

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
