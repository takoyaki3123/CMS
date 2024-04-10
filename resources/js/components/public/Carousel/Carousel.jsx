import React, { Fragment, useEffect } from "react";

import PropTypes from "prop-types";
import Image from "../Image/Image";
import './Carousel.scss';
import * as bootstrap from 'bootstrap';
const Carousel = (props) => {
  useEffect(()=>{
    // reset carousel
    // ref https://stackoverflow.com/questions/69163645/bootstrap-5-carousel-only-starts-automated-sliding-after-first-click-on-next
    const carouselContainer = document.querySelector("#carouselExampleIndicators");
    const carousel = new bootstrap.Carousel(carouselContainer);
    carousel.cycle();
  },[])
  return(
    <div id="carouselExampleIndicators" className="carousel slide" data-bs-ride="carousel">
      <div className="carousel-indicators">
        {props.imgList?props.imgList.map((_,idx)=>
        <Fragment key={idx}>
          <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to={idx} className={idx==0?"active":""}></button>

        </Fragment>
        ):<Fragment/>}

      </div>
      <div className="carousel-inner">
        {props.imgList?props.imgList.map((row,idx)=>
          <div className={`carousel-item ${idx==0?"active":""}`} key={idx} data-bs-interval="5000">
            <Image src={row.src} className="d-block m-auto Carousel-img" alt="First slide"/>
          </div>
        ):
        <Fragment/>}

      </div>
      <button className="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span className="carousel-control-prev-icon" aria-hidden="true"></span>
        <span className="visually-hidden">Previous</span>
      </button>
      <button className="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span className="carousel-control-next-icon" aria-hidden="true"></span>
        <span className="visually-hidden">Next</span>
      </button>
    </div>
  )
}
Carousel.propTypes = {
  // array
  imgList: PropTypes.array,
}
export default Carousel;
