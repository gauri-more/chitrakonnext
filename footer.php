
   <footer>

      <!-- footer area start -->
      <div class="tp-footer-area tp-footer-space p-relative z-index-3 black-bg">
         <div class="tp-footer-shape-1 d-none d-lg-block">
            <img src="assets/img/footer/shape-1-1.png" alt="">
         </div>
         <div class="tp-footer-shape-2 d-none d-lg-block">
            <img src="assets/img/footer/shape-1-2.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-footer-widget footer-cols-1">
                     <div class="tp-footer-logo">
                        <a href="index.php"><img src="assets/Images/ckt-white-logo-new.png" alt="logo" ></a>
                     </div>
                     <div class="tp-footer-text">
                      <p>
CKT is a trusted manufacturer of premium wire harnesses, providing innovative connectivity solutions for automotive,
industrial, and electrical applications. We are committed to delivering quality products with precision and on-time execution.
</p>
                     </div>
                     <div class="tp-footer-contact">
                        <a href="mailto:Chaitrakt.marketing@gmail.com"><i
                              class="flaticon-mail-1"></i>Chaitrakt.marketing@gmail.com</a>
                       <a href="https://maps.google.com/?q=Ground+Floor,+Gate+No+2075,+Kude+Farm,+Old+Pune-Mumbai+Highway,+Opp.+Vakratunda+Tyres,+Vadgaon,+Maval,+Pune+412106"
   target="_blank"
   rel="noopener noreferrer">
    <i class="flaticon-location-1"></i>
    Ground Floor, Gate No: 2075, Kude Farm, Old Pune-Mumbai Highway, Opp. Vakratunda Tyres, Vadgaon, Maval, Pune - 412106.
</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-footer-widget footer-cols-2">
                     <h4 class="tp-footer-title">Useful Links</h4>
                     <div class="tp-footer-list">
                        <ul>
                           <li><a href="about-us.php"><i class="fa-sharp fa-solid fa-plus"></i>About CKT</a></li>
                             <li><a href="product.php"><i class="fa-sharp fa-solid fa-plus"></i>Products</a></li>
                           <li><a href="gallery.php"><i class="fa-sharp fa-solid fa-plus"></i>Gallery</a></li>
                           <li><a href="certification.php"><i class="fa-sharp fa-solid fa-plus"></i> Certification</a></li>
                           <li><a href="Client.php"><i class="fa-sharp fa-solid fa-plus"></i>Clients</a></li>
                           <li><a href="contact.php"><i class="fa-sharp fa-solid fa-plus"></i>Contact</a></li>
                        
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="tp-footer-widget footer-cols-3">
                     <h4 class="tp-footer-title">Industries</h4>
                     <div class="tp-footer-list">
                        <ul>
                           <li><a href="MilitaryDefence.php"><i class="fa-sharp fa-solid fa-plus"></i>Military & Defence</a></li>
                           <li><a href="Automotive.php"><i class="fa-sharp fa-solid fa-plus"></i>Automotive</a></li>
                            <li><a href="ElectricVehicles.php"><i class="fa-sharp fa-solid fa-plus"></i>Electric Vehicles</a></li>
                           <li><a href="RenewableEnergy.php"><i class="fa-sharp fa-solid fa-plus"></i>Renewable Energy</a></li>
                          <li><a href="HomeAppliances.php"><i class="fa-sharp fa-solid fa-plus"></i>Home Appliances</a></li>
                           <li><a href="FarmAgriculturalEquipment.php"><i class="fa-sharp fa-solid fa-plus"></i>Farm & Agricultural Equipment</a></li>
                           <li><a href="IndustrialControlPanel.php"><i class="fa-sharp fa-solid fa-plus"></i>Industrial Control Panel Harness Solution</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer area end -->

      <!-- copy-right area start -->
      <div class="tp-copyright-area tp-copyright-space black-bg-2">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-copyright-left text-center text-md-start">
               <p style="color: #ccc;">© Copyright <?php echo date('Y'); ?> Chaitra Konnex Technology (CKT). All Rights Reserved.</p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-copyright-social text-center text-md-end">
                 <a href="https://www.linkedin.com/company/105155808/" 
   target="_blank" 
   rel="noopener noreferrer" 
   aria-label="LinkedIn">
    <i class="fa-brands fa-linkedin-in"></i>
</a>
                   
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- copy-right area end -->

   </footer>
   <script>

document.getElementById("whatsappForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = document.getElementById("name").value.trim();
    const mobile = document.getElementById("mobile").value.trim();
    const service = document.getElementById("service").value.trim();

    const whatsappNumber = "919552877322"; // Country code +91

    const message =
`Hello,

I would like to enquire about your services.

Name: ${name}
Mobile: ${mobile}
Service: ${service}`;

    const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;

    window.open(url, "_blank");
});

</script>
   <!-- JS here -->
   
   <script src="assets/js/vendor/jquery.js"></script>
   <script src="assets/js/vendor/waypoints.js"></script>
   <script src="assets/js/bootstrap-bundle.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   <script src="assets/js/slick.js"></script>
   <script src="assets/js/range-slider.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/nice-select.js"></script>
   <script src="assets/js/purecounter.js"></script>
   <script src="assets/js/wow.js"></script>
   <script src="assets/js/isotope-pkgd.js"></script>
   <script src="assets/js/jarallax.js"></script>
   <script src="assets/js/imagesloaded-pkgd.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js"></script>

   
</body>

</html>