<?php

/* 404.twig */
class __TwigTemplate_1602cc4462323c354c48327e7ae2aaeeeb3cdf0130106a77c5c5877da0a80d82 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "404.twig", 1);
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
        echo "Page Not Found";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col text-center\">
            <h1>404</h1>
            <h3 class=\"text-muted\">Page Not Found</h3>
            <p class=\"lead\">
                The page you're looking for either doesn't exist.
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block title %}Page Not Found{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col text-center\">
            <h1>404</h1>
            <h3 class=\"text-muted\">Page Not Found</h3>
            <p class=\"lead\">
                The page you're looking for either doesn't exist.
            </p>
        </div>
    </div>
{% endblock %}", "404.twig", "C:\\site\\templates\\404.twig");
    }
}
