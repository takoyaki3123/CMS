import React from "react";
import PropTypes from "prop-types";
import { Card } from "../../public";
import { useHistory } from "react-router-dom/cjs/react-router-dom";

const ClassBrowseContainer = (props) => {
  const history = useHistory();
  const handleClick = (id) => {
    history.push('detail', { classID: id });
  }
  return (
    <div className="row px-5">
      {props.classList ? props.classList.map((row, idx) =>
        <div className="col-4" key={idx}>
          <div className="p-3">
            <Card size={"100%"} imgSrc={row.IMG_SRC} title={row.CLASS_NAME} titleInside={true} onClick={() => { handleClick(row.id) }} />
          </div>
        </div>)
        :
        <Fragment />
      }

    </div>
  )
}
ClassBrowseContainer.propTypes = {
  classList: PropTypes.array,
};
export default ClassBrowseContainer;
