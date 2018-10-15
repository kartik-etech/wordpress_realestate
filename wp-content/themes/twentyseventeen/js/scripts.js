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


}); 