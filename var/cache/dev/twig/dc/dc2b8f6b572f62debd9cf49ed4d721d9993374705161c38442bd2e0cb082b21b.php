<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7705f5f16ae20cf321cf838896f6a640eec275c13d7f0c049caaef631ce3e3a7 extends Twig_Template
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
        $__internal_806aa60b4ee3d2f3c31d7df07c9dc0523ed01b50aba998a979bccbfacfaf575e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806aa60b4ee3d2f3c31d7df07c9dc0523ed01b50aba998a979bccbfacfaf575e->enter($__internal_806aa60b4ee3d2f3c31d7df07c9dc0523ed01b50aba998a979bccbfacfaf575e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_4595ee957711189b15c48cb7ba35f41818587dd713a3a82cdb6ea8704f9b4a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4595ee957711189b15c48cb7ba35f41818587dd713a3a82cdb6ea8704f9b4a06->enter($__internal_4595ee957711189b15c48cb7ba35f41818587dd713a3a82cdb6ea8704f9b4a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_806aa60b4ee3d2f3c31d7df07c9dc0523ed01b50aba998a979bccbfacfaf575e->leave($__internal_806aa60b4ee3d2f3c31d7df07c9dc0523ed01b50aba998a979bccbfacfaf575e_prof);

        
        $__internal_4595ee957711189b15c48cb7ba35f41818587dd713a3a82cdb6ea8704f9b4a06->leave($__internal_4595ee957711189b15c48cb7ba35f41818587dd713a3a82cdb6ea8704f9b4a06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
