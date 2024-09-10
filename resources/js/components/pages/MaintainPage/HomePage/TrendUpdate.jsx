import React, { useEffect, useState } from "react";
import { Image, MdTextarea,Uploader } from "../../../public";
import PropTypes from 'prop-types';

const TrendUpdate = (props) => {
  const [tmpSrc,setTmpSrc] = useState("");

  useEffect(()=>{
    setTmpSrc(props.src);
  },[props.src])
  return(
    <div>
			<Image src={tmpSrc} className="d-block m-auto updateImg" errorImg={props.src}/>
      <div className="mx-auto mb-3">
        <Uploader id={"fileUpload"} multiple={false} fileRef={props.fileRef}/>
      </div>
      <MdTextarea
        value={props.desc}
        show={true}
        setValue={props.setDesc}
      />
		</div>
  );
}
TrendUpdate.propTypes = {
	src: PropTypes.string,
  desc: PropTypes.string,

  fileRef:PropTypes.shape({current: PropTypes.instanceOf(HTMLInputElement)}),

  setDesc:PropTypes.func,
};
export default TrendUpdate;
