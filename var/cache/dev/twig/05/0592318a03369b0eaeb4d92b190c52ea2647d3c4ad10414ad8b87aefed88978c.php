<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_27dfc0357f4a86ef8dd9df905b055f309b691c61cae3b23e342a366881a19fbb extends Twig_Template
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
        $__internal_c83db85894fb124cde16926f377375578ba74d6555c2ad6fd91803a273b8c2b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c83db85894fb124cde16926f377375578ba74d6555c2ad6fd91803a273b8c2b2->enter($__internal_c83db85894fb124cde16926f377375578ba74d6555c2ad6fd91803a273b8c2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3dd3a76644379c5b4127d0c12b74276fd43f74e33bb7b7406acce4b02d6391c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd3a76644379c5b4127d0c12b74276fd43f74e33bb7b7406acce4b02d6391c1->enter($__internal_3dd3a76644379c5b4127d0c12b74276fd43f74e33bb7b7406acce4b02d6391c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c83db85894fb124cde16926f377375578ba74d6555c2ad6fd91803a273b8c2b2->leave($__internal_c83db85894fb124cde16926f377375578ba74d6555c2ad6fd91803a273b8c2b2_prof);

        
        $__internal_3dd3a76644379c5b4127d0c12b74276fd43f74e33bb7b7406acce4b02d6391c1->leave($__internal_3dd3a76644379c5b4127d0c12b74276fd43f74e33bb7b7406acce4b02d6391c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
