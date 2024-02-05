/* eslint-disable react/prop-types */
/* eslint-disable react/function-component-definition */
import React, { useState, useEffect } from "react";
import Axios from "axios";

import MDBox from "components/MDBox";
import MDTypography from "components/MDTypography";

const API_URL = "http://127.0.0.1:8000/api/drivers";

export default function data() {
  const [rows, setRows] = useState([]);

  useEffect(() => {
    const fetchData = async () => {
      try {
        const config = {
          headers: {
            Authorization: "Bearer 3|tXbmxrJaC7cqUXxJeC2IuQL0ifGcoWwTp90Rn9C574b18adc",
            "Content-Type": "application/json",
          },
        };
        const response = await Axios.get(API_URL, config);
        const datar = response.data.data;
        const transformData = datar.map((item) => ({
          fullname: (
            <GuideName name={`${item.profileDriver.first_name} ${item.profileDriver.last_name}`} />
          ),
          email: (
            <MDTypography variant="caption" color="text" fontWeight="regular">
              {item.profileDriver.email}
            </MDTypography>
          ),
          telephone: (
            <MDTypography variant="caption" color="text" fontWeight="regular">
              {item.profileDriver.phone}
            </MDTypography>
          ),
          transport: (
            <MDTypography variant="caption" color="text" fontWeight="regular">
              {item.transport_type}
            </MDTypography>
          ),
          action: (
            <MDTypography
              component="a"
              href={item.id}
              variant="caption"
              color="info"
              fontWeight="medium"
            >
              Edit
            </MDTypography>
          ),
        }));

        setRows(transformData);
      } catch (error) {
        console.error("Error al cargar los datos desde el API", error);
      }
    };
    fetchData();
  }, []);

  const GuideName = ({ name }) => (
    <MDBox display="flex" alignItems="center" lineHeight={1}>
      <MDBox ml={2} lineHeight={1}>
        <MDTypography display="block" variant="button" fontWeight="medium">
          {name}
        </MDTypography>
      </MDBox>
    </MDBox>
  );

  return {
    columns: [
      { Header: "full name", accessor: "fullname", width: "45%", align: "left" },
      { Header: "email", accessor: "email", align: "left" },
      { Header: "telephone", accessor: "telephone", align: "center" },
      { Header: "transport type", accessor: "transport", align: "center" },
      { Header: "actions", accessor: "action", align: "center" },
    ],

    rows,
  };
}
