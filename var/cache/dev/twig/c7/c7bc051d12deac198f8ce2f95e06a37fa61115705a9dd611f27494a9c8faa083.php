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
        $__internal_ca45b0ff4d212597b838787adfe72802b171bcc2aeafc885c6d2e894cbb09e26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca45b0ff4d212597b838787adfe72802b171bcc2aeafc885c6d2e894cbb09e26->enter($__internal_ca45b0ff4d212597b838787adfe72802b171bcc2aeafc885c6d2e894cbb09e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_81bcc2c6cc4deb3bf3e45c1b2f266fdc8096d19b3527cc209be24737dd6fb3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bcc2c6cc4deb3bf3e45c1b2f266fdc8096d19b3527cc209be24737dd6fb3f7->enter($__internal_81bcc2c6cc4deb3bf3e45c1b2f266fdc8096d19b3527cc209be24737dd6fb3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ca45b0ff4d212597b838787adfe72802b171bcc2aeafc885c6d2e894cbb09e26->leave($__internal_ca45b0ff4d212597b838787adfe72802b171bcc2aeafc885c6d2e894cbb09e26_prof);

        
        $__internal_81bcc2c6cc4deb3bf3e45c1b2f266fdc8096d19b3527cc209be24737dd6fb3f7->leave($__internal_81bcc2c6cc4deb3bf3e45c1b2f266fdc8096d19b3527cc209be24737dd6fb3f7_prof);

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
