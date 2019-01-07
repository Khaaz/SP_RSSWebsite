
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
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">RSS Website</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="index.php?page=0">Home</a>
                    <a class="nav-link" href="index.php?action=admin">Admin</a>
                    <a class="nav-link" href="#">Trending</a>
                </nav>
            </div>

        </header>
        <?php

            if (isset($ADMIN)) {
                if (isset($FAILCON) && $FAILCON) {

                    echo '<form id="signin" action="index.php?action=connect" class="masthead row col-12" role="form" method="post">';
                    echo '<div class="input-group">';
                    echo '<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>';
                    echo '<input id="username" type="text" class="form-control" name="username" value="" placeholder="Invalid Username">';
                    echo '</div>';
                    echo '<div class="input-group">';
                    echo '<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>';
                    echo '<input id="password" type="password" class="form-control" name="password" value="" placeholder="Invalid Password">';
                    echo '</div>';
                    echo '<button type="submit" class="btn btn-primary">Login</button>';
                    echo '</form>';
                } else {
                    // show here login thing + deconnect button
                    echo '<div class="container">';
                    echo '<a id="usrconnected" class="row row-stripped" href="index.php?action=disconnect"> '.$ADMIN->getUsername().' </a>';
                    echo '</div>';

                }

            } else {
                echo '<form id="signin" action="index.php?action=connect" class="masthead row col-12" role="form" method="post">';
                echo '<div class="input-group">';
                echo '<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>';
                echo '<input id="username" type="text" class="form-control" name="username" value="" placeholder="Username">';
                echo '</div>';
                echo '<div class="input-group">';
                echo '<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>';
                echo '<input id="password" type="password" class="form-control" name="password" value="" placeholder="Password">';
                echo '</div>';
                echo '<button type="submit" class="btn btn-primary">Login</button>';
                echo '</form>';
            }
        ?>

        <!-- MAIN -->
        <div class="container">
            <!-- Print all news -->
            <?php
            if (!isset($NEWS)) {
                return;
            }

            foreach ($NEWS as $n) {
                echo '<div class="row row-striped">';
                echo '<div class="col-2 text-right">';
                echo '<h3><span class="badge badge-secondary"> '.$n->getWebsite().' </span></h3>';
                echo '</div>';
                echo '<div class="col-10">';
                echo "<a href='index.php?action=click&newsUrl=".$n->getUrl()."' target='_blank'><h4 class='text-uppercase'><strong>".$n->getTitle()."</strong></h4></a>";
                echo '<ul class="list-inline">';
                echo '<li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> '.$n->getDate().'</li>';
                echo '</ul>';
                echo '<p>'.$n->getDescription().'</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
            <!-- Print navigator -->
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
