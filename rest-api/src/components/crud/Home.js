import React, { useEffect, useState } from "react";
import "firebase/database";
import "bootstrap/dist/css/bootstrap.min.css";
import logo from'./Logo.png';
import { Link } from "react-router-dom";
import instagramIcon from './ig.png';
import twitterIcon from "./twitter.png";

const App = () => {
  const [data, setData] = useState([]);
 
  useEffect(() => {
    const fetchData = async () => {
      const response = await fetch(
        "https://kuliah-e86f2-default-rtdb.asia-southeast1.firebasedatabase.app/Comic/-NWlvd7kUsximuoJLMTS/data.json"
      );
      const jsonData = await response.json();
      console.log(jsonData)
      setData(jsonData);
      
    };
  
    
    fetchData();
  }, []);
  const [searchValue, setSearchValue] = useState("");
  const handleSearchInputChange = (event) => {
    setSearchValue(event.target.value.toLowerCase());
  };
  
  const filteredData = data.filter(
    (item) =>
      item.judul.toLowerCase().includes(searchValue) ||
      item.penulis.toLowerCase().includes(searchValue) ||
      item.ilustrator.toLowerCase().includes(searchValue) ||
      item.sinopsis.toLowerCase().includes(searchValue) ||
      item.Rating.toLowerCase().includes(searchValue) 

  );
  
  
    const handleSinopsis = (judul,sinopsis) => {
      alert(judul,sinopsis);
    };

    const handleShareInstagram = (item) => {
     const shareUrl = `https://www.instagram.com/?hl=id `;
      window.open(shareUrl);
    };
    const handleShareTwitter = (item) => {
      const shareUrl = `https://twitter.com/i/flow/login `;
       window.open(shareUrl);
     };
     const [sortOption, setSortOption] = useState("");
     const handleSortChange = (event) => {
      setSortOption(event.target.value);
    };
   
  return (
    <div style={{ backgroundColor: "#394867" }}>
      {/* Navbar */}
      <div className="navbarComic">
        <nav
          className="navbar bg-dark border-bottom border-bottom-dark"
          style={{ backgroundColor: "#212A3E" }}
        >
          <div className="container-fluid">
            <a className="navbar-brand">
              <img
                src={logo}
                alt="Logo"
                width="130"
                height="124"
                className="d-inline-block align-text-top"
              />
            </a>
            <ul className="nav justify-content-center">
              <li className="nav-item">
                <h1>Realm Of Ink</h1>
              </li>
            </ul>
            <ul className="nav justify-content-end">
              <li className="nav-item">
               
              </li>
            </ul>
            <div className="container mt-4">
        <div className="text-center">
          <Link to="/Crud" className="btn btn-primary">
            Go to CRUD Page
          </Link>
        </div>
      </div>

            <form className="d-flex" role="search">
            <input
  className="form-control me-2"
  type="search"
  placeholder="Cari Manhwa"
  aria-label="Search"
  id="search-input"
  value={searchValue}
  onChange={handleSearchInputChange}
/>

            </form>
          </div>
        </nav>
      </div>
   
      {/* End of Navbar */}
      {/* Card Comic */}
      <div className="daftarComic">
        <div className="row align-content-lg-center" id="dataContainer">
          {filteredData.map((item, index) => (
            <div className="col-md-3" key={index}>
              <div
                className="card mb-3 ms-3 mt-4"
                style={{ width: "25rem", backgroundColor: "#F1F6F9" }}
              >
                <img
                  src={item.gambar}
                  className="card-img-top"
                  style={{ height: "500px", objectFit: "cover" }}
                  alt="Comic Cover"
                />
                <div className="card-body">
                  <h4 className="card-title">{item.judul}</h4>
                  <p data-penulis={item.penulis}></p>
                  <p className="i" data-ilustrator={item.ilustrator}></p>
                  <p></p>
                  <a
                    href="#"
                    className="btn btn-primary Sinopsis"
                    role="button"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    data-sinopsis={item.sinopsis}
                    onClick={() => handleSinopsis(item.sinopsis)}
                  >
                    Sinopsis
                  </a>
                  <button className="btn btn-primary ms-2" onClick={() => handleShareInstagram(item)}>
  <img src={instagramIcon} style={{width : '20px' ,height:'20px'}} alt="Instagram Icon" />
</button>
<button className="btn btn-primary ms-2" onClick={() => handleShareTwitter(item)}>
  <img src={twitterIcon} style={{width : '20px' ,height:'20px'}} alt="Twitter Icon" />
</button>
<button className="btn btn-white ms-2" style={{fontSize: '27px',fontFamily: 'cursive'}}>⭐: {item.Rating}</button>

                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
      {/* Modal */}
      
      <div
        className="modal fade"
        id="exampleModal"
        tabIndex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div className="modal-dialog">
          <div className="modal-content">
            <div className="modal-header">
              <h1 className="modal-title fs-5" id="exampleModalLabel">
                Mahwa Detail
              </h1>
              <button
                type="button"
                className="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div className="modal-body" id="modalBody">
              <h5 id="modalJudul"></h5>
              <p id="modalGambar"></p>
              <p id="modalPenulis"></p>
              <p id="modalIlustrator"></p>
              <p id="modalSinopsis"></p>
            </div>
            <div className="modal-footer">
              <button
                type="button"
                className="btn btn-primary"
                data-bs-dismiss="modal"
              >
                OK!
              </button>
            </div>
          </div>
        </div>
      </div>
      <div
        className="modal fade"
        id="tambahModal"
        tabIndex="-1"
        role="dialog"
        aria-labelledby="tambahModalLabel"
        aria-hidden="true"
      >
        <div className="modal-dialog" role="document">
          <div className="modal-content">
            <div className="modal-header">
              <h5 className="modal-title" id="tambahModalLabel">
                Tambah Mahwa
              </h5>
              <button type="button" className="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div className="modal-body">
              <form id="comicForm">
                <div className="form-group">
                  <label>Gambar:</label>
                  <input
                    type="text"
                    className="form-control"
                    id="Gambox"
                    required
                  />
                </div>
                <div className="form-group">
                  <label>Judul:</label>
                  <input
                    type="text"
                    className="form-control"
                    id="Judbox"
                    required
                  />
                </div>
                <div className="form-group">
                  <label>Penulis:</label>
                  <input
                    type="text"
                    className="form-control"
                    id="Penbox"
                    required
                  />
                </div>
                <div className="form-group">
                  <label>Sinopsis:</label>
                  <textarea
                    className="form-control"
                    id="Sinbox"
                    rows="4"
                    required
                  ></textarea>
                </div>
              </form>
            </div>
            <div className="modal-footer">
              <button
                type="button"
                className="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Tutup
              </button>
              <button
                type="button"
                className="btn btn-primary"
                id="tambahDataBtn"
              >
                Tambah Data
              </button>
            </div>
          </div>
        </div>
      </div>
      {/* End of Modal */}
      <script
        src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossOrigin="anonymous"
      ></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossOrigin="anonymous"
      ></script>
      <script src="js/comic.js"></script>
      <script
        language="JavaScript"
        type="text/javascript"
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossOrigin="anonymous"
      ></script>
    </div>
  );
};

export default App;
