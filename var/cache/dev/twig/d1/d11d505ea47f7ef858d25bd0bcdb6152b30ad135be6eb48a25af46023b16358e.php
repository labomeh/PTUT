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
        $__internal_5a308cb5d959578099b50981503e47100c73b8bddf94010e46dbd858dc5a22b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a308cb5d959578099b50981503e47100c73b8bddf94010e46dbd858dc5a22b9->enter($__internal_5a308cb5d959578099b50981503e47100c73b8bddf94010e46dbd858dc5a22b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_16e51dfdfb587614ad1b99cc42ef787626266c715096202947191cfb850552b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e51dfdfb587614ad1b99cc42ef787626266c715096202947191cfb850552b3->enter($__internal_16e51dfdfb587614ad1b99cc42ef787626266c715096202947191cfb850552b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5a308cb5d959578099b50981503e47100c73b8bddf94010e46dbd858dc5a22b9->leave($__internal_5a308cb5d959578099b50981503e47100c73b8bddf94010e46dbd858dc5a22b9_prof);

        
        $__internal_16e51dfdfb587614ad1b99cc42ef787626266c715096202947191cfb850552b3->leave($__internal_16e51dfdfb587614ad1b99cc42ef787626266c715096202947191cfb850552b3_prof);

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
