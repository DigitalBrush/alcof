<?php
function alcof_options(){
?> 


<div class="update-section">
    <form action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ) ?>" enctype="multipart/form-data" method="post" id="frm_options">
        <div class="options-header">

            <div class="brand">
                
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="title">
                    <span class="dashicons dashicons-admin-generic"></span>
                    Theme Options
                </div>
            </div>
            <div class="actions">
                <input type="submit" name="save_options_btn" value="Save all" class="btn btn-primary">
            </div>
        </div>
        <div class="container-fluid options-body">
            <div class="row">
                <div aria-orientation="vertical" class="col-md-2 nav flex-column nav-pills" id="alcofTab" role="tablist">
                    <a aria-controls="slider" aria-selected="true" class="nav-link active" data-toggle="tab" href="#slider" id="slider-tab" role="tab">Home Hero</a> 
                    <a aria-controls="services" aria-selected="true" class="nav-link" data-toggle="tab" href="#services" id="services-tab" role="tab">Services</a> 
                    <a aria-controls="about" aria-selected="true" class="nav-link" data-toggle="tab" href="#about" id="about-tab" role="tab">About</a>
                    <a aria-controls="location" aria-selected="true" class="nav-link" data-toggle="tab" href="#location" id="location-tab" role="tab">Locations</a>
                </div>
                <div class="col-md-10 tab-content" id="alcofTabOptions">
                    <?php include "tabs/homepage.php"; ?>         
                    <?php include "tabs/services.php"; ?>
                    <?php include "tabs/about.php"; ?>
                    <?php include "tabs/locations.php"; ?>
         
                </div>
            </div>
        </div>
    </form>
</div>
<?php } ?>







