/* eslint-disable react/prop-types */
/* eslint-disable react/function-component-definition */
import { createContext, useContext } from "react";

const Timeline = createContext();

function TimelineProvider({ children, value }) {
  return <Timeline.Provider value={value}>{children}</Timeline.Provider>;
}

function useTimeline() {
  return useContext(Timeline);
}

export { TimelineProvider, useTimeline };
/* eslint-enable react/prop-types */
