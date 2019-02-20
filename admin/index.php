<?php
session_start();
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$root/CoffeeShop/connect.php";

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Admin Panel | N8 PLUS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="footer.css">
        <!--        <script src="js/resCarousel.js"></script>-->
        <script src="../js/Alert.js"></script>
        <script>
            function removeCus(e) {
                if (confirm("Do you want to delete this customer?")) {
                    $(e).parent().parent().hide(400);
                }
            }

            function login(user, pwd) {
                if (user == "admin" && pwd == "admin") {
                    $('#loginForm').hide();
                    $("#content").show();
                } else {
                    $('#loginForm').show();
                    $("#content").hide();
                }
            }

        </script>
    </head>

    <body style="min-height: 100vh !important; ">
        <div class="container" id='loginForm'>
            <h2 style="text-align: center">Login into admin</h2>
            <form class="form-group" method="POST" style="width: 300px; margin: 30px auto;">
                Username: <input type="text" class="form-control" id="user"><br> Password: <input type="password" class="form-control" id="pwd"><br>
                <center><button type="button" class="btn" onclick="login($('#user').val(),$('#pwd').val())">Login</button></center>
            </form>
        </div>
        <div id='content' style="display:none">
            <div id="logout" class="modal fade" role="dialog">
                <div class="modal-dialog" style="margin:150px auto; text-align: center; width: 350px">
                    <div class="modal-content clearfix">
                        <div class="modal-header">
                            <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Logout</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="logout.php?page=/CoffeeShop/home.php">
                                <p>Do want to logout your account?</p><br>
                                <input class="btn" type="submit" name="logout" value="Logout">
                                <input class="btn" type="reset" name="cancel" value="Cancel">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="detail-2" class="modal fade" role="dialog">
                <div class="modal-dialog" style="margin-top:150px; width: 452px;">
                    <div class="modal-content clearfix">
                        <div class="modal-header">
                            <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Order</h3>
                            <table class="table table-hover table-body">
                                <tr>
                                    <th>Drink</th>
                                    <th>Quantity</th>
                                </tr>
                                <tr>
                                    <td>Latte</td>
                                    <td>3</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="detail-3" class="modal fade" role="dialog">
                <div class="modal-dialog" style="margin-top:150px; width: 452px;">
                    <div class="modal-content clearfix">
                        <div class="modal-header">
                            <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Order</h3>
                            <table class="table table-hover table-body">
                                <tr>
                                    <th>Drink</th>
                                    <th>Quantity</th>
                                </tr>
                                <tr>
                                    <td>Americano</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Chocolate</td>
                                    <td>2</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="detail-4" class="modal fade" role="dialog">
                <div class="modal-dialog" style="margin-top:150px; width: 452px;">
                    <div class="modal-content clearfix">
                        <div class="modal-header">
                            <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Order</h3>
                            <table class="table table-hover table-body">
                                <tr>
                                    <th>Drink</th>
                                    <th>Quantity</th>
                                </tr>
                                <tr>
                                    <td>Iced Espresso</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Sandwich</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>Chocolate</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="detail-5" class="modal fade" role="dialog">
                <div class="modal-dialog" style="margin-top:150px; width: 452px;">
                    <div class="modal-content clearfix">
                        <div class="modal-header">
                            <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Order</h3>
                            <table class="table table-hover table-body">
                                <tr>
                                    <th>Drink</th>
                                    <th>Quantity</th>
                                </tr>
                                <tr>
                                    <td>Orange</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="logout">
                            <button class="logout-btn" data-toggle="modal" data-target="#logout">LOG OUT <i class="fa fa-sign-out"></i></button>
                        </div>
                        <!-- Nav tabs -->
                        <div class="card">

                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active head-tab"><a href="#cm" aria-controls="cm" role="tab" data-toggle="tab">Customers</a></li>
                                <li role="presentation" class="head-tab"><a href="#ac" aria-controls="ac" role="tab" data-toggle="tab">Active Customers</a></li>
                                <li role="presentation" class="head-tab"><a href="#bc" aria-controls="bc" role="tab" data-toggle="tab">Booked Customers</a></li>
                                <li role="presentation" class="head-tab"><a href="#tb" aria-controls="tb" role="tab" data-toggle="tab">Tables</a></li>
                                <li role="presentation" class="head-tab"><a href="#od" aria-controls="od" role="tab" data-toggle="tab">Orders</a></li>
                                <li role="presentation" class="head-tab"><a href="#rb" aria-controls="rb" role="tab" data-toggle="tab">Robots</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="cm">
                                    <table class="table table-hover table-body">
                                        <thead>
                                            <tr>
                                                <th>Customer</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Van Dang</td>
                                                <td>0586956749</td>
                                                <td>vandang@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Ba Long</td>
                                                <td>0121345674</td>
                                                <td>balong@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>

                                            </tr>
                                            <tr>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>candang@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Hoai Chung</td>
                                                <td>0394368345</td>
                                                <td>dinhphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Long Phi</td>
                                                <td>0982364872</td>
                                                <td>longphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>candang@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Hoai Chung</td>
                                                <td>0394368345</td>
                                                <td>dinhphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Long Phi</td>
                                                <td>0982364872</td>
                                                <td>longphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>candang@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Hoai Chung</td>
                                                <td>0394368345</td>
                                                <td>dinhphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Long Phi</td>
                                                <td>0982364872</td>
                                                <td>longphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>candang@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Hoai Chung</td>
                                                <td>0394368345</td>
                                                <td>dinhphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Long Phi</td>
                                                <td>0982364872</td>
                                                <td>longphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>candang@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Hoai Chung</td>
                                                <td>0394368345</td>
                                                <td>dinhphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Long Phi</td>
                                                <td>0982364872</td>
                                                <td>longphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>candang@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Hoai Chung</td>
                                                <td>0394368345</td>
                                                <td>dinhphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                            <tr>
                                                <td>Long Phi</td>
                                                <td>0982364872</td>
                                                <td>longphi@gmail.com</td>
                                                <td><button class="btn btn-delete" onclick="removeCus(this)">Delete</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="ac">
                                    <table class="table table-hover table-body">
                                        <thead>
                                            <tr>
                                                <th>Time In</th>
                                                <th>Time Out</th>
                                                <th>Date</th>
                                                <th>Customer</th>
                                                <th>Phone</th>
                                                <th>Space</th>
                                                <th>Table</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>7:30</td>
                                                <td>9:30</td>
                                                <td>19/11/2017</td>
                                                <td>Van Dang</td>
                                                <td>0586956749</td>
                                                <td>Study</td>
                                                <td>SD04</td>
                                            </tr>
                                            <tr>
                                                <td>9:10</td>
                                                <td>12:30</td>
                                                <td>19/11/2017</td>
                                                <td>Ba Long</td>
                                                <td>0121345674</td>
                                                <td>Study</td>
                                                <td>SD017</td>
                                            </tr>
                                            <tr>
                                                <td>15:30</td>
                                                <td>19:30</td>
                                                <td>19/11/2017</td>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>Entertainment</td>
                                                <td>ET13</td>
                                            </tr> <tr>
                                                <td>9:10</td>
                                                <td>12:30</td>
                                                <td>19/11/2017</td>
                                                <td>Ba Long</td>
                                                <td>0121345674</td>
                                                <td>Study</td>
                                                <td>SD017</td>
                                            </tr>
                                            <tr>
                                                <td>15:30</td>
                                                <td>19:30</td>
                                                <td>19/11/2017</td>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>Entertainment</td>
                                                <td>ET13</td>
                                            </tr> <tr>
                                                <td>9:10</td>
                                                <td>12:30</td>
                                                <td>19/11/2017</td>
                                                <td>Ba Long</td>
                                                <td>0121345674</td>
                                                <td>Study</td>
                                                <td>SD017</td>
                                            </tr>
                                            <tr>
                                                <td>15:30</td>
                                                <td>19:30</td>
                                                <td>19/11/2017</td>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>Entertainment</td>
                                                <td>ET13</td>
                                            </tr> </tr> <tr>
                                                <td>9:10</td>
                                                <td>12:30</td>
                                                <td>19/11/2017</td>
                                                <td>Ba Long</td>
                                                <td>0121345674</td>
                                                <td>Study</td>
                                                <td>SD017</td>
                                            </tr>
                                            <tr>
                                                <td>15:30</td>
                                                <td>19:30</td>
                                                <td>19/11/2017</td>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>Entertainment</td>
                                                <td>ET13</td>
                                            </tr> </tr> <tr>
                                                <td>9:10</td>
                                                <td>12:30</td>
                                                <td>19/11/2017</td>
                                                <td>Ba Long</td>
                                                <td>0121345674</td>
                                                <td>Study</td>
                                                <td>SD017</td>
                                            </tr>
                                            <tr>
                                                <td>15:30</td>
                                                <td>19:30</td>
                                                <td>19/11/2017</td>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>Entertainment</td>
                                                <td>ET13</td>
                                            </tr> </tr> <tr>
                                                <td>9:10</td>
                                                <td>12:30</td>
                                                <td>19/11/2017</td>
                                                <td>Ba Long</td>
                                                <td>0121345674</td>
                                                <td>Study</td>
                                                <td>SD017</td>
                                            </tr>
                                            <tr>
                                                <td>15:30</td>
                                                <td>19:30</td>
                                                <td>19/11/2017</td>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>Entertainment</td>
                                                <td>ET13</td>
                                            </tr></tr>
<tr>
    <td>9:10</td>
    <td>12:30</td>
    <td>19/11/2017</td>
    <td>Ba Long</td>
    <td>0121345674</td>
    <td>Study</td>
    <td>SD017</td>
</tr>
<tr>
    <td>15:30</td>
    <td>19:30</td>
    <td>19/11/2017</td>
    <td>Dinh Phi</td>
    <td>0946866424</td>
    <td>Entertainment</td>
    <td>ET13</td>
</tr> <tr>
                                                <td>9:10</td>
                                                <td>12:30</td>
                                                <td>19/11/2017</td>
                                                <td>Ba Long</td>
                                                <td>0121345674</td>
                                                <td>Study</td>
                                                <td>SD017</td>
                                            </tr>
                                            <tr>
                                                <td>15:30</td>
                                                <td>19:30</td>
                                                <td>19/11/2017</td>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>Entertainment</td>
                                                <td>ET13</td>
                                            </tr> <tr>
                                                <td>9:10</td>
                                                <td>12:30</td>
                                                <td>19/11/2017</td>
                                                <td>Ba Long</td>
                                                <td>0121345674</td>
                                                <td>Study</td>
                                                <td>SD017</td>
                                            </tr>
                                            <tr>
                                                <td>15:30</td>
                                                <td>19:30</td>
                                                <td>19/11/2017</td>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>Entertainment</td>
                                                <td>ET13</td>
                                            </tr>
                                            <tr>
                                                <td>8:45</td>
                                                <td>22:15</td>
                                                <td>19/11/2017</td>
                                                <td>Hoai Chung</td>
                                                <td>0394368345</td>
                                                <td>Study</td>
                                                <td>SD09</td>
                                            </tr>
                                            <tr>
                                                <td>17:30</td>
                                                <td>20:47</td>
                                                <td>19/11/2017</td>
                                                <td>Long Phi</td>
                                                <td>0982364872</td>
                                                <td>Study</td>
                                                <td>SD18</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bc">
                                    <table class="table table-hover table-body">
                                        <thead>
                                            <tr>
                                                <th>Time</th>
                                                <th>Date</th>
                                                <th>Customer</th>
                                                <th>Phone</th>
                                                <th>Space</th>
                                                <th>Table</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>15:09</td>
                                                <td>20/11/2017</td>
                                                <td>Hoai Chung</td>
                                                <td>0123456789</td>
                                                <td>Study</td>
                                                <td>SD12</td>
                                            </tr>
                                            <tr>
                                                <td>12:10</td>
                                                <td>20/11/2017</td>
                                                <td>Khac Duy</td>
                                                <td>0121340974</td>
                                                <td>Study</td>
                                                <td>SD01</td>
                                            </tr>
                                            <tr>
                                                <td>09:03</td>
                                                <td>20/11/2017</td>
                                                <td>Van Hiep</td>
                                                <td>0949263424</td>
                                                <td>Entertainment</td>
                                                <td>ET06</td>
                                            </tr>
                                            <tr>
                                                <td>07:45</td>
                                                <td>20/11/2017</td>
                                                <td>Minh Nhut</td>
                                                <td>0394368345</td>
                                                <td>For Kid</td>
                                                <td>FK10</td>
                                            </tr>
                                            <tr>
                                                <td>20:30</td>
                                                <td>19/11/2017</td>
                                                <td>Thanh Oai</td>
                                                <td>0386458736</td>
                                                <td>Party</td>
                                                <td>PT11</td>
                                            </tr>
                                            <tr>
                                                <td>8:30</td>
                                                <td>21/11/2017</td>
                                                <td>Long Phi</td>
                                                <td>0982364872</td>
                                                <td>Dating</td>
                                                <td>DT18</td>
                                            </tr>
                                            <tr>
                                                <td>10:30</td>
                                                <td>19/11/2017</td>
                                                <td>Hoai Phong</td>
                                                <td>0389463784</td>
                                                <td>Relax</td>
                                                <td>RL03</td>
                                            </tr>
                                            <tr>
                                                <td>16:30</td>
                                                <td>21/11/2017</td>
                                                <td>Dai Phuc</td>
                                                <td>0398759349</td>
                                                <td>Study</td>
                                                <td>SD04</td>
                                            </tr>
                                            <tr>
                                                <td>19:30</td>
                                                <td>20/11/2017</td>
                                                <td>Van Tai</td>
                                                <td>0923568734</td>
                                                <td>Dating</td>
                                                <td>DT13</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tb">
                                    <table class="table table-hover table-body">
                                        <thead>
                                            <tr>
                                                <th>Space</th>
                                                <th>Table</th>
                                                <th>State</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT01</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT02</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT03</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT04</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT05</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT06</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT07</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT08</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT09</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT10</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT11</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT12</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT13</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT14</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT15</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT16</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT17</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT18</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT19</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Dating</td>
                                                <td>DT20</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET01</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET02</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET03</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET04</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET05</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET06</td>
                                                <td>Booked</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET07</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET08</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET09</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET10</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET11</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET12</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET13</td>
                                                <td>Serving</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET14</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET15</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET16</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET17</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET18</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET19</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Entertainment</td>
                                                <td>ET20</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>For Kid</td>
                                                <td>FK09</td>
                                                <td>Booked</td>
                                            </tr>
                                            <tr>
                                                <td>Party</td>
                                                <td>PT01</td>
                                                <td>Empty</td>
                                            </tr>
                                            <tr>
                                                <td>Relax</td>
                                                <td>RL03</td>
                                                <td>Booked</td>
                                            </tr>
                                            <tr>
                                                <td>Study</td>
                                                <td>RL03</td>
                                                <td>Serving</td>
                                            </tr>
                                            <tr>
                                                <td>Study</td>
                                                <td>RL04</td>
                                                <td>Serving</td>
                                            </tr>
                                            <tr>
                                                <td>Study</td>
                                                <td>RL17</td>
                                                <td>Serving</td>
                                            </tr>
                                            <tr>
                                                <td>Study</td>
                                                <td>RL18</td>
                                                <td>Serving</td>
                                            </tr>



                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="od">
                                    <table class="table table-hover table-body">
                                        <thead>
                                            <tr>
                                                <th>Time</th>
                                                <th>Date</th>
                                                <th>Customer</th>
                                                <th>Phone</th>
                                                <th>Space</th>
                                                <th>Table</th>
                                                <th>Drinks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>7:30</td>
                                                <td>19/11/2017</td>
                                                <td>Van Dang</td>
                                                <td>0586956749</td>
                                                <td>Study</td>
                                                <td>SD04</td>
                                                <td>2.Capuccino + 1.Espresso</td>
                                                <td><button class="btn" data-toggle="modal" data-target="#detail-1">Order Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    9:10</td>
                                                <td>19/11/2017</td>
                                                <td>Ba Long</td>
                                                <td>0121345674</td>
                                                <td>Study</td>
                                                <td>SD017</td>
                                                <td>3.Latte</td>
                                                <td><button class="btn" data-toggle="modal" data-target="#detail-2">Order Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>15:30</td>
                                                <td>19/11/2017</td>
                                                <td>Dinh Phi</td>
                                                <td>0946866424</td>
                                                <td>Entertainment</td>
                                                <td>ET13</td>
                                                <td>2.Americano + 2.Chocolate</td>
                                                <td><button class="btn" data-toggle="modal" data-target="#detail-3">Order Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>8:45</td>
                                                <td>19/11/2017</td>
                                                <td>Hoai Chung</td>
                                                <td>0394368345</td>
                                                <td>Study</td>
                                                <td>SD09</td>
                                                <td>1.Sandwich + 1.Iced Espresso + 1.Ch...</td>
                                                <td><button class="btn" data-toggle="modal" data-target="#detail-4">Order Detail</button></td>
                                            </tr>
                                            <tr>
                                                <td>17:30</td>
                                                <td>19/11/2017</td>
                                                <td>Long Phi</td>
                                                <td>0982364872</td>
                                                <td>Study</td>
                                                <td>SD18</td>
                                                <td>1.Orange</td>
                                                <td><button class="btn" data-toggle="modal" data-target="#detail-5">Order Detail</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="rb">
                                    <table class="table table-hover table-body">
                                        <thead>
                                            <tr>
                                                <th>Code</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CL001</td>
                                                <td>New</td>

                                            </tr>
                                            <tr>
                                                <td>CL002</td>
                                                <td>New</td>

                                            </tr>
                                            <tr>
                                                <td>DL001</td>
                                                <td>New</td>

                                            </tr>
                                            <tr>
                                                <td>DL002</td>
                                                <td>Like New</td>

                                            </tr>
                                            <tr>
                                                <td>DL003</td>
                                                <td>Broken</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="detail-1" class="modal fade" role="dialog">
                <div class="modal-dialog" style="margin-top:150px; width: 452px;">
                    <div class="modal-content clearfix">
                        <div class="modal-header">
                            <button type="button ripple" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title">Order</h3>
                            <table class="table table-hover table-body">
                                <tr>
                                    <th>Drink</th>
                                    <th>Quantity</th>
                                </tr>
                                <tr>
                                    <td>Capuccino</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Espresso</td>
                                    <td>1</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <footer style="margin-top: 175px">
                <div class="row" id="copyright">
                    <div class="col-xs-12 coppyright">Copyright © 2017 <a href="#"> N8+ Future Coffee Shop </a>. All Rights Reserved. </div>
                </div>
            </footer>
        </div>

    </body>

    </html>
