<?php
    $phone_number = "79087955400";
?>
<a href="tel:<?php echo $phone_number?>" target="_blank">
    <svg width="30" height="30">
        <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-phone-dark"></use>
    </svg>
    <span class="visually-hidden">телефон</span>
</a>

<a href="https://wa.me/<?php echo $phone_number?>" target="_blank">
    <svg width="30" height="30">
        <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-whatsapp-dark"></use>
    </svg>
    <span class="visually-hidden">whatsApp</span>
</a>

<a href="https://t.me/+<?php echo $phone_number?>" target="_blank">
    <svg width="30" height="30">
        <use xlink:href="<?php echo get_template_directory_uri() ?>/assets-gulp/build/img/sprite.svg#icon-telegram-dark"></use>
    </svg>
    <span class="visually-hidden">телеграм</span>
</a>