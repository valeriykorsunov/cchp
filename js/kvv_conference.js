jQuery(document).ready(function($){

    $('#my_form_conference').on('submit', function(e){
        e.preventDefault();
        var $that = $(this),
            formData = new FormData($that.get(0));

        $.ajax({
            url : '/informatsiya/conference/kvv_conference.php',
            type : 'POST',
            processData: false,
            contentType: false,
            cache:false,
            data : formData,
            success : function (msg){
                console.log(msg);

                if (msg=='captchaN')
                {
                    alert('Неверно введена CAPCHA');
                }
                if(msg=='ElementAdd')
                {
                    $('#formConfer').addClass('hidden');
                    $('#formConferSPS').removeClass('hidden');
                }
            }
        });
    });

    $('#my_form_feedback').on('submit', function(e) {
        e.preventDefault();
        var $that = $(this),
            formData = new FormData($that.get(0));

        $.ajax({
            url: '/informatsiya/feedback/kvv_feedback.php',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            success: function (msg) {
                console.log(msg);
                if (msg == 'captchaN')
                {
                    alert('Неверно введена CAPCHA');
                }
                if (msg == 'ElementAdd')
                {
                    $('.feedback__form-placeholder').hide();
                    $('.event__alert').show();
                    //location.reload();
                    //$('#formConfer').addClass('hidden');
                    //$('#formConferSPS').removeClass('hidden');
                }
            }
        });
    });


});




