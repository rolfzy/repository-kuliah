import React, { useState, useEffect } from 'react';

const Ect = () => {
  const [searchValue, setSearchValue] = useState('');
  const [comicData, setComicData] = useState([]);
  const [modalData, setModalData] = useState({
    judul: '',
    penulis: '',
    ilustrator: '',
    sinopsis: '',
  });
  const [isModalVisible, setIsModalVisible] = useState(false);

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = () => {
    // Menggunakan fetch API atau library HTTP lainnya untuk mengambil data dari URL
    fetch('https://kuliah-e86f2-default-rtdb.asia-southeast1.firebasedatabase.app/Comic/-NWlvd7kUsximuoJLMTS/data.json')
      .then(response => response.json())
      .then(data => setComicData(data))
      .catch(error => console.log('Terjadi kesalahan:', error));
  };

  const handleSearchInputChange = event => {
    setSearchValue(event.target.value.toLowerCase());
  };

  const handleSinopsisClick = (judul, penulis, ilustrator, sinopsis) => {
    setModalData({ judul, penulis, ilustrator, sinopsis });
    setIsModalVisible(true);
  };

  const handleTambahDataClick = () => {
    // Logika untuk menampilkan modal tambah data
    // ...
  };

  return (
    <div>
      <input
        type="search"
        placeholder="Cari Manhwa"
        value={searchValue}
        onChange={handleSearchInputChange}
      />

      <div id="dataContainer">
        {comicData.map((data, index) => {
          if (
            data.judul.toLowerCase().includes(searchValue) ||
            data.penulis.toLowerCase().includes(searchValue) ||
            data.ilustrator.toLowerCase().includes(searchValue) ||
            data.sinopsis.toLowerCase().includes(searchValue)
          ) {
            return (
              <div className="col-md-4" key={index}>
                <div className="card" style={{ width: '18rem', height: '25rem', backgroundColor: '#F1F6F9' }}>
                  <img src={data.gambar} className="card-img-top" style={{ height: '500px', objectFit: 'cover' }} />
                  <div className="card-body">
                    <h5 className="card-title">{data.judul}</h5>
                    <button
                      className="btn btn-primary"
                      onClick={() =>
                        handleSinopsisClick(data.judul, data.penulis, data.ilustrator, data.sinopsis)
                      }
                    >
                      Sinopsis
                    </button>
                  </div>
                </div>
              </div>
            );
          }
        })}
      </div>

      {isModalVisible && (
        <div className="modal">
          <h1 className="modal-title fs-5">{modalData.judul} Detail</h1>
          <div className="modal-body">
            <h5>{modalData.judul}</h5>
            <p>{modalData.penulis}</p>
            <p>{modalData.ilustrator}</p>
            <p>{modalData.sinopsis}</p>
          </div>
        </div>
      )}

      <button className="tambahdata" onClick={handleTambahDataClick}>
        Tambah Data
      </button>
    </div>
  );
};

export default Ect;
