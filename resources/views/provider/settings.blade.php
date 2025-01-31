@extends('layouts.provider.app')
@section('title','Settings')
@section('content')
<div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Edit Profile</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="index-2.html">Index</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.html">Dashboard</a>
                                            </li>
                                            <li class="active">Edit Profile</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-list">
                            <h3 class="heading">Basic Info</h3>
                            <div class="dashboard-message contact-2 bdr clearfix">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3">
                                        <!-- Edit profile photo -->
                                        <div class="edit-profile-photo">
                                            <img src="img/avatar/avatar-6.jpg" alt="profile-photo" class="img-fluid">
                                            <div class="change-photo-btn">
                                                <div class="photoUpload">
                                                    <span><i class="fa fa-upload"></i></span>
                                                    <input type="file" class="upload">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <form action="#" method="GET" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group name">
                                                        <label>Your Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group email">
                                                        <label>Your Title</label>
                                                        <input type="text" name="title" class="form-control" placeholder="Your Title">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group subject">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group number">
                                                        <label>Email</label>
                                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group number">
                                                        <label>Address</label>
                                                        <input type="text" name="address" class="form-control" placeholder="Address">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group number">
                                                        <label>Category</label>
                                                        <input type="text" name="address" class="form-control" placeholder="Category">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group mb-0 message">
                                                        <label>About Us</label>
                                                        <textarea class="form-control" name="message" placeholder="Write"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="dashboard-list">
                                    <h3 class="heading">Change Password</h3>
                                    <div class="dashboard-message contact-2">
                                        <form action="#" method="GET" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group name">
                                                        <label>Current Password</label>
                                                        <input type="password" name="current-password" class="form-control" placeholder="Current Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group email">
                                                        <label>New Password</label>
                                                        <input type="password" name="new-password" class="form-control" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group subject">
                                                        <label>Confirm New Password</label>
                                                        <input type="password" name="confirm-new-password" class="form-control" placeholder="Confirm New Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="send-btn">
                                                        <button type="submit" class="btn btn-md button-theme">Change Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="dashboard-list">
                                    <h3 class="heading">Socials</h3>
                                    <div class="dashboard-message contact-2">
                                        <form action="#" method="GET" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group name">
                                                        <label>Facebook</label>
                                                        <input type="text" name="facebook" class="form-control" placeholder="https://www.facebook.com/">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group email">
                                                        <label>Twitter</label>
                                                        <input type="text" name="twitter" class="form-control" placeholder="https://twitter.com/">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group subject">
                                                        <label>Vkontakte</label>
                                                        <input type="text" name="vkontakte" class="form-control" placeholder="vk.com">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group number">
                                                        <label>Whatsapp</label>
                                                        <input type="email" name="whatsapp" class="form-control" placeholder="https://www.whatsapp.com/">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="send-btn">
                                                        <button type="submit" class="btn btn-md button-theme">Send Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="sub-banner-2 text-center">© 2019 Theme Vessel. Trademarks and brands are the property of their respective owners.</p>
                </div>
@endsection