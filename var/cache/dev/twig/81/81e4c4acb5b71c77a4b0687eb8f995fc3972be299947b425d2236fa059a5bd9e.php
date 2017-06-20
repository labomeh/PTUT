<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_eee9f7b46636b96b348ec436d5894ae81dab8ed0a583921ceaf1591029d61bfe extends Twig_Template
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
        $__internal_ef847b1a3ec0ce1b57d897f38e762b8abf3cc982f05e007d6c7b1d0c9f9effeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef847b1a3ec0ce1b57d897f38e762b8abf3cc982f05e007d6c7b1d0c9f9effeb->enter($__internal_ef847b1a3ec0ce1b57d897f38e762b8abf3cc982f05e007d6c7b1d0c9f9effeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6522572a9b57d3a1f5714bcd1ee2440bf85fd77e9ed54c79b95b19fc44d9e96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6522572a9b57d3a1f5714bcd1ee2440bf85fd77e9ed54c79b95b19fc44d9e96f->enter($__internal_6522572a9b57d3a1f5714bcd1ee2440bf85fd77e9ed54c79b95b19fc44d9e96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ef847b1a3ec0ce1b57d897f38e762b8abf3cc982f05e007d6c7b1d0c9f9effeb->leave($__internal_ef847b1a3ec0ce1b57d897f38e762b8abf3cc982f05e007d6c7b1d0c9f9effeb_prof);

        
        $__internal_6522572a9b57d3a1f5714bcd1ee2440bf85fd77e9ed54c79b95b19fc44d9e96f->leave($__internal_6522572a9b57d3a1f5714bcd1ee2440bf85fd77e9ed54c79b95b19fc44d9e96f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\PTUT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
