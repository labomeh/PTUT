<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_dac9ff7ddf7198b493c34af17936e9afbb8864a3abc7b78b7530e7bb051c0f28 extends Twig_Template
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
        $__internal_a4e2bcc6897412b1bf62d7df4a3b91ed454c359f19985dc5b93563f1a5d9f4c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e2bcc6897412b1bf62d7df4a3b91ed454c359f19985dc5b93563f1a5d9f4c3->enter($__internal_a4e2bcc6897412b1bf62d7df4a3b91ed454c359f19985dc5b93563f1a5d9f4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8dc5e1cd63f31eed43f2368f9dc2fda45df2f484b16b6d8eb7d3ef9d9a434c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc5e1cd63f31eed43f2368f9dc2fda45df2f484b16b6d8eb7d3ef9d9a434c2b->enter($__internal_8dc5e1cd63f31eed43f2368f9dc2fda45df2f484b16b6d8eb7d3ef9d9a434c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_a4e2bcc6897412b1bf62d7df4a3b91ed454c359f19985dc5b93563f1a5d9f4c3->leave($__internal_a4e2bcc6897412b1bf62d7df4a3b91ed454c359f19985dc5b93563f1a5d9f4c3_prof);

        
        $__internal_8dc5e1cd63f31eed43f2368f9dc2fda45df2f484b16b6d8eb7d3ef9d9a434c2b->leave($__internal_8dc5e1cd63f31eed43f2368f9dc2fda45df2f484b16b6d8eb7d3ef9d9a434c2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
