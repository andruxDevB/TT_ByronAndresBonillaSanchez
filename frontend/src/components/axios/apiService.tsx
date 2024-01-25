import axios from 'axios';

const axiosInstance = axios.create({
    baseURL: 'http://127.0.0.1:8000/api/',
    headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ${token}'
    }
});

export const fetchPrograms = async () => {
    try{
        const response = await axiosInstance.get('programs');
        return response.data;
    } catch (error) {
        console.error('Error al consumir el API con Axios', error);
        throw error;
    }
};
