<?php

/* @CoreHome/_dataTableJS.twig */
class __TwigTemplate_25de971a0e874b4798efc87fabbff8db0e10081b0c60b0451da85380848d00be extends Twig_Template
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
        echo "<script type=\"text/javascript\" defer=\"defer\">
    \$(document).ready(function () {
        require('piwik/UI/DataTable').initNewDataTables();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableJS.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <script type="text/javascript" defer="defer">*/
/*     $(document).ready(function () {*/
/*         require('piwik/UI/DataTable').initNewDataTables();*/
/*     });*/
/* </script>*/
/* */
