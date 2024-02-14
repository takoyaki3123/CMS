import React, { Fragment } from "react";
import PropTypes from "prop-types";
import Image from "../Image/Image";

const PersonalInfo = (props) => {
  return(
    <div className="row w-100">
      <div className="col-4 px-0">
      {/*  left  */}
        <div className="mx-5">
          <Image src={props.stickerSrc} alt="sticker" className={"w-100"} errorImg={"/storage/images/default-user.jpg"}/>
        </div>
      </div>
      <div className="col-8 px-0">
      {/*  right  */}
        <div>
          {props.name?<h4><b>{props.name}</b></h4>:<Fragment/>}
          <pre>
            {props.info}
          </pre>
        </div>
      </div>
    </div>
  )
}
PersonalInfo.propTypes = {
  stickerSrc: PropTypes.string,
  info: PropTypes.string,
  name: PropTypes.string,
}
export default PersonalInfo;