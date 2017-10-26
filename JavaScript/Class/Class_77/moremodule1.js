var app = app || {};

app.models = (function (models) {
    "use strict";

    models.modelsFunction = function () {
        console.log("Im a model function");
    };

    return models;

}(app.models || {}));