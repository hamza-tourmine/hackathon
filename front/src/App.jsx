import './App.css'
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import Home from './Components/Clients/Home';
import Contact from './Components/Contact/Contact';
import About from './Components/About/About' ;
import Login from './Components/Auth/login';
import CreateAccount from './Components/Auth/Create-account';

function App() {
  return (
    <Router >
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/Contact" element={<Contact />} />
        <Route path="/About" element={<About />} />
        <Route path="/login" element={<Login />} />
        <Route path='/create-account' element={<CreateAccount/>}/>
      </Routes>
    </Router>
  );
}

export default App;
