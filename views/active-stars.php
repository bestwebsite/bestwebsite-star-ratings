<div class="Bestwebsite-stars-active" style="width: <?= $width ?>px;">
    <?php for ($i = 1; $i <= $best; $i++) : ?>
        <div class="Bestwebsite-star">
            <?= \Bestwebsite\StarRating\view('active-star') ?>
        </div>
    <?php endfor; ?>
</div>
