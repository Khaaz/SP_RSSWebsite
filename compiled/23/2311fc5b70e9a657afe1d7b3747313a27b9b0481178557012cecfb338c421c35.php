<?php

/* base.html */
class __TwigTemplate_8f6bc0e12536aca180173197c2e54bfded8080ac005dcede2f565014d104695b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"RSS site\">
    <meta name=\"author\" content=\"Pas nos nom\">
    <!--<link rel=\"icon\" href=\"../../../../favicon.ico\"> -->

    <title>RSS VIEW LIST</title>

    <!-- Bootstrap core CSS -->
    <link href=\"../dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"../dist/css/base.css\" rel=\"stylesheet\">

</head>

<body class=\"h-auto text-center\">
    <div class=\"container row-1 w-100 h-100 p-3\">
        <header class=\"masthead mb-auto\">
            <div class=\"inner\">
                <h3 class=\"masthead-brand\">RSS Website</h3>
                <nav class=\"nav nav-masthead justify-content-center\">
                    <a class=\"nav-link active\" href=\"index.php?page=0\">Home</a>
                    <a class=\"nav-link\" href=\"index.php?action=admin\">Admin</a>
                    <a class=\"nav-link\" href=\"#\">Trending</a>
                </nav>
            </div>

        </header>

        ";
        // line 35
        if ((($context["admin"] ?? null) && (($context["admin"] ?? null) != null))) {
            // line 36
            echo "            ";
            if (($context["failCon"] ?? null)) {
                // line 37
                echo "                <form id=\"signin\" action=\"index.php?action=connect\" class=\"masthead row col-12\" role=\"form\" method=\"post\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                        <input id=\"username\" type=\"text\" class=\"form-control\" name=\"username\" value=\"\" placeholder=\"Invalid Username\">
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                        <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" value=\"\" placeholder=\"Invalid Password\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                </form>
            ";
            } else {
                // line 49
                echo "                <div class=\"container\">
                    <a id=\"usrconnected\" class=\"row row-stripped\" href=\"index.php?action=disconnect\"> ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "username", array()), "html", null, true);
                echo " </a>
                </div>
            ";
            }
            // line 53
            echo "        ";
        } else {
            // line 54
            echo "            <form id=\"signin\" action=\"index.php?action=connect\" class=\"masthead row col-12\" role=\"form\" method=\"post\">
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                    <input id=\"username\" type=\"text\" class=\"form-control\" name=\"username\" value=\"\" placeholder=\"Username\">
                </div>
                <div class=\"input-group\">
                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                    <input id=\"password\" type=\"password\" class=\"form-control\" name=\"password\" value=\"\" placeholder=\"Password\">
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Login</button>
            </form>
        ";
        }
        // line 66
        echo "
        <!-- MAIN -->
        <div class=\"container\">
            <!-- Print all news -->
            ";
        // line 70
        if (($context["news"] ?? null)) {
            // line 71
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["news"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 72
                echo "                    <div class=\"row row-striped\">
                        <div class=\"col-2 text-right\">
                            <h3><span class=\"badge badge-secondary\"> ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "website", array()), "html", null, true);
                echo " </span></h3>
                        </div>
                        <div class=\"col-10\">
                            <a href=\"index.php?action=click&newsUrl=";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "url", array()), "html", null, true);
                echo "\" target='_blank'><h4 class='text-uppercase'><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "title", array()), "html", null, true);
                echo "</strong></h4></a>
                            <ul class=\"list-inline\">
                                <li class=\"list-inline-item\"><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> ";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "date", array()), "html", null, true);
                echo "</li>
                            </ul>
                            <p> ";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "description", array()), "html", null, true);
                echo "</p>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "            ";
        }
        // line 86
        echo "
            <!-- Print navigator -->
            <nav class=\"row mx-auto p-5 w-100\" aria-label=\"Navigation\">
                <ul class=\"pagination mx-auto\">
                    ";
        // line 90
        if (($context["curPage"] ?? null)) {
            // line 91
            echo "                        <li class='page-item'><a class='page-link' href=\"index.php?page=";
            echo twig_escape_filter($this->env, ($context["prev"] ?? null), "html", null, true);
            echo "\">Previous</a></li>
                        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(($context["min"] ?? null), ($context["max"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 93
                echo "                            ";
                if ((($context["curPage"] ?? null) == $context["n"])) {
                    // line 94
                    echo "                                <li class='page-item active'><a class='page-link' href=\"index.php?page=";
                    echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 96
                    echo "                                <li class='page-item'><a class='page-link' href=\"index.php?page=";
                    echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 98
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                        <li class='page-item'><a class='page-link' href=\"index.php?page=";
            echo twig_escape_filter($this->env, ($context["next"] ?? null), "html", null, true);
            echo "\">Next</a></li>
                    ";
        }
        // line 101
        echo "                </ul>
            </nav>
        </div>
        <!-- FOOTER -->
        <footer class=\"container row-1 w-100 h-100 p-3\">
            <div class=\"inner\">
                <p>All right reserved.</p>
            </div>
        </footer>
    </div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"../dist/js/bootstrap.min.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 101,  194 => 99,  188 => 98,  180 => 96,  172 => 94,  169 => 93,  165 => 92,  160 => 91,  158 => 90,  152 => 86,  149 => 85,  139 => 81,  134 => 79,  127 => 77,  121 => 74,  117 => 72,  112 => 71,  110 => 70,  104 => 66,  90 => 54,  87 => 53,  81 => 50,  78 => 49,  64 => 37,  61 => 36,  59 => 35,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html", "/srv/http/RSSWebsite/src/Views/base.html");
    }
}
