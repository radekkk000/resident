<?php

/* resident/vendor/font-awesome/less/animated.less */
class __TwigTemplate_9699a4efc42c8ef340e46f66d65eb814a5f141ede4c7c9bf1fe81fbeea41a8ce extends Twig_Template
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
        $__internal_1393457dcc7f1fb7a4d2922344e937e5955af111a2c29644c1b72e985e1b3efa = $this->env->getExtension("native_profiler");
        $__internal_1393457dcc7f1fb7a4d2922344e937e5955af111a2c29644c1b72e985e1b3efa->enter($__internal_1393457dcc7f1fb7a4d2922344e937e5955af111a2c29644c1b72e985e1b3efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resident/vendor/font-awesome/less/animated.less"));

        // line 1
        echo "// Animated Icons
// --------------------------

.@{fa-css-prefix}-spin {
  -webkit-animation: fa-spin 2s infinite linear;
          animation: fa-spin 2s infinite linear;
}

.@{fa-css-prefix}-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
          animation: fa-spin 1s infinite steps(8);
}

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}

@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}
";
        
        $__internal_1393457dcc7f1fb7a4d2922344e937e5955af111a2c29644c1b72e985e1b3efa->leave($__internal_1393457dcc7f1fb7a4d2922344e937e5955af111a2c29644c1b72e985e1b3efa_prof);

    }

    public function getTemplateName()
    {
        return "resident/vendor/font-awesome/less/animated.less";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* // Animated Icons*/
/* // --------------------------*/
/* */
/* .@{fa-css-prefix}-spin {*/
/*   -webkit-animation: fa-spin 2s infinite linear;*/
/*           animation: fa-spin 2s infinite linear;*/
/* }*/
/* */
/* .@{fa-css-prefix}-pulse {*/
/*   -webkit-animation: fa-spin 1s infinite steps(8);*/
/*           animation: fa-spin 1s infinite steps(8);*/
/* }*/
/* */
/* @-webkit-keyframes fa-spin {*/
/*   0% {*/
/*     -webkit-transform: rotate(0deg);*/
/*             transform: rotate(0deg);*/
/*   }*/
/*   100% {*/
/*     -webkit-transform: rotate(359deg);*/
/*             transform: rotate(359deg);*/
/*   }*/
/* }*/
/* */
/* @keyframes fa-spin {*/
/*   0% {*/
/*     -webkit-transform: rotate(0deg);*/
/*             transform: rotate(0deg);*/
/*   }*/
/*   100% {*/
/*     -webkit-transform: rotate(359deg);*/
/*             transform: rotate(359deg);*/
/*   }*/
/* }*/
/* */
