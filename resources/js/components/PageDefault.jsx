import React from "react";

export default function PageDefault() {
    return (
        <div className="row">
            <div className="col-md-4">
                <div className="card">
                    <img
                        src="/img/page.jpg"
                        className="card-img-top"
                        alt="..."
                    />
                    <div className="card-body">
                        <h5 className="card-title">Schools</h5>
                        <p className="card-text"></p>
                    </div>
                    <div className="card-footer">
                        <button className="btn btn-success">Manage</button>
                    </div>
                </div>
            </div>
        </div>
    );
}
