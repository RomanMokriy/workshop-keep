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
        $__internal_7b26f68961a2d03fdd1968ce38cdcaa3df54cadf1945679b8e29c0db2488e4c3 = $this->env->getExtension("native_profiler");
        $__internal_7b26f68961a2d03fdd1968ce38cdcaa3df54cadf1945679b8e29c0db2488e4c3->enter($__internal_7b26f68961a2d03fdd1968ce38cdcaa3df54cadf1945679b8e29c0db2488e4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_7b26f68961a2d03fdd1968ce38cdcaa3df54cadf1945679b8e29c0db2488e4c3->leave($__internal_7b26f68961a2d03fdd1968ce38cdcaa3df54cadf1945679b8e29c0db2488e4c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_add941e93818bd5c8f3a74c4967431a26dd0446bb884e93ae01eedd5de4d1f78 = $this->env->getExtension("native_profiler");
        $__internal_add941e93818bd5c8f3a74c4967431a26dd0446bb884e93ae01eedd5de4d1f78->enter($__internal_add941e93818bd5c8f3a74c4967431a26dd0446bb884e93ae01eedd5de4d1f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_add941e93818bd5c8f3a74c4967431a26dd0446bb884e93ae01eedd5de4d1f78->leave($__internal_add941e93818bd5c8f3a74c4967431a26dd0446bb884e93ae01eedd5de4d1f78_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97f68c0dad1e49d3aec4277afeb1e3cbe4e8b4315b64ade75cb52c985955c3ff = $this->env->getExtension("native_profiler");
        $__internal_97f68c0dad1e49d3aec4277afeb1e3cbe4e8b4315b64ade75cb52c985955c3ff->enter($__internal_97f68c0dad1e49d3aec4277afeb1e3cbe4e8b4315b64ade75cb52c985955c3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_97f68c0dad1e49d3aec4277afeb1e3cbe4e8b4315b64ade75cb52c985955c3ff->leave($__internal_97f68c0dad1e49d3aec4277afeb1e3cbe4e8b4315b64ade75cb52c985955c3ff_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2eba64d83cf98a05389f51ba6f1aafa920bcbcf1843b5215c57a171e786ac202 = $this->env->getExtension("native_profiler");
        $__internal_2eba64d83cf98a05389f51ba6f1aafa920bcbcf1843b5215c57a171e786ac202->enter($__internal_2eba64d83cf98a05389f51ba6f1aafa920bcbcf1843b5215c57a171e786ac202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2eba64d83cf98a05389f51ba6f1aafa920bcbcf1843b5215c57a171e786ac202->leave($__internal_2eba64d83cf98a05389f51ba6f1aafa920bcbcf1843b5215c57a171e786ac202_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83b121ec79b01d9bec74c0c1dfcbd2fd5301f2c4899338a9179528d3b98148b1 = $this->env->getExtension("native_profiler");
        $__internal_83b121ec79b01d9bec74c0c1dfcbd2fd5301f2c4899338a9179528d3b98148b1->enter($__internal_83b121ec79b01d9bec74c0c1dfcbd2fd5301f2c4899338a9179528d3b98148b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_83b121ec79b01d9bec74c0c1dfcbd2fd5301f2c4899338a9179528d3b98148b1->leave($__internal_83b121ec79b01d9bec74c0c1dfcbd2fd5301f2c4899338a9179528d3b98148b1_prof);

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
