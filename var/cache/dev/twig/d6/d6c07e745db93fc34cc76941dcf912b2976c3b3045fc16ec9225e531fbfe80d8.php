<?php

/* resident/vendor/font-awesome/less/mixins.less */
class __TwigTemplate_bcdaf9e892e9771d72aadbcb807c9d57c9d8832dfa193b250511efb2d4d343d4 extends Twig_Template
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
        $__internal_ce68a48748b34fef96935c4bcc2b712d89e162408ab83012cb5e281442f36b72 = $this->env->getExtension("native_profiler");
        $__internal_ce68a48748b34fef96935c4bcc2b712d89e162408ab83012cb5e281442f36b72->enter($__internal_ce68a48748b34fef96935c4bcc2b712d89e162408ab83012cb5e281442f36b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resident/vendor/font-awesome/less/mixins.less"));

        // line 1
        echo "// Mixins
// --------------------------

.fa-icon() {
  display: inline-block;
  font: normal normal normal @fa-font-size-base/@fa-line-height-base FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

}

.fa-icon-rotate(@degrees, @rotation) {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=@{rotation})\";
  -webkit-transform: rotate(@degrees);
      -ms-transform: rotate(@degrees);
          transform: rotate(@degrees);
}

.fa-icon-flip(@horiz, @vert, @rotation) {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=@{rotation}, mirror=1)\";
  -webkit-transform: scale(@horiz, @vert);
      -ms-transform: scale(@horiz, @vert);
          transform: scale(@horiz, @vert);
}


// Only display content to screen readers. A la Bootstrap 4.
//
// See: http://a11yproject.com/posts/how-to-hide-content/

.sr-only() {
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

.sr-only-focusable() {
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
        
        $__internal_ce68a48748b34fef96935c4bcc2b712d89e162408ab83012cb5e281442f36b72->leave($__internal_ce68a48748b34fef96935c4bcc2b712d89e162408ab83012cb5e281442f36b72_prof);

    }

    public function getTemplateName()
    {
        return "resident/vendor/font-awesome/less/mixins.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* // Mixins*/
/* // --------------------------*/
/* */
/* .fa-icon() {*/
/*   display: inline-block;*/
/*   font: normal normal normal @fa-font-size-base/@fa-line-height-base FontAwesome; // shortening font declaration*/
/*   font-size: inherit; // can't have font-size inherit on line above, so need to override*/
/*   text-rendering: auto; // optimizelegibility throws things off #1094*/
/*   -webkit-font-smoothing: antialiased;*/
/*   -moz-osx-font-smoothing: grayscale;*/
/* */
/* }*/
/* */
/* .fa-icon-rotate(@degrees, @rotation) {*/
/*   -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=@{rotation})";*/
/*   -webkit-transform: rotate(@degrees);*/
/*       -ms-transform: rotate(@degrees);*/
/*           transform: rotate(@degrees);*/
/* }*/
/* */
/* .fa-icon-flip(@horiz, @vert, @rotation) {*/
/*   -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=@{rotation}, mirror=1)";*/
/*   -webkit-transform: scale(@horiz, @vert);*/
/*       -ms-transform: scale(@horiz, @vert);*/
/*           transform: scale(@horiz, @vert);*/
/* }*/
/* */
/* */
/* // Only display content to screen readers. A la Bootstrap 4.*/
/* //*/
/* // See: http://a11yproject.com/posts/how-to-hide-content/*/
/* */
/* .sr-only() {*/
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
/* .sr-only-focusable() {*/
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
