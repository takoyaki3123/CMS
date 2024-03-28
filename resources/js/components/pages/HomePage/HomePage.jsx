import React from "react";
import { Carousel } from "../../public";
import './HomePage.scss';
const HomePage = (props) => {

  const imgList = [
    {
      src:"/storage/images/補習班1.jpg"
    },
    {
      src:"/storage/images/補習班1.jpg"
    }
  ];
  return(
    <div>
      <div className="homePage-carousel-container">
        <Carousel imgList={imgList}/>
      </div>
    </div>
  )
}

export default HomePage;
