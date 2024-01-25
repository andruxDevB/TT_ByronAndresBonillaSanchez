import React, { useState, useEffect } from 'react';
import { fetchPrograms } from '../components/axios/apiService';

const Programs = () => {
    const [data, setData] = useState(null);
    const [error, setError] = useState(null);

    useEffect(() => {
        const fetchDataPrograms = async () => {
            try {
                const data = await fetchPrograms();
                setData(data);
            } catch (error) {
                setError(error);
                console.error('Error en el componente al consumir API')
            }
        }
    })
}