import { lazy } from "react";
export const lazyComponent = [
  {urlCode:"", component:lazy(()=> import(''))},
]