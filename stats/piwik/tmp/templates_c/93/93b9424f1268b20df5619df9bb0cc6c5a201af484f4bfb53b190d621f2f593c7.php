<?php

/* @Barometer/visitor_gauge_widget.twig */
class __TwigTemplate_d23e2cbde7ae5ba14142a624e1c0f223bc7688a589283bbabbcb7305fa1f0d26 extends Twig_Template
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
        echo "<div id=\"visitorGauge\"></div>

<script type=\"text/javascript\" charset=\"utf-8\">
\$(document).ready(function() {
    \$('#visitorGauge').barometerWidget({
        interval: 5000,
        dataUrlParams: {
            module: 'API',
            method: 'Barometer.getVisitorCounter',
            format: 'json',
            lastMinutes: 30,
            lastDays: 30
        },
        label: '";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Barometer_VisitsInLastNMinutes")), "html", null, true);
        echo "',
        valueName: 'visits',
        maxValueName: 'maxvisits'
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "@Barometer/visitor_gauge_widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 14,  19 => 1,);
    }
}
/* <div id="visitorGauge"></div>*/
/* */
/* <script type="text/javascript" charset="utf-8">*/
/* $(document).ready(function() {*/
/*     $('#visitorGauge').barometerWidget({*/
/*         interval: 5000,*/
/*         dataUrlParams: {*/
/*             module: 'API',*/
/*             method: 'Barometer.getVisitorCounter',*/
/*             format: 'json',*/
/*             lastMinutes: 30,*/
/*             lastDays: 30*/
/*         },*/
/*         label: '{{ "Barometer_VisitsInLastNMinutes"|translate }}',*/
/*         valueName: 'visits',*/
/*         maxValueName: 'maxvisits'*/
/*     });*/
/* });*/
/* </script>*/
/* */
