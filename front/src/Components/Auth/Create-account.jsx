import React from "react";
import MainHeader from "../Headers/MainHeader";
import Form from 'react-bootstrap/Form';
import '../../Style/Auth/auth.css' ;
import LockPersonIcon from '@mui/icons-material/LockPerson';
import MySideImage from '../../../src/assets/images/login.jpg';
import { Link } from "react-router-dom";
import { useState } from "react";
import {setEmail , setPassword , setuserName , settel ,createRegister} from '../../Redux/Slide/auth/registerReducer';
import { useSelector, useDispatch } from 'react-redux';

export default function  CreateAccount (){
    const dispatch = useDispatch() ;
    const states = useSelector(state => state.register)
   
   const handleEmail = (ev)=>{
    dispatch(setEmail(ev.target.value))
   }
   const hadlPasword = (ev)=> {
    dispatch(setPassword(ev.target.value))
   }
   const handlTell = (ev)=> {
    dispatch(settel(ev.target.value))
   }
   const handlusername = (ev) => {
    dispatch(setuserName(ev.target.value))
   }
   const handlSubmit = (e)=>{
    e.preventDefault() ;
    const registrationData = {
        userName: states.username,
        email: states.email,
        PhoneNumber: states.tell,
        password: states.password
      };
      console.log(registrationData)
      dispatch(createRegister(registrationData))
   }
    return <>
    {/* <MainHeader/> */}
    <div className="Mein-Container">
       <div className="LogoContainer">
           <h5>Degital</h5>
           <span>Products</span>
       </div>
       <div className="contant-container-signup">
         <img className="image" alt="img" src={MySideImage}/>
         
        <div className="Login-container">
        <form onSubmit={handlSubmit}>
        <div className="signup">
            <h4>sign up</h4>
           
         <div className="input-icon">
                <input onChange={handlusername} type="text" placeholder="Username"/>
        </div>
        <div className="email-icon">
                <input onChange={handleEmail} type="text" placeholder="Email"/>
        </div>
        <div className="tell-icon">
                <input onChange={handlTell}   type="text" placeholder="phone"/>
        </div>
        <div className="inputPassword">
            <input  type="text" onChange={hadlPasword} placeholder="Password"/>
        </div>
        <div className="PasswordStatus">
        <ul>
            <Form.Check checked = {states.Status.uppercase ? true :false} disabled readOnly type="checkbox"  label= 'least one uppercase letter'  /> 
            <Form.Check checked = {states.Status.number ? true :false} disabled readOnly type="checkbox"  label= 'least one number character'  /> 
            <Form.Check checked = {states.Status.length ? true :false} disabled readOnly type="checkbox"  label= 'least 8 characters long'  />  
        </ul>

        </div>
        <button type="submit"  className="loginbtn">sign up <LockPersonIcon/></button>
       
       <div className="LoginFooter">
       <span>Already  have an account ? <Link to='/login'>sign in </Link></span>
       <span><Link to='/'>See products</Link></span>
       </div>
         </div>
         </form>
        </div>
       </div>
    </div>
    </>
}