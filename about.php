<?php
$page = 'about';
include "header.php" ?>
   
<style>
/*
 * Variables
 * ---------
 */
/* Functions */
/* 
 * Font / breakpoint sizes
 * @param [number] $px
 * @return [number]
 */
/*
 * Strip unit from number
 * @param [number] $number
 * @return [number]
 */
/* Mixins */
/* 
 * Min media query
 * @param [string/number] $min
 */
/*
 * Fluid sizes ( font-size, padding, margins... )
 * @param [number] $minVW
 * @param [number] $maxVW
 * @param [number] $minSize
 * @param [number] $maxSize
 */
/*
 * Layout: Container
 * -----------------
 */
.l-container-sm {
  max-width: 800px;
  margin: auto;
  padding-left: 20px;
  padding-right: 20px;
}

/*
 * Layout: Center
 * --------------
 */
.l-center {
  height: 100vh;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
}
.l-center > * {
  width: 100%;
}

/*
 * Object: Aspect Ratio
 * --------------------
 */
.o-aspect-ratio {
  position: relative;
  overflow: hidden;
}
.o-aspect-ratio::before {
  content: '';
  display: block;
  padding-top: 100%;
}
.o-aspect-ratio[data-padding="80"]::before {
  padding-top: 80%;
}
.o-aspect-ratio[data-padding="66"]::before {
  padding-top: 66%;
}

.o-aspect-ratio__media {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

/*
 * Object: Overlap
 * ---------------
 */
.o-overlap-bottom,
.o-overlap-top {
  position: absolute;
  width: 70%;
}

.o-overlap-bottom {
  left: 0;
  top: 0;
}

.o-overlap-top {
  right: 0;
  bottom: 0;
}

.o-overlap-bottom__deco {
  background: #37493E;
  width: 15%;
  top: 0;
  right: 0;
  height: 100%;
  position: absolute;
  -webkit-transform: translateX(95%);
          transform: translateX(95%);
}
.o-overlap-bottom__deco::before {
  content: '';
  position: absolute;
  width: 33.33333%;
  height: 100%;
  top: 0;
  left: 0;
  background: #FFFFFF;
  opacity: 0.2;
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.o-overlap-bottom__deco::after {
  content: '';
  position: absolute;
  width: 33.33333%;
  height: 100%;
  top: 0;
  left: 0;
  background: #FFFFFF;
  opacity: 0.5;
  -webkit-transform: translateX(200%);
          transform: translateX(200%);
}

.o-overlap-top__deco {
  position: absolute;
  top: 0;
  left: 0;
  width: 20%;
  border-top: 5px solid #37493E;
  border-right: 5px solid #37493E;
  opacity: 0.8;
  border-top-width: 2px;
  border-right-width: 2px;
  -webkit-transform: translate(-130%, 115%);
          transform: translate(-130%, 115%);
}
.bbbb{
    
    
    background: linear-gradient(-45deg, #ee7752, #00CDA1, #2d2892, #00cda1);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}






@media only screen and (min-width: 12.5em) {
  .o-overlap-top__deco {
    border-top-width: calc( 2px + 3 * ( ( 100vw - 200px ) / 800 ) );
  }
}
@media only screen and (min-width: 62.5em) {
  .o-overlap-top__deco {
    border-top-width: 5px;
  }
}
@media only screen and (min-width: 12.5em) {
  .o-overlap-top__deco {
    border-right-width: calc( 2px + 3 * ( ( 100vw - 200px ) / 800 ) );
  }
}
@media only screen and (min-width: 62.5em) {
  .o-overlap-top__deco {
    border-right-width: 5px;
  }
}
ul.navbar-nav.m-auto {
    position: relative;
    right: -212px;
}
</style>
		<!-- Start Page Title Area -->
		<div class="page-title-area bg-1">
			<div class="container">
				<!--<div class="page-title-content">-->
				<!--	<h2>About</h2>-->
				<!--	<ul>-->
				<!--		<li>-->
				<!--			<a href="index.html">-->
				<!--				Home -->
				<!--			</a>-->
				<!--		</li>-->

				<!--		<li class="active">About</li>-->
				<!--	</ul>-->
				<!--</div>-->
			</div>
		</div>
		<!-- End Page Title Area -->

	
		
		<!-- New-->
		<section class="client-area ptb-100 ptt">
			<div class="container">
				
				
				<div class="col-md-12">
				    <div class="row">
				    <div class="col-md-12 page-title">
				        <h2 class="text-center">ABOUT US</h2>
				        
				    </div>
				    
				    </div>
				</div>
			</div>
		</section>
		
		<section class="bbbb" style="margin-top:10px;">
			<div class="container-fulid">
			        <div class=" col-md-12 ">
			            <div class="row">
			                <div class="col-md-6">
			                    <div class="ab">
			                        
			                         <!--<h2 class="" style="color:#fff;">About Us</h2>-->
				                      <p style="font-weight: 900;">Care
View
is a trusted healthcare brand established by AVA International Private Limited, a known Indian leader and manufacturer in healthcare, telecommunications, IT equipments and many other sectors. With an expert team, top-notch research and development facilities, we're on a mission to manufacture and distribute medical products of utmost quality in the country.
 
Our plant to manufacture masks as per the standards of National Institute for Occupational Safety and Health (NIOSH) or in popular language N95 | FFP2 standards is located in Sonepat, Haryana. Our quality products are certified by Defence Research and Development Organisation (DRDO), Indian Standards Institution (ISI), CE, FDA and GMP.
</p>
<div>
    <p style="font-weight: 900;">Our superior quality masks with inherited blueprint of N95 standards are also decked with all its key features, these are:</p>
    <ul style="list-style-type:inherit;">
        <li>In-built adjustable nose pin for better fitting - 100% Aluminium strip of 5 mm width with PP coating.</li>
        <li>Comfortable elastic ear-loops or head-loops of 5 mm width ultrasonically sealed.</li>
        <li>Durable ultrasonic sealing all around to prevent leaks during breathing.</li>
        <li>High quality 6 layers with two melt-blown layers to ensure more than 95% particulate filtration.</li>
        <li>Ergonomic 3D modelling and half fold design for comfortable and efficient use.</li>
    </ul>
</div>
			                    </div><!-- End ab-00-->
			                </div>
			                <div class="col-md-6" style=" background-image: url(img/aBOUT-US.png);background-position: inherit; background-size: cover; background-repeat: no-repeat;">
			                    
			                </div>
			            </div>
			        </div>
			</div>
		</section> 

	
		
		<section class="client-area ptb-40">
			<div class="container">
				

				    <div class="gallery-wrapper">

            <div class="row">
				    <div class="col-md-6">
              <div class="row">
                <div class="col-6">
                <div class="image-wrapper">
                            <a href="#lightbox-image-1">
                              <img src="img/c2.png" alt="">
                              <!--<div class="image-title">Manufacturing Unit</div>-->
                            </a>
    </div>
               
                </div>
                <div class="col-6">
                <div class="image-wrapper">
                            <a href="#lightbox-image-2">
                              <img src="img/c1.png" alt="">
                              <!--<div class="image-title">Mother Machine</div>-->
                            </a>
    </div>
                </div>
              </div>

				    <p class="m-unit mt-4">Manufacturing Unit</p>
				</div>
				<div class="col-md-6">

        <div class="row">
                <div class="col-6">
                             
                <div class="image-wrapper">
                            <a href="#lightbox-image-3">
                              <img src="img/c3.png" alt="">
                              <!--<div class="image-title">Corporate Office</div>-->
                            </a>
    </div>
                </div>
                <div class="col-6">
                <div class="image-wrapper">
                            <a href="#lightbox-image-4">
                              <img src="img/c4.png" alt="">
                              <!--<div class="image-title">Our Team</div>-->
                            </a>
    </div>
                </div>
            </div>
            <p class="m-unit mt-4">Corporate Office</p>
            
            
				</div>
				</div>
                          
                          
                    </div>

				
			</div>
		</section>
		    
		<!-- End new-->

	
<?php include "footer.php" ?>