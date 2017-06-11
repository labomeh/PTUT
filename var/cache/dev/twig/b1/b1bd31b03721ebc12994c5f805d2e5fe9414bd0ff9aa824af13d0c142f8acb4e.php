<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e3dd3fcec98b9598adbbda2902b15ece9856c667421bac9f24eff70e939156bf extends Twig_Template
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
        $__internal_45948d0017fce1a4a6c73ee42d9855d9a2be5bbb4c993518ce76d36599345540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45948d0017fce1a4a6c73ee42d9855d9a2be5bbb4c993518ce76d36599345540->enter($__internal_45948d0017fce1a4a6c73ee42d9855d9a2be5bbb4c993518ce76d36599345540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a204863afd7dfbe7d2bc525b5f751538fdb2aea0172ad1cf06fa46a40538ae81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a204863afd7dfbe7d2bc525b5f751538fdb2aea0172ad1cf06fa46a40538ae81->enter($__internal_a204863afd7dfbe7d2bc525b5f751538fdb2aea0172ad1cf06fa46a40538ae81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_45948d0017fce1a4a6c73ee42d9855d9a2be5bbb4c993518ce76d36599345540->leave($__internal_45948d0017fce1a4a6c73ee42d9855d9a2be5bbb4c993518ce76d36599345540_prof);

        
        $__internal_a204863afd7dfbe7d2bc525b5f751538fdb2aea0172ad1cf06fa46a40538ae81->leave($__internal_a204863afd7dfbe7d2bc525b5f751538fdb2aea0172ad1cf06fa46a40538ae81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
