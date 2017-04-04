<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_dac9ff7ddf7198b493c34af17936e9afbb8864a3abc7b78b7530e7bb051c0f28 extends Twig_Template
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
        $__internal_1882bb7cd8e88ce34fff9b7ff3f87999b6a60cc58f5dc7cf16a23069f040975c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1882bb7cd8e88ce34fff9b7ff3f87999b6a60cc58f5dc7cf16a23069f040975c->enter($__internal_1882bb7cd8e88ce34fff9b7ff3f87999b6a60cc58f5dc7cf16a23069f040975c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_fe6d73e69192ddaac0031c047b681f46353be7fd3e6304cb58f6636abdf33ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6d73e69192ddaac0031c047b681f46353be7fd3e6304cb58f6636abdf33ea5->enter($__internal_fe6d73e69192ddaac0031c047b681f46353be7fd3e6304cb58f6636abdf33ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_1882bb7cd8e88ce34fff9b7ff3f87999b6a60cc58f5dc7cf16a23069f040975c->leave($__internal_1882bb7cd8e88ce34fff9b7ff3f87999b6a60cc58f5dc7cf16a23069f040975c_prof);

        
        $__internal_fe6d73e69192ddaac0031c047b681f46353be7fd3e6304cb58f6636abdf33ea5->leave($__internal_fe6d73e69192ddaac0031c047b681f46353be7fd3e6304cb58f6636abdf33ea5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
