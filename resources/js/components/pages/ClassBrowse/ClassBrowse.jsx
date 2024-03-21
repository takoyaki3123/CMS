import React, { useEffect, useState } from "react";
import PropTypes from "prop-types";
import ClassBrowseContainer from "./ClassBrowseContainer";
import { useLocation } from "react-router-dom/cjs/react-router-dom";
import { baseApi } from "../../../public/api";

const ClassBrowse = (props) => {
    const location = useLocation();
    const [classList, setClassList] = useState([]);
    const init = () => {
        getClassList();
    }
    const getClassList = () => {
        baseApi("classList",{ID:location.state.typeID})
        .then((res) => {
            console.log("get class list:",res.data);
            setClassList(res.data);
        });
    }
    useEffect(()=>{
        init();
        console.log(location);
    },[])
    return(
        <ClassBrowseContainer
            classList={classList}
        />
    )
}
ClassBrowse.propTypes = {

}
export default ClassBrowse;
