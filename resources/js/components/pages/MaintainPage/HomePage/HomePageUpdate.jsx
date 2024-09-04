import React, { useEffect, useState } from "react";
import PropTypes from 'prop-types'
import { Image } from "../../../public";
import './HomePage.scss';
import Uploader from "../../../public/Uploader/Uploader";

const HomePageUpdate = (props) => {
  const [tmpSrc,setTmpSrc] = useState("");

  useEffect(()=>{
    setTmpSrc(props.src);
  },[props.src])
	return (
		<div>
			<Image src={tmpSrc} className="d-block m-auto updateImg" errorImg={props.src}/>
      <div className="mx-auto mb-3">
        <Uploader id={"fileUpload"} multiple={false} fileRef={props.fileRef} setFile={props.setFile}/>
      </div>
		</div>
	)
}
HomePageUpdate.propTypes = {
	src: PropTypes.string,

  fileRef:PropTypes.shape({current: PropTypes.instanceOf(HTMLInputElement)}),

  setFile:PropTypes.func,
}
export default HomePageUpdate;
