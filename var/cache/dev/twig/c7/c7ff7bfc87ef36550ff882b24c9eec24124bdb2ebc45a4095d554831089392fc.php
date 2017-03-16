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
        $__internal_6a2a1dd43a831c3ea1781409649afa4df24ecdeff61e6fe9a6e8d178c402b6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2a1dd43a831c3ea1781409649afa4df24ecdeff61e6fe9a6e8d178c402b6af->enter($__internal_6a2a1dd43a831c3ea1781409649afa4df24ecdeff61e6fe9a6e8d178c402b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2e3c7d97b0fe7017be5ecff47933cd96248431404246f6035f56048b53449c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3c7d97b0fe7017be5ecff47933cd96248431404246f6035f56048b53449c7d->enter($__internal_2e3c7d97b0fe7017be5ecff47933cd96248431404246f6035f56048b53449c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6a2a1dd43a831c3ea1781409649afa4df24ecdeff61e6fe9a6e8d178c402b6af->leave($__internal_6a2a1dd43a831c3ea1781409649afa4df24ecdeff61e6fe9a6e8d178c402b6af_prof);

        
        $__internal_2e3c7d97b0fe7017be5ecff47933cd96248431404246f6035f56048b53449c7d->leave($__internal_2e3c7d97b0fe7017be5ecff47933cd96248431404246f6035f56048b53449c7d_prof);

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
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
