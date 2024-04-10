import React, { Fragment, useEffect } from "react";
import PropTypes from "prop-types";
const Tab = (props) => {
  useEffect(()=>{
    console.log("title",props.titleList);
  },[])
  return(
    <Fragment>
      <ul className="nav nav-tabs" id="myTab" role="tablist">
        {props.titleList? props.titleList.map((row, idx) =>
          <li className="nav-item" role="presentation" key={idx}>
            <button className={`nav-link ${idx===0?"active":""}`} data-bs-toggle="tab" data-bs-target={`#${row.title}`} type="button" role="tab">{row.title}</button>
          </li>
        ):<Fragment/>}
      </ul>
      <div className="tab-content" id="myTabContent">
        {props.panelList?props.panelList.map((row,idx)=>
          <Fragment key={idx}>
            <div className={`tab-pane fade ${idx===0?"show active":""}`} id={row.title} role="tabpanel" aria-labelledby="home-tab">{row.panel}</div>
          </Fragment>)
        :<Fragment/>}
      </div>
    </Fragment>
  )
}
Tab.propTypes = {
  // array
  titleList: PropTypes.array,
  panelList: PropTypes.array,
}
export default Tab;
