import React, { useEffect, useRef } from "react";
import PropTypes from 'prop-types';
import { baseApi, uploadApi } from "../../../public/api";

const Uploader = (props) => {
  const handleChange = (e) => {
    uploadApi('upload',{"multiple":props.multiple,"image":e.target.files[0]})
    .then((res) => {
      if(res.data.msg){
        alert("upload fail!");
      }

    });

  }
  return(
    <input className="form-control" ref={props.fileRef} type="file" id={props.id} onChange={e=>handleChange(e)} multiple={props.multiple}/>
  )
}
Uploader.propTypes = {
  //bool
  multiple: PropTypes.bool,
  //string
  id: PropTypes.string,
  //other
  fileRef:PropTypes.shape({current: PropTypes.instanceOf(HTMLInputElement)}),
  setFile:PropTypes.func,
}
export default Uploader;
