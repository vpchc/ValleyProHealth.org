<?php

/* @MaxConcurrent/concur_display.twig */
class __TwigTemplate_00452e89bd9ac9899332633b7305e50c87cf89c5c8cbc349d1477f4e7d050fbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "
   <h3 align=\"center\">";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MaxConcurrent_MaxUsers")), "html", null, true);
        echo ": </h3>
   <h2 align=\"center\">";
        // line 4
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["concurrent"]) ? $context["concurrent"] : $this->getContext($context, "concurrent")), "html", null, true);
        echo "</h2>
";
    }

    public function getTemplateName()
    {
        return "@MaxConcurrent/concur_display.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block content %}*/
/* */
/*    <h3 align="center">{{ 'MaxConcurrent_MaxUsers' |translate }}: </h3>*/
/*    <h2 align="center">{{ concurrent }}</h2>*/
/* {% endblock %}*/
