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
        $__internal_1642e62e21adb54242d3df8fdc14cc773b68d832ec5b13cfb7fd8d758fb6367b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1642e62e21adb54242d3df8fdc14cc773b68d832ec5b13cfb7fd8d758fb6367b->enter($__internal_1642e62e21adb54242d3df8fdc14cc773b68d832ec5b13cfb7fd8d758fb6367b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ad75e8e7aae73e9da7117bc6e2135cee1f50fe35215c2433026bb6a821bbfe0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad75e8e7aae73e9da7117bc6e2135cee1f50fe35215c2433026bb6a821bbfe0e->enter($__internal_ad75e8e7aae73e9da7117bc6e2135cee1f50fe35215c2433026bb6a821bbfe0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_1642e62e21adb54242d3df8fdc14cc773b68d832ec5b13cfb7fd8d758fb6367b->leave($__internal_1642e62e21adb54242d3df8fdc14cc773b68d832ec5b13cfb7fd8d758fb6367b_prof);

        
        $__internal_ad75e8e7aae73e9da7117bc6e2135cee1f50fe35215c2433026bb6a821bbfe0e->leave($__internal_ad75e8e7aae73e9da7117bc6e2135cee1f50fe35215c2433026bb6a821bbfe0e_prof);

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
