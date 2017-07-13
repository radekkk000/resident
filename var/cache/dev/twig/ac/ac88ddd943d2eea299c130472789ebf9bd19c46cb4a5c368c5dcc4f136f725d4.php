<?php

/* resident/index.html.twig */
class __TwigTemplate_64dda6ce407cf6d9f7ba5a94ccc484dc42fd98ab4daa182385679e3c30d60d97 extends Twig_Template
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
        $__internal_32b639cd307cfb7c04e9d0a48b20a02045cfe4daf2c2e9d4b7a8dfc41dd1a4e2 = $this->env->getExtension("native_profiler");
        $__internal_32b639cd307cfb7c04e9d0a48b20a02045cfe4daf2c2e9d4b7a8dfc41dd1a4e2->enter($__internal_32b639cd307cfb7c04e9d0a48b20a02045cfe4daf2c2e9d4b7a8dfc41dd1a4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resident/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32b639cd307cfb7c04e9d0a48b20a02045cfe4daf2c2e9d4b7a8dfc41dd1a4e2->leave($__internal_32b639cd307cfb7c04e9d0a48b20a02045cfe4daf2c2e9d4b7a8dfc41dd1a4e2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_91e4a24c976f3e049d80caf086646970ffe07409cdbd3cac50e6aa52308ce91e = $this->env->getExtension("native_profiler");
        $__internal_91e4a24c976f3e049d80caf086646970ffe07409cdbd3cac50e6aa52308ce91e->enter($__internal_91e4a24c976f3e049d80caf086646970ffe07409cdbd3cac50e6aa52308ce91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91e4a24c976f3e049d80caf086646970ffe07409cdbd3cac50e6aa52308ce91e->leave($__internal_91e4a24c976f3e049d80caf086646970ffe07409cdbd3cac50e6aa52308ce91e_prof);

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
