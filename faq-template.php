<?php
/*
Template Name: FAQ-Page Template
*/
    get_header(  );
?>

<?php
 $faq_title = cs_get_option( 'faq_title' );
 $faq_desc = cs_get_option( 'faq_desc' );

?>

        <!-- ---------- FAQ ABOUT AREA START ---------- -->
        <section class="about-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php echo $faq_title; ?></h3>
                        <p class="about-details">
                            <?php echo $faq_desc; ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---------- FAQ ABOUT AREA END ---------- -->

        <!-- ---------- FAQ-2 AREA START ---------- -->
        <?php get_template_part( 'Template-Parts/faq2' ); ?>
        <!-- ---------- FAQ-2 AREA END ---------- -->


        <!-- ---------- Form AREA START ---------- -->
        <?php get_template_part( 'Template-Parts/form' ); ?>
        <!-- ---------- Form AREA END ---------- -->


<?php
    get_footer(  );
?>