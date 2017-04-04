<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_79e42e6a4309996e822064f3b5df71e72a20d83c3e2b90f2e6c581430e7f3900 extends Twig_Template
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
        $__internal_076507fa5f8f0dbfc1a9f3b277d6e4e99485e3a6d5417e37f8284c6691df3cd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076507fa5f8f0dbfc1a9f3b277d6e4e99485e3a6d5417e37f8284c6691df3cd0->enter($__internal_076507fa5f8f0dbfc1a9f3b277d6e4e99485e3a6d5417e37f8284c6691df3cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c7471941e754cb83a9d8fb802341acec16f3bb879b439b290d92a7c982793ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7471941e754cb83a9d8fb802341acec16f3bb879b439b290d92a7c982793ba6->enter($__internal_c7471941e754cb83a9d8fb802341acec16f3bb879b439b290d92a7c982793ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_076507fa5f8f0dbfc1a9f3b277d6e4e99485e3a6d5417e37f8284c6691df3cd0->leave($__internal_076507fa5f8f0dbfc1a9f3b277d6e4e99485e3a6d5417e37f8284c6691df3cd0_prof);

        
        $__internal_c7471941e754cb83a9d8fb802341acec16f3bb879b439b290d92a7c982793ba6->leave($__internal_c7471941e754cb83a9d8fb802341acec16f3bb879b439b290d92a7c982793ba6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
