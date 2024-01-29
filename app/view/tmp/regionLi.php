<?php
/**
 * @var string $region
 * @var string $description
 * @var string $cityTemplate
 */
?>
<li class='list-group-item active'>
<div class="region pt-1 pb-1" data-toggle="tooltip" data-placement="left" title="<?= $description ?>"><?= $region ?></div>
    <ul class='list-group'>
        <?= $cityTemplate ?>
    </ul>
</li>