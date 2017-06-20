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
        $__internal_83a6aca37fa8a5ac83f360c5c41be37c463766da086da707cf8e29c600517471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a6aca37fa8a5ac83f360c5c41be37c463766da086da707cf8e29c600517471->enter($__internal_83a6aca37fa8a5ac83f360c5c41be37c463766da086da707cf8e29c600517471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7262841f9fb5b9f23b4639170a324be97408dd66be46330afea14f75dd751589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7262841f9fb5b9f23b4639170a324be97408dd66be46330afea14f75dd751589->enter($__internal_7262841f9fb5b9f23b4639170a324be97408dd66be46330afea14f75dd751589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_83a6aca37fa8a5ac83f360c5c41be37c463766da086da707cf8e29c600517471->leave($__internal_83a6aca37fa8a5ac83f360c5c41be37c463766da086da707cf8e29c600517471_prof);

        
        $__internal_7262841f9fb5b9f23b4639170a324be97408dd66be46330afea14f75dd751589->leave($__internal_7262841f9fb5b9f23b4639170a324be97408dd66be46330afea14f75dd751589_prof);

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
