$('.hastip').tooltipsy({
    offset: [-10, 0],
    show: function (e, $el) {
        $el.css({
            'left': parseInt($el[0].style.left.replace(/[a-z]/g, '')) - 50 + 'px',
            'opacity': '0.0',
            'display': 'block'
        }).animate({
            'left': parseInt($el[0].style.left.replace(/[a-z]/g, '')) + 50 + 'px',
            'opacity': '1.0'
        }, 300);
    },
    hide: function (e, $el) {
        $el.slideUp(100);
    },
    css: {
        'padding': '10px',
        'max-width': '200px',
        'color': '#303030',
        'background-color': '#f5f5b5',
        'border': '1px solid #deca7e',
        '-moz-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
        '-webkit-box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
        'box-shadow': '0 0 10px rgba(0, 0, 0, .5)',
        'text-shadow': 'none'
    }
});