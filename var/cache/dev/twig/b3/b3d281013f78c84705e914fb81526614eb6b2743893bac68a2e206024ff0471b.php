<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_739da95cb7243c55bb5700a0789afe60c231595ac5e49ca421abbcdc3a0cd681 extends Twig_Template
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
        $__internal_b0b2d34c982c6191271f8586ab6fc04e03c350ca75e5f1765b3ce7676e41f46f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b2d34c982c6191271f8586ab6fc04e03c350ca75e5f1765b3ce7676e41f46f->enter($__internal_b0b2d34c982c6191271f8586ab6fc04e03c350ca75e5f1765b3ce7676e41f46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0d65ffd6d76b1e55dde350caefcccb63cbe77a308f5227e5e22177cd48c1e9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d65ffd6d76b1e55dde350caefcccb63cbe77a308f5227e5e22177cd48c1e9f3->enter($__internal_0d65ffd6d76b1e55dde350caefcccb63cbe77a308f5227e5e22177cd48c1e9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b0b2d34c982c6191271f8586ab6fc04e03c350ca75e5f1765b3ce7676e41f46f->leave($__internal_b0b2d34c982c6191271f8586ab6fc04e03c350ca75e5f1765b3ce7676e41f46f_prof);

        
        $__internal_0d65ffd6d76b1e55dde350caefcccb63cbe77a308f5227e5e22177cd48c1e9f3->leave($__internal_0d65ffd6d76b1e55dde350caefcccb63cbe77a308f5227e5e22177cd48c1e9f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
