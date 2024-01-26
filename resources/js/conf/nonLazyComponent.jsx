import { lazy } from "react";
export const nonLazyComponent = [
  {urlCode:"", urlName:"", component:lazy(() => import('')), isGenerate: false},
]