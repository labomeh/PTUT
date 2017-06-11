<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e83c2a9079f6ec12fe68de301d7bf82a50bd4bf40ecd35514fd55bbb7f03b097 extends Twig_Template
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
        $__internal_f4d6a704a4047623a616a4d4d6e6da48be61352b26afd7da5adc6203e7d9d5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d6a704a4047623a616a4d4d6e6da48be61352b26afd7da5adc6203e7d9d5bc->enter($__internal_f4d6a704a4047623a616a4d4d6e6da48be61352b26afd7da5adc6203e7d9d5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_6f1fb6a05088e6f791458df94d2a63551de9e9c1ea637f6c892d1d8b0583cd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1fb6a05088e6f791458df94d2a63551de9e9c1ea637f6c892d1d8b0583cd33->enter($__internal_6f1fb6a05088e6f791458df94d2a63551de9e9c1ea637f6c892d1d8b0583cd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f4d6a704a4047623a616a4d4d6e6da48be61352b26afd7da5adc6203e7d9d5bc->leave($__internal_f4d6a704a4047623a616a4d4d6e6da48be61352b26afd7da5adc6203e7d9d5bc_prof);

        
        $__internal_6f1fb6a05088e6f791458df94d2a63551de9e9c1ea637f6c892d1d8b0583cd33->leave($__internal_6f1fb6a05088e6f791458df94d2a63551de9e9c1ea637f6c892d1d8b0583cd33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
