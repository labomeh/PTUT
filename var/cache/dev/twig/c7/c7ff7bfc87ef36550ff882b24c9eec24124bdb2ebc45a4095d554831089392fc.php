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
        $__internal_f8d6c4d9446fec5fcea5c3745afc84e5d9f79bc264c364e43cbc14b47547b383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d6c4d9446fec5fcea5c3745afc84e5d9f79bc264c364e43cbc14b47547b383->enter($__internal_f8d6c4d9446fec5fcea5c3745afc84e5d9f79bc264c364e43cbc14b47547b383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5173b2d36e8f7f0e3daf094e2bfe127a25a664543b5cf8547eb2e0ad32f670e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5173b2d36e8f7f0e3daf094e2bfe127a25a664543b5cf8547eb2e0ad32f670e7->enter($__internal_5173b2d36e8f7f0e3daf094e2bfe127a25a664543b5cf8547eb2e0ad32f670e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f8d6c4d9446fec5fcea5c3745afc84e5d9f79bc264c364e43cbc14b47547b383->leave($__internal_f8d6c4d9446fec5fcea5c3745afc84e5d9f79bc264c364e43cbc14b47547b383_prof);

        
        $__internal_5173b2d36e8f7f0e3daf094e2bfe127a25a664543b5cf8547eb2e0ad32f670e7->leave($__internal_5173b2d36e8f7f0e3daf094e2bfe127a25a664543b5cf8547eb2e0ad32f670e7_prof);

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
