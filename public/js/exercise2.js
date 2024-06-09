$(document).ready(function () {
    for (let i = 0; i < 14; i++) {
        if (i < 4) {
            $('input[name=additionA' + i + ']').on('input', function () {
                localStorage.setItem('ex2tambahKiri' + i, $('input[name=additionA' + i + ']').val())
            });

            $('input[name=additionB' + i + ']').on('input', function () {
                localStorage.setItem('ex2tambahKanan' + i, $('input[name=additionB' + i + ']').val())
            });

            $('#hasil' + i).on('input', function () {
                localStorage.setItem('ex2hasil' + i, $('#hasil' + i).val())
            });

            $('#tambah' + i).on('input', function () {
                localStorage.setItem('ex2tambah' + i, $('#tambah' + i).val())
            });

            $('input[name=additionA' + i + ']').val(localStorage.getItem('ex2tambahKiri' + i));
            $('input[name=additionB' + i + ']').val(localStorage.getItem('ex2tambahKanan' + i));
            $('#hasil' + i).val(localStorage.getItem('ex2hasil' + i));
            $('#tambah' + i).val(localStorage.getItem('ex2tambah' + i));
        } else {
            $('input[name=answers' + i + ']').on('change', function () {
                localStorage.setItem('ex2pilgan' + i, $('input[name=answers' + i + ']:checked').val());
            });

            $('input[name=answers' + i + '][value="' + localStorage.getItem('ex2pilgan' + i) + '"]').prop('checked', true);
        }
    }

    $('#closeReview').on('click', function () {
        localStorage.clear();
    })
});