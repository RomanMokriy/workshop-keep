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
        $__internal_6f44a33777ff256f9e4598c23193a8412bcd6832aa497467b56554e4ddb1029a = $this->env->getExtension("native_profiler");
        $__internal_6f44a33777ff256f9e4598c23193a8412bcd6832aa497467b56554e4ddb1029a->enter($__internal_6f44a33777ff256f9e4598c23193a8412bcd6832aa497467b56554e4ddb1029a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f44a33777ff256f9e4598c23193a8412bcd6832aa497467b56554e4ddb1029a->leave($__internal_6f44a33777ff256f9e4598c23193a8412bcd6832aa497467b56554e4ddb1029a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d2af5267d042c75670cf95b0464ffcae00784e9076f9bbb9376de264dfb67df = $this->env->getExtension("native_profiler");
        $__internal_2d2af5267d042c75670cf95b0464ffcae00784e9076f9bbb9376de264dfb67df->enter($__internal_2d2af5267d042c75670cf95b0464ffcae00784e9076f9bbb9376de264dfb67df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2d2af5267d042c75670cf95b0464ffcae00784e9076f9bbb9376de264dfb67df->leave($__internal_2d2af5267d042c75670cf95b0464ffcae00784e9076f9bbb9376de264dfb67df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95cbad3d178cb167c29592c473568cee96a8170177d77861c813872bb69eaddd = $this->env->getExtension("native_profiler");
        $__internal_95cbad3d178cb167c29592c473568cee96a8170177d77861c813872bb69eaddd->enter($__internal_95cbad3d178cb167c29592c473568cee96a8170177d77861c813872bb69eaddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95cbad3d178cb167c29592c473568cee96a8170177d77861c813872bb69eaddd->leave($__internal_95cbad3d178cb167c29592c473568cee96a8170177d77861c813872bb69eaddd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02e23a5e5724196585a32fde8a5da878141324dea8d4bf50ae8bc8de32468a9a = $this->env->getExtension("native_profiler");
        $__internal_02e23a5e5724196585a32fde8a5da878141324dea8d4bf50ae8bc8de32468a9a->enter($__internal_02e23a5e5724196585a32fde8a5da878141324dea8d4bf50ae8bc8de32468a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_02e23a5e5724196585a32fde8a5da878141324dea8d4bf50ae8bc8de32468a9a->leave($__internal_02e23a5e5724196585a32fde8a5da878141324dea8d4bf50ae8bc8de32468a9a_prof);

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
