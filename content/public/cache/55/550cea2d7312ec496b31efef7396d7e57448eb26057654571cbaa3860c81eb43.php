<?php

/* echo.twig */
class __TwigTemplate_6fbd9428ebe276d5048b407b2f5ffee7c7c06a8f2a0abe9c07f9cf202c7a09a4 extends Twig_Template
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
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Index</h1>
    <p class=\"important\">
        Hello ";
        // line 8
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
        return array (  46 => 8,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block title %}Echo{% endblock %}

{% block content %}
    <h1>Index</h1>
    <p class=\"important\">
        Hello {{ name }}
    </p>
{% endblock %}
", "echo.twig", "C:\\site\\templates\\echo.twig");
    }
}
