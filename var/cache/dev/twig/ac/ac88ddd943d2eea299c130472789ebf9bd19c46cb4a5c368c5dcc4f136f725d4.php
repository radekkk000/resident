<?php

/* :resident:index.html.twig */
class __TwigTemplate_64dda6ce407cf6d9f7ba5a94ccc484dc42fd98ab4daa182385679e3c30d60d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":resident:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94d2ba2f07e9a9c6404eeeb3d24a1117f30d6e3357612ef968acf27fd338d448 = $this->env->getExtension("native_profiler");
        $__internal_94d2ba2f07e9a9c6404eeeb3d24a1117f30d6e3357612ef968acf27fd338d448->enter($__internal_94d2ba2f07e9a9c6404eeeb3d24a1117f30d6e3357612ef968acf27fd338d448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":resident:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94d2ba2f07e9a9c6404eeeb3d24a1117f30d6e3357612ef968acf27fd338d448->leave($__internal_94d2ba2f07e9a9c6404eeeb3d24a1117f30d6e3357612ef968acf27fd338d448_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0c0c804debc87bbae94fed4401b8404299659d541f399d621897d0549075472 = $this->env->getExtension("native_profiler");
        $__internal_b0c0c804debc87bbae94fed4401b8404299659d541f399d621897d0549075472->enter($__internal_b0c0c804debc87bbae94fed4401b8404299659d541f399d621897d0549075472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-2\" id=\"column1\"><a href=\"/resident/web/\"><h1 style=\"color: black;\">Main</h1></a></div>
        <div class=\"col-md-2\" id=\"column2\"><a href=\"/resident/web/user\"><h1 style=\"color: black;\">User</h1></a></div>
        <div class=\"col-md-2\" id=\"column2\"><a href=\"/resident/web/trainer\"><h1 style=\"color: black;\">Trainer</h1></a></div>
    </div>
    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bieg.jpg"), "html", null, true);
        echo "\" class=\"img-responsive bear\">
</div>
";
        
        $__internal_b0c0c804debc87bbae94fed4401b8404299659d541f399d621897d0549075472->leave($__internal_b0c0c804debc87bbae94fed4401b8404299659d541f399d621897d0549075472_prof);

    }

    public function getTemplateName()
    {
        return ":resident:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-2" id="column1"><a href="/resident/web/"><h1 style="color: black;">Main</h1></a></div>*/
/*         <div class="col-md-2" id="column2"><a href="/resident/web/user"><h1 style="color: black;">User</h1></a></div>*/
/*         <div class="col-md-2" id="column2"><a href="/resident/web/trainer"><h1 style="color: black;">Trainer</h1></a></div>*/
/*     </div>*/
/*     <img src="{{ asset('img/bieg.jpg') }}" class="img-responsive bear">*/
/* </div>*/
/* {% endblock %}*/
/* */
