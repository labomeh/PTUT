<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_68e9ecba93191ac4379d3078abcf95a9ec7b5d80bbece4cf55f5f2a2001a3a80 extends Twig_Template
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
        $__internal_e45ff984e8f5bf08d4887188ac16ccdb86ae9ee9aada2fd2e299b2056d9c5b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45ff984e8f5bf08d4887188ac16ccdb86ae9ee9aada2fd2e299b2056d9c5b97->enter($__internal_e45ff984e8f5bf08d4887188ac16ccdb86ae9ee9aada2fd2e299b2056d9c5b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_51a648c8eace355cc6daeb7577391bc83945b0ceed696a90b5dbefa4270665b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a648c8eace355cc6daeb7577391bc83945b0ceed696a90b5dbefa4270665b4->enter($__internal_51a648c8eace355cc6daeb7577391bc83945b0ceed696a90b5dbefa4270665b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e45ff984e8f5bf08d4887188ac16ccdb86ae9ee9aada2fd2e299b2056d9c5b97->leave($__internal_e45ff984e8f5bf08d4887188ac16ccdb86ae9ee9aada2fd2e299b2056d9c5b97_prof);

        
        $__internal_51a648c8eace355cc6daeb7577391bc83945b0ceed696a90b5dbefa4270665b4->leave($__internal_51a648c8eace355cc6daeb7577391bc83945b0ceed696a90b5dbefa4270665b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
