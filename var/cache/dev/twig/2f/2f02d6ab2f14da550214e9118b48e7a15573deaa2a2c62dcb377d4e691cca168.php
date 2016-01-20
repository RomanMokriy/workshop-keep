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
        $__internal_24ee9bb0ac70b846751d2ace7eaae2dcf435da60e07d62866b441e2f31fd88ad = $this->env->getExtension("native_profiler");
        $__internal_24ee9bb0ac70b846751d2ace7eaae2dcf435da60e07d62866b441e2f31fd88ad->enter($__internal_24ee9bb0ac70b846751d2ace7eaae2dcf435da60e07d62866b441e2f31fd88ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24ee9bb0ac70b846751d2ace7eaae2dcf435da60e07d62866b441e2f31fd88ad->leave($__internal_24ee9bb0ac70b846751d2ace7eaae2dcf435da60e07d62866b441e2f31fd88ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4bd8778ba4ced264879cc520b0e355fcc5191bd881ee81f1c489a1f00632533 = $this->env->getExtension("native_profiler");
        $__internal_a4bd8778ba4ced264879cc520b0e355fcc5191bd881ee81f1c489a1f00632533->enter($__internal_a4bd8778ba4ced264879cc520b0e355fcc5191bd881ee81f1c489a1f00632533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a4bd8778ba4ced264879cc520b0e355fcc5191bd881ee81f1c489a1f00632533->leave($__internal_a4bd8778ba4ced264879cc520b0e355fcc5191bd881ee81f1c489a1f00632533_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c67df25819d5ebe250dabdf3ac471b32838cb3362f49141b834ab574d099dc7e = $this->env->getExtension("native_profiler");
        $__internal_c67df25819d5ebe250dabdf3ac471b32838cb3362f49141b834ab574d099dc7e->enter($__internal_c67df25819d5ebe250dabdf3ac471b32838cb3362f49141b834ab574d099dc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c67df25819d5ebe250dabdf3ac471b32838cb3362f49141b834ab574d099dc7e->leave($__internal_c67df25819d5ebe250dabdf3ac471b32838cb3362f49141b834ab574d099dc7e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec6a7dae9f6f1a6399e49973504d8b6aca409a5c3946ea52527b0cfdfea84f88 = $this->env->getExtension("native_profiler");
        $__internal_ec6a7dae9f6f1a6399e49973504d8b6aca409a5c3946ea52527b0cfdfea84f88->enter($__internal_ec6a7dae9f6f1a6399e49973504d8b6aca409a5c3946ea52527b0cfdfea84f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec6a7dae9f6f1a6399e49973504d8b6aca409a5c3946ea52527b0cfdfea84f88->leave($__internal_ec6a7dae9f6f1a6399e49973504d8b6aca409a5c3946ea52527b0cfdfea84f88_prof);

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
