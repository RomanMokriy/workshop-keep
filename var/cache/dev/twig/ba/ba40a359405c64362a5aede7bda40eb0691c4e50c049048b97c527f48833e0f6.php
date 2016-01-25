<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_62f14768a1e73b247246e03be46ac8aba5bd4a70fa9e6718669279f4196b8479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:index.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25965fe9058631ba62c055829883408ec5e7f7b939132bf999da239873dde77e = $this->env->getExtension("native_profiler");
        $__internal_25965fe9058631ba62c055829883408ec5e7f7b939132bf999da239873dde77e->enter($__internal_25965fe9058631ba62c055829883408ec5e7f7b939132bf999da239873dde77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25965fe9058631ba62c055829883408ec5e7f7b939132bf999da239873dde77e->leave($__internal_25965fe9058631ba62c055829883408ec5e7f7b939132bf999da239873dde77e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70380271517ced0e7b989dd2b8801195e2cab1038587c8d61c55a3f7fd852343 = $this->env->getExtension("native_profiler");
        $__internal_70380271517ced0e7b989dd2b8801195e2cab1038587c8d61c55a3f7fd852343->enter($__internal_70380271517ced0e7b989dd2b8801195e2cab1038587c8d61c55a3f7fd852343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/Materialize/dist/css/materialize.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_70380271517ced0e7b989dd2b8801195e2cab1038587c8d61c55a3f7fd852343->leave($__internal_70380271517ced0e7b989dd2b8801195e2cab1038587c8d61c55a3f7fd852343_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b51b1f8b807f997559953ff35db60f5944b7c14c1519e07c63437e2eea8f5cf3 = $this->env->getExtension("native_profiler");
        $__internal_b51b1f8b807f997559953ff35db60f5944b7c14c1519e07c63437e2eea8f5cf3->enter($__internal_b51b1f8b807f997559953ff35db60f5944b7c14c1519e07c63437e2eea8f5cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "\t<script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/angular/angular.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/Materialize/dist/js/materialize.min.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "></script>
\t<script src=";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/templates.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_b51b1f8b807f997559953ff35db60f5944b7c14c1519e07c63437e2eea8f5cf3->leave($__internal_b51b1f8b807f997559953ff35db60f5944b7c14c1519e07c63437e2eea8f5cf3_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_36f24a76554b9279904c83eec81ad1e213ca82bab611ebb2f5be420384941124 = $this->env->getExtension("native_profiler");
        $__internal_36f24a76554b9279904c83eec81ad1e213ca82bab611ebb2f5be420384941124->enter($__internal_36f24a76554b9279904c83eec81ad1e213ca82bab611ebb2f5be420384941124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "\t<div ng-app=\"app\" ng-controller=\"IndexController\" >
\t\t<navigation></navigation>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s4 offset-s4\">
\t\t\t\t\t<new-note allnotes=notes></new-note>
\t\t\t</div>
\t\t</div>
";
        // line 27
        echo "\t\t<div class=\"row\" >
\t\t\t<div class=\"col s3\" ng-repeat='note in notes'>
\t\t\t\t\t<note></note>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_36f24a76554b9279904c83eec81ad1e213ca82bab611ebb2f5be420384941124->leave($__internal_36f24a76554b9279904c83eec81ad1e213ca82bab611ebb2f5be420384941124_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  90 => 17,  84 => 16,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  58 => 9,  52 => 8,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* 	<link rel="stylesheet" href="{{ asset('bower_components/Materialize/dist/css/materialize.min.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* 	<script src={{ asset("bower_components/jquery/dist/jquery.min.js") }}></script>*/
/* 	<script src={{ asset("bower_components/angular/angular.min.js") }}></script>*/
/* 	<script src={{ asset("bower_components/Materialize/dist/js/materialize.min.js") }}></script>*/
/* 	<script src={{ asset("js/app.js") }}></script>*/
/* 	<script src={{ asset("js/templates.js") }}></script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* 	<div ng-app="app" ng-controller="IndexController" >*/
/* 		<navigation></navigation>*/
/* 		<div class="row">*/
/* 			<div class="col s4 offset-s4">*/
/* 					<new-note allnotes=notes></new-note>*/
/* 			</div>*/
/* 		</div>*/
/* {#		{% verbatim %}*/
/* 			--- {{notes}}*/
/* 		{% endverbatim %}#}*/
/* 		<div class="row" >*/
/* 			<div class="col s3" ng-repeat='note in notes'>*/
/* 					<note></note>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
