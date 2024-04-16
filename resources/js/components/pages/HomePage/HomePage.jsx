import React, { useEffect, useState } from "react";
import { Card, Carousel } from "../../public";
import './HomePage.scss';
import { baseApi } from "../../../public/api";
const HomePage = (props) => {
  const [suggestList, setSuggestList] = useState([]);
  const [imgList, setImgList] = useState([]);
  const init = () => {
    baseApi("suggestClass",{})
    .then((res) => {
      setSuggestList(res.data);
    });
    baseApi("carouselImg",{})
    .then((res) => {
      setImgList(res.data);
    });
  }
  useEffect(()=>{
    init();
  },[])
  return(
    <div>
      <div className="homePage-carousel-container">
        <Carousel imgList={imgList}/>
      </div>
      {suggestList.map((row,idx)=>
        <div className="hot-class d-flex justify-content-center" key={idx}>
          <Card
            titleInside={false}
            descSide={idx % 2 === 0?"left":"right"}
            title={""}
            imgSrc={row.IMG_SRC}
            errorSet={false}
            text={row.DESC}//教師介紹
            class={idx % 2 === 0?"ps-4":"pe-4"}
            size={"100%"}
            onClick={() => { }}
          />
        </div>
      )}
    </div>
  )
}

export default HomePage;
