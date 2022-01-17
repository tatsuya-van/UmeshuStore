<?php
function component($productname, $productprice,$productimg, $productid){
  $element ="
  <div class=\"col-md-3 col-sm-6 my-3 my-md-0\" >
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\" style=\"text-align:left\">
                            <h5 class=\"card-title\" style=\"font-size:25px\">$productname</h5>


                            <h5 style=\"margin-top:30px;border-bottom:solid 1px ; border-color:lightgray;padding-bottom:40px\">
                                <span class=\"price\" style=\"color:#ae4399\">$$productprice</span>
                            </h5>
                            <button type=\"submit\" class=\"btn m-0 p-0\" name=\"add\"><i class=\"fas fa-shopping-cart\" style=\"font-size:10px;\">Add to Cart </i></button>
                            <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>";
  echo $element;
}


function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning \">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
    </form>
    ";
    echo  $element;
}
    ?>