import React, { Fragment, useEffect, useState } from "react";

import PropTypes from 'prop-types';
import './Image.scss';
const Image = (props) => {
  const [hide, setHide] = useState(false);
  const [imgSrc, setImgSrc] = useState("");
  const setImageHide = () => {
    setHide(true);
  }
  useEffect(()=>{
    setImgSrc(props.src);
  },[])
  
  return(
    <Fragment>
      <img src={imgSrc} alt={props.alt} className={`${props.className} ${hide?'hidden':''}`} onError={props.errorImg?()=>setImgSrc(props.errorImg):()=>setImageHide()}/>
    </Fragment>
  )
} 
Image.propTypes = {
  src: PropTypes.string,
  alt: PropTypes.string,
  className: PropTypes.string,
  errorImg: PropTypes.string,
}
export default Image;