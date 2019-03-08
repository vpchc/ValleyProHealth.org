<?php

/* @Annotations/_annotationList.twig */
class __TwigTemplate_b7eab489ca1f3a2e9fc262ac149b4d8f5c71ed3b344194a00f8f54ee55e89f02 extends Twig_Template
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
        echo "<div class=\"annotations\">

    ";
        // line 3
        if (twig_test_empty((isset($context["annotations"]) ? $context["annotations"] : $this->getContext($context, "annotations")))) {
            // line 4
            echo "        <div class=\"empty-annotation-list\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_NoAnnotations")), "html", null, true);
            echo "</div>
    ";
        }
        // line 6
        echo "
    <table>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annotations"]) ? $context["annotations"] : $this->getContext($context, "annotations")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["annotation"]) {
            // line 9
            echo "            ";
            $this->loadTemplate("@Annotations/_annotation.twig", "@Annotations/_annotationList.twig", 9)->display($context);
            // line 10
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annotation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        <tr class=\"new-annotation-row\" style=\"display:none;\" data-date=\"";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["selectedDate"]) ? $context["selectedDate"] : $this->getContext($context, "selectedDate")), "html", null, true);
        echo "\">
            <td class=\"annotation-meta\">
                <div class=\"annotation-star\">&nbsp;</div>
                <div class=\"annotation-period-edit\">
                    <a href=\"#\">";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["selectedDate"]) ? $context["selectedDate"] : $this->getContext($context, "selectedDate")), "html", null, true);
        echo "</a>

                    <div class=\"datepicker\" style=\"display:none;\"/>
                </div>
            </td>
            <td class=\"annotation-value\">
                <input type=\"text\" value=\"\" class=\"new-annotation-edit\" placeholder=\"";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Annotations_EnterAnnotationText")), "html", null, true);
        echo "\"/><br/>
                <input type=\"button\" class=\"submit new-annotation-save\" value=\"";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
        echo "\"/>
                <input type=\"button\" class=\"submit new-annotation-cancel\" value=\"";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Cancel")), "html", null, true);
        echo "\"/>
            </td>
            <td class=\"annotation-user-cell\"><span class=\"annotation-user\">";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")), "html", null, true);
        echo "</span></td>
        </tr>
    </table>

</div>
";
    }

    public function getTemplateName()
    {
        return "@Annotations/_annotationList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  94 => 23,  90 => 22,  86 => 21,  77 => 15,  69 => 11,  55 => 10,  52 => 9,  35 => 8,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="annotations">*/
/* */
/*     {% if annotations is empty %}*/
/*         <div class="empty-annotation-list">{{ 'Annotations_NoAnnotations'|translate }}</div>*/
/*     {% endif %}*/
/* */
/*     <table>*/
/*         {% for annotation in annotations %}*/
/*             {% include "@Annotations/_annotation.twig" %}*/
/*         {% endfor %}*/
/*         <tr class="new-annotation-row" style="display:none;" data-date="{{ selectedDate }}">*/
/*             <td class="annotation-meta">*/
/*                 <div class="annotation-star">&nbsp;</div>*/
/*                 <div class="annotation-period-edit">*/
/*                     <a href="#">{{ selectedDate }}</a>*/
/* */
/*                     <div class="datepicker" style="display:none;"/>*/
/*                 </div>*/
/*             </td>*/
/*             <td class="annotation-value">*/
/*                 <input type="text" value="" class="new-annotation-edit" placeholder="{{ 'Annotations_EnterAnnotationText'|translate }}"/><br/>*/
/*                 <input type="button" class="submit new-annotation-save" value="{{ 'General_Save'|translate }}"/>*/
/*                 <input type="button" class="submit new-annotation-cancel" value="{{ 'General_Cancel'|translate }}"/>*/
/*             </td>*/
/*             <td class="annotation-user-cell"><span class="annotation-user">{{ userLogin }}</span></td>*/
/*         </tr>*/
/*     </table>*/
/* */
/* </div>*/
/* */
