import React, { useEffect, useState } from "react";
import PropTypes from 'prop-types';
import { Card, MdTextarea } from "../../../public";
import DetailUpdate from "./DetailUpdate";
import * as bootstrap from 'bootstrap';
const DetailContainer = (props) => {
  const [studentDetail,setStudentDetail] = useState("");
  const openModal = () => {
    const modalContainer = document.querySelector("#modal");
    const modal = new bootstrap.Modal(modalContainer);
    modal.show();
  }
  useEffect(()=>{
    let tmpDetail = "";
    tmpDetail += "姓名:" + props.userInfo.name + "\r\n";
    tmpDetail += "性別:" + props.userInfo.sex + "\r\n";
    tmpDetail += "年齡:" + props.userInfo.age + "\r\n";
    tmpDetail += "email:" + props.userInfo.email + "\r\n";
    tmpDetail += "帳號:" + props.userInfo.acct + "\r\n";
    setStudentDetail(tmpDetail);
  },[props.userInfo]);
  return(
    <div>
      <div className="">
        <Card
          titleInside={false}
          descSide={"right"}
          title={""}
          imgSrc={"/storage/images/default-user.jpg"}
          errorSet={false}
          text={studentDetail}//教師介紹
          size={"100%"}
          onClick={() => { }}
        />
        <div className="d-flex justify-content-end">
          <button type="button" className="btn btn-primary" onClick={()=>{openModal()}}>修改</button>
        </div>
      </div>
      <div className="">
      </div>
      <DetailUpdate userInfo={props.userInfo} updateUser={props.updateUser}/>
    </div>
  )
}
DetailContainer.propTypes = {
  // object
  userInfo: PropTypes.object,
  // function
  updateUser: PropTypes.func,
}
export default DetailContainer;
