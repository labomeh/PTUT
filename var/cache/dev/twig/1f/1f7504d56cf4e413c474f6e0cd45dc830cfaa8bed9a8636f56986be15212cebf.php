<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_79e42e6a4309996e822064f3b5df71e72a20d83c3e2b90f2e6c581430e7f3900 extends Twig_Template
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
        $__internal_13f835cbf7d5986bd8dae8743932c2c9a5a41d50c8ae2fe0590979ef33b633ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f835cbf7d5986bd8dae8743932c2c9a5a41d50c8ae2fe0590979ef33b633ee->enter($__internal_13f835cbf7d5986bd8dae8743932c2c9a5a41d50c8ae2fe0590979ef33b633ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a43c32a1395bbbf6f752ebb9572e6836b992586ca4a9986903b8bd4049594a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43c32a1395bbbf6f752ebb9572e6836b992586ca4a9986903b8bd4049594a90->enter($__internal_a43c32a1395bbbf6f752ebb9572e6836b992586ca4a9986903b8bd4049594a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_13f835cbf7d5986bd8dae8743932c2c9a5a41d50c8ae2fe0590979ef33b633ee->leave($__internal_13f835cbf7d5986bd8dae8743932c2c9a5a41d50c8ae2fe0590979ef33b633ee_prof);

        
        $__internal_a43c32a1395bbbf6f752ebb9572e6836b992586ca4a9986903b8bd4049594a90->leave($__internal_a43c32a1395bbbf6f752ebb9572e6836b992586ca4a9986903b8bd4049594a90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
