<?php
include 'includes/header.php';
require 'mail_info.php';
?>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SHF64V7TRX"></script>
<script>
   window.dataLayer = window.dataLayer || [];

   function gtag() {
      dataLayer.push(arguments);
   }
   gtag('js', new Date());
   gtag('config', 'G-SHF64V7TRX');
</script>
<main role="main" class="wrapper">
   <section class="">
      <div class="container">
         <div class="p-0">
            <div class="row">
               <div class="col-md-5 align-self-center text-center wow fadeInDown">
                  <img class="img-fluid" src="images/contact-bg.png" alt="">
               </div>
               <div class="col-md-7 align-self-center wow fadeInUp">
                  <div class="contact-left-bg mt-5">
                     <h2 class="text-black">Let’s talk.</h2>
                     <p class="text-black">Feel free to contact us any time. we will get back to you as soon as we can! </p>
                     <div class="contact-info text-black mt-5">
                        <p><a href="mailto:sales@brainerhub.com"><i class="fa fa-envelope pr-2"></i> sales@brainerhub.com</a></p>
                        <p><a href="tel:+917948995210"><i class="fa fa-phone pr-2"></i> +91 79 4899 5210</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="forms mt-5">
            <!-- <div class="map-direction">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.259305745878!2d72.51654571495737!3d23.05095312105118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b701695c397%3A0x37f7eac0feed6e52!2sTitanium%20square!5e0!3m2!1sen!2sin!4v1627472200909!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                       </div> -->
            <!-- <div class="map-direction mb-5">
                     <div style="max-width:100%;list-style:none; transition: none;overflow:hidden;width:100%;height:400px;"><div id="mymap-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=B-406+Titanium+Square+Building,+Near+Thaltej+Cross+Road,+Sarkhej+-+Gandhinagar+Highway,+Ahmedabad,+Gujarat+380059&destination=Titanium+Square+Building&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div></div>
                     </div> -->
            <div class="row">
               <div class="col-md-12">
                  <form class="gray-circle gray-dott-bottom mb-4" id="contact-form" method="post" action="contact_mail.php">
                     <div class="form-row">
                        <div class="form-group col-md-4 wow fadeInDown">
                           <label for="fname">Full Name<span>*</span></label>
                           <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your name" required>
                           <div class="fname-invalid invalid text-danger">
                              <strong></strong>
                           </div>
                        </div>
                        <div class="form-group col-md-4 wow fadeInDown">
                           <label for="email">Email<span>*</span></label>
                           <input type="email" class="form-control" id="email" name="email" placeholder="Enter your mail" required>
                           <div class="email-invalid invalid text-danger">
                              <strong></strong>
                           </div>
                        </div>
                        <div class="form-group col-md-4 wow fadeInDown">
                           <label for="phone">Phone<span>*</span></label>
                           <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter your number" required>
                           <!-- <input type="tel" maxlength="12" class="form-control" id="phone" name="phone" placeholder="Enter your number" required> -->
                           <div class="phone-invalid invalid text-danger">
                              <strong></strong>
                           </div>
                        </div>
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-4 wow fadeInUp">
                           <label for="id">Google /Skype id</label>
                           <input type="id" class="form-control" id="id" name="id" placeholder="Enter id">
                        </div>
                        <div class="form-group col-md-4 wow fadeInUp">
                           <label>I am looking for</label>
                           <div class="radio-toolbar">
                              <input type="radio" id="radioSolutions" name="radioSoftware" value="Custom Solutions" checked="">
                              <label for="radioSolutions">Custom Software Solutions</label>
                           </div>
                        </div>
                        <div class="form-group col-md-4 wow fadeInUp">
                           <label class="d-none d-md-block">&nbsp;</label>
                           <div class="radio-toolbar">
                              <input type="radio" id="radioDedicated" name="radioSoftware" value="Dedicated Team">
                              <label for="radioDedicated">Dedicated Teams</label>
                           </div>
                        </div>
                     </div>
                     <div class="form-row">

                        <div class="form-group col-md-4 wow fadeInDown">
                           <label for="form_company">Company name</label>
                           <input type="form_company" class="form-control" id="form_company" name="form_company" placeholder="Company name">
                        </div>
                        <div class="form-group col-md-8 wow fadeInUp">
                           <label for="inputAddress">Message</label>
                           <textarea type="text" class="form-control" name="comment" placeholder="Write here" maxlength="200"></textarea>
                        </div>
                     </div>
                     <p class="wow fadeInDown">
                     <div class="g-recaptcha" data-sitekey="<?php echo $sitekey; ?>"></div>
                     <span id="captcha" style="margin-left:100px;color:red"></span>
                     <button type="submit" value="SUBMIT" class="submit btn btn-new my-3 float-right">Send <i class="fa fa-arrow-right"></i></button>
                     </p>
                  </form>
               </div>

            </div>
         </div>
         <div class="forms mt-3">
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6 col-sm-8 ">
                        <div class="card p-3 border border-dark">
                           <!-- <img class="img-fluid" src="images/map-location1.jpg" alt=""> -->
                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14685.020015090247!2d72.5189073!3d23.0511109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9ba9666eb57b%3A0x1e0654522e62f8ba!2sBrainerhub%20Solutions!5e0!3m2!1sen!2sin!4v1683537374313!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                     </div>
                     <div class="col-md-6 col-sm-4  align-self-center">
                        <h5 class="font-weight-bold">Sales Office
                           <hr />
                        </h5>
                        <p class="mt-3 text-black"><i class="fa fa-map-marker pr-2"></i> <strong class="text-animation">B-406</strong> Titanium Square Building, Near Thaltej Cross Road, Sarkhej - Gandhinagar Highway, Ahmedabad, Gujarat 380059</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="forms mt-3">
            <div class="row">
               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6 col-sm-8 ">
                        <div class="card p-3 border border-dark">
                           <!-- <img class="img-fluid" src="images/map-location2.jpg" alt=""> -->
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.256975095215!2d72.5187115!3d23.0510386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b549ec30903%3A0x5ae08036456be4e2!2sTITANIUM%20SQUARE%2C%20Sarkhej%20-%20Gandhinagar%20Hwy%2C%20Patel%20Society%2C%20Jai%20Ambe%20Nagar%2C%20Thaltej%2C%20Ahmedabad%2C%20Gujarat%20380054!5e0!3m2!1sen!2sin!4v1683536980892!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-4 align-self-center">
                        <h5 class="font-weight-bold">Development Centre
                           <hr />
                        </h5>
                        <p class="mt-3 text-black"><i class="fa fa-map-marker pr-2"></i> <strong class="text-animation">D-101</strong> Titanium Square Building, Near Thaltej Cross Road, Sarkhej - Gandhinagar Highway, Ahmedabad, Gujarat 380059</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- FOOTER -->
   <?php include 'includes/footer.php'; ?>
   <script src="https://www.google.com/recaptcha/api.js"></script>
   <script>
      jQuery(document).ready(function() {
         const form = $("#contact-form");
         form.validate({
            rules: {
               fname: {
                  required: true,
                  minlength: 3,
                  maxlength: 30,
                  lettersonly: true
               },
               email: {
                  required: true,
                  email: true,
                  maxlength: 30
               },
               phone: {
                  number: true,
                  maxlength: 15
               }
            },
         });
         jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z]+$/i.test(value);
         }, "Letters only please");

         form.submit(function() {
            if (form.valid() && grecaptcha.getResponse()) {
               form.submit();
               $('#captcha').hide();
            } else {
               $('#captcha').html("You can't leave Captcha Code empty");
               return false;
            }
            return false;
         });
      });
   </script>