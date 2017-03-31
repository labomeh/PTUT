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
        $__internal_ddc45a28ee44bae6f7a1758fffdca274d6d10b1133abc247c3efdb5443a010c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc45a28ee44bae6f7a1758fffdca274d6d10b1133abc247c3efdb5443a010c3->enter($__internal_ddc45a28ee44bae6f7a1758fffdca274d6d10b1133abc247c3efdb5443a010c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_7a4237b78f84a41c5c19e4ca809c790ebaefe7dfa7ac0c5ef3d671a7bbc637ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4237b78f84a41c5c19e4ca809c790ebaefe7dfa7ac0c5ef3d671a7bbc637ab->enter($__internal_7a4237b78f84a41c5c19e4ca809c790ebaefe7dfa7ac0c5ef3d671a7bbc637ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ddc45a28ee44bae6f7a1758fffdca274d6d10b1133abc247c3efdb5443a010c3->leave($__internal_ddc45a28ee44bae6f7a1758fffdca274d6d10b1133abc247c3efdb5443a010c3_prof);

        
        $__internal_7a4237b78f84a41c5c19e4ca809c790ebaefe7dfa7ac0c5ef3d671a7bbc637ab->leave($__internal_7a4237b78f84a41c5c19e4ca809c790ebaefe7dfa7ac0c5ef3d671a7bbc637ab_prof);

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
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
