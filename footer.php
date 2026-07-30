
   <footer>

      <!-- footer area start -->
      <div class="tp-footer-area tp-footer-space p-relative z-index-3 black-bg">
         <div class="tp-footer-shape-1 d-none d-lg-block">
            <img src="assets/img/footer/shape-1-1.png" alt="shape-1-1" loading="lazy">
         </div>
         <div class="tp-footer-shape-2 d-none d-lg-block">
            <img src="assets/img/footer/shape-1-2.png" alt="shape-1-2" loading="lazy">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-footer-widget footer-cols-1">
                     <div class="tp-footer-logo">
                        <a href="index.php"><img src="assets/images/ckt-white-logo-new.png" alt="Chaitra Konnex Technology Logo"></a>
                     </div>
                     <div class="tp-footer-text">
                      <p>
Chaitra Konnex Technology is a trusted Wire Harness Assembly Manufacturer and
multi-channel supplier of electrical and electronic components. We specialize
in wire harness assemblies, pigtail harnesses, custom cable assemblies, connectors, 
terminals, wires, cables, and related accessories. Through our strong sourcing and procurement network, 
we deliver quality products and reliable solutions for defence, automotive,
industrial, solar, home appliance, and other applications. With a commitment 
to quality, precision, and customer satisfaction, we help bring your ideas to life.
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
                           <li><a href="client.php"><i class="fa-sharp fa-solid fa-plus"></i>Clients</a></li>
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
                           <li><a href="militarydefence.php"><i class="fa-sharp fa-solid fa-plus"></i>Military & Defence</a></li>
                           <li><a href="automotive.php"><i class="fa-sharp fa-solid fa-plus"></i>Automotive</a></li>
                            <li><a href="electricvehicles.php"><i class="fa-sharp fa-solid fa-plus"></i>Electric Vehicles</a></li>
                           <li><a href="renewableenergy.php"><i class="fa-sharp fa-solid fa-plus"></i>Renewable Energy</a></li>
                          <li><a href="homeappliances.php"><i class="fa-sharp fa-solid fa-plus"></i>Home Appliances</a></li>
                           <li><a href="farmagriculturalequipment.php"><i class="fa-sharp fa-solid fa-plus"></i>Farm & Agricultural Equipment</a></li>
                           <li><a href="industrialcontrolpanel.php"><i class="fa-sharp fa-solid fa-plus"></i>Industrial Control Panel Harness Solution</a></li>
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
           <p class="mb-0 text-light">
    &copy; Copyright <?php echo date('Y'); ?> Chaitra Konnex Technology (CKT). All Rights Reserved.
</p>
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

const nameInput = document.getElementById("name");
const mobileInput = document.getElementById("mobile");
const serviceInput = document.getElementById("service");

// Allow letters and spaces only in Name field
nameInput.addEventListener("input", function () {
    this.value = this.value.replace(/[^A-Za-z\s]/g, "").slice(0, 50);
});

// Allow digits only in Mobile field, max 10 digits
mobileInput.addEventListener("input", function () {
    this.value = this.value.replace(/\D/g, "").slice(0, 10);
});

document.getElementById("whatsappForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const name = nameInput.value.trim();
    const mobile = mobileInput.value.trim();
    const service = serviceInput.value.trim();

    if (!name || !/^[A-Za-z\s]+$/.test(name)) {
        alert("Please enter a valid name (letters only).");
        return;
    }

    if (mobile.length !== 10) {
        alert("Please enter a valid 10 digit mobile number.");
        return;
    }

    if (!service) {
        alert("Please enter the service you require.");
        return;
    }

    const whatsappNumber = "919552877322";
    const message = `Hello,%0A%0AI would like to enquire about your services.%0A%0AName: ${encodeURIComponent(name)}%0AContact: ${encodeURIComponent(mobile)}%0AService: ${encodeURIComponent(service)}`;
    const url = `https://wa.me/${whatsappNumber}?text=${message}`;

    window.open(url, "_blank");
});

// Contact page form validation
const contactForm = document.getElementById("contactForm");

if (contactForm) {

    const contactName = document.getElementById("contactName");
    const contactEmail = document.getElementById("contactEmail");
    const contactMobile = document.getElementById("contactMobile");
    const contactSubject = document.getElementById("contactSubject");
    const contactMessage = document.getElementById("contactMessage");

    // Allow letters and spaces only in Name field
    contactName.addEventListener("input", function () {
        this.value = this.value.replace(/[^A-Za-z\s]/g, "").slice(0, 50);
    });

    // Allow digits only in Mobile field, max 10 digits
    contactMobile.addEventListener("input", function () {
        this.value = this.value.replace(/\D/g, "").slice(0, 10);
    });

    contactForm.addEventListener("submit", function (e) {

        const name = contactName.value.trim();
        const email = contactEmail.value.trim();
        const mobile = contactMobile.value.trim();
        const subject = contactSubject.value.trim();
        const message = contactMessage.value.trim();
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!name || !/^[A-Za-z\s]+$/.test(name)) {
            e.preventDefault();
            alert("Please enter a valid name (letters only).");
            return;
        }

        if (!email || !emailPattern.test(email)) {
            e.preventDefault();
            alert("Please enter a valid email address.");
            return;
        }

        if (mobile.length !== 10) {
            e.preventDefault();
            alert("Please enter a valid 10 digit mobile number.");
            return;
        }

        if (!subject) {
            e.preventDefault();
            alert("Please enter a subject.");
            return;
        }

        if (!message) {
            e.preventDefault();
            alert("Please enter your message.");
            return;
        }

    });

}

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
