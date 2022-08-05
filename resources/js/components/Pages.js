import React from "react";
import ReactDOM from "react-dom";

export default function Pages() {
    return <div>Pages</div>;
}

if (document.getElementById("admin-pages")) {
    ReactDOM.render(<Pages />, document.getElementById("admin-pages"));
}
