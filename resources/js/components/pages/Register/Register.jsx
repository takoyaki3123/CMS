import React, { useState } from "react";
import './Register.scss';
import { Button, Select, TextField } from "../../public";
import { RegisterVO } from "./RegisterVO";
import { baseApi } from "../../../public/api";
import { useDispatch } from "react-redux";
import * as action from '../../../actions/action';
import { useHistory } from "react-router-dom/cjs/react-router-dom";
const Register = (props) => {
  const dispatch = useDispatch();
  const history = useHistory();
  const [VO,setVO] = useState(new Object(RegisterVO));
  const sexOption = [{"val":"1","label":"男"},{"val":"2","label":"女"}]

  const handleRegister = (param) => {
    baseApi("register",param)
    .then((res) => {
      console.log("register res:",res);
      if(res.data === 1){
        alert('註冊成功!');
        history.push('login');
      }
      else{
        alert(res.data.msg);
      }
    })
  }
  return(
    <div className="register-container mt-4 mx-auto">
      <div className="register-title">
        <h5>註冊CMS會員</h5>
      </div>
      <div className="register mt-3 row w-100 mx-auto pe-3">
        <div className="col-12 px-0 my-3">
          <TextField
              type={"text"}
              fieldName={"Email："}
              nameDisplay={true}
              nameInLeft={true}
              voName={"email"}
              VO={VO}
              setVO={setVO}/>
        </div>
        <div className="col-6 px-0 my-3">
          <TextField
              type={"text"}
              fieldName={"アカウント："}
              nameDisplay={true}
              nameInLeft={true}
              voName={"acct"}
              VO={VO}
              setVO={setVO}/>
        </div>
        <div className="col-6 px-0 my-3">
          <TextField
              type={"password"}
              fieldName={"パスワード："}
              nameDisplay={true}
              nameInLeft={true}
              voName={"ps"}
              VO={VO}
              setVO={setVO}/>
        </div>
        <div className="col-6 px-0 my-3">
          <TextField
              type={"text"}
              fieldName={"名前："}
              nameDisplay={true}
              nameInLeft={true}
              voName={"name"}
              VO={VO}
              setVO={setVO}/>
        </div>
        <div className="col-6 px-0 my-3">
          <Select
              type={"text"}
              selectName={"性別："}
              nameDisplay={true}
              nameInLeft={true}
              voName={"sex"}
              option={sexOption}
              VO={VO}
              setVO={setVO}/>
        </div>
        <div className="mx-auto my-4 d-flex justify-content-center">
          <Button
            text={"登録"}
            type={"primary"}
            variant={"contain"}
            isShow={true}
            param={VO}
            onClick={handleRegister}/>
        </div>
      </div>

    </div>
  )
}
export default Register;
