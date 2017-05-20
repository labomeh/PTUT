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
        $__internal_5cda062f6bf0786af3393681a6b1fe70ee3122abcdde56018a240ff4d4a41d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cda062f6bf0786af3393681a6b1fe70ee3122abcdde56018a240ff4d4a41d0a->enter($__internal_5cda062f6bf0786af3393681a6b1fe70ee3122abcdde56018a240ff4d4a41d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6311872e9e160241ffed8973c4775fad1891221f2a8d17f36fd94d058232538c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6311872e9e160241ffed8973c4775fad1891221f2a8d17f36fd94d058232538c->enter($__internal_6311872e9e160241ffed8973c4775fad1891221f2a8d17f36fd94d058232538c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5cda062f6bf0786af3393681a6b1fe70ee3122abcdde56018a240ff4d4a41d0a->leave($__internal_5cda062f6bf0786af3393681a6b1fe70ee3122abcdde56018a240ff4d4a41d0a_prof);

        
        $__internal_6311872e9e160241ffed8973c4775fad1891221f2a8d17f36fd94d058232538c->leave($__internal_6311872e9e160241ffed8973c4775fad1891221f2a8d17f36fd94d058232538c_prof);

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
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
