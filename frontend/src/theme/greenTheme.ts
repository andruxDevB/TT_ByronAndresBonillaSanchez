import { createTheme } from '@mui/material';
import { red } from '@mui/material/colors';


const greenTheme = createTheme({

  palette: {
    primary: {
      main: '#770011'
    },
    secondary: {
      main: '#72bf31'
    },
    error: {
      main: red.A400
    }
  }

});

export default greenTheme;