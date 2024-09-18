import React, { useEffect, useState } from "react";
import PropTypes from 'prop-types';
import { Image, TextField, Uploader } from "../../../public";
import './TypeBrowse.scss';
const TypeBrowseUpdate = (props) => {
  const [tmpSrc,setTmpSrc] = useState("");
  useEffect(()=>{
    setTmpSrc(props.src);
  },[props.src])
  useEffect(()=>{

    if(props.fileRef.current.files[0]){
      props.setVO({...props.VO,"imgName":props.fileRef.current.files[0].name})
    }
  },[props.fileRef.current])
  return (
    <div>
			<Image src={tmpSrc} className="d-block m-auto updateImg" errorImg={props.src}/>
      <div className="mx-auto mb-3 mt-1">
        <Uploader id={"fileUpload"} multiple={false} fileRef={props.fileRef}/>
      </div>
      <div className="py-2">
        <TextField
          type={"text"}
          voName={"typeName"}
          fieldName={"タイプ名"}
          nameDisplay={true}
          nameInLeft={true}
          VO={props.VO}
          setVO={props.setVO}
        />
      </div>
      <div className="py-2">
        <TextField
          type={"text"}
          voName={"typeCode"}
          fieldName={"タイプコード"}
          nameDisplay={true}
          nameInLeft={true}
          VO={props.VO}
          setVO={props.setVO}
        />
      </div>
		</div>
  );
}
TypeBrowseUpdate.propTypes = {
  VO: PropTypes.object,

  setVO: PropTypes.func,

	src: PropTypes.string,

  fileRef:PropTypes.shape({current: PropTypes.instanceOf(HTMLInputElement)}),

}
export default TypeBrowseUpdate;
