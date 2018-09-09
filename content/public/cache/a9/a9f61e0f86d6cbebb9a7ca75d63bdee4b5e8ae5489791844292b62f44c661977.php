<?php

/* layout.twig */
class __TwigTemplate_a0b1c54dae2d68445338aebd644bb9491bb0b7a6ae490db17e74f86ca161edc4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "            - Siler Docker Test
        </title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Docker IIS</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"/\">Home
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/echo\">Echo</a>
                    </li>
                </ul>

                <span class=\"navbar-text\">
                    Siler Docker Test
                </span>
            </div>
        </nav>

        <main role=\"main\" class=\"container\">
            ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "        </main>

        <footer class=\"footer\">
            <div class=\"container\">
                ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "            </div>
        </footer>

        ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\"/>
        ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        echo "<p class=\"lead\">Nothing to see here.</p>";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "                    <span class=\"text-muted\">Place sticky footer content here.</span>
                ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "            <script src=\"/js/jquery.min.js\"></script>
            <script src=\"/js/popper.min.js\"></script>
            <script src=\"/js/bootstrap.bundle.min.js\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  122 => 50,  117 => 45,  114 => 44,  108 => 39,  103 => 10,  100 => 9,  95 => 5,  89 => 55,  87 => 50,  82 => 47,  80 => 44,  74 => 40,  72 => 39,  43 => 12,  41 => 9,  36 => 6,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>
            {% block title %}{% endblock %}
            - Siler Docker Test
        </title>

        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\"/>
        {% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
            <a class=\"navbar-brand\" href=\"#\">Docker IIS</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"/\">Home
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"/echo\">Echo</a>
                    </li>
                </ul>

                <span class=\"navbar-text\">
                    Siler Docker Test
                </span>
            </div>
        </nav>

        <main role=\"main\" class=\"container\">
            {% block content %}<p class=\"lead\">Nothing to see here.</p>{% endblock %}
        </main>

        <footer class=\"footer\">
            <div class=\"container\">
                {% block footer %}
                    <span class=\"text-muted\">Place sticky footer content here.</span>
                {% endblock %}
            </div>
        </footer>

        {% block javascripts %}
            <script src=\"/js/jquery.min.js\"></script>
            <script src=\"/js/popper.min.js\"></script>
            <script src=\"/js/bootstrap.bundle.min.js\"></script>
        {% endblock %}
    </body>
</html>
", "layout.twig", "C:\\site\\templates\\layout.twig");
    }
}
