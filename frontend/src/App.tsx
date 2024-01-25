
import Container from '@mui/material/Container';
import Typography from '@mui/material/Typography';
import Box from '@mui/material/Box';
import Copyright from './components/Copyright';
import TextFieldUsage from './components/TextField';
import './App.css'
import AxiosDataLoader from './components/axios/AxiosDataLoader';

export default function App() {
  const headers = {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer 3|tXbmxrJaC7cqUXxJeC2IuQL0ifGcoWwTp90Rn9C574b18adc'
  }
  return (
    <div className="App">
      <h2>Consumir API con Axios y Headers</h2>
      <AxiosDataLoader url='http://127.0.0.1:8000/api/restaurants' headers={headers}></AxiosDataLoader>
    </div>
    /* <Container maxWidth="lg">
      <Box sx={{ my: 4 }}>
        <Typography variant="h4" component="h1" gutterBottom>
          Material UI Vite.js example in TypeScript
        </Typography>
        <TextFieldUsage
          id="demo-helper-text-misaligned"
        />
        <Copyright />
      </Box>
    </Container> */
  );
  /* return (
    <>
      <h1>Surtrek Traveller</h1>
      <div className="container py-4 px-3 mx-auto">
        <button className="btn btn-primary">Primary button</button>
      </div>
      <script type="module" src="./js/main.js"></script>
    </>
  ); */
}