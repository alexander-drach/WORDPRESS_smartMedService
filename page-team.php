<?php
/*
Template Name: Страница - Специалисты
*/
?>
<?php get_header(); ?>
    <main class="team-page">
        <div class="container">
            <h1 class="title-section"><?php the_title(); ?></h1>
            <?php if( have_rows('speczialisty') ): ?>
                <ul class="list team-list">
                <?php while( have_rows('speczialisty') ): the_row(); 
                    $image = get_sub_field('foto');
                    ?>
                    <li class="team-item">
                        <div class="team__photo">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                        </div>
                        <span class="last-name"><?php the_sub_field('familiya')?></span>
                        <span class="first-name"><?php the_sub_field('imya_otchestvo')?></span>                   
                        <span class="position"><?php the_sub_field('dolzhnost')?></span>

                        

                        <?php if( have_rows('opyt_raboty') ): ?>
                            <span class="label-position">Опыт работы:</span>
                            <ul class="list position-list">
                            <?php while( have_rows('opyt_raboty') ): the_row(); 
                                ?>
                                <li class="position-item">
                                    <?php the_sub_field('opyt_raboty_-_punkt')?>
                                </li>
                            <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>