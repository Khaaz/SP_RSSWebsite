
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
</head>

<body class="h-auto text-center">
<div class="container row-1 w-100 h-100 p-3">

    <div class="container row-1 w-100 h-100 p-3">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">RSS Website</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="index.php?page=0">Home</a>
                    <a class="nav-link" href="index.php?action=admin">Admin</a>
                    <a class="nav-link" href="#">Trending</a>
                </nav>
            </div>
            <form id="signin" class="masthead row col-12" role="form">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email Address">
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </header>

    <!-- MAIN -->
    <div class="container">
        <?php
        foreach ($NEWS as $n) {
            echo '<div class="row row-striped">';
            echo '<div class="col-2 text-right">';
            echo '<h1 class="display-4"><span class="badge badge-secondary">27</span></h1>';
            echo '<h2>OCT</h2>';
            echo '</div>';
            echo '<div class="col-10">';
            echo "<h3 class='text-uppercase'><strong>$n->titre</strong></h3>";
            echo '<ul class="list-inline">';
            echo '<li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Friday</li>';
            echo '<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:30 PM - 4:00 PM</li>';
            echo '<li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Room 4019</li>';
            echo '</ul>';
            echo '<p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
        <nav class="row mx-auto p-5 w-100" aria-label="Navigation">
            <ul class="pagination mx-auto">
                <?php
                    if (!isset($CURPAGE) || !isset($TOTPAGE)) {
                        return;
                    }
                    $min = $CURPAGE > 2 ? $CURPAGE - 2 : 1;
                    $max = $CURPAGE < ($TOTPAGE - 2) ? $CURPAGE + 2 : $TOTPAGE;
                    $prev = $CURPAGE <= 1 ? 1 : $CURPAGE - 1;
                    $next = $CURPAGE >= $TOTPAGE ? $TOTPAGE : $CURPAGE + 1;
                    echo "<li class='page-item'><a class='page-link' href='index.php?page=$prev'>Previous</a></li>";
                    $i = $min;
                    for($i; $i < $max + 1; $i++) {
                        if ($i == $CURPAGE) {
                            echo "<li class='page-item active'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
                        } else {
                            echo "<li class='page-item'><a class='page-link' href='index.php?page=$i'>$i</a></li>";
                        }

                    }
                    echo "<li class='page-item'><a class='page-link' href='index.php?page=$next'>Next</a></li>";
                ?>
            </ul>
        </nav>
    </div>

    <!-- FOOTER -->
    <footer class="container row-1 w-100 h-100 p-3">
        <div class="inner">
            <p>All right reserved.</p>
        </div>
    </footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./dist/js/bootstrap.min.js"></script>
</body>
</html>
