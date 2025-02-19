<?php
/********************
 * Developed by Anukkrit Shanker
 * Time-11:35 PM
 * Date-04-01-2020
 * File-employment.blade.php
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
                <h6 class="title">Your Education History</h6>
            </div>
            <div class="ui-block-content">


                <!-- Education History Form -->

                <form>
                    <div class="row">

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Title or Place</label>
                                <input class="form-control" placeholder="" type="text" value="The New College of Design">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Period of Time</label>
                                <input class="form-control" placeholder="" type="text" value="2001 - 2006">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description">Bachelor of Interactive Design in the New College. It was a five years intensive career. Average: A+</textarea>
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Title or Place</label>
                                <input class="form-control" placeholder="" type="text" value="Rembrandt Institute">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Period of Time</label>
                                <input class="form-control" placeholder="" type="text" value="2008">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description">Five months Digital Illustration course. Professor: Leonardo Stagg.</textarea>
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Title or Place</label>
                                <input class="form-control" placeholder="" type="text">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Period of Time</label>
                                <input class="form-control" placeholder="" type="text">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group is-empty">
                                <textarea class="form-control" placeholder="Description"></textarea>
                                <span class="material-input"></span></div>

                            <a href="#" class="add-field">
                                <svg class="olymp-plus-icon"><use xlink:href="#olymp-plus-icon"></use></svg>
                                <span>Add Education Field</span>
                            </a>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <button class="btn btn-secondary btn-lg full-width">Cancel</button>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <button class="btn btn-primary btn-lg full-width">Save all Changes</button>
                        </div>
                    </div>
                </form>

                <!-- ... end Education History Form -->
            </div>
        </div>
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Your Employement History</h6>
            </div>
            <div class="ui-block-content">


                <!-- Employement History Form -->

                <form>
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Title or Place</label>
                                <input class="form-control" placeholder="" type="text" value="Digital Design Intern">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Period of Time</label>
                                <input class="form-control" placeholder="" type="text" value="2006 - 2008">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description">Digital Design Intern for the “Multimedz” agency. Was in charge of the communication with the clients.</textarea>
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Title or Place</label>
                                <input class="form-control" placeholder="" type="text" value="UI/UX Designer">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Period of Time</label>
                                <input class="form-control" placeholder="" type="text" value="2008 - 2013">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Description">UI/UX Designer for the “Daydreams” agency.</textarea>
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Title or Place</label>
                                <input class="form-control" placeholder="" type="text">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Period of Time</label>
                                <input class="form-control" placeholder="" type="text">
                                <span class="material-input"></span></div>
                        </div>

                        <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="form-group is-empty">
                                <textarea class="form-control" placeholder="Description"></textarea>
                                <span class="material-input"></span></div>

                            <a href="#" class="add-field">
                                <svg class="olymp-plus-icon"><use xlink:href="#olymp-plus-icon"></use></svg>
                                <span>Add Education Field</span>
                            </a>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <button class="btn btn-secondary btn-lg full-width">Cancel</button>
                        </div>

                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <button class="btn btn-primary btn-lg full-width">Save all Changes</button>
                        </div>
                    </div>
                </form>

                <!-- ... end Employement History Form -->
            </div>
        </div>
    </div>
@endsection
