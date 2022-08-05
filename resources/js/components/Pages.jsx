import React, { useState } from "react";
import ReactDOM from "react-dom";
import PageDefault from "./PageDefault";

export default function Pages() {
    const [view, setView] = useState("default");

    let cmp = null;

    switch (view) {
        case "default":
            cmp = <PageDefault />;
            break;

        default:
            cmp = <PageDefault />;
            break;
    }

    return <div>{cmp}</div>;
}

if (document.getElementById("admin-pages")) {
    ReactDOM.render(<Pages />, document.getElementById("admin-pages"));
}
