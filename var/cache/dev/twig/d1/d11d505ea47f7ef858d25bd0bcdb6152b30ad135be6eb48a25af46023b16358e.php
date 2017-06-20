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
        $__internal_7262b9c83cded4a81b7e7909a5873be44a84e9bc7796765ae33cce98162dd24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7262b9c83cded4a81b7e7909a5873be44a84e9bc7796765ae33cce98162dd24d->enter($__internal_7262b9c83cded4a81b7e7909a5873be44a84e9bc7796765ae33cce98162dd24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e76410a7ef39a0b9402cd51cdf1ee0b0483510c9860ab8aa00e73fc57b7d6f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76410a7ef39a0b9402cd51cdf1ee0b0483510c9860ab8aa00e73fc57b7d6f20->enter($__internal_e76410a7ef39a0b9402cd51cdf1ee0b0483510c9860ab8aa00e73fc57b7d6f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_7262b9c83cded4a81b7e7909a5873be44a84e9bc7796765ae33cce98162dd24d->leave($__internal_7262b9c83cded4a81b7e7909a5873be44a84e9bc7796765ae33cce98162dd24d_prof);

        
        $__internal_e76410a7ef39a0b9402cd51cdf1ee0b0483510c9860ab8aa00e73fc57b7d6f20->leave($__internal_e76410a7ef39a0b9402cd51cdf1ee0b0483510c9860ab8aa00e73fc57b7d6f20_prof);

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
