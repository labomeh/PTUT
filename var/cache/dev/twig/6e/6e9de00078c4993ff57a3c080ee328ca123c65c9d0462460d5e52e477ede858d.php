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
        $__internal_170434ea571ea7ed67da1a783d68d38a6fd59b5f6f9382c659af2f1894dcb45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170434ea571ea7ed67da1a783d68d38a6fd59b5f6f9382c659af2f1894dcb45a->enter($__internal_170434ea571ea7ed67da1a783d68d38a6fd59b5f6f9382c659af2f1894dcb45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7fd55c4b3bec037a23cae021f854daa2c1dfa0558cefda3608f46c2b196d16f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd55c4b3bec037a23cae021f854daa2c1dfa0558cefda3608f46c2b196d16f5->enter($__internal_7fd55c4b3bec037a23cae021f854daa2c1dfa0558cefda3608f46c2b196d16f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_170434ea571ea7ed67da1a783d68d38a6fd59b5f6f9382c659af2f1894dcb45a->leave($__internal_170434ea571ea7ed67da1a783d68d38a6fd59b5f6f9382c659af2f1894dcb45a_prof);

        
        $__internal_7fd55c4b3bec037a23cae021f854daa2c1dfa0558cefda3608f46c2b196d16f5->leave($__internal_7fd55c4b3bec037a23cae021f854daa2c1dfa0558cefda3608f46c2b196d16f5_prof);

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
