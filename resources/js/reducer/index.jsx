import { connectRouter } from "connected-react-router"
import { combineReducers } from "redux"
import sample from "./txn/sampleReducer"
import isLogin from "./txn/isLoginReducer"
import userInfo from './txn/userInfoReducer'

const rootRouter = (history) =>
  combineReducers({
    router: connectRouter(history),
    sample,
    isLogin,
    userInfo,
  })

export default rootRouter;
