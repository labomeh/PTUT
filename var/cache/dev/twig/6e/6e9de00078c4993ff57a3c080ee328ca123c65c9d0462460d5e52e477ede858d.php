<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c6b29fdb34b2ae741a02c62ef09a0660ef07dc2dc26ca52bccb62100c7d7df5b extends Twig_Template
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
        $__internal_488c10516a10ed01a41b2c5e6b4b5e6c6043a8b642ab267f62705c5c53631caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_488c10516a10ed01a41b2c5e6b4b5e6c6043a8b642ab267f62705c5c53631caa->enter($__internal_488c10516a10ed01a41b2c5e6b4b5e6c6043a8b642ab267f62705c5c53631caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_30a7e7708b79837a1b43729af37df3c37d31b39a6fbf603b935c31f323ad0a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a7e7708b79837a1b43729af37df3c37d31b39a6fbf603b935c31f323ad0a72->enter($__internal_30a7e7708b79837a1b43729af37df3c37d31b39a6fbf603b935c31f323ad0a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_488c10516a10ed01a41b2c5e6b4b5e6c6043a8b642ab267f62705c5c53631caa->leave($__internal_488c10516a10ed01a41b2c5e6b4b5e6c6043a8b642ab267f62705c5c53631caa_prof);

        
        $__internal_30a7e7708b79837a1b43729af37df3c37d31b39a6fbf603b935c31f323ad0a72->leave($__internal_30a7e7708b79837a1b43729af37df3c37d31b39a6fbf603b935c31f323ad0a72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
