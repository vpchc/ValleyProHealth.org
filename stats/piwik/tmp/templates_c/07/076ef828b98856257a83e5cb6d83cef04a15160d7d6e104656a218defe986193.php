<?php

/* @Overlay/notifyParentIframe.twig */
class __TwigTemplate_a8ab04314ad96bcd9fdddb3764c7f498c5e259dfad96543f13144fc2a79cd9ad extends Twig_Template
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
        echo "<html>
<head>
    <title></title>
    <meta name=\"robots\" content=\"noindex,nofollow\">
</head>
<body>
<script type=\"text/javascript\">
    // go up two iframes to find the piwik window
    var piwikWindow = window.parent.parent;
    // notify piwik of location change
    // the location has been passed as the hash part of the url from the overlay session
    piwikWindow.Piwik_Overlay.setCurrentUrl(window.location.hash.substring(1));
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "@Overlay/notifyParentIframe.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <title></title>*/
/*     <meta name="robots" content="noindex,nofollow">*/
/* </head>*/
/* <body>*/
/* <script type="text/javascript">*/
/*     // go up two iframes to find the piwik window*/
/*     var piwikWindow = window.parent.parent;*/
/*     // notify piwik of location change*/
/*     // the location has been passed as the hash part of the url from the overlay session*/
/*     piwikWindow.Piwik_Overlay.setCurrentUrl(window.location.hash.substring(1));*/
/* </script>*/
/* </body>*/
/* </html>*/
