<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_fabc27a9437fec0755d8c264109921eb559205db8a820673fb63e51aa7b081f6 extends Twig_Template
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
        $__internal_25bad3681b77ccdd38d1c326cdc8f2e36a613685de5e3b68e4ec86172c4737c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bad3681b77ccdd38d1c326cdc8f2e36a613685de5e3b68e4ec86172c4737c4->enter($__internal_25bad3681b77ccdd38d1c326cdc8f2e36a613685de5e3b68e4ec86172c4737c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c7572d5a4d7c615f5415159c75c66ce484d8740fffb3a28ee8992c7cf44b6307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7572d5a4d7c615f5415159c75c66ce484d8740fffb3a28ee8992c7cf44b6307->enter($__internal_c7572d5a4d7c615f5415159c75c66ce484d8740fffb3a28ee8992c7cf44b6307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_25bad3681b77ccdd38d1c326cdc8f2e36a613685de5e3b68e4ec86172c4737c4->leave($__internal_25bad3681b77ccdd38d1c326cdc8f2e36a613685de5e3b68e4ec86172c4737c4_prof);

        
        $__internal_c7572d5a4d7c615f5415159c75c66ce484d8740fffb3a28ee8992c7cf44b6307->leave($__internal_c7572d5a4d7c615f5415159c75c66ce484d8740fffb3a28ee8992c7cf44b6307_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\" <?php endif ?>
<?php foreach (\$attr as \$k => \$v): ?>
<?php if (in_array(\$k, array('placeholder', 'title'), true)): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}