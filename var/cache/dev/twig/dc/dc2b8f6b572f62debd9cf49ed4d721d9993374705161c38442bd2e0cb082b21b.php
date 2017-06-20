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
        $__internal_6b097b2b579b8ee3bc2ecce8c384ab31cd28a537b4b04bff704743b4acf781cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b097b2b579b8ee3bc2ecce8c384ab31cd28a537b4b04bff704743b4acf781cb->enter($__internal_6b097b2b579b8ee3bc2ecce8c384ab31cd28a537b4b04bff704743b4acf781cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9009eaf9e181e5ac4d64be01102df7961bd8f57d629ce09108da38398e4e8a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9009eaf9e181e5ac4d64be01102df7961bd8f57d629ce09108da38398e4e8a5d->enter($__internal_9009eaf9e181e5ac4d64be01102df7961bd8f57d629ce09108da38398e4e8a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6b097b2b579b8ee3bc2ecce8c384ab31cd28a537b4b04bff704743b4acf781cb->leave($__internal_6b097b2b579b8ee3bc2ecce8c384ab31cd28a537b4b04bff704743b4acf781cb_prof);

        
        $__internal_9009eaf9e181e5ac4d64be01102df7961bd8f57d629ce09108da38398e4e8a5d->leave($__internal_9009eaf9e181e5ac4d64be01102df7961bd8f57d629ce09108da38398e4e8a5d_prof);

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
