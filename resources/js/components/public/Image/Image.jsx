import React, { Fragment, useEffect, useState } from "react";

import PropTypes from 'prop-types';
import './Image.scss';
const Image = (props) => {
  const [hide, setHide] = useState(false);
  const [imgSrc, setImgSrc] = useState("");
  const [errored, setErrored] = useState(false);
  const setImageHide = () => {
    setHide(true);
  }
  const showImage = () => {
    setHide(false);
  }

  const onError = () => {
    if (!errored && imgSrc!=="") {
      setImgSrc(props.errorImg);
      setErrored(true);
    }
  }

  useEffect(()=>{
    setImgSrc(props.src);
    if(props.src == ""){
      setImageHide();
    }
    else{
      showImage();
    }
  },[props.src])

  return(
    <Fragment>
      <img
        src={imgSrc}
        alt={props.alt}
        className={`${props.className} ${hide?'hidden':''} responsive`}
        onError={()=>onError()}
      />
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
