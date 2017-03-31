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
        $__internal_5b4d478c9b8bcacba86398183e5eb6198ce6267613c46a73a5dddc68a2212eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b4d478c9b8bcacba86398183e5eb6198ce6267613c46a73a5dddc68a2212eb6->enter($__internal_5b4d478c9b8bcacba86398183e5eb6198ce6267613c46a73a5dddc68a2212eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $__internal_98b9123670e06cdbf3197904308bb1d8e1ba6ae26b0b4b09f718fb51c1bdba83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b9123670e06cdbf3197904308bb1d8e1ba6ae26b0b4b09f718fb51c1bdba83->enter($__internal_98b9123670e06cdbf3197904308bb1d8e1ba6ae26b0b4b09f718fb51c1bdba83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PTUTPlatformBundle:Platform:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b4d478c9b8bcacba86398183e5eb6198ce6267613c46a73a5dddc68a2212eb6->leave($__internal_5b4d478c9b8bcacba86398183e5eb6198ce6267613c46a73a5dddc68a2212eb6_prof);

        
        $__internal_98b9123670e06cdbf3197904308bb1d8e1ba6ae26b0b4b09f718fb51c1bdba83->leave($__internal_98b9123670e06cdbf3197904308bb1d8e1ba6ae26b0b4b09f718fb51c1bdba83_prof);

    }

    // line 3
    public function block_ongletHome($context, array $blocks = array())
    {
        $__internal_6090341789ec5fbad48fcc65fde7d8e0e23bb2e7e57bcd186b195be9600defb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6090341789ec5fbad48fcc65fde7d8e0e23bb2e7e57bcd186b195be9600defb4->enter($__internal_6090341789ec5fbad48fcc65fde7d8e0e23bb2e7e57bcd186b195be9600defb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        $__internal_df526af1ae85dc9268c208b649a488ba3a8d918aec4a9fa9b381f674dce8d05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df526af1ae85dc9268c208b649a488ba3a8d918aec4a9fa9b381f674dce8d05e->enter($__internal_df526af1ae85dc9268c208b649a488ba3a8d918aec4a9fa9b381f674dce8d05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ongletHome"));

        echo "active";
        
        $__internal_df526af1ae85dc9268c208b649a488ba3a8d918aec4a9fa9b381f674dce8d05e->leave($__internal_df526af1ae85dc9268c208b649a488ba3a8d918aec4a9fa9b381f674dce8d05e_prof);

        
        $__internal_6090341789ec5fbad48fcc65fde7d8e0e23bb2e7e57bcd186b195be9600defb4->leave($__internal_6090341789ec5fbad48fcc65fde7d8e0e23bb2e7e57bcd186b195be9600defb4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3f837bc44a2a740f0c95648eea95ec0c8acc11616985b96aa4ec6a5de87f576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f837bc44a2a740f0c95648eea95ec0c8acc11616985b96aa4ec6a5de87f576->enter($__internal_a3f837bc44a2a740f0c95648eea95ec0c8acc11616985b96aa4ec6a5de87f576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_144ec4472cfc42e29b235e9768f4c990e3a7987af076de9a0775b989f4ad20ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144ec4472cfc42e29b235e9768f4c990e3a7987af076de9a0775b989f4ad20ee->enter($__internal_144ec4472cfc42e29b235e9768f4c990e3a7987af076de9a0775b989f4ad20ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_144ec4472cfc42e29b235e9768f4c990e3a7987af076de9a0775b989f4ad20ee->leave($__internal_144ec4472cfc42e29b235e9768f4c990e3a7987af076de9a0775b989f4ad20ee_prof);

        
        $__internal_a3f837bc44a2a740f0c95648eea95ec0c8acc11616985b96aa4ec6a5de87f576->leave($__internal_a3f837bc44a2a740f0c95648eea95ec0c8acc11616985b96aa4ec6a5de87f576_prof);

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
