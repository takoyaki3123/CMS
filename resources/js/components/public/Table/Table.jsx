import React from "react";
import PropType from 'prop-types';
const Table = (props) => {

	return(
		<table className="w-100">
      <thead>
        <tr>
          {props.head.map((val,idx)=>
            <th key={idx}>{val}</th>
          )}
        </tr>
      </thead>
      <tbody>
        {props.value.map((obj,idx)=>
          <tr key={idx}>
            {Object.keys(obj).map((key,objID)=>
              <td key={objID}>{obj[key]}</td>
            )}
          </tr>
        )}
      </tbody>
		</table>
	)
}
Table.propType = {
  head: PropType.array,
  value: PropType.array,
};
export default Table;
