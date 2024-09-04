import React, { useEffect, useRef, useState } from "react";
import Table from "../../../public/Table/Table";
import { baseApi, uploadApi } from "../../../../public/api";
import Thumbnail from "../../../public/Thumbnail/Thumbnail";
import { Button, Dialog, Image } from "../../../public";
import HomePageUpdate from "./HomePageUpdate";
import {openModal} from '../../../../public/utils/utils';

const HomePageMaintain = (props) => {
    const head = ["ID","ビジュアルダイアグラム","操作"];
    const [val,setVal] = useState([]);
    const [updateSrc, setUpdateSrc] = useState("");
    const [carouselID,setCarouselID] = useState(0);
    const [image, setImage] = useState({});
    const fileRef = useRef(null);
    const showModal = (id,carouselID,src) => {
      setUpdateSrc(src);
      setCarouselID(carouselID);
      openModal(id);
    }
    const init = () => {
        baseApi("carouselImg",{})
        .then((res)=>{
            let tmp = [];
            res.data.map((row,idx)=>{
              tmp.push({"ID":idx+1,
                        "thumbnail":<Thumbnail btnText={"サムネイル画像"}><Image className={"d-block m-auto"} src={row.IMG_SRC}/></Thumbnail>,
                        "maintainButton":<Button text={"修正"} type={"primary"} variant={"contain"} isShow={true} onClick={()=>showModal("modal",idx+1,row.IMG_SRC)}/>
                      })
            })
            setVal([...tmp]);
        });
    }

    const dialogCancel = () => {
      if(fileRef.current){

        fileRef.current.value = "";
        fileRef.current.type = "file";
      }
    }
    const update = () => {
      return new Promise((resolve)=>{
        baseApi('homeVisionUpload',{"id":carouselID,"imageName":fileRef.current.files[0].name})
        .then((res) => {
          if(res.data.msg){
            alert("update fail!");
          }
          else{
            init();
            resolve(true);
          }
        });
      })
    }
    const backup = () => {
      return new Promise((resolve)=>{
        uploadApi('homeVisionUpload',{"id":carouselID,"image":fileRef.current.files[0]})
        .then((res) => {
          if(res.data.msg){
            alert("update fail!");
          }
          else{
            init();
            resolve(true);
          }
        });
      })
    }

    useEffect(()=>{
        init();
    },[])
    return(
        <div className="container px-5">
            <Table head={head} value={val}/>
            <Dialog
              modalId={"modal"}
              title={"画像修正"}
              submitText={"修正"}
              submit={update}
              cancelText={"取消"}
              cancel={() => dialogCancel()}>
              <HomePageUpdate src={updateSrc} fileRef={fileRef} setFile={setImage}/>
            </Dialog>
        </div>
    );
};
export default HomePageMaintain;
