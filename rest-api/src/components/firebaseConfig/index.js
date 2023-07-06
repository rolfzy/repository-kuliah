import { initializeApp } from "firebase/app";   
import { getDatabase } from "firebase/database";

function StartFirebase(){
  const firebaseConfig = {
    apiKey: "AIzaSyC_sHskCsbB4kaZnkPfGRu5A2PiaBTPYsw",
    authDomain: "kuliah-e86f2.firebaseapp.com",
    databaseURL: "https://kuliah-e86f2-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "kuliah-e86f2",
    storageBucket: "kuliah-e86f2.appspot.com",
    messagingSenderId: "429507828418",
    appId: "1:429507828418:web:06cf06d5d3011b1eec795b",
    measurementId: "G-5PEGMBGSFK"
  };
      // Initialize Firebase
      const app = initializeApp(firebaseConfig);
    
      return getDatabase(app);

}
export default StartFirebase;