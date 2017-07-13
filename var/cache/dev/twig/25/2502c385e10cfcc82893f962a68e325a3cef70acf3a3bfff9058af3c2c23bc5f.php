<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ed11ab70345c98adbe0be1654cc91488a9a4c70bb01db59ed5aa11b5df198477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_302a90cecf2c7948464f250221a702dd33debcb9d9d5307fc3c0159d9a13ee3f = $this->env->getExtension("native_profiler");
        $__internal_302a90cecf2c7948464f250221a702dd33debcb9d9d5307fc3c0159d9a13ee3f->enter($__internal_302a90cecf2c7948464f250221a702dd33debcb9d9d5307fc3c0159d9a13ee3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_302a90cecf2c7948464f250221a702dd33debcb9d9d5307fc3c0159d9a13ee3f->leave($__internal_302a90cecf2c7948464f250221a702dd33debcb9d9d5307fc3c0159d9a13ee3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29d0178a037ff2f834aa5936f2a9cb99a35ff55bd58c65d2e39f17ecf5384a68 = $this->env->getExtension("native_profiler");
        $__internal_29d0178a037ff2f834aa5936f2a9cb99a35ff55bd58c65d2e39f17ecf5384a68->enter($__internal_29d0178a037ff2f834aa5936f2a9cb99a35ff55bd58c65d2e39f17ecf5384a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_29d0178a037ff2f834aa5936f2a9cb99a35ff55bd58c65d2e39f17ecf5384a68->leave($__internal_29d0178a037ff2f834aa5936f2a9cb99a35ff55bd58c65d2e39f17ecf5384a68_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bc516b4e34c028daf8b20db7655bb17a0d2189975a942a81f253e6ac52df529 = $this->env->getExtension("native_profiler");
        $__internal_9bc516b4e34c028daf8b20db7655bb17a0d2189975a942a81f253e6ac52df529->enter($__internal_9bc516b4e34c028daf8b20db7655bb17a0d2189975a942a81f253e6ac52df529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9bc516b4e34c028daf8b20db7655bb17a0d2189975a942a81f253e6ac52df529->leave($__internal_9bc516b4e34c028daf8b20db7655bb17a0d2189975a942a81f253e6ac52df529_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
