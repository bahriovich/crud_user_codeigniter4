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
                        <form method="post" id="add_create" name="add_create" action="<?= site_url('/submit-form') ?>">
                            <div class="d-flex flex-wrap" name="cvl" style="padding-top: 30px; margin:20px;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cvl" checked value="0"> <!--id="filter-none"-->
                                    <label class="form-check-label" for="inlineRadio1">Mr.</label>
                                    
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cvl"  value="1"> <!--id="filter-1"-->
                                    <label class="form-check-label" for="inlineRadio2">Mme.</label>
                                </div>
                            </div>
                            <div class="row" style="margin:20px;">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Nom" name="nom">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Prénom" name="prénom">
                                </div>
                                <div class="col">
                                    <select class="form-select" aria-label="Default select example" name="age">
                                        <option selected>Tranche d'age</option>
                                        <option value="0">40-50</option>
                                        <option value="1">30-40</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-4" style="margin:20px;">
                                <button type="submit" class="btn btn-success btn-sm">Ajouter</button>                        
                            </div>
                        </form>
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
                                <?php if($users): ?>
                                <?php foreach($users as $user): ?>
                                <tr>
                                    <th scope="row">
                                        <a href="<?php echo base_url('delete/'.$user['id']);?>" type="button" class="btn-close" aria-label="Close"></a>
                                    </th> 
                                    <td>
                                        <?php if ( $user['cvl'] === '0' ) : ?>
                                            <?php echo 'Mr'; ?>
                                        <?php else : ?>
                                            <?php echo 'Mme'; ?>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $user['nom']; ?></td>
                                    <td><?php echo $user['prénom']; ?></td>
                                    <td>
                                        <?php if ( $user['age'] === '0' ) : ?>
                                            <?php echo '40-50'; ?>
                                        <?php else : ?>
                                            <?php echo '30-40'; ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
        <script>
            if ($("#add_create").length > 0) {
            $("#add_create").validate({
                rules: {
                nom: {
                    required: true,
                },
                prénom: {
                    required: true,
                },
                age: {
                    required: true,
                },
                cvl: {
                    required: true,
                },
                },

            })
            }
        </script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
            $('#users-list').DataTable();
        } );
        </script>
</body>
</html>
