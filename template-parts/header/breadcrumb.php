 <!-- Page Banner Start -->
 <section class="page-banner-area bgs-cover py-135 rpy-100" style="background-image: url(<?= the_field("banner_image"); ?>);">
     <div class="container">
         <div class="banner-inner text-center">
             <h1 class="page-title wow color-black fadeInUp delay-0-2s"><?= the_field('banner_title') ?></h1>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb justify-content-center mb-5 wow fadeInUp delay-0-4s color-black">
                     <li class="breadcrumb-item color-black"><a href="<?php echo home_url(); ?>">Home</a></li>
                     <li class="breadcrumb-item active color-black"><?= the_field('banner_title') ?></li>
                 </ol>
             </nav>
         </div>
     </div>
 </section>
 <!-- Page Banner End -->