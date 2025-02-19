<?php
/********************
 * Developed by Anukkrit Shanker
 * Time-11:24 PM
 * Date-04-01-2020
 * File-pass.blade.php
 * Project-phase2
 * Copyrights Reserved
 * Created by PhpStorm
 *
 * Working-
 *********************/

?>


@extends('layouts.profile')


@section('box')
    <div class="col col-xl-9 order-xl-2 col-lg-9 order-lg-2 col-md-12 order-md-1 col-sm-12 col-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Change Password</h6>
            </div>
            <div class="ui-block-content">


                <!-- Change Password Form -->

                <form>
                    <div class="row">

                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Confirm Current Password</label>
                                <input class="form-control" placeholder="" type="password" value="Olympus-2017">
                            </div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Your New Password</label>
                                <input class="form-control" placeholder="" type="password">
                            </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Confirm New Password</label>
                                <input class="form-control" placeholder="" type="password">
                            </div>
                        </div>

                        <div class="col col-lg-12 col-sm-12 col-sm-12 col-12">
                            <div class="remember">

                                <div class="checkbox">
                                    <label>
                                        <input name="optionsCheckboxes" type="checkbox">
                                        Remember Me
                                    </label>
                                </div>

                                <a href="#" class="forgot" data-toggle="modal" data-target="#restore-password">Forgot my Password</a>
                            </div>
                        </div>

                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn btn-primary btn-lg full-width">Change Password Now!</button>
                        </div>

                    </div>
                </form>

                <!-- ... end Change Password Form -->
            </div>
        </div>
    </div>
@endsection
