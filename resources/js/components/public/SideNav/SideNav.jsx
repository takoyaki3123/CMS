import React from "react";
import PropTypes from "prop-types";

const SideNav = (props) => {
  return(
    <div>
      <ul className="nav flex-column">
        <li className="nav-item">
          <a href="#" className="nav-link">公告</a>
        </li>
        <li className="nav-item">
          <a href="#" className="nav-link">教材</a>
        </li>
        <li className="nav-item">
          <a href="#" className="nav-link">作業</a>
        </li>
        <li className="nav-item">
          <a href="#" className="nav-link">筆記</a>
        </li>
        <li className="nav-item">
          <a href="#" className="nav-link">小組</a>
        </li>
      </ul>
    </div>
  )
}
SideNav.propTypes = {

}
export default SideNav;