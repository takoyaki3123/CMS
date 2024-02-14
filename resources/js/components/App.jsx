import React, { Fragment } from "react"
import { Switch } from "react-router-dom/cjs/react-router-dom";

import {TextField,Navbar,Card, Tab, PersonalInfo, SideNav, Pagin} from "./public";

const test = (props) => {
  return (<div>testing</div>);
}
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
  
  const titleList = [{title:"test1"},{title:"test2"}];
  const panelList = [{panel:<div>testing1</div>,title:"test1"},{panel:<div>testing2</div>,title:"test2"}];
  return (
    <Fragment>
      <Navbar isLogin={isLogin}/>
      <TextField nameInLeft={false} nameDisplay={true}></TextField> 
      <PersonalInfo stickerSrc={""} name={"all mind"} info={"testing for personal info\r\ntesting for personal info"}/>
      <SideNav/>
      <Pagin/>
    </Fragment>
  )
}
export default App;