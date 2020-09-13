<html lang="da">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title>Dateabus.com</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/msdropdown/dd.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/msdropdown/flags.css" />

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="<?php echo base_url();?>assets/css/admin_css/app.min.css" rel="stylesheet" type="text/css" /> -->

  <!-- Bootsnav CSS -->
  <link href="<?php echo base_url();?>assets/css/bootsnav.css" rel="stylesheet">

  <!-- Owl stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.css">

  <!-- Lightbox Theme -->
  <link href="<?php echo base_url();?>assets/css/lightbox.css" rel="stylesheet">

  <!-- Main css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/toastr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
</head>

<body class="search-page sidebar-collapse home-page" onload='addCardData()'>

  <!-- PRE LOADER -->
  <div class="page-loader">
    <div class="loader"> 
      <span class="dot dot_1"></span> 
      <span class="dot dot_2"></span> 
      <span class="dot dot_3"></span> 
      <span class="dot dot_4"></span> 
    </div>
  </div>

  <!-- Navigation Section -->
  <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control tr" placeholder="Search" key="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    <div class="container">
      <!-- Start Atribute Navigation -->
      <div class="attr-nav">
          <ul>
              <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
          </ul>
      </div>
      <!-- End Atribute Navigation -->

      <!-- Start Header Navigation -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
              <i class="fa fa-bars"></i>
          </button>
          <!-- logo Text Here -->
          <a class="navbar-brand" href="#brand">
              <img src="<?php echo base_url();?>assets/img/logo/Original1.png" class="logo-img logo-scrolled" alt="" style="width: 180px; margin-left: -40px;">
          </a>
      </div>
      <!-- End Header Navigation -->
  
      <!-- <div class="flag_box"> -->
      <div class="col-md-4 flex_col4" id="flex_co" style='margin-top:30px'>
        <div class="flex_top_box">
          <div class="image_box_div select_change" >
            <h3>SPROG</h3>
            <div class="dropdown selectt_boxx notranslate">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
                <span id="dropdownval">UK English</span>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="javascript:void(0);" class="change_dropdown" alt="gb">Uk English</a></li>
                <li><a href="javascript:void(0);" class="change_dropdown" alt="da">Danish</a></li>
                <li><a href="javascript:void(0);" class="change_dropdown" alt="no">Norwegiam</a></li>
                <li><a href="javascript:void(0);" class="change_dropdown" alt="sv">Swedish</a></li>
                <li><a href="javascript:void(0);" class="change_dropdown" alt="en">USA English</a></li>
              </ul>
            </div>
            <ul class="change_img">  
              <li><img class="img_11" src="<?php echo base_url();?>assets/img/language/uk.png" alt="gb" alt2="Uk English"></li>
              <li><img src="<?php echo base_url();?>assets/img/language/Denish.png" alt="da" alt2="Danish"></li>
              <li><img src="<?php echo base_url();?>assets/img/language/Norwaygian.png" alt="no" alt2="Norwegiam"></li>
              <li><img src="<?php echo base_url();?>assets/img/language/Swedish.png" alt="sv" alt2="Swedish"></li>
              <li><img src="<?php echo base_url();?>assets/img/language/usa.png" alt="en" alt2="USA English"></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- </div> -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
          <li><a href="#home" style="font-weight: 400 !important;" key="Home" class="tr">Home</a></li>
          <li><a href="#pricing" style="font-weight: 400 !important;" key="Events" class="tr">Events 2020</a></li> 
          <li><a href="#contact" style="font-weight: 400 !important;" key="Contact" class="tr">Contact</a></li>            
          <li><a href="#about" style="font-weight: 400 !important;" key="About Us" class="tr">About Us</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="hero hero_full_screen hero_parallax text-center  parallax-window" data-stellar-background-ratio="0.5">
    <div class="bg-overlay">
      <div class="flag_box">
        <div class="row">
          <div class="col-md-4">
          
          </div>
          <div class="col-md-4">

          </div>
        </div>
      </div>
    </div>
  
    <div class="hero_parallax_inner">
      <img src="<?php echo base_url();?>assets/logo/Original1.png" class="home-img logo-display" alt="" style="width: 60%;">
    </div>
  </section>
  
  <!-- Price Section -->
  <section id="pricing" class="pricing pb80 pt80"  style="padding-top: 70px;padding-bottom: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="section-title mb25">
            <h2 style="letter-spacing: 0px;" key="EVENTS 2020" class="tr">EVENTS 2020</h2>
            <p key="Dating for everybody..." class="tr">Dating for everybody...</p>
            <hr>
          </div>
        </div>
      </div>
      <div class="row content-row" id='price_card'>
      </div>
    </div>
  </section>

  <!-- Contact  Section -->
  <section id="contact" class="pb80 pt80 " style="padding-top: 70px;padding-bottom: 0px;">
    <div class="container">
      <!-- section title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="section-title mb25">
            <h2 style="letter-spacing: -1px;" class="tr" key="CONTACT">CONTACT</h2>
            <p class="tr" key="How we live, work & dream.">How we live, work & dream.</p>
            <hr>
          </div>
        </div>
      </div>
      <!--end  section title -->
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="contact-info">
          <ul class="list-unstyled">
            <li>
              <h2 class="tr" key="ADDRESS"><i class="fa fa-home"></i> ADDRESS</h2>
              <p style="letter-spacing: 0px;">Frederiksborgvej98 4 th 2400</p><br/><span class="tr">(Denmark)</span>
            </li>
            <li>
              <h2 class="tr" key="PHONE"><i class="fa fa-phone"></i> PHONE</h2>
              <p style="letter-spacing: 0px;">+45 31390202</p>
            </li>
            <li>
              <h2 class="tr" key="EMAIL"><i class="fa fa-envelope"></i> EMAIL</h2>
              <p style="letter-spacing: 0px;"><a href="mailto:info@myemail.com">info@dateabus.com</a></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="contact-form">
          <div class="alert"></div>
          <form id="contact-form">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <label class="sr-only" for="name" >Name:</label> 
                <input id="name" name="name" placeholder="Name *" required="" type="text" class="tr" key="Name *">
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <label class="sr-only" for="email">Email:</label>
                <input id="email" name="email" placeholder="Email *" required="" type="email" class="tr" key="Email *">  
              </div>
            </div>
            <div class="row text-right">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="sr-only" for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Message *" required class="tr" key="Message *"></textarea>
                <button class="btn aisle-btn tr" name="send" key="SEND">SEND</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="pb80 pt80" style="padding-top: 70px; padding-bottom: 0px;">
    <div class="container">
      <div class="row">
        <div class="section-title text-center">
          <h2 style="letter-spacing: -1px;" class="tr" key="ABOUT DATE A BUS">ABOUT DATE A BUS</h2>
          <p style="letter-spacing: 0px; text-align: left;" class="tr" key="Date A Bus is a one-man owned business that, with its new developed concept, focuses on dating and stands out from the current swipe method that is widely used on various dating apps.">Date A Bus is a one-man owned business that, with its new developed concept, focuses on dating and stands out from the current swipe method that is widely used on various dating apps.</p>
          <p style="letter-spacing: 0px; text-align: left;" class="tr" key="With our professional and carefully selected matchmaker, and coatches, we make sure the right people are put together right from the start.">With our professional and carefully selected matchmaker, and coatches, we make sure the right people are put together right from the start.</p>

          <p style="letter-spacing: 0px; text-align: left;" class="tr" key="Dating is for us more than a picture ... This is our absolute philosophy.">Dating is for us more than a picture ... This is our absolute philosophy.</p>

          <p style="text-align: left;">/dateabus.com</p>
        </div>
        <video width="100%" autoplay="true" loop='true' controls='true'>
          <source src="<?php echo base_url();?>assets/My Promo video 3.mp4" type="video/mp4">
          Your browser does not support the video.
        </video>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container" style="text-align: center;font-size: 16px; margin-bottom: 30px">
      <div style="color:#f44336" class="copyright float-lg-left float-sm-none">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>
        <span class="tr" key="All rights reserved">- All rights reserved </span>
        <a style="color:#f44336" class="" href="<?php echo base_url();?>" target="">dateabus.com - CVR.nr.:39705664</a>
      </div>
      <nav class="float-lg-right float-sm-none">
        <ul>
          <li class="nav-item">
            <a href="https://twitter.com" class="nav-link" target="_blank" style="margin-right: 40px"><i class="fa fa-twitter"></i></a>
          </li>
          <li class="nav-item">
            <a href="https://www.facebook.com" class="nav-link" target="_blank" style="margin-right: 40px"><i class="fa fa-facebook-f"></i></a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>login" class="nav-link" style="margin-right: 40px"><i class="fa fa-user"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </footer>

  <div id="pay_Modal" class="modal">
    <div class="modal-dialog">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <h2 class='tr'>Your information</h2>
        </div>
        <div class="modal-body">
          <form>
            <input type="hidden" id="amount"/><input type="hidden" id="pack_name"/>
            <span class="tr" key="First name:">First name:<br></span>
            <input type="text" id="firstname" value="" required><br>
            <span class="tr" key="Last name:">Last name:<br></span>
            <input id="lastname" value="" required>
            <span class="tr" key="Email:">Email:<br></span>
            <input type="email" id="pay_email" value="" required><br>
            <button type="button" class="btn aisle-btn tr" id='submit_btn'>SUBMIT</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootsnav.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
  <script  src="<?php echo base_url();?>assets/js/counterup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
  
  <script src="<?php echo base_url();?>assets/js/toastr.min.js"></script>
  
  <script>
    $('.counter').counterUp({
      delay: 10,
      time: 1000
    });
  </script>

  <script>
    $("#clients").owlCarousel({
      navigation : true, // Show next and prev buttons
      slideSpeed : 400,
      paginationSpeed : 400,
      singleItem:true,
      autoPlay: true
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
    });
  </script>

  <script src="<?php echo base_url();?>assets/js/lightbox-plus-jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.mixitup.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>

  <script type="text/javascript">
    $(window).load(function(){
      $(".page-loader").fadeOut("slow"); 
    });
    $.stellar();
  </script>

  <script type="text/javascript">
      // Instantiate MixItUp:
    $('#grid').mixItUp();
  </script>
  
  <script type="text/javascript">
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'fadeDuration':900,
      'imageFadeDuration':600,
      'positionFromTop':150,
      'disableScrolling':true
    })
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage'], .overlay-detail a").on('click', function(event) {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 900, function(){
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      });
    });

    $(function(){
      // Instantiate MixItUp:
      $('#Container').mixItUp();
    });
  </script>

  <script type="text/javascript">
    window.onscroll = function() {myFunction()};

    function myFunction() {
      if (document.body.scrollTop > 100) {
        $('#flex_co').hide();
      } else {
        $('#flex_co').show();
      }

      if (document.body.scrollTop < 400) {
        $('.logo-img').css('display', 'none');
      } else {
        $('.logo-scrolled').css('display', 'block');
      }
    }

    $('button.aisle-btn').on("click", function (e) {
      $('span.message').css('display', 'none');
      $(e.target).closest('.pricing-item').find('span.message').css('display', 'block');
    });
  </script>
  
  <script src="https://checkout.reepay.com/checkout.js"></script>

  <script type="text/javascript">
    $('#submit_btn').click(function(){
      if($('#firstname').val()=="" || $('#lastname').val()=="" || $('#pay_email').val()=="") {
        toastr.warning('Something went wrong. Please try again!','Warning', {closeButton: true, timeOut: 11000});
        return;
      }
      amount_val=$('#amount').val();
      firstname_val=$('#firstname').val();
      lastname_val=$('#lastname').val();
      email_val=$('#pay_email').val();
      pack_name=$('#pack_name').val();
      $.post('<?php echo base_url();?>payment/',
        {
            amount: amount_val,
            firstname: firstname_val,
            lastname: lastname_val,
            email: email_val,
        },
      function(res){
        var rp = new Reepay.ModalCheckout(res);
        rp.addEventHandler(Reepay.Event.Accept, function(data) {
            console.log('Success', data);
            console.log(data['id']);
            $.post('<?php echo base_url();?>welcome/cus_order/',
                {
                    amount: amount_val,
                    firstname: firstname_val,
                    lastname: lastname_val,
                    email: email_val,
                    card_id: pack_name,
                    invoice: data['invoice']
                },
                function(res){
                });
            toastr.success('Fantastisk!! Du har nu tilmeldt vores skønne dating rejse. Du modtager en ordre bekræftelse i din e-mail inden for 5 min.', 'Success!', {closeButton: true, timeOut: 11000});
        });
        rp.addEventHandler(Reepay.Event.Close, function(data){
            $('#firstname').val("");
            $('#lastname').val("");
            $('#pay_email').val("");
            $('#pay_Modal').css('display','none');
        });
        // if(res==true){
        
        // }
        // else{
        //   toastr.warning('Something went wrong.', 'Please try again!', {closeButton: true});
        // }
      });
    });
  </script>

  <script type="text/javascript">
    function pay(amount,order, pack_name) {
      if(order=='0') {
        document.getElementById("amount").value=amount;
        document.getElementById("pack_name").value=pack_name;
        var modal = document.getElementById("pay_Modal");
        modal.style.display = "block";
        var myKeyVals = {
            amount: $('#amount').val(),
            firstname: $('#firstname').val(),
            lastname: $('#lastname').val(),
            email: $('#pay_email').val()
        };
        var saveData = $.ajax({
          type: 'POST',
          url: "<?php echo base_url();?>payment/",
          data: myKeyVals,
          success: function(resultData) {
            console.log(resultData);
          }
        });
        saveData.error(function() { alert("Something went wrong"); });
      } else {
        toastr.info('Denne dating rejse er desværre udsolgt, og vi er pt. Igang med at sammensætte de perfekte parforhold. Vi beder Dem om at vende tilbage på et senere tidspunkt og prøve igen. Vi beklager men kommer hurtigt med en helt ny tur så hold øje.', 'Alert!', {closeButton: true, timeOut: 11000});
      }
    }
    // Get the <span> element that closes the modal
    var modal = document.getElementById("pay_Modal");
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
  </script>

  <script src="<?php echo base_url();?>assets/js/msdropdown/jquery.dd.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $("#countries").msDropdown();
    });
  </script>

  <script>
    function addCardData(){
      $('#price_card').empty();
      $.get('<?php echo base_url(); ?>admin/getCardData',{},
      function(res){
        for(x in res){
          $('#price_card').append(' \
          <div class="col-md-4 col-sm-4"> \
            <div class="card-box ribbon-box"> \
              <div class="pricing-item featured-first" style="height: 530px; margin-right: 0px; margin-top: 40px"> \
              ' + (res[x].sold_out=="0" ? '<div class="ribbon-two ribbon-two-success"><span class="tr" key="Available">Available</span></div>' : '<div class="ribbon-two ribbon-two-danger"><span class="tr" key="Sold out">Sold out</span></div>') +
              '<h3 class="plan-name" style="letter-spacing: 1px;">' + res[x].age + '</h3> \
              <span key="Denmark, Norway, Sweden, USA, UK" class="tr" style="letter-spacing: 0px;">Denmark, Norway, Sweden, USA, UK</span> \
              <div class="price" style="letter-spacing: 0px;"> \
                <span class="number">' + res[x].price + ' <sup class="">USD</sup></span> / ' + res[x].from_date + '~' + res[x].to_date + '</div> \
                <p class="mb-0 content_data">' + res[x].content + '</p> \
                <button onclick="pay(\''+ res[x].price + '\',\'' + res[x].sold_out + '\',\'' + res[x].age + '\')" class="btn aisle-btn tr" key="Buy Now">Buy Now</button> \
                <span class="message" style="color: #000; margin-top: 25px;">Love is all</span> \
              </div> \
            </div></div></div>');
        }
      });
    }
  </script>
</body>
</html>

