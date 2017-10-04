/*Initialize you plugins here*/
$(document).ready(function() {
    $(".select2_single").select2({
        placeholder: "Select an Option",
        allowClear: true
    });

    $(".select2_multiple").select2({
        placeholder: "Select Options",
        allowClear: true
    });

});
