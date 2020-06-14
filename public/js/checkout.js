// Stripe Publishable Key
Stripe.setPublishableKey('pk_test_PnjIEA9AHoaVFTLT8xg3fBXH00OBARq10n');

// Form Variable
var $form = $('#checkout-form');

// Form Submit Event
$form.submit(function(event) {

    // Hides errors
    $('#charge-error').addClass('hidden');

    // Prevents multiple submissions
    $form.find('button').prop('disabled', true);

    // The form information to be submitted
    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripeResponseHandler);

    // Ends the process
    return false;

});

// Stripe Status Handler
function stripeResponseHandler(status, response) {

    // If error exists
    if (response.error) {

        // Shows error styling
        $('#charge-error').removeClass('hidden');
        // Shows error message from Stripe
        $('#charge-error').text(response.error.message);
        // Enables user to submit button again
        $form.find('button').prop('disabled', false);

    } 
    
    // If validation is successful
    else {

        // Get the token id
        var token = response.id;
        // Appends token id to the form
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));

        // Submit the form:
        $form.get(0).submit();

    }

}