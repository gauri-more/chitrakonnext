
<?php include 'header.php'; ?>
<?php
$contactStatus = isset($_GET['status']) ? $_GET['status'] : '';
$contactMessage = isset($_GET['message']) ? htmlspecialchars(urldecode($_GET['message'])) : '';
?>

   <main>

      <!-- breadcrumb area start -->
          <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix" data-background="assets/images/breadcrumb.jpg">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content z-index d-flex justify-content-between align-items-end">
                     <div class="breadcrumb__section-title-box">
                        <h3 class="breadcrumb__title">Contact us</h3>
                     </div>
                     <div class="breadcrumb__list">
                        <span><a href="index.php">Home</a></span>
                        <span class="dvdr"><i>/</i></span>
                        <span>Contact us</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->

      <!-- contact area start -->
      <div class="tp-contact-3-area pt-70 pb-60">
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-contact-3-item text-center">
                     <div class="tp-contact-3-icon">
                        <span><img class="z-index" src="assets/img/contact/icon-1.png" alt="Location icon" loading="lazy"></span>
                     </div>
                     <div class="tp-contact-3-text">
                        <h5 class="tp-contact-3-title">Visit Our Place</h5>
                        <a href="https://www.google.com/maps/search/?api=1&query=Ground+Floor,+Gate+No:+2075,+Kude+Farm,+Old+Pune-Mumbai+Highway,+Opp.+Vakratunda+Tyres,+Vadgaon,+Maval,+Pune+412106" target="_blank" rel="noopener noreferrer">Ground Floor, Gate No: 2075, Kude Farm, Old Pune-Mumbai Highway, Opp. Vakratunda Tyres, Vadgaon, Maval, Pune - 412106.</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-contact-3-item text-center">
                     <div class="tp-contact-3-icon">
                        <span><img class="z-index" src="assets/img/contact/icon-2.png" alt="Contact icon" loading="lazy"></span>
                     </div>
                     <div class="tp-contact-3-text">
                        <h5 class="tp-contact-3-title">Contact Us</h5>
                        <a href="mailto:Chaitrakt.marketing@gmail.com">Chaitrakt.marketing@gmail.com</a> <br>
                        <a href="tel:+919552877322">+91 9552 877 322</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="tp-contact-3-item text-center">
                     <div class="tp-contact-3-icon">
                        <span><img class="z-index" src="assets/img/contact/icon-3.png" alt="Office hours icon" loading="lazy"></span>
                     </div>
                     <div class="tp-contact-3-text">
                        <h5 class="tp-contact-3-title">Office Time</h5>
                        <p>Six days, 9:00 am – 5:30 pm<br>Sunday closed</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact area end -->

      <!-- form area start -->
      <div class="tp-contact-form-area pb-130">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-md-6 col-12">
                  <div class="tp-contact-form-border">
                     <h4 class="tp-contact-form-title">Send your message</h4>
     <?php if ($contactStatus === 'success'): ?>
     <div class="contact-status success"><?php echo $contactMessage ?: 'Thank you! Your message has been sent successfully.'; ?></div>
     <?php elseif ($contactStatus === 'error'): ?>
     <div class="contact-status error"><?php echo $contactMessage ?: 'We could not send your message. Please try again later.'; ?></div>
     <?php endif; ?>
     <form action="send.php" method="POST" id="contactForm">
    <div class="row">

      <div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-20">
    <div class="tp-contact-form-input-box input-icon">
        <i class="fas fa-user"></i>
        <input type="text" name="name" id="contactName" placeholder="Enter your name"
            maxlength="50" pattern="[A-Za-z\s]+" title="Name should contain letters only" required>
    </div>
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-20">
    <div class="tp-contact-form-input-box input-icon">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="contactEmail" placeholder="Enter your email" maxlength="100" required>
    </div>
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-20">
    <div class="tp-contact-form-input-box input-icon">
        <i class="fas fa-phone-alt"></i>
        <input type="tel" name="mobile" id="contactMobile" placeholder="Enter your mobile number"
            inputmode="numeric" maxlength="10" pattern="[0-9]{10}" title="Enter a 10 digit mobile number" required>
    </div>
</div>

<div class="col-xl-6 col-lg-6 col-md-6 col-12 mb-20">
    <div class="tp-contact-form-input-box input-icon">
        <i class="fas fa-tag"></i>
        <input type="text" name="subject" id="contactSubject" placeholder="Your subject" maxlength="100" required>
    </div>
</div>

<div class="col-12 mb-20">
    <div class="tp-contact-form-input-box input-icon textarea-icon">
        <i class="fas fa-comment-dots"></i>
        <textarea name="message" id="contactMessage" placeholder="Write your message" maxlength="1000" required></textarea>
    </div>
</div>
        <div class="col-12">
            <button type="submit" class="tp-btn">
                Send Message
            </button>
        </div>

    </div>
</form>
                     
                  </div>
               </div>
                     <div class="col-xl-6 col-md-6 col-12">
         <!-- map area end -->
      <div class="tp-map-area">
         <div class="tp-map__item">
         <iframe
        src="https://www.google.com/maps?q=Chaitra+Konnex+Technology,+Ground+Floor,+Gat+No:+2075,+Kude+Farm,+Old+Pune-Mumbai+Highway,+Opp.+Vakratunda+Tyres,+Vadgaon,+Maval,+Pune+-+412106&output=embed"
        title="CKT office location map"
        allowfullscreen
        loading="lazy">
    </iframe>
        </div>
      </div>
      <!-- map area start -->
               </div>
            </div>
         </div>
      </div>
      <!-- form area end -->

   


   </main>


<?php include 'footer.php'; ?>

