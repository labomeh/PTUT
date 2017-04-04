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
        $__internal_cac39fffb3d0e148eb522ff1e45ed423ce813307be9491eca650329c916888ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac39fffb3d0e148eb522ff1e45ed423ce813307be9491eca650329c916888ad->enter($__internal_cac39fffb3d0e148eb522ff1e45ed423ce813307be9491eca650329c916888ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $__internal_7308770d3d83b10a94bc34e0be1f43e4813e5b7e9a76e4242bc8a1bf2708683a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7308770d3d83b10a94bc34e0be1f43e4813e5b7e9a76e4242bc8a1bf2708683a->enter($__internal_7308770d3d83b10a94bc34e0be1f43e4813e5b7e9a76e4242bc8a1bf2708683a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cac39fffb3d0e148eb522ff1e45ed423ce813307be9491eca650329c916888ad->leave($__internal_cac39fffb3d0e148eb522ff1e45ed423ce813307be9491eca650329c916888ad_prof);

        
        $__internal_7308770d3d83b10a94bc34e0be1f43e4813e5b7e9a76e4242bc8a1bf2708683a->leave($__internal_7308770d3d83b10a94bc34e0be1f43e4813e5b7e9a76e4242bc8a1bf2708683a_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_18ac768d54d53dac4cc1a3a1b28a8764ac6cb90f4a6cc674d3f28468e4eebe16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ac768d54d53dac4cc1a3a1b28a8764ac6cb90f4a6cc674d3f28468e4eebe16->enter($__internal_18ac768d54d53dac4cc1a3a1b28a8764ac6cb90f4a6cc674d3f28468e4eebe16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_c90a9584a16790fbcc0d883cd2e3a1e6fa896a23fb961abf99f9692128119449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90a9584a16790fbcc0d883cd2e3a1e6fa896a23fb961abf99f9692128119449->enter($__internal_c90a9584a16790fbcc0d883cd2e3a1e6fa896a23fb961abf99f9692128119449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_c90a9584a16790fbcc0d883cd2e3a1e6fa896a23fb961abf99f9692128119449->leave($__internal_c90a9584a16790fbcc0d883cd2e3a1e6fa896a23fb961abf99f9692128119449_prof);

        
        $__internal_18ac768d54d53dac4cc1a3a1b28a8764ac6cb90f4a6cc674d3f28468e4eebe16->leave($__internal_18ac768d54d53dac4cc1a3a1b28a8764ac6cb90f4a6cc674d3f28468e4eebe16_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3616eaa673a415bf9b36740cce330ca121ec5172c63172870ecc36591651b69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3616eaa673a415bf9b36740cce330ca121ec5172c63172870ecc36591651b69b->enter($__internal_3616eaa673a415bf9b36740cce330ca121ec5172c63172870ecc36591651b69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa09f01fb443134a44767f8cfedd5a8d1ddddb93c8c8c644b4a7bc314d368f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa09f01fb443134a44767f8cfedd5a8d1ddddb93c8c8c644b4a7bc314d368f97->enter($__internal_aa09f01fb443134a44767f8cfedd5a8d1ddddb93c8c8c644b4a7bc314d368f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aa09f01fb443134a44767f8cfedd5a8d1ddddb93c8c8c644b4a7bc314d368f97->leave($__internal_aa09f01fb443134a44767f8cfedd5a8d1ddddb93c8c8c644b4a7bc314d368f97_prof);

        
        $__internal_3616eaa673a415bf9b36740cce330ca121ec5172c63172870ecc36591651b69b->leave($__internal_3616eaa673a415bf9b36740cce330ca121ec5172c63172870ecc36591651b69b_prof);

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
