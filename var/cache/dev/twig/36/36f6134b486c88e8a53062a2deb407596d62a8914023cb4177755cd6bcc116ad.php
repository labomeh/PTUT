<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9984595c51255aae81c32552cb2155768c4ccdc9d3607065e16d8f2651f35aa1 extends Twig_Template
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
        $__internal_6f9d446fc6ed62a036d777b4aa05ab6c3b04a98d42cca5f70e0673578bf2f4b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9d446fc6ed62a036d777b4aa05ab6c3b04a98d42cca5f70e0673578bf2f4b6->enter($__internal_6f9d446fc6ed62a036d777b4aa05ab6c3b04a98d42cca5f70e0673578bf2f4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_777c3c9accc001624fbd0c9b81ececeaf53ba665fee5ffdf7d108483c9dd76f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777c3c9accc001624fbd0c9b81ececeaf53ba665fee5ffdf7d108483c9dd76f5->enter($__internal_777c3c9accc001624fbd0c9b81ececeaf53ba665fee5ffdf7d108483c9dd76f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6f9d446fc6ed62a036d777b4aa05ab6c3b04a98d42cca5f70e0673578bf2f4b6->leave($__internal_6f9d446fc6ed62a036d777b4aa05ab6c3b04a98d42cca5f70e0673578bf2f4b6_prof);

        
        $__internal_777c3c9accc001624fbd0c9b81ececeaf53ba665fee5ffdf7d108483c9dd76f5->leave($__internal_777c3c9accc001624fbd0c9b81ececeaf53ba665fee5ffdf7d108483c9dd76f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
