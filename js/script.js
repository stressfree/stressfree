(function ($) {

Drupal.behaviors.stressfree = {
  attach: function (context, settings) {
        setTimeout(function(){
            window.scrollTo(0, 1);
        }, 0);
    }
};

}(jQuery));