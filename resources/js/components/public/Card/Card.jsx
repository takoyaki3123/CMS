import React, { Fragment } from "react";

import PropTypes from "prop-types";
import Image from "../Image/Image";
import './Card.scss';
const Card = (props) => {

  return (
    <div className={`card ${props.class}`} style={{ width: props.size }}>
      <div className={`${props.descSide ? "row card-row mx-0" : ""}`}>

        {props.text && props.descSide==="left"?
          <div className={`card-body d-flex align-items-center ${props.descSide ? "col-8" : ""}`}>
            <span className="card-text">
              <pre>{props.text}</pre>
            </span>
          </div>
          : <Fragment />}
        <div className={` ${props.titleInside ? "cardInside" : ""} ${props.descSide ? "col-4" : ""}`}>
          <a href={props.link} onClick={() => props.onClick()} className="card-href d-flex justify-content-center">
            <Image
              src={props.imgSrc}
              alt="..."
              className={`card-img-top ${props.imgClass}`}
              errorImg={props.errorImgSrc}
              errorSet={props.errorSet} />
          </a>
          {props.title?
          <div className="card-title w-100"><h4 className="card-title-text d-flex justify-content-center">{props.title}</h4></div>
          :
          <Fragment/>}

        </div>
        {props.text && props.descSide==="right"?
          <div className={`card-body d-flex align-items-center ${props.descSide ? "col-8" : ""}`}>
            <span className="card-text">
              <pre>{props.text}</pre>
            </span>
          </div>
          : <Fragment />}
      </div>
    </div>
  )
};
Card.propTypes = {
  // bool
  titleInside: PropTypes.bool,
  errorSet: PropTypes.bool,
  // string
  descSide: PropTypes.string,
  title: PropTypes.string,
  text: PropTypes.string,
  imgSrc: PropTypes.string,
  errorImgSrc: PropTypes.string,
  link: PropTypes.string,
  size: PropTypes.string,
  class: PropTypes.string,
  imgClass: PropTypes.string,
  //func
  onClick: PropTypes.func,
};
export default Card;
