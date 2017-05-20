<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_cd6bde29c12e4a2fad6dc1d6352473d5a801a0fc30fd61fb769919c8608a3c95 extends Twig_Template
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
        $__internal_7909b06975d795b4f9d87ffc5a2aea23eb55ad4f429f574cce77ac19c612838c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7909b06975d795b4f9d87ffc5a2aea23eb55ad4f429f574cce77ac19c612838c->enter($__internal_7909b06975d795b4f9d87ffc5a2aea23eb55ad4f429f574cce77ac19c612838c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_8e5f58d76d0984e1464f6ce33d1bbcff97a7f7c37c8422e783d7bfe8c60ca519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5f58d76d0984e1464f6ce33d1bbcff97a7f7c37c8422e783d7bfe8c60ca519->enter($__internal_8e5f58d76d0984e1464f6ce33d1bbcff97a7f7c37c8422e783d7bfe8c60ca519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7909b06975d795b4f9d87ffc5a2aea23eb55ad4f429f574cce77ac19c612838c->leave($__internal_7909b06975d795b4f9d87ffc5a2aea23eb55ad4f429f574cce77ac19c612838c_prof);

        
        $__internal_8e5f58d76d0984e1464f6ce33d1bbcff97a7f7c37c8422e783d7bfe8c60ca519->leave($__internal_8e5f58d76d0984e1464f6ce33d1bbcff97a7f7c37c8422e783d7bfe8c60ca519_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
