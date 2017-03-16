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
        $__internal_4232497a57cee8440d825e3a7fcec7aa8269caa19c8c1013f437ae2cc5990fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4232497a57cee8440d825e3a7fcec7aa8269caa19c8c1013f437ae2cc5990fdb->enter($__internal_4232497a57cee8440d825e3a7fcec7aa8269caa19c8c1013f437ae2cc5990fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_bb3c4b37f30d27962e6ad1b01af805a7094d2fd71858e1fcaa5a0bf22fe2e28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3c4b37f30d27962e6ad1b01af805a7094d2fd71858e1fcaa5a0bf22fe2e28f->enter($__internal_bb3c4b37f30d27962e6ad1b01af805a7094d2fd71858e1fcaa5a0bf22fe2e28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_4232497a57cee8440d825e3a7fcec7aa8269caa19c8c1013f437ae2cc5990fdb->leave($__internal_4232497a57cee8440d825e3a7fcec7aa8269caa19c8c1013f437ae2cc5990fdb_prof);

        
        $__internal_bb3c4b37f30d27962e6ad1b01af805a7094d2fd71858e1fcaa5a0bf22fe2e28f->leave($__internal_bb3c4b37f30d27962e6ad1b01af805a7094d2fd71858e1fcaa5a0bf22fe2e28f_prof);

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
