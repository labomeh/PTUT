<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_eee9f7b46636b96b348ec436d5894ae81dab8ed0a583921ceaf1591029d61bfe extends Twig_Template
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
        $__internal_d51d41a46593b97038917cda25c36ff1d2cc12c8015a00f290873756609a3d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51d41a46593b97038917cda25c36ff1d2cc12c8015a00f290873756609a3d85->enter($__internal_d51d41a46593b97038917cda25c36ff1d2cc12c8015a00f290873756609a3d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_cc430728a8eeb1aeb5cbaa2c87a0314813c6dd76d429d11c72f560da71399af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc430728a8eeb1aeb5cbaa2c87a0314813c6dd76d429d11c72f560da71399af8->enter($__internal_cc430728a8eeb1aeb5cbaa2c87a0314813c6dd76d429d11c72f560da71399af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d51d41a46593b97038917cda25c36ff1d2cc12c8015a00f290873756609a3d85->leave($__internal_d51d41a46593b97038917cda25c36ff1d2cc12c8015a00f290873756609a3d85_prof);

        
        $__internal_cc430728a8eeb1aeb5cbaa2c87a0314813c6dd76d429d11c72f560da71399af8->leave($__internal_cc430728a8eeb1aeb5cbaa2c87a0314813c6dd76d429d11c72f560da71399af8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
