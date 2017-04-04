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
        $__internal_456ce6c2f09d206fe6901dc7ed3f6259430e3cc843f6380c532be2e0984c036e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456ce6c2f09d206fe6901dc7ed3f6259430e3cc843f6380c532be2e0984c036e->enter($__internal_456ce6c2f09d206fe6901dc7ed3f6259430e3cc843f6380c532be2e0984c036e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9ec08ecfc4d35852bc7495c0e6fea469393fa22b2410f5594f5442d8ed910b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec08ecfc4d35852bc7495c0e6fea469393fa22b2410f5594f5442d8ed910b12->enter($__internal_9ec08ecfc4d35852bc7495c0e6fea469393fa22b2410f5594f5442d8ed910b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_456ce6c2f09d206fe6901dc7ed3f6259430e3cc843f6380c532be2e0984c036e->leave($__internal_456ce6c2f09d206fe6901dc7ed3f6259430e3cc843f6380c532be2e0984c036e_prof);

        
        $__internal_9ec08ecfc4d35852bc7495c0e6fea469393fa22b2410f5594f5442d8ed910b12->leave($__internal_9ec08ecfc4d35852bc7495c0e6fea469393fa22b2410f5594f5442d8ed910b12_prof);

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
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
