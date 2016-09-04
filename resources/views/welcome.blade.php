<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- facebook og tags -->
    <meta property="og:title" content="Remember Ernie" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.example.com/" />
    <meta property="og:image" content="http://example.com/image.jpg" />
    <meta property="og:description" content="Description Here" />

    <title>Remember Ernie</title>

    <!-- stylesheets -->
    <link href="/css/app.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    Remember Ernie
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Ernie</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#donate">Donate</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#memories">Memories</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Remember Ernie</h1>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
          <div class="col-sm-4">
            <img src="/img/family-photo.jpg" class="img-rounded img-responsive"/>
          </div>
          <div class="col-sm-8">
              <h2>Ernie Madrigal</h2>
              <p>Cras efficitur eget risus et commodo. Pellentesque id quam placerat, mattis enim non, pretium turpis. Quisque sodales accumsan neque, eu sodales nisi lacinia ac. Fusce vulputate pulvinar nisi, ut aliquam erat rutrum eget. Ut ultrices dapibus magna, in sollicitudin nulla consectetur sit amet. Aliquam molestie dictum dui a congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus consectetur pharetra enim, tincidunt consectetur arcu vehicula at. Nulla fermentum ante quis tincidunt ultrices. Phasellus dignissim, lacus sit amet condimentum congue, enim nunc aliquet urna, ullamcorper consectetur nulla augue id dui.</p>
          </div>
        </div>
    </section>

    <!-- Donate Section -->
    <section id="donate" class="content-section text-center">
        <div class="donation-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Donations</h2>
                    <p>You can help with the funeral expenses by donating to go fund me.</p>
                    <a href="https://www.gofundme.com/2mzz3fg" class="btn btn-default btn-lg">Help Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Memories Section -->
    <section id="memories" class="container content-section">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Memories & Goodbyes</h2>
            </div>
        </div>

          <memories></memories>

        </div>
    </section>

    <footer class="text-center footer">
        made with <i class="fa fa-heart"></i> by Shaun
    </footer>

    <!-- application scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/main.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</body>

</html>
