<?php

/* resident/vendor/font-awesome/scss/_mixins.scss */
class __TwigTemplate_aa0d205c43a93f64923fb29ee55cca091f0c4c540a6237d0e4aec56184abff24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_471a9a4aa2835dbc3a127aac4d2ea3b8278ba0d0c6deb3bd75131f573b881b85 = $this->env->getExtension("native_profiler");
        $__internal_471a9a4aa2835dbc3a127aac4d2ea3b8278ba0d0c6deb3bd75131f573b881b85->enter($__internal_471a9a4aa2835dbc3a127aac4d2ea3b8278ba0d0c6deb3bd75131f573b881b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resident/vendor/font-awesome/scss/_mixins.scss"));

        // line 1
        echo "// Mixins
// --------------------------

@mixin fa-icon() {
  display: inline-block;
  font: normal normal normal #{\$fa-font-size-base}/#{\$fa-line-height-base} FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

}

@mixin fa-icon-rotate(\$degrees, \$rotation) {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=#{\$rotation})\";
  -webkit-transform: rotate(\$degrees);
      -ms-transform: rotate(\$degrees);
          transform: rotate(\$degrees);
}

@mixin fa-icon-flip(\$horiz, \$vert, \$rotation) {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=#{\$rotation}, mirror=1)\";
  -webkit-transform: scale(\$horiz, \$vert);
      -ms-transform: scale(\$horiz, \$vert);
          transform: scale(\$horiz, \$vert);
}


// Only display content to screen readers. A la Bootstrap 4.
//
// See: http://a11yproject.com/posts/how-to-hide-content/

@mixin sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}

// Use in conjunction with .sr-only to only display content when it's focused.
//
// Useful for \"Skip to main content\" links; see http://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1
//
// Credit: HTML5 Boilerplate

@mixin sr-only-focusable {
  &:active,
  &:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto;
  }
}
";
        
        $__internal_471a9a4aa2835dbc3a127aac4d2ea3b8278ba0d0c6deb3bd75131f573b881b85->leave($__internal_471a9a4aa2835dbc3a127aac4d2ea3b8278ba0d0c6deb3bd75131f573b881b85_prof);

    }

    public function getTemplateName()
    {
        return "resident/vendor/font-awesome/scss/_mixins.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* // Mixins*/
/* // --------------------------*/
/* */
/* @mixin fa-icon() {*/
/*   display: inline-block;*/
/*   font: normal normal normal #{$fa-font-size-base}/#{$fa-line-height-base} FontAwesome; // shortening font declaration*/
/*   font-size: inherit; // can't have font-size inherit on line above, so need to override*/
/*   text-rendering: auto; // optimizelegibility throws things off #1094*/
/*   -webkit-font-smoothing: antialiased;*/
/*   -moz-osx-font-smoothing: grayscale;*/
/* */
/* }*/
/* */
/* @mixin fa-icon-rotate($degrees, $rotation) {*/
/*   -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=#{$rotation})";*/
/*   -webkit-transform: rotate($degrees);*/
/*       -ms-transform: rotate($degrees);*/
/*           transform: rotate($degrees);*/
/* }*/
/* */
/* @mixin fa-icon-flip($horiz, $vert, $rotation) {*/
/*   -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=#{$rotation}, mirror=1)";*/
/*   -webkit-transform: scale($horiz, $vert);*/
/*       -ms-transform: scale($horiz, $vert);*/
/*           transform: scale($horiz, $vert);*/
/* }*/
/* */
/* */
/* // Only display content to screen readers. A la Bootstrap 4.*/
/* //*/
/* // See: http://a11yproject.com/posts/how-to-hide-content/*/
/* */
/* @mixin sr-only {*/
/*   position: absolute;*/
/*   width: 1px;*/
/*   height: 1px;*/
/*   padding: 0;*/
/*   margin: -1px;*/
/*   overflow: hidden;*/
/*   clip: rect(0,0,0,0);*/
/*   border: 0;*/
/* }*/
/* */
/* // Use in conjunction with .sr-only to only display content when it's focused.*/
/* //*/
/* // Useful for "Skip to main content" links; see http://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1*/
/* //*/
/* // Credit: HTML5 Boilerplate*/
/* */
/* @mixin sr-only-focusable {*/
/*   &:active,*/
/*   &:focus {*/
/*     position: static;*/
/*     width: auto;*/
/*     height: auto;*/
/*     margin: 0;*/
/*     overflow: visible;*/
/*     clip: auto;*/
/*   }*/
/* }*/
/* */
