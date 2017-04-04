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
        $__internal_b224a2d8caf8853ceb373ffc1e15305c183a4266714d5cd09560176d3e87ee27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b224a2d8caf8853ceb373ffc1e15305c183a4266714d5cd09560176d3e87ee27->enter($__internal_b224a2d8caf8853ceb373ffc1e15305c183a4266714d5cd09560176d3e87ee27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9990dc4ce81e7ec81bd9674b421802eb0a4c28cb1e17dd6bef4cae06f49d2b3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9990dc4ce81e7ec81bd9674b421802eb0a4c28cb1e17dd6bef4cae06f49d2b3f->enter($__internal_9990dc4ce81e7ec81bd9674b421802eb0a4c28cb1e17dd6bef4cae06f49d2b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b224a2d8caf8853ceb373ffc1e15305c183a4266714d5cd09560176d3e87ee27->leave($__internal_b224a2d8caf8853ceb373ffc1e15305c183a4266714d5cd09560176d3e87ee27_prof);

        
        $__internal_9990dc4ce81e7ec81bd9674b421802eb0a4c28cb1e17dd6bef4cae06f49d2b3f->leave($__internal_9990dc4ce81e7ec81bd9674b421802eb0a4c28cb1e17dd6bef4cae06f49d2b3f_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
