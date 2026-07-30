
<?php include 'header.php'; ?>
<?php
$contactStatus = isset($_GET['status']) ? $_GET['status'] : '';
$contactMessage = isset($_GET['message']) ? htmlspecialchars(urldecode($_GET['message'])) : '';
$showContactToast = ($contactStatus === 'success' || $contactStatus === 'error');
$contactToastClass = $contactStatus === 'success' ? 'text-bg-success' : 'text-bg-danger';
$contactToastTitle = $contactStatus === 'success' ? 'Success' : 'Failed';
?>
<style>
 .tp-btn{
    position: relative;
    overflow: hidden;
    color: #fff !important;
    z-index: 1;
}

.tp-btn::after{
    z-index: -1;   /* Keep the overlay behind the text */
}

.tp-btn:hover{
    color: #fff !important;
}

.tp-btn:hover,
.tp-btn:hover span{
    color:#fff !important;
}
</style>
   <main>

      <?php if ($showContactToast): ?>
      <div class="position-fixed top-0 end-0 p-3" style="z-index:1080;">
         <div id="contactToast" class="toast align-items-center <?php echo $contactToastClass; ?> border-0" role="status" aria-live="polite" aria-atomic="true" data-bs-delay="4500">
            <div class="d-flex">
               <div class="toast-body">
                  <strong><?php echo $contactToastTitle; ?>:</strong>
                  <?php echo $contactMessage ?: 'Form submission status updated.'; ?>
               </div>
               <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
         </div>
      </div>
      <?php endif; ?>

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

<?php if ($showContactToast): ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
   var toastElement = document.getElementById("contactToast");
   if (toastElement) {
      var toast = new bootstrap.Toast(toastElement);
      toast.show();
   }
});
</script>
<?php endif; ?>


<?php include 'footer.php'; ?>

