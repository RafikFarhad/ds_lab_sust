<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Data Science Group,
    Computer Science and Engineering Department,
    Shahjalal University of Science and Technology, Sylhet.">
	
	<!--
	 Developer:
	 .....................
	 MD. ABU TALHA,
     talhaqc@gmail.com
	 SUST CSE 2012 Batch,
	 SCDN, CSE, SUST.
	 .....................
	 -->
	 
    <meta name="author" content="Data Science Group">
    <meta name="keyword" content="Sust,Data Science Group,Cse,Sylhet,
    Event, News, Bangladesh, Award, Contest, Thesis
    SUST DS, sust ds, ds.sust.edu,
    ">

    {!! Html::favicon('favicon.ico') !!}

    <title>{!! $title !!}</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800') !!}
    {!! Html::style('labfront/font-awesome/css/font-awesome.min.css') !!}
    {!! Html::style('css/academicons/css/academicons.css') !!}
    {!! Html::style('labfront/js/dropdown-menu/dropdown-menu.css') !!}
    {!! Html::style('labfront/bootstrap/css/bootstrap.min.css') !!}
    <!-- {!! Html::style('labfront/js/fancybox/jquery.fancybox.css') !!} -->
    <!-- {!! Html::style('labfront/js/audioplayer/audioplayer.css') !!} -->
    {!! Html::style('labfront/style.css') !!}
    @yield('style')

  <style type="text/css">
     /* Paste this css to your style sheet file or under head tag */
    /* This only works with JavaScript, 
    if it's not present, don't show loader */
            .no-js #loader { display: none;  }
            .js #loader { display: block; position: absolute; left: 100px; top: 0; }
            .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url(http://smallenvelop.com/wp-content/uploads/2014/08/Preloader_11.gif) center no-repeat #fff;
            }


            #preloader {
            position:fixed;
            top:0;
            left:0;
            right:0;
            bottom:0;
            background-color:#fff; /* change if the mask should have another color then white */
            z-index:99; /* makes sure it stays on top */
        }
  </style>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90953132-1', 'auto');
  ga('send', 'pageview');

</script>



</head>
