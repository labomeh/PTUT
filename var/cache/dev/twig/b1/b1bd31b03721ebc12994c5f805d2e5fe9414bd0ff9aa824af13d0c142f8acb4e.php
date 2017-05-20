<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3dd3fcec98b9598adbbda2902b15ece9856c667421bac9f24eff70e939156bf extends Twig_Template
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
        $__internal_ccf2d0eac4acdd0f8baa52badd67d06a82e08d7e647dfe0b051289907fc1953b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf2d0eac4acdd0f8baa52badd67d06a82e08d7e647dfe0b051289907fc1953b->enter($__internal_ccf2d0eac4acdd0f8baa52badd67d06a82e08d7e647dfe0b051289907fc1953b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8e7024ec0436bf36362f67e27287d00cce396f20b18b91793189dca9f8056316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e7024ec0436bf36362f67e27287d00cce396f20b18b91793189dca9f8056316->enter($__internal_8e7024ec0436bf36362f67e27287d00cce396f20b18b91793189dca9f8056316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ccf2d0eac4acdd0f8baa52badd67d06a82e08d7e647dfe0b051289907fc1953b->leave($__internal_ccf2d0eac4acdd0f8baa52badd67d06a82e08d7e647dfe0b051289907fc1953b_prof);

        
        $__internal_8e7024ec0436bf36362f67e27287d00cce396f20b18b91793189dca9f8056316->leave($__internal_8e7024ec0436bf36362f67e27287d00cce396f20b18b91793189dca9f8056316_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
