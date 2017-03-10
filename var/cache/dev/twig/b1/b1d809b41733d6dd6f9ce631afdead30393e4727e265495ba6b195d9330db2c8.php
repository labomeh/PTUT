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
        $__internal_5cc0ac809ce65cac2caa3133e88735482bd076009b8452498c9afbd12818d3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc0ac809ce65cac2caa3133e88735482bd076009b8452498c9afbd12818d3af->enter($__internal_5cc0ac809ce65cac2caa3133e88735482bd076009b8452498c9afbd12818d3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $__internal_c279f917f58611e36cb5323204f878f990728332431820e650a69a3769a15798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c279f917f58611e36cb5323204f878f990728332431820e650a69a3769a15798->enter($__internal_c279f917f58611e36cb5323204f878f990728332431820e650a69a3769a15798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cc0ac809ce65cac2caa3133e88735482bd076009b8452498c9afbd12818d3af->leave($__internal_5cc0ac809ce65cac2caa3133e88735482bd076009b8452498c9afbd12818d3af_prof);

        
        $__internal_c279f917f58611e36cb5323204f878f990728332431820e650a69a3769a15798->leave($__internal_c279f917f58611e36cb5323204f878f990728332431820e650a69a3769a15798_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_9ed7813a2070d76f8f944f28a7a9ee5dbe95f29dd87819be88587d5f43a50eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed7813a2070d76f8f944f28a7a9ee5dbe95f29dd87819be88587d5f43a50eda->enter($__internal_9ed7813a2070d76f8f944f28a7a9ee5dbe95f29dd87819be88587d5f43a50eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_dfc87dd3111ca98a604bd153881f2bf929826d7d5c1d8e199b725497e81eb7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc87dd3111ca98a604bd153881f2bf929826d7d5c1d8e199b725497e81eb7cd->enter($__internal_dfc87dd3111ca98a604bd153881f2bf929826d7d5c1d8e199b725497e81eb7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_dfc87dd3111ca98a604bd153881f2bf929826d7d5c1d8e199b725497e81eb7cd->leave($__internal_dfc87dd3111ca98a604bd153881f2bf929826d7d5c1d8e199b725497e81eb7cd_prof);

        
        $__internal_9ed7813a2070d76f8f944f28a7a9ee5dbe95f29dd87819be88587d5f43a50eda->leave($__internal_9ed7813a2070d76f8f944f28a7a9ee5dbe95f29dd87819be88587d5f43a50eda_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8d9f2605024eb1b9c1fb511ef732a60bfa8123a8952ae9d0be31cd5889f020a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8d9f2605024eb1b9c1fb511ef732a60bfa8123a8952ae9d0be31cd5889f020a->enter($__internal_e8d9f2605024eb1b9c1fb511ef732a60bfa8123a8952ae9d0be31cd5889f020a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0e398714922e19d3662063349e1669fb6d91e27e9f6deb390675902785036e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e398714922e19d3662063349e1669fb6d91e27e9f6deb390675902785036e0->enter($__internal_b0e398714922e19d3662063349e1669fb6d91e27e9f6deb390675902785036e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 

    <section id=\"main-slider\" class=\"no-margin\">
        <div class=\"carousel slide wet-asphalt\">
            <ol class=\"carousel-indicators\">
                <li data-target=\"#main-slider\" data-slide-to=\"0\" class=\"active\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"1\"></li>
                <li data-target=\"#main-slider\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
                <div class=\"item active\" style=\"background-image: url(../../web/bundles/ptutplatform/images/slider/bg1.jpg)\">
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
                <div class=\"item\" style=\"background-image: url(../../web/bundles/ptutplatform/images/slider/bg2.jpg)\">
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
                <div class=\"item\" style=\"background-image: url(../../web/bundles/ptutplatform/images/slider/bg3.jpg)\">
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
        
        $__internal_b0e398714922e19d3662063349e1669fb6d91e27e9f6deb390675902785036e0->leave($__internal_b0e398714922e19d3662063349e1669fb6d91e27e9f6deb390675902785036e0_prof);

        
        $__internal_e8d9f2605024eb1b9c1fb511ef732a60bfa8123a8952ae9d0be31cd5889f020a->leave($__internal_e8d9f2605024eb1b9c1fb511ef732a60bfa8123a8952ae9d0be31cd5889f020a_prof);

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
                <div class=\"item active\" style=\"background-image: url(../../web/bundles/ptutplatform/images/slider/bg1.jpg)\">
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
                <div class=\"item\" style=\"background-image: url(../../web/bundles/ptutplatform/images/slider/bg2.jpg)\">
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
                <div class=\"item\" style=\"background-image: url(../../web/bundles/ptutplatform/images/slider/bg3.jpg)\">
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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
                                                    <a class=\"preview btn btn-danger\" title=\"Malesuada fames ac turpis egestas\" href=\"../../web/bundles/ptutplatform/images/portfolio/full/item1.jpg\" rel=\"prettyPhoto\"><i class=\"icon-eye-open\"></i></a>
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

{%endblock%}", "PTUTPlatformBundle:Platform:home.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle/Resources/views/Platform/home.html.twig");
    }
}
