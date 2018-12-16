var hotelparis = function () {
    return {
        init : function() {
            hotelparis.pilihNegara();
            hotelparis.pilihNomorKamar();
        },

        pilihNegara : function() {
            var kewarganegaraan = $('#kewarganegaraan-register');
            var negara = $('#negara-register');
            negara.css('display', 'none');
            kewarganegaraan.on('change', function() {
                if ($(this).val() == 'WNA') {
                    negara.css('display', 'block');
                } else {
                    negara.css('display', 'none');
                }
            });
        },

        pilihNomorKamar : function () {
            $('#pesan_kamar').on('change', function() {
                var id = $(this).val();
                var konten = $('#pesan_nomor_kamar');
                var data = {
                    id : id
                }

                $.ajax({
                    data: data,
                    dataType: 'html',
                    type: 'POST',
                    url: 'ajax_option_nomor_kamar.php',
                    success: function(r) {
                        konten.html(r);
                    }
                });
            });
        },
    }
}();
hotelparis.init();