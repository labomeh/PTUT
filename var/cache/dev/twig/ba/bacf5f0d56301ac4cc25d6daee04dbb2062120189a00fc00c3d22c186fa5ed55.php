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
        $__internal_16485cc0e98e3068f9b56bb7ccdd3f34db5b3ac5afe953e8f515e687ebfb67ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16485cc0e98e3068f9b56bb7ccdd3f34db5b3ac5afe953e8f515e687ebfb67ad->enter($__internal_16485cc0e98e3068f9b56bb7ccdd3f34db5b3ac5afe953e8f515e687ebfb67ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_cc40551303f5b13ee98b39ee9b0ceb4a8d2a3b2ef87b3ef1a78cde76918c073a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc40551303f5b13ee98b39ee9b0ceb4a8d2a3b2ef87b3ef1a78cde76918c073a->enter($__internal_cc40551303f5b13ee98b39ee9b0ceb4a8d2a3b2ef87b3ef1a78cde76918c073a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_16485cc0e98e3068f9b56bb7ccdd3f34db5b3ac5afe953e8f515e687ebfb67ad->leave($__internal_16485cc0e98e3068f9b56bb7ccdd3f34db5b3ac5afe953e8f515e687ebfb67ad_prof);

        
        $__internal_cc40551303f5b13ee98b39ee9b0ceb4a8d2a3b2ef87b3ef1a78cde76918c073a->leave($__internal_cc40551303f5b13ee98b39ee9b0ceb4a8d2a3b2ef87b3ef1a78cde76918c073a_prof);

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
