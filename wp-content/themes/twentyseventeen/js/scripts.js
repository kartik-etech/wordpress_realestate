jQuery(document).ready(function () {
    jQuery(".active > span").css("color", "#ecc154");
    jQuery(".commercialProperty").hide();
    jQuery(".commercialSlider").hide();
    jQuery(".residentialButton").click(function () {
        jQuery(".active > span").css("color", "#bcbcbc");
        jQuery(".commercialButton").removeClass('active');
        jQuery(".residentialButton").addClass('active');
        jQuery(".active > span").css("color", "#ecc154");
        jQuery(".commercialSlider").hide();
        jQuery(".commercialProperty").hide();
        jQuery(".residentialSlider").show();
        jQuery(".residentialProperty").show();

    })
    jQuery(".commercialButton").click(function () {
        jQuery(".active > span").css("color", "#bcbcbc");
        jQuery(".residentialButton").removeClass('active');
        jQuery(".commercialButton").addClass('active');
        jQuery(".active > span").css("color", "#ecc154");
        jQuery(".residentialProperty").hide();
        jQuery(".residentialSlider").hide();
        jQuery(".commercialSlider").show();
        jQuery(".commercialProperty").show();
    })


    jQuery(".box-grid > .address").hover(function () {
        jQuery(".box-grid > .address > .fa").css("color", "#ecc154");
    }, function () {
        jQuery('.box-grid >.address > .fa').css("color", "#acacac");
    });


    jQuery("tbody > tr").hover(function () {
        jQuery("td > .fa").css("color", "#ecc154");
    }, function () {
        jQuery('td > .fa').css("color", "#acacac");
    });
    // jQuery(".options > .row > div").hover(function(){
    //     jQuery(".borderRight").css("border", "none");
    // }, function(){
    //     jQuery(".borderRight").css({"border-right": "1px solid #d7d7d7","border-left": "1px solid #d7d7d7"});
    // });

    jQuery(window).scroll(function (event) {
        jQuery(".navigation-top").removeClass("site-navigation-fixed");
    });
    jQuery(".borderRight").hover(function(){
      jQuery(this).css({"background-color":"#edbb5f",  "border-radius": "5px"});
      jQuery(this).children('ul').css("background-color", "#edbb5f");
      jQuery(this).children('.joinButton').css("background-color", "#edbb5f");
      jQuery(this).children('.joinButton').children('button').css("background-color", "#f8f8f8");
  }, function(){
      jQuery(this).css("background-color", "transparent");
      jQuery(this).children('ul').css("background-color", "#f8f8f8");
      jQuery(this).children('.joinButton').css("background-color", "#f8f8f8");
  });
}); 
jQuery(function() {
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        var links = this.el.find('.article-title');
        links.on('click', {
            el: this.el,
            multiple: this.multiple
        }, this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var jQueryel = e.data.el;
        jQuerythis = jQuery(this),
        jQuerynext = jQuerythis.next();

        jQuerynext.slideToggle();
        jQuerythis.parent().toggleClass('open');

        if (!e.data.multiple) {
            jQueryel.find('.accordion-content').not(jQuerynext).slideUp().parent().removeClass('open');
        };
    }
    var accordion = new Accordion(jQuery('.accordion-container'), false);
});