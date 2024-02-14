import React, { Fragment } from "react";
import PropTypes from "prop-types";
const Tab = (props) => {
  return(
    <Fragment>
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        {props.titleList? props.titleList.map((row, idx) => 
          <li class="nav-item" role="presentation">
            <button class={`nav-link ${idx===0?"active":""}`} data-bs-toggle="tab" data-bs-target={`#${row.title}`} type="button" role="tab">{row.title}</button>
          </li>
        ):<Fragment/>}
      </ul>
      <div class="tab-content" id="myTabContent">
        {props.panelList?props.panelList.map((row,idx)=>
          <Fragment>
            <div class={`tab-pane fade ${idx===0?"show active":""}`} id={row.title} role="tabpanel" aria-labelledby="home-tab">{row.panel}</div>
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