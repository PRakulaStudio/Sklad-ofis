<?php if (is_callable('getData')): ?>
    <li>
        <div class='card_wrapper qwe'>
            <div class="title"><?= getData('title'); ?></div>

            <a href="<?= getData('href'); ?>">
                <img alt=""
                     src="<?= ($image = getData('images')) && $image != '' ? $image['300'] : '/assets/images/index.php' ?>">
            </a>

            <span class='z_id'><?= getData('id'); ?></span>
            <p data-container="var_adress">
                Район: <span class='bold'><?= getData('region'); ?></span>
            </p>
            <p data-container="var_cost">
                Цена за метр в, руб.: <span class='bold'><?= getData('price'); ?>
                    <?= getData('price_dimension'); ?></span>
            </p>
            <p data-container="var_square" class="p--last-value">
                Общая площадь: <span class='bold'><?= getData('space'); ?>
                    <?= getData('space_dimension'); ?></span>
            </p>
        </div>
        <a href="#" class="zajavka">
            Оставить заявку
        </a>
        <a href="<?= getData('href'); ?>" class="more">
            Подробнее>>
        </a>
        <p class="clear"></p>
    </li>
<?php endif; ?>