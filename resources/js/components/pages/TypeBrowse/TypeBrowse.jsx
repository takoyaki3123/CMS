import React, { Fragment, useEffect, useState } from "react";
import { baseApi } from "../../../public/api";
import TypeBrowseContainer from "./TypeBrowseContainer";
import './TypeBrowse.scss';
const TypeBrowse = () => {
  const [typeList,setTypeList] = useState([]);
  const init = () => {
    getAllType();
  }
  const getAllType = () => {
    baseApi('classType',{})
    .then((res) => {
        console.log("res",res);
      setTypeList(res.data);
    })
  }
  useEffect(() => {
    init();
  },[])
  return (
    <div className="typeBrowse mt-2">
        <div>
            {/* 標題 */}
        </div>
        <TypeBrowseContainer
            typeList={typeList}
        />
    </div>
  );
}
export default TypeBrowse;
