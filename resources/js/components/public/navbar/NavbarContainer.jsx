import React, { Fragment } from "react";

import PropTypes from 'prop-types';
const NavbarContainer = (props) => {

  return (
    <Fragment>
      <nav className="navbar navbar-expand-lg lg-body-tertiary p-0 container-md">
        <div className="container-fluid d-flex">
          <a href="#" className="navbar-brand">CMS</a>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarContent">
            <ul className="navbar-nav ms-auto mb-2 mb-lg-0">
              {props.isLogin?
                <Fragment>
                  <li className="nav-item"><a href="#" className="nav-link">test1</a></li>
                </Fragment>  
                :
                <Fragment>
                  <li className="nav-item"><a href="#" className="nav-link">首頁</a></li>
                  <li className="nav-item"><a href="#" className="nav-link">登入</a></li>
                </Fragment>
              }
              
            </ul>
          </div>
        </div>
      </nav>
    </Fragment>
  );
}
NavbarContainer.propTypes = {
  isLogin: PropTypes.bool,
}
export default NavbarContainer;