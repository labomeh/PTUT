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
        $__internal_5a4cb51362515ed42088105dd3c3e00150559b9b0dc695a5675594213077acf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a4cb51362515ed42088105dd3c3e00150559b9b0dc695a5675594213077acf1->enter($__internal_5a4cb51362515ed42088105dd3c3e00150559b9b0dc695a5675594213077acf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5845e12df28b2d00a67dce90a229bfce8f25283e432125f3071f24bf737b3fd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5845e12df28b2d00a67dce90a229bfce8f25283e432125f3071f24bf737b3fd9->enter($__internal_5845e12df28b2d00a67dce90a229bfce8f25283e432125f3071f24bf737b3fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_5a4cb51362515ed42088105dd3c3e00150559b9b0dc695a5675594213077acf1->leave($__internal_5a4cb51362515ed42088105dd3c3e00150559b9b0dc695a5675594213077acf1_prof);

        
        $__internal_5845e12df28b2d00a67dce90a229bfce8f25283e432125f3071f24bf737b3fd9->leave($__internal_5845e12df28b2d00a67dce90a229bfce8f25283e432125f3071f24bf737b3fd9_prof);

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
