<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_54a401c09d8ea77c280ac987856b5d9d29383e87b33a18e4aed09b720cf07d61 extends Twig_Template
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
        $__internal_03ed6d1b851540a1dd5213cdce720d471464ebe09d332edf92634980c109bfb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ed6d1b851540a1dd5213cdce720d471464ebe09d332edf92634980c109bfb0->enter($__internal_03ed6d1b851540a1dd5213cdce720d471464ebe09d332edf92634980c109bfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ba5d79c588139361aab93bb0d504251a25626f5b6f1e4cbc462665d67c987250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5d79c588139361aab93bb0d504251a25626f5b6f1e4cbc462665d67c987250->enter($__internal_ba5d79c588139361aab93bb0d504251a25626f5b6f1e4cbc462665d67c987250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_03ed6d1b851540a1dd5213cdce720d471464ebe09d332edf92634980c109bfb0->leave($__internal_03ed6d1b851540a1dd5213cdce720d471464ebe09d332edf92634980c109bfb0_prof);

        
        $__internal_ba5d79c588139361aab93bb0d504251a25626f5b6f1e4cbc462665d67c987250->leave($__internal_ba5d79c588139361aab93bb0d504251a25626f5b6f1e4cbc462665d67c987250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
