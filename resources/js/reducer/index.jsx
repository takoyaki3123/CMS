import { connectRouter } from "connected-react-router"
import { combineReducers } from "redux"
import sample from "./txn/sampleReducer"
import isLogin from "./txn/isLoginReducer"

const rootRouter = (history) => 
  combineReducers({
    router: connectRouter(history),
    sample,
    isLogin
  })

export default rootRouter;