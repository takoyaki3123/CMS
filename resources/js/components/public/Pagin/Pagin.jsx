import React, { Fragment, useEffect, useState } from "react";
import PropTypes from "prop-types";

const Pagin = (props) => {
  const [nowPage, setNowPage] = useState(1);
  const [totalPage, setTotalPage] = useState(10); // 總頁數
  const [count, setCount] = useState(10);
  const sample = [{},{},{},{},{},{},{},{},{},{}];
  const passPagin = (page) => {
    return (totalPage <= 5 || (page <= 3 && nowPage <= 3) || page === nowPage - 1 || page === nowPage + 1 || page === nowPage)
  }
  const prevPass = () => {
    if(totalPage <= 5 || (totalPage > 5 && nowPage <= 3)){
      return false;
    }
    return true;
  }
  const nextPass = () => {
    if(totalPage <= 5 || (totalPage > 5 && nowPage >= totalPage - 1)){
      return false;
    }
    return true;
  }
  const changePage = (page) => {
    setNowPage(page);
  }
  useEffect(() => {
    if(props.count){
      setCount(props.count);
    }
  },[]);

  return(
    <nav aria-label="Page navigation example">
      <ul className="pagination">
        <li className="page-item">
          <a className="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        {prevPass()?
        <Fragment>
          <li className="page-item" onClick={() => changePage(1)}><a className="page-link" href="#">1</a></li>
          <li className="page-item"><span>...</span></li>
        </Fragment>
      :<Fragment/>}
        {sample.map((row, idx) => 
          <Fragment key={idx}>
            {passPagin(idx + 1)?
            <li className="page-item" onClick={() => changePage(idx + 1)}><a className="page-link" href="#">{idx + 1}</a></li>
            :
            <Fragment/>}
          </Fragment>
        )}
        {nextPass()?
          <Fragment>
            <li className="page-item"><span>...</span></li>
            <li className="page-item" onClick={() => changePage(totalPage)}><a className="page-link" href="#">{totalPage}</a></li>
          </Fragment>
        :<Fragment/>}
        <li className="page-item">
          <a className="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  )
}
Pagin.propTypes = {
  // string
  count: PropTypes.string,
  // array
  list: PropTypes.array,
  allData: PropTypes.array,
  // function
  setList: PropTypes.func,
}
export default Pagin;