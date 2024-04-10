import React, { Fragment } from "react";

import './Select.scss';

import PropTypes from 'prop-types';
const Select = (props) => {
  return (
    <Fragment>
      <div className={(props.nameDisplay&&props.nameInLeft?"select ":"select-Top ") + " px-2 tfTop w-100"}>
        {props.nameDisplay?<label className="flex-column col-2">{props.selectName}</label>:<Fragment/>}
        <div className="select-container col-10">
          <select value={props.VO[props.voName]} className="w-100" onChange={(e) => {props.setVO({...props.VO, [props.voName]:e.target.value})}}>
            <option value="">請選擇</option>
            {props.option?props.option.map((row,idx)=>(
              <option key={idx} value={row.val}>{row.label}</option>
            )):<Fragment/>}
          </select>
          <fieldset className="selectSet">
            <legend className="selectLegend"><span>{props.selectName}</span></legend>
          </fieldset>
        </div>
      </div>
    </Fragment>
  )
}
Select.propTypes = {
  // var
  voName: PropTypes.string,
  selectName: PropTypes.string, // text name
  nameDisplay: PropTypes.bool,
  nameInLeft: PropTypes.bool, // name in left or top, true is left
  //VO
  VO: PropTypes.object,
  // value
  option: PropTypes.array,
  // func
  setVO: PropTypes.func,
}
export default Select;
