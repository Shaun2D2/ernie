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
    <meta property="og:url" content="https://www.rememberernie.com/" />
    <meta property="og:image" content="https://www.rememberernie.com/img/intro-bg.jpg" />
    <meta property="og:description" content="Ernest Madrigal touched so many lives in so many different ways while he was with us.  Let's remember the good times, please contribute your memories to a man that has been there for so many." />

    <title>Remember Ernie</title>

    <!-- stylesheets -->
    <link href="/css/app.css" rel="stylesheet" />
    <link href="/css/main.css" rel="stylesheet" />

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
                        <a class="page-scroll" href="#video">Tribute Video</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#memories">Memories</a>
                    </li>
                    <li>
                      <a>
                        <div class="fb-share-button"
                      		data-href="https://www.rememberernie.com"
                      		data-layout="button_count">
                      	</div>
                      </a>
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
                        <h1 class="brand-heading">Ernie Madrigal</h1>
                        <h2 class="brand-heading">1964 - 2016</h2>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section">
        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <img src="/img/wedding-photo.jpg" class="img-rounded img-responsive" />
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
              <h2 class="text-center">Ernie Madrigal</h2>
              <p>Ernest G. Madrigal, born the second oldest son out of five children to Irene Madrigal and Joseph Madrigal in Phoenix Arizona in 1964. Later in life, he went on to have a family of his own, marrying Irene Esquer and together they birthed three daughters; Ophelia Madrigal, Esperanza Madrigal, Alycia Madrigal, and one son Ernest Madrigal Jr.</p>
              <p>Ernie took a chance on his heart and later in 1995 met Iva Sanders, marrying her in 2007. He took on the role as father to her seven daughters Roshawna Madrid, Toya Sanders, Teri Sleeper, Tissany Madrigal, Leslie Sanders, Tylie Sanders, Arica Sanders and Iva’s only son, Dexton Sanders.</p>
              <p>Ernie was a very hard working man who loved to connect with his family frequently, create memorable family traditions, and be involved with family events. He enjoyed camping, family gatherings, attending church, and even the occasional joyride to the lake during the summer. He worked at Jeld-Wen for ten years from which he retired due to medical issues.</p>
              <p>During the last three years after being diagnosed with sinus cancer, he had fought and beat doctor’s expectations. To the surviving family’s dismay, he lost his battle with cancer and took his place next to the Lord on September 2, 2016. He also leaves behind forty-one grandchildren and eleven great grandchildren.</p>
              <p>May he rest in peace</p>
          </div>
        </div>
    </section>

    <!-- Donate Section -->
    <section id="video" class="content-section text-center">
        <div class="donation-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Tribute Video</h2>
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" id="vp1RNWMi" title="Video Player" frameborder="0" src="https://s3.amazonaws.com/embed.animoto.com/play.html?w=swf/production/vp1&e=1473431632&f=RNWMiGDDgtRQVOW8PffHaA&d=0&m=a&r=360p+720p&volume=100&start_res=360p&i=m&asset_domain=s3-p.animoto.com&animoto_domain=animoto.com&options=" allowfullscreen></iframe>
                    </div>
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
        Made with <i class="fa fa-heart"></i> by Shaun
    </footer>

    <!-- application scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/main.js"></script>

    <!--facebook-->
    <script>

      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1787329678180174',
          xfbml      : true,
          version    : 'v2.7'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));

    </script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</body>

</html>
