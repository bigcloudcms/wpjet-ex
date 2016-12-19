jQuery(function() {
if ($("body").hasClass("blog")) {
jQuery('.etad.et_pb_ads_ad_1 h5').replaceWith(function () {
    return "<marquee>" + $(this).html() + "</marquee>"; });
jQuery('.etad.et_pb_ads_ad_1').css("display", "block");
 }
});
