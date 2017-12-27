<?php

/* index/index.html */
class __TwigTemplate_d2cc5b68dc95eb228e00d05460a56d180fd94237477485e9384e611aab12cfe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index/index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h1>this is view</h1>
<h3>";
        // line 4
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "</h3>
";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}
<h1>this is view</h1>
<h3>{{data}}</h3>
{% endblock %}
", "index/index.html", "/Applications/MAMP/htdocs/myair/app/views/index/index.html");
    }
}
