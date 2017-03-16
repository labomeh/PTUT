<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cae05033129e673a718ad8a132b696a28ca361b1697bd930631eb9b76a21ddd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b856456d014d4ef0348f0a7e8b80dd440b78577d49414447ea4e92d7161c3905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b856456d014d4ef0348f0a7e8b80dd440b78577d49414447ea4e92d7161c3905->enter($__internal_b856456d014d4ef0348f0a7e8b80dd440b78577d49414447ea4e92d7161c3905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9f56eaf30f849e8f75aded1745ee21599276e0157da8d606498ea9e1c4d9cbca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f56eaf30f849e8f75aded1745ee21599276e0157da8d606498ea9e1c4d9cbca->enter($__internal_9f56eaf30f849e8f75aded1745ee21599276e0157da8d606498ea9e1c4d9cbca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b856456d014d4ef0348f0a7e8b80dd440b78577d49414447ea4e92d7161c3905->leave($__internal_b856456d014d4ef0348f0a7e8b80dd440b78577d49414447ea4e92d7161c3905_prof);

        
        $__internal_9f56eaf30f849e8f75aded1745ee21599276e0157da8d606498ea9e1c4d9cbca->leave($__internal_9f56eaf30f849e8f75aded1745ee21599276e0157da8d606498ea9e1c4d9cbca_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_25b47def7fd40fbf495cf94b059212d958190dcfd227782219157a675dc85762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b47def7fd40fbf495cf94b059212d958190dcfd227782219157a675dc85762->enter($__internal_25b47def7fd40fbf495cf94b059212d958190dcfd227782219157a675dc85762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27097ef16c932ee3aea014ad7fc9e0eb455d4096ff7a86203b2607752d759939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27097ef16c932ee3aea014ad7fc9e0eb455d4096ff7a86203b2607752d759939->enter($__internal_27097ef16c932ee3aea014ad7fc9e0eb455d4096ff7a86203b2607752d759939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_27097ef16c932ee3aea014ad7fc9e0eb455d4096ff7a86203b2607752d759939->leave($__internal_27097ef16c932ee3aea014ad7fc9e0eb455d4096ff7a86203b2607752d759939_prof);

        
        $__internal_25b47def7fd40fbf495cf94b059212d958190dcfd227782219157a675dc85762->leave($__internal_25b47def7fd40fbf495cf94b059212d958190dcfd227782219157a675dc85762_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
