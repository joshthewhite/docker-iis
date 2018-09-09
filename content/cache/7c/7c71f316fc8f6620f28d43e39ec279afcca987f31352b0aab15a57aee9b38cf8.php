<?php

/* layout.twig */
class __TwigTemplate_b1532698f0152f51dbe43e5c1cbf7088ab2d652442d09431c8ada4ee9ec11628 extends Twig_Template
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
        // line 13
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
                        <a class=\"nav-link\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, Siler\Http\url("/"), "html", null, true);
        echo "\">Home
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, Siler\Http\url("hello"), "html", null, true);
        echo "\">Greet</a>
                    </li>
                </ul>

                <span class=\"navbar-text\">
                    Siler Docker Test
                </span>
            </div>
        </nav>

        <main role=\"main\" class=\"container\">
            ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "        </main>

        <footer class=\"footer\">
            <div class=\"container\">
                ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "            </div>
        </footer>

        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
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
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, Siler\Http\url("css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, Siler\Http\url("css/main.css"), "html", null, true);
        echo "\"/>
        ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        echo "<p class=\"lead\">Nothing to see here.</p>";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "                    <span class=\"text-muted\">Place sticky footer content here.</span>
                ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, Siler\Http\url("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, Siler\Http\url("js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, Siler\Http\url("js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  142 => 53,  137 => 52,  134 => 51,  129 => 46,  126 => 45,  120 => 40,  114 => 11,  109 => 10,  106 => 9,  101 => 5,  95 => 56,  93 => 51,  88 => 48,  86 => 45,  80 => 41,  78 => 40,  64 => 29,  56 => 24,  43 => 13,  41 => 9,  36 => 6,  34 => 5,  28 => 1,);
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
            <link rel=\"stylesheet\" href=\"{{ url('css/bootstrap.min.css') }}\"/>
            <link rel=\"stylesheet\" href=\"{{ url('css/main.css') }}\"/>
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
                        <a class=\"nav-link\" href=\"{{ url('/') }}\">Home
                            <span class=\"sr-only\">(current)</span>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ url('hello') }}\">Greet</a>
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
            <script src=\"{{ url('js/jquery.min.js') }}\"></script>
            <script src=\"{{ url('js/popper.min.js') }}\"></script>
            <script src=\"{{ url('js/bootstrap.bundle.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "layout.twig", "C:\\site\\templates\\layout.twig");
    }
}
