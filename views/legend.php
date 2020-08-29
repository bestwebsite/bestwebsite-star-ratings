<div class="Bestwebsite-legend">
    <?php if ($count) : ?>
        <strong class="Bestwebsite-score"><?= $score ?></strong>
        <span class="Bestwebsite-muted">/</span>
        <strong><?= $best ?></strong>
        <span class="Bestwebsite-muted">(</span>
        <strong class="Bestwebsite-count"><?= $count ?></strong>
        <span class="Bestwebsite-muted">
            <?= _n('vote', 'votes', $count, 'Bestwebsite-star-ratings') ?>
        </span>
        <span class="Bestwebsite-muted">)</span>
    <?php else : ?>
        <span class="Bestwebsite-muted"><?= $greet ?></span>
    <?php endif; ?>
</div>
