<?php
include 'division/header.php';
?>
    <style>
        .chat
        {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .chat li
        {
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px dotted #B3A9A9;
        }
        .chat li.left .chat-body
        {
            margin-left: 60px;
        }
        .chat li.right .chat-body
        {
            margin-right: 60px;
        }
        .chat li .chat-body p
        {
            margin: 0;
            color: #777777;
        }
        .panel .slidedown .glyphicon, .chat .glyphicon
        {
            margin-right: 5px;
        }
        .panel-body
        {
            overflow-y: scroll;
            height: 350px;
        }
        ::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
        }
        ::-webkit-scrollbar
        {
            width: 12px;
            background-color: #F5F5F5;
        }
        ::-webkit-scrollbar-thumb
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }
    </style>
    <!-- END HEADER -->
    <!-- BEGIN PAGE CONTAINER -->
    <div class="page-container">
        <!-- BEGIN PAGE HEAD -->
        <div class="page-head">
            <div class="container">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Messaging<small></small></h1>
                </div>
                <!-- END PAGE TITLE -->
                <!-- BEGIN PAGE TOOLBAR -->
                <div class="page-toolbar">
                    <!-- BEGIN THEME PANEL -->
                    <!-- END THEME PANEL -->
                </div>
                <!-- END PAGE TOOLBAR -->
            </div>
        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
    <div class="container">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    Widget settings form goes here
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn blue">Save changes</button>
                    <button type="button" class="btn default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN PAGE BREADCRUMB -->
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="index.html">Dashboard</a><i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Messaging</a>
            <i class="fa fa-circle"></i>
        </li>
        <li class="active">
            Short &amp; Long Codes
        </li>
    </ul>
    <!-- END PAGE BREADCRUMB -->
    <!-- BEGIN PAGE CONTENT INNER -->
    <div class="row margin-top-10">
    <div class="col-md-12">
    <!-- BEGIN PROFILE SIDEBAR -->
    <div class="profile-sidebar" style="width: 250px;">
        <!-- PORTLET MAIN -->
        <div class="portlet light profile-sidebar-portlet">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic">
                <img src="http://placehold.it/750x750" class="img-responsive" alt="">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle">
                <div class="profile-usertitle-name">
                    Albert Ninyeh
                </div>
                <div class="profile-usertitle-job">
                    Organisation Name
                </div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
            <!-- SIDEBAR BUTTONS -->
            <!-- END SIDEBAR BUTTONS -->
            <!-- SIDEBAR MENU -->
            <div class="profile-usermenu">
                <ul class="nav">
                    <li class="active">
                        <a href="profile.php">
                            <i class="icon-settings"></i>
                            Account Settings </a>
                    </li>
                </ul>
            </div>
            <!-- END MENU -->
        </div>
        <!-- END PORTLET MAIN -->

    </div>
    <!-- END BEGIN PROFILE SIDEBAR -->
    <!-- BEGIN PROFILE CONTENT -->
    <div class="profile-content">
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light">
                    <div class="portlet-title tabbable-line">
                        <div class="caption caption-md">
                            <i class="icon-globe theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase"></span>
                        </div>
                        <ul class="nav nav-tabs thick">
                            <li class="active">
                                <a href="#tab_1_1" data-toggle="tab">Short & Long Codes</a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="row">
                            <div class="col-md-4">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr >
                                        <th>  <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <span class="fa fa-plus-circle"></span>
                                            </button> New Chat
                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    <span class="fa fa-search"></span>
                                                </button>
                                                <ul class="dropdown-menu slidedown">
                                                    <li><a href="#"><span class="glyphicon glyphicon-refresh">
                                  </span>Refresh</a></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-ok-sign">
                                  </span>Available</a></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-remove">
                                  </span>Busy</a></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-time"></span>
                                                            Away</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-off"></span>
                                                            Sign Out</a></li>
                                                </ul>
                                            </div>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td style="font-weight: bold; font-size: 15px;">+233265515154 <span class="badge pull-right">4</span></li></td>
                                    </tr>
                                    <tr>
                                        <td>Kwame</td>
                                    </tr>
                                    <tr>
                                        <td>Kwesi</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold; font-size: 15px;">+233244114704<span class="badge pull-right">14</span></li></td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                    </tr>
                                    <tr>
                                        <td>Trident</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- BEGIN FORM-->
                            <div class="col-md-8" >
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <span class="glyphicon glyphicon-comment"></span> Chat
                                        <div class="btn-group pull-right">
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="chat">
                                            <li class="left clearfix"><span class="chat-img pull-left">
                          <img src="http://placehold.it/50x50" alt="User Avatar" class="img-circle" />
                        </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <strong class="primary-font">Recipient</strong> <small class="pull-right text-muted">
                                                            <span class="glyphicon glyphicon-time"></span>12 mins ago</small>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                                        dolor, quis ullamcorper ligula sodales.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="right clearfix"><span class="chat-img pull-right">
                        <img src="http://placehold.it/50x50" alt="User Avatar" class="img-circle" />
                      </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>13 mins ago</small>
                                                        <strong class="pull-right primary-font">NALO</strong>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                                        dolor, quis ullamcorper ligula sodales.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="left clearfix"><span class="chat-img pull-left">
                      <img src="http://placehold.it/50x50" alt="User Avatar" class="img-circle" />
                    </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <strong class="primary-font">Recipient</strong> <small class="pull-right text-muted">
                                                            <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                                        dolor, quis ullamcorper ligula sodales.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="right clearfix"><span class="chat-img pull-right">
                    <img src="http://placehold.it/50x50" alt="User Avatar" class="img-circle" />
                  </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>15 mins ago</small>
                                                        <strong class="pull-right primary-font">NALO</strong>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                                        dolor, quis ullamcorper ligula sodales.
                                                    </p>
                                                </div>
                                            </li>
                                            <li class="left clearfix"><span class="chat-img pull-left">
                  <img src="http://placehold.it/50x50" alt="User Avatar" class="img-circle" />
                </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <strong class="primary-font">Recipient</strong> <small class="pull-right text-muted">
                                                            <span class="glyphicon glyphicon-time"></span>14 mins ago</small>
                                                    </div>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                                        dolor, quis ullamcorper ligula sodales.
                                                    </p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="input-group">
                                            <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
              <span class="input-group-btn">
                <button class="btn btn-primary btn-sm" id="btn-chat">
                    Send</button>
              </span>
                                        </div><br/>
                                        <p class="pull-right">Characters: 47 | Parts: 1/6</p><br/><br/>
                                    </div>
                                </div>
                            </div>
                                </div>

                        </div><br/><br/><br/><br/><br/>
                        <!-- END PRIVACY SETTINGS TAB -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END PROFILE CONTENT -->
    </div>
    </div>
    <!-- END PAGE CONTENT INNER -->
    </div>
    </div>

<?php include 'division/footer.php';?>