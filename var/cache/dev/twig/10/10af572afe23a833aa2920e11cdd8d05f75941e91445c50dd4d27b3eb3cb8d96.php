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
        $__internal_55f394956783f568e179371b075abe598ccc227423751d6745b0d8fb57a9f5b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f394956783f568e179371b075abe598ccc227423751d6745b0d8fb57a9f5b2->enter($__internal_55f394956783f568e179371b075abe598ccc227423751d6745b0d8fb57a9f5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2456b1f2052b31caa47926a1a3f6e0a78142336d8534fc4a0a37a4805483e18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2456b1f2052b31caa47926a1a3f6e0a78142336d8534fc4a0a37a4805483e18c->enter($__internal_2456b1f2052b31caa47926a1a3f6e0a78142336d8534fc4a0a37a4805483e18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_55f394956783f568e179371b075abe598ccc227423751d6745b0d8fb57a9f5b2->leave($__internal_55f394956783f568e179371b075abe598ccc227423751d6745b0d8fb57a9f5b2_prof);

        
        $__internal_2456b1f2052b31caa47926a1a3f6e0a78142336d8534fc4a0a37a4805483e18c->leave($__internal_2456b1f2052b31caa47926a1a3f6e0a78142336d8534fc4a0a37a4805483e18c_prof);

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
