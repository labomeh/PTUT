<?php

/* @PTUTPlatform/Platform/home.html.twig */
class __TwigTemplate_61d987fcaea054161f98e630f7675b17a0704e73bedbc33b62ce5da316da8158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PTUTPlatformBundle:Platform:layout.html.twig", "@PTUTPlatform/Platform/home.html.twig", 1);
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
        $__internal_ded1468b7b8be3803b8e489ae161c85a687da6554ee14c424749b0accabd81e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded1468b7b8be3803b8e489ae161c85a687da6554ee14c424749b0accabd81e1->enter($__internal_ded1468b7b8be3803b8e489ae161c85a687da6554ee14c424749b0accabd81e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/home.html.twig"));

        $__internal_2d47c2e480537679c0dbbc22b4f045c4d159164350390268f68755c91f254fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d47c2e480537679c0dbbc22b4f045c4d159164350390268f68755c91f254fdc->enter($__internal_2d47c2e480537679c0dbbc22b4f045c4d159164350390268f68755c91f254fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded1468b7b8be3803b8e489ae161c85a687da6554ee14c424749b0accabd81e1->leave($__internal_ded1468b7b8be3803b8e489ae161c85a687da6554ee14c424749b0accabd81e1_prof);

        
        $__internal_2d47c2e480537679c0dbbc22b4f045c4d159164350390268f68755c91f254fdc->leave($__internal_2d47c2e480537679c0dbbc22b4f045c4d159164350390268f68755c91f254fdc_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_593dbfee03bf95884d52ffa0f96a3a8783a3813fd78e859589ebbdb26fc3c497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_593dbfee03bf95884d52ffa0f96a3a8783a3813fd78e859589ebbdb26fc3c497->enter($__internal_593dbfee03bf95884d52ffa0f96a3a8783a3813fd78e859589ebbdb26fc3c497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_be278c8751430ab682604c782d598b902d163bb6671f68a74f04228ff006b0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be278c8751430ab682604c782d598b902d163bb6671f68a74f04228ff006b0d5->enter($__internal_be278c8751430ab682604c782d598b902d163bb6671f68a74f04228ff006b0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_be278c8751430ab682604c782d598b902d163bb6671f68a74f04228ff006b0d5->leave($__internal_be278c8751430ab682604c782d598b902d163bb6671f68a74f04228ff006b0d5_prof);

        
        $__internal_593dbfee03bf95884d52ffa0f96a3a8783a3813fd78e859589ebbdb26fc3c497->leave($__internal_593dbfee03bf95884d52ffa0f96a3a8783a3813fd78e859589ebbdb26fc3c497_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8cadadca5b64aa4d695e53a0c6bb581e326fdb7b5bddf38ab2933b40bfa1310e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cadadca5b64aa4d695e53a0c6bb581e326fdb7b5bddf38ab2933b40bfa1310e->enter($__internal_8cadadca5b64aa4d695e53a0c6bb581e326fdb7b5bddf38ab2933b40bfa1310e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d0a42abbbfeec3e84487f36c915ab3812f01a48f83d03b731f897d98c71dabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0a42abbbfeec3e84487f36c915ab3812f01a48f83d03b731f897d98c71dabb->enter($__internal_3d0a42abbbfeec3e84487f36c915ab3812f01a48f83d03b731f897d98c71dabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d0a42abbbfeec3e84487f36c915ab3812f01a48f83d03b731f897d98c71dabb->leave($__internal_3d0a42abbbfeec3e84487f36c915ab3812f01a48f83d03b731f897d98c71dabb_prof);

        
        $__internal_8cadadca5b64aa4d695e53a0c6bb581e326fdb7b5bddf38ab2933b40bfa1310e->leave($__internal_8cadadca5b64aa4d695e53a0c6bb581e326fdb7b5bddf38ab2933b40bfa1310e_prof);

    }

    public function getTemplateName()
    {
        return "@PTUTPlatform/Platform/home.html.twig";
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

{%endblock%}", "@PTUTPlatform/Platform/home.html.twig", "C:\\wamp64\\www\\PTUT\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\home.html.twig");
    }
}
