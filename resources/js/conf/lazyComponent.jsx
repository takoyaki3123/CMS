import { lazy } from "react";
export const lazyComponent = [
  {urlCode:"/class/type", component:lazy(()=> import('../components/pages/TypeBrowse/TypeBrowse'))},
  {urlCode:"/class/list", component:lazy(()=> import('../components/pages/ClassBrowse/ClassBrowse'))},
  {urlCode:"/class/detail", component:lazy(()=> import('../components/pages/ClassDetail/ClassDetail'))},
  {urlCode:"/login", component:lazy(()=> import('../components/pages/Login/Login'))},
  {urlCode:"/home", component:lazy(()=> import('../components/pages/HomePage/HomePage'))},
  {urlCode:"/register", component:lazy(()=> import('../components/pages/Register/Register'))},
  {urlCode:"/personal", component:lazy(()=> import('../components/pages/Personal/Personal'))},
  {urlCode:"/admin/home", component:lazy(()=> import('../components/pages/MaintainPage/HomePage/HomePage'))},
  {urlCode:"/admin/type", component:lazy(()=> import('../components/pages/MaintainPage/Type/TypeBrowse'))},
]
