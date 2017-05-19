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
        $__internal_a1a49f2884311adcf5641a4b3fe41b7a64f292381370caa8d6f6e897af5330e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a49f2884311adcf5641a4b3fe41b7a64f292381370caa8d6f6e897af5330e4->enter($__internal_a1a49f2884311adcf5641a4b3fe41b7a64f292381370caa8d6f6e897af5330e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_35c5024558c576f59ec0a8b558ea87d7cee4ac0762bbfbe3e08300efc4e3639f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c5024558c576f59ec0a8b558ea87d7cee4ac0762bbfbe3e08300efc4e3639f->enter($__internal_35c5024558c576f59ec0a8b558ea87d7cee4ac0762bbfbe3e08300efc4e3639f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a1a49f2884311adcf5641a4b3fe41b7a64f292381370caa8d6f6e897af5330e4->leave($__internal_a1a49f2884311adcf5641a4b3fe41b7a64f292381370caa8d6f6e897af5330e4_prof);

        
        $__internal_35c5024558c576f59ec0a8b558ea87d7cee4ac0762bbfbe3e08300efc4e3639f->leave($__internal_35c5024558c576f59ec0a8b558ea87d7cee4ac0762bbfbe3e08300efc4e3639f_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
