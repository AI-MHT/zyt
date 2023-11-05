<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title id="pageTitle">Rappel : PHP</title>
    <link rel="stylesheet" href="css/card.css" type="text/css">
    <script href="js/js.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootdey">
<div class="row bootstrap snippets">

    <div class="clearfix visible-sm"></div>

    <!-- Cart -->
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="col-lg-12 col-sm-12">
            <span class="title">visu_panier</span>
        </div>
        <div class="col-lg-12 col-sm-12 hero-feature">
            <div class="table-responsive">
                <table class="table table-bordered tbl-cart">
                    <thead>
                        <tr>
                            <td class="td-qty">Quantite</td>
                            <td>PLAT</td>
                            <td>Prix</td>
                            <td>Total</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="" value="2" class="input-qty form-control text-center" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                            </td>
                            <td><a >Spaghetti Carbonara</a>
                            </td>
                      
                            <td class="price">4.0</td>
                            <td> 8.0€</td>
                            <td class="text-center">
                                <a href="#" class="remove_cart" rel="2">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="" value="1" class="input-qty form-control text-center" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default bootstrap-touchspin-up" type="button">+</button></span></div>
                            </td>
                            <td><a >Tatin ananas</a>
                            </td>
                           
                            
                            <td class="price">4.0</td>
                            <td>4.0€</td>
                            <td class="text-center">
                                <a href="#" class="remove_cart" rel="1">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5" align="right">Total des achats = <b>12.00€</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="btn-group btns-cart">
                <button type="button" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Menu</button>
                <button type="button" class="btn btn-primary">Mise a jour des modifications </button>
                <button type="button" class="btn btn-primary">Valide la cde <i class="fa fa-arrow-circle-right"></i></button>
            </div>

        </div>
    </div>
    <!-- End Cart -->
</div>
</div>
</body>
</html>
