import React, { useState, useEffect } from "react";
import Axios from "axios";

export default function PageEdit({ myPageID }) {
    const [page, setPage] = useState(null);

    useEffect(() => {
        Axios.get(`pages-edit/${myPageID}`).then((response) => {
            console.log(response);
        });
    }, []);

    return (
        <div className="row d-flex justify-content-center">
            <div className="col-md-8">
                <div className="card">
                    <div className="card-header">
                        <h5 className="text-center text-uppercase">
                            Edit Page
                        </h5>
                    </div>
                    <div className="card-body">
                        <div className="mb-3">
                            <label htmlFor="">* Name</label>
                            <input className="form-control" type="text" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="">Slug</label>
                            <input className="form-control" type="text" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="">Meta Description</label>
                            <input className="form-control" type="text" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="">Meta Keywords</label>
                            <input className="form-control" type="text" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="">Parent</label>
                            <select className="form-control">
                                <option value=""> - Select - </option>
                            </select>
                        </div>
                        <div className="mb-3">
                            <label htmlFor="">Content Header</label>
                            <input className="form-control" type="text" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="">Content Body</label>
                            <input className="form-control" type="text" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="">Content Footer</label>
                            <input className="form-control" type="text" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="">Call Action Top</label>
                            <input className="form-control" type="text" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="">Call Action Bottom</label>
                            <input className="form-control" type="text" />
                        </div>
                        <div className="mb-3">
                            <label htmlFor="">Show</label>
                            <select className="form-control">
                                <option value=""> - Yes - </option>
                                <option value=""> - No - </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
