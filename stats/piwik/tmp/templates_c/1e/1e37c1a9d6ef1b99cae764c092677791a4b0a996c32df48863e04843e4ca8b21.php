<?php

/* @VisitsSummary/getSparklines.twig */
class __TwigTemplate_a069800eec2c5b6a29cecb0075dac3a81a95d7ec316f7c1d473b9e74634dc92b extends Twig_Template
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
        $this->loadTemplate("@VisitsSummary/_sparklines.twig", "@VisitsSummary/getSparklines.twig", 1)->display($context);
    }

    public function getTemplateName()
    {
        return "@VisitsSummary/getSparklines.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% include "@VisitsSummary/_sparklines.twig" %}*/
