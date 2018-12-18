
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="RSS site">
    <meta name="author" content="Pas nos nom">
    <!--<link rel="icon" href="../../../../favicon.ico"> -->

    <title>RSS VIEW LIST</title>

    <!-- Bootstrap core CSS -->
    <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./dist/css/base.css" rel="stylesheet">
    <link href="./dist/css/addNews.css" rel="stylesheet">
    <link href="./dist/css/util.css" rel="stylesheet">


</head>

<body class="h-auto text-center">

<div class="container row-1 w-100 h-100 p-3">
    <header class="masthead mb-auto">
        <div class="inner">
            <h3 class="masthead-brand">RSS Website</h3>
            <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link" href="index.php?page=0">Home</a>
                <a class="nav-link active" href="index.php?action=admin">Admin</a>
                <a class="nav-link" href="#">Trending</a>
            </nav>
        </div>
    </header>

    <div class="container row mx-auto p-5">
        <div class="wrap-contact2 row mx-auto">
            <form class="contact2-form validate-form">
					<span class="contact2-form-title">
                        Add News
					</span>

                <div class="wrap-input2 validate-input" data-validate="Field is required">
                    <input class="input2" type="text" name="RssUrl">
                    <span class="focus-input2" data-placeholder="Rss Url"></span>
                </div>

                <div class="wrap-input2 validate-input" data-validate="Field is required">
                    <input class="input2" type="text" name="WebsiteName">
                    <span class="focus-input2" data-placeholder="Website Name"></span>
                </div>

                <div class="wrap-input2 validate-input" data-validate="Field is required">
                    <input class="input2" type="text" name="WebsiteUrl">
                    <span class="focus-input2" data-placeholder="Website Url"></span>
                </div>

                <div class="container-contact2-form-btn">
                    <div class="wrap-contact2-form-btn">
                        <div class="contact2-form-bgbtn"></div>
                        <button class="contact2-form-btn">
                            Insert Your News
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer class="container row-1 w-100 h-100 p-3">
        <div class="inner">
            <p>All right reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./dist/js/bootstrap.min.js"></script>
</body>
</html>
