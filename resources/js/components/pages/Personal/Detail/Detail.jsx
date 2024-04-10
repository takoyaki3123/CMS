import React, { useEffect } from "react";
import PropTypes from 'prop-types';
import { useSelector } from "react-redux";
import DetailContainer from "./DetailContainer";
import { baseApi } from "../../../../public/api";

const Detail = (props) => {
  const userInfo = useSelector((state) => state.userInfo);
  const updateUser = (voData) => {
    baseApi("userUpdate",voData)
    .then((res) => {

    });
  }
  return(
    <DetailContainer
      userInfo={userInfo}
      updateUser={updateUser}
    />
  )
}
Detail.propTypes = {

}
export default Detail;
