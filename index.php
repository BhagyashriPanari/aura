<?php
include('db.php');
if(isset($_POST['Submit']))

{
//getting the post values
$Name=$_POST['name'];
$Email_Address=$_POST['email'];
$Contact_No=$_POST['contact_no'];
$Message=$_POST['message'];


//query for data insertion
mysqli_query($db,"insert into contact_form(Name,Email_Address,Contact_No,Message) values
('$Name','$Email_Address','$Contact_No','$Message')");
	//$message="Thanks message";
	
	
	$html="<table><tr><td>Name</td><td>$Name</td></tr><tr></tr><tr><td>Mobile</td><td>$Contact_No</td></tr><tr><td>Comment</td><td>$Message</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="dhanvarsha.patil7779@gmail.com";
	$mail->Password="mvythcdrquaabqsd";
	$mail->SetFrom("dhanvarsha.patil7779@gmail.com");
	$mail->addAddress("dhanvarsha.patil7779@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	//echo $message;
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Interior & Furniture Multipurpose Html Template">
<meta name="keywords" content="Interior & Furniture Multipurpose Html Template">
<meta name="author" content="">
<title>Aura Skin Clinic</title>
<link rel="icon" href="images/WhatsApp Image 2024-09-25 at 1.27.00 PM.jpeg" type="image/x-icon" />
<!--css-->
<link href="assets/css/all-css.css" rel="stylesheet" type="text/css">
<link href="assets/css/set1.css" rel="stylesheet" type="text/css">
<!--css-->
<style>
    /* Add background color to the dropdown menu */
    /* Add a light green gradient background to the dropdown menu */
.custom-dropdown {
  background: linear-gradient(to bottom, #D2A9D3, #E7278C); /* Light green gradient */
}

/* Add color to the dropdown items */
.custom-dropdown li a {
  color: #007bff; /* Blue text color */
}

/* Add hover effect to the dropdown items */
.custom-dropdown li a:hover {
  background-color: #2AE6FA; /* Blue background on hover */
  color: #FFFFFF; /* White text on hover */
  
  /* Ensure the images fill the screen responsively */
.fill {
  width: 100%;
  height: 100vh; /* Full viewport height */
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

@media (max-width: 768px) {
  .fill {
    height: 50vh; /* Adjust height for smaller screens */
  }

  .header-content {
    padding: 20px;
    text-align: center;
  }
}

@media (max-width: 576px) {
  .fill {
    height: 40vh; /* Even smaller height for very small screens */
  }
}

@media (min-width: 768px) and (max-width: 1200px) {
  .fill {
    height: 70vh; /* Adjust height for tablet size screens */
  }
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f4f4f4;
}

.image-container {
    max-width: 100%;
    padding: 20px;
    text-align: center;
}

.responsive-image {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}

@media (max-width: 768px) {
    .image-container {
        padding: 10px;
    }
}

@media (max-width: 480px) {
    .image-container {
        padding: 5px;
    }
}

  
}

.col-md-3 {
        display: flex;
        justify-content: space-between; /* This will space the images evenly */
    }
    
    .col-md-3 img {
        width: 130px; /* Set the width to your desired size */
        margin-right: 10px; /* Adds space between images */
    }

</style>
</head>
<body id="page-top">
<div id="preloader"></div>
<!--navbar-->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top" style="background-color:#FFFFFF">
  <div class="container">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><img src="images/Frame31-removebg-preview.png" alt="logo" title="" /></a> </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li> <a class="page-scroll" href="#about"><font color="#333333" size="+1">ABOUT US</font></a></li>
        
		
       <li class="dropdown">
          <a class="page-scroll dropdown-toggle" href="#services" data-toggle="dropdown"><font color="#333333" size="+1">Treatments </font><span class="caret"></span></a>
		   <div class="">
          <ul class="dropdown-menu custom-dropdown">
            <li><a href="#" data-toggle="modal" data-target="#myModal5">PRP Hair Treatment</a></li>
			<li><a href="#" data-toggle="modal" data-target="#myModal31">PRP Skin Treatment</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal32"> Carbon Laser Treatment</a></li>
            
            <li><a href="#" data-toggle="modal" data-target="#myModal33">Carbon Laser Lips</a></li>
			<li><a href="#" data-toggle="modal" data-target="#myModal34">Laser Tattoo Removing</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal35"> Wart Removing Treatment</a></li>
			
            <li><a href="#" data-toggle="modal" data-target="#myModal36">MicroNeedling Treatment For Hair</a></li>
			<li><a href="#" data-toggle="modal" data-target="#myModal37">MicroNeedling Treatment For Skin</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal38"> Microdermabrasion[Sand Blasting] Skin Polishing</a></li>
			
			<li><a href="#" data-toggle="modal" data-target="#myModal39">Diamond Dermabrasion Treatment</a></li>
			<li><a href="#" data-toggle="modal" data-target="#myModal40">Chemical Peel Treatment</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal41"> Yellow Peel Treatment</a></li>
            
			 <li><a href="#" data-toggle="modal" data-target="#myModal42"> Anti Ageing Treatment</a></li>
			  <li><a href="#" data-toggle="modal" data-target="#myModal43"> Light Therapy</a></li>
			   <li><a href="#" data-toggle="modal" data-target="#myModal44">Under Eye Treatment With(RF) </a></li>
			   
			    <li><a href="#" data-toggle="modal" data-target="#myModal45">Under Arms Chemical Peel Treatment </a></li>
				 <li><a href="#" data-toggle="modal" data-target="#myModal46">Anti Dandrufff Treatment </a></li>
				 <li><a href="#" data-toggle="modal" data-target="#myModal47"> Anti Acne Treatment</a></li>
				  	
						    <li><a href="#" data-toggle="modal" data-target="#myModal48"> Hairfall Treatment</a></li>
					 <li><a href="#" data-toggle="modal" data-target="#myModal49"> Keratosis Pilaris</a></li>
					 <li><a href="#" data-toggle="modal" data-target="#myModal50">Hydra Facial </a></li>
            
          </ul>
		  </div>
        </li>
        
		
		<li><a class="page-scroll" href="#blog"><font color="#333333" size="+1">Gallery</font></a></li>
		
        <li><a class="page-scroll" style="background:none" href="#contact"><font color="#333333" size="+1">Contact</font></a></li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->
<!--SLIDER-->
<header id="myCarousel" class="carousel slide" >
  <div class="header-content">
    <div class="header-content-inner">    </div>
  </div>
  <div class="carousel-inner carousel-fade">
    <div class="item active">
      <!-- Set the first background image using inline CSS below. -->
      <div class="fill responsive-image" style="background-image:url(images/R1.jpg);"></div>
    </div>
    <div class="item">
      <!-- Set the second background image using inline CSS below. -->
      <div class="fill responsive-image" style="background-image:url(images/R2.jpg);"></div>
    </div>
    
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"> <span class="icon-prev"></span> </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <span class="icon-next"></span> </a> </header>
<!--SLIDER-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
  </div>
</div>
<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
   
  </div>
</div>
<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
   
  </div>
</div>
<!-- Modal -->
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Project Name </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7   text-center"><img src="assets/img/demo-img2.jpg"  alt="" title="" class="img-responsive"></div>
          <div class="col-md-5">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen . <br>
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen. </p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen .</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div id="myModal5" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
	    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PRP Hair Treatment </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/prp1.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>पीआरपी (प्लेटलेट रिच प्लाझ्मा) ही पद्धती केसाची गळती थांबवण्यासाठी प्रभावी उपचारपद्धती आहे.पीआरपी उपचारपद्धतीत रुग्णाचे रक्त काढून त्याला एका विशिष्ट मशीनमध्ये (सेंट्रीफ्युग) काही वेळासाठी ठेवलं जातं.ज्यामुळे रक्ताच्या आत प्लेटलेट रिच प्लाझ्मा (ग्रोथ फॅक्टर) वेगळे होतात. त्याला इंजेक्शनच्या माध्यमातून रुग्णाच्या केसांच्या मुळात सोडलं जातं.<br>
           <b>Benefits:-</b><br>1.Natural: PRP is a natural treatment that uses your own blood.<br>2.Minimal side effects: The procedure is generally well-tolerated with minimal side effects.<br>3.Promising results: Many people report significant hair growth and thickening after undergoing PRP treatment.</p>
          <p class="col-md-3">
    <img src="images/prpa.jpg" alt="PRP Image 1">
    <img src="images/prpc.jpg" alt="PRP Image 2">
   <!-- <img src="images/prpf1.jpg" alt="PRP Image 3">-->
</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>


<div id="myModal31" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PRP Skin Treatment</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/prps2.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>Platelet-rich plasma (PRP) is a popular cosmetic treatment that harnesses your body's natural healing powers to improve skin health. It involves extracting a small amount of your blood, processing it to isolate platelets, and then re-injecting the concentrated platelet-rich plasma back into your skin. <br><b>Benefits:-</b>
			<br>• Reduced Wrinkles: PRP can help smooth out fine lines and wrinkles by stimulating collagen production.
			<br>• Improved Skin Texture: It can enhance skin texture by addressing issues like unevenness, roughness, and enlarged pores.
			<br>• Enhanced Skin Tone: PRP can help brighten and even out skin tone, reducing the appearance of hyperpigmentation.
              </p>
            <p class="col-md-3"> <img src="images/prps.jpg" alt="PRP Image 1">
    <img src="images/prpa.jpg" alt="PRP Image 2">
   <!-- <img src="images/prps1.jpeg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>


<div id="myModal32" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Carbon Laser Treatment</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/carbon4.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>It is used primarily by people with oily skin, acne, and enlarged or clogged pores. The treatment is also beneficial if you’re starting to see the effects of sun damage to your skin. 
			<br><b>Benefits:-</b>
			<br>• Refreshes dull complexions.
			<br>• Shrinks enlarged pores,tightens skin.
			<br>• Decreases excess oil production & acne.
			<br>• Effective treatment for melasma.
			<br>• Suitable for most skin types.
			<br>• Can be used in combination with other treatments.
			<br>• Can temporarily remove
facial vellus hair.

			<br>• Stimulates collagen production.
             </p>
           <p class="col-md-3"> <img src="images/carbon3.jpg" alt="PRP Image 1">
    <img src="images/carbon2.jpg" alt="PRP Image 2">
   <!-- <img src="images/carbon1.jpeg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal33" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Carbon Laser Lips</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/carlii.jpeg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>This advanced treatment utilizes the power of laser technology to stimulate natural collagen production in the lips, offering a safer and more natural alternative to traditional lip fillers. <br><b>Benefits:-</b>
			<br>• Most effective lip lightening procedure.
			<br>• Carbon laser treatment can reduce the appearance of dark lips and hyper pigmentation.
			<br>• The treatment exfoliates
and rejuvenates the skin which can help restore natural lip color.
			<br>• Stimulates collagen production in the lips appear fuller and smoother.

			 </p>
             <p class="col-md-3"> <img src="images/carli3.jpeg" alt="PRP Image 1">
    <img src="images/carli1.jpg" alt="PRP Image 2">
  <!--  <img src="images/carli2.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal34" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Laser Tattoo Removing </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/tattoo1.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>It involves using a high-intensity laser beam to break down the ink particles in the tattoo, allowing your body to naturally eliminate them.
              <br><b>Key factors affecting the number of treatments:</b>
			  <br>•	Tattoo size: Larger tattoos require more sessions.
			  <br>•	Ink color: Darker colors are generally easier to remove than lighter ones.
			  <br>•	Ink depth: Deeper tattoos may need more treatments.
			  <br>•	Skin type: Lighter skin tones may respond better to laser treatment.
			  </p>
             <p class="col-md-3"> <img src="images/tattoob.jpg" alt="PRP Image 1">
    <img src="images/tattooa.jpg" alt="PRP Image 2">
    <!--<img src="images/tattooc.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal35" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Wart Removing Treatment </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/wart1.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>RF Cautery: A Popular Method for Wart Removal.
			<br>RF cautery is a common and effective treatment for warts. It uses radiofrequency waves to heat and destroy the tissue of the wart. This method is often preferred due to its minimal pain, quick healing time, and low risk of scarring.
			<!--<br>There are several types, like plantar warts, common warts and flat warts. Warts can be stubborn, but many treatment options can help get rid of them.-->
			<br><b>What does a wart look like?</b>
			<br>Dome-shaped.
			<br>Flat
			<br>Rough
			<br>Bumpy or Cauliflower-like
			<br>Smooth
			<br>Thread- or finger -like
			</p>
            <p class="col-md-3"> <img src="images/wart2.jpg" alt="PRP Image 1">
    <img src="images/wart3.jpg" alt="PRP Image 2">
   <!-- <img src="images/wart4.jpeg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal36" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Microneedling Treatment for Hair </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/needha2.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>This process is believed to stimulate hair growth by increasing blood flow to the hair follicles, promoting collagen production, and potentially activating dormant hair follicles.<br>
             Microneedling can be combined with other hair loss treatments, such as minoxidil or finasteride. This may help to improve the overall results of treatment.
			 <br> This procedure involves using a device with tiny needles to create small punctures in the scalp, stimulating the healing response and promoting hair growth. </p>
            <p class="col-md-3"> <img src="images/needha4.jpeg" alt="PRP Image 1">
    <img src="images/needha3.jpeg" alt="PRP Image 2">
   <!-- <img src="images/needha1.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal37" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Microneedling Treatment for Skin </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/needsk2.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>This can help to stimulate collagen production and improve the appearance of the skin. 
			<br><b>Benefits:-</b>
             <br>• Acne scars: Microneedling can help to reduce the appearance of acne scars by stimulating collagen production and promoting skin repair.
<br>• Wrinkles: Microneedling can help to reduce the appearance of wrinkles by increasing collagen production and improving skin elasticity.
<br>• Stretch marks: Microneedling can help to reduce the appearance of stretch marks by stimulating collagen production and promoting skin repair.
 </p>
            <p class="col-md-3"> <img src="images/needsk3.jpeg" alt="PRP Image 1">
    <img src="images/needsk1.jpg" alt="PRP Image 2">
   <!-- <img src="images/needsk4.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>


<div id="myModal38" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Microdermabrasion [Sand Blasting] Skin Polishing</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/derskpo3.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>It's a popular choice for those seeking smoother, brighter, and more youthful-looking skin.
<br><b>How Does Microdermabrasion Work?</b>
<br>• Exfoliation: A device is used to gently sand the skin, removing dead cells and revealing a fresher layer beneath.
<br>• Vacuum: The device also has a vacuum component that sucks up the exfoliated skin and any debris.
<br><b>Benefits:-</b>
<br>• Brighter Complexion: Removes dull, dead skin cells, revealing a more radiant glow.
<br>• Treatment for Acne: Can help to reduce acne breakouts and scarring.
 </p>
            <p class="col-md-3"> <img src="images/derskpo1.jpg" alt="PRP Image 1">
    <img src="images/derskpo2.jpg" alt="PRP Image 2">
    <!--<img src="images/derskpo4.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal39" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Diamond Dermabrasion Treatment</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/dermabrasion5.jpeg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>Diamond Dermabrasion: A Skin Resurfacing Treatment.
			<br>Diamond microdermabrasion is a non-invasive skin rejuvenation technique that is safer, more precise, and less abrasive than traditional microdermabrasion. It's a popular choice for those seeking to address various skin concerns, including:
<br>• Fine lines and wrinkles
<br>• Age spots and hyperpigmentation
<br>• Acne scars
<br>• Enlarged pores
<br>• Dull or uneven skin texture
</p>
			
			
            <p class="col-md-3"> <img src="images/dia2.jpg" alt="PRP Image 1">
    <img src="images/dia3.jpg" alt="PRP Image 2">
    <!--<img src="images/dia4.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal40" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Chemical Peel</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/chemicalpeel1.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>This process can help improve the appearance of the skin by reducing fine lines, wrinkles, acne scars, and age spots.
<br><b>Types of chemical peels:</b>
<br>• Superficial (light) peels: These peels remove the outermost layer of skin and are used to treat mild wrinkles, acne, and uneven skin tone.
<br>• Medium peels: These peels remove the outer layer and part of the middle layer of skin and are used to treat deeper wrinkles, acne scars, and age spots.
<br>• Deep peels: These peels remove all or most of the epidermis and part of the dermis and are used to treat deep wrinkles and severe scarring.
 </p>
            <p class="col-md-3"> <img src="images/che3.JPG" alt="PRP Image 1">
    <img src="images/che.jpg" alt="PRP Image 2">
  <!--  <img src="images/skinpolish1.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal41" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Yellow Peel Treatment </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/yelpeel.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">

            <p>• Fine Lines and Wrinkles: Stimulates collagen production to reduce the appearance of fine lines and wrinkles.
<br>• Enlarged Pores: Helps to refine and minimize the appearance of enlarged pores.
<br><b>What to Expect During and After Treatment?</b>
<br>• During: The treatment typically involves applying the yellow peel solution to the desired areas of the skin. There may be a slight tingling or stinging sensation during the procedure.
<br>• After: The skin may appear red and slightly swollen for a few days after the treatment. It is essential to follow post-care instructions carefully, including avoiding sun exposure and using sunscreen
</p>
            <p class="col-md-3"> <img src="images/yelpeel1.jpg" alt="PRP Image 1">
    <img src="images/yelpeel3.jpg" alt="PRP Image 2">
    <!--<img src="images/yellpeel2.jpeg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal42" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Anti Ageing Treatment </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/anti1.jpeg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>It uses heat energy to stimulate collagen production and tighten the skin, resulting in a more youthful appearance.
<br><b>How RF Works?</b>
<br>• Heat Energy: RF devices deliver controlled heat energy to the deeper layers of the skin.
<br>• Collagen Production: This heat stimulates the production of new collagen, a protein that gives the skin its structure and elasticity.
<br>• Skin Tightening: As collagen production increases, the skin becomes tighter and more toned.
</p>
            <p class="col-md-3"> <img src="images/age3.jpeg" alt="PRP Image 1">
    <img src="images/age1.jpeg" alt="PRP Image 2">
   <!-- <img src="images/age2.jpeg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal43" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Light Therapy </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/light.jpeg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>Light therapy, also known as phototherapy, is a non-invasive cosmetic treatment that utilizes various wavelengths of light to target specific skin concerns. It's a popular and effective method used in many cosmetology clinics to address a range of skin conditions.
<br><b>LED (Light-Emitting Diode) Therapy:-</b>
<br>• Red light: Stimulates collagen production, improves skin elasticity, and reduces fine lines and wrinkles.
<br>• Blue light: Kills acne-causing bacteria, reducing inflammation and preventing breakouts.
<br>• Green light: Helps to balance skin tone and reduce redness.
 </p>
            <p class="col-md-3"> <img src="images/light2.jpg" alt="PRP Image 1">
    <img src="images/light1.jpeg" alt="PRP Image 2">
  <!--  <img src="images/light3.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>

<div id="myModal44" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Under Eye Treatment </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/uney4.jpeg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p><b>Under-Eye Treatment with Radiofrequency (RF):</b>
<br>Radiofrequency (RF) technology has emerged as a popular non-invasive option for addressing under-eye concerns. It's a procedure that uses heat energy to stimulate collagen production and tighten the skin.
<br><b>How RF Works for Under-Eye Treatment:-</b>
<br>1.Heat Stimulation: RF energy penetrates the skin, heating the deeper layers.
<br>2.Collagen Production: This heat triggers the body's natural healing response, stimulating the production of collagen.
<br>3.Skin Tightening: As new collagen is produced, the skin becomes firmer and more elastic, reducing the appearance of under-eye bags and wrinkles.
 </p>
            <p class="col-md-3"> <img src="images/uney1.jpeg" alt="PRP Image 1">
    <img src="images/uney2.jpeg" alt="PRP Image 2">
    <!--<img src="images/uney3.jpeg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<div id="myModal45" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Under Arms Chemical Peel Treatment </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/arm3.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>Underarm chemical peels are a non-invasive cosmetic procedure designed to improve the appearance of the underarm skin. They can help address issues such as:
<br>• Darkening: Often caused by friction from shaving or clothing.
<br>• Roughness: Can be due to excessive dryness or hyperpigmentation.
<br>• Odor: Some people find that chemical peels can help reduce underarm odor by exfoliating the skin and potentially altering the pH balance.

 </p>
            <p class="col-md-3"> <img src="images/arm1.jpeg" alt="PRP Image 1">
    <img src="images/arm.jpg" alt="PRP Image 2">
    <!--<img src="images/arm2.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<div id="myModal46" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Anti Dandruff Treatment </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/dandr2.jpeg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>It works by increasing blood flow to the scalp, which helps to nourish the hair follicles and promote healthy hair growth. RF therapy can also help to reduce inflammation and itching, which are common symptoms of dandruff.
<br><b>Benefits:-</b>
<br>• Reduces dandruff flakes: RF therapy can help to reduce the amount of dandruff flakes that appear on your scalp.
<br>• Relieves itching: RF therapy can help to relieve the itching associated with dandruff.
<br>• Promotes healthy hair growth: RF therapy can help to promote healthy hair growth by nourishing the hair follicles.

 </p>
            <p class="col-md-3"> <img src="images/dand1.png" alt="PRP Image 1">
    <img src="images/dandr1.jpeg" alt="PRP Image 2">
   <!-- <img src="images/dand2.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<div id="myModal47" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Anti Acne Treatment </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/acne1.jpeg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>High frequency is a skincare treatment that uses a low-level electrical current to kill bacteria, reduce inflammation, and promote healing. It's often used for various skin conditions, including acne.
<br><b>How Does High Frequency Work?</b>
<br>• Kills Bacteria: The electrical current creates ozone, which has antibacterial properties. This helps to reduce acne-causing bacteria.
<br>• Reduces Inflammation: High frequency can help to calm down inflamed skin, reducing redness and swelling.


 </p>
            <p class="col-md-3"> <img src="images/acne2.jpg" alt="PRP Image 1">
    <img src="images/acne4.jpg" alt="PRP Image 2">
   <!-- <img src="images/acne3.jpeg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<div id="myModal48" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hairfall Treatment </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/hair1.jpeg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>Radiofrequency (RF) is a promising treatment option for hair loss, especially when used in combination with other therapies. Here's what you need to know:
<br><b>How RF works for hair loss:</b>
• Heat stimulation: RF energy heats the deeper layers of the scalp, improving blood flow and nutrient delivery to hair follicles.
• Collagen production: RF can stimulate the production of collagen, a protein essential for healthy hair growth.
• Inflammation reduction: RF can help reduce inflammation in the scalp, which can contribute to hair loss.
</p>
            <p class="col-md-3"> <img src="images/hair.jpg" alt="PRP Image 1">
    <img src="images/hair3.jpeg" alt="PRP Image 2">
   <!-- <img src="images/hair2.jpeg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<div id="myModal49" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Keratosis Pilaris </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/Rb.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>काही जणांच्या हातापायांवर लाल - काळे पुरळ दिसून येतात. त्याला keratosis pilaris अस म्हणतात. चिकन स्किन किंवा स्ट्रॉबेरी स्किन म्हणूनही अशी त्वचा ओळखली जाते. आपल्या त्वचेच्या खाली Keratin plugs प्रोटिन्स तयार करणारे जे फॉलिकल्स असतात ते त्वचेवर लाल काळपट किंवा त्वचेच्याच रंगाचे छोटे छोटे दाणे तयार करतात. त्यामुळे तिथली त्वचा पुरळ आल्यासारखी खडबडीत दिसते. हाताच्या कोपऱ्यांच्या आसपास, गुडघ्यांजवळ, मांडीवर त्याचे प्रमाण जास्त असते.
<br><b>Symptoms:-</b>
<br>• Cheeks (common in children)
<br>• Upper arms
<br>• Top of the thighs
<br>• Buttocks  </p>
            <p class="col-md-3"> <img src="images/OIP.jpeg" alt="PRP Image 1">
    <img src="images/Ra.jpeg" alt="PRP Image 2">
    <!--<img src="images/Rc.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<div id="myModal50" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hydra Facial </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/hydra1.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>It is a multistep process that combines deep cleansing, exfoliation (removal of dead skin cells), extraction (removing debris from clogged pores), and hydration (enhancing the water content of the skin).
<br><b>Benefits:</b>
<br>• Treats dry dull skin.
<br>• Treats acne prone and oily skin.
<br>• Fixes Uneven Skin Texture, Brown spots and pigmentation.
<br>• Treats congested skin and clogged pores.
<br>• Reduces fine lines and Wrinkles
<br>• Detoxifies Skin.
<br>• Hydrates skin.


</p>
           <p class="col-md-3"> <img src="images/hydra4.png" alt="PRP Image 1">
    <img src="images/hydra3.jpg" alt="PRP Image 2">
    <!--<img src="images/hydra2.jpg" alt="PRP Image 3">--></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!--<main>-->
    <!--<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PRP Hair Treatment</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-7 col-sm-7 text-center"><img src="images/prp1.jpg" alt="" title="" class="img-responsive"></div>
          <div class="col-md-5 col-sm-5">
            <p>पीआरपी (प्लेटलेट रिच प्लाझ्मा) ही पद्धती केसाची गळती थांबवण्यासाठी प्रभावी उपचारपद्धती आहे.पीआरपी उपचारपद्धतीत रुग्णाचे रक्त काढून त्याला एका विशिष्ट मशीनमध्ये (सेंट्रीफ्युग) काही वेळासाठी ठेवलं जातं.ज्यामुळे रक्ताच्या आत प्लेटलेट रिच प्लाझ्मा (ग्रोथ फॅक्टर) वेगळे होतात. त्याला इंजेक्शनच्या माध्यमातून रुग्णाच्या केसांच्या मुळात सोडलं जातं.<br>
           <b>Benefits:-</b><br>1.Natural: PRP is a natural treatment that uses your own blood.<br>2.Minimal side effects: The procedure is generally well-tolerated with minimal side effects.<br>3.Promising results: Many people report significant hair growth and thickening after undergoing PRP treatment.</p>
          <p class="col-md-3">
    <img src="images/prpa.jpg" alt="PRP Image 1">
    <img src="images/prpf1.jpg" alt="PRP Image 2">
    <img src="images/prpc.jpg" alt="PRP Image 3">
</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>-->




<!--<main>-->
  <!--about-us-->
  <section class="what-we" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center" >
          <h2 class="wow fadeInDown"><font color="#666666"> What We Do</font></h2>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay=".5s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="images/ab1.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Dr.Dhanvarsha S. Patil</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Dr.Dhanvarsha S. Patil</h6>
                  <p>Dr. Dhanvarsha Patil, a BAMS graduate, specializes in Ayurved Panchbhautik Chikitsa and holds a Post Graduate Diploma in Ayurvedic Cosmetology(PGDAC).With advanced training in Cosmetology from FMC institutes in the UK and USA, Dr. Patil currently serves as a Medical Officer at the prestigious LRP Hospital Institute and Research Centre in Islampur. Her expertise and dedication to Ayurvedic science and cosmetology make her a respected name in her field.</p>
                 <!-- <a class="tz-readmore" data-toggle="modal" data-target="#myModal">READ MORE<i class="fa fa-caret-right"></i></a>--> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"  data-wow-delay="1s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="images/ab2.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Vaidya Vivek Sudhakar Haladvanekar</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Dr. Vivek Sudhakar Haladvanekar</h6>
                  <p>Dr. Vivek Sudhakar Haladvanekar is a highly respected Ayurvedic physician with over 35 years of experience. He is renowned for his expertise in Ayurveda, particularly in Panchabhautik Chikitsa, and has authored several books on the subject, including Ayurved "Hey to Prachitiche Bolne" and "Ayurved Shrutika". He is also associated with the Panchabhautik Chikitsa & Panchakarma Centre in Kolhapur and Pune, where he practices traditional Ayurvedic treatments.</p>
                 <!-- <a class="tz-readmore" data-toggle="modal" data-target="#myModal2">READ MORE<i class="fa fa-caret-right"></i></a> --></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft div-n2"  data-wow-delay="1.5s">
          <div class="our-blog-item">
            <div class="blog-thumb"> <img src="images/ab3.jpg"  alt="" title="" class="img-responsive" /> </div>
            <h6>Aura Skin Clinic</h6>
            <div class="our-blog-ds">
              <div class="our-blog-bk">
                <div class="entry-ourblog">
                  <h6>Aura Skin Clinic</h6>
                  <p> Aura Skin Clinic is located in Kolhapur and provides best-in-class services in Dermatology and Cosmetology. This is operated by renowed Dermatologist - Dr. Dhanvarsha S. Patil. Aura Skin  Clinic is equipped with best in class lasers for aesthetic treatments as well as laser hair removal. These are best available laser machine and provides best results in less time. Other services include PRP,Skin and hair,Ayurved Treatment,Chemical Peeling,Skin Polish etc.</p>
                 <!-- <a class="tz-readmore" data-toggle="modal" data-target="#myModal3">READ MORE<i class="fa fa-caret-right"></i></a>--> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--about-us-->
  
  <!--services-->
   
   
     <section id="services">
    <div class="container">
      <div class="heading ">
        <div class="row">
          <div class="text-center col-sm-10 services1 col-center">
            <h3 class="wow fadeInDown"><font color="#666666">Treatments</font></h3>
            <p class="wow fadeInDown"><font color="#666666">Experience the difference with our personalized attention and advanced treatment methods that focus on you.Our state-of-the-art facility offers a range of personalized treatment options designed to meet your unique needs. Our experienced team utilizes the latest technologies and techniques to ensure effective and efficient care. From diagnostic assessments to customized therapy plans, we prioritize your health and well-being.</font></p>
          </div>
        </div>
      </div>
      <div class="text-center our-services">
        <div class="row">
		
          <div class="col-sm-4 wow fadeIn">
            <div class="service-info">
              <div class="grid">
                <figure class="effect-milo"> <img src="images/prp.jpg" class="img-responsive" alt="" title="" />
                  <figcaption>
                    <h2>PRP Hair <span>Treatment</span></h2>
                    <p>PRP therapy injects platelet-rich plasma cells into the affected area of your scalp.</p>
                    <a data-toggle="modal" data-target="#myModal5">View more</a> </figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/prps3.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>PRP Skin <span> Treatment</span></h2>
                  <p>PRP therapy is a revolutionary treatment for skin rejuvenation and hair restoration.</p>
                  <a data-toggle="modal" data-target="#myModal31">View more</a> </figcaption>
              </figure>
            </div>
          </div>
		  
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/carbon5.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Carbon Laser <span>Treatment</span></h2>
                  <p>A carbon laser treatment helps with acne, enlarged pores, oily skin, and uneven skin tone.</p>
                  <a data-toggle="modal" data-target="#myModal32">View more</a> </figcaption>
              </figure>
            </div>
          </div>
		  </div>
		  
		  <div class="row">
		  <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/carli.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2> Carbon Laser <span>Lips</span></h2>
                  <p>A procedure designed to enhance the fullness and smoothness of your lips.</p>
                  <a data-toggle="modal" data-target="#myModal33">View more</a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/tattoo.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Laser Tattoo <span>Removing</span></h2>
                  <p>Laser tattoo removal is a popular and effective method for removing tattoos. </p>
                  <a data-toggle="modal" data-target="#myModal34">View more</a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/wart.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Wart Removing <span>Treatment</span></h2>
                  <p>It uses radiofrequency waves to heat and destroy the tissue of the wart.</p>
                  <a data-toggle="modal" data-target="#myModal35">View more</a> </figcaption>
              </figure>
            </div>
          </div>
		  
		  </div>
		  
		  <div class="row">
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/needha.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Microneedling For <span>Hair</span></h2>
                  <p>Microneedling involves using a device with tiny needles to create small punctures in the scalp.</p>
                  <a data-toggle="modal" data-target="#myModal36">View more</a> </figcaption>
              </figure>
	
            </div>
          </div>
		  
		  <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/needsk.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Microneedling for <span>Skin</span></h2>
                  <p>Microneedling is skin rejuvenation treatment that penetrates skin’s surface with tiny needles. </p>
                  <a data-toggle="modal" data-target="#myModal37">View more</a> </figcaption>
              </figure>
            </div>
          </div>
		  
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/hydra.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Microdermabrasion Skin <span>Polishing</span></h2>
                  <p>A cosmetic procedure that exfoliates top layer of skin.</p>
                  <a data-toggle="modal" data-target="#myModal38">View more</a> </figcaption>
              </figure>
            </div>
          </div>
		  </div>
		  
		  
		   <div class="row">
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/dia.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Diamond  <span>Dermabrasion</span></h2>
                  <p>It exfoliates the top layer of skin, revealing smoother, younger-looking skin. </p>
                  <a data-toggle="modal" data-target="#myModal39">View more</a> </figcaption>
              </figure>
		
        </div>
      </div>
	  
	  <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/chemicalpeel.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Chemical Peel <span>Treatment</span></h2>
                  <p>Chemical peels involves applying a chemical solution to the skin to remove the top layers</p>
                  <a data-toggle="modal" data-target="#myModal40">View more</a> </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/yellpeel.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Yellow Peel <span>Treatment</span></h2>
                  <p>Yellow Peel exfoliate the skin and improve its appearance.</p>
                  <a data-toggle="modal" data-target="#myModal41">View more</a> </figcaption>
              </figure>
            </div>
          </div>
		  </div>
		  
		   <div class="row">
          <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/anti.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Anti Ageing <span>Treatment</span></h2>
                  <p>It stimulate collagen production and tighten the skin, resulting in youthful appearance. </p>
                  <a data-toggle="modal" data-target="#myModal42">View more</a> </figcaption>
              </figure>
			</div>  
    </div>
	 <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/lighta.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Light <span>Therapy</span></h2>
                  <p>It's a popular and effective method used in many cosmetology clinics to address a range of skin conditions. </p>
                  <a data-toggle="modal" data-target="#myModal43">View more</a> </figcaption>
              </figure>
			</div>  
    </div>
	
	 <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/uney.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Under Eye <span>Treatment</span></h2>
                  <p>A popular non-invasive option for addressing under-eye concerns. </p>
                  <a data-toggle="modal" data-target="#myModal44">View more</a> </figcaption>
              </figure>
			</div>  
    </div>
	</div>
	
	 <div class="row">
	
	 <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/arms.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Under Arms  <span>Chemical Peel Treatment</span></h2>
                  <p>It is designed to improve the appearance of the underarm skin. </p>
                  <a data-toggle="modal" data-target="#myModal45">View more</a> </figcaption>
              </figure>
			</div>  
    </div>
	
	 <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/dandr3.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Anti Dandruff <span>Treatment</span></h2>
                  <p>Radiofrequency (RF) therapy is a non-invasive hair treatment that can help with dandruff </p>
                  <a data-toggle="modal" data-target="#myModal46">View more</a> </figcaption>
              </figure>
			</div>  
    </div>
	 <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/acne.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Anti Acne <span>Treatment</span></h2>
                  <p>It uses a low-level electrical current to kill bacteria, reduce inflammation, and promote healing.  </p>
                  <a data-toggle="modal" data-target="#myModal47">View more</a> </figcaption>
              </figure>
			</div>  
    </div>
	</div>
	
	 <div class="row">
	 <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/hair.jpeg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Hairfall <span>Treatment</span></h2>
                  <p>Medical procedure uses a concentrated beam of light(laser) to remove unwanted hair. </p>
                  <a data-toggle="modal" data-target="#myModal48">View more</a> </figcaption>
              </figure>
			</div>  
    </div>
	 <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/Rc.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Keratosis <span>Pilaris</span></h2>
                  <p>काही जणांच्या हातापायांवर लाल - काळे पुरळ दिसून येतात. त्याला keratosis pilaris अस म्हणतात.  </p>
                  <a data-toggle="modal" data-target="#myModal49">View more</a> </figcaption>
              </figure>
			</div>  
    </div>
	
	 <div class="col-sm-4  wow fadeIn">
            <div class="grid">
              <figure class="effect-milo"> <img src="images/hydra.jpg" class="img-responsive" alt="" title="" />
                <figcaption>
                  <h2>Hydra <span>Facial</span></h2>
                  <p>Hydrafacial is a patented skincare Treatment that uses a unique machine to perform a series of steps by Professional.</p>
                  <a data-toggle="modal" data-target="#myModal50">View more</a> </figcaption>
              </figure>
			</div>  
    </div>
	</div>
	</div>
	</div>
  </section>

   

  <!--services-->
  <!--Projects-->
 <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-10 col-center">
          <h2 class="wow fadeInDown"><font color="#666666"> Gallery</font></h2>
          <!--<p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>-->
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><img class="img-responsive" src="images/a.jpeg" alt="" title="" style="margin-bottom:20px" />
              <div class="post-meta"><!--<span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span>--></div>
              <div><!--<i class="fa fa-pencil"></i>--></div>
            </div>
            <div class="entry-header">
              <!--<h3><a href="#">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span>--></div>
            <div class="entry-content">
              <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>-->
             <!-- <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>-->
            </div>
          </div>
        
      <!--  <div class="clearfix"></div>-->
		 <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><img class="img-responsive" src="images/f.jpeg" alt="" title="" style="margin-bottom:20px" />
              <div class="post-meta"><!--<span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span>--></div>
              <div><!--<i class="fa fa-pencil"></i>--></div>
            </div>
            <div class="entry-header">
              <!--<h3><a href="#">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span>--></div>
            <div class="entry-content">
              <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>-->
             <!-- <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>-->
            </div>
          </div>
		  
		  
		   <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><img class="img-responsive" src="images/b.jpeg" alt="" title="" style="margin-bottom:20px" />
              <div class="post-meta"><!--<span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span>--></div>
              <div><!--<i class="fa fa-pencil"></i>--></div>
            </div>
            <div class="entry-header">
              <!--<h3><a href="#">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span>--></div>
            <div class="entry-content">
              <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>-->
             <!-- <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>-->
            </div>
          </div>
		  
		  
		   <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><img style="margin-top:20px" class="img-responsive" src="images/c.jpeg" alt="" title="" />
              <div class="post-meta"><!--<span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span>--></div>
              <div><!--<i class="fa fa-pencil"></i>--></div>
            </div>
            <div class="entry-header">
              <!--<h3><a href="#">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span>--></div>
            <div class="entry-content">
              <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>-->
             <!-- <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>-->
            </div>
          </div>
		  
		   <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><img style="margin-top:20px" class="img-responsive" src="images/d.jpeg" alt="" title="" />
              <div class="post-meta"><!--<span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span>--></div>
              <div><!--<i class="fa fa-pencil"></i>--></div>
            </div>
            <div class="entry-header">
              <!--<h3><a href="#">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span>--></div>
            <div class="entry-content">
              <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>-->
             <!-- <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>-->
            </div>
          </div>
		  
		   <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><img style="margin-top:20px" class="img-responsive" src="images/g.jpeg" alt="" title="" />
              <div class="post-meta"><!--<span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span>--></div>
              <div><!--<i class="fa fa-pencil"></i>--></div>
            </div>
            <div class="entry-header">
              <!--<h3><a href="#">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span>--></div>
            <div class="entry-content">
              <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>-->
             <!-- <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>-->
            </div>
          </div>
		  
		  
		  
		  
		  
      </div>
    </div>
	</section>
  <!--Projects-->
  <!--blog-->
   <!--<section id="blog">
   <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-10 col-center">
          <h2 class="wow fadeInDown"> Blog Posts </h2>
          <p class="wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><a href="blog-in.html"><img class="img-responsive" src="assets/img/1.jpg" alt="" title="" /></a>
              <div class="post-meta"><span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span></div>
              <div class="post-icon"><i class="fa fa-pencil"></i></div>
            </div>
            <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span></div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
              <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb">
              <div id="post-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#post-carousel" data-slide-to="0" class=""></li>
                  <li data-target="#post-carousel" data-slide-to="1" class="active"></li>
                  <li data-target="#post-carousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item"><a href="blog-in.html"><img class="img-responsive" src="assets/img/1.jpg" alt="" title="" /></a></div>
                  <div class="item active"><a href="blog-in.html"><img class="img-responsive" src="assets/img/2.jpg" alt="" title="" /></a></div>
                  <div class="item"><a href="blog-in.html"><img class="img-responsive" src="assets/img/3.jpg" alt=""></a></div>
                </div>
                <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a><a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a></div>
              <div class="post-meta"><span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span></div>
              <div class="post-icon"><i class="fa fa-picture-o"></i></div>
            </div>
            <div class="entry-header">
              <h3><a href="blog-in.html">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span></div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et .</p>
              <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeIn">
            <div class="post-thumb"><a href="blog-in.html"><img class="img-responsive" src="assets/img/3.jpg" alt="" title=""  /></a>
              <div class="post-meta"><span><i class="fa fa-comments-o"></i>3 Comments</span><span><i class="fa fa-heart"></i>0 Likes</span></div>
              <div class="post-icon"><i class="fa fa-video-camera"></i></div>
            </div>
            <div class="entry-header">
              <h3><a href="blog-in.html">Lorem ipsum dolor sit amet consectetur</a></h3>
              <span class="date">June 26, 2014</span><span class="cetagory">in<strong>Photography</strong></span></div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et .</p>
              <p><a href="blog-in.html" class="btn btn2 hvr-sweep-to-right">Read more<span class="glyphicon glyphicon-chevron-right"></span></a></p>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>-->
  <!--blog-->
  <!--contact-->
  <section id="contact" class="contact-us">
    <div class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-10 col-center">
            <h2 class="wow fadeInDown"> <font color="#666666">Contact Us</font></h2>
            
          </div>
        </div>
        <div class="contact-form" >
          <div class="row">
            <div class="col-sm-6 wow fadeIn">
              <form id="main-contact-form" name="contact-form" method="post" action="index.php">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="name" class="form-control" placeholder="Name"  type="text">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input name="email" class="form-control" placeholder="Email Address" type="email">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input name="contact_no" class="form-control" placeholder="Contact No." required  type="text">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
                </div>
                <div>
                  <button type="submit" class="submit-bt2" value="Submit" name="Submit"><font color="#666666">Send Now </button></font>
                </div>
              </form>
            </div>
            <div class="col-sm-6 wow fadeIn">
              <div class="contact-info">
                <p><b><font color="#666666">Address :- F-205 Second Floor,Abhishekh Heights Appartments,Collector Office Road,Tarabai Park Kolhapur.
                  
                  <br>Mobile :- 9175735530 </font></b></p>
                <br>
               <ul class="address">
                   <li><font color="#666666"><i class="fa fa-map-marker"></i><span>Address : </span> Tarabai Park, Kolhapur</font></li>
                  <li><font color="#666666"><i class="fa fa-phone"></i><span>Phone :</span> 9764629122</font></li>
                  <li><font color="#666666"><i class="fa fa-envelope"></i><span>Email : </span><a href="mailto:aurabydrdhanvarsha@gmail.com"> <font color="#666666">&nbsp;aurabydrdhanvarsha@gmail.com</font></a></font></li>
                  <font color="#666666"><li><i class="fa fa-globe"></i><span>Website :</font> </span><a href="https://clinicauraskin.in/"><u>clinicauraskin.in</a></u></li>
               </ul> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contact-->
</main>
<!--main-->
<footer>
  <!--footer-div-->
  <div class="footer">
    <div class="container">
      <div class="col-md-8 col-sm-8 footer-c"><font color="#FFFFFF">Copyright &copy; 2024 All rights reserved. </font><a href="https://code-crafter.in/" style="text-decoration: none;">
    <font color="#FFFFFF">Code Crafter Services</font><!--<a target="_blank" href="https://www.templateshub.net">Templates Hub</a>--></div>
      <div class="col-md-4  col-sm-4 footer-c text-right">
        <div class="social-icons"><a href="https://g.co/kgs/n3VzS2C"><i class="fa fa-google-plus fa-lg"></i></a><a href="https://www.facebook.com/share/uZKqUYwtWy4JVb9t/?mibextid=kFxxJD"><i class="fa fa-facebook fa-lg"></i></a><a href="https://www.instagram.com/clinicauraskin?igsh=endhMmtqYXd1MHdw"><i class="fa fa-instagram fa-lg"></i></a></div>
      </div>
    </div>
  </div>
  <!--footer-div-->
</footer>
<!-- jQuery -->
<script  src="assets/js/jquery-2.2.4.js"></script>
<script  src="assets/js/scrolltopcontrol.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/creative.min.js"></script>


<script> $(document).ready(function() { $(".dropdown-menu li a").click(function() { var targetModal = $(this).attr("href"); $(targetModal).modal("show"); }); }); </script> 
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        jQuery('#frmContactus').on('submit',function(e){
		jQuery('#message').html('');
		jQuery('#submit').html('Please wait');
		jQuery('#submit').attr('disabled',true);
		jQuery.ajax({
			url:'index.php',
			type:'post',
			data:jQuery('#frmContactus').serialize(),
			success:function(result){
				jQuery('#message').html(result);
				jQuery('#submit').html('Send');
				jQuery('#submit').attr('disabled',false);
				jQuery('#frmContactus')[0].reset();
			}
		});
		e.preventDefault();
	  });
    </script>

<!-- jQuery -->
</body>


</html>
