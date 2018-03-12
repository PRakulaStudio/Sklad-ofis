<?php if (is_callable('getItemData')): ?>
    <li>
        <div class='card_wrapper qwe'>
            <div class="title"><?= getItemData('title'); ?></div>

            <a href="<?= getItemData('href'); ?>">
                <img alt=""
                     src="<?= getImageThumb(getItemData('cover_image'), 246, 110); ?>">
            </a>

            <span class='z_id'><?= getItemData('id'); ?></span>
            <p data-container="var_adress">
                Район: <span class='bold'><?= getItemData('region'); ?></span>
            </p>
            <p data-container="var_cost">
                Цена за метр в, руб.: <span class='bold'><?= getItemData('price'); ?>
                    <?= getItemData('price_dimension'); ?></span>
            </p>
            <p data-container="var_square" class="p--last-value">
                Общая площадь: <span class='bold'><?= getItemData('space'); ?>
                    <?= getItemData('space_dimension'); ?></span>
            </p>
        </div>
        <a href="ostavit_zayavku/" class="zajavka">
            Оставить заявку
        </a>
        <a href="<?= getItemData('href'); ?>" class="more">
            Подробнее>>
        </a>
        <p class="clear"></p>
    </li>
<?php endif; ?>