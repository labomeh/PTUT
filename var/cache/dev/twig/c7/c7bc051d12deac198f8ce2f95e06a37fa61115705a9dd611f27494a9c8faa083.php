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
        $__internal_b99dc21d8932b825407fbfe0162e944c148b6b67984b8d649fc00069b47512c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99dc21d8932b825407fbfe0162e944c148b6b67984b8d649fc00069b47512c8->enter($__internal_b99dc21d8932b825407fbfe0162e944c148b6b67984b8d649fc00069b47512c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f685710646be03ef27df40cda011a398faac58476bdd2f8bcaea776058446270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f685710646be03ef27df40cda011a398faac58476bdd2f8bcaea776058446270->enter($__internal_f685710646be03ef27df40cda011a398faac58476bdd2f8bcaea776058446270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b99dc21d8932b825407fbfe0162e944c148b6b67984b8d649fc00069b47512c8->leave($__internal_b99dc21d8932b825407fbfe0162e944c148b6b67984b8d649fc00069b47512c8_prof);

        
        $__internal_f685710646be03ef27df40cda011a398faac58476bdd2f8bcaea776058446270->leave($__internal_f685710646be03ef27df40cda011a398faac58476bdd2f8bcaea776058446270_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
