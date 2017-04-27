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
        $__internal_d7c205d07ddba57562c294b1aa90c5d4314be8acfa531f17af2df1c81be13771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7c205d07ddba57562c294b1aa90c5d4314be8acfa531f17af2df1c81be13771->enter($__internal_d7c205d07ddba57562c294b1aa90c5d4314be8acfa531f17af2df1c81be13771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $__internal_99845bad84763dcc952a7804aac4de6d7f85a9643a598c347396ea6db3147e66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99845bad84763dcc952a7804aac4de6d7f85a9643a598c347396ea6db3147e66->enter($__internal_99845bad84763dcc952a7804aac4de6d7f85a9643a598c347396ea6db3147e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7c205d07ddba57562c294b1aa90c5d4314be8acfa531f17af2df1c81be13771->leave($__internal_d7c205d07ddba57562c294b1aa90c5d4314be8acfa531f17af2df1c81be13771_prof);

        
        $__internal_99845bad84763dcc952a7804aac4de6d7f85a9643a598c347396ea6db3147e66->leave($__internal_99845bad84763dcc952a7804aac4de6d7f85a9643a598c347396ea6db3147e66_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_91b8e62346f92b4b10885ce4c8058aa4545e83fa493473a081b86da7e3b65b6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91b8e62346f92b4b10885ce4c8058aa4545e83fa493473a081b86da7e3b65b6b->enter($__internal_91b8e62346f92b4b10885ce4c8058aa4545e83fa493473a081b86da7e3b65b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_c063c1f15e4ca921befcc39ffb3421977aa7b10aa752e7bfa60e7b431fa3b03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c063c1f15e4ca921befcc39ffb3421977aa7b10aa752e7bfa60e7b431fa3b03b->enter($__internal_c063c1f15e4ca921befcc39ffb3421977aa7b10aa752e7bfa60e7b431fa3b03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_c063c1f15e4ca921befcc39ffb3421977aa7b10aa752e7bfa60e7b431fa3b03b->leave($__internal_c063c1f15e4ca921befcc39ffb3421977aa7b10aa752e7bfa60e7b431fa3b03b_prof);

        
        $__internal_91b8e62346f92b4b10885ce4c8058aa4545e83fa493473a081b86da7e3b65b6b->leave($__internal_91b8e62346f92b4b10885ce4c8058aa4545e83fa493473a081b86da7e3b65b6b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b134e0a27e36641c97853ffc507fc79cbc704dd696c59354bd560690dccffdf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b134e0a27e36641c97853ffc507fc79cbc704dd696c59354bd560690dccffdf2->enter($__internal_b134e0a27e36641c97853ffc507fc79cbc704dd696c59354bd560690dccffdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_769889334cf676121b733c3dc206c43f487366c7503c720784e5829da8ae3de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769889334cf676121b733c3dc206c43f487366c7503c720784e5829da8ae3de4->enter($__internal_769889334cf676121b733c3dc206c43f487366c7503c720784e5829da8ae3de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_769889334cf676121b733c3dc206c43f487366c7503c720784e5829da8ae3de4->leave($__internal_769889334cf676121b733c3dc206c43f487366c7503c720784e5829da8ae3de4_prof);

        
        $__internal_b134e0a27e36641c97853ffc507fc79cbc704dd696c59354bd560690dccffdf2->leave($__internal_b134e0a27e36641c97853ffc507fc79cbc704dd696c59354bd560690dccffdf2_prof);

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

{%endblock%}", "PTUTPlatformBundle:Platform:home.html.twig", "C:\\wamp64\\www\\ptut\\src\\PTUT\\PlatformBundle/Resources/views/Platform/home.html.twig");
    }
}
