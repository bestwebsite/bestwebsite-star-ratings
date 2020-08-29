<div style="display: none;"
    class="Bestwebsite-star-ratings <?= $valign ? ("Bestwebsite-valign-{$valign}") : '' ?> <?= $align ? ("Bestwebsite-align-{$align}") : '' ?> <?= $disabled ? 'Bestwebsite-disabled' : '' ?>"
    data-id="<?= $id ?>"
    data-slug="<?= $slug ?>">
    <?= \Bestwebsite\StarRating\view('stars') ?>
    <?= \Bestwebsite\StarRating\view('legend') ?>
</div>
