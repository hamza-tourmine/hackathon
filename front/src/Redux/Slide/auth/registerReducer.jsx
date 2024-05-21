import { createSlice } from "@reduxjs/toolkit";
import { createAsyncThunk } from "@reduxjs/toolkit";
import axios from 'axios';

// Create the async thunk
export const createRegister = createAsyncThunk(
    'register/sendRegistrationData',
    async (registrationData, thunkAPI) => {
        console.log('HI');
        const response = await axios.post('http://127.0.0.1:8000/api/register', registrationData);
        console.log(response);
        return response.data;
    }
);

// Create the slice
export const registerSlice = createSlice({
  name: 'register',
  initialState: {
    username: '',
    tell: '',
    email: '',
    password: '',
    Status: {
      uppercase: false,
      length: false,
      number: false,
    },
    loading: false, // Add loading state
    error: null, // Add error state
    success: null, // Add success state
  },
  reducers: {
    setEmail: (state, action) => {
      state.email = action.payload;
    },
    setPassword: (state, action) => {
      state.password = action.payload;
      state.Status = {
        ...state.Status,
        uppercase: /[A-Z]/.test(action.payload),
        length: action.payload.length >= 8,
        number: /[0-9]/.test(action.payload)
      };
    },
    setuserName: (state, action) => {
      state.username = action.payload;
    },
    settel: (state, action) => {
      state.tell = action.payload;
    },
  },
  extraReducers: (builder) => {
    builder
      .addCase(createRegister.pending, (state) => { // Change here
        state.loading = true;
        state.error = null;
        state.success = null;
      })
      .addCase(createRegister.fulfilled, (state, action) => { // Change here
        state.loading = false;
        state.success = action.payload;
        console.log("from extraReducers")
        console.log(action.payload)
      })
      .addCase(createRegister.rejected, (state, action) => { // Change here
        state.loading = false;
        state.error = action.error.message;
      });
  },
});

export const { setEmail, setPassword, setuserName, settel } = registerSlice.actions;
export default registerSlice.reducer;
