import React, { Fragment } from "react";

import PropTypes from "prop-types";
import Image from "../Image/Image";
import './Card.scss';
const Card = (props) => {

  return(
    <div className={`card`} style={{ width:props.size }} onClick={() => props.onClick()}>
      <div className={` ${props.titleInside?"cardInside":""}`}>
        <a href={props.link}>
          <Image src={"/storage/images/補習班1.jpg"} alt="..." className={"card-img-top"}/>
        </a>
        <div className="card-title w-100"><h5 className=" d-flex justify-content-center">{props.title}</h5></div>
      </div>
      {props.text?
        <div className={`card-body`}>
            <pre className="card-text">{props.text}</pre>
        </div>
        :<Fragment/>}

    </div>
  )
};
Card.propTypes = {
  // bool
  titleInside: PropTypes.bool,
  // string
  title: PropTypes.string,
  text: PropTypes.string,
  imgSrc: PropTypes.string,
  link: PropTypes.string,
  size: PropTypes.string,
  //func
  onClick: PropTypes.func,
};
export default Card;
