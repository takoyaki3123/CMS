import React, { Fragment } from "react";

import PropTypes from 'prop-types';
import { useHistory } from "react-router-dom/cjs/react-router-dom";
import { useSelector } from "react-redux";
const NavbarContainer = (props) => {
  const userInfo = useSelector((state) => state.userInfo);
  const history = useHistory();
  const gade = (url, data) => {
    history.push(url,data);
  }
  return (
    <Fragment>
      <nav className="navbar navbar-expand-lg lg-body-tertiary p-0 container-md">
        <div className="container-fluid d-flex">
          <a href="#"  onClick={()=>gade("/cms/home",{})} className="navbar-brand">CMS</a>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarContent">
            <ul className="navbar-nav ms-auto mb-2 mb-lg-0">
              {props.isLogin?
                <Fragment>
                  <li className="nav-item"><a href="#" onClick={()=>gade("/cms/class/type",{})} className="nav-link">課程檢視</a></li>
                  <li className="nav-item"><a href="#" onClick={()=>gade("/cms/personal",{})} className="nav-link">{userInfo.name}</a></li>
                </Fragment>
                :
                <Fragment>
                  <li className="nav-item"><a href="#" className="nav-link">首頁</a></li>
                  <li className="nav-item"><a href="#"  onClick={()=>gade("/cms/login",{})} className="nav-link">登入</a></li>
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
