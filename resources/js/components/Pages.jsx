import React, { useState } from "react";
import ReactDOM from "react-dom";
import PageDefault from "./PageDefault";
import PageEdit from "./PageEdit";
import PageList from "./PageList";

export default function Pages() {
    const [view, setView] = useState("default");
    const [pageID, setPageID] = useState(null);
    const [parentID, setParentID] = useState(null);

    const changeView = (view) => {
        setView(view);
    };

    const changeViewUpdate = (view, id) => {
        setView(view);
        setPageID(id);
    };

    const changeManage = (view, parentID) => {
        setView(view);
        setParentID(parentID);
    };

    const cmp = () => {
        switch (view) {
            case "default":
                return <PageDefault myChangeManage={changeManage} />;

            case "pageList":
                return (
                    <PageList
                        myChangeView={changeView}
                        myParentID={parentID}
                        myChangeViewUpdate={changeViewUpdate}
                    />
                );

            case "pageEdit":
                return <PageEdit myPageID={pageID} />;

            default:
                return <PageDefault />;
        }
    };

    return <div>{cmp()}</div>;
}

if (document.getElementById("admin-pages")) {
    ReactDOM.render(<Pages />, document.getElementById("admin-pages"));
}
