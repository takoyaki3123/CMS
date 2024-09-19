import React, { useEffect, useRef, useState } from "react";

import TypeBrowseUpdate from "./TypeBrowseUpdate";
import './TypeBrowse.scss';
import { baseApi } from "../../../../public/api";
import { Button, Dialog, Table } from "../../../public";
import { openModal } from "../../../../public/utils/utils";
import { TypeVO } from "./TypeVO";
const TypeBrowse = () => {
  const [VO,setVO] = useState(new Object(TypeVO));
  const [typeList, setTypeList] = useState([]);
  // const [typeID, setTypeID] = useState([]);
  const [imgSrc, setImgSrc] = useState("");
  const fileRef = useRef(null);
  const head = ["ID","タイプ名","タイプコード","操作"];
  const classEachCell = ["","","","maintainArea"];

  const init = () => {
    getAllType();
  }

  // dialog that can update type data
  const showModal = (id, type, typeName, typeCode, src) => {
    setImgSrc(src);
    // setTypeID(type);
    openModal(id);
    setVO({...VO, "id":type, "typeName":typeName, "typeCode": typeCode});
  }
  const deleteType = (id) => {

  }
  const addType = () => {

  }
  // get type list data
  const getAllType = () => {
    baseApi('classType', {})
      .then((res) => {
        console.log("res", res);
        let tmp = [];
        res.data.map((row, idx) => {
          tmp.push({
            "ID": idx + 1,
            "typeName": <p>{row.TYPE_NAME}</p>,
            "typeCode": <p>{row.CODE}</p>,
            "maintainanceButton":
            <div className="maintainArea">
              <Button text={"修正"} type={"primary"} variant={"contain"} isShow={true} onClick={() => showModal("typeUpdate", idx + 1, row.TYPE_NAME, row.CODE, row.IMG_SRC)} />
              <Button text={"消去"} type={"error"} variant={"contain"} isShow={true} onClick={() => deleteType(idx)} />
            </div>,
          })
        })
        setTypeList(tmp);
      })
  }
  const dialogCancel = () => {
    // reset file ref data
    if (fileRef.current) {

      fileRef.current.value = "";
      fileRef.current.type = "file";
    }
  }

  // update type data
  const update = () => {
    return new Promise((resolve) => {
      baseApi('classTypeUpload', VO)
        .then((res) => {
          if (res.data.msg) {
            alert("update fail!");
          }
          else {
            init();
            resolve(true);
          }
        });
    })
  }

  useEffect(() => {
    init();
  }, [])
  return (
    <div className="typeBrowse mt-2 container">
      <div className="type-title px-5 mt-4">
        <h3>コースタイプ</h3>
      </div>
      <hr width="100%"/>
      <div className="float-end">
        <Button text={"+"} type={"success"} variant={"contain"} isShow={true} onClick={() => addType()} />
      </div>
      <Table head={head} value={typeList} classEachCell={classEachCell}/>
      <Dialog
          modalId={"typeUpdate"}
          title={"タイプ修正"}
          submitText={"修正"}
          submit={update}
          cancelText={"取消"}
          cancel={() => dialogCancel()}>
          <TypeBrowseUpdate
            src={imgSrc}
            fileRef={fileRef}
            VO={VO}
            setVO={setVO}
          />
        </Dialog>
    </div>
  );
}
export default TypeBrowse;
