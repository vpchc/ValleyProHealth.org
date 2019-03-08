<?php

/* @Annotations/getAnnotationManager.twig */
class __TwigTemplate_b3c89dba581e04863d9f6c819c6511ef130e6a60796f875dfbb57a7e549752ee extends Twig_Template
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
        echo "<div class=\"annotation-manager\"
     ";
        // line 2
        if (((isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")) != (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")))) {
            echo "data-date=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "html", null, true);
            echo ",";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "html", null, true);
            echo "\" data-period=\"range\"
     ";
        } else {
            // line 3
            echo "data-date=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "html", null, true);
            echo "\" data-period=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")), "html", null, true);
            echo "\"
     ";
        }
        // line 4
        echo ">

    <div class=\"annotations-header\">
        <span>";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_Annotations")), "html", null, true);
        echo "</span>
    </div>

    <div class=\"annotation-list-range\">";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["startDatePretty"]) ? $context["startDatePretty"] : $this->getContext($context, "startDatePretty")), "html", null, true);
        if (((isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")) != (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")))) {
            echo " &mdash; ";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["endDatePretty"]) ? $context["endDatePretty"] : $this->getContext($context, "endDatePretty")), "html", null, true);
        }
        echo "</div>

    <div class=\"annotation-list\">
        ";
        // line 13
        $this->loadTemplate("@Annotations/_annotationList.twig", "@Annotations/getAnnotationManager.twig", 13)->display($context);
        // line 14
        echo "
        <span class=\"loadingPiwik\" style=\"display:none;\"><img src=\"plugins/Morpheus/images/loading-blue.gif\"/>";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Loading")), "html", null, true);
        echo "</span>

    </div>

    <div class=\"annotation-controls\">
        ";
        // line 20
        if ((isset($context["canUserAddNotes"]) ? $context["canUserAddNotes"] : $this->getContext($context, "canUserAddNotes"))) {
            // line 21
            echo "            <a href=\"#\" class=\"add-annotation\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_CreateNewAnnotation")), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_CreateNewAnnotation")), "html", null, true);
            echo "</a>
        ";
        } elseif ((        // line 22
(isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")) == "anonymous")) {
            // line 23
            echo "            <a href=\"index.php?module=Login\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_LoginToAnnotate")), "html", null, true);
            echo "</a>
        ";
        }
        // line 25
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@Annotations/getAnnotationManager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  84 => 23,  82 => 22,  75 => 21,  73 => 20,  65 => 15,  62 => 14,  60 => 13,  50 => 10,  44 => 7,  39 => 4,  31 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="annotation-manager"*/
/*      {% if startDate != endDate %}data-date="{{ startDate }},{{ endDate }}" data-period="range"*/
/*      {% else %}data-date="{{ startDate }}" data-period="{{ period }}"*/
/*      {% endif %}>*/
/* */
/*     <div class="annotations-header">*/
/*         <span>{{ 'Annotations_Annotations'|translate }}</span>*/
/*     </div>*/
/* */
/*     <div class="annotation-list-range">{{ startDatePretty }}{% if startDate != endDate %} &mdash; {{ endDatePretty }}{% endif %}</div>*/
/* */
/*     <div class="annotation-list">*/
/*         {% include "@Annotations/_annotationList.twig" %}*/
/* */
/*         <span class="loadingPiwik" style="display:none;"><img src="plugins/Morpheus/images/loading-blue.gif"/>{{ 'General_Loading'|translate }}</span>*/
/* */
/*     </div>*/
/* */
/*     <div class="annotation-controls">*/
/*         {% if canUserAddNotes %}*/
/*             <a href="#" class="add-annotation" title="{{ 'Annotations_CreateNewAnnotation'|translate }}">{{ 'Annotations_CreateNewAnnotation'|translate }}</a>*/
/*         {% elseif userLogin == 'anonymous' %}*/
/*             <a href="index.php?module=Login">{{ 'Annotations_LoginToAnnotate'|translate }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* </div>*/
/* */
