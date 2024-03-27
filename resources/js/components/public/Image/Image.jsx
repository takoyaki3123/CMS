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
    if(props.sec == ""){
      setImageHide();
    }
    console.log(props.errorSet);
  },[])

  return(
    <Fragment>
      <img src={imgSrc} alt={props.alt} className={`${props.className} ${hide?'hidden':''}`}/>
    </Fragment>
  )
}
Image.propTypes = {
  src: PropTypes.string,
  alt: PropTypes.string,
  className: PropTypes.string,
  errorImg: PropTypes.string,
  //bool,
  errorSet: PropTypes.bool,
}
export default Image;
