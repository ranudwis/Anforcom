(function ($) {
    "use strict";

    $(document).ready(function () {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $('.alert:not(.visible)').hide();
        $('#pilihanIndividu').hide();
        $('#pilihanKelompok').hide();
        $('#pilihanIndividu input').prop('required', true);
        $('#pilihanKelompok input').prop('required', true);

        $(".next").click(function () {
            if ($('input[type=radio][name=pilihan]:checked').length == 0) {
                showAlert('Pilihan workshop masih kosong! silahkan diisi', 'danger');
                return false;
            } else {
                $('.alert').hide();
                if ($("input[name='pilihan']:checked").val() == 'kelompok') {
                    showAlert('Anda wajib mendaftar untuk 3 orang pada pilihan ini!', 'info');
                }
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            }
        });

        function showAlert(message, category) {
            $("#alert").html('<div class="alert alert-' + category + '" role="alert">' + message +
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
            );
        }

        $(".previous").click(function () {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $("input[type='radio']").on('change', function () {

            var selectedValue = $("input[name='pilihan']:checked").val();
            if (selectedValue) {
                selectedValue = selectedValue;
            } else {
                selectedValue = '';
            }
            switch (selectedValue) {
                case 'individu':
                    $('#pilihanIndividu').show();
                    $('#pilihanIndividu input').prop('required', true);
                    $('#pilihanKelompok input').removeAttr('required name');
                    $('#pilihanKelompok').hide();
                    break;
                case 'kelompok':
                    $('#pilihanKelompok').show();
                    $('#pilihanKelompok input').prop('required', true);
                    $('#pilihanIndividu input').removeAttr('required name');
                    $('#pilihanIndividu').hide();
                    break;
            }
        });
    });


})(jQuery);
