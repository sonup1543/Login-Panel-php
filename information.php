<?php
/*
Template Name:Information
*/ 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Get Quote</title>
  <link href="<?php bloginfo('template_url'); ?>/style1.css" rel='stylesheet' type='text/css' />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://lainteriors.in/wp-content/uploads/2020/03/favicon.png" sizes="32x32"/>
  	<meta name="google-site-verification" content="9KPPxOs_otdVbpXeZPnYuHBaSB7CXjnDca1pCd0jRkg" />
<meta name="msvalidate.01" content="E283B097E857D574575B3FE8C1E41EAD" />
<meta name="title"  content="Home Decorators in Faridabad | Roller blinds in Greater Faridabad" />

<meta name="description"  content="Your Free Design quote is just a few steps away! Get your quote now!" />

<meta name="keywords"  content="Wallpapers in Greater Faridabad, Customized Window Blinds in Greater Faridabad, Roller blinds in Greater Faridabad, modern interior design for home, Commercial Interior Designers near me, luxury interior designers in Delhi, home interior decorators in faridabad" />

<link rel="alternate" href="https://lainteriors.in/" hreflang="en" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158832162-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158832162-1');
</script>


</head>

<style>
.input_hidden {
    position: absolute;
    left: 0px;
}
     input#residential {
    margin-top: 12px;
}
input#commercial {
    margin-top: 12px;
}
.footer-logo {
    background-image: url('http://lainteriors.in/wp-content/themes/Divi/LA-interior-logo.png');
    width: 362px;
    height: 245px;
    background-size: auto;
    background-repeat: no-repeat;
}
</style>

<body><!-- multistep form -->
<!-- Navigation -->
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?php echo site_url(); ?>">
          <img class="logo" src="https://lainteriors.in/wp-content/uploads/2020/02/LA-interior-logo.png" alt="">
        </a>
         <a  href="<?php echo site_url(); ?>"><button class="backbutton">Back to Home</button></a>

       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto" id="top-menu">
        <li class="nav-item active">
           <a class="nav-link"  href="<?php echo site_url(); ?>">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo site_url(); ?>/services/">SERVICES</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PROJECTS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://lainteriors.in/residential/">RESIDENTIAL</a>
          <a class="dropdown-item" href="https://lainteriors.in/commercial/">COMMERCIAL</a>
        
        </div>
      </li>
 
 
 
         <li class="nav-item">
           <a class="nav-link"  href="<?php echo site_url(); ?>/how-it-works/">HOW IT WORKS</a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="<?php echo site_url(); ?>/contact-us/">CONTACT US</a>
        </li>
         <li class="nav-item">
           <a class="nav-link"  href="<?php echo site_url(); ?>/submit-review/">SUBMIT REVIEWS</a>
         </li>
         <li class="nav-item">
             <a href="https://www.facebook.com/lainteriors.in/" target="_blank"><i class="fa fa-facebook"></i></a>
         </li>
        <li class="nav-item">
         <a href="https://www.instagram.com/lainteriors98/" target="_blank"><i class="fa fa-instagram"></i></a>
         </li>

      </ul>
    </div>
</nav>
<form id="msform" method="post" action="<?php bloginfo('template_url'); ?>/db.php">
  <!-- progressbar -->
    <ul id="progressbar">
    <li class="active">Step-1</li>
    <li>Step-2</li>
    <li>Step-3</li>
    <li>Step-4</li>
    <li>Step-5</li>

  </ul>
  <!-- fieldsets -->
  <fieldset class="form-group">
    <h2 class="fs-title">Your Free Design Quote is just few Steps Away</h2>
    <input type="text" name="name" placeholder="Name" value="" id="name"/ style="margin-left:-18px;">
    <input type="email" name="email" placeholder="Email" id="email" style="margin-left:-18px;">
    <input type="text" name="phone" placeholder="Phone Number" id="phone" maxlength="10" style="margin-left:-18px;">    
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset class="form-group">
    <h2 class="fs-title">Select Scope of work</h2>
   <div id="emotion">
    <input type="radio" name="scope" id="residential" value="Residential" />
        <label for="residential"><img src="<?php bloginfo('template_url'); ?>/images/img1.png" alt="residential"  /></label>
       <h2 class="tst">Residential</h2>
    <input type="radio" name="scope" id="commercial" value="Commercial" >
        <label for="commercial"><img src="<?php bloginfo('template_url'); ?>/images/img.png" alt="commercial"  /></label>
        <h2 class="tst">Commercial</h2>
   </div>

   <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next1 action-button" value="Next" />
  </fieldset>
  <fieldset class="form-group" >
    <div class="Residential box">
    <h2 class="fs-title">Please select the according to the scope</h2>
    <div class="roww checkidddd">
    <label class="containerr">1BHK
      <input type="checkbox" class="checkidd" name="scopedetail[]" value="1BHK">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">2BHK
      <input type="checkbox" class="checkidd" name="scopedetail[]" value="2BHK">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">3BHK
      <input type="checkbox" class="checkidd" name="scopedetail[]" value="3BHK">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">4BHK
      <input type="checkbox" class="checkidd" name="scopedetail[]" value="4BHK">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">Studio Apartment
      <input type="checkbox" class="checkidd" name="scopedetail[]" value="Studio Apartment">
      <span class="checkmark"></span>
    </label>
   <label class="containerr">Bungalow
      <input type="checkbox" class="checkidd" name="scopedetail[]" value="Bungalow">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">Villa
      <input type="checkbox" class="checkidd" name="scopedetail[]" value="Villa">
      <span class="checkmark"></span>
    </label>
   </div>
   <div class="roww secondoptionn checkii"  style="display:none;">
    <label class="containerr">False Ceiling
      <input type="checkbox"  name="scopedetai[]" value="False Ceiling">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">Paint/Polish
      <input type="checkbox"  name="scopedetai[]" value="Paint / Polish">
      <span class="checkmark"></span>
    </label>
     <label class="containerr">Movable furniture
      <input type="checkbox"  name="scopedetai[]" value="Movable furniture">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">Modular Kitchen
      <input type="checkbox"  name="scopedetai[]" value="Modular Kitchen">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">Wardrobe
      <input type="checkbox"  name="scopedetai[]" value="Wardrobe">
      <span class="checkmark"></span>
    </label>
    </div>
    </div>
    <div class="checkidddd">
    <div class="Commercial box">
    <h2 class="fs-title">Please select the according to the scope</h2>
    <div class="roww checkii">
    <label class="containerr">Overall Interior
      <input type="checkbox" name="scopedetail[]" value="Overall Interior">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">Modular Workstation
      <input type="checkbox" name="scopedetail[]" value="Modular Workshop">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">False Ceiling
      <input type="checkbox" name="scopedetail[]" value="False Ceiling">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">Wooden Storage
      <input type="checkbox" name="scopedetail[]" value="Wooden Storage">
      <span class="checkmark"></span>
    </label>
    </div>
    <div class="roww checkii">
    <label class="containerr">Partition
      <input type="checkbox" name="scopedetail[]" value="Partition">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">Cabin
      <input type="checkbox" name="scopedetail[]" value="Cabin">
      <span class="checkmark"></span>
    </label>
    <label class="containerr">Civil Work
      <input type="checkbox" name="scopedetail[]" value="Civil Work">
      <span class="checkmark"></span>
    </label>
    </div>
   </div>
   </div>
  </div>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next2 action-button" value="Next" />
  </fieldset>
  <fieldset class="form-group">
    <h2 class="fs-title">End-to-end Interior Budget</h2>
    <div class="custom-selectss">
    <h3 class="fs-subtitle">What is your budget?</h3>
    <select name="budget">
    <option selected value=''>--Select budget--</option>
    <option value='1-3 Lac'>1-3 Lac</option>
    <option value='3-5 Lac'>3-5 Lac</option>
    <option value='5-10 Lac'>5-10 Lac</option>
    <option value='10-15 Lac'>10-15 Lac</option>
    <option value='15 < Lac'>15 > Lac</option>
    </select>
    </div>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next3 action-button" value="Next" />
  </fieldset>

  <fieldset class="form-group">
    <h2 class="fs-title">End-to-end Interior</h2>
    <div class="custom-selectss">
    <h3 class="fs-subtitle">When you are looking for Interior Designer?</h3>
    <select name="year" id="year">
    <option selected value=''>--Select Year--</option>
<!--    <option value='2020'>2020</option>
    <option value='2021'>2021</option>
    <option value='2022'>2022</option> -->
    <option value='2023'>2023</option>
    <option value='2024'>2024</option>
    <option value='2025'>2025</option>
    </select>
    <select name="period" id="month">
    <option value="">--Select the Month--</option>
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
    </select>
    
    <?php
        date_default_timezone_set('Asia/Kolkata');
        
        $current_datetime = date('Y-m-d H:i:s');
    ?>
    <input type="hidden" name="current_datetime" value="<?php echo htmlspecialchars($current_datetime); ?>">
    
    
     <?php
        // Function to get the real IP address of the user
            function getUserIP() {
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    // IP from shared internet
                    $ip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    // IP passed from proxy
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    // IP address from remote address
                    $ip = $_SERVER['REMOTE_ADDR'];
                }
                return $ip;
            }
            
            $user_ip = getUserIP();
            ?>

    <input type="hidden" name="ip_address" value="<?php echo htmlspecialchars($user_ip); ?>">

    <input type="submit" name="submit" class="submit action-button last" value="Submit" />
</fieldset>
</form>
<footer id="main-footer">

 <div class="container">
   <div class="row">
     <div class="col-lg-4 col-md-5 col-sm-4 col-xs-12">
            <div class="footer-logo"><img src="http://lainteriors.in/wp-content/themes/Divi/LA-interior-logo.png" alt="footer-logo"></div>
              <p style="color:white;">LA Interiors is one stop for top quality, assistance and service of interior designing based in Faridabad, Haryana. Our services are considered as design wonders. Started with the passion of making the perfect reality for everyone, on a small scale has now developed into a brand and a name of trust in the market.</p>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h4 class="title get-quote">Quick links</h4>
                <div class="textwidget footer-get">
                 <ul style="list-style: disc;color: #2ea3f2;">
                    <li class="nav-item active">
           <a class="nav-link"  href="<?php echo site_url(); ?>" style="font-size: 14px !important;font-weight: normal;">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo site_url(); ?>/services/" style="font-size: 14px !important;font-weight: normal;">SERVICES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo site_url(); ?>/residential/" style="font-size: 14px !important;font-weight: normal;">RESIDENTIAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo site_url(); ?>/commercial/" style="font-size: 14px !important;font-weight: normal;">COMMERCIAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="<?php echo site_url(); ?>/contact-us/" style="font-size: 14px !important;font-weight: normal;">CONTACT US</a>
        </li>
         <li class="nav-item">
           <a class="nav-link"  href="<?php echo site_url(); ?>/how-it-works/" style="font-size: 14px !important;font-weight: normal;">HOW IT WORKS</a>
         </li>
         <li class="nav-item">
           <a class="nav-link"  href="<?php echo site_url(); ?>/submit-review/" style="font-size: 14px !important;font-weight: normal;">SUBMIT REVIEW</a>
         </li>
         </ul>
            </div>
          </div>
       
            <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
              <h4 class="title">Contact Us</h4>
              <div class="textwidget">
              <addresss style="color:white;font-style: italic;">LA Interiors<br /><span style="font-size: 13px;"><b>( A Unit of Ornate Interiors India Pvt Ltd )</b></span><br />Address: BH-715/716, 81 High Street<br />
               Sector &#8211; 81,<br />
               Greater Faridabad,Haryana – 121002</address>
              <p style="color:white;">Phone: <a href="tel:+91 9873280202" style="color:white;"> +91 9873280202</a> /<a href="tel:+91 9990780202" style="color:white;"> +91 9990780202</a><br />
              <strong style="font-size:11px;">(<span style="color: red;">*</span>complaints will not be entertained on these numbers)</strong>
              Customer Care No. :<a href="tel:+91 9990680202" style="color:white;"> +91 9990680202</a><br>
              Email: <a href="mailto:info@lainteriors.in" style="color:white;"> info@lainteriors.in</a></p>
              
             </div>

            </div>
           
            <div id="footer-bottom">
                <hr style="border: 1px solid #fff;">
					<div class="container clearfix">
					    <div id="footer-info">
					        
					      <a href="https://www.instagram.com/lainteriors98/" style="float: right;"class="quote_icon" target="_blank"><i class="fa fa-instagram" style="color: #43a9bb;font-size:24px!important;"></i></a>
					       <a href="https://www.facebook.com/lainteriors.in/" style="float: right;padding: 0px 15px;margin-right: 10px;"class="quote_icon" target="_blank"><i class="fa fa-facebook" style="color: #43a9bb;font-size:24px !important;"></i></a>
					        <p style="color:#666;text-align:left;margin-top:40px;">Copyright © LA Interiors LLC., 2020</p>
					    <p style="color:#666;text-align:left;">A Unit of Ornate Interiors India Pvt Ltd</p>
					    
					    </div>					</div>	<!-- .container -->
				</div>
       
       
       </div> 
    </div>
</footer>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
</script>
<script  src="<?php bloginfo('template_url'); ?>/step.js"></script>
<script>
$(document).ready(function(){
        $('.checkidd').click(function(){
            if($(this).prop("checked") == true ){
                $('.secondoptionn').css({
             'display':'block',
            });
            
            }
            
        });
    });
</script>
<script>
    $(function(){
    var monthElem = document.getElementById('month');
    var yearElem = document.getElementById('year');
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var createOption = function(monthID) {
        var elem = document.createElement('option');
        elem.value = monthID +1;
        elem.text = months[monthID];
        return elem;
        };
    var evt = document.createEvent('HTMLEvents');
    yearElem.addEventListener('change', function() {
        var now = new Date(), tmp;
        var month = now.getMonth();
        
        if(now.getFullYear() === parseInt(this.value)) {
            tmp = month-1;
            
            alert("Please select future month");
            while(tmp >= 0) monthElem.remove(tmp--);
        }
        else {
            tmp = monthElem.length = 0;
            while(tmp < 12) monthElem.add(createOption(tmp), tmp++);
        }
    }, false);
    evt.initEvent('change', false, true);
    yearElem.dispatchEvent(evt);
});
</script>
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


