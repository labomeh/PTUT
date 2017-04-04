<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2fbcc80903a889934e317688aaa3542d6cbe402c5fabaef50deacacf2f79db7f extends Twig_Template
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
        $__internal_afba405da8849691d3a5a99bcca9b7be74857698507b4e8a6c667379de70d5f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afba405da8849691d3a5a99bcca9b7be74857698507b4e8a6c667379de70d5f9->enter($__internal_afba405da8849691d3a5a99bcca9b7be74857698507b4e8a6c667379de70d5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_fda21b10840d1cd7a6ee80c50147579b60017f02c19a8dcb8e3ac6c51c4c8c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda21b10840d1cd7a6ee80c50147579b60017f02c19a8dcb8e3ac6c51c4c8c41->enter($__internal_fda21b10840d1cd7a6ee80c50147579b60017f02c19a8dcb8e3ac6c51c4c8c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_afba405da8849691d3a5a99bcca9b7be74857698507b4e8a6c667379de70d5f9->leave($__internal_afba405da8849691d3a5a99bcca9b7be74857698507b4e8a6c667379de70d5f9_prof);

        
        $__internal_fda21b10840d1cd7a6ee80c50147579b60017f02c19a8dcb8e3ac6c51c4c8c41->leave($__internal_fda21b10840d1cd7a6ee80c50147579b60017f02c19a8dcb8e3ac6c51c4c8c41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
