"use strict";

jQuery(document).ready(function ($) {
    function apply ($el, options) {
        var options = options || { isBusy: false };

        function ajax(data, successCallback, errorCallback)
        {
            if (options.isBusy || $el.hasClass('Bestwebsite-disabled')) {
                return;
            }

            options.isBusy = true;

            $.ajax({
                type: 'POST',
                url: Bestwebsite_star_ratings.endpoint,
                data: Object.assign({
                    nonce: Bestwebsite_star_ratings.nonce,
                    action: Bestwebsite_star_ratings.action
                }, data),
                error: errorCallback,
                success: successCallback,
                complete: function () {
                    options.isBusy = false;
                }
            });
        }

        function onClick(e) {
            var $star = $(this);

            ajax({
                id: $el.data('id'),
                slug: $el.data('slug'),
                score: $star.data('star'),
                best: $('[data-star]', $el).length
            }, function (response, status, xhr) {
                var $newEl = $(response);
                $newEl.addClass($el.attr('class'));
                $el.replaceWith($newEl);
                destroy();
                apply($newEl, options);
            }, function (xhr, status, err) {
                if (xhr.responseJSON && xhr.responseJSON.error) {
                    console.error(xhr.responseJSON.error);
                }
            });
        }

        function destroy() {
            $('[data-star]', $el).each(function () {
                $(this).off('click', onClick);
            });

            $el.remove();
        }

        $('[data-star]', $el).each(function () {
            $(this).on('click', onClick);
        });
    }

    $('.Bestwebsite-star-ratings').each(function () {
        apply($(this))
    });
});
