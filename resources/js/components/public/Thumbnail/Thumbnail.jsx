import React, { useEffect, useState } from "react";
import PropTypes from 'prop-types';
import './Thumbnail.scss';
const Thumbnail = (props) => {
  const [mouseIn,setMouseIn] = useState(false);
  const mouseOver = () => {
    if(!mouseIn){
      const popover = document.querySelectorAll(".tooltip");
      const btn = document.querySelectorAll(".thumbnailBtn");
      const btnHeight = btn[0].getBoundingClientRect().height;
      const windowsHeight = document.body.offsetHeight;
      setMouseIn(true);

      for(var i = 0; i < popover.length; i++){
        popover[i].style.display = 'block';
        const needHeight = popover[i].getBoundingClientRect().height + popover[i].getBoundingClientRect().top;
        // popover[i].style.left = btnWidth + 'px';
        if(needHeight < windowsHeight){
          popover[i].style.top = btnHeight + 'px';
        }
        else{
          popover[i].style.top = '-' + popover[i].getBoundingClientRect().height + 'px';
          console.log(popover[i].style.top);

        }
      }
    }

  }

  const mouseOut = () => {
    if(mouseIn){
      setMouseIn(false);
      const popover = document.querySelectorAll(".tooltip");
      const btn = document.querySelectorAll(".thumbnailBtn");
      const btnHeight = btn[0].getBoundingClientRect().height;

      for(var i = 0; i < popover.length; i++){
        popover[i].style.top = btnHeight + 'px';
        popover[i].style.display = "none";
      }
    }
  }

  return (
      <div className="thumbnail">
          <button type="button" className="btn btn-primary thumbnailBtn" onMouseOut={()=>mouseOut()} onMouseOver={()=>mouseOver()}>{props.btnText}</button>
          <div className="tooltip thumbnailContent" style={{ display:"none" }}>{props.children}</div>
      </div>

  )
}
Thumbnail.propTypes = {
    btnText: PropTypes.string,
}
export default Thumbnail;
