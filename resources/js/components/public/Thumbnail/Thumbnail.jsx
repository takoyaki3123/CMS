import React, { useEffect, useState } from "react";
import PropTypes from 'prop-types';
import './Thumbnail.scss';
const Thumbnail = (props) => {
    return (
        <div className="thumbnail">
            <button type="button" className="btn btn-primary">{props.btnText}</button>
            <div className="tooltip thumbnailContent">{props.children}</div>
        </div>

    )
}
Thumbnail.propTypes = {
    btnText: PropTypes.string,
}
export default Thumbnail;
