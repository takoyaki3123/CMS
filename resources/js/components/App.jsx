import React, { Fragment } from "react"
import { Switch } from "react-router-dom/cjs/react-router-dom";

import {TextField,Navbar} from "./public";

const App = () => {
  const isLogin = false;
  const route = (
    <Switch>

    </Switch>
  );
  return (
    <Fragment>
      <Navbar isLogin={isLogin}/>
      <TextField nameInLeft={false} nameDisplay={true}></TextField> 
    </Fragment>
  )
}
export default App;