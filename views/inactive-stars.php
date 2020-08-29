<div class="Bestwebsite-stars-inactive">
    <?php for ($i = 1; $i <= $best; $i++) : ?>
        <div class="Bestwebsite-star" data-star="<?= $i ?>">
            <?= \Bestwebsite\StarRating\view('inactive-star') ?>
        </div>
    <?php endfor; ?>
</div>
