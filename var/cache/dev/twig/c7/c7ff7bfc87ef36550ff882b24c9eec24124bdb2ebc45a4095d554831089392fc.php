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
        $__internal_70f4bd235db3b47e0d0cb5bf3d0bd5a875243d9073bc52c871e4b25309c10090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f4bd235db3b47e0d0cb5bf3d0bd5a875243d9073bc52c871e4b25309c10090->enter($__internal_70f4bd235db3b47e0d0cb5bf3d0bd5a875243d9073bc52c871e4b25309c10090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bd8de6a463aae60ce42829d0dbc03d8d394ee0e2b66cdd6c857109b2e93d3015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8de6a463aae60ce42829d0dbc03d8d394ee0e2b66cdd6c857109b2e93d3015->enter($__internal_bd8de6a463aae60ce42829d0dbc03d8d394ee0e2b66cdd6c857109b2e93d3015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_70f4bd235db3b47e0d0cb5bf3d0bd5a875243d9073bc52c871e4b25309c10090->leave($__internal_70f4bd235db3b47e0d0cb5bf3d0bd5a875243d9073bc52c871e4b25309c10090_prof);

        
        $__internal_bd8de6a463aae60ce42829d0dbc03d8d394ee0e2b66cdd6c857109b2e93d3015->leave($__internal_bd8de6a463aae60ce42829d0dbc03d8d394ee0e2b66cdd6c857109b2e93d3015_prof);

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
