<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_354c592ad582ed7a28dc4725c0038e6f8256792ec6100db2f3edfaa7de715156 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bower_components/Materialize/dist/css/materialize.min.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "\t<div ng-app=\"app\" ng-controller=\"IndexController\" >
\t\t<navigation></navigation>
\t\t<div class=\"row\">
\t\t\t<div class=\"col s4 offset-s4\">
\t\t\t\t\t<new-note>allNotes=notes</new-note>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 26
        echo "

\t\t";
        echo "
\t\t<div class=\"row\" >
\t\t\t<div class=\"col s3\" ng-repeat='note in notes'>
\t\t\t\t\t<note></note>
\t\t\t</div>
\t\t</div>
\t</div>
";
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
        return array (  78 => 26,  69 => 17,  66 => 16,  60 => 13,  56 => 12,  52 => 11,  48 => 10,  43 => 9,  40 => 8,  33 => 5,  30 => 4,  11 => 2,);
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
/* 					<new-note>allNotes=notes</new-note>*/
/* 			</div>*/
/* 		</div>*/
/* 		{% verbatim %}*/
/* */
/* 		{% endverbatim %}*/
/* 		<div class="row" >*/
/* 			<div class="col s3" ng-repeat='note in notes'>*/
/* 					<note></note>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
