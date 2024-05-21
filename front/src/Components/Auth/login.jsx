import MainHeader from "../Headers/MainHeader";
import '../../Style/Auth/auth.css' ;
import LockPersonIcon from '@mui/icons-material/LockPerson';
import MySideImage from '../../../src/assets/images/login.jpg';
import { Link } from "react-router-dom";
export default function  Login (){
    return <>
    {/* <MainHeader/> */}
    <div className="Mein-Container">
       <div className="LogoContainer">
           <h5>Degital</h5>
           <span>Products</span>
       </div>
       <div className="contant-container">
         <img className="image" alt="img" src={MySideImage}/>
        <div className="Login-container">
        <div className="Login">
            <h4>sign in</h4>
         <div className="input-icon">
                <input type="text" placeholder="Username"/>
        </div>
        <div className="inputPassword">
            <input type="text" placeholder="Password"/>
        </div>
        <button className="loginbtn">Login <LockPersonIcon/></button>
       <div className="LoginFooter">
       <span>I do not  have an account ? <Link to='/create-account'>sign up </Link></span>
       <span><Link to='/'>See products</Link></span>
       </div>
         </div>
        </div>
       </div>
    </div>
    </>
}