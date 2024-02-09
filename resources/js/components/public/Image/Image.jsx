import React, { Fragment, useState } from "react";

import PropTypes from 'prop-types';
import './Image.scss';
const Image = (props) => {
  const [hide, setHide] = useState(false);
  const setImageHide = () => {
    setHide(true);
  }
  return(
    <Fragment>
      <img src={props.src} alt={props.alt} className={`${props.className} ${hide?'hidden':''}`} onError={()=>setImageHide()}/>
    </Fragment>
  )
} 
Image.propTypes = {
  src: PropTypes.string,
  alt: PropTypes.string,
  className: PropTypes.string,
}
export default Image;