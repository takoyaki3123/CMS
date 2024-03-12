import { lazy } from "react";
export const lazyComponent = [
  {urlCode:"/class/type", component:lazy(()=> import('../components/pages/TypeBrowse/TypeBrowse'))},
  {urlCode:"/class/list", component:lazy(()=> import('../components/pages/ClassBrowse/ClassBrowse'))},
  {urlCode:"/class/detail", component:lazy(()=> import('../components/pages/ClassDetail/ClassDetail'))},
]
