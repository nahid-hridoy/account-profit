<?php
/*
Template Name: HomePage Template
*/
?>

<?php
    get_header(  );
?>

        <!-- ---------- SERVICE AREA START ---------- -->
        <?php get_template_part( 'Template-Parts/services' ); ?>
        <!-- ---------- SERVICE AREA END ---------- -->



        <!-- ---------- CLIENT AREA START ---------- -->
        <?php get_template_part( 'Template-Parts/client' ); ?>
        <!-- ---------- CLIENT AREA END ---------- -->



        <!-- ---------- FAQ AREA START ---------- -->
        <?php get_template_part( 'Template-Parts/faq' ); ?>
        <!-- ---------- FAQ AREA END ---------- -->


        <!-- ---------- CONTACT FORM AREA START ---------- -->
        <?php get_template_part( 'Template-Parts/form' ); ?>
        <!-- ---------- CONTACT FORM AREA END ---------- -->


<?php
    get_footer(  );
?>