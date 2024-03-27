import React, { useEffect, useState } from "react";
import PropTypes from 'prop-types';
import { Card, MdTextarea } from "../../public";
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
    <div>
      <div className="">
        <Card
          titleInside={false}
          descLeftSide={true}
          title={""}
          imgSrc={props.detail.IMG_SRC}
          errorSet={false}
          text={teacherDesc}//教師介紹
          size={"100%"}
          onClick={() => { }}
        />
      </div>
      <div className="classDesc">
        <div>
          <MdTextarea show={false} value={props.detail.DESCRIBE}/>
        </div>
      </div>
    </div>)
}
ClassDetailContainer.propTypes = {
  detail: PropTypes.object,
}
export default ClassDetailContainer;
