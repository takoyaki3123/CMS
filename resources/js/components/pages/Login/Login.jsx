import React, { useState } from "react";
import {Avatar, Button, TextField} from "../../public";
import './Login.scss';
import {loginVO} from './LoginVO';
import { baseApi } from "../../../public/api";
const Login = () => {
  const [VO, setVO] = useState(new Object(loginVO));

  const handleLogin = (param) => {
    baseApi("login",param)
    .then((res) => {
      console.log("login res:",res);
    })

  }
  return(
    <div className="login-container mt-4 mx-auto">
      <div className="login d-flex justify-content-center flex-wrap">
        <div className="login-avatar mt-5">
          <Avatar imgSrc={'/storage/images/default-user.jpg'}/>
        </div>
        <div className="mt-5 mx-auto">
          <div className="col-12 my-2">
            <TextField
              type={"text"}
              fieldName={"帳號"}
              nameDisplay={true}
              nameInLeft={true}
              voName={"acct"}
              VO={VO}
              setVO={setVO}/>

          </div>
          <div className="col-12 my-2">
            <TextField
              type={"password"}
              fieldName={"密碼"}
              nameDisplay={true}
              nameInLeft={true}
              voName={"ps"}
              VO={VO}
              setVO={setVO}/>

          </div>
          <div className="mx-auto my-4 d-flex justify-content-center">
            <Button
              text={"ログイン"}
              type={"primary"}
              variant={"contain"}
              isShow={true}
              param={VO}
              onClick={handleLogin}/>
          </div>
        </div>
      </div>
    </div>
  )
}
export default Login;
