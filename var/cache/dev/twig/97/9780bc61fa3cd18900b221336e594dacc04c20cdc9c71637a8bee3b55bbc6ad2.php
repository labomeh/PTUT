<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e432fa73a058f70d30e9978766f6e9408635326f35acf1010844c97d20c7465e extends Twig_Template
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
        $__internal_9fd292ecc1255ebb061f78e6a956cc1096b2468756967d59ae44e43bfc75064c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd292ecc1255ebb061f78e6a956cc1096b2468756967d59ae44e43bfc75064c->enter($__internal_9fd292ecc1255ebb061f78e6a956cc1096b2468756967d59ae44e43bfc75064c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_34716dac18e5e6d5d1b81faf0b75089a72e20d2e4ea7319378a25f9fe6d0e7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34716dac18e5e6d5d1b81faf0b75089a72e20d2e4ea7319378a25f9fe6d0e7e6->enter($__internal_34716dac18e5e6d5d1b81faf0b75089a72e20d2e4ea7319378a25f9fe6d0e7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9fd292ecc1255ebb061f78e6a956cc1096b2468756967d59ae44e43bfc75064c->leave($__internal_9fd292ecc1255ebb061f78e6a956cc1096b2468756967d59ae44e43bfc75064c_prof);

        
        $__internal_34716dac18e5e6d5d1b81faf0b75089a72e20d2e4ea7319378a25f9fe6d0e7e6->leave($__internal_34716dac18e5e6d5d1b81faf0b75089a72e20d2e4ea7319378a25f9fe6d0e7e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
