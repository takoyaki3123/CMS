import React from "react";
import ReactDOM from "react-dom";
import configStoreDev, {history} from "../store/configStore";
import Root from "./Root";
const store = configStoreDev();
if (document.getElementById('Index')) {
  ReactDOM.render(<Root store={store} history={history}/>,document.getElementById("Index"));
}