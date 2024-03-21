import React from "react";
import PropTypes from 'prop-types';
import { Card } from '../../public';
import { useHistory } from "react-router-dom/cjs/react-router-dom";

const TypeBrowseContainer = (props) => {
  const history = useHistory();
  const handleClick = (type) => {
    history.push("list", { typeID: type });
  }
  return (
    <div className="row px-5">
      {props.typeList ? props.typeList.map((row, idx) =>
        <div className="col-4" key={idx}>
          <div className="p-3">
            <Card size={"100%"} imgSrc={row.IMG_SRC} title={row.TYPE_NAME} titleInside={true} onClick={() => { handleClick(row.id) }} />
          </div>
        </div>)
        :
        <Fragment />
      }

    </div>
  )
}
TypeBrowseContainer.propTypes = {
  typeList: PropTypes.array,
}
export default TypeBrowseContainer;
