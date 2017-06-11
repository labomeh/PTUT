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
        $__internal_be7f258fc2f53a787654d19ed136de5203591af84e56f620cc4b0b6648598d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7f258fc2f53a787654d19ed136de5203591af84e56f620cc4b0b6648598d1e->enter($__internal_be7f258fc2f53a787654d19ed136de5203591af84e56f620cc4b0b6648598d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ad69284bcb66fc137f1334d6bc86166211dc1d81fb345c6df4b7d7900410112b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad69284bcb66fc137f1334d6bc86166211dc1d81fb345c6df4b7d7900410112b->enter($__internal_ad69284bcb66fc137f1334d6bc86166211dc1d81fb345c6df4b7d7900410112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_be7f258fc2f53a787654d19ed136de5203591af84e56f620cc4b0b6648598d1e->leave($__internal_be7f258fc2f53a787654d19ed136de5203591af84e56f620cc4b0b6648598d1e_prof);

        
        $__internal_ad69284bcb66fc137f1334d6bc86166211dc1d81fb345c6df4b7d7900410112b->leave($__internal_ad69284bcb66fc137f1334d6bc86166211dc1d81fb345c6df4b7d7900410112b_prof);

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
