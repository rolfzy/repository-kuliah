import React from "react";
import "./index.css";
import ReactDOM from "react-dom";
import 'bootstrap/dist/css/bootstrap.css';
 // Impor Bootstrap CSS


import StartFirebase from "../firebaseConfig/index";

import { ref, set, get, update, remove, child, push } from "firebase/database";


export class Crud extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      db: '',
      Nomer: '',
      gambar: '',
      judul:'',
      penulis: '',
      ilustrator: '',
      sinopsis: '',
      showModal: false // tambahkan properti showModal
    };
    this.interface = this.interface.bind(this);
  }

  componentDidMount() {
    this.setState({
      db: StartFirebase()
    });
  }

  render() {
    return (
      
    <div className="container-fluid ">
      <h1 className="title">Manhwa Reader</h1>
      <div className="container mt-5">
        <div className="row">
          <div className="col-md-6">
            <div className="form-group">
              <label htmlFor="Nomer">Nomer</label>
              <input
                type="text"
                className="form-control"
                id="Nomer"
                value={this.state.Nomer}
                onChange={e => { this.setState({ Nomer: e.target.value }); }}
              />
            </div>

            <div className="form-group">
              <label htmlFor="judul">Judul</label>
              <input
                type="text"
                className="form-control"
                id="judul"
                value={this.state.judul}
                onChange={e => { this.setState({ judul: e.target.value }); }}
              />
            </div>

            <div className="form-group">
              <label htmlFor="gambar">Gambar</label>
              <input
                type="text"
                className="form-control"
                id="gambar"
                value={this.state.gambar}
                onChange={e => { this.setState({ gambar: e.target.value }); }}
              />
            </div>

            <div className="form-group">
              <label htmlFor="penulis">Penulis</label>
              <input
                type="text"
                className="form-control"
                id="penulis"
                value={this.state.penulis}
                onChange={e => { this.setState({ penulis: e.target.value }); }}
              />
            </div>

            <div className="form-group">
              <label htmlFor="ilustrator">Ilustrator</label>
              <input
                type="text"
                className="form-control"
                id="ilustrator"
                value={this.state.ilustrator}
                onChange={e => { this.setState({ ilustrator: e.target.value }); }}
              />
            </div>

            <div className="form-group">
              <label htmlFor="sinopsis">Sinopsis</label>
              <input
                type="text"
                className="form-control"
                id="sinopsis"
                value={this.state.sinopsis}
                onChange={e => { this.setState({ sinopsis: e.target.value }); }}
              />
            </div>

            <button className="btn btn-primary" id="addBtn" onClick={this.interface}>Add Data</button>
            <button className="btn btn-primary" id="updateBtn" onClick={this.interface}>Update Data</button>
            <button className="btn btn-danger" id="deleteBtn" onClick={this.interface}>Delete Data</button>
            <button className="btn btn-success" id="selectBtn" onClick={this.interface}>Get Data From DB</button>
          </div>
        </div>
      </div>
      </div>
     
      );

  }

  interface(event) {
    const id = event.target.id;
  
    if (id === 'addBtn') {
      this.setState({ showModal: true }); // tampilkan modal
      this.insertData();
    }
    else if (id === 'updateBtn') {
      this.updateData();
    }
    else if (id === 'deleteBtn') {
      this.deleteData();
    }
    else if (id === 'selectBtn') {
      this.selectData();
    }
  }
  

  getAllInputs() {
    return {
      Nomer: this.state.Nomer,
      judul: this.state.judul,
      gambar: this.state.gambar,
      penulis: this.state.penulis,
      ilustrator: this.state.ilustrator,
      sinopsis: this.state.sinopsis,
    }
  }

  insertData() {
    const db = this.state.db;
    const data = this.getAllInputs();

    set(ref(db, '/Comic//-NWlvd7kUsximuoJLMTS/data/' + data.Nomer),
      {
        judul: data.judul,
        gambar: data.gambar,
        penulis: data.penulis,
        ilustrator: data.ilustrator,
        sinopsis: data.sinopsis
      }
    )
      .then(() => { alert('Data berhasil ditambahkan') })
      .catch((error) => { alert("Terjadi kesalahan, detail: " + error) });
  }

  updateData() {
    const db = this.state.db;
    const data = this.getAllInputs();

    update(ref(db, 'Comic//-NWlvd7kUsximuoJLMTS/data/' + data.Nomer),
      {
        judul: data.judul,
        gambar: data.gambar,
        penulis: data.penulis,
        ilustrator: data.ilustrator,
        sinopsis: data.sinopsis
      }
    )
      .then(() => { alert('Data berhasil diperbarui') })
      .catch((error) => { alert("Terjadi kesalahan, detail: " + error) });
  }

  deleteData() {
    const db = this.state.db;
    const Nomer = this.getAllInputs().Nomer;

    remove(ref(db, 'Comic//-NWlvd7kUsximuoJLMTS/data/' + Nomer))
      .then(() => { alert('Data berhasil dihapus') })
      .catch((error) => { alert("Terjadi kesalahan, detail: " + error) });
  }

  selectData() {
    const dbref = ref(this.state.db);
    const Nomer = this.getAllInputs().Nomer;

    get(child(dbref, 'Comic//-NWlvd7kUsximuoJLMTS/data/' + Nomer))
      .then((snapshot) => {
        if (snapshot.exists()) {
          this.setState({
            judul: snapshot.val().judul,
            gambar: snapshot.val().gambar,
            penulis: snapshot.val().penulis,
            ilustrator: snapshot.val().ilustrator,
            sinopsis: snapshot.val().sinopsis
          })
        }
        else {
          alert("Data tidak ditemukan!")
        }
      })
      .catch((error) => { alert("Terjadi kesalahan, detail: " + error) });
  }


  
}

export default Crud;

// Index.js

ReactDOM.render(<Crud />, document.getElementById("root"));