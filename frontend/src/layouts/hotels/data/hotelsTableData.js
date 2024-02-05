/* eslint-disable react/prop-types */
/* eslint-disable react/function-component-definition */
import React, { useState, useEffect } from "react";
import Axios from "axios";

import MDBox from "components/MDBox";
import MDTypography from "components/MDTypography";
import StarRating from "assets/theme/components/startCategory";

const API_URL = "http://127.0.0.1:8000/api/hotels";

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
        console.log(datar);
        const transformData = datar.map((item) => ({
          name: <GuideName name={item.hotel_name} />,
          category: (
            <MDTypography variant="caption" color="text" fontWeight="regular">
              <StarRating rating={item.hotel_category} />
            </MDTypography>
          ),
          country: (
            <MDTypography variant="caption" color="text" fontWeight="regular">
              {item.hotel_country}
            </MDTypography>
          ),
          email: (
            <MDTypography variant="caption" color="text" fontWeight="regular">
              {item.contact_email}
            </MDTypography>
          ),
          telephone: (
            <MDTypography variant="caption" color="text" fontWeight="regular">
              {item.contact_phone}
            </MDTypography>
          ),
          action: (
            <MDTypography
              component="a"
              href="{itmen.id}"
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
      { Header: "hotel name", accessor: "name", width: "45%", align: "left" },
      { Header: "category", accessor: "category", align: "center" },
      { Header: "country", accessor: "country", align: "center" },
      { Header: "email", accessor: "email", align: "center" },
      { Header: "telephone", accessor: "telephone", align: "center" },
      { Header: "actions", accessor: "action", align: "center" },
    ],

    rows,
  };
}
