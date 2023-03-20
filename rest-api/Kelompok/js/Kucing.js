$('#search-button').on('click', function () {
  $.ajax({
    url: 'https://641596da9a2dc94afe657153.mockapi.io/Kucing',
    method: 'GET',
    data: {
      'search': $('#search-input').val()
    },
    success: function(response) {
      let cat = response;
      
      $.each(cat,function(i,data){
        $('#Cat-list').append(
          '<div class="col-md-4 >"<div class="card" style="width: 18rem;"> <img src="'+ data.Gambar +'" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">'+data.NamaKucing+'</h5><p>'+data.Pemilik+'</p>'+data.Alamat+'<p></p><button type="button" class="btn btn-info mb-4" id="edit-button">Edit</button></div>'
        )
      })
    },
    error: function(error) {
      $('#error-message').text('Kucing Anda gaada haha');
    } 
  });
});

// post
$('#tambah-button').on('click', function () {
  $.ajax({
    url: 'https://641596da9a2dc94afe657153.mockapi.io/Kucing',
    method: 'POST',
    dataType: 'json',
    contentType: 'application/json',
    data: JSON.stringify({ NamaKucing : 'BarBar', Pemilik : 'Geco', Gambar: "https://loremflickr.com/640/480/cats", Alamat : "Cadas" }),
    success: function(data) {
      console.log(data);
    },
    error: function(error) {
      console.error(error);
    }
  });
});


// put
$('#edit-button').on('click', function () {
  $.ajax({
    url: 'https://641596da9a2dc94afe657153.mockapi.io/Kucing/18',
    method: 'PUT',
    dataType: 'json',
    contentType: 'application/json',
    data: JSON.stringify({ NamaKucing : 'Bar'}),
    success: function(data) {
      console.log(data);
    },
    error: function(error) {
      console.error(error);
    }
  });
});

// delet
$('#hapus-button').on('click', function () {
$.ajax({
  url: 'https://641596da9a2dc94afe657153.mockapi.io/Kucing/18',
  method: 'DELETE',
  dataType: 'json',
  contentType: 'application/json',
  success: function(data) {
    console.log(data);
  },
  error: function(error) {
    console.error(error);
  }
});
});

