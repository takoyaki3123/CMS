import React from "react";
import PropTypes from 'prop-types';
import Button from "../button/Button";
const Dialog = (props) => {
  return(
    <div className="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div className="modal-dialog">
        <div className="modal-content">
          <div className="modal-header">
            <h5 className="modal-title">{props.title}</h5>
            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div className="modal-body">
            {props.children}
          </div>
          <div className="modal-footer">
            <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">{props.cancelText}</button>

            <Button
              text={props.submitText}
              type={"primary"}
              variant={"contain"}
              isShow={true}
              param={props.param}
              onClick={props.submit}/>
          </div>
        </div>
      </div>
    </div>
  )
}
Dialog.propTypes = {
  // string
  title: PropTypes.string,
  submitText: PropTypes.string,
  cancelText: PropTypes.string,
  // object
  param: PropTypes.object,
  // function
  submit: PropTypes.func,
}

export default Dialog;
