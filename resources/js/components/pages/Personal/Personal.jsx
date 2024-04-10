import React from "react";
import PropTypes from 'prop-types';
import Detail from "./Detail/Detail";
import { Tab } from "../../public";

const Personal = (props) => {
  const panelList = [{title:"個人資料",panel:<Detail/>},{title:"個人資料2",panel:<Detail/>}];
  const titleList = [{title:"個人資料"},{title:"個人資料2"}];
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
