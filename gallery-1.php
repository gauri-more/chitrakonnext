
<?php include 'header1.php'; ?>

   <main>

      <!-- breadcrumb area start -->
      <div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix" data-background="assets/Images/breadcurmb.webp">
         <div class="container">
            <div class="row">
               <div class="col-xxl-12">
                  <div class="breadcrumb__content z-index d-flex justify-content-between align-items-end">
                     <div class="breadcrumb__section-title-box">
                        <h4 class="breadcrumb__subtitle">CKT- WIRE HARNESS SERVICE</h4>
                        <h3 class="breadcrumb__title">Gallery</h3>
                     </div>
                     <div class="breadcrumb__list">
                        <span><a href="index.php">Home</a></span>
                        <span class="dvdr"><i>/</i></span>
                        <span>Gallery</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- breadcrumb area end -->


<div class="">
    test
</div>
   </main>
<script>
    $(document).ready(function () {

    $('.tp-main-menu-mobile .menu-item-has-children > a').on('click', function (e) {

        e.preventDefault();

        var $parent = $(this).parent();

        $parent.toggleClass('open');

        $parent.children('.sub-menu').stop(true, true).slideToggle(300);

    });

});
</script>
<?php include 'footer.php'; ?>