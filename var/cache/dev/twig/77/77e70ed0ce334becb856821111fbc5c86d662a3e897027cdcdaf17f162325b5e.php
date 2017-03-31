<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ba06bfa98ee853a1a747b17506774099e14f6edcf9c831b8415133f93f46ac9d extends Twig_Template
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
        $__internal_52227fc08fe5c4447a4cfa288f866d512b193afb02b873ad90e9ff4f34ac88d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52227fc08fe5c4447a4cfa288f866d512b193afb02b873ad90e9ff4f34ac88d1->enter($__internal_52227fc08fe5c4447a4cfa288f866d512b193afb02b873ad90e9ff4f34ac88d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e27193fb7f79ea33246038b89d9850f5c540ffab1b2ab33c788f744215bf605a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27193fb7f79ea33246038b89d9850f5c540ffab1b2ab33c788f744215bf605a->enter($__internal_e27193fb7f79ea33246038b89d9850f5c540ffab1b2ab33c788f744215bf605a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_52227fc08fe5c4447a4cfa288f866d512b193afb02b873ad90e9ff4f34ac88d1->leave($__internal_52227fc08fe5c4447a4cfa288f866d512b193afb02b873ad90e9ff4f34ac88d1_prof);

        
        $__internal_e27193fb7f79ea33246038b89d9850f5c540ffab1b2ab33c788f744215bf605a->leave($__internal_e27193fb7f79ea33246038b89d9850f5c540ffab1b2ab33c788f744215bf605a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
