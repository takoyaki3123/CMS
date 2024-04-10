import React, { useEffect, useState } from "react";
import PropTypes from 'prop-types';
import { Dialog, Select, TextField } from "../../../public";
import { DetailVO } from "./DetailVO";
const DetailUpdate = (props) => {
  const [VO,setVO] = useState(new Object(props.userInfo));
  const sexOption = [{"val":"1","label":"男"},{"val":"2","label":"女"}]
  useEffect(()=>{
    console.log(props.userInfo);
    // setVO({
    //   acct:props.userInfo.acct,
    //   pwd:props.userInfo.ps,
    //   email:props.userInfo.email,
    //   sex:props.userInfo.sex,
    //   age:props.userInfo.age,
    // })
  },[props.userInfo])
  return(
    <Dialog
      title={"修改使用者資訊"}
      submit={props.updateUser}
      param={VO}
      submitText={"submit"}
      cancelText={"cancel"}>
      <div className="row me-2">
        <div className="col-12 px-0 my-3">
          <TextField
              type={"text"}
              fieldName={"電子郵件"}
              nameDisplay={true}
              nameInLeft={true}
              voName={"email"}
              VO={VO}
              setVO={setVO}/>
        </div>
        <div className="col-6 px-0 my-3">
          <TextField
              type={"text"}
              fieldName={"姓名"}
              nameDisplay={true}
              nameInLeft={true}
              voName={"name"}
              VO={VO}
              setVO={setVO}/>
        </div>
        <div className="col-6 px-0 my-3">
          <TextField
              type={"password"}
              fieldName={"密碼"}
              nameDisplay={true}
              nameInLeft={true}
              voName={"pwd"}
              VO={VO}
              setVO={setVO}/>
        </div>
        <div className="col-6 px-0 my-3">
          <TextField
              type={"number"}
              fieldName={"年齡"}
              nameDisplay={true}
              nameInLeft={true}
              voName={"age"}
              VO={VO}
              setVO={setVO}/>
        </div>
        <div className="col-6 px-0 my-3">
          <Select
              type={"text"}
              selectName={"性別"}
              nameDisplay={true}
              nameInLeft={true}
              voName={"sex"}
              option={sexOption}
              VO={VO}
              setVO={setVO}/>
        </div>
      </div>
    </Dialog>
  )
}
DetailUpdate.propTypes = {
  // object
  userInfo: PropTypes.object,
  // function
  updateUser: PropTypes.func,
}
export default DetailUpdate;
