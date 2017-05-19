<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_899395eb8f93ff7f2bbf1989f52b4496c16e1665d2242bcf11bf7a06ecbaa275 extends Twig_Template
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
        $__internal_c2dc64403e8d221c05f16ff12ae187b5c590dc8619a52dafdf8a1f10346e9ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2dc64403e8d221c05f16ff12ae187b5c590dc8619a52dafdf8a1f10346e9ec4->enter($__internal_c2dc64403e8d221c05f16ff12ae187b5c590dc8619a52dafdf8a1f10346e9ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_c48a4b00b2c1894ba30ca87bb2f1ef3baf2d0f17349fd426a4fb1aa29e36e1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48a4b00b2c1894ba30ca87bb2f1ef3baf2d0f17349fd426a4fb1aa29e36e1df->enter($__internal_c48a4b00b2c1894ba30ca87bb2f1ef3baf2d0f17349fd426a4fb1aa29e36e1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c2dc64403e8d221c05f16ff12ae187b5c590dc8619a52dafdf8a1f10346e9ec4->leave($__internal_c2dc64403e8d221c05f16ff12ae187b5c590dc8619a52dafdf8a1f10346e9ec4_prof);

        
        $__internal_c48a4b00b2c1894ba30ca87bb2f1ef3baf2d0f17349fd426a4fb1aa29e36e1df->leave($__internal_c48a4b00b2c1894ba30ca87bb2f1ef3baf2d0f17349fd426a4fb1aa29e36e1df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
