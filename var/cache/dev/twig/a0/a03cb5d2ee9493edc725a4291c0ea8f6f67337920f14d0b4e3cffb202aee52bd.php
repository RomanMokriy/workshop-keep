<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ab85dbe8f3a5906716231e281ab37eacfdbbfc42a0e37609711e67c07933a29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ca1ae3a970945e60fa8f38e0bc55510c3b69e54a1c47f2813cbb1be90877a45 = $this->env->getExtension("native_profiler");
        $__internal_6ca1ae3a970945e60fa8f38e0bc55510c3b69e54a1c47f2813cbb1be90877a45->enter($__internal_6ca1ae3a970945e60fa8f38e0bc55510c3b69e54a1c47f2813cbb1be90877a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca1ae3a970945e60fa8f38e0bc55510c3b69e54a1c47f2813cbb1be90877a45->leave($__internal_6ca1ae3a970945e60fa8f38e0bc55510c3b69e54a1c47f2813cbb1be90877a45_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a2aa36ab0258066cc36c8211c8f21e4a1a7c74a7a23c4ed80c70293ae17921b = $this->env->getExtension("native_profiler");
        $__internal_0a2aa36ab0258066cc36c8211c8f21e4a1a7c74a7a23c4ed80c70293ae17921b->enter($__internal_0a2aa36ab0258066cc36c8211c8f21e4a1a7c74a7a23c4ed80c70293ae17921b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a2aa36ab0258066cc36c8211c8f21e4a1a7c74a7a23c4ed80c70293ae17921b->leave($__internal_0a2aa36ab0258066cc36c8211c8f21e4a1a7c74a7a23c4ed80c70293ae17921b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_555d8daa31b5e56519c9b4b0a8912adb7a2da818ba2ae64094b43329b5aa5527 = $this->env->getExtension("native_profiler");
        $__internal_555d8daa31b5e56519c9b4b0a8912adb7a2da818ba2ae64094b43329b5aa5527->enter($__internal_555d8daa31b5e56519c9b4b0a8912adb7a2da818ba2ae64094b43329b5aa5527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_555d8daa31b5e56519c9b4b0a8912adb7a2da818ba2ae64094b43329b5aa5527->leave($__internal_555d8daa31b5e56519c9b4b0a8912adb7a2da818ba2ae64094b43329b5aa5527_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d25c420e738d82298791520bad6dc03cf9b2a5350cb6a17177f2936b23fff357 = $this->env->getExtension("native_profiler");
        $__internal_d25c420e738d82298791520bad6dc03cf9b2a5350cb6a17177f2936b23fff357->enter($__internal_d25c420e738d82298791520bad6dc03cf9b2a5350cb6a17177f2936b23fff357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d25c420e738d82298791520bad6dc03cf9b2a5350cb6a17177f2936b23fff357->leave($__internal_d25c420e738d82298791520bad6dc03cf9b2a5350cb6a17177f2936b23fff357_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
