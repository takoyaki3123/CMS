import React, { Fragment } from "react";

import './TextField.scss';

import PropTypes from 'prop-types';
const TextField = (props) => {
  return (
    //onChange={(e) => {props.setVO({...VO, [voName]:e.target.value})}}
    <Fragment>
      <div className={(props.nameDisplay&&props.nameInLeft?"textField ":"textField-Top ") + " mx-2 tfTop"}>
        {props.nameDisplay?<label className="flex-column">{props.fieldName}</label>:<Fragment/>}
        <div className="textField-container">
          <input type={props.type} onChange={(e) => {props.setVO({...props.VO, [props.voName]:e.target.value})}}/>
          <fieldset className="textFieldSet">
            <legend className="textLegend"><span>{props.fieldName}</span></legend>
          </fieldset>
        </div>
      </div>
    </Fragment>
  )
}
TextField.propTypes = {
  // var
  type: PropTypes.string, // text number password
  voName: PropTypes.string,
  fieldName: PropTypes.string, // text name
  nameDisplay: PropTypes.bool,
  nameInLeft: PropTypes.bool, // name in left or top, true is left
  //VO
  VO: PropTypes.object,
  // func
  setVO: PropTypes.func,
}
export default TextField;
