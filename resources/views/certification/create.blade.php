@extends('layouts.master')

@section('content')
    <style>
        h2.secondary {
            width: 100%;
            margin: 0;
            padding: 100px;
            text-align: center;
        }
        h2.secondary:after {
            display: inline-block;
            margin: 0 0 8px 20px;
            height: 3px;
            content: " ";
            text-shadow: none;
            background-color: #999;
            width: 140px;
        }
        h2.secondary:before {
            display: inline-block;
            margin: 0 20px 8px 0;
            height: 3px;
            content: " ";
            text-shadow: none;
            background-color: #999;
            width: 140px;
        }
    </style>
    <div class="page-title">
        <div class="title_left">
          <img src ="https://crm.na1.insightly.com/img/placeholder-task.png" style="width:50px;height:50px;display:inline;float:left" />
            <span><small>CREATE NEW CERTIFICATION</small>
              <h3 style="margin-top:1px;">Add Certification</h3></span>

        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Basic Certification Info </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Title <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" placeholder="Default Input">
                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Code </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" disabled="disabled" placeholder="Auto generated">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea class="form-control" rows="3" placeholder="Description"></textarea>
                            </div>
                        </div>


                         <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Notify Examination Centers
                                <br>
                                <small class="text-navy">(after succesfull creation)</small></label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="">
                                    <label>
                                        <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(38, 185, 154); border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span> Checked
                                    </label>
                                </div>

                            </div>
                        </div>


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <button type="button" class="btn btn-primary">Cancel</button>
                                <button type="reset" class="btn btn-primary">Reset</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xs-6">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Assign Topics</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <select name="user_id" id="users" class="form-control" multiple>
                                    @foreach($topics as $key => $user)
                                        <option value="{{ $key }}">{{ $user }}</option>
                                    @endforeach
                                </select>
                                <br/>
                                <br/>
                                <button id="add_topic" class="btn btn-success">Create New Topic & Select</button>
                                <script>
                                    $(document).ready(function(){
                                        $('#users').select2();
                                        $("#add_topic").click(function() {
                                           $(".modal").modal('show');//show();
                                        });
                                    });
                                </script>
                            </div>

                        </div>

                    </div>

                </div>

        </div>
   </div>
        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Modal body text goes here.</p>
                        <form class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Title <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Default Input">
                                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Code </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" disabled="disabled" placeholder="Auto generated">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control" rows="3" placeholder="Description"></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Notify Examination Centers
                                    <br>
                                    <small class="text-navy">(after succesfull creation)</small></label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="">
                                        <label>
                                            <input type="checkbox" class="js-switch" checked="" data-switchery="true" style="display: none;"><span class="switchery switchery-default" style="background-color: rgb(38, 185, 154); border-color: rgb(38, 185, 154); box-shadow: rgb(38, 185, 154) 0px 0px 0px 11px inset; transition: border 0.4s, box-shadow 0.4s, background-color 1.2s;"><small style="left: 12px; background-color: rgb(255, 255, 255); transition: background-color 0.4s, left 0.2s;"></small></span> Checked
                                        </label>
                                    </div>

                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="button" class="btn btn-primary">Cancel</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
 @endsection