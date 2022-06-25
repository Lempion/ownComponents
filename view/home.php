<?php
$notes = [
    ['title' => 'Работа по дому', 'text' => 'Заказать светильник'],
    ['title' => 'Поогулять с Джеком', 'text' => 'Погулять с Джеком пару часов'],
    ['title' => 'Созвон в скайпе', 'text' => 'В 12 00 созвон'],
]
?>
<div class="container px-4 py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <?php foreach ($notes as $key => $dataNote): ?>
            <div class="col d-flex align-items-start">
                <div>
                    <h4 class="fw-bold mb-0"><?php echo $dataNote['title']; ?></h4>
                    <p><?php echo $dataNote['text']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>