document.addEventListener('DOMContentLoaded', function() {
  $.ajax({
    url: 'https://kuliah-e86f2-default-rtdb.asia-southeast1.firebasedatabase.app/Comic/-NWlvd7kUsximuoJLMTS/data.json',
    method: 'GET',
    dataType: 'json',
    success: function(response) {
      var comic = response; // Simpan data komik dalam variabel comic
      showData(response); // Menampilkan data ke dalam elemen HTML
    },
    error: function(xhr, status, error) {
      console.log('Terjadi kesalahan:', error);
    }
  });

  function showData(data) {
    var container = document.getElementById('dataContainer');
    container.innerHTML = '';

    for (var i = 0; i < data.length; i++) {
      var item = document.createElement('div');
      item.classList.add('col-md-3');
      item.innerHTML = '<div class="col-md-4"> <div class="card" style="width: 18rem;"> <img src="' + data[i].gambar + '" class="card-img-top" alt="..."> <div class="card-body"> <h4 class="card-title">' + data[i].judul + '</h4><p data-penulis="' + data[i].penulis + '"></p><p class="i" data-ilustrator="' + data[i].ilustrator + '"></p>'+'<p></p><a href="#" class="btn btn-secondary Sinopsis" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-sinopsis="' + data[i].sinopsis + '"  >Sinopsis</a></div></div></div>';
      container.appendChild(item);
    }
  }

  cariData();
});

$(document).on('input', '#search-input', function() {
  var searchValue = $(this).val().toLowerCase();
  $('#dataContainer').html('');

  $.ajax({
    url: 'https://kuliah-e86f2-default-rtdb.asia-southeast1.firebasedatabase.app/Comic/-NWlvd7kUsximuoJLMTS/data.json',
    method: 'GET',
    dataType: 'json',
    success: function(response) {
      let comic = response;
      
      $.each(comic, function(i, data) {
        if (data.judul.toLowerCase().includes(searchValue) || data.penulis.toLowerCase().includes(searchValue) || data.ilustrator.toLowerCase().includes(searchValue) || data.sinopsis.toLowerCase().includes(searchValue)) {
          $('#dataContainer').append(
            '<div class="col-md-4"> <div class="card" style="width: 18rem;"> <img src="' + data.gambar + '" class="card-img-top" alt="..."> <div class="card-body"> <h5 class="card-title">' + data.judul + '</h5><a href="#" class="btn btn-secondary Sinopsis" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-sinopsis="' + data.sinopsis + '">Sinopsis</a></div></div></div>'
          );
        }
      });
    },
    error: function(error) {
      alert('Mahwa tidak ada ');
    } 
  });
});


$(document).on('click', '.Sinopsis', function() {
  var judul = $(this).closest('.card-body').find('.card-title').text();
  var penulis = $(this).closest('.card-body').find('p').data('penulis');
  var ilustrator = $(this).closest('.card-body').find('.i').data('ilustrator');
  var sinopsis = $(this).data('sinopsis');
  var modalJudul = $('#modalJudul');
  var modalPenulis = $('#modalPenulis');
  var modalIlustrator = $('#modalIlustrator');
  var modalSinopsis = $('#modalSinopsis');
  modalJudul.text(judul);
  modalPenulis.text(penulis);
  modalIlustrator.text(ilustrator);
  modalSinopsis.text(sinopsis);
  
  // Tambahkan kode untuk mengambil data lainnya dari database dan menampilkannya di modal sesuai kebutuhan
  
  // Tampilkan modal
  $('#exampleModal').modal('show');
});
