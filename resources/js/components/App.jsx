import React, { Fragment } from "react"
import { Switch } from "react-router-dom/cjs/react-router-dom";

import {TextField,Navbar} from "./public";
import Button from "./public/button/Button";
import Carousel from "./public/Carousel/Carousel";

const App = () => {
  const isLogin = false;
  const route = (
    <Switch>

    </Switch>
  );
  const imgList = [
    {
      src:"/storage/images/補習班1.jpg"
    },
    {
      src:"/storage/images/補習班1.jpg"
    }
  ];
  return (
    <Fragment>
      <Navbar isLogin={isLogin}/>
      <TextField nameInLeft={false} nameDisplay={true}></TextField> 
      <Button isShow={true} text={"outline"} type={"success"} variant={"outline"}/>
      <Button isShow={true} text={"contain"} type={"error"} variant={"contain"}/>
      <Button isShow={true} text={"contain"} type={"other"} variant={"contain"}/>
      <Button isShow={true} text={"none"} type={"primary"} variant={"none"}/>
      <div>
        <Carousel imgList={imgList}/>
      </div>
    </Fragment>
  )
}
export default App;