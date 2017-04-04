<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c6b29fdb34b2ae741a02c62ef09a0660ef07dc2dc26ca52bccb62100c7d7df5b extends Twig_Template
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
        $__internal_cb9b16abf8f5b79c42f8b58cb0084f32e1a9059d54080f1a8d839ba2f99690de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb9b16abf8f5b79c42f8b58cb0084f32e1a9059d54080f1a8d839ba2f99690de->enter($__internal_cb9b16abf8f5b79c42f8b58cb0084f32e1a9059d54080f1a8d839ba2f99690de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7568f06589f5d23b639b8c471522961548f490a611e29162d44dc8e9109bd86b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7568f06589f5d23b639b8c471522961548f490a611e29162d44dc8e9109bd86b->enter($__internal_7568f06589f5d23b639b8c471522961548f490a611e29162d44dc8e9109bd86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cb9b16abf8f5b79c42f8b58cb0084f32e1a9059d54080f1a8d839ba2f99690de->leave($__internal_cb9b16abf8f5b79c42f8b58cb0084f32e1a9059d54080f1a8d839ba2f99690de_prof);

        
        $__internal_7568f06589f5d23b639b8c471522961548f490a611e29162d44dc8e9109bd86b->leave($__internal_7568f06589f5d23b639b8c471522961548f490a611e29162d44dc8e9109bd86b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
