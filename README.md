# custom-post-mix
Custom post mixItup, if you use it. you can easily create a custom post, taxonomics and put your required title content and images. If you show your desire data as a filter system.

Installation process: 
1/ Just download this plugins and put in wordpress plugins directory. 
2/ one click intallation 
3/ Now if you create a new page Please insert this SHORTCODE: [making_a_git]
4/ If you went to show this please create a new template in your wordpress theme directory link this: wp-content/themes/your-theme/page-template/my-template.php
  -> <?php
    /*
    Template name: name of template 
    */
    
    get_header();
    echo do_shortcode('[making_a_git]');
    get_footer();
    
    ?>
Go back to your wp dashboard and create a new page SELECT your "name of template";      
