<?php

/* PTUTPlatformBundle:Platform:home.html.twig */
class __TwigTemplate_c9a729427a9f6b3c160a5104bcefd6768ddbd438a5efa81c1b04e23886d6d73d extends Twig_Template
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
        $__internal_52f76457d57b3dcfdf5b825917d469feb09c977c73cf2933a8f9af1fb562ff01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f76457d57b3dcfdf5b825917d469feb09c977c73cf2933a8f9af1fb562ff01->enter($__internal_52f76457d57b3dcfdf5b825917d469feb09c977c73cf2933a8f9af1fb562ff01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $__internal_34aa6a0e78e165ba9afa129e25243c481cd55439a166637f89a17289a5f54687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34aa6a0e78e165ba9afa129e25243c481cd55439a166637f89a17289a5f54687->enter($__internal_34aa6a0e78e165ba9afa129e25243c481cd55439a166637f89a17289a5f54687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52f76457d57b3dcfdf5b825917d469feb09c977c73cf2933a8f9af1fb562ff01->leave($__internal_52f76457d57b3dcfdf5b825917d469feb09c977c73cf2933a8f9af1fb562ff01_prof);

        
        $__internal_34aa6a0e78e165ba9afa129e25243c481cd55439a166637f89a17289a5f54687->leave($__internal_34aa6a0e78e165ba9afa129e25243c481cd55439a166637f89a17289a5f54687_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_5292acfcd7479b7376ddd1355d1c394df118887911e722d46370c1630e5c25b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5292acfcd7479b7376ddd1355d1c394df118887911e722d46370c1630e5c25b3->enter($__internal_5292acfcd7479b7376ddd1355d1c394df118887911e722d46370c1630e5c25b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_5360604c51389ee80b4a4241fe1c27260c2cfc8d894d356c1f0a3d76c0002574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5360604c51389ee80b4a4241fe1c27260c2cfc8d894d356c1f0a3d76c0002574->enter($__internal_5360604c51389ee80b4a4241fe1c27260c2cfc8d894d356c1f0a3d76c0002574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_5360604c51389ee80b4a4241fe1c27260c2cfc8d894d356c1f0a3d76c0002574->leave($__internal_5360604c51389ee80b4a4241fe1c27260c2cfc8d894d356c1f0a3d76c0002574_prof);

        
        $__internal_5292acfcd7479b7376ddd1355d1c394df118887911e722d46370c1630e5c25b3->leave($__internal_5292acfcd7479b7376ddd1355d1c394df118887911e722d46370c1630e5c25b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_754251ecfdc6f4c4f2cbf28423fc290f0d14d977108c0ba9f255c83af4ca1d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_754251ecfdc6f4c4f2cbf28423fc290f0d14d977108c0ba9f255c83af4ca1d07->enter($__internal_754251ecfdc6f4c4f2cbf28423fc290f0d14d977108c0ba9f255c83af4ca1d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c9c207f83fa8ecbf9a810721d2a4c7243e2ae4aa2309387587c02c24913576d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c9c207f83fa8ecbf9a810721d2a4c7243e2ae4aa2309387587c02c24913576d->enter($__internal_5c9c207f83fa8ecbf9a810721d2a4c7243e2ae4aa2309387587c02c24913576d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 

    <section id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide wet-asphalt\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"item active\" style=\"background-image: url(bundles/ptutplatform/images/slider/bg1.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">.............................</h2>
                                    <p class=\"animation animated-item-2\">.....................</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/bg2.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content center centered\">
                                    <h2 class=\"boxed animation animated-item-1\">............</h2>
                                    <p class=\"boxed animation animated-item-2\">...............</p>
                                    <br>
                                    <a class=\"btn btn-md animation animated-item-3\" href=\"#\">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/bg3.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">.............................</h2>
                                    <p class=\"animation animated-item-2\">..........</p>
                                    <a class=\"btn btn-md animation animated-item-3\" href=\"#\">Learn More</a>
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

    <section id=\"recent-works\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <h3>Dernières actualités</h3>
                    <p>Derniers commentaires sur les festivals à la mode</p>
                    <div class=\"btn-group\">
                        <a class=\"btn btn-danger\" href=\"#scroller\" data-slide=\"prev\"><i class=\"icon-angle-left\"></i></a>
                        <a class=\"btn btn-danger\" href=\"#scroller\" data-slide=\"next\"><i class=\"icon-angle-right\"></i></a>
                    </div>
                    <p class=\"gap\"></p>
                </div>
                <div class=\"col-md-9\">
                    <div id=\"scroller\" class=\"carousel slide\">
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                           
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class=\"item\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

";
        
        $__internal_5c9c207f83fa8ecbf9a810721d2a4c7243e2ae4aa2309387587c02c24913576d->leave($__internal_5c9c207f83fa8ecbf9a810721d2a4c7243e2ae4aa2309387587c02c24913576d_prof);

        
        $__internal_754251ecfdc6f4c4f2cbf28423fc290f0d14d977108c0ba9f255c83af4ca1d07->leave($__internal_754251ecfdc6f4c4f2cbf28423fc290f0d14d977108c0ba9f255c83af4ca1d07_prof);

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
        return array (  59 => 5,  41 => 3,  11 => 1,);
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
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"item active\" style=\"background-image: url(bundles/ptutplatform/images/slider/bg1.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">.............................</h2>
                                    <p class=\"animation animated-item-2\">.....................</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/bg2.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"carousel-content center centered\">
                                    <h2 class=\"boxed animation animated-item-1\">............</h2>
                                    <p class=\"boxed animation animated-item-2\">...............</p>
                                    <br>
                                    <a class=\"btn btn-md animation animated-item-3\" href=\"#\">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class=\"item\" style=\"background-image: url(bundles/ptutplatform/images/slider/bg3.jpg)\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content centered\">
                                    <h2 class=\"animation animated-item-1\">.............................</h2>
                                    <p class=\"animation animated-item-2\">..........</p>
                                    <a class=\"btn btn-md animation animated-item-3\" href=\"#\">Learn More</a>
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

    <section id=\"recent-works\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <h3>Dernières actualités</h3>
                    <p>Derniers commentaires sur les festivals à la mode</p>
                    <div class=\"btn-group\">
                        <a class=\"btn btn-danger\" href=\"#scroller\" data-slide=\"prev\"><i class=\"icon-angle-left\"></i></a>
                        <a class=\"btn btn-danger\" href=\"#scroller\" data-slide=\"next\"><i class=\"icon-angle-right\"></i></a>
                    </div>
                    <p class=\"gap\"></p>
                </div>
                <div class=\"col-md-9\">
                    <div id=\"scroller\" class=\"carousel slide\">
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                           
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class=\"item\">
                                <div class=\"row\">
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                    <div class=\"col-xs-4\">
                                        <div class=\"portfolio-item\">
                                            <div class=\"item-inner\">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <p> Meilleur festival de ma vie 
                                                </p>
                                                <div class=\"overlay\">
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

{%endblock%}", "PTUTPlatformBundle:Platform:home.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle/Resources/views/Platform/home.html.twig");
    }
}
