<?php

/* layout.html */
class __TwigTemplate_62af9daa0e1f72c487e14f5a75101fd0adb0dcc0d738b4bf25e6dee988a63421 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<header>header</header>

<content>
    ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "</content>

<footer>footer</footer>
</body>
</html>";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  42 => 11,  34 => 14,  32 => 11,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<header>header</header>

<content>
    {% block content %}

    {% endblock %}
</content>

<footer>footer</footer>
</body>
</html>", "layout.html", "/Applications/MAMP/htdocs/myair/app/views/layout.html");
    }
}
