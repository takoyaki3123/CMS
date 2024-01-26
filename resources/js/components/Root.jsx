import React, { Component } from "react"
import ReactDOM from "react-dom";

import PropTypes from 'prop-types';

import { Provider } from "react-redux";
import { BrowserRouter } from "react-router-dom/cjs/react-router-dom";
import App from "./App";


export default class Root extends Component{
  render(){
    const {store, history} = this.props
    return(
      // make all application can get store data
      <Provider store={store}> 
        {/* SPA */}
        <BrowserRouter history={history}>
          <App/>
        </BrowserRouter>
      </Provider>
    )
  }
}
Root.propTypes = {
  store: PropTypes.object.isRequired,
  history: PropTypes.object.isRequired,
};
