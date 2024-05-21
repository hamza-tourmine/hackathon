import React, { useState } from "react";
import '../../Style/Headers/MainHeader.css';
import SearchIcon from '@mui/icons-material/Search';
import Button from '@mui/material/Button';
import Dialog from '@mui/material/Dialog';
import DialogActions from '@mui/material/DialogActions';
import DialogContent from '@mui/material/DialogContent';
import DialogContentText from '@mui/material/DialogContentText';
import DialogTitle from '@mui/material/DialogTitle';
import Slide from '@mui/material/Slide';
import Form from 'react-bootstrap/Form';
import LocalMallIcon from '@mui/icons-material/LocalMall';
import LockOpenIcon from '@mui/icons-material/LockOpen';
import MenuIcon from '@mui/icons-material/Menu';
import SideBar from "./SideBar";
import { Link } from "react-router-dom";

const Transition = React.forwardRef(function Transition(props, ref) {
  return <Slide direction="up" ref={ref} {...props} />;
});

export default function MainHeader() {
  const [SearchValue, setSearchValue] = useState('');
  const [burgerIcon, setBurgerIcon] = useState(false);
  const [open, setOpen] = useState(false);

  // for Search input
  const handleSearchInput = (ev) => {
    setSearchValue(ev.target.value);
  };

  const handleClickOpen = () => {
    setOpen(true);
  };

  const handleClose = () => {
    setOpen(false);
  };

  // side bar
  const handleBurgerIcon = (ev) => {
    setBurgerIcon(ev);
  };

  return (
    <div>
      {/* Main header */}
      <div className="HeaderContainer">
        <div className="PartOne">
          <MenuIcon onClick={() => handleBurgerIcon(!burgerIcon)} className="BurgerIcon text-primary" />
          <ul>
            <li><Link style={{textDecoration:'none ' , color : "black"}} to='/'>All Products</Link></li>
            <li><Link style={{textDecoration:'none ' , color : "black"}} to='/About'>About</Link></li>
            <li><Link style={{textDecoration:'none ' , color : "black"}} to='/Contact'>Contact</Link></li>
          </ul>
        </div>
        <div className="PartTwo">
          <span>Degital</span>
          <span>Products</span>
        </div>
        <div onClick={handleClickOpen} className="PartTree">
          <SearchIcon className="text-primary SearchIcon" />
          <span>Search ...</span>
        </div>

        <div className="PartFor">
          <SearchIcon onClick={handleClickOpen} className="text-primary SearchSmoolScreen" />
          <LocalMallIcon className="cardIcon text-primary" />
          <Link style={{textDecoration:'none ' , color : "black"}} to="/login"><LockOpenIcon className="text-primary loginIcon" /></Link>
        </div>
        {/* popap */}
        <Dialog
          open={open}
          TransitionComponent={Transition}
          keepMounted
          onClose={handleClose}
          aria-describedby="alert-dialog-slide-description">
          <DialogTitle>
            <Form.Label htmlFor="inputSearch">Search</Form.Label>
            <Form.Control
              type="text"
              onChange={handleSearchInput}
              value={SearchValue}
              id="inputSearch"
              aria-describedby="SearchHelpBlock" />
          </DialogTitle>
          <DialogContent>
            <DialogContentText id="alert-dialog-slide-description">
              Let Google help apps determine location. This means sending anonymous data, even when no apps are running.
            </DialogContentText>
          </DialogContent>
          <DialogActions>
            <Button variant="outlined" onClick={handleClose}>Close</Button>
          </DialogActions>
        </Dialog>
      </div>
      {/* Side bar start */}
      {burgerIcon ? <SideBar /> : ''}
    </div>
  );
}
