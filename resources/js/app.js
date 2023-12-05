import "./bootstrap";

window.getSubCategory = function (url, e) {
    var id = $(e).val();

    $.ajax({
        type: "GET",
        url: url + id,
        success: function (response) {
            $("#get_subcategory").html(response);
            console.log(response);
        },
    });
};
