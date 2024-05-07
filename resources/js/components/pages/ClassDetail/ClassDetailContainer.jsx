import React, { useEffect, useState } from "react";
import PropTypes from 'prop-types';
import { Card, MdTextarea } from "../../public";
import './ClassDetail.scss';
const ClassDetailContainer = (props) => {
  const [teacherDesc, setTeacherDesc] = useState("");
  useEffect(()=>{
    console.log("detail",props.detail);
    let desc = "教師姓名:" + props.detail.NAME + "\r\n";
    desc    += "擅長領域:" + props.detail.EXPERTISE + "\r\n";
    desc    += "畢業學校:" + props.detail.GRADUATED_SCHOOL + "\r\n";
    desc    += "電子信箱:" + props.detail.EMAIL + "\r\n";
    setTeacherDesc(desc);
  },[props.detail])
  return (
    <div className="container">
      <div className="class-totur">
        <Card
          titleInside={false}
          descSide={"right"}
          title={""}
          imgSrc={props.detail.IMG_SRC}
          errorImgSrc={"/storage/images/default-user.jpg"}
          errorSet={false}
          text={teacherDesc}//教師介紹
          size={"100%"}
          class={"detail-bg"}
          imgClass={"detail-card-img"}
          onClick={() => { }}
        />
      </div>
      <div className="classDesc mt-3">
        <div className="px-2">
          <MdTextarea show={false} value={props.detail.DESCRIBE}/>
        </div>
      </div>
      <div className="mt-3">
        {/* <button className="w-100 btn btn-primary py-2"> */}
          <a target="_blank" href={`${props.detail.CLASS_LINK}`} className="class-link w-100 btn btn-primary py-2">課程網站</a>
        {/* </button> */}
      </div>
    </div>)
}
ClassDetailContainer.propTypes = {
  detail: PropTypes.object,
}
export default ClassDetailContainer;
