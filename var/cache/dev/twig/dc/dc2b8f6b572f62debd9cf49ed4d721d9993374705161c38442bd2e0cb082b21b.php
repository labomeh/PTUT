<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7705f5f16ae20cf321cf838896f6a640eec275c13d7f0c049caaef631ce3e3a7 extends Twig_Template
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
        $__internal_d3251a6bd067b5b8407057ea4edda8c542681c9be2da96a06dc48f13149d985d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3251a6bd067b5b8407057ea4edda8c542681c9be2da96a06dc48f13149d985d->enter($__internal_d3251a6bd067b5b8407057ea4edda8c542681c9be2da96a06dc48f13149d985d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f897f44992c2364675772518f26c728928109e7ce6ea5d25de8db7a476d6c057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f897f44992c2364675772518f26c728928109e7ce6ea5d25de8db7a476d6c057->enter($__internal_f897f44992c2364675772518f26c728928109e7ce6ea5d25de8db7a476d6c057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d3251a6bd067b5b8407057ea4edda8c542681c9be2da96a06dc48f13149d985d->leave($__internal_d3251a6bd067b5b8407057ea4edda8c542681c9be2da96a06dc48f13149d985d_prof);

        
        $__internal_f897f44992c2364675772518f26c728928109e7ce6ea5d25de8db7a476d6c057->leave($__internal_f897f44992c2364675772518f26c728928109e7ce6ea5d25de8db7a476d6c057_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
