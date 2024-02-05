/* eslint-disable react/prop-types */
/* eslint-disable react/function-component-definition */
import React from "react";
import { Icon } from "@mui/material";

const StarRating = ({ rating }) => {
  let fullStars = Math.floor(rating);

  return (
    <>
      {[...Array(fullStars)].map((_, i) => (
        <Icon key={i}>star</Icon>
      ))}
    </>
  );
};

export default StarRating;
