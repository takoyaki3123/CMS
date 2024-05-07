import React from "react";
import PropTypes from 'prop-types';
import Detail from "./Detail/Detail";
import { Tab } from "../../public";

const Personal = (props) => {
  const panelList = [{title:"個人資料",panel:<Detail/>}];
  const titleList = [{title:"個人資料"}];
  return(
    <div>
      <Tab
        titleList={titleList}
        panelList={panelList}
      />
    </div>
  )
}
Personal.propTypes = {

}
export default Personal;
