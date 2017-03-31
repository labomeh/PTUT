<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b581664d64389c0756095ac766011c0f162e181e80e7e37a7984e965b4d5132b extends Twig_Template
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
        $__internal_17509a07b5dd97eca37805b8dcb7d499254ae782a883572508ef63af467bfb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17509a07b5dd97eca37805b8dcb7d499254ae782a883572508ef63af467bfb56->enter($__internal_17509a07b5dd97eca37805b8dcb7d499254ae782a883572508ef63af467bfb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a02a74aba8ef86b695e2dcc367030acedcfd17131fd67ede144277c5abf01781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02a74aba8ef86b695e2dcc367030acedcfd17131fd67ede144277c5abf01781->enter($__internal_a02a74aba8ef86b695e2dcc367030acedcfd17131fd67ede144277c5abf01781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_17509a07b5dd97eca37805b8dcb7d499254ae782a883572508ef63af467bfb56->leave($__internal_17509a07b5dd97eca37805b8dcb7d499254ae782a883572508ef63af467bfb56_prof);

        
        $__internal_a02a74aba8ef86b695e2dcc367030acedcfd17131fd67ede144277c5abf01781->leave($__internal_a02a74aba8ef86b695e2dcc367030acedcfd17131fd67ede144277c5abf01781_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
