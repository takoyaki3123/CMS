import React from "react";
import PropTypes from 'prop-types';
import Image from "../Image/Image";
import './Avatar.scss';
const Avatar = (props) => {
  return(
    <div className="avatar-container">
      <Image src={props.imgSrc} className={"w-100 h-100 rounded"}/>
      <div className="avatar d-flex justify-content-center w-100">
        <span>{props.name}</span>
      </div>
    </div>
  )
}
Avatar.propTypes = {
  imgSrc: PropTypes.string,
  name: PropTypes.string,
}
export default Avatar;