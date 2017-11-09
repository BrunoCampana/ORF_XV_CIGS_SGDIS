/*global $, jQuery, alert*/
$(".text_data td").on("click", function () {
    "use strict";
    var tr = $(this).parent();
    if (tr.hasClass("selected")) {
        tr.removeClass("selected");
    } else {
        tr.addClass("selected");
    }
});
