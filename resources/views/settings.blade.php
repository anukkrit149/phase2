<?php
/********************
 * Developed by Anukkrit Shanker
 * Time-11:32 PM
 * Date-04-01-2020
 * File-settings.blade.php
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
                <h6 class="title">Account Settings</h6>
            </div>
            <div class="ui-block-content">


                <!-- Personal Account Settings Form -->

                <form>
                    <div class="row">

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-select">
                                <label class="control-label">Who Can Friend You?</label>
                                <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="Everyone"><span class="filter-option pull-left">Everyone</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Everyone</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">No One</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
                                        <option value="EO">Everyone</option>
                                        <option value="NO">No One</option>
                                    </select></div>
                                <span class="material-input"></span></div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-select">
                                <label class="control-label">Who Can View Your Posts</label>
                                <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="Friends Only"><span class="filter-option pull-left">Friends Only</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">Friends Only</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Everyone</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
                                        <option value="US">Friends Only</option>
                                        <option value="EO">Everyone</option>
                                    </select></div>
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="description-toggle">
                                <div class="description-toggle-content">
                                    <div class="h6">Notifications Sound</div>
                                    <p>A sound will be played each time you receive a new activity notification</p>
                                </div>

                                <div class="togglebutton">
                                    <label>
                                        <input type="checkbox" checked=""><span class="toggle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="description-toggle">
                                <div class="description-toggle-content">
                                    <div class="h6">Notifications Email</div>
                                    <p>We’ll send you an email to your account each time you receive a new activity notification</p>
                                </div>

                                <div class="togglebutton">
                                    <label>
                                        <input type="checkbox" checked=""><span class="toggle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="description-toggle">
                                <div class="description-toggle-content">
                                    <div class="h6">Friend’s Birthdays</div>
                                    <p>Choose wheather or not receive notifications about your friend’s birthdays on your newsfeed</p>
                                </div>

                                <div class="togglebutton">
                                    <label>
                                        <input type="checkbox" checked=""><span class="toggle"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="description-toggle">
                                <div class="description-toggle-content">
                                    <div class="h6">Chat Message Sound</div>
                                    <p>A sound will be played each time you receive a new message on an inactive chat window</p>
                                </div>

                                <div class="togglebutton">
                                    <label>
                                        <input type="checkbox" checked=""><span class="toggle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <button class="btn btn-secondary btn-lg full-width">Restore all Attributes</button>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <button class="btn btn-primary btn-lg full-width">Save all Changes</button>
                        </div>
                    </div>
                </form>

                <!-- ... end Personal Account Settings Form  -->

            </div>
        </div>
    </div>
@endsection
