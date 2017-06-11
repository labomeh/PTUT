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
        $__internal_ffec3639e3c76bebec5ff095de3de888559372bd79e94f063beaa0eb49107f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffec3639e3c76bebec5ff095de3de888559372bd79e94f063beaa0eb49107f30->enter($__internal_ffec3639e3c76bebec5ff095de3de888559372bd79e94f063beaa0eb49107f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1301e42e617167e60263e07d9be48b8330f5402c81a5bef51cb040aa7b548ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1301e42e617167e60263e07d9be48b8330f5402c81a5bef51cb040aa7b548ee5->enter($__internal_1301e42e617167e60263e07d9be48b8330f5402c81a5bef51cb040aa7b548ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ffec3639e3c76bebec5ff095de3de888559372bd79e94f063beaa0eb49107f30->leave($__internal_ffec3639e3c76bebec5ff095de3de888559372bd79e94f063beaa0eb49107f30_prof);

        
        $__internal_1301e42e617167e60263e07d9be48b8330f5402c81a5bef51cb040aa7b548ee5->leave($__internal_1301e42e617167e60263e07d9be48b8330f5402c81a5bef51cb040aa7b548ee5_prof);

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
