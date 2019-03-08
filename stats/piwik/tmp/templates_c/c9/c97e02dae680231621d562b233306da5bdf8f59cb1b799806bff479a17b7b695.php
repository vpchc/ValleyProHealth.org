<?php

/* @Live/indexVisitorLog.twig */
class __TwigTemplate_249c5496696d8cc17e71e56e1abbdd5b8ffbd65c0d5f74fa7a46a3451f47cc91 extends Twig_Template
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
        // line 1
        echo "<h2 piwik-enriched-headline>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Live_VisitorLog")), "html", null, true);
        echo "</h2>

";
        // line 3
        echo (isset($context["visitorLog"]) ? $context["visitorLog"] : $this->getContext($context, "visitorLog"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Live/indexVisitorLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  19 => 1,);
    }
}
/* <h2 piwik-enriched-headline>{{ 'Live_VisitorLog'|translate }}</h2>*/
/* */
/* {{ visitorLog|raw }}*/
/* */
