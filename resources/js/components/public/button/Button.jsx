import React, { Fragment } from "react";
import PropTypes from "prop-types";
import './Button.scss';
const Button = (props) => {

  return(
    <Fragment>
      <span className={`${props.variant}`} hidden={!props.isShow}>
        <button className={`btn ${props.type}`} onClick={()=>props.onClick(props.param)}>
          {props.text}
        </button>
      </span>
    </Fragment>
  )
}
Button.propTypes = {
  // string
  text: PropTypes.string,
  type: PropTypes.string, // success綠, primary 藍, error 紅, other 灰
  variant: PropTypes.string, // outline 外邊框, contain 內部填滿, none 無邊框
  // bool
  isShow: PropTypes.bool,
  // object
  param: PropTypes.object,
  // func
  onClick: PropTypes.func,
}

export default Button;