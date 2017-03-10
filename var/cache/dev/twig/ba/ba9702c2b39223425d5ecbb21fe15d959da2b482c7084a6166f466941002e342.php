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
        $__internal_ee3fa5e0699a2773f2ed4a6edac0dc4f7d085fa2b81ffffedf78452d235be8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3fa5e0699a2773f2ed4a6edac0dc4f7d085fa2b81ffffedf78452d235be8ff->enter($__internal_ee3fa5e0699a2773f2ed4a6edac0dc4f7d085fa2b81ffffedf78452d235be8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f08064c4ab0875936c67dd99bd9505a6fea0f3d7cff8558ceddba00e567b55ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08064c4ab0875936c67dd99bd9505a6fea0f3d7cff8558ceddba00e567b55ca->enter($__internal_f08064c4ab0875936c67dd99bd9505a6fea0f3d7cff8558ceddba00e567b55ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ee3fa5e0699a2773f2ed4a6edac0dc4f7d085fa2b81ffffedf78452d235be8ff->leave($__internal_ee3fa5e0699a2773f2ed4a6edac0dc4f7d085fa2b81ffffedf78452d235be8ff_prof);

        
        $__internal_f08064c4ab0875936c67dd99bd9505a6fea0f3d7cff8558ceddba00e567b55ca->leave($__internal_f08064c4ab0875936c67dd99bd9505a6fea0f3d7cff8558ceddba00e567b55ca_prof);

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
