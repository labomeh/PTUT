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
        $__internal_e8d2b209ef801fd454429c63f0e4b7411be9ae9863c9deceea4df5cf03fab8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d2b209ef801fd454429c63f0e4b7411be9ae9863c9deceea4df5cf03fab8a3->enter($__internal_e8d2b209ef801fd454429c63f0e4b7411be9ae9863c9deceea4df5cf03fab8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6b181e3368e763209cf8ffc808c40761abe454c56cc8af36a24e91010ae1b44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b181e3368e763209cf8ffc808c40761abe454c56cc8af36a24e91010ae1b44e->enter($__internal_6b181e3368e763209cf8ffc808c40761abe454c56cc8af36a24e91010ae1b44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e8d2b209ef801fd454429c63f0e4b7411be9ae9863c9deceea4df5cf03fab8a3->leave($__internal_e8d2b209ef801fd454429c63f0e4b7411be9ae9863c9deceea4df5cf03fab8a3_prof);

        
        $__internal_6b181e3368e763209cf8ffc808c40761abe454c56cc8af36a24e91010ae1b44e->leave($__internal_6b181e3368e763209cf8ffc808c40761abe454c56cc8af36a24e91010ae1b44e_prof);

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
