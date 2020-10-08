<?php
$page = 'home';
include "header.php" ?>


    <!--<link rel="stylesheet" type="text/css" href="newcss/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="newcss/style.css">
    <!--<link rel="stylesheet" type="text/css" href="newcss/responsive.css">-->
    <link rel="stylesheet" type="text/css" href="newcss/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="newcss/slick.min.css">
    <link rel="stylesheet" type="text/css" href="newcss/slick-theme.css">
    <!--<link rel="stylesheet" type="text/css" href="newcss/jquery.fancybox.min.css">-->
    
    
     <script type="text/javascript">
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-125173494-11', 'auto');
        ga('require', 'displayfeatures');
        ga('require', 'ecommerce', 'ecommerce.js');
        ga('send', 'pageview');
    </script>
    

    <style type="text/css">
      #sitepop .modal-content{
        background-color: transparent;
      }
      #sitepop.modal{
        overflow-y: hidden;
      }
      #sitepop .modal-dialog{
        margin: -1rem auto 0;
      }
      #sitepop .close{
        position: absolute;
        top: 3%;
        right: 4%;
        color: #fff;
        font-weight: 500;
        font-size: 1.75em;
        z-index: 9;
      }
      
      .banner .SliderJs_box > div {
    background-size: cover !important;
    height: 100vh;
}
.slick-dotted.slick-slider {
    margin-bottom: 0;
}
      @media (max-width: 768px){
        #sitepop .modal-dialog{
          width: 96% !important;
        }
      }    
      
      .SliderJs_box{
		  position:relative;
	  }
	  .banner_btn1{
		    position: absolute;
			right: 10%;
			bottom: 23%;
			z-index: 1;		
	  }
	  .banner_btn2{
		    position: absolute;
			right: 10%;
			bottom: 24%;
			z-index: 1;		
	  }
	  .banner_btn3{
		    position: absolute;
			right: 10%;
			bottom: 27%;
			z-index: 1;		
	  }
	   .slider_dots{
			/* border: 1px solid red; */
	    position: absolute;
	    top: 0;
	    width: 30px;
	    text-align: center;
	    padding: 0;
	    margin: 0;
	    list-style: none;
	    height: 176px;
	    top: 50%;
	    margin-top: -88px;
	    left: 36px;
		 }
		 .slider_dots li{
			     width: 0.9375rem;
	    height: 0.9375rem;
	    display: block;
	    cursor: pointer;
	    border-radius: 50%;
	    transition: all ease .2s;
	    background-color: #fff;
	    margin: 12px 0px;
	    cursor: pointer;
		 }
		 .slider_dots li.red{
			 background-color:#00CDA1;
			 border-color:#00CDA1;
		 }
		 .sdp_outer a{
		     display:block;
		 }
		 
		 
		 
		 
		 
.myslider .item {
  width: 100%;
  position: relative;
}
.myslider .item.c {
  background-color: #325D7F;
}
.myslider .item.b {
  background-color: #F2727F;
}
.myslider .item.a {
  background-color: #F9B294;
}
.myslider .item h2 {
  color: #fff;
  font-size: 8vw;
  font-weight: 400;
  line-height: 1.1;
  text-align: center;
  margin: 0 auto;
  max-width: 80%;
  text-transform: uppercase;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  left: 0;
  right: 0;
}

.myslider.slick-dots {
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  right: 2%;
}
.myslider.slick-dots li {
  list-style: none;
  margin: 15px 0;
}
.myslider.slick-dots button {
  border-radius: 50% !important;
  width: 20px !important;
  height: 20px !important;
  border: none !important;
  background-color: #fff !important;
  text-indent: -9999px !important;
  outline: 0 !important;
}
.myslider.slick-dots button:hover {
  background-color: #000;
}

.myslider.slick-slide {
  height: 100vh !important;
}

/* Slider */
.myslider.slick-slider {
  position: relative;
  display: block;
  box-sizing: border-box;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
}

.myslider.slick-list {
  position: relative;
  overflow: hidden;
  display: block;
  margin: 0;
  padding: 0;
}
.myslider.slick-list:focus {
  outline: none;
}
.myslider.slick-list.dragging {
  cursor: pointer;
  cursor: hand;
}

.myslider.slick-slider .slick-track,
.myslider.slick-slider .slick-list {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

.myslider.slick-track {
  position: relative;
  left: 0;
  top: 0;
  display: block;
}
.myslider.slick-track:before, .slick-track:after {
  content: "";
  display: table;
}
.myslider.slick-track:after {
  clear: both;
}
.myslider.slick-loading .slick-track {
  visibility: hidden;
}

.myslider.slick-slide {
  float: left;
  height: 100%;
  min-height: 1px;
  display: none;
}
[dir="rtl"] .myslider.slick-slide {
  float: right;
}
.myslider.slick-slide img {
  display: block;
}
.myslider.slick-slide.slick-loading img {
  display: none;
}
.myslider.slick-slide.dragging img {
  pointer-events: none;
}
.myslider.slick-initialized .slick-slide {
  display: block;
}
.myslider.slick-loading .slick-slide {
  visibility: hidden;
}
.myslider.slick-vertical .slick-slide {
  display: block;
  height: auto;
  border: 1px solid transparent;
}

.myslider.slick-arrow.slick-hidden {
  display: none;
}

.myslider ul.slick-dots {
    max-width: 22px;
    left: 50px;
    top:300px;
    height:150px !important;
}

.myslider .slick-dots li {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 20px;
    margin: 0 0px;
    padding: 0;
    
    
    cursor: pointer;
}
.myslider.slick-initialized.slick-slider.slick-dotted.slick-vertical .slick-dots li{
border-radius: 50%;
  width: 15px;
  height: 15px;
  border: none;
  background-color: #00CDA1;
  text-indent: -9999px;
  outline: 0;
}


.myslider.slick-initialized.slick-slider.slick-dotted.slick-vertical .slick-dots li.slick-active:before{
    content: '';
    background: #fff !important;
    width: 15px;
    height: 15px;
}

/*.myslider.slick-initialized.slick-slider.slick-dotted.slick-vertical.slick-dots li:before {*/
/*    content: '';*/
/*    background: red !important;*/
/*    width: 7px;*/
/*    height: 7px;*/
/*    position: absolute;*/
/*    border-radius: 50%;*/
/*    left: 0;*/
/*    right: 0;*/
/*    margin: auto;*/
/*}*/

    </style>
   

<div id="fullpage">
    <div class="section aboutus vertical-scrolling" id="section0">
		
		<div class="banner">
  <div class="SliderJs">
      <div class="SliderJs_box bs1">
          <!--<div class="overlays"></div>-->
          <!--<div style="background: url('assets/img/hh1.png')">-->
          <div style="background: url('../img/bn-1.jpg')">
          <a href="http://careview.in/n95-mask.php" class="default-btn banner_btn1" style="font-weight:bold;">KNOW MORE </a>
       <!--       <div class="sl-1">-->
       <!--   <h3 style="color:#fff;">WE CARE FOR YOU</h3>-->
       <!--   <p class="range">Complete range of protective mask</p>-->
          
       <!--   <a href="about.php" class="default-btn-slider" style="margin-top:30px;">-->
							<!--	KNOW MORE-->
							<!--</a>-->
       <!--   </div>-->
          </div>
          
      </div>

      <div class="SliderJs_box bs2">
          <!--<div class="overlays"></div>-->
          <!--<div style="background: url('assets/img/hh2.png')">-->
          <div style="background: url('../img/bn-2.jpg')">
              <a href="http://bit.ly/careview-n95-mask" target="_blank" class="default-btn banner_btn2" style="font-weight:bold;">BUY NOW </a>
       <!--       <div class="sl-2">-->
       <!--   <h3 style="color:#fff;">WE ARE AVAILABLE ONLINE</h3>-->
       <!--   <a href="about.php" class="default-btn-slider" style="margin-top:30px;">-->
							<!--	KNOW MORE-->
							<!--</a>-->
          
       <!--   </div>-->
          </div>
          
      </div>
      <div class="SliderJs_box bs3">
          <!--<div class="overlays"></div>-->
          <!--<div style="background: url('assets/img/hh3.png')">-->
          <div style="background: url('../img/bn-3.jpg')">
<a href="http://careview.in/partner.php" class="default-btn banner_btn3" style="font-weight:bold; margin-top:20px !important; ">PARTNER WITH US </a>
       <!--     <div class="sl-3">-->
       <!--   <h3 style="color:#fff;">BECOME OUR DISTRIBUTOR</h3>-->
       <!--   <a href="about.php" class="default-btn-slider" style="margin-top:30px;">-->
							<!--	KNOW MORE-->
							<!--</a>-->
          
       <!--   </div>    -->
          </div>
          
      </div>
  </div>
</div>
		</div>
		<!-- End Hero Slider Area -->


        

		 <div class="section vertical-scrolling" id="section1">
                
                
                <section style="height:100vh;">
	                
	                   <div class="myslider">
  <a href="http://careview.in/n95-mask.php#CV-1221"><div class="item a"> <img src="../img/product/01.png" style=""></div></a>
  <a href="http://careview.in/n95-mask.php#CV-1221V"><div class="item b"><img  src="../img/product/02.png" style=""></div></a>
   <a href="http://careview.in/n95-mask.php#CV-1221H"><div class="item c"><img  src="../img/product/03.png" style=""></div></a>
  <a href="http://careview.in/n95-mask.php#CV-1221H"><div class="item d"><img  src="../img/product/03.png" style=""></div></a>
  <a href="http://careview.in/3ply-mask.php#CV-2992"><div class="item e"><img  src="../img/product/05.png" style=""></div></a>
  <a href="http://careview.in/3ply-mask.php#CV-2992M"><div class="item f"><img  src="../img/product/06.png" style=""></div></a>
</div>
	        	</section>
                
         </div><!-- section2 -->
        
    <div class="section vertical-scrolling" id="section2" style="    background: linear-gradient(0deg, rgb(0, 205, 161) 0%, rgb(45, 40, 146) 100%);">
        
				<!-- Start About Area Area -->
		<div style="height: 100vh;">
			<div class="container">
				<div class="row">
					<div class="col-lg-5" id="particles-js" style="background:#fff;">
					    
						<div class="about-content health">
							<h2 class="">Care View: Reliable Healthcare Products </h2>
							<p>Care View is a trusted brand of AVA International Pvt. Ltd., a leading organisation supplying specialised medical and healthcare products ranging from personal protective equipment to protective mask.
With our team of experts and large research facilities, we're on a mission to manufacture and distribute medical products of utmost quality in the country.
Our expertise is supported by large manufacturing facility and a PAN India distribution network that can deliver protective gear and masks anytime and anywhere.</p>
							
						

							<a href="about.php" class="default-btn" style="font-weight:bold;">
								READ MORE
							</a>
						</div>
					
					</div>
					<div class="col-lg-7 grd-bg">
					    <div class="h">
						<div class="col-md-12">
						    <div class="row">
						        <div class="col-md-4">
						            <div class="sqft wt-line">
						            <img src="assets/img/icon/factory.png ">
						            <p>15000+ SQFT FACTORY</p>
						            </div>
						        
						        </div><!--col-4-->
						        <div class="col-md-4">
						            <div class="sqft wt-line">
						            <img src="assets/img/icon/Mask.png ">
						            <p>1 MN+ MASKS MADE EVERY WEEK </p>
						            </div>
						      </div><!--col-4-->
						        <!--<div class="col-md-4"><p>300+ Corporate and Industrial clients served</p></div><!--col-4-->
						        
						        
						        
						        <div class="col-md-4">
						            <div class="sqft ">
						                <img src="assets/img/icon/Clint_icon.png">
						            <p>300+ CORPORATE CLIENTS </p>
						            </div>      
						      </div><!--col-4-->
						        <div class="col-md-4">
						            <div class="sqft mt-2 wt-line">
						                <img src="assets/img/icon/laboratory.png">
						            <p>IN FACILITY LABORATORY SET-UP</p>
						            </div>
						      </div><!--col-4-->
						        <div class="col-md-4">
						            <div class="sqft mt-2 wt-line">
						                <img src="assets/img/icon/Workers_.png">
						            <p>200+ SKILLED WORKERS</p>
						            </div>
						      </div><!--col-4-->
						        <div class="col-md-4">
						            <div class="sqft mt-3">
						                <img src="assets/img/icon/Machines.png">
						            <p>30+ MACHINES RUNNING 24*7</p>
						            </div>
						      </div><!--col-4-->
						      
						      
						      
						      <div class="col-md-4">
						            <div class="sqft mt-2 wt-line">
						                <img src="assets/img/icon/laboratory.png">
						            <p>IN FACILITY LABORATORY SET-UP</p>
						            </div>
						      </div><!--col-4-->
						        <div class="col-md-4">
						            <div class="sqft mt-2 wt-line">
						                <img src="assets/img/icon/Workers_.png">
						            <p>200+ SKILLED WORKERS</p>
						            </div>
						      </div><!--col-4-->
						        <div class="col-md-4">
						            <div class="sqft mt-3">
						                <img src="assets/img/icon/Machines.png">
						            <p>30+ MACHINES RUNNING 24*7</p>
						            </div>
						      </div><!--col-4-->
						        <!--<div class="col-md-4"><p>300+ Corporate and Industrial clients served</p></div><!--col-4-->
						    </div>
						</div><!-- End-col-12-->
						</div><!--h-->
					</div>
				</div>
			</div>
		</div>
		<!-- End About Area -->
		
    </div><!-- section1 -->
    
    
    
    <div class="section vertical-scrolling " id="section3" style="background: linear-gradient(0deg, rgba(45,40,146,1) 0%, rgba(0,205,161,1) 100%);" >
			 <section style="height:100vh;">
			     
			     <div class="container">
				<div class="row">
					
					<div class="col-lg-5 grd-bgd">
						<div class="" style="padding-top:120px; height:100vh;">
						    	<h2 class="our">Download Our Brochure </h2>
							<p class="our">Know more about our extensive range of protective masks exclusively designed for protection and comfort of wearer.</p>
							<!--<img src="img/Brochure.jpg" alt="Image">-->
							<img src="assets/img/brc.jpg" alt="Image" style="display: flex; margin: 0 auto; justify-content: center; align-items: center;">
						<div class="btn1 day">
						    <!--<a href="#" class="buttonDownload">Download</a>-->
						    <a href="../View/img/CV_Brochure.pdf" target="_blank" class="default-btn" style="margin-top:20px;font-weight:bold;">
								DOWNLOAD BROCHURE
							</a>
						</div>	
						</div>
						
						
						
						
					</div>
					
					<div class="col-lg-7" style="background:#fff;">
							<div class="" style="padding-top:120px; height:100vh;">
						    	<h2 class="indus">Our Industry Clientele </h2>
							<p>With huge production capacity clubbed with skilled workers working day and night, we ensure to fulfill each bulk order on time.</p>
							<img src="assets/img/multi-logo1.jpg" alt="Image" style="">
						</div>
						</div>
					</div>					
					
				</div>
			     
			     
		<!-- End About Area --> 
		</section>
    </div><!-- section3 -->
    
    
    <div class="section vertical-scrolling amenities Specification " id="section4" style="background:#fff;">
      
		<!-- Start Client Area -->
		<section class="section client-area ptb-100 girl-bg" >
			<div class="container">
			    <div class="row">
			    <div class="col-md-8 hero-bkg-animated">
			        
			        <div class="section-title" style="margin: 21px auto 42px;     vertical-align: text-bottom;">
					<h2>We Care For Their Views</h2>
				</div>
				<div class="client-wrap owl-carousel owl-theme">
					<div class="single-client">

						<p style="font-size:15px;">“Finally feeling safe again! it's a comfortable fit, a lot better than most of the other masks available in the market.”<br><br></p>

						<ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul>	

						<h3> Ishan Singh</h3>
						<span style="color:#fff;">CEO of Company</span>

						<div class="quate">
							<i class="flaticon-right-quotes-symbol"></i>
						</div>
					</div>
					
					<div class="single-client">

						<p style="font-size:15px;">“Original N95 Mask....CE & FDA certified... excellent product ...packed as single piece neatly...”<br><br></p>

						<ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul>	

						<h3>Shailendra Tiwari</h3>
						<span style="color:#fff;"> Founder of Company</span>

						<div class="quate">
							<i class="flaticon-right-quotes-symbol"></i>
						</div>
					</div>
					
					<div class="single-client">

						<p>“They delivered our huge order as per the deadline mentioned to us. We have been regularly sourcing it from them and it has been a satisfying business relationship.“</p>

						<ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul>	

						<h3>Shantam Singh</h3>
						<span style="color:#fff;">CEO of Company</span>

						<div class="quate">
							<i class="flaticon-right-quotes-symbol"></i>
						</div>
					</div>					
					
				</div>
			    </div>
			    <div class="col-md-4">
			        
			    </div>
				</div>
			</div>
		</section>
		<!-- End Client Area -->
		
    </div><!-- section4 --> 
    

    <div class="section vertical-scrolling SitePlan site-map" id="section6">
     
         <!-- Start Footer Top Area -->
		<footer class="footer-top-area f-bg pt-100 pb-70 jarallax" data-jarallax='{"speed": 0.3}'>
			<div class="container">
				<div class="row" style="margin-top:0px;">
					<div class="col-lg-3 col-md-6 ll">
						<div class="single-widget">
							<a href="index.html">
								<b><img src="assets/img/white-logo.png" alt="Image"></b>
							</a>

							<p style="font-size:17px;">Care View is a trusted brand of AVA International Pvt. Ltd., a leading organisation supplying specialised medical and healthcare products ranging from personal protective equipment to protective mask.

							</p>

							<div class="social-area">
								<ul>
									<li>
										<a href="https://www.facebook.com/Careview-102127124957137/" target="_blank">
											<i class="bx bxl-facebook"></i>
										</a>
									</li>
									<li>
										<a href="https://twitter.com/careview_india" target="_blank">
											<i class="bx bxl-twitter"></i>
										</a>
									</li>
									<li>
										<a href="https://www.linkedin.com/company/careview-india" target="_blank">
											<i class="bx bxl-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="https://www.youtube.com/channel/UCNmLzAcReZMnE_i-AOqyAtg" target="_blank">
											<i class="bx bxl-youtube"></i>
										</a>
									</li>
									<li>
										<a href="https://www.instagram.com/careview_india/" target="_blank">
											<i class="bx bxl-instagram"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
	
					<div class="col-lg-3 col-md-6 ll">
						<div class="single-widget">
							<h3>QUICK LINKS</h3>

							<ul>
								<li>
									<a href="http://careview.in/about.php">
										<i class="bx bx-chevrons-right"></i>
										About
									</a>
								</li>
								<li>
									<a href="n95-mask.php">
										<i class="bx bx-chevrons-right"></i>
										N95 Mask
									</a>
								</li>

								<li>
									<a href="3ply-mask.php">
										<i class="bx bx-chevrons-right"></i>
										3 Ply Mask
									</a>
								</li>								
								<li>
									<a href="http://careview.in/blog/">
										<i class="bx bx-chevrons-right"></i>
										Blog
									</a>
								</li>
								
								<li>
									<a href="videos.php">
										<i class="bx bx-chevrons-right"></i>
										Gallery
									</a>
								</li>
								
								<!--<li>-->
								<!--	<a href="partners.php">-->
								<!--		<i class="bx bx-chevrons-right"></i>-->
								<!--		Blog-->
								<!--	</a>-->
								<!--</li>-->
								<li>
									<a href="contact.php">
										<i class="bx bx-chevrons-right"></i>
										Contact us 
									</a>
								</li>
							</ul>
						</div>
						
						
						
						
						<div class="single-widget">
							<h3>ECOMMERCE</h3>

							<ul>
								<li>
									<a href="https://www.flipkart.com/careview-n95-ffp2-fda-ce-drdo-certified-protective-face-mask-6-layered-filtration-ear-loop-style-pack-10-cv1221-reusable/p/itm15dc4dc501a5d?pid=MRPFTUZUWEJRUA7Y&lid=LSTMRPFTUZUWEJRUA7YBSAHDU&marketplace=FLIPKART&srno=s_1_4&otracker=AS_QueryStore_HistoryAutoSuggest_1_8_na_na_na&otracker1=AS_QueryStore_HistoryAutoSuggest_1_8_na_na_na&fm=SEARCH&iid=2bb8f52f-c221-4f5a-8e2a-db9f02f7cf00.MRPFTUZUWEJRUA7Y.SEARCH&ppt=sp&ppn=sp&ssid=i2lj9jw7nk0000001599658209888&qH=66e124ff783e09ec" target="_blank">
										<i class="bx flipcart"></i>
										Flipkart
									</a>
								</li>
								<li>
									<a href="https://www.amazon.in/CAREVIEWTM-FFP2-Pollution-Layered-Filtration/dp/B08CPP3JWZ/ref=sr_1_10?dchild=1&keywords=Careview&qid=1595504303&sr=8-10" target="_blank">
										<i class="bx amazone"></i>
										Amazon
									</a>
								</li>
                                <li>
									<a href="https://www.seniority.in/ffp2-n95-protective-6-layer-mask-with-head-loops-careview-pdp" target="_blank">
										<i class="bx snapdeal"></i>
										Seniority
									</a>
								</li>
								<!--<li>-->
								<!--	<a href="#">-->
								<!--		<i class="bx snapdeal"></i>-->
								<!--		Snapdeal-->
								<!--	</a>-->
								<!--</li>								-->
								<li>
									<a href="https://www.indiamart.com/avasystems/" target="_blank">
										<i class="bx india"></i>
										India mart
									</a>
								</li>
								<li>
									<a href="https://www.tradeindia.com/ava-international-31057637/" target="_blank">
										<i class="bx trade"></i>
										Trade India 
									</a>
								</li>
							</ul>
							
						</div>
					</div>
					
	                <div class="col-lg-3 col-md-6 ll">
						
                        <div class="twt">
    
                            <a class="twitter-timeline" style="" data-dnt="true" href="https://twitter.com/careview_india" data-widget-id="515125528169160704">Tweets by @Careview</a>
                            <div id="example1"></div>
                                            
                        </div>
 
					</div>	<!-- End twitter-->				

					<div class="col-lg-3 col-md-6">
						<div class="single-widget contact">
							<h3>Get In Touch</h3>

							<ul>
								<li class="pl-0">
									<a href="tel:Phone:18001020241">
										<i class="bx bx-phone-call"></i>
										<span>Hotline:</span> 
										Phone: 18001020241 


									</a>
								</li>
								
								<li class="pl-0">
									<a href="mailto:Info@careview.in">
										<i class="bx bx-envelope"></i>
										<span>Email:</span> 
										   Info@careview.in 
									</a>
								</li>
								
								<li>
									<i class="bx bx-location-plus"></i>
									<span>Address:</span> 
									235, Sector 56, Phase-V, Industrial Estate, Kundli, Sonepat, Haryana- 131028
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Top Area -->
    </div><!-- Footer -->

	
		
		</div>
		
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<script src="newjs/jquery.min.js"></script>
<script src="newjs/popper.min.js"></script>
<script src="newjs/bootstrap.min.js"></script>
<script src="newjs/slick.min.js"></script>
<script src="newjs/jquery.fullPage.js"></script>
<!--<script src="newjs/jquery.fancybox.min.js"></script>-->
<script src="newjs/custom.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



        <!-- Meanmenu JS -->
		<script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Owl Carousel JS -->
		<script src="assets/js/owl.carousel.js"></script>
        <!-- Nice Select JS -->
		<script src="assets/js/jquery.nice-select.min.js"></script>
		<!-- Appear JS --> 
        <script src="assets/js/jquery.appear.js"></script>
		
		
		<!-- scripts -->
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

<script>
    
      particlesJS("particles-js", {
    particles: {
        number: { value: 80, density: { enable: true, value_area: 800 } },
        color: { value: "#2d2892" },
        shape: { type: "circle", stroke: { width: 0, color: "#000000" }, polygon: { nb_sides: 5 }, image: { src: "img/github.svg", width: 100, height: 100 } },
        opacity: { value: 0.5, random: false, anim: { enable: false, speed: 1, opacity_min: 0.1, sync: false } },
        size: { value: 3, random: true, anim: { enable: false, speed: 40, size_min: 0.1, sync: false } },
        line_linked: { enable: true, distance: 150, color: "#2d2892", opacity: 0.4, width: 1 },
        move: { enable: true, speed: 6, direction: "none", random: false, straight: false, out_mode: "out", bounce: false, attract: { enable: false, rotateX: 600, rotateY: 1200 } },
    },
    interactivity: {
        detect_on: "canvas",
        events: { onhover: { enable: true, mode: "repulse" }, onclick: { enable: true, mode: "push" }, resize: true },
        modes: {
            grab: { distance: 400, line_linked: { opacity: 1 } },
            bubble: { distance: 400, size: 40, duration: 2, opacity: 8, speed: 3 },
            repulse: { distance: 200, duration: 0.4 },
            push: { particles_nb: 4 },
            remove: { particles_nb: 2 },
        },
    },
    retina_detect: true,
});
</script>
<script>
    //banner
	$('.SliderJs').slick({
	  dots: true,
	  infinite: true,
	  speed: 2000,
	  slidesToShow: 1,
	  slidesToScroll:1,
	  vertical: false,
	  pauseOnHover: false,
	  autoplay:true,
    nextArrow:false,
    prevArrow:false,
    fade:false,
   
// 	  nextArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--right"><img src="../img/arrow.svg" /></span>',
//   	  prevArrow: '<span class="product-showcase-carousel-controls product-showcase-carousel-controls--left"><img src="..//img/arrow.svg" /></span>'     
	});

	
	
		</script>
/* old file js */
<script>




(function($) {
	'use strict';
	// Mean Menu JS
	jQuery('.mean-menu').meanmenu({ 
		meanScreenWidth: "991"
	});

	// Preloader JS
	$(function() {
		$('body').addClass('loaded');
	});

	// Nice Select JS
	$('select').niceSelect();
	
	// Header Sticky JS
	$(window).on('scroll', function() {
		if ($(this).scrollTop() >150){  
			$('.navbar-area').addClass("is-sticky");
		}
		else{
			$('.navbar-area').removeClass("is-sticky");
		}
	});

	//  Hero Slider Wrap JS
	$('.hero-slider-wrap').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		mouseDrag: true,
		items:1,
		dots: false,
		autoHeight: true,
		autoplay: true,
		smartSpeed:800,
		autoplayHoverPause: true,
		navText: [
			"<i class='bx bx-chevrons-left'></i>",
			"<i class='bx bx-chevrons-right'></i>",
		],
	});

	// Project Wrap JS
	$('.project-wrap').owlCarousel({ 
		loop:true,
		nav:true,
		autoplay:true,
		autoplayHoverPause: true,
		mouseDrag: true,
		margin: 30,
		center: true,
		dots: false,
		smartSpeed:1500,
		navText: [
			"<i class='bx bx-chevron-left'></i>",
			"<i class='bx bx-chevron-right'></i>",
		],
		responsive:{
			0:{
				items:1,
			},
			576:{
				items:2,
			},
			768:{
				items:2,
			},
			992:{
				items:3,
			},
			1200:{
				items:3,
			},
			1700:{
				items:4,
			}
		}
	});

	// Sidebar Modal JS
	$(".burger-menu").on('click',  function() {
		$('.sidebar-modal').toggleClass('active');
	});
	$(".sidebar-modal-close-btn").on('click',  function() {
		$('.sidebar-modal').removeClass('active');
	});
	
	// Client Wrap JS
	$('.client-wrap').owlCarousel({
		loop:true,
		margin: 30,
		nav:false,
		mouseDrag: true,
		items:1,
		dots: false,
		autoHeight: true,
		autoplay: true,
		smartSpeed:1500,
		autoplayHoverPause: true,
		center: false,
		responsive:{
			0:{
				items:1,
			},
			576:{
				items:1,
			},
			768:{
				items:2,
			},
			992:{
				items:2,
			},
			1200:{
				items:2,
			}
		}
	});

	// Client Wrap JS
	$('.client-wrap-two').owlCarousel({
		loop:true,
		margin: 30,
		nav:false,
		mouseDrag: true,
		items:1,
		dots: false,
		autoHeight: true,
		autoplay: true,
		smartSpeed:1500,
		autoplayHoverPause: true,
		center: false,
		responsive:{
			0:{
				items:1,
			},
			576:{
				items:1,
			},
			768:{
				items:2,
			},
			1200:{
				items:1,
			},
		}
	});
	
	// Odometer JS
	$('.odometer').appear(function(e) {
		var odo = $(".odometer");
		odo.each(function() {
			var countNumber = $(this).attr("data-count");
			$(this).html(countNumber);
		});
	});

	// Date Picker JS
/*	$('#datetimepicker2').datepicker({
		weekStart: 0,
		todayBtn: "linked",
		language: "es",
		orientation: "bottom auto",
		keyboardNavigation: false,
		autoclose: true
	});*/

	// Go to Top JS
	// Scroll Event
	$(window).on('scroll', function(){
		var scrolled = $(window).scrollTop();
		if (scrolled > 300) $('.go-top').addClass('active');
		if (scrolled < 300) $('.go-top').removeClass('active');
	});  

	// Click Event JS
	$('.go-top').on('click', function() {
		$("html, body").animate({ scrollTop: "0" },  500);
	});

	// FAQ Accordion JS
	$('.accordion').find('.accordion-title').on('click', function(){
		// Adds Active Class
		$(this).toggleClass('active');
		// Expand or Collapse This Panel
		$(this).next().slideToggle('fast');
		// Hide The Other Panels
		$('.accordion-content').not($(this).next()).slideUp('fast');
		// Removes Active Class From Other Titles
		$('.accordion-title').not($(this)).removeClass('active');		
	});

	// Count Time JS
	function makeTimer() {
		var endTime = new Date("july  30, 2020 17:00:00 PDT");			
		var endTime = (Date.parse(endTime)) / 1000;
		var now = new Date();
		var now = (Date.parse(now) / 1000);
		var timeLeft = endTime - now;
		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }
		$("#days").html(days + "<span>Days</span>");
		$("#hours").html(hours + "<span>Hours</span>");
		$("#minutes").html(minutes + "<span>Minutes</span>");
		$("#seconds").html(seconds + "<span>Seconds</span>");
	}
	setInterval(function() { makeTimer(); }, 300);

	// Animation JS
	new WOW().init();
		
	// Popup Video JS
	$('.popup-youtube, .popup-vimeo').magnificPopup({
		disableOn: 300,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false,
	});

	// Tabs JS
	$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
	$('.tab ul.tabs li').on('click', function (g) {
		var tab = $(this).closest('.tab'), 
		index = $(this).closest('li').index();
		tab.find('ul.tabs > li').removeClass('current');
		$(this).closest('li').addClass('current');
		tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
		tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
		g.preventDefault();
	});

	// Subscribe form JS
	$(".newsletter-form").validator().on("submit", function (event) {
		if (event.isDefaultPrevented()) {
		// handle the invalid form...
			formErrorSub();
			submitMSGSub(false, "Please enter your email correctly.");
		} else {
			// everything looks good!
			event.preventDefault();
		}
	});
	function callbackFunction (resp) {
		if (resp.result === "success") {
			formSuccessSub();
		}
		else {
			formErrorSub();
		}
	}
	function formSuccessSub(){
		$(".newsletter-form")[0].reset();
		submitMSGSub(true, "Thank you for subscribing!");
		setTimeout(function() {
			$("#validator-newsletter").addClass('hide');
		}, 4000)
	}
	function formErrorSub(){
		$(".newsletter-form").addClass("animated shake");
		setTimeout(function() {
			$(".newsletter-form").removeClass("animated shake");
		}, 1000)
	}
	function submitMSGSub(valid, msg){
		if(valid){
			var msgClasses = "validation-success";
		} else {
			var msgClasses = "validation-danger";
		}
		$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
	}
	
	// AJAX MailChimp JS
	$(".newsletter-form").ajaxChimp({
		url: "https://Envy Theme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
		callback: callbackFunction
	});

	// Input Plus & Minus Number JS
	$('.input-counter').each(function() {
		var spinner = jQuery(this),
		input = spinner.find('input[type="text"]'),
		btnUp = spinner.find('.plus-btn'),
		btnDown = spinner.find('.minus-btn'),
		min = input.attr('min'),
		max = input.attr('max');
		
		btnUp.on('click', function() {
			var oldValue = parseFloat(input.val());
			if (oldValue >= max) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue + 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		});
		btnDown.on('click', function() {
			var oldValue = parseFloat(input.val());
			if (oldValue <= min) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue - 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		});
	});
})(jQuery);

</script>
<script>
	
    $("#fullpage").fullpage({
        anchors: ["Home", "About", "Connectivity", "Amenities", "Floorplans", "Siteplan", "Specification", "Footer"],
        lockAnchors: false,
        navigation: !0,
        sectionSelector: ".vertical-scrolling",
        navigationPosition: "right",
        navigationTooltips: ["First page", "Second page", "Third and last page"],
        responsiveWidth: 900,
        afterResponsive: function(o) {},
        
     
    }), 
 
    
	
		    
    </script>
<script>
    
$('.myslider').slick({

slidesToScroll: 1,
arrows: false,
speed: 2000,
dots: true,
autoplay: true,
vertical: true,
verticalSwiping: true,
pauseOnHover: false,
    
});
	
	
</script>



<script>window.twttr = (function (d, s, id) {
  var t, js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id; js.src= "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
  return window.twttr || (t = { _e: [], ready: function (f) { t._e.push(f) } });
}(document, "script", "twitter-wjs"));</script>


</body>
</html>
