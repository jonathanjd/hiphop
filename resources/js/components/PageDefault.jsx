import Axios from "axios";
import React, { useState, useEffect } from "react";

export default function PageDefault({ myChangeManage }) {
    const [pages, setPages] = useState([]);

    useEffect(() => {
        Axios.get("/admin/pages-list").then((response) => {
            const { data } = response;
            setPages(data);
        });
    }, []);

    const cmp = pages.map((page) => {
        return (
            <div key={page.id} className="col-md-4">
                <div className="card">
                    <img
                        src="/img/page.jpg"
                        className="card-img-top"
                        alt="..."
                    />
                    <div className="card-body">
                        <h5 className="card-title">{page.name}</h5>
                        <p className="card-text"></p>
                    </div>
                    <div className="card-footer">
                        <button
                            onClick={() => myChangeManage("pageList", page.id)}
                            className="btn btn-success"
                        >
                            Manage
                        </button>
                    </div>
                </div>
            </div>
        );
    });

    return <div className="row">{cmp}</div>;
}
