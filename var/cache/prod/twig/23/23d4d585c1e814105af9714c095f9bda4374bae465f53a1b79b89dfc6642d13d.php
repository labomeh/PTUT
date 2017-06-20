<?php

/* PTUTPlatformBundle:Platform:home.html.twig */
class __TwigTemplate_61589f4adb9ddfc2932e9e9371a01b0811d14ca9b142adaec62d12a866dc6b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PTUTPlatformBundle:Platform:layout.html.twig", "PTUTPlatformBundle:Platform:home.html.twig", 1);
        $this->blocks = array(
            'ongletHome' => array($this, 'block_ongletHome'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PTUTPlatformBundle:Platform:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a74b58e4a6df6c63e35306224a4f1d92fc653619251c7116c24e04d203f41ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a74b58e4a6df6c63e35306224a4f1d92fc653619251c7116c24e04d203f41ff->enter($__internal_7a74b58e4a6df6c63e35306224a4f1d92fc653619251c7116c24e04d203f41ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a74b58e4a6df6c63e35306224a4f1d92fc653619251c7116c24e04d203f41ff->leave($__internal_7a74b58e4a6df6c63e35306224a4f1d92fc653619251c7116c24e04d203f41ff_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_f4001835d1c6f38dee5fddb74f550fcb1e7decab66b35fc4ba3c3e3c78770dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4001835d1c6f38dee5fddb74f550fcb1e7decab66b35fc4ba3c3e3c78770dce->enter($__internal_f4001835d1c6f38dee5fddb74f550fcb1e7decab66b35fc4ba3c3e3c78770dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_f4001835d1c6f38dee5fddb74f550fcb1e7decab66b35fc4ba3c3e3c78770dce->leave($__internal_f4001835d1c6f38dee5fddb74f550fcb1e7decab66b35fc4ba3c3e3c78770dce_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_35354cc6e84750995723b0b86fde36a70fd4a65df39dce6859d95dbc340c5d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35354cc6e84750995723b0b86fde36a70fd4a65df39dce6859d95dbc340c5d5e->enter($__internal_35354cc6e84750995723b0b86fde36a70fd4a65df39dce6859d95dbc340c5d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 

    <section id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide wet-asphalt\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
\t\t\t\t<li data-target=\"#main-slider\" data-slide-to=\"3\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"4\"></li>
\t\t\t\t<li data-target=\"#main-slider\" data-slide-to=\"5\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"6\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"item active\" style=\"background-image: url(bundles/ptutplatform/images/slider/cinema.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Le festival du cinéma vous ouvre ses portes</h2>
                                    <p class=\"animation animated-item-2\">Du 10 au 20 Mai 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
\t\t\t\t
\t\t\t\t<div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/gattaca.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Bienvenue à Gattaca</h2>
                                    <p class=\"animation animated-item-2\">Projections supplémentaires</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
\t\t\t\t
\t\t\t\t<div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/heis.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Heis</h2>
                                    <p class=\"animation animated-item-2\">Le cinéma français à l'honneur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
\t\t\t\t
                <div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/laguerriere.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Guerrière</h2>
                                    <p class=\"animation animated-item-2\">Un film à fleur de peau</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
\t\t\t\t
\t\t\t\t<div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/manfromearth.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">The Man From Earth</h2>
                                    <p class=\"animation animated-item-2\">Un huis clos captivant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
\t\t\t\t
                <div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/manchester.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Manchester by the sea</h2>
                                    <p class=\"animation animated-item-2\">De Casey Affleck</p>
                                </div>
                            </div>
                            <!--
                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"centered\">
                                    <div class=\"embed-container\">
                                        <iframe src=\"//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
            <i class=\"icon-angle-left\"></i>
        </a>
        <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
            <i class=\"icon-angle-right\"></i>
        </a>
    </section>
";
        
        $__internal_35354cc6e84750995723b0b86fde36a70fd4a65df39dce6859d95dbc340c5d5e->leave($__internal_35354cc6e84750995723b0b86fde36a70fd4a65df39dce6859d95dbc340c5d5e_prof);

    }

    public function getTemplateName()
    {
        return "PTUTPlatformBundle:Platform:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PTUTPlatformBundle:Platform:layout.html.twig\" %}

{% block ongletHome %}active{%endblock%}

{% block body %} 

    <section id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide wet-asphalt\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
\t\t\t\t<li data-target=\"#main-slider\" data-slide-to=\"3\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"4\"></li>
\t\t\t\t<li data-target=\"#main-slider\" data-slide-to=\"5\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"6\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"item active\" style=\"background-image: url(bundles/ptutplatform/images/slider/cinema.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Le festival du cinéma vous ouvre ses portes</h2>
                                    <p class=\"animation animated-item-2\">Du 10 au 20 Mai 2017</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
\t\t\t\t
\t\t\t\t<div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/gattaca.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Bienvenue à Gattaca</h2>
                                    <p class=\"animation animated-item-2\">Projections supplémentaires</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
\t\t\t\t
\t\t\t\t<div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/heis.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Heis</h2>
                                    <p class=\"animation animated-item-2\">Le cinéma français à l'honneur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
\t\t\t\t
                <div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/laguerriere.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Guerrière</h2>
                                    <p class=\"animation animated-item-2\">Un film à fleur de peau</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
\t\t\t\t
\t\t\t\t<div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/manfromearth.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">The Man From Earth</h2>
                                    <p class=\"animation animated-item-2\">Un huis clos captivant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
\t\t\t\t
                <div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/manchester.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">Manchester by the sea</h2>
                                    <p class=\"animation animated-item-2\">De Casey Affleck</p>
                                </div>
                            </div>
                            <!--
                            <div class=\"col-sm-6 hidden-xs animation animated-item-4\">
                                <div class=\"centered\">
                                    <div class=\"embed-container\">
                                        <iframe src=\"//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f\" frameborder=\"0\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
            <i class=\"icon-angle-left\"></i>
        </a>
        <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
            <i class=\"icon-angle-right\"></i>
        </a>
    </section>
{%endblock%}", "PTUTPlatformBundle:Platform:home.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/home.html.twig");
    }
}
