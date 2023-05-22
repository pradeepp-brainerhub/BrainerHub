<?php
$header = [
   "title" => "Join Our Team at BrainerHub Solutions | Hiring Now!",
   "meta-decription" => "BrainerHub Solutions constantly seeks talented individuals to join our team! Explore our job openings and apply today to join a dynamic and growing company.",
];
include 'includes/header.php';
include 'job_opening_data.php';
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

   <section class="hiring-banner pb-0 border">
      <div class="container-fluid container">
         <div class="row">
            <div class="col-lg-7 col-md-6 align-self-center">
               <div class="portfolio-info mb-5 wow slideInLeft">
                  <h1>Career Overview</h1>
                  <p>The right path toward growth, learning, and development </p>
                  <p>
                     Most companies are looking for staff – we want talented partners for adventure. Let’s have a conversation if you love technology, have an innovative mindset, and have the ability to think critically.
                  </p>
                  <h6>BrainerHub Solutions is open to hiring talented IT professionals who are ready for a career transformation.</h6>
                  <p class="alert alert-danger d-inline-block mt-3">
                     Feel free to share your resume on <a href="mailto:careers@brainerhub.com"> careers@brainerhub.com</a>
                  </p>
                  <p class="wow fadeInDown">
                     <a href="#jobopening" class="btn btn-new mt-4 btn-red"><span>Job Openings <i class="fa fa-arrow-right"></i></span></a>
                  </p>
                  <p>
                     If you are ready to set on an exceptional career journey, check out our job openings and apply today!
                  </p>
               </div>
            </div>
            <div class="col-lg-5 col-md-6 align-self-center">
               <div class="hiring-img" style="background-image: url(images/hiring-bg.svg);">
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="icon-box-shape pb-0" id="jobopening">
      <div class="container small-container text-center pb-5">
         <div class="row">
            <div class="col-md-12 wow fadeInDown">
               <h1 class="mb-4">Job Openings </h1>
               <p>An agile technology culture and work-life balance are the cornerstones of BrainerHub Solutions' workplace culture.</p>
               <hr>
               <h5 class="font-weight-light wow fadeInUp">The Best Company To Advance Your Career And Have An Exceptional Professional Life.</h5>
               <p>
                  BrainerHub Solutions is actively seeking to connect with brilliant individuals that have an entrepreneurial mindset, a strong will to achieve, and the self-assurance to use innovative technology to transform the world.
               </p>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-12 align-self-center">
               <div class="technonogy-box mobile-development-skil-block mt-4 wow fadeInDown text-left">
                  <img src="images/services-img/hire-dotnet.png" class="img-fluid" title="Java Spring" alt="Java Spring">
                  <h5 class="my-3 post">SE / SSE - .NET</h5>
                  <p class="text-justify">We are currently looking for .Net Developers to join our dynamic technical team. </p>
                  <button type="button" class="btn open-model" data-toggle="modal" data-target="#NetModal"> View More </button>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 align-self-center">
               <div class="technonogy-box mobile-development-skil-block mt-4 wow fadeInDown text-left">
                  <img src="images/services-img/trust-product.png" class="img-fluid" title="Java Spring" alt="Java Spring">
                  <h5 class="my-3 post">Project Manager</h5>
                  <p class="text-justify">In this role, the IT Project Manager will be responsible for the planning of technology projects. </p>
                  <button type="button" class="btn open-model" data-toggle="modal" data-target="#ProjectModal"> View More </button>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 align-self-center">
               <div class="technonogy-box mobile-development-skil-block mt-4 wow fadeInDown text-left">
                  <img src="images/services-img/react-career.png" class="img-fluid" title="Java Spring" alt="Java Spring">
                  <h5 class="my-3 post">SE / SSE - ReactNative</h5>
                  <p class="text-justify">We are looking for a React Native developer interested in building performant mobile apps on both the iOS and Android platforms. </p>
                  <button type="button" class="btn open-model" data-toggle="modal" data-target="#ReactNativeModal"> View More </button>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 align-self-center">
               <div class="technonogy-box mobile-development-skil-block mt-4 wow fadeInDown text-left">
                  <img src="images/services-img/react-career.png" class="img-fluid" title="Java Spring" alt="Java Spring">
                  <h5 class="my-3 post">SE / SSE - React Js</h5>
                  <p class="text-justify">We are looking for a skilled react.js developer to join our front-end development team. In this role, you will be responsible. </p>
                  <button type="button" class="btn open-model" data-toggle="modal" data-target="#ReactJSModal"> View More </button>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 align-self-center">
               <div class="technonogy-box mobile-development-skil-block mt-4 wow fadeInDown text-left">
                  <img src="images/services-img/hire-laravel.png" class="img-fluid" title="Java Spring" alt="Java Spring">
                  <h5 class="my-3 post">SE / SSE - Laravel</h5>
                  <p class="text-justify">We are searching for a Laravel developer to build web applications for our company. In this role, you will design and create. </p>
                  <button type="button" class="btn open-model" data-toggle="modal" data-target="#LaravelModal"> View More </button>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 align-self-center">
               <div class="technonogy-box mobile-development-skil-block mt-4 wow fadeInDown text-left">
                  <img src="images/services-img/python-career.png" class="img-fluid" title="Java Spring" alt="Java Spring">
                  <h5 class="my-3 post">SE / SSE - Python</h5>
                  <p class="text-justify">We are looking for an experienced Python developer who will be responsible for writing and testing scalable code. </p>
                  <button type="button" class="btn open-model" data-toggle="modal" data-target="#PythonModal"> View More </button>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 align-self-center">
               <div class="technonogy-box mobile-development-skil-block mt-4 wow fadeInDown text-left">
                  <img src="images/services-img/wordpress-career.png" class="img-fluid" title="Java Spring" alt="Java Spring">
                  <h5 class="my-3 post">SE - Wordpress</h5>
                  <p class="text-justify">WordPress Developers are responsible for both back-end and front-end development, including creating WordPress themes and plugins. </p>
                  <button type="button" class="btn open-model" data-toggle="modal" data-target="#WordpressModal"> View More </button>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 align-self-center">
               <div class="technonogy-box mobile-development-skil-block mt-4 wow fadeInDown text-left">
                  <img src="images/services-img/java-career.png" class="img-fluid" title="Java Spring" alt="Java Spring">
                  <h5 class="my-3 post">SE / SSE - Java</h5>
                  <p class="text-justify">We are looking for a Java Developer with experience in building high-performing, scalable, enterprise-grade applications. </p>
                  <button type="button" class="btn open-model" data-toggle="modal" data-target="#JavaModal"> View More </button>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 align-self-center">
               <div class="technonogy-box mobile-development-skil-block mt-4 wow fadeInDown text-left">
                  <img src="images/services-img/android-career.png" class="img-fluid" title="Java Spring" alt="Java Spring">
                  <h5 class="my-3 post">SE / SSE - Android (Cross Platform)</h5>
                  <p class="text-justify">You will be responsible for user interface development of various android based mobile applications for clients and partners. </p>
                  <button type="button" class="btn open-model" data-toggle="modal" data-target="#AndroidModal"> View More </button>
               </div>
            </div>
            <div class="col-lg-4 col-md-12 align-self-center">
               <div class="technonogy-box mobile-development-skil-block mt-4 wow fadeInDown text-left">
                  <img src="images/services-img/apple-career.png" class="img-fluid" title="Java Spring" alt="Java Spring">
                  <h5 class="my-3 post">SE / SSE - iOS</h5>
                  <p class="text-justify">We are looking for an iOS developer responsible for the development and maintenance of applications aimed at a range. </p>
                  <button type="button" class="btn open-model" data-toggle="modal" data-target="#iOSModal"> View More </button>
               </div>
            </div>
         </div>
      </div>
   </section>

   <?php foreach ($data as $model) { ?>
      <div class="modal fade" id="<?php echo $model['title'] ?>" tabindex="-1" data-position="<?php echo $model['Position'] ?>" aria-labelledby="NetModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="NetModalLabel">Position: <?php echo $model['Position'] ?></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <p class="font-weight-bold">Experience: <span class="font-weight-light text-secondary"> <?php echo $model['Experience'] ?></span></p>
                  <p class="font-weight-bold">Skillset: <span class="font-weight-light text-secondary"> <?php echo $model['Skillset'] ?></span></p>
                  <p class="font-weight-bold">Vacancy: <span class="font-weight-light text-secondary"> <?php echo $model['Vacancy'] ?></span></p>
                  <h5>Job Description: </h5>
                  <p class="text-justify"> <?php echo $model['Job_description'] ?> </p>
                  <h5>Responsibilities: </h5>
                  <ul class="bullet-point mb-3">
                     <?php foreach ($model['responsibilities'] as $responsibilities) { ?>
                        <li><?php echo  $responsibilities; ?></li>
                     <?php } ?>
                  </ul>
                  <h5>Requirements: </h5>
                  <?php foreach ($model['requirements'] as $requirements) {
                     echo  "<li>" . $requirements . "</li>";
                  } ?>
                  <p>
                     Share your resume on <a href="mailto:careers@brainerhub.com"> careers@brainerhub.com</a> if you think that your profile is matching with the job requirements. Or apply directly over here…
                  </p>
                  <div id="<?php echo $model['title'] ?>career_form">

                  </div>
               </div>
            </div>
         </div>
      </div>
   <?php } ?>

   <template id="career_form_template">
      <div class="forms mt-5">
         <div class="row">
            <div class="col-md-12">
               <form class="gray-circle gray-dott-bottom mb-4" method="post" id="career_form_from" action="contact_career.php" enctype="multipart/form-data">
                  <input type="text" hidden id="post-input" name="post" required>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="fname">First Name<span>*</span></label>
                        <input type="text" class="form-control" id="fname" name="fname" required>
                     </div>
                     <div class="form-group col-md-6">
                        <label for="lname">Last Name<span>*</span></label>
                        <input type="text" class="form-control" id="lname" name="lname" required>

                     </div>
                     <div class="form-group col-md-6">
                        <label for="email">Email<span>*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>

                     </div>
                     <div class="form-group col-md-6">
                        <label for="phone">Phone<span>*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" required>

                     </div>
                  </div>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label for="id">Resume/CV</label>
                        <input type="file" id="file" name="file" class="form-control" required accept=".pdf,.doc,.jpg,.png ">

                     </div>
                     <div class="form-group col-md-6">
                        <label for="experience">Total Experience<span>*</span></label>
                        <input type="experience" name="experience" class="form-control" id="experience" required>

                     </div>
                  </div>
                  <div class="form-group">
                     <label for="inputAddress">How did you hear about this job? </label>
                     <textarea name="hear_about" class="form-control" maxlength="200"></textarea>
                  </div>
                  <div class="g-recaptcha" data-sitekey="<?php echo $sitekey; ?>"></div>
                  <span id="captcha" style="margin-left:100px;color:red"></span>
                  <button class="submit btn btn-danger float-right px-5 mt-3">Apply Now</button>
               </form>
            </div>
         </div>
      </div>
   </template>
   <?php include 'includes/footer.php'; ?>
   <script src="https://www.google.com/recaptcha/api.js"></script>
   <script>
      jQuery.validator.addMethod("lettersonly", function(value, element) {
         return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Letters only please");

      $(".open-model").on('click', function() {
         var model = $(this).data('target');
         var form_html = $('#career_form_template').html();

         var post = $(this).siblings('.post').html();

         $(model + 'career_form').html(form_html);
         createRecaptcha();
         $('#post-input').val(post);

         $(function onSubmit(token) {
            $("#career_form_from").validate({
               rules: {
                  fname: {
                     required: true,
                     minlength: 3,
                     maxlength: 30,
                     lettersonly: true
                  },
                  post: "required",
                  lname: {
                     required: true,
                     minlength: 3,
                     maxlength: 30,
                     lettersonly: true
                  },
                  email: {
                     required: true,
                     email: true
                  },
                  phone: {
                     number: true,
                     maxlength: 15
                  },
                  file: {
                     required: true,
                  },
                  experience: "required"
               },
               messages: {
                  file: {
                     required: "Please Add File"
                  },
                  email: {
                     required: "Please enter your Email",
                     email: "type"
                  },
                  fname: "Please enter your First Name",
                  lname: "Please enter your Last Name",
                  phone: "Please enter your Phone No.",
                  experience: "Please enter your Experience"
               },
               submitHandler: function(form) {
                  form.submit();
               }
            });
         });
      });


      function createRecaptcha() {
         grecaptcha.render("captcha", {
            sitekey: "6LcnViAmAAAAAMduB3Tm0MZr8kvXw8O3MbtSBB88",
            theme: "light"
         });
      }
   </script>
   <style>
      .error {
         color: red;
      }
   </style>