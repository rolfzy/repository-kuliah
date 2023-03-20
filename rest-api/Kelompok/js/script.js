$('#search-button').on('click', function () {

    $.ajax({
        URL: 'http://www.omdbapi.com/?apikey=179595fb&s=',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '179595fb',
            's': $('#search-input').val()
        },
        success: function (result) {
            if (result.Response == "True"){

            }else{
                $('#movie-list').html('<h1>Film Tidak Ada!</h1>')
            }
        } 
    });



});