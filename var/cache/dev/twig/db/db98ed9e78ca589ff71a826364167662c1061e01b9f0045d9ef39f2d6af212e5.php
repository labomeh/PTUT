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
        $__internal_cb6aaab725d617129098c8aa97b650fc1f381951d0c9cd5d791d9e77baa3da89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6aaab725d617129098c8aa97b650fc1f381951d0c9cd5d791d9e77baa3da89->enter($__internal_cb6aaab725d617129098c8aa97b650fc1f381951d0c9cd5d791d9e77baa3da89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/home.html.twig"));

        $__internal_25c4a567dede431b02e2616eaf975507855af1798d250d0e62a8c5f9db6795a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c4a567dede431b02e2616eaf975507855af1798d250d0e62a8c5f9db6795a5->enter($__internal_25c4a567dede431b02e2616eaf975507855af1798d250d0e62a8c5f9db6795a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PTUTPlatform/Platform/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb6aaab725d617129098c8aa97b650fc1f381951d0c9cd5d791d9e77baa3da89->leave($__internal_cb6aaab725d617129098c8aa97b650fc1f381951d0c9cd5d791d9e77baa3da89_prof);

        
        $__internal_25c4a567dede431b02e2616eaf975507855af1798d250d0e62a8c5f9db6795a5->leave($__internal_25c4a567dede431b02e2616eaf975507855af1798d250d0e62a8c5f9db6795a5_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_6febd1da57c8fc9e7c3b0caad378909e834fe5a117cbe4f0afdb1ad0d860cc62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6febd1da57c8fc9e7c3b0caad378909e834fe5a117cbe4f0afdb1ad0d860cc62->enter($__internal_6febd1da57c8fc9e7c3b0caad378909e834fe5a117cbe4f0afdb1ad0d860cc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_b45e164e79a43087e60373ec9f88e99551080e07614c2f6d91ce4549647eb60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45e164e79a43087e60373ec9f88e99551080e07614c2f6d91ce4549647eb60b->enter($__internal_b45e164e79a43087e60373ec9f88e99551080e07614c2f6d91ce4549647eb60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_b45e164e79a43087e60373ec9f88e99551080e07614c2f6d91ce4549647eb60b->leave($__internal_b45e164e79a43087e60373ec9f88e99551080e07614c2f6d91ce4549647eb60b_prof);

        
        $__internal_6febd1da57c8fc9e7c3b0caad378909e834fe5a117cbe4f0afdb1ad0d860cc62->leave($__internal_6febd1da57c8fc9e7c3b0caad378909e834fe5a117cbe4f0afdb1ad0d860cc62_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_910ef1a5cc4861bf562f78d12c87f171b796fd31084e00778d31a3c734d7c6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910ef1a5cc4861bf562f78d12c87f171b796fd31084e00778d31a3c734d7c6c0->enter($__internal_910ef1a5cc4861bf562f78d12c87f171b796fd31084e00778d31a3c734d7c6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b22d5916c508731ca934df121977af55d394b834777df0d0c67cfa656e22f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b22d5916c508731ca934df121977af55d394b834777df0d0c67cfa656e22f5c->enter($__internal_6b22d5916c508731ca934df121977af55d394b834777df0d0c67cfa656e22f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

    <section id=\"testimonial\" class=\"pumkin\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"center\">
                        <h2>Derniers articles</h2>
                    </div>
                    <div class=\"gap\"></div>
                    <div class=\"row\">
                        <div id=\"articleG\" class=\"col-md-6\" style=\"opacity:0\">
                            <blockquote>
                                <p> ";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), 0, array(), "array"), "titre", array()), "html", null, true);
        echo " </p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), 1, array(), "array"), "titre", array()), "html", null, true);
        echo "</p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                        </div>
                        <div id=\"articleD\" class=\"col-md-6\" style=\"opacity:0\">
                            <blockquote>
                                <p>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), 2, array(), "array"), "titre", array()), "html", null, true);
        echo "</p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["articles"] ?? $this->getContext($context, "articles")), 3, array(), "array"), "titre", array()), "html", null, true);
        echo "</p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_6b22d5916c508731ca934df121977af55d394b834777df0d0c67cfa656e22f5c->leave($__internal_6b22d5916c508731ca934df121977af55d394b834777df0d0c67cfa656e22f5c_prof);

        
        $__internal_910ef1a5cc4861bf562f78d12c87f171b796fd31084e00778d31a3c734d7c6c0->leave($__internal_910ef1a5cc4861bf562f78d12c87f171b796fd31084e00778d31a3c734d7c6c0_prof);

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
        return array (  171 => 98,  164 => 94,  155 => 88,  148 => 84,  59 => 5,  41 => 3,  11 => 1,);
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

    <section id=\"testimonial\" class=\"pumkin\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"center\">
                        <h2>Derniers articles</h2>
                    </div>
                    <div class=\"gap\"></div>
                    <div class=\"row\">
                        <div id=\"articleG\" class=\"col-md-6\" style=\"opacity:0\">
                            <blockquote>
                                <p> {{ articles[0].titre }} </p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>{{ articles[1].titre }}</p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                        </div>
                        <div id=\"articleD\" class=\"col-md-6\" style=\"opacity:0\">
                            <blockquote>
                                <p>{{ articles[2].titre }}</p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>{{ articles[3].titre }}</p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{%endblock%}", "@PTUTPlatform/Platform/home.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle\\Resources\\views\\Platform\\home.html.twig");
    }
}
