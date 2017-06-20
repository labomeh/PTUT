<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_66e8bae2ef0bd2c2153a91118f4d3f9ab9780394776fc2a701e2dabe733a3f1a extends Twig_Template
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
        $__internal_8bffd1be335e8e62afcf7c1c8a34e1d888b6f3042d1586c6d9ff3188c83ad598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bffd1be335e8e62afcf7c1c8a34e1d888b6f3042d1586c6d9ff3188c83ad598->enter($__internal_8bffd1be335e8e62afcf7c1c8a34e1d888b6f3042d1586c6d9ff3188c83ad598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_abfe318aa677c35e185ed775c9a5db4a7e0a72e900c8dfff8ba0410ad2e4bda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfe318aa677c35e185ed775c9a5db4a7e0a72e900c8dfff8ba0410ad2e4bda3->enter($__internal_abfe318aa677c35e185ed775c9a5db4a7e0a72e900c8dfff8ba0410ad2e4bda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8bffd1be335e8e62afcf7c1c8a34e1d888b6f3042d1586c6d9ff3188c83ad598->leave($__internal_8bffd1be335e8e62afcf7c1c8a34e1d888b6f3042d1586c6d9ff3188c83ad598_prof);

        
        $__internal_abfe318aa677c35e185ed775c9a5db4a7e0a72e900c8dfff8ba0410ad2e4bda3->leave($__internal_abfe318aa677c35e185ed775c9a5db4a7e0a72e900c8dfff8ba0410ad2e4bda3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5a6da12be697237cf77bdaa199e039c05608e8f2adfde3ec2d69205c2912bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a6da12be697237cf77bdaa199e039c05608e8f2adfde3ec2d69205c2912bdf->enter($__internal_c5a6da12be697237cf77bdaa199e039c05608e8f2adfde3ec2d69205c2912bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_59cc953688e3dca267d7d5932ea727089555097afefca37d91b8fea4f24c885b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59cc953688e3dca267d7d5932ea727089555097afefca37d91b8fea4f24c885b->enter($__internal_59cc953688e3dca267d7d5932ea727089555097afefca37d91b8fea4f24c885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_59cc953688e3dca267d7d5932ea727089555097afefca37d91b8fea4f24c885b->leave($__internal_59cc953688e3dca267d7d5932ea727089555097afefca37d91b8fea4f24c885b_prof);

        
        $__internal_c5a6da12be697237cf77bdaa199e039c05608e8f2adfde3ec2d69205c2912bdf->leave($__internal_c5a6da12be697237cf77bdaa199e039c05608e8f2adfde3ec2d69205c2912bdf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
