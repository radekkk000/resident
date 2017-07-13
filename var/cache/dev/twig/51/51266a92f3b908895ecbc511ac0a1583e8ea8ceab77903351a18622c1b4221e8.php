<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c41abf87adef82f76f7a4a158013e3865a5904fbd32ac6ab9f020632acf2eca extends Twig_Template
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
        $__internal_b0478fdbc1b5268feaa257900e53f925e5128ae2f5f33240b3d64091f831889f = $this->env->getExtension("native_profiler");
        $__internal_b0478fdbc1b5268feaa257900e53f925e5128ae2f5f33240b3d64091f831889f->enter($__internal_b0478fdbc1b5268feaa257900e53f925e5128ae2f5f33240b3d64091f831889f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0478fdbc1b5268feaa257900e53f925e5128ae2f5f33240b3d64091f831889f->leave($__internal_b0478fdbc1b5268feaa257900e53f925e5128ae2f5f33240b3d64091f831889f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6b729e38cad50deb67da36d42dc85b4cf71214a8fe78b4f922a753199b163ba0 = $this->env->getExtension("native_profiler");
        $__internal_6b729e38cad50deb67da36d42dc85b4cf71214a8fe78b4f922a753199b163ba0->enter($__internal_6b729e38cad50deb67da36d42dc85b4cf71214a8fe78b4f922a753199b163ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6b729e38cad50deb67da36d42dc85b4cf71214a8fe78b4f922a753199b163ba0->leave($__internal_6b729e38cad50deb67da36d42dc85b4cf71214a8fe78b4f922a753199b163ba0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcae6835830ad1d92979853ab723abb47bf5516c7c80c70a2226e33052679038 = $this->env->getExtension("native_profiler");
        $__internal_dcae6835830ad1d92979853ab723abb47bf5516c7c80c70a2226e33052679038->enter($__internal_dcae6835830ad1d92979853ab723abb47bf5516c7c80c70a2226e33052679038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dcae6835830ad1d92979853ab723abb47bf5516c7c80c70a2226e33052679038->leave($__internal_dcae6835830ad1d92979853ab723abb47bf5516c7c80c70a2226e33052679038_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97b4e32fb43e856b0eeaf58fb65e81e4866595c7e8c7fbf0d4f937d161738864 = $this->env->getExtension("native_profiler");
        $__internal_97b4e32fb43e856b0eeaf58fb65e81e4866595c7e8c7fbf0d4f937d161738864->enter($__internal_97b4e32fb43e856b0eeaf58fb65e81e4866595c7e8c7fbf0d4f937d161738864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_97b4e32fb43e856b0eeaf58fb65e81e4866595c7e8c7fbf0d4f937d161738864->leave($__internal_97b4e32fb43e856b0eeaf58fb65e81e4866595c7e8c7fbf0d4f937d161738864_prof);

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
