import '../../Style/Headers/SideBar.css' ;
import { Link } from 'react-router-dom';

export default function SideBar(){
    return <div className='Container'>
         <ul>
            <li><Link style={{textDecoration:'none ' , color : "black"}} to='/'>Products</Link></li>
            <li><Link style={{textDecoration:'none ' , color : "black"}} to='/About'>About</Link></li>
            <li><Link style={{textDecoration:'none ' , color : "black"}} to='/Contact'>Contact</Link></li>
        </ul>
    </div>
}