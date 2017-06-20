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
        $__internal_c3593be2cf671b83c082b88c7643e316569c589544808250b4aa765484418024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3593be2cf671b83c082b88c7643e316569c589544808250b4aa765484418024->enter($__internal_c3593be2cf671b83c082b88c7643e316569c589544808250b4aa765484418024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_6f50896dad39ac1acd96bd9ef800253844503e76f849202cfb508130edeff236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f50896dad39ac1acd96bd9ef800253844503e76f849202cfb508130edeff236->enter($__internal_6f50896dad39ac1acd96bd9ef800253844503e76f849202cfb508130edeff236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c3593be2cf671b83c082b88c7643e316569c589544808250b4aa765484418024->leave($__internal_c3593be2cf671b83c082b88c7643e316569c589544808250b4aa765484418024_prof);

        
        $__internal_6f50896dad39ac1acd96bd9ef800253844503e76f849202cfb508130edeff236->leave($__internal_6f50896dad39ac1acd96bd9ef800253844503e76f849202cfb508130edeff236_prof);

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
