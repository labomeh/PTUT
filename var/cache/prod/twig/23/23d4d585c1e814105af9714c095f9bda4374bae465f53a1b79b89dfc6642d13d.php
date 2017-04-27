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
        $__internal_234bf95968b9cf1a74fc221f31fb8f86688ae31507f95a91adccdf5c4f66de31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234bf95968b9cf1a74fc221f31fb8f86688ae31507f95a91adccdf5c4f66de31->enter($__internal_234bf95968b9cf1a74fc221f31fb8f86688ae31507f95a91adccdf5c4f66de31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_234bf95968b9cf1a74fc221f31fb8f86688ae31507f95a91adccdf5c4f66de31->leave($__internal_234bf95968b9cf1a74fc221f31fb8f86688ae31507f95a91adccdf5c4f66de31_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_97f492d35984a569485b906445f17a61443fb726746b7ba5db268396b674fefa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f492d35984a569485b906445f17a61443fb726746b7ba5db268396b674fefa->enter($__internal_97f492d35984a569485b906445f17a61443fb726746b7ba5db268396b674fefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_97f492d35984a569485b906445f17a61443fb726746b7ba5db268396b674fefa->leave($__internal_97f492d35984a569485b906445f17a61443fb726746b7ba5db268396b674fefa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e27b890d2f574268ac6a09eeead08fd96f899b1fe9d40adc380e4a70a528f0ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27b890d2f574268ac6a09eeead08fd96f899b1fe9d40adc380e4a70a528f0ae->enter($__internal_e27b890d2f574268ac6a09eeead08fd96f899b1fe9d40adc380e4a70a528f0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 0, array(), "array"), "titre", array()), "html", null, true);
        echo " </p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 1, array(), "array"), "titre", array()), "html", null, true);
        echo "</p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                        </div>
                        <div id=\"articleD\" class=\"col-md-6\" style=\"opacity:0\">
                            <blockquote>
                                <p>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 2, array(), "array"), "titre", array()), "html", null, true);
        echo "</p>
                                <small>Someone famous in <cite title=\"Source Title\">Source Title</cite></small>
                            </blockquote>
                            <blockquote>
                                <p>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), 3, array(), "array"), "titre", array()), "html", null, true);
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
        
        $__internal_e27b890d2f574268ac6a09eeead08fd96f899b1fe9d40adc380e4a70a528f0ae->leave($__internal_e27b890d2f574268ac6a09eeead08fd96f899b1fe9d40adc380e4a70a528f0ae_prof);

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
        return array (  156 => 98,  149 => 94,  140 => 88,  133 => 84,  47 => 5,  35 => 3,  11 => 1,);
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

{%endblock%}", "PTUTPlatformBundle:Platform:home.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle/Resources/views/Platform/home.html.twig");
    }
}
