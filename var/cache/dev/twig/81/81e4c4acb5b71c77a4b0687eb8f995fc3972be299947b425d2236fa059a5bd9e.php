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
        $__internal_c8e6b6419bb4602d69013589b3ee67eefdf0fea2318b89166213a168123af55a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e6b6419bb4602d69013589b3ee67eefdf0fea2318b89166213a168123af55a->enter($__internal_c8e6b6419bb4602d69013589b3ee67eefdf0fea2318b89166213a168123af55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6ff04acb7d086291c6716509416954da7ec8ed7eadd0d709e5a842f2cdf795ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff04acb7d086291c6716509416954da7ec8ed7eadd0d709e5a842f2cdf795ba->enter($__internal_6ff04acb7d086291c6716509416954da7ec8ed7eadd0d709e5a842f2cdf795ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c8e6b6419bb4602d69013589b3ee67eefdf0fea2318b89166213a168123af55a->leave($__internal_c8e6b6419bb4602d69013589b3ee67eefdf0fea2318b89166213a168123af55a_prof);

        
        $__internal_6ff04acb7d086291c6716509416954da7ec8ed7eadd0d709e5a842f2cdf795ba->leave($__internal_6ff04acb7d086291c6716509416954da7ec8ed7eadd0d709e5a842f2cdf795ba_prof);

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
