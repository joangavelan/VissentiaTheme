<?php get_header(); ?>


    <h1>Resultados de búsqueda de "<?php the_search_query();?>"</h1>
    <?php get_template_part('includes/section', 'searchresults'); ?>  

<?php get_footer(); ?>