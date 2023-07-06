import React from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import Home from './components/crud/Home';
import { BrowserRouter ,Routes, Route } from 'react-router-dom';
import Crud from './components/crud';

const App = () => {
  return (
    <BrowserRouter>
    <div>
      <Routes>
<Route exact path='/' Component={Home}/>
<Route  path='/Crud' Component={Crud}/>
    
</Routes>
    

    </div>
    </BrowserRouter>
  );
};

export default App;
