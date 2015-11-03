$(document).ready(function() {

    // process the form
    $('.form-horizontal').submit(function(event) {

        event.preventDefault();

        console.log("Button pressed.");

        // get the form data
        var formData = {
            'firstName' : $('input[name=firstName]').val(),
            'lastName'  : $('input[name=lastName]').val()
        };

        // process the form
        $.ajax({
            type        : 'POST',
            url         : 'index.php',
            data        : formData,
            encode      : true
        })
            // using the done promise callback
            .done(function(data) {
                $('.form-horizontal').hide();
                $("#result").html(data);
            });
    });

});
