<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c1ed83546a1edf4d3ec876e659bb94ef614f3c83aba763ca9e506bac27e40f94 extends Twig_Template
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
        $__internal_b2024544b0362e7a150c9458a20383ab7f62b9d8a554863d9fa421eface8a15c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2024544b0362e7a150c9458a20383ab7f62b9d8a554863d9fa421eface8a15c->enter($__internal_b2024544b0362e7a150c9458a20383ab7f62b9d8a554863d9fa421eface8a15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9d76df3d91f75cac021b51272ca7bc7c9da1aab4b25edb91c6396ee7810964ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d76df3d91f75cac021b51272ca7bc7c9da1aab4b25edb91c6396ee7810964ac->enter($__internal_9d76df3d91f75cac021b51272ca7bc7c9da1aab4b25edb91c6396ee7810964ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b2024544b0362e7a150c9458a20383ab7f62b9d8a554863d9fa421eface8a15c->leave($__internal_b2024544b0362e7a150c9458a20383ab7f62b9d8a554863d9fa421eface8a15c_prof);

        
        $__internal_9d76df3d91f75cac021b51272ca7bc7c9da1aab4b25edb91c6396ee7810964ac->leave($__internal_9d76df3d91f75cac021b51272ca7bc7c9da1aab4b25edb91c6396ee7810964ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
