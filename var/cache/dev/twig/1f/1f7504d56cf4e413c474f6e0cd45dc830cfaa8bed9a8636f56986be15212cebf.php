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
        $__internal_777da295550976eaf177984f8e1c4ff78e40a7b3ebd6e44280a1375f56aa9d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777da295550976eaf177984f8e1c4ff78e40a7b3ebd6e44280a1375f56aa9d3a->enter($__internal_777da295550976eaf177984f8e1c4ff78e40a7b3ebd6e44280a1375f56aa9d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d895ebe44b01d8e9f2259b363424e41626a5cac632ac4558a35e918532e94cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d895ebe44b01d8e9f2259b363424e41626a5cac632ac4558a35e918532e94cec->enter($__internal_d895ebe44b01d8e9f2259b363424e41626a5cac632ac4558a35e918532e94cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_777da295550976eaf177984f8e1c4ff78e40a7b3ebd6e44280a1375f56aa9d3a->leave($__internal_777da295550976eaf177984f8e1c4ff78e40a7b3ebd6e44280a1375f56aa9d3a_prof);

        
        $__internal_d895ebe44b01d8e9f2259b363424e41626a5cac632ac4558a35e918532e94cec->leave($__internal_d895ebe44b01d8e9f2259b363424e41626a5cac632ac4558a35e918532e94cec_prof);

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
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
