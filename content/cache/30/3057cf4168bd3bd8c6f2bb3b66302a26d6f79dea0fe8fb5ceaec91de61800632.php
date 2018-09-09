<?php

/* echo.twig */
class __TwigTemplate_fa2e7c3f87e9278f03eed6ddf6deafde02623c604a5eb3a461519a35d851b8a9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "echo.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Echo";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <h1>Index</h1>
    <p class=\"important\">
        Hello ";
        // line 15
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "
    </p>
";
    }

    public function getTemplateName()
    {
        return "echo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  56 => 13,  53 => 12,  43 => 6,  40 => 5,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block title %}Echo{% endblock %}

{% block head %}
    {{ parent() }}
    <style type=\"text/css\">
        .important { color: #336699; }
    </style>
{% endblock %}

{% block content %}
    <h1>Index</h1>
    <p class=\"important\">
        Hello {{ name }}
    </p>
{% endblock %}
", "echo.twig", "C:\\site\\templates\\echo.twig");
    }
}
