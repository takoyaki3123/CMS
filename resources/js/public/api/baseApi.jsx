import React from "react";

import axios from "axios";

const isLocal = document.location.hostname === '127.0.0.1' || document.location.hostname === 'localhost';
const Token = '';
const request = axios.create({
  timeout:120000,
});
// request.defaults.headers.post['Content-Type'] = 'application/json';

const setting = (urlCode, data) => {
  console.log("setting");
  return new Promise((resolve) => {
    let header = {method:"post", url:"/api/"+urlCode, data:data};
    let bodyData = {};
    bodyData.body = data;
    console.log("bodyData",bodyData);
    const domain = isLocal?"127.0.0.1":"";
    console.log("header",header);
    resolve({"header":header, "domain": domain,body:bodyData});
  })
}

const baseApi = (urlCode, data) => {
 const loader = document.querySelector('.loader-container');
 if(loader){
   loader.style.display = "flex";
 }
 return new Promise((resolve,reject) => {
  setting(urlCode, data).then((res) => {

    request.post(res.header.url,res.body).then((res) => {
        console.log("data",data);
        console.log(res);
      resolve(res)
    })
    .catch((err) => {
      console.log('error api');
      reject(err);
    })
    .finally(()=>{
      if(loader){
        loader.style.display = "none";
      }
    });
  })
 })
}

const uploadApi = (urlCode,data) => {
  const loader = document.querySelector('.loader-container');
 if(loader){
   loader.style.display = "flex";
 }
 return new Promise((resolve,reject) => {
  setting(urlCode, data).then((res) => {

    const formData = new FormData();
    Object.keys(res.body.body).forEach((key)=>{
      formData.append(key,res.body.body[key]);
    })
    for (var key of formData.entries()) {
      console.log(key[0] + ', ' + key[1]);
    }
    request.post(res.header.url,formData,{
      headers:
        {
          'Content-Type':'multipart/form-data'
        }
      }).then((res) => {
      // alert("upload success");
      resolve(res)
    })
    .catch((err) => {
      console.log('error api');
      reject(err);
    })
    .finally(()=>{
      if(loader){
        loader.style.display = "none";
      }
    });
  })
 })
}

const isError = (res) => {
  return res.msg?true:false;
}

export {
  baseApi,
  uploadApi,
  isError
}
