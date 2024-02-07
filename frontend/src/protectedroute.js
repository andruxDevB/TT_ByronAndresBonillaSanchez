/* eslint-disable react/prop-types */
/* eslint-disable react/function-component-definition */
import React, { Component } from "react";
import { Navigate } from "react-router-dom";

const ProtectedRoute = ({ component: Component, ...rest }) => {
  const isAuthenticated = localStorage.getItem("token");

  return;
  isAuthenticated ? <Component {...rest} /> : <Navigate to="/authentication/sign-in" />;
};

export default ProtectedRoute;
