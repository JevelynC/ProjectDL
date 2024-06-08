$(document).ready(function () {
    for (let i = 0; i < 10; i++) {
        $('input[name=answers' + i + ']').on('change', function () {
            localStorage.setItem('ex1pilgan' + i, $('input[name=answers' + i + ']:checked').val());
        });

        $('input[name=answers' + i + '][value=' + localStorage.getItem('ex1pilgan' + i) + ']').prop('checked', true);
    }

    for (let i = 10; i < 16; i++) {
        $('#isi' + i).on('input', function () {
            localStorage.setItem('ex1isi' + i, $('#isi' + i).val());
        });

        $('#isi' + i).val(localStorage.getItem('ex1isi' + i));
    }

    $('#closeReview').on('click', function () {
        localStorage.clear();
    })
});