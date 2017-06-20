<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_60e4c89623cceb6bbce80753f52f6abb881e1fb7a88d35ada90c333489a8b02f extends Twig_Template
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
        $__internal_5e43afdc9de63663b7197a119a872c22a4a39e04eb6212d937b7a9cdab474b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e43afdc9de63663b7197a119a872c22a4a39e04eb6212d937b7a9cdab474b0e->enter($__internal_5e43afdc9de63663b7197a119a872c22a4a39e04eb6212d937b7a9cdab474b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_baa5099210e2e3468b0d685868d226a13835a9e7f905b3e132c51b545ea73df4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa5099210e2e3468b0d685868d226a13835a9e7f905b3e132c51b545ea73df4->enter($__internal_baa5099210e2e3468b0d685868d226a13835a9e7f905b3e132c51b545ea73df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5e43afdc9de63663b7197a119a872c22a4a39e04eb6212d937b7a9cdab474b0e->leave($__internal_5e43afdc9de63663b7197a119a872c22a4a39e04eb6212d937b7a9cdab474b0e_prof);

        
        $__internal_baa5099210e2e3468b0d685868d226a13835a9e7f905b3e132c51b545ea73df4->leave($__internal_baa5099210e2e3468b0d685868d226a13835a9e7f905b3e132c51b545ea73df4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
