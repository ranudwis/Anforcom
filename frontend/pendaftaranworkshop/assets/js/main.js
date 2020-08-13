(function ($) {
    "use strict";

    $(document).ready(function () {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var input = $('.form-group .form-control');

        $('.alert').hide();
        $('#pilihanIndividu').hide();
        $('#pilihanKelompok').hide();
        $('#pilihanIndividu input').prop('required', true);
        $('#pilihanKelompok input').prop('required', true);

        $(".next").click(function () {
            if ($('input[type=radio][name=pilihan]:checked').length == 0) {
                showAlert('Pilihan workshop masih kosong! silahkan diisi');
                return false;
            } else {
                $('.alert').hide();
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

        function showAlert(message) {
            $("#alert").html('<div class="alert alert-danger" role="alert">' + message +
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
                    $('#pilihanIndividu input .form-control').prop('required', true);
                    $('#pilihanKelompok').hide();
                    $('#pilihanKelompok input').removeAttr('required');
                    break;
                case 'kelompok':
                    $('#pilihanKelompok').show();
                    $('#pilihanKelompok input .form-control').prop('required', true);
                    $('#pilihanIndividu').hide();
                    $('#pilihanIndividu input').removeAttr('required');
                    break;
            }
        });

        // $('.scan-ktp').hide();
        $('#scan-ktm, #leader_scan-ktm, #members0_scan-ktm, #members1_scan-ktm').hide();
        $('.scan-ktm input').removeAttr('required');
        $('#input-leader_scan-ktm').removeAttr('required');
        $('#input-members0_scan-ktm').removeAttr('required');
        $('#input-members1_scan-ktm').removeAttr('required');

        $("#birthdate").change(function () {
            var today = new Date();
            var birthDate = new Date($(this).val());
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            if (age < 17 || age > 25) {
                $('#scan-ktm').show();
            } else {
                $('#scan-ktm').hide();
            }
        });

        $("#leader_birthdate").change(function () {
            var today = new Date();
            var birthDate = new Date($(this).val());
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            if (age < 17 || age > 25) {
                $('#leader_scan-ktm').show();
            } else {
                $('#leader_scan-ktm').hide();
            }
        });

        $("#members1birthdate").change(function () {
            var today = new Date();
            var birthDate = new Date($(this).val());
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            if (age < 17 || age > 25) {
                $('#members1_scan-ktm').show();
            } else {
                $('#members1_scan-ktm').hide();
            }
        });

        $("#members0birthdate").change(function () {
            var today = new Date();
            var birthDate = new Date($(this).val());
            var age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            if (age < 17 || age > 25) {
                $('#members0_scan-ktm').show();
            } else {
                $('#members0_scan-ktm').hide();
            }
        });

        $('.submit').on('click', function () {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
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
            // });
        });

    });


})(jQuery);
