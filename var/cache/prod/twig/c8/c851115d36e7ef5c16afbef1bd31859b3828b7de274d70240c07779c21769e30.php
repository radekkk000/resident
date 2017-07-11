<?php

/* resident/index.html.twig */
class __TwigTemplate_2e3fd073f9cbf03512822cae1da99694af13d0a6efbc77a9b04f1c3420a2d0f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "resident/index.html.twig", 1);
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
        $__internal_a9ddc6c23bdf9db059a755bd64c82ab1051bc7fbf8144ab9cd5679a30af9dc7b = $this->env->getExtension("native_profiler");
        $__internal_a9ddc6c23bdf9db059a755bd64c82ab1051bc7fbf8144ab9cd5679a30af9dc7b->enter($__internal_a9ddc6c23bdf9db059a755bd64c82ab1051bc7fbf8144ab9cd5679a30af9dc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resident/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9ddc6c23bdf9db059a755bd64c82ab1051bc7fbf8144ab9cd5679a30af9dc7b->leave($__internal_a9ddc6c23bdf9db059a755bd64c82ab1051bc7fbf8144ab9cd5679a30af9dc7b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6af1b5e7a00e46464e1bec3752de1c2967a1a318ce4a4213208366741a50f6bb = $this->env->getExtension("native_profiler");
        $__internal_6af1b5e7a00e46464e1bec3752de1c2967a1a318ce4a4213208366741a50f6bb->enter($__internal_6af1b5e7a00e46464e1bec3752de1c2967a1a318ce4a4213208366741a50f6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6af1b5e7a00e46464e1bec3752de1c2967a1a318ce4a4213208366741a50f6bb->leave($__internal_6af1b5e7a00e46464e1bec3752de1c2967a1a318ce4a4213208366741a50f6bb_prof);

    }

    public function getTemplateName()
    {
        return "resident/index.html.twig";
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
