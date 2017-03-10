<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f36809a933f07499a17a19595c53b10aa963ae08aa007722828a211328d0e041 extends Twig_Template
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
        $__internal_221b46abe07cc05e0181af74e4672194f310db6e0af62d8a6a1eacbf79b904ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_221b46abe07cc05e0181af74e4672194f310db6e0af62d8a6a1eacbf79b904ab->enter($__internal_221b46abe07cc05e0181af74e4672194f310db6e0af62d8a6a1eacbf79b904ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e72408463a022133fb2539357291ba4985b28285c83a87ebcb09419f9ec645ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72408463a022133fb2539357291ba4985b28285c83a87ebcb09419f9ec645ae->enter($__internal_e72408463a022133fb2539357291ba4985b28285c83a87ebcb09419f9ec645ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_221b46abe07cc05e0181af74e4672194f310db6e0af62d8a6a1eacbf79b904ab->leave($__internal_221b46abe07cc05e0181af74e4672194f310db6e0af62d8a6a1eacbf79b904ab_prof);

        
        $__internal_e72408463a022133fb2539357291ba4985b28285c83a87ebcb09419f9ec645ae->leave($__internal_e72408463a022133fb2539357291ba4985b28285c83a87ebcb09419f9ec645ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
