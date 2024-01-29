<?php
/**
 * @var $titleH1 string
 * @var $html string
 */
?>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__title">
                    <h1><?= $titleH1 ?></h1>
                </div>
                <div class="header__language mb-2">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" data-lang="rus" class="btn btn-secondary get-lang">Русский</button>
                        <button type="button" data-lang="eng" class="btn btn-secondary get-lang">English</button>
                        <button type="button" data-lang="ger" class="btn btn-secondary get-lang">Deutsch</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?= $html ?>
    </div>
</div>