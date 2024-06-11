<?php
/*
Template Name: Страница - Главная
*/

$phone_number = "79293612364";
$formatted_phone_number = preg_replace('/(\d{1})(\d{3})(\d{3})(\d{2})(\d{2})/', '+7 ($2) $3 $4 $5', $phone_number);
?>
<?php get_header(); ?>
    <main>
        <section class="intro section">
            <div class="intro__inner">
                <div class="container">
                    <h1 class="intro__title title-section"><?php the_field('zagolovok_intro'); ?></h1>
                    <div class="intro__desc">
                        <?php the_field('opisanie_intro'); ?>
                    </div>
                    <a href="#contact" class="btn btn--orange-bg">Заказать</a>
                </div>
            </div>
            <?php 
            $image = get_field('kartinka_intro');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </section><!-- intro -->

        <section id="about" class="about section">
            <div class="about_inner">
                <div class="container">
                    <h2 class="title-section"><?php the_field('zagolovok_o_nas'); ?></h2>
                    <div class="about__desc">
                        <?php the_field('opisanie_o_nas'); ?>
                    </div>
                </div>
            </div>
        </section><!-- about -->

        <section id="services" class="services section">
            <div class="services__inner">
                <div class="container">
                    <h2 class="title-section"><?php the_field('zagolovok_uslugi_i_czeny'); ?></h2>
                    <?php if( have_rows('blok_uslugi_i_czeny') ): ?>
                        <ul class="list services-list">
                        <?php while( have_rows('blok_uslugi_i_czeny') ): the_row(); 
                            $image = get_sub_field('kartinka_uslugi');
                            ?>
                            <li class="services-item">
                                <div class="services-item__img">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                                </div>                                
                                <h3><?php the_sub_field('zagolovok_uslugi'); ?></h3>
                                <div class="services-item__desc">
                                    <?php the_sub_field('opisanie_uslugi'); ?>
                                </div>
                                <div class="services-item__price">
                                    <?php the_sub_field('czena_uslugi'); ?> руб.
                                </div>
                                <a href="#<?php the_sub_field('link'); ?>" class="btn btn--border">Подробнее</a>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section><!-- services -->

        <section id="ekg" class="full-block section">
            <div class="full-block__inner">
                <div class="container">
                    <h2 class="title-section"><?php the_field('blok_ekg_-_zagolovok'); ?></h2>
                    <div class="full-block__desc">
                        <?php the_field('blok_ekg_-_opisanie'); ?>
                    </div>
                    <?php if( have_rows('blok_ekg_-_kartinki') ): ?>
                        <ul class="list images-list">
                        <?php while( have_rows('blok_ekg_-_kartinki') ): the_row(); 
                            $image = get_sub_field('blok_ekg_-_kartinka');
                            ?>
                            <li class="services-item">
                                <figure class="services-item__img">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                                    <figcaption><?php the_sub_field('blok_ekg_-_podpis_kartinki'); ?></figcaption>
                                </figure>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    <a href="#contact" class="btn btn--orange-bg">Заказать холтер ЭКГ</a>
                </div>
            </div>
        </section><!-- full-block ekg -->

        <section id="smad" class="full-block section">
            <div class="full-block__inner">
                <div class="container">
                    <h2 class="title-section"><?php the_field('blok_smad_-_zagolovok'); ?></h2>
                    <div class="full-block__desc">
                        <?php the_field('blok_smad_-_opisanie'); ?>
                    </div>
                    <?php if( have_rows('blok_smad_-_kartinki') ): ?>
                        <ul class="list images-list">
                        <?php while( have_rows('blok_smad_-_kartinki') ): the_row(); 
                            $image = get_sub_field('blok_smad_-_kartinka');
                            ?>
                            <li class="services-item">
                                <figure class="services-item__img">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                                    <figcaption><?php the_sub_field('blok_smad_-_podpis_kartinki'); ?></figcaption>
                                </figure>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    <a href="#contact" class="btn btn--orange-bg">Заказать СМАД</a>
                </div>
            </div>
        </section><!-- full-block smad -->

        <section id="team" class="section team">
            <div class="section-inner">
                <div class="container">
                    <h2><?php the_field('nashi_speczialisty_-_zagolovok'); ?></h2>
                    <div class="team__desc">
                        <?php the_field('nashi_speczialisty_-_opisanie'); ?>
                    </div>
                    <div class="messenger-list">
                        <?php include('includes/messengers-dark.php')?>
                        <a class="link-text-color link-text-color--phone" href="tel:79293612364"><?php echo $formatted_phone_number?></a>
                    </div>
                    <a href="#" class="btn btn--border">Подробнее о специалистах</a>
                </div>
            </div>
        </section><!-- team -->

        <section class="payment section">
            <div class="payment__inner">
                <div class="container">
                    <ul class="list payment__list">
                        <li class="paiment__item paiment__item--title">
                            <h2>Способы оплаты</h2>
                            <div class="list payment__desc">
                                <p>Вы можете выбрать удобный для вас вариант оплаты наших услуг.</p>                                
                            </div>
                        </li>
                        <li class="paiment__item paiment__item--type">
                            <svg width="86" height="86">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-cash"></use>
                            </svg>
                            <span>Наличные</span>
                        </li>
                        <li class="paiment__item paiment__item--type">
                            <svg width="86" height="86">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#ico-QR"></use>
                            </svg>
                            <span>QR код</span>
                        </li>                 
                    </ul>
                </div>
            </div>
        </section><!-- payment -->

        <section id="contact" class="contact">
            <div class="contact__inner">
                <div class="container">
                    <div class="contact__wrapper">
                        <div class="contact__messengers">
                            <span class="label-block">Мы на связи!</span>
                            <h2>Контакты</h2>
                            <div class="messenger-list">
                                <?php include('includes/messengers-dark.php')?>
                            </div>
                            <div class="label-messengers">
                                Телефон, Whatsapp, Telegram
                            </div>
                            <a class="link-text-color link-text-color--phone" href="tel:79293612364"><?php echo $formatted_phone_number?></a>
                            <svg width="32" height="32">
                                <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-email-dark"></use>
                            </svg>
                            <div class="label-email">
                                Email
                            </div>
                            <a class="link-text-color link-text-color--email" href="mailto:zakaz@smartmed.ru">zakaz@smartmed.ru</a>
                        </div>

                        <div class="contact__form">
                            <span class="label-block">Оставьте заявку</span>
                            <h2>Напишите нам</h2>
                            <div class="form" data-form-validate data-callback="base" data-parent-validate="base">
                                <form method="post" action="<?php echo get_template_directory_uri() ?>/report.php" name="contactform">
                                    <div class="group group--form">
                                    <div class="custom-input" data-validate-type="text" data-limitation="name" data-on-input-validate data-required data-message-base="Поле обязательно к заполнению" data-message-success="Поле заполнено верно">
                                        <label for="name">Имя</label>
                                        <input id="name" name="name" type="text" minlength="2" required>
                                    </div>

                                    <div class="custom-input" data-validate-type="phone" data-on-input-validate data-required data-message-base="Поле обязательно к заполнению" data-message-success="Поле заполнено верно">
                                        <label for="tel">Телефон</label>
                                        <input id="tel" name="tel" type="tel" required>
                                    </div>

                                    <div class="custom-textarea">
                                        <label for="message">Сообщение</label>
                                        <textarea id="message" name="message"></textarea>
                                    </div>

                                    </div>
                                    <span>Отправляя заявку, вы принимаете <a class="link-data" href="#">условия обработки персональных данных</a></span>
                                    <input id="check" name="check" type="hidden" value="">
                                    <button class="btn btn--orange-bg" type="submit" onclick="document.getElementById('check').value = 'nospam';">Отправить</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- contact__wrapper -->                
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>