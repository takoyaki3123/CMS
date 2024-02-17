import {thunk} from 'redux-thunk';

import { connectRouter, routerMiddleware } from "connected-react-router";
import { createBrowserHistory } from "history";
import { configureStore } from '@reduxjs/toolkit';

import createRootReducer from '../reducer';

export const history = createBrowserHistory();

// make react router link with redux
const connectRouterHistory = connectRouter(history);
function configStoreDev (initialState){
  const reactRouteMiddleware = routerMiddleware(history);
  const middlewares = [
    thunk,
    reactRouteMiddleware
  ]

  // create store
  const store = configureStore({
    reducer:createRootReducer(history),
    middleware:(getDefaultMiddleware) => {
      return getDefaultMiddleware().concat(middlewares);
    },
    preloadedState:initialState,
    devTools: process.env.NODE_ENV !== 'production',
  });
  return store
}
export default configStoreDev