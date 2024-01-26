import { connectRouter } from "connected-react-router"
import { combineReducers } from "redux"
import sample from "./txn/sampleReducer"

const rootRouter = (history) => 
  combineReducers({
    router: connectRouter(history),
    sample
  })

export default rootRouter;