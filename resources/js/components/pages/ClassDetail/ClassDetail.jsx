import React, { useEffect, useState } from "react";
import { useLocation } from "react-router-dom/cjs/react-router-dom";
import ClassDetailContainer from "./ClassDetailContainer";
import { baseApi } from "../../../public/api";

const ClassDetail = () => {
    const location = useLocation();
    const [detail, setDetail] = useState({});
    const init = () => {
        console.log("getdetail");
        getDetail();
    }
    const getDetail = () => {
        baseApi("classDetail",{ID:location.state.classID})
        .then((res) => {
            console.log("get class detail:",res.data);
            setDetail(res.data);
        });
    }
    useEffect(() => {
        init();
    },[])
    return(
        <ClassDetailContainer
            detail={detail}
        />
    )
}
export default ClassDetail;
