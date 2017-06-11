<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2e89820d082dacb7436a4f5257153955b82787f5da4deb67f71b751e6bae902c extends Twig_Template
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
        $__internal_6f1a9aa86354b59ed25530eb73718a56c1789bce2fa507ff978db5a354658acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1a9aa86354b59ed25530eb73718a56c1789bce2fa507ff978db5a354658acf->enter($__internal_6f1a9aa86354b59ed25530eb73718a56c1789bce2fa507ff978db5a354658acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_32da712728740e1e86678805d96c2fac1fbfcf948ec36ef6cb5fb60872db082e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32da712728740e1e86678805d96c2fac1fbfcf948ec36ef6cb5fb60872db082e->enter($__internal_32da712728740e1e86678805d96c2fac1fbfcf948ec36ef6cb5fb60872db082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6f1a9aa86354b59ed25530eb73718a56c1789bce2fa507ff978db5a354658acf->leave($__internal_6f1a9aa86354b59ed25530eb73718a56c1789bce2fa507ff978db5a354658acf_prof);

        
        $__internal_32da712728740e1e86678805d96c2fac1fbfcf948ec36ef6cb5fb60872db082e->leave($__internal_32da712728740e1e86678805d96c2fac1fbfcf948ec36ef6cb5fb60872db082e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
