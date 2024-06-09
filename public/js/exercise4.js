$(document).ready(function() {
    for (let i = 0; i < 6; i++) {
        $('textarea[name=jawaban' + i + ']').on('input', function () {
            localStorage.setItem('ex4jawaban' + i, $('textarea[name=jawaban' + i + ']').val());
        });
        $('textarea[name=jawaban' + i + ']').val(localStorage.getItem('ex4jawaban' + i));
    }

    $('#closeReview').on('click', function () {
        localStorage.clear();
    });
});