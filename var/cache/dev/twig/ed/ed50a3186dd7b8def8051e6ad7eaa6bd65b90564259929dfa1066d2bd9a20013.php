<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f52e31fbf87ff51ac6b3b3a5d70a0d2149ae3b1926e6e441cd6d6335239c6f2e extends Twig_Template
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
        $__internal_435659ce6ea1e19f703f20e014f9bc4d74d4bbc0415ff82532790778da2bc1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435659ce6ea1e19f703f20e014f9bc4d74d4bbc0415ff82532790778da2bc1bb->enter($__internal_435659ce6ea1e19f703f20e014f9bc4d74d4bbc0415ff82532790778da2bc1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8c116878179f036c0a9609790e099154183321a22994283a3e2543fb3c2be23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c116878179f036c0a9609790e099154183321a22994283a3e2543fb3c2be23a->enter($__internal_8c116878179f036c0a9609790e099154183321a22994283a3e2543fb3c2be23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_435659ce6ea1e19f703f20e014f9bc4d74d4bbc0415ff82532790778da2bc1bb->leave($__internal_435659ce6ea1e19f703f20e014f9bc4d74d4bbc0415ff82532790778da2bc1bb_prof);

        
        $__internal_8c116878179f036c0a9609790e099154183321a22994283a3e2543fb3c2be23a->leave($__internal_8c116878179f036c0a9609790e099154183321a22994283a3e2543fb3c2be23a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
