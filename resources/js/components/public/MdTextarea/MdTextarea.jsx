import React from "react";
import PropTypes from "prop-types";
import MDEditor from "@uiw/react-md-editor";

const MdTextarea = (props) => {
  return(
    <div>
      {props.show?
        <MDEditor value={props.value} onChange={props.setValue}/>
        :
        <MDEditor.Markdown source={props.value} style={{ whiteSpace: 'pre-wrap' }} />
      }
    </div>
  );
}
MdTextarea.propTypes = {
  // string
  value: PropTypes.string,
  // bool
  show: PropTypes.bool,
  // function
  setValue: PropTypes.func,
}
export default MdTextarea;