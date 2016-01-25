<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f1121cdeea93a7ce06ba8571d411ebf68b516233a6f5259ad61f0b5daf983296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f628d32dad0bafe9ddb99d31e303e0f4597e4f2001d2d30d4c9fb43ad11fd5f = $this->env->getExtension("native_profiler");
        $__internal_0f628d32dad0bafe9ddb99d31e303e0f4597e4f2001d2d30d4c9fb43ad11fd5f->enter($__internal_0f628d32dad0bafe9ddb99d31e303e0f4597e4f2001d2d30d4c9fb43ad11fd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f628d32dad0bafe9ddb99d31e303e0f4597e4f2001d2d30d4c9fb43ad11fd5f->leave($__internal_0f628d32dad0bafe9ddb99d31e303e0f4597e4f2001d2d30d4c9fb43ad11fd5f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ebd2bf3fe047a6435eea1cc25e2681d3ad5e5358115de55478806ca975bfe3f6 = $this->env->getExtension("native_profiler");
        $__internal_ebd2bf3fe047a6435eea1cc25e2681d3ad5e5358115de55478806ca975bfe3f6->enter($__internal_ebd2bf3fe047a6435eea1cc25e2681d3ad5e5358115de55478806ca975bfe3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ebd2bf3fe047a6435eea1cc25e2681d3ad5e5358115de55478806ca975bfe3f6->leave($__internal_ebd2bf3fe047a6435eea1cc25e2681d3ad5e5358115de55478806ca975bfe3f6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8531d6069ded78fd8ed0765971c5d9e97050162e4ec4d6d100bb1295e1d07c3d = $this->env->getExtension("native_profiler");
        $__internal_8531d6069ded78fd8ed0765971c5d9e97050162e4ec4d6d100bb1295e1d07c3d->enter($__internal_8531d6069ded78fd8ed0765971c5d9e97050162e4ec4d6d100bb1295e1d07c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8531d6069ded78fd8ed0765971c5d9e97050162e4ec4d6d100bb1295e1d07c3d->leave($__internal_8531d6069ded78fd8ed0765971c5d9e97050162e4ec4d6d100bb1295e1d07c3d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6529f72a13e4d100c9c8b861df6f3d9a197c07b0d39e090d83ce5f983b0f01ae = $this->env->getExtension("native_profiler");
        $__internal_6529f72a13e4d100c9c8b861df6f3d9a197c07b0d39e090d83ce5f983b0f01ae->enter($__internal_6529f72a13e4d100c9c8b861df6f3d9a197c07b0d39e090d83ce5f983b0f01ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6529f72a13e4d100c9c8b861df6f3d9a197c07b0d39e090d83ce5f983b0f01ae->leave($__internal_6529f72a13e4d100c9c8b861df6f3d9a197c07b0d39e090d83ce5f983b0f01ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
