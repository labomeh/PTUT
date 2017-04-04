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
        $__internal_727d1b94f674bdc33fe5d906ab0a372e5a9aabb60160464b5aa1b89b3ceb6c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727d1b94f674bdc33fe5d906ab0a372e5a9aabb60160464b5aa1b89b3ceb6c2f->enter($__internal_727d1b94f674bdc33fe5d906ab0a372e5a9aabb60160464b5aa1b89b3ceb6c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_bd1e65516b1eb2fb4bce7a952494a3bbc183b378f3b3fcceea3d68d997d89d34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1e65516b1eb2fb4bce7a952494a3bbc183b378f3b3fcceea3d68d997d89d34->enter($__internal_bd1e65516b1eb2fb4bce7a952494a3bbc183b378f3b3fcceea3d68d997d89d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_727d1b94f674bdc33fe5d906ab0a372e5a9aabb60160464b5aa1b89b3ceb6c2f->leave($__internal_727d1b94f674bdc33fe5d906ab0a372e5a9aabb60160464b5aa1b89b3ceb6c2f_prof);

        
        $__internal_bd1e65516b1eb2fb4bce7a952494a3bbc183b378f3b3fcceea3d68d997d89d34->leave($__internal_bd1e65516b1eb2fb4bce7a952494a3bbc183b378f3b3fcceea3d68d997d89d34_prof);

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
