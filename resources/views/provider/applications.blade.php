@extends('layouts.provider.app')
@section('title','Applications')
@section('content')
<div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Manage Candidate</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="index-2.html">Index</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.html">Dashboard</a>
                                            </li>
                                            <li class="active">Manage Candidate</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-list">
                            <div class="job-info">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Job Titel</th>
                                        <th class="ds-none"></th>
                                        <th class="hdn">Date</th>
                                        <th>Views</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="responsive-table">
                                        <td class="image">
                                            <a href="#"><img alt="user-photo" src="img/avatar/avatar-3.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <h5><a href="#">Martin Smith</a></h5>
                                                <ul>
                                                    <li><i class="flaticon-tick"></i> Content Writer</li>
                                                    <li><i class="flaticon-pin"></i> New York City</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="hdn">Jan 31, 2019</td>
                                        <td>27</td>
                                        <td>Active</td>
                                        <td class="actions">
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="delete fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="responsive-table">
                                        <td class="image">
                                            <a href="#"><img alt="user-photo" src="img/avatar/avatar-2.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <h5><a href="#">Karen Paran</a></h5>
                                                <ul>
                                                    <li><i class="flaticon-tick"></i> Content Writer</li>
                                                    <li><i class="flaticon-pin"></i> New York City</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="hdn">Feb 31, 2019</td>
                                        <td>27</td>
                                        <td>Active</td>
                                        <td class="actions">
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="delete fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="responsive-table">
                                        <td class="image">
                                            <a href="#"><img alt="user-photo" src="img/avatar/avatar-1.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <h5><a href="#">Md Sabuz Bhadra</a></h5>
                                                <ul>
                                                    <li><i class="flaticon-tick"></i> Content Writer</li>
                                                    <li><i class="flaticon-pin"></i> New York City</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="hdn">Jan 24, 2019</td>
                                        <td>27</td>
                                        <td>Active</td>
                                        <td class="actions">
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="delete fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="responsive-table">
                                        <td class="image">
                                            <a href="#"><img alt="user-photo" src="img/avatar/avatar-3.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <h5><a href="#">Jerry karon</a></h5>
                                                <ul>
                                                    <li><i class="flaticon-tick"></i> Content Writer</li>
                                                    <li><i class="flaticon-pin"></i> New York City</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="hdn">Jan 31, 2019</td>
                                        <td>35</td>
                                        <td>Active</td>
                                        <td class="actions">
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="delete fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    <tr class="responsive-table">
                                        <td class="image">
                                            <a href="#"><img alt="user-photo" src="img/avatar/avatar-5.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <h5><a href="#">Martin Smith</a></h5>
                                                <ul>
                                                    <li><i class="flaticon-tick"></i> Content Writer</li>
                                                    <li><i class="flaticon-pin"></i> New York City</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="hdn">Jan 9, 2018</td>
                                        <td>27</td>
                                        <td>Active</td>
                                        <td class="actions">
                                            <a href="#"><i class="fa fa-pencil"></i></a>
                                            <a href="#"><i class="delete fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <p class="sub-banner-2 text-center">© 2019 Theme Vessel. Trademarks and brands are the property of their respective owners.</p>
                </div>
@endsection