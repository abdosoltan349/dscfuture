<!DOCTYPE html>
<head>
    <title>Certificate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="temp.css">
    <script src="temp.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Online Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
</head>
<body>
    <section id="container">
        <form method="POST" action="#" >
            <div>
                <h1>DSC Graphics Helpers</h1>
                <hr>
                <div class="row">
                    <div class="col-lg-2 col-md-1 col-xs-0"></div>
                    <div class="col-lg-4 col-md-5 col-xs-12">
                        <label class="labels" for="fname" >Instructor Name*</label>
                        <input class="inputs" id="fname" name="name" type="text" placeholder="eg: Ashraf" onfocusout="validatefname()">
                        <span id="errfname" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="col-lg-4 col-md-5 col-xs-12">
                        <label class="labels" for="event" >Event Name*</label>
                        <input class="inputs" id="event" name="title" type="text" placeholder="eg: Flutter introduction" onfocusout="validateevent()">
                        <span id="errevent" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="col-lg-2 col-md-1 col-xs-0"></div>
                </div>

                <div class="row">
                    <div class="col-lg-2 col-md-1 col-xs-0"></div>
                    <div class="col-lg-4 col-md-5 col-xs-12">
                        <label class="labels" for="spci" >Instructor Job Title*</label>
                        <input class="inputs" id="spci" name="spec" type="text" placeholder="eg: Android Developer" onfocusout="validatespci()">
                        <span id="errspci" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="col-lg-4 col-md-5 col-xs-12">
                        <label class="labels" for="dsc" >DSC name*</label>
                        <input class="inputs" id="dsc" name="dscname" type="text" placeholder="eg: DSC Future Academy" onfocusout="validatedsc()">
                        <span id="errdsc" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="col-lg-2 col-md-1 col-xs-0"></div>
                </div>

                <div class="row">
                    <div class="col-lg-2 col-md-1 col-xs-0"></div>
                    <div class="col-lg-4 col-md-5 col-xs-12">
                        <label class="labels" for="date" >Date*</label>
                        <input class="inputs" id="date" name="date" type="date" required onfocusout="validatedate()">
                        <span id="errdate" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="col-lg-4 col-md-5 col-xs-12">
                        <label class="labels" for="time" >Time*</label>
                        <input class="inputs" id="time" name="time" type="time" required onfocusout="validatetime()">
                        <span id="errtime" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="col-lg-2 col-md-1 col-xs-0"></div>
                </div>

                <div class="row">
                    <div class="col-lg-2 col-md-1 col-xs-0"></div>
                    <!-- <div class="col-lg-8 col-md-10 col-xs-12">
                        <label class="labels uploads" for="" >Upload Your Photo</label>
                        <input class="inputs uploads" type="file" accept="image/*">
                    </div> -->


                    
                    <div class="col-lg-2 col-md-1 col-xs-0"></div>
                </div>
                <label class="labels" style="text-align: center;">Choose your Template:</label>
                <div class="row">
                    <div class="col-lg-2 col-md-1 col-xs-0"></div>
                    <div class="col-lg-4 col-md-5 col-xs-6">
                        <span>
                            <input type="radio" name="certificate-temp" value="1" checked>
                            <img class="temp-img" src="DSC.png" alt="certificate-temp">
                        </span>
                    </div>
                    <div class="col-lg-4 col-md-5 col-xs-6">
                        <span>
                            <input type="radio" name="certificate-temp" value="2">
                            <img class="temp-img" src="DSC.png" alt="certificate-temp">
                        </span>
                    </div>
                    <div class="col-lg-2 col-md-1 col-xs-0"></div>
                </div>

                
            </div>
			 <div style="margin-top: 20px;" class="container">
            <div class="row">
                <div class="col-lg-2 col-md-1 col-xs-0"></div>
                <div class="col-lg-4 col-md-5 col-xs-6" >
                    <div id="image-preview"></div>
                </div>
                <div class="col-lg-4 col-md-5 col-xs-6" style="padding:75px;">
                    <p><label>Select Image</label></p>
                    <input type="file" name="upload_image" id="upload_image" />
                </div>
                <div class="col-lg-2 col-md-1 col-xs-0"></div>
            </div>
          </div>
        </form>
       
          <div class="row">
            <div class="col-lg-2 col-md-1 col-xs-0"></div>
            <div class="col-lg-8 col-md-10 col-xs-12">
                <button id = "postData" style="width: 100px; margin-top: 10px; background-color: #007bff;" class="inputs"  onclick="ValidationFinal()">Generate</button>
            </div>
            <div class="col-lg-2 col-md-1 col-xs-0"></div>
        </div>
    </section>
    <section id="foot">
        <!-- Footer -->
        <footer>
    
          <!-- Footer Links -->
          <div class="container">
    
            <!-- Footer links -->
            <div class="row">
    
              <!-- Grid column -->
              <div class="col-md-6 col-lg-5 col-xl-6 mx-auto mt-3">
                <h6 style="font-size: 32; margin-top: 25px;">DSC Future Academy</h6>
                <p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    xxxxxxxxxxxxxxxxxxxxxxxxxxx
                    xxxxxxxxxxxxxxxxxxxxxxxxx
                    xxxxxxxxxxxxxxxxxxxx</p>
              </div>
              <!-- Grid column -->
              <hr class="w-100 clearfix d-md-none">
    
              <!-- Grid column -->
              <div class=" created col-md-6 col-lg-5 col-xl-6 mx-auto mt-3">
                    <h6 style="font-size: 32; margin-top: 25px;">Created By:</h6>
                    <p>
                        <a href="#!"><i class="fa fa-linkedin"></i></a>
                        Mahmoud Said
                    </p>
                    <p>
                        <a href="#!"><i class="fa fa-linkedin"></i></a>
                        Abdulrhman Sultan
                    </p>
                    <p>
                        <a href="#!"><i class="fa fa-linkedin"></i></a>
                        Ashraf Fathalla
                    </p>
                
                    <p>
                        <a href="#!"><i class="fa fa-linkedin"></i></a>
                        Khalid Abde-lfattah
                    </p>
                    
                    <p>
                        <a href="#!"><i class="fa fa-linkedin"></i></a>
                        Mohamed Hammad
                    </p>
                                                        
                    <p>
                        <a href="#!"><i class="fa fa-linkedin"></i></a>
                        Mahmoud Tohamy
                    </p>
              </div>
              <!-- Grid column -->
            </div>
    
            <hr>
            <!-- Grid row -->
            <div class="row d-flex align-items-center">
    
              <!-- Grid column -->
              <div class="col-md-7 col-lg-8">
    
                <!--Copyright-->
                <p class="text-center text-md-left">© 2020 Copyright:
                  <a href="https://dsc.community.dev/future-academy/">
                    <strong style="color: white;">DSC Future Academy</strong>
                  </a>
                </p>
    
              </div>
              <!-- Grid column -->
              <div class="col-md-5 col-lg-4 ml-lg-0"></div>
            </div>
            <!-- Grid row -->
          </div>
          <!-- Footer Links -->
        </footer>
        <!-- Footer -->
      <div class="social">
          <a href="https://www.facebook.com/DSCFutureAcademy"><i class="fa fa-facebook-f"></i></a>
          <a href="https://twitter.com/DSC_FA_eg"><i class="fa fa-twitter"></i></a>
          <a href="https://dsc.community.dev/future-academy/"><i class="fa fa-google"></i></a>
          <a href="https://www.youtube.com/channel/UCRyBto2DFC5sCtvZ-ccyrSg"><i class="fa fa-youtube"></i></a>
      </div>
      </section>
</body>
<script>  
$(document).ready(function(){
  
  $image_crop = $('#image-preview').croppie({
    enableExif:true,
    viewport:{
      width:200,
      height:200,
      type:'circle'
    },
    boundary:{
      width:300,
      height:300
    }
  });

  $('#upload_image').change(function(){
    var reader = new FileReader();

    reader.onload = function(event){
      $image_crop.croppie('bind', {
        url:event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
  });

  $('#postData').click(function(event){
	  	 
    $image_crop.croppie('result', {
      type:'canvas',
      size:{
      width:934,
      height:930,
      type:'circle'
    }
    }).then(function(response){
      //var _token = $('input[name=_token]').val();
	  var dsc = $("#dsc").val();
	  var title = $("#event").val();
	  var name = $("#fname").val();
	  var spec = $("#spci").val();
	  var date = $("#date").val();
	   var time = $("#time").val();
      $.ajax({
        url:'upload.php',
        type:'post',
        data:{"image":response},
        success:function(data)
        {
       window.location.replace("cert.php?image="+data+"&dsc="+dsc+"&title="+title+"&name="+name+"&spec="+spec+"&date="+date+"&time="+time);
        }
      });
    });
  });
  
});  
</script>
  