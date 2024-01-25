import React, { useEffect, useState } from "react";
import axios from "axios";

type Props = {
    url: string;
    headers?: object;
};

const AxiosDataLoader: React.FC<Props> = ({ url, headers }) => {
    const [data, setData] = useState<any>(null);
    const [loading, setLoading] = useState<boolean>(true);
    const [error, setError] = useState<string>('');

    useEffect(() => {
        const fetchData = async () => {
            try {
                setLoading(true);
                const response = await axios.get(url, { headers });
                setData(response.data);
                setLoading(false);
            } catch (err) {
                if (axios.isAxiosError(err)) {
                    setError(err.message);
                } else {
                    setError('Un error ocurrio al cargar los datos');
                }
                setLoading(false);
            }
        };

        fetchData();
    }, [url, headers]);

    if (loading) return <div>Cargando...</div>;
    if (error) return <div>Error: {error}</div>;

    return (
        <div>
            <h3>Datos Cargados:</h3>
            <pre>{JSON.stringify(data, null, 2)}</pre>
        </div>
    );
};

export default AxiosDataLoader;