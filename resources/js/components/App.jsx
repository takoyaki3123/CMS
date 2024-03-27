import React, { Fragment, Suspense, useEffect, useState } from "react"
import { Route, Switch } from "react-router-dom/cjs/react-router-dom";

import {TextField,Navbar,Card, Tab, PersonalInfo, SideNav, Pagin, Avatar, MdTextarea, Loader} from "./public";
import { useSelector } from "react-redux";
import TypeBrowse from "./pages/TypeBrowse/TypeBrowse";
import { lazyComponent } from "../conf";

const App = () => {
  const isLogin = useSelector(state=>state.isLogin);
  const route = (
    <Switch>
        {lazyComponent.map((row)=><Route key={row.urlCode} exact path={`/cms${row.urlCode}`} component={row.component}/>)}
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
    <Suspense fallback={
        <Loader/>
    }>
        <Loader/>
        <Fragment>
        <Navbar isLogin={isLogin.bool}/>
        <div className="container">
            {route}

        </div>
        </Fragment>
    </Suspense>
  )
}
export default App;
