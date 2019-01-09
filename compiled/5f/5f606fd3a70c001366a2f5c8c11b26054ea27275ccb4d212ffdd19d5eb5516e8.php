<?php

/* admin.html */
class __TwigTemplate_a912b168fba9b99c1e040c7915a061b4d28607c28e1a0dd54ab38183039a1073 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link href=\"../dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"../dist/css/base.css\" rel=\"stylesheet\">
    <link href=\"../dist/css/addNews.css\" rel=\"stylesheet\">
    <link href=\"../dist/css/util.css\" rel=\"stylesheet\">


</head>

<body class=\"h-auto text-center\">

<div class=\"container row-1 w-100 h-100 p-3\">
    <header class=\"masthead mb-auto\">
        <div class=\"inner\">
            <h3 class=\"masthead-brand\">RSS Website</h3>
            <nav class=\"nav nav-masthead justify-content-center\">
                <a class=\"nav-link\" href=\"index.php?page=0\">Home</a>
                <a class=\"nav-link active\" href=\"index.php?action=admin\">Admin</a>
                <a class=\"nav-link\" href=\"index.php?action=trending\">Trending</a>
            </nav>
        </div>
    </header>

    ";
        // line 39
        if (($context["admin"] ?? null)) {
            // line 40
            echo "        <a id=\"usrconnected\" href=\"index.php?action=disconnect\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "username", array()), "html", null, true);
            echo "</a>
    ";
        }
        // line 42
        echo "
    <div class=\"container row mx-auto p-5\">
        <div class=\"wrap-contact2 row mx-auto\">
            <form action=\"index.php?action=addRss\" method=\"post\" class=\"contact2-form validate-form\">
\t\t\t\t\t<span class=\"contact2-form-title\">
                        Add News
\t\t\t\t\t</span>

                <div class=\"wrap-input2 validate-input\" data-validate=\"Field is required\">
                    <input class=\"input2\" type=\"text\" value=\"\" name=\"RssUrl\">
                    <span class=\"focus-input2\" data-placeholder=\"Rss Url\"></span>
                </div>

                <div class=\"wrap-input2 validate-input\" data-validate=\"Field is required\">
                    <input class=\"input2\" type=\"text\" value=\"\" name=\"WebsiteName\">
                    <span class=\"focus-input2\" data-placeholder=\"Website Name\"></span>
                </div>

                <div class=\"wrap-input2 validate-input\" data-validate=\"Field is required\">
                    <input class=\"input2\" type=\"text\" value=\"\" name=\"WebsiteUrl\">
                    <span class=\"focus-input2\" data-placeholder=\"Website Url\"></span>
                </div>

                <div class=\"container-contact2-form-btn\">
                    <div class=\"wrap-contact2-form-btn\">
                        <div class=\"contact2-form-bgbtn\"></div>
                        <button type=\"submit\" class=\"contact2-form-btn\">
                            Insert Your Rss
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class=\"dropdown\">
        <form action=\"index.php?action=delRss\" method=\"post\">
            <select name=\"rssList\">
                ";
        // line 81
        if (($context["RSSlist"] ?? null)) {
            // line 82
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["RSSlist"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["rss"]) {
                // line 83
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rss"], "rssUrl", array()), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rss"], "rssUrl", array()), "html", null, true);
                echo " </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rss'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                ";
        }
        // line 86
        echo "            </select>
            <button type=\"submit\" class=\"btn-primary\">Delete</button>
        </form>
    </div>

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
        return "admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 86,  130 => 85,  119 => 83,  114 => 82,  112 => 81,  71 => 42,  65 => 40,  63 => 39,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.html", "/var/www/html/RSSWebsite/src/Views/admin.html");
    }
}
