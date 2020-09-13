<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <title>Dateabus.com</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>

        <!-- App css -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
        <link href="<?php echo base_url();?>assets/css/admin_css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
        <link href="<?php echo base_url();?>assets/css/admin_css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/admin_css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- Datatable css -->
        <link href="<?php echo base_url();?>assets/css/admin_css/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/toastr.min.css">

    </head>

    <body class='sidebar-collapse home-page' onload='addTableData(), addCardData()'>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            <div class="navbar-custom" style="background-color: #ffffff !important">
                <!-- LOGO -->
                <div class="logo-box" style='margin-left:5%'>
                    <a href="<?php echo base_url();?>" class="logo text-center">
                        <img src="<?php echo base_url();?>assets/img/logo/Original1.png" alt="" height="60">
                    </a>
                </div>
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="<?php echo base_url();?>assets/img/client/client1.png" alt="user-image" class="rounded-circle">
                            <span style='color:red'><span id="h_username"><?php echo $this->session->userdata('username'); ?> &nbsp</span><i class="fa fa-arrow-down"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item" data-toggle="modal" data-target="#con-close-modal">
                                <i class="fa fa-user"></i>
                                <span>My Account</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="<?php echo base_url() ?>admin/logout" class="dropdown-item notify-item">
                                <i class="fas fa-sign-out-alt"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- Start Page Content here -->
            <div class="content-page" style="margin-left: 0px !important; margin-top:100px !important">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row" id='card_body'>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- Start table-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="products-datatable" class="table table-centered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Customer</th>
                                                        <th>Email</th>
                                                        <th>Price</th>
                                                        <th>Create Date</th>
                                                        <th>Status</th>
                                                        <th style="width: 50px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody id='table_data'>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->
            </div>
            <!-- End Page content -->
        </div>
        <!-- END wrapper -->

        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">My Account</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="username" class="control-label">Name</label>
                                    <input type="text" class="form-control" id="username" value="<?php echo $this->session->userdata('username'); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="emailaddress" class="control-label">Email</label>
                                    <input type="email" class="form-control" id="emailaddress" value="<?php echo $this->session->userdata('email'); ?>" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="repassword" class="control-label">Re Password</label>
                                    <input type="password" class="form-control" id="repassword" placeholder="Retype Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info waves-effect waves-light" onclick="saveAccount('<?php echo $this->session->userdata('id') ?>')">Save changes</button>
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->
        
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <!-- Vendor js -->
        <script src="<?php echo base_url();?>assets/js/admin_js/vendor.min.js"></script>
        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/admin_js/app.min.js"></script>
        <!-- Datatable js -->
        <script src="<?php echo base_url();?>assets/js/admin_js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url();?>assets/js/admin_js/dataTables.bootstrap4.js"></script>

        <script src="<?php echo base_url();?>assets/js/toastr.min.js"></script>

        <script>
            function addTableData()
            {
                $('#table_data').empty();
                $.get('<?php echo base_url(); ?>admin/getTableData',{},
                function(res){
                    // alert(Object.keys(res).length);
                    $no = 1;
                    for(x in res){
                        $status_str='';
                        button_str='';
                        if(res[x].status==0) {
                            $status_str='"badge bg-soft-warning text-warning">Ongoing';
                        }
                        else if(res[x].status==1) {
                            $status_str='"badge bg-soft-success text-success">Accepted';
                            button_str=' style="display:none"';
                        }
                        else {
                            $status_str='"badge bg-soft-danger text-danger">Rejected';
                            button_str=' style="display:none"';
                        }
                        $('#table_data').append(' \
                        <tr> \
                            <td>' + ($no++) + '</td> \
                            <td class="table-user"> \
                                <a href="javascript:void(0);" class="text-body font-weight-semibold">' + res[x].firstname + ' ' + res[x].lastname + '</a> \
                            </td> <td>' + res[x].emailaddress + '</td> \
                            <td>' + res[x].payamount + '</td> \
                            <td>' + res[x].creatdate + '</td> \
                            <td><span id="status' + res[x].id + '" class=' + $status_str + '</span></td> \
                            <td> \
                                <a href="javascript:void(0);" class="action-icon" onclick="accept_order(\'' + res[x].emailaddress + '\', \'' + res[x].id + '\', \'' + res[x].card_id + '\')"' + button_str + ' id="abutton' + res[x].id + '"> <i class="fa fa-check"></i></a> \
                                <a href="javascript:void(0);" class="action-icon" onclick="reject_order(\'' + res[x].emailaddress + '\', \'' + res[x].id + '\', \'' + res[x].firstname + '\', \'' + res[x].lastname + '\', \'' + res[x].payamount + '\', \'' + res[x].card_id + '\', \'' + res[x].invoice + '\')"' + button_str + ' id="rbutton' + res[x].id + '"> <i class="fa fa-ban"></i></a> \
                            </td> \
                        </tr>');
                    }
                    $('#products-datatable').DataTable();                    
                });
            }

            function addCardData()
            {
                $('#card_body').empty();
                $.get('<?php echo base_url(); ?>admin/getCardData',{},
                function(res){
                    for(x in res){
                        $('#card_body').append(' \
                        <div class="col-lg-4"> \
                            <div class="text-center card-box"> \
                                <h4 class="mt-3"><input type="text" class="col-md-3 text-center" id="age' + res[x].id + '" value="' + res[x].age + '" style="border:none; padding:0px"></h4> \
                                <p class="text-muted">Danmark, Norge, Sverige, USA, Storbritanien</p> \
                                <textarea id="content' + res[x].id + '" class="col-12 text-center" style="border:none" rows=6>' + res[x].content + '</textarea> \
                                <div class="row"> \
                                    <div class="col-5"> \
                                        <h2><input type="text" class="col-md-6 text-center" id="price' + res[x].id + '" value="' + res[x].price + '" style="border:none; padding:0px"><sup key="USD" class="tr">USD</h2> \
                                    </div> \
                                    <div class="col-7"> \
                                        <input type = "date" class = "col-md-8" id = "from_date' + res[x].id + '" style = "border:none; padding:0px" value="' + res[x].from_date + '"> \
                                        <input type = "date" class = "col-md-8 mt-1" id = "to_date' + res[x].id + '" style = "border:none; padding:0px" value="' + res[x].to_date + '"> \
                                    </div> \
                                </div> \
                                <div class="checkbox checkbox-danger" style="margin:5px"> \
                                    <input id="checkbox' + res[x].id + '" type="checkbox"' + (res[x].sold_out=="0" ? "" : ' checked') +'> \
                                    <label for="checkbox' + res[x].id + '" style="color:red; font-size:17px"><b>Sold Out</b></label> \
                                </div> \
                                <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="changeCard(' + res[x].id + ');">Change</button> \
                            </div> \
                        </div>');
                    }
                });
            }

            function changeCard(id){
                tmp=($('#checkbox'+id).is(':checked')) ? 1 : 0;
                $.post('<?php echo base_url(); ?>admin/setCardData',
                {
                    'id': id,
                    'age': $('#age'+id).val(),
                    'content': $('#content'+id).val(),
                    'price': $('#price'+id).val(),
                    'from_date': $('#from_date'+id).val(),
                    'to_date': $('#to_date'+id).val(),
                    'sold_out': tmp
                },
                function(res){
                    if(res==true){
                        toastr.success('Data changed successfully.', 'Success!', {closeButton: true});
                    }
                    else{
                        toastr.warning('Something went wrong, Try again.', 'Failed!', {closeButton: true});
                    }
                });
            }

            function accept_order(emailaddress, id, card_id)
            {
                $.post('<?php echo base_url() ?>admin/accept_order', 
                {
                    id : id,
                    emailaddress: emailaddress,
                    card_id: card_id
                },
                function(res){
                    $('#status'+id).removeClass();
                    $('#status'+id).addClass("badge bg-soft-success text-success");
                    $('#status'+id).text("Accepted");
                    $('#abutton' + id).css('display', 'none');
                    $('#rbutton' + id).css('display', 'none');
                });
            }
            
            function reject_order(emailaddress, id, firstname, lastname, payamount, card_id, invoice)
            {
                $.post('<?php echo base_url() ?>admin/reject_order', 
                {
                    id : id,
                    emailaddress: emailaddress,
                },
                function(res){
                    $.post('<?php echo base_url() ?>payment/refund_order', 
                    {
                        id : id,
                        emailaddress: emailaddress,
                        firstname: firstname,
                        lastname: lastname,
                        payamount: payamount,
                        card_id: card_id,
                        invoice: invoice
                    },
                    function(res){
                        $('#status'+id).removeClass();
                        $('#status'+id).addClass("badge bg-soft-danger text-danger");
                        $('#status'+id).text("Rejected");
                        $('#abutton' + id).css('display', 'none');
                        $('#rbutton' + id).css('display', 'none');
                    });
                });
            }
            
            function saveAccount(id)
            {
                if($('#password').val()!=$('#repassword').val()){
                    toastr.warning('Please check your new password, Try again.', 'Failed!', {closeButton: true});
                }
                $.post('<?php echo base_url() ?>admin/change_user',
                {
                    id: id,
                    username: $('#username').val(),
                    email: $('#emailaddress').val(),
                    password: $('#password').val()
                },
                function(res){
                    if(res)
                    {
                        $('#h_username').text($('#username').val() + " ");
                        toastr.success('Your infomation changed successfully.', 'Success!', {closeButton: true});
                    }
                    else{
                        toastr.warning('Something went wrong, Try again.', 'Failed!', {closeButton: true});
                    }
                });
            }
        </script>
    </body>
</html>