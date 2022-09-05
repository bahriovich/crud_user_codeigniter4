<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- STYLES -->

    <style {csp-style-nonce}> 
    
    body{

        background: #7fffd4;
    }

    .container { 
    min-height: 692px;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    z-index: 0;
    overflow: hidden;
    }
    .formWrap {
    height: 80%;
    display: flex;
    flex-direction: column;
    justify-content: center;

    @media screen and (max-width: 480px) {
        height: 80%;
    }
    }

    .formContent 
    { height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;

    @media screen and (max-width: 480px) {
        padding: 10px;
    }
    }
    .form { 
    background-color: #ffffff;
    max-width: 80%;
    height: 85%;
    width: 100%;
    z-index: 1;
    display: grid;
    justify-content: center;
    margin: 0 auto 0;
    border-radius: 12px;
    box-shadow: 0 1px 3px rgba(255, 255, 255, 0.9);
    @media screen and (max-width: 480px) {
        padding: 32px 32px;
    }}
    .d-flex .flex-wrap{
        padding-top: 30px;
    }


    
    </style>
</head>
<body>

        <div class="container">
            <h1 style="color: #3f4277; margin-top:100px; margin-left: 10%; margin-bottom: 0px;">Ajouter un agriculteur</h1>
            <div class="formWrap">
                <div class="formContent">
                    <div class="form">
                        <div class="d-flex flex-wrap" style="padding-top: 30px;">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radioFilter" id="filter-none" checked>
                                <label class="form-check-label" for="inlineRadio1">Mr.</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radioFilter" id="filter-1">
                                <label class="form-check-label" for="inlineRadio2">Mme.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Enter email" name="email">
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" placeholder="Enter password" name="pswd">
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Tranche d'age</option>
                                    <option value="1">40-50</option>
                                    <option value="2">30-40</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <button type="button" class="btn btn-success btn-sm">Ajouter</button>                        
                        </div>
                        <div class="row">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                <th scope="col"></th>
                                <th scope="col">Cvl</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Age</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">*</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">*</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
