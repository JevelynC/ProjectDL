$(document).ready(function() {
    for (let i = 0; i < 11; i++) {
        $('input[name=answers' + i + ']').on('change', function () {
            localStorage.setItem('ex3pilgan' + i, $('input[name=answers' + i + ']:checked').val());
        });

        $('input[name=answers' + i + '][value="' + localStorage.getItem('ex3pilgan' + i) + '"]').prop('checked', true);
    }

    $('#closeReview').on('click', function () {
        localStorage.clear();
    });

    $('textarea[name=jawaban3]').on('input', function() {
        localStorage.setItem('ex3uraian', $('textarea[name=jawaban3]').val());
    });

    $('textarea[name=jawaban3]').val(localStorage.getItem('ex3uraian'));
});