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
        $__internal_2c09781e7f55ff0ec7cd209f324b7f4383908bbd5011cd751381ec41fcf71344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c09781e7f55ff0ec7cd209f324b7f4383908bbd5011cd751381ec41fcf71344->enter($__internal_2c09781e7f55ff0ec7cd209f324b7f4383908bbd5011cd751381ec41fcf71344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_adc67360d2a9180966c4599a909f116254473cda4f6b3abdaa429cd391a4a386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc67360d2a9180966c4599a909f116254473cda4f6b3abdaa429cd391a4a386->enter($__internal_adc67360d2a9180966c4599a909f116254473cda4f6b3abdaa429cd391a4a386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2c09781e7f55ff0ec7cd209f324b7f4383908bbd5011cd751381ec41fcf71344->leave($__internal_2c09781e7f55ff0ec7cd209f324b7f4383908bbd5011cd751381ec41fcf71344_prof);

        
        $__internal_adc67360d2a9180966c4599a909f116254473cda4f6b3abdaa429cd391a4a386->leave($__internal_adc67360d2a9180966c4599a909f116254473cda4f6b3abdaa429cd391a4a386_prof);

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
