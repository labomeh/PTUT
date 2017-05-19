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
        $__internal_cf6cb2faea53f2295e15ac9a1ff8211ad9b100cbf70f038a4c6b52b24a2a1432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf6cb2faea53f2295e15ac9a1ff8211ad9b100cbf70f038a4c6b52b24a2a1432->enter($__internal_cf6cb2faea53f2295e15ac9a1ff8211ad9b100cbf70f038a4c6b52b24a2a1432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_704d7ddd5e1cbae0a9b175397f5987009e5fc5bbed15a6befc084051e437d863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704d7ddd5e1cbae0a9b175397f5987009e5fc5bbed15a6befc084051e437d863->enter($__internal_704d7ddd5e1cbae0a9b175397f5987009e5fc5bbed15a6befc084051e437d863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_cf6cb2faea53f2295e15ac9a1ff8211ad9b100cbf70f038a4c6b52b24a2a1432->leave($__internal_cf6cb2faea53f2295e15ac9a1ff8211ad9b100cbf70f038a4c6b52b24a2a1432_prof);

        
        $__internal_704d7ddd5e1cbae0a9b175397f5987009e5fc5bbed15a6befc084051e437d863->leave($__internal_704d7ddd5e1cbae0a9b175397f5987009e5fc5bbed15a6befc084051e437d863_prof);

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
