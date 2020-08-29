<?php if ($gap !== false) : ?>
    .Bestwebsite-star-ratings .Bestwebsite-stars .Bestwebsite-star {
        margin-right: <?= $gap ?>px;
    }
    [dir="rtl"] .Bestwebsite-star-ratings .Bestwebsite-stars .Bestwebsite-star {
        margin-left: <?= $gap ?>px;
        margin-right: 0;
    }
<?php endif; ?>

<?php if ($stars['inactive']) : ?>
    .Bestwebsite-star-ratings .Bestwebsite-stars .Bestwebsite-star .Bestwebsite-icon,
    .Bestwebsite-star-ratings:not(.Bestwebsite-disabled) .Bestwebsite-stars .Bestwebsite-star:hover ~ .Bestwebsite-star .Bestwebsite-icon {
        background-image: url("<?= $stars['inactive'] ?>");
    }
<?php endif; ?>

<?php if ($stars['active']) : ?>
    .Bestwebsite-star-ratings .Bestwebsite-stars .Bestwebsite-stars-active .Bestwebsite-star .Bestwebsite-icon {
        background-image: url("<?= $stars['active'] ?>");
    }
<?php endif; ?>

<?php if ($stars['selected']) : ?>
    .Bestwebsite-star-ratings.Bestwebsite-disabled .Bestwebsite-stars .Bestwebsite-stars-active .Bestwebsite-star .Bestwebsite-icon,
    .Bestwebsite-star-ratings:not(.Bestwebsite-disabled) .Bestwebsite-stars:hover .Bestwebsite-star .Bestwebsite-icon {
        background-image: url("<?= $stars['selected'] ?>");
    }
<?php endif; ?>