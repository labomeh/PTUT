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
        $__internal_7036b1755a6a6ddafe8691e79436c0ade1ea61bb7407bde35fcd4911459d151a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7036b1755a6a6ddafe8691e79436c0ade1ea61bb7407bde35fcd4911459d151a->enter($__internal_7036b1755a6a6ddafe8691e79436c0ade1ea61bb7407bde35fcd4911459d151a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e7918d3c579142ef7571b3faf6d679dc8e66169d2f0ca5fe24b43f087dffbde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7918d3c579142ef7571b3faf6d679dc8e66169d2f0ca5fe24b43f087dffbde6->enter($__internal_e7918d3c579142ef7571b3faf6d679dc8e66169d2f0ca5fe24b43f087dffbde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_7036b1755a6a6ddafe8691e79436c0ade1ea61bb7407bde35fcd4911459d151a->leave($__internal_7036b1755a6a6ddafe8691e79436c0ade1ea61bb7407bde35fcd4911459d151a_prof);

        
        $__internal_e7918d3c579142ef7571b3faf6d679dc8e66169d2f0ca5fe24b43f087dffbde6->leave($__internal_e7918d3c579142ef7571b3faf6d679dc8e66169d2f0ca5fe24b43f087dffbde6_prof);

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
