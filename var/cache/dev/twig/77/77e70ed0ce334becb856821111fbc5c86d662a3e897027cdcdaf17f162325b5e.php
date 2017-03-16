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
        $__internal_4b7d0f2f5f78bd56904394f318b843746a241f352e2e1395dcd4139c718f92ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7d0f2f5f78bd56904394f318b843746a241f352e2e1395dcd4139c718f92ca->enter($__internal_4b7d0f2f5f78bd56904394f318b843746a241f352e2e1395dcd4139c718f92ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_82f400875edd53ab016543d821c8e84ef258681f13ed213b6fad08fd3046737f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f400875edd53ab016543d821c8e84ef258681f13ed213b6fad08fd3046737f->enter($__internal_82f400875edd53ab016543d821c8e84ef258681f13ed213b6fad08fd3046737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4b7d0f2f5f78bd56904394f318b843746a241f352e2e1395dcd4139c718f92ca->leave($__internal_4b7d0f2f5f78bd56904394f318b843746a241f352e2e1395dcd4139c718f92ca_prof);

        
        $__internal_82f400875edd53ab016543d821c8e84ef258681f13ed213b6fad08fd3046737f->leave($__internal_82f400875edd53ab016543d821c8e84ef258681f13ed213b6fad08fd3046737f_prof);

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
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
