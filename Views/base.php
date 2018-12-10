
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Cool RSS site">
        <meta name="author" content="Pas nos nom">
        <!--<link rel="icon" href="../../../../favicon.ico"> -->

        <title>RSS VIEW LIST</title>

        <!-- Bootstrap core CSS -->
        <link href="./dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="./dist/css/base.css" rel="stylesheet">
    </head>

    <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">Cover</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Contact</a>
                </nav>
            </div>
        </header>

        <div class="container">
            <div class="row row-striped">
                <div class="col-2 text-right">
                    <h1 class="display-4"><span class="badge badge-secondary">23</span></h1>
                    <h2>OCT</h2>
                </div>
                <div class="col-10">
                    <h3 class="text-uppercase"><strong>Ice Cream Social</strong></h3>
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
                        <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM</li>
                        <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Cafe</li>
                    </ul>
                    <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="row row-striped">
                <div class="col-2 text-right">
                    <h1 class="display-4"><span class="badge badge-secondary">27</span></h1>
                    <h2>OCT</h2>
                </div>
                <div class="col-10">
                    <h3 class="text-uppercase"><strong>Operations Meeting</strong></h3>
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Friday</li>
                        <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:30 PM - 4:00 PM</li>
                        <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Room 4019</li>
                    </ul>
                    <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="row row-striped">
                <div class="col-2 text-right">
                    <h1 class="display-4"><span class="badge badge-secondary">27</span></h1>
                    <h2>OCT</h2>
                </div>
                <div class="col-10">
                    <h3 class="text-uppercase"><strong>Operations Meeting</strong></h3>
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Friday</li>
                        <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 2:30 PM - 4:00 PM</li>
                        <li class="list-inline-item"><i class="fa fa-location-arrow" aria-hidden="true"></i> Room 4019</li>
                    </ul>
                    <p>Lorem ipsum dolsit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
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
        </div>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
        </footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
        <script src="./dist/js/bootstrap.min.js"></script>
    </body>
</html>
