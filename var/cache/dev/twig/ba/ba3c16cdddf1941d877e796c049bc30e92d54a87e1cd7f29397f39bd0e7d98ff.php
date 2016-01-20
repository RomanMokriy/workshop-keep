<?php

/* base.html.twig */
class __TwigTemplate_72ce761c4c34439fdebde7b692f20c513e96ef86eb9a7badde8b48a03283b473 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5150944f6ee92fe51898841750de0736aa04589fb9b5229dadbc3b50dc15b840 = $this->env->getExtension("native_profiler");
        $__internal_5150944f6ee92fe51898841750de0736aa04589fb9b5229dadbc3b50dc15b840->enter($__internal_5150944f6ee92fe51898841750de0736aa04589fb9b5229dadbc3b50dc15b840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5150944f6ee92fe51898841750de0736aa04589fb9b5229dadbc3b50dc15b840->leave($__internal_5150944f6ee92fe51898841750de0736aa04589fb9b5229dadbc3b50dc15b840_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f33e2163ac687a65e0e0e7b3f9a3074675d244221b6715e8e7db1805e98058c = $this->env->getExtension("native_profiler");
        $__internal_1f33e2163ac687a65e0e0e7b3f9a3074675d244221b6715e8e7db1805e98058c->enter($__internal_1f33e2163ac687a65e0e0e7b3f9a3074675d244221b6715e8e7db1805e98058c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1f33e2163ac687a65e0e0e7b3f9a3074675d244221b6715e8e7db1805e98058c->leave($__internal_1f33e2163ac687a65e0e0e7b3f9a3074675d244221b6715e8e7db1805e98058c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_348e19a4f2f2612fa38c4845e7d66d3dc92e64b5ec19823f32bba984f2a0d310 = $this->env->getExtension("native_profiler");
        $__internal_348e19a4f2f2612fa38c4845e7d66d3dc92e64b5ec19823f32bba984f2a0d310->enter($__internal_348e19a4f2f2612fa38c4845e7d66d3dc92e64b5ec19823f32bba984f2a0d310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_348e19a4f2f2612fa38c4845e7d66d3dc92e64b5ec19823f32bba984f2a0d310->leave($__internal_348e19a4f2f2612fa38c4845e7d66d3dc92e64b5ec19823f32bba984f2a0d310_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ffba12747249b113f689ab8e7bbc775ab3722cece0bcd257ea742bdd651386e = $this->env->getExtension("native_profiler");
        $__internal_2ffba12747249b113f689ab8e7bbc775ab3722cece0bcd257ea742bdd651386e->enter($__internal_2ffba12747249b113f689ab8e7bbc775ab3722cece0bcd257ea742bdd651386e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2ffba12747249b113f689ab8e7bbc775ab3722cece0bcd257ea742bdd651386e->leave($__internal_2ffba12747249b113f689ab8e7bbc775ab3722cece0bcd257ea742bdd651386e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b21b981f4c1c1c3f606d57b9cb248f1995a11c47b4c3ae972d64761b766c4a74 = $this->env->getExtension("native_profiler");
        $__internal_b21b981f4c1c1c3f606d57b9cb248f1995a11c47b4c3ae972d64761b766c4a74->enter($__internal_b21b981f4c1c1c3f606d57b9cb248f1995a11c47b4c3ae972d64761b766c4a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b21b981f4c1c1c3f606d57b9cb248f1995a11c47b4c3ae972d64761b766c4a74->leave($__internal_b21b981f4c1c1c3f606d57b9cb248f1995a11c47b4c3ae972d64761b766c4a74_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
