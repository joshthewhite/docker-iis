<?php

/* hello.twig */
class __TwigTemplate_abc1ba80ed8adcd1532a19b3c077d05943c7aba8ab364a07884a6b0c24354970 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "hello.twig", 1);
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
        echo "Greeting";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"row\">
        <div class=\"col\">
            <h1>Greeting</h1>
            <p class=\"important\">
                ";
        // line 10
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["greeting"] ?? null)), "html", null, true);
        echo "
                ";
        // line 11
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["name"] ?? null)), "html", null, true);
        echo "!
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "hello.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  48 => 10,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}

{% block title %}Greeting{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col\">
            <h1>Greeting</h1>
            <p class=\"important\">
                {{ greeting|capitalize }}
                {{ name|capitalize }}!
            </p>
        </div>
    </div>
{% endblock %}", "hello.twig", "C:\\site\\templates\\hello.twig");
    }
}
