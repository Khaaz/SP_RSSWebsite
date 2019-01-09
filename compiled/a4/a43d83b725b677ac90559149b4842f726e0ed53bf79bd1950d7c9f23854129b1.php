<?php

/* trending.html */
class __TwigTemplate_3d736a541174c5e00d5cc30a487010fb11d70a178bc2ac4d0c6fd2cd095d246c extends Twig_Template
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
        echo "<!doctype html>
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
                <a class=\"nav-link\" href=\"index.php?page=0\">Home</a>
                <a class=\"nav-link\" href=\"index.php?action=admin\">Admin</a>
                <a class=\"nav-link active\" href=\"index.php?action=trending\">Trending</a>
            </nav>
        </div>

    </header>

    ";
        // line 34
        if ((($context["admin"] ?? null) && (($context["admin"] ?? null) != null))) {
            // line 35
            echo "        <div class=\"container\">
            <a id=\"usrconnected\" class=\"row row-stripped\" href=\"index.php?action=disconnect\"> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "username", array()), "html", null, true);
            echo " </a>
        </div>
    ";
        }
        // line 39
        echo "
    <!-- MAIN -->
    <div class=\"container\">
        <!-- Print all news -->
        ";
        // line 43
        if (($context["news"] ?? null)) {
            // line 44
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["trendings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 45
                echo "            <div class=\"row row-striped\">
                <div class=\"col-2 text-right\">
                    <h3><span class=\"badge badge-secondary\"> ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "website", array()), "html", null, true);
                echo " </span></h3>
                </div>
                <div class=\"col-10\">
                    <a href=\"index.php?action=click&newsUrl=";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "url", array()), "html", null, true);
                echo "\" target='_blank'><h4 class='text-uppercase'><strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "title", array()), "html", null, true);
                echo "</strong></h4></a>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> ";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "date", array()), "html", null, true);
                echo "</li>
                    </ul>
                    <p> ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "description", array()), "html", null, true);
                echo "</p>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        ";
        }
        // line 59
        echo "
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
        return "trending.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 59,  114 => 58,  104 => 54,  99 => 52,  92 => 50,  86 => 47,  82 => 45,  77 => 44,  75 => 43,  69 => 39,  63 => 36,  60 => 35,  58 => 34,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "trending.html", "/var/www/html/RSSWebsite/src/Views/trending.html");
    }
}
