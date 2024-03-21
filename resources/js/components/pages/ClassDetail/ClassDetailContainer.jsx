import React, { useState } from "react";
import PropTypes from 'prop-types';
import { Card } from "../../public";
const ClassDetailContainer = (props) => {
  const [teacherDesc, setTeacherDesc] = useState("");
  return (
    <div>
      <Card
        titleInside={false}
        descLeftSide={true}
        title={""}
        imgSrc={props.detail.IMG_SRC}
        text={props.detail.DESCRIBE}//教師介紹
        size={"100%"}
        onClick={() => { }}
      />
    </div>)
}
ClassDetailContainer.propTypes = {
  detail: PropTypes.object,
}
export default ClassDetailContainer;
