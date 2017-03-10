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
        $__internal_fdcbe169a86c03c786a346518c82061a471e86e4375aee1ba8f642df273e2d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdcbe169a86c03c786a346518c82061a471e86e4375aee1ba8f642df273e2d63->enter($__internal_fdcbe169a86c03c786a346518c82061a471e86e4375aee1ba8f642df273e2d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdcbe169a86c03c786a346518c82061a471e86e4375aee1ba8f642df273e2d63->leave($__internal_fdcbe169a86c03c786a346518c82061a471e86e4375aee1ba8f642df273e2d63_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_9d513c134ca043a0a0766efb02063297b0af6a4e2d80396d1aa4e6f6fb97fde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d513c134ca043a0a0766efb02063297b0af6a4e2d80396d1aa4e6f6fb97fde7->enter($__internal_9d513c134ca043a0a0766efb02063297b0af6a4e2d80396d1aa4e6f6fb97fde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_9d513c134ca043a0a0766efb02063297b0af6a4e2d80396d1aa4e6f6fb97fde7->leave($__internal_9d513c134ca043a0a0766efb02063297b0af6a4e2d80396d1aa4e6f6fb97fde7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_87d547b0eda84789ed934095b78a60d97bc90f110ef324bb0609c8528b79088f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d547b0eda84789ed934095b78a60d97bc90f110ef324bb0609c8528b79088f->enter($__internal_87d547b0eda84789ed934095b78a60d97bc90f110ef324bb0609c8528b79088f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87d547b0eda84789ed934095b78a60d97bc90f110ef324bb0609c8528b79088f->leave($__internal_87d547b0eda84789ed934095b78a60d97bc90f110ef324bb0609c8528b79088f_prof);

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

{%endblock%}", "PTUTPlatformBundle:Platform:home.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle/Resources/views/Platform/home.html.twig");
    }
}
