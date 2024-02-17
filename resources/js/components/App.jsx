import React, { Fragment, useEffect, useState } from "react"
import { Switch } from "react-router-dom/cjs/react-router-dom";

import {TextField,Navbar,Card, Tab, PersonalInfo, SideNav, Pagin, Avatar, MdTextarea} from "./public";
import { useSelector } from "react-redux";

const App = () => {
  const isLogin = useSelector(state=>state.isLogin);
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
  useEffect(()=>{
    console.log(isLogin);
  },[])
  
  const titleList = [{title:"test1"},{title:"test2"}];
  const panelList = [{panel:<div>testing1</div>,title:"test1"},{panel:<div>testing2</div>,title:"test2"}];
  const [value,setValue] = useState("**hello**");
  return (
    <Fragment>
      <Navbar isLogin={isLogin.bool}/>
      <MdTextarea value={value} setValue={setValue}/>
    </Fragment>
  )
}
export default App;