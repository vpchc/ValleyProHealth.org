<?php

/* @SitesManager/index.twig */
class __TwigTemplate_017fa94e3431ffa13637dc8f4682a5d7af5206dd7e278e866649abb33c05f865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@SitesManager/index.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SitesManager_WebsitesManagement")), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div ng-include=\"'plugins/SitesManager/templates/index.html?cb=";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["cacheBuster"]) ? $context["cacheBuster"] : $this->getContext($context, "cacheBuster")), "html", null, true);
        echo "'\"></div>

";
    }

    public function getTemplateName()
    {
        return "@SitesManager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  36 => 6,  33 => 5,  29 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'admin.twig' %}*/
/* */
/* {% set title %}{{ 'SitesManager_WebsitesManagement'|translate }}{% endset %}*/
/* */
/* {% block content %}*/
/* */
/*     <div ng-include="'plugins/SitesManager/templates/index.html?cb={{ cacheBuster }}'"></div>*/
/* */
/* {% endblock %}*/
/* */
