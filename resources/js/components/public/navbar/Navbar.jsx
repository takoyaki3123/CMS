import React from "react";
import ReactDOM from "react-dom";

import NavbarContainer from "./NavbarContainer";

import PropTypes from 'prop-types';

const Navbar = (props) => {
  return (
    <div className="d-flex align-item-center navbar-container">
      <NavbarContainer isLogin={props.isLogin}/>
    </div>
  )
}
Navbar.propTypes = {
  isLogin: PropTypes.bool,
}
export default Navbar;

if (document.getElementById('Navbar')) {
  ReactDOM.render(<Navbar/>,document.getElementById("Navbar"));
}