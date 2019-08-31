(function($){
    $.fn.imageSlider = function(pictures) {
        let i = 0;
        this.html(`<img src="${pictures[i]}"/>`);
        $(this).on('click', () => {
            i++;
            if(!pictures[i]){
                i = 0;
            }
            this.find('img').attr('src', pictures[i]);
        })
    }
})(jQuery);