$(document).ready(function() {
    for (let i = 0; i < 11; i++) {
        $('input[name=flexRadioDefault' + i + ']').on('change', function () {
            localStorage.setItem('ex3pilgan' + i, $('input[name=flexRadioDefault' + i + ']:checked').val());
        });

        $('input[name=flexRadioDefault' + i + '][value="' + localStorage.getItem('ex3pilgan' + i) + '"]').prop('checked', true);
    }

    $('#submit').on('click', function () {
        localStorage.clear();
    })
});