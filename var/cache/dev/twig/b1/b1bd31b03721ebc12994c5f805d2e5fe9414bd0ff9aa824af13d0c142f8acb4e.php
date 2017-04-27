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
        $__internal_426a80fe870aeddb2820f78656e4e74f9c8c8d7a4cb3b8a0a08782647b547394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426a80fe870aeddb2820f78656e4e74f9c8c8d7a4cb3b8a0a08782647b547394->enter($__internal_426a80fe870aeddb2820f78656e4e74f9c8c8d7a4cb3b8a0a08782647b547394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_59d06c18dbb2e0d4845dfc6a5a55cc959dbf27383d4dbfa72035dc2bb89bd2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d06c18dbb2e0d4845dfc6a5a55cc959dbf27383d4dbfa72035dc2bb89bd2d2->enter($__internal_59d06c18dbb2e0d4845dfc6a5a55cc959dbf27383d4dbfa72035dc2bb89bd2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_426a80fe870aeddb2820f78656e4e74f9c8c8d7a4cb3b8a0a08782647b547394->leave($__internal_426a80fe870aeddb2820f78656e4e74f9c8c8d7a4cb3b8a0a08782647b547394_prof);

        
        $__internal_59d06c18dbb2e0d4845dfc6a5a55cc959dbf27383d4dbfa72035dc2bb89bd2d2->leave($__internal_59d06c18dbb2e0d4845dfc6a5a55cc959dbf27383d4dbfa72035dc2bb89bd2d2_prof);

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
