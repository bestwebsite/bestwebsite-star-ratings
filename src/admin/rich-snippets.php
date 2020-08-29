<?php

/*
 * This file is part of Bestwebsite/Bestwebsite-star-ratings.
 *
 * (c) Bestwebsite <admin@Bestwebsite.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bestwebsite\StarRating;

if (! defined('ABSPATH')) {
    http_response_code(404);
    die();
}

$grs = [prefix('grs'), get_option(prefix('grs'))];
$sd = [prefix('sd'), get_option(prefix('sd'))];

$snippet = str_replace('[title]', 'Post title', $sd[1]);
$snippet = str_replace('[best]', '5', $snippet);
$snippet = str_replace('[score]', '4.3', $snippet);
$snippet = str_replace('[count]', '20', $snippet);

return [
    [
        'type' => 'checkbox',
        'title' => __('Status', 'Bestwebsite-star-ratings'),
        'label' => __('Enable', 'Bestwebsite-star-ratings'),
        'name' => $grs[0],
        'value' => true,
        'filter' => function ($bool) {
            return (string) $bool;
        },
        'checked' => checked($grs[1], '1', false),
        'help' => __('Enable/disable rich snippets.', 'Bestwebsite-star-ratings'),
    ],

    [
        'type' => 'code',
        'title' => __('Content', 'Bestwebsite-star-ratings'),
        'name' => $sd[0],
        'value' => $sd[1],
        'help' => implode('<br>', [
            sprintf(__('Provide the %s structure.', 'Bestwebsite-star-ratings'), '<code>ld+json</code>').'<br>',
            __('The following variables are available:', 'Bestwebsite-star-ratings').'<br>',
            sprintf(__('%s Post title.', 'Bestwebsite-star-ratings'), '<code>[title]</code>'),
            sprintf(__('%s Average post ratings.', 'Bestwebsite-star-ratings'), '<code>[score]</code>'),
            sprintf(__('%s Number of votes casted.', 'Bestwebsite-star-ratings'), '<code>[count]</code>'),
            sprintf(__('%s Total amount of stars.', 'Bestwebsite-star-ratings'), '<code>[best]</code>'),
            '<br>'.sprintf(
                __('You may <a href="%s" target="_blank">test the snippet here</a>.', 'Bestwebsite-star-ratings'),
                'https://search.google.com/structured-data/testing-tool?'
                .http_build_query(['code' => $snippet])
            ),
        ]),
    ],
];