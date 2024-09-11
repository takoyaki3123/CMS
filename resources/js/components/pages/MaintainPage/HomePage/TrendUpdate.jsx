import React, { useEffect, useState } from "react";
import { Image, MdTextarea,Select,Uploader } from "../../../public";
import PropTypes from 'prop-types';

const TrendUpdate = (props) => {
  const [tmpSrc,setTmpSrc] = useState("");
  useEffect(()=>{
    setTmpSrc(props.src);
  },[props.src])
  useEffect(()=>{

    if(props.fileRef.current.files[0]){
      props.setVO({...props.VO,"imageName":props.fileRef.current.files[0].name})
    }
  },[props.fileRef.current])
  return(
    <div>
			<Image src={tmpSrc} className="d-block m-auto updateImg" errorImg={props.src}/>
      <div className="mx-auto mb-3 mt-1">
        <Uploader id={"fileUpload"} multiple={false} fileRef={props.fileRef}/>
      </div>
      <div className="my-2">
        <Select
          voName={"classID"}
          selectName={"関連授業"}
          nameDisplay={true}
          nameInLeft={true}
          VO={props.VO}
          setVO={props.setVO}
          option={props.classList}/>
      </div>
      <MdTextarea
        value={props.tmpDesc}
        show={true}
        setValue={props.setTmpDesc}
      />
		</div>
  );
}
TrendUpdate.propTypes = {
	src: PropTypes.string,
  tmpDesc:PropTypes.string,

  fileRef:PropTypes.shape({current: PropTypes.instanceOf(HTMLInputElement)}),

  VO:PropTypes.object,
  classList:PropTypes.array,

  setVO: PropTypes.func,
  setTmpDesc: PropTypes.func,
};
export default TrendUpdate;
