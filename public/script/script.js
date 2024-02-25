$(document).ready(function () {

    // toggle navbar mobile
    $("#togglerButton").each(function (_, navToggler) {
        var target = $(navToggler).data("target");
        $(navToggler).on("click", function () {
            $(target).animate({
                height: "toggle",
            })
        })
    })

    // user avatar dropdown
    var dd_btn = $(".dropdown-button")
    var dd_target = $("#dropdown-target")
    dd_btn.click(function () {
        dd_btn.each(function () {
            if (dd_target.hasclass("hidden")) {
                dd_target.removeclass("hidden").addclass("block");
            } else if (dd_target.hasclass("block")) {
                dd_target.removeclass("block").addclass("hidden");
            }
        })
    })
})