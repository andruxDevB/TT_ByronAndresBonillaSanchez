/* eslint-disable react/prop-types */
/* eslint-disable react/function-component-definition */
import React, { useState, useEffect } from "react";
import Axios from "axios";

import MDBox from "components/MDBox";
import MDTypography from "components/MDTypography";
import Menu from "@mui/material/Menu";
import MenuItem from "@mui/material/MenuItem";
import { Icon } from "@mui/material";

const API_URL = "http://127.0.0.1:8000/api/guides";

export default function data() {
  const [rows, setRows] = useState([]);
  const [menu, setMenu] = useState({ anchorEl: null, id: null });

  const openMenu = (event, id) => {
    setMenu({ anchorEl: event.currentTarget, id: id });
  };

  const closeMenu = () => {
    setMenu({ anchorEl: null, id: null });
  };

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
          fullname: (
            <GuideName name={`${item.profileGuide.first_name} ${item.profileGuide.last_name}`} />
          ),
          email: (
            <MDTypography variant="caption" color="text" fontWeight="regular">
              {item.profileGuide.email}
            </MDTypography>
          ),
          telephone: (
            <MDTypography variant="caption" color="text" fontWeight="regular">
              {item.profileGuide.phone}
            </MDTypography>
          ),
          languajes: (
            <MDTypography variant="caption" color="text" fontWeight="regular">
              {item.languajes}
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

  const renderMenu = (
    <Menu
      id="simple-menu"
      anchorEl={menu.anchorEl}
      anchorOrigin={{
        vertical: "top",
        horizontal: "left",
      }}
      transformOrigin={{
        vertical: "top",
        horizontal: "right",
      }}
      open={Boolean(menu.anchorEl)}
      onClose={closeMenu}
    >
      <MenuItem key={`${menu.id}-action`} onClick={console.log(menu.id)}>
        Action
      </MenuItem>
      <MenuItem key={`${menu.id}-another-action`} onClick={closeMenu}>
        Another action
      </MenuItem>
      <MenuItem key={`${menu.id}-something-else`} onClick={closeMenu}>
        Something else
      </MenuItem>
    </Menu>
  );

  return {
    columns: [
      { Header: "full name", accessor: "fullname", width: "45%", align: "left" },
      { Header: "email", accessor: "email", align: "left" },
      { Header: "telephone", accessor: "telephone", align: "center" },
      { Header: "languajes", accessor: "languajes", align: "center" },
      { Header: "actions", accessor: "action", align: "center" },
    ],

    rows: rows.map((row) => ({
      ...row,
      action: (
        <>
          <MDBox color="text" px={2}>
            <Icon
              sx={{ cursor: "pointer", fontWeight: "bold" }}
              fontSize="small"
              onClick={(e) => openMenu(e, row.id)}
            >
              more_vert
            </Icon>
          </MDBox>
          {row.id === menu.id ? renderMenu : null}
        </>
      ),
    })),
  };
}
