import React from "react";
import PropTypes from 'prop-types';
import Button from "../button/Button";
import * as bootstrap from 'bootstrap';
const Dialog = (props) => {
  const handleSubmit = (param) => {
    props.submit(param)
    .then((res)=>{
      if(res){
        console.log(res);
        // const modalClose = document.querySelector("#modalClose");
        // modalClose.click();
        const modalContainer = document.querySelector("#"+props.modalId);
        const modal = bootstrap.Modal.getInstance(modalContainer);
        props.cancel();
        modal.hide();
      }
      else{
        alert("choose the image!");
      }
    })

  }
  return(
    <div className="modal fade" id={props.modalId} aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div className="modal-dialog">
        <div className="modal-content">
          <div className="modal-header">
            <h5 className="modal-title">{props.title}</h5>
            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close" onClick={()=>props.cancel()}></button>
          </div>
          <div className="modal-body">
            {props.children}
          </div>
          <div className="modal-footer">
            <button type="button" onClick={()=>props.cancel()} className="btn btn-secondary" id="modalClose" data-bs-dismiss="modal">{props.cancelText}</button>

            <Button
              text={props.submitText}
              type={"primary"}
              variant={"contain"}
              isShow={true}
              param={props.param}
              onClick={handleSubmit}/>
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
  modalId: PropTypes.string,
  // object
  param: PropTypes.object,
  // function
  submit: PropTypes.func,
  cancel: PropTypes.func,
}

export default Dialog;
