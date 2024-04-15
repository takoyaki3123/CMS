import React, { useEffect } from "react";
import PropTypes from 'prop-types';
import { useDispatch, useSelector } from "react-redux";
import DetailContainer from "./DetailContainer";
import * as action from '../../../../actions/action';
import { baseApi, isError } from "../../../../public/api";

const Detail = (props) => {
  const dispatch = useDispatch();
  const userInfo = useSelector((state) => state.userInfo);
  const updateUser = (voData) => {
    return new Promise((resolve) => {
      baseApi("userUpdate",voData)
      .then((res) => {
        if(isError(res)){
          alert("修改發生問題!");
        }
        else{
          dispatch(action.setUserInfo(voData));
          resolve(true);
        }
      });
    })
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
