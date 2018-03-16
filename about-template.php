<?php
/*
Template Name: About-Company Template
*/
    get_header(  );
?>



<?php
 $about_title = cs_get_option( 'about_company_title' );
 $about_desc = cs_get_option( 'about_company_desc' );

?>

        <!-- ---------- ABOUT AREA START ---------- -->
        <section class="about-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="about-page-heading"><?php echo $about_title; ?></h3>
                        <p class="about-details">
                            <?php echo $about_desc; ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---------- ABOUT AREA END ---------- -->



        <!-- ---------- FORM AREA START ---------- -->
        <?php get_template_part( 'Template-Parts/form' ); ?>
        <!-- ---------- FORM AREA END ---------- -->


<?php
    get_footer(  );
?>