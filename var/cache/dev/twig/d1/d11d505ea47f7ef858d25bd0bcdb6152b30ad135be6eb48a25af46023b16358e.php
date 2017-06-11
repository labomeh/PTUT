<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_dece533eae3a867b80852feeb852d1e792806433d3124856faabc9498796bf79 extends Twig_Template
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
        $__internal_95955990659bb5f1dbb5267b9deb371ed4477c5801a4d0177bebe5a8a6018a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95955990659bb5f1dbb5267b9deb371ed4477c5801a4d0177bebe5a8a6018a9c->enter($__internal_95955990659bb5f1dbb5267b9deb371ed4477c5801a4d0177bebe5a8a6018a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_83a8fd9c80dfce0f8a4872585f2ffd941db548eab4d8d3c4f5f01f90b0c6867b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a8fd9c80dfce0f8a4872585f2ffd941db548eab4d8d3c4f5f01f90b0c6867b->enter($__internal_83a8fd9c80dfce0f8a4872585f2ffd941db548eab4d8d3c4f5f01f90b0c6867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_95955990659bb5f1dbb5267b9deb371ed4477c5801a4d0177bebe5a8a6018a9c->leave($__internal_95955990659bb5f1dbb5267b9deb371ed4477c5801a4d0177bebe5a8a6018a9c_prof);

        
        $__internal_83a8fd9c80dfce0f8a4872585f2ffd941db548eab4d8d3c4f5f01f90b0c6867b->leave($__internal_83a8fd9c80dfce0f8a4872585f2ffd941db548eab4d8d3c4f5f01f90b0c6867b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
