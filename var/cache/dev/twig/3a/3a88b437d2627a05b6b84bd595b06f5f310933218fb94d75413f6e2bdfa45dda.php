<?php

/* base.html.twig */
class __TwigTemplate_76ecb4b6eab5e517c7c918daf5462c70d04063a7d433480cdc8b6304e972c54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e651d6476934ff5511c331ba2c11114980b66b86e0a766ee16a9ddc867aca7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e651d6476934ff5511c331ba2c11114980b66b86e0a766ee16a9ddc867aca7ca->enter($__internal_e651d6476934ff5511c331ba2c11114980b66b86e0a766ee16a9ddc867aca7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5993d752b9f369c19e368af67e24bbbbf5e6a24bd530c21e894b8b1438b51b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5993d752b9f369c19e368af67e24bbbbf5e6a24bd530c21e894b8b1438b51b73->enter($__internal_5993d752b9f369c19e368af67e24bbbbf5e6a24bd530c21e894b8b1438b51b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e651d6476934ff5511c331ba2c11114980b66b86e0a766ee16a9ddc867aca7ca->leave($__internal_e651d6476934ff5511c331ba2c11114980b66b86e0a766ee16a9ddc867aca7ca_prof);

        
        $__internal_5993d752b9f369c19e368af67e24bbbbf5e6a24bd530c21e894b8b1438b51b73->leave($__internal_5993d752b9f369c19e368af67e24bbbbf5e6a24bd530c21e894b8b1438b51b73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e846362779e2a0149a275799c631b6ac40ab86f0e10c8615ab381edfa52fd1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e846362779e2a0149a275799c631b6ac40ab86f0e10c8615ab381edfa52fd1d->enter($__internal_0e846362779e2a0149a275799c631b6ac40ab86f0e10c8615ab381edfa52fd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1cce7033390439eb86a2b10b3bea3c057f22940da5c7e8a2a78e550b8ac941e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cce7033390439eb86a2b10b3bea3c057f22940da5c7e8a2a78e550b8ac941e4->enter($__internal_1cce7033390439eb86a2b10b3bea3c057f22940da5c7e8a2a78e550b8ac941e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1cce7033390439eb86a2b10b3bea3c057f22940da5c7e8a2a78e550b8ac941e4->leave($__internal_1cce7033390439eb86a2b10b3bea3c057f22940da5c7e8a2a78e550b8ac941e4_prof);

        
        $__internal_0e846362779e2a0149a275799c631b6ac40ab86f0e10c8615ab381edfa52fd1d->leave($__internal_0e846362779e2a0149a275799c631b6ac40ab86f0e10c8615ab381edfa52fd1d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85cdce3e51ec39052a35362fc565773c186ac3fae6665f8906a5fa1664597499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85cdce3e51ec39052a35362fc565773c186ac3fae6665f8906a5fa1664597499->enter($__internal_85cdce3e51ec39052a35362fc565773c186ac3fae6665f8906a5fa1664597499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a1130258d96d0e27fed3276f6d0bba72bf0528b95cd76c938217dc47122c69d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1130258d96d0e27fed3276f6d0bba72bf0528b95cd76c938217dc47122c69d8->enter($__internal_a1130258d96d0e27fed3276f6d0bba72bf0528b95cd76c938217dc47122c69d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a1130258d96d0e27fed3276f6d0bba72bf0528b95cd76c938217dc47122c69d8->leave($__internal_a1130258d96d0e27fed3276f6d0bba72bf0528b95cd76c938217dc47122c69d8_prof);

        
        $__internal_85cdce3e51ec39052a35362fc565773c186ac3fae6665f8906a5fa1664597499->leave($__internal_85cdce3e51ec39052a35362fc565773c186ac3fae6665f8906a5fa1664597499_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_098a184650b89c12012a60afe8f300b7c6394d886b677efc6db5d69230097693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098a184650b89c12012a60afe8f300b7c6394d886b677efc6db5d69230097693->enter($__internal_098a184650b89c12012a60afe8f300b7c6394d886b677efc6db5d69230097693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3caf6940d07e885c903e591ae4d081c69380bd50556224ff398779103ed188ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3caf6940d07e885c903e591ae4d081c69380bd50556224ff398779103ed188ce->enter($__internal_3caf6940d07e885c903e591ae4d081c69380bd50556224ff398779103ed188ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3caf6940d07e885c903e591ae4d081c69380bd50556224ff398779103ed188ce->leave($__internal_3caf6940d07e885c903e591ae4d081c69380bd50556224ff398779103ed188ce_prof);

        
        $__internal_098a184650b89c12012a60afe8f300b7c6394d886b677efc6db5d69230097693->leave($__internal_098a184650b89c12012a60afe8f300b7c6394d886b677efc6db5d69230097693_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b4bbe8f24bb82a847133dc3262dfa78eea3aadeac984f45cca4d6b4ed80bb76c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bbe8f24bb82a847133dc3262dfa78eea3aadeac984f45cca4d6b4ed80bb76c->enter($__internal_b4bbe8f24bb82a847133dc3262dfa78eea3aadeac984f45cca4d6b4ed80bb76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3cb12a64e8056aa881f3c9aba3e3b7b54781387cee48e61e0fd4fe331748405d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb12a64e8056aa881f3c9aba3e3b7b54781387cee48e61e0fd4fe331748405d->enter($__internal_3cb12a64e8056aa881f3c9aba3e3b7b54781387cee48e61e0fd4fe331748405d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3cb12a64e8056aa881f3c9aba3e3b7b54781387cee48e61e0fd4fe331748405d->leave($__internal_3cb12a64e8056aa881f3c9aba3e3b7b54781387cee48e61e0fd4fe331748405d_prof);

        
        $__internal_b4bbe8f24bb82a847133dc3262dfa78eea3aadeac984f45cca4d6b4ed80bb76c->leave($__internal_b4bbe8f24bb82a847133dc3262dfa78eea3aadeac984f45cca4d6b4ed80bb76c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\PTUT\\app\\Resources\\views\\base.html.twig");
    }
}
