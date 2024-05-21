import { configureStore } from '@reduxjs/toolkit';
import registerReducer from '../Slide/auth/registerReducer'; // Ensure the correct path and name

export default configureStore({
  reducer: {
    register : registerReducer, // Use the correct key name
  },
});
