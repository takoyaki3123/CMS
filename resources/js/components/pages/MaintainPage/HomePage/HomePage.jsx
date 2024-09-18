import React, { useEffect, useRef, useState } from "react";
import { baseApi, uploadApi } from "../../../../public/api";
import { Button, Dialog, Image, Thumbnail, Table, MdTextarea } from "../../../public";
import HomePageUpdate from "./HomePageUpdate";
import { openModal } from '../../../../public/utils/utils';
import TrendUpdate from "./TrendUpdate";
import './Homepage.scss';
import { trendVO } from './HomePageVO';
const HomePageMaintain = (props) => {
  const head = ["ID", "ビジュアルダイアグラム", "操作"];
  const [classList, setClassList] = useState([]);
  const [val, setVal] = useState([]);
  const [updateSrc, setUpdateSrc] = useState("");
  const [carouselID, setCarouselID] = useState(0);
  const fileRef = useRef(null);

  //trend use
  const trendHead = ["ID", "画像", "説明", "操作"];
  const [updateTrendSrc, setUpdateTrendSrc] = useState("");
  const [trendVal, setTrendVal] = useState([]);
  const trendFileRef = useRef(null);
  const [VO, setVO] = useState(new Object(trendVO));
  const [tmpDesc, setTmpDesc] = useState("");

  // vision image dialog
  const showModal = (id, carouselID, src) => {
    setUpdateSrc(src);
    setCarouselID(carouselID);
    openModal(id);
  }


  // trend dialog
  const showTrendModal = (id, trendID, desc, classID, src) => {
    setUpdateTrendSrc(src);
    openModal(id);
    //setVO
    setTmpDesc(desc);
    setVO({ ...VO, "id": trendID, "desc": desc, "classID": classID });

  }

  // get carousel data and trend data
  const init = () => {

    // get carousel data
    baseApi("carouselImg", {})
      .then((res) => {
        let tmp = [];
        res.data.map((row, idx) => {
          tmp.push({
            "ID": idx + 1,
            "thumbnail": <Thumbnail btnText={"サムネイル画像"}><Image className={"d-block m-auto"} src={row.IMG_SRC} /></Thumbnail>,
            "maintainButton": <Button text={"修正"} type={"primary"} variant={"contain"} isShow={true} onClick={() => showModal("modal", idx + 1, row.IMG_SRC)} />
          })
        })
        setVal([...tmp]);
      });

    // get trend data
    baseApi("suggestClass", {})
      .then((res) => {
        let tmp = [];
        res.data.map((row, idx) => {
          tmp.push({
            "ID": idx + 1,
            "thumbnail": <Thumbnail btnText={"サムネイル画像"}><Image className={"d-block m-auto"} src={row.IMG_SRC} /></Thumbnail>,
            "description": <div className="desc py-2"><MdTextarea value={row.DESC} show={false} /></div>,
            "maintainButton": <Button text={"修正"} type={"primary"} variant={"contain"} isShow={true} onClick={() => showTrendModal("trend", idx + 1, row.DESC, row.CLASS_ID, row.IMG_SRC)} />
          })
        })
        setTrendVal([...tmp]);
      });

    // get class list for select in trend update dialog
    baseApi("AllClassList", {})
      .then((res) => {
        let tmp = [];
        res.data.map((row, idx) => {
          tmp.push({ val: row.id, label: row.CLASS_NAME });
        })
        setClassList(tmp);
      });
  }

  const dialogCancel = () => {
    // reset file ref data
    if (fileRef.current) {

      fileRef.current.value = "";
      fileRef.current.type = "file";
    }
    if (trendFileRef.current) {
      trendFileRef.current.value = "";
      trendFileRef.current.type = "file";
    }
  }

  // update vision image data
  const update = () => {
    return new Promise((resolve) => {
      if (fileRef.current.files[0]) {
        baseApi('homeVisionUpload', { "id": carouselID, "imageName": fileRef.current.files[0].name })
          .then((res) => {
            if (res.data.msg) {
              alert("update fail!");
            }
            else {
              init();
              resolve(true);
            }
          });
      }
      else {
        resolve(false);
      }
    })
  }
  // update trend data
  const trendUpdate = () => {
    return new Promise((resolve) => {
      baseApi('homeTrendUpload', VO)
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
  const setDesc = (text) => {
    setVO({ ...VO, "desc": text });
  }

  useEffect(() => {
    setDesc(tmpDesc);
  }, [tmpDesc])
  useEffect(() => {
    init();
  }, [])
  return (
    <div className="container px-5">
      <div className="visionBlock">
        <div className="py-2">
          <h4>ビジュアルダイアグラム</h4>
        </div>
        <Table head={head} value={val} />
        <Dialog
          modalId={"modal"}
          title={"画像修正"}
          submitText={"修正"}
          submit={update}
          cancelText={"取消"}
          cancel={() => dialogCancel()}>
          <HomePageUpdate src={updateSrc} fileRef={fileRef} />
        </Dialog>
      </div>
      <hr />
      <div className="trendBlock">
        <div className="py-2">
          <h4>トレンド</h4>
        </div>
        <Table head={trendHead} value={trendVal} />
        <Dialog
          modalId={"trend"}
          title={"画像修正"}
          submitText={"修正"}
          submit={trendUpdate}
          cancelText={"取消"}
          cancel={() => dialogCancel()}>
          <TrendUpdate
            src={updateTrendSrc}
            fileRef={trendFileRef}
            VO={VO}
            setVO={setVO}
            classList={classList}
            tmpDesc={tmpDesc}
            setTmpDesc={setTmpDesc}
          />
        </Dialog>
      </div>
    </div>
  );
};
export default HomePageMaintain;
