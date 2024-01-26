import objectAssign from 'object-assign';
import initialState from '../initialState';

// 這裡可以寫邏輯做事情, 如果要做複雜的事情最好分出一個檔案處理import進來使用, 並且不會改變state.
// IMPORTANT: Note that with Redux, state should NEVER be changed.
// State is considered immutable. Instead,
// create a copy of the state passed and set new values on the copy.
// Note that I'm using Object.assign to create a copy of current state
// and update values on the copy.
export default function sampleReducer(state = initialState.sample, action) {

  switch (action.type) {
    case "SAMPLE_UPDATE":
      // For this example, just simulating a save by changing date modified.
      // In a real app using Redux, you might use redux-thunk and handle the async call in fuelSavingsActions.js
      // alert(`reducer(state): ${JSON.stringify(state)}`);
      // alert(`reducer(action): ${JSON.stringify(action)}`);
      return objectAssign({}, state, action.vo); //action.vo

    default:
      return state;
  }
}
