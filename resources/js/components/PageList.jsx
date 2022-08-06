import React, { useState, useEffect } from "react";
import Axios from "axios";
import moment from "moment";

export default function PageList({
    myParentID,
    myChangeView,
    myChangeViewUpdate,
}) {
    const [pages, setPages] = useState([]);

    useEffect(() => {
        Axios.get("/admin/pages-list", {
            params: {
                parent_id: myParentID,
            },
        }).then((response) => {
            console.log(response);
            const { data } = response;
            setPages(data);
        });
    }, []);

    const cmpTableBody = () => {
        return pages.map((page) => {
            return (
                <tr key={page.id}>
                    <td>{page.name}</td>
                    <td>{page.slug}</td>
                    <td>{page.show ? "Yes" : "No"}</td>
                    <td>{moment(page.created_at).format("MM-DD-YYYY")}</td>
                    <td>
                        <div
                            className="btn-group"
                            role="group"
                            aria-label="Basic example"
                        >
                            <button
                                onClick={() => {
                                    myChangeViewUpdate("pageEdit", page.id);
                                }}
                                type="button"
                                className="btn btn-warning"
                            >
                                Edit
                            </button>
                        </div>
                    </td>
                </tr>
            );
        });
    };

    return (
        <div className="row">
            <div className="col-md-6">
                <div className="d-flex">
                    <button
                        onClick={() => {
                            myChangeView("default");
                        }}
                        className="btn btn-primary flex-fill"
                        type="button"
                    >
                        Back
                    </button>
                </div>

                <table className="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Show</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>{cmpTableBody()}</tbody>
                </table>
            </div>
        </div>
    );
}
