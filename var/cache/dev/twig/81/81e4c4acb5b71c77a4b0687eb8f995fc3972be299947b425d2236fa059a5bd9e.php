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
        $__internal_16687748098f617a5befe2a311968bf430d955cf0a2ea6b09c04820bf3da939b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16687748098f617a5befe2a311968bf430d955cf0a2ea6b09c04820bf3da939b->enter($__internal_16687748098f617a5befe2a311968bf430d955cf0a2ea6b09c04820bf3da939b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0f9dbb626e94ab4f0be3b3a5a1e4ae6636efc29b2b0106a2589876532e12ceed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9dbb626e94ab4f0be3b3a5a1e4ae6636efc29b2b0106a2589876532e12ceed->enter($__internal_0f9dbb626e94ab4f0be3b3a5a1e4ae6636efc29b2b0106a2589876532e12ceed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_16687748098f617a5befe2a311968bf430d955cf0a2ea6b09c04820bf3da939b->leave($__internal_16687748098f617a5befe2a311968bf430d955cf0a2ea6b09c04820bf3da939b_prof);

        
        $__internal_0f9dbb626e94ab4f0be3b3a5a1e4ae6636efc29b2b0106a2589876532e12ceed->leave($__internal_0f9dbb626e94ab4f0be3b3a5a1e4ae6636efc29b2b0106a2589876532e12ceed_prof);

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
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\ptut\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
