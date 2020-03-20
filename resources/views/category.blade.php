<?php
/********************
 * Developed by Anukkrit Shanker
 * Time-06:26 PM
 * Date-17-03-2020
 * File-category.blade.php
 * Project-phase2
 * Copyrights Reserved
 * Created by PhpStorm
 *
 * Working-
 *********************/

?>

@extends('layouts.wk')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="ui-block responsive-flex">
                    <div class="ui-block-title">
                        <div class="h6 title">Olympus Forums</div>
                        <div class="align-right">
                            <form class="w-search">
                                <div class="form-group with-button is-empty">
                                    <input class="form-control" type="text" placeholder="Search the forums...">
                                    <button>
                                        <svg class="olymp-magnifying-glass-icon"><use xlink:href="#olymp-magnifying-glass-icon"></use></svg>
                                    </button>
                                    <span class="material-input"></span></div>
                            </form>
                            <a href="#" class="btn btn-blue btn-md">Create New Topic</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">

                <div class="ui-block">


                    <!-- Forums Table -->

                    <table class="forums-table">

                        <thead>

                        <tr>

                            <th class="forum">
                                Forum
                            </th>

                            <th class="topics">
                                Topics
                            </th>

                            <th class="posts">
                                Posts
                            </th>

                            <th class="freshness">
                                Freshness
                            </th>

                        </tr>

                        </thead>

                        <tbody>
                        <tr>
                            <td class="forum">
                                <div class="forum-item">
                                    <img src="img/forum7.png" alt="forum">
                                    <div class="content">
                                        <a href="#" class="h6 title">Comics</a>
                                        <p class="text">Talk about dinner parties, reunions and more!</p>
                                    </div>
                                </div>
                            </td>
                            <td class="topics">
                                <a href="#" class="h6 count">11</a>
                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">36</a>
                            </td>
                            <td class="freshness">
                                <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img src="img/avatar40-sm.jpg" alt="author">
                                    </div>
                                    <a href="#" class="h6 title">Mathilda Brinker</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">13 hours, 58 minutes ago</time>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="forum">
                                <div class="forum-item">
                                    <img src="img/forum8.png" alt="forum">
                                    <div class="content">
                                        <a href="#" class="h6 title">Anime and Manga</a>
                                        <p class="text">All related to your favourite movies and tv shows!</p>
                                    </div>
                                </div>
                            </td>
                            <td class="topics">
                                <a href="#" class="h6 count">25</a>
                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">74</a>
                            </td>
                            <td class="freshness">
                                <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img src="img/avatar76-sm.jpg" alt="author">
                                    </div>
                                    <a href="#" class="h6 title">Dave Marinara</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">12 hours, 0 minutes ago</time>
                                </div>
                            </td>
                        </tr>

                        <tr class="bg-smoke-light">
                            <td class="forum">
                                <div class="forum-item">
                                    <svg class="svg-inline--fa fa-star fa-w-18 icon" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="icon fa fa-star" aria-hidden="true"></i> -->
                                    <div class="content">
                                        <a href="#" class="h6 title">This year’s ComixCon will have the best presentations</a>
                                    </div>
                                    <div class="author-started">
                                        <span>Started by:</span>
                                        <div class="author-thumb">
                                            <img src="img/avatar48-sm.jpg" alt="author">
                                        </div>
                                        <a href="#" class="h6 title">Marina Valentine</a>
                                    </div>
                                </div>
                            </td>
                            <td class="topics">

                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">24</a>
                            </td>
                            <td class="freshness">
                                <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img src="img/avatar72-sm.jpg" alt="author">
                                    </div>
                                    <a href="#" class="h6 title">Nicholas Grissom</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">6 minutes ago</time>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="forum">
                                <div class="forum-item">
                                    <div class="content">
                                        <a href="#" class="h6 title">What do you think it’s the most powerfull character of all universes?</a>
                                    </div>
                                    <div class="author-started">
                                        <span>Started by:</span>
                                        <div class="author-thumb">
                                            <img src="img/avatar70-sm.jpg" alt="author">
                                        </div>
                                        <a href="#" class="h6 title">Rachel Howlett</a>
                                    </div>
                                </div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination pagination--small">
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    </ul>
                                </nav>
                            </td>
                            <td class="topics">

                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">196</a>
                            </td>
                            <td class="freshness">
                                <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img src="img/avatar79-sm.jpg" alt="author">
                                    </div>
                                    <a href="#" class="h6 title">Jake Stevens</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">47 minutes ago</time>
                                </div>
                            </td>
                        </tr>

                        <tr class="bg-smoke-light">
                            <td class="forum">
                                <div class="forum-item">
                                    <div class="content">
                                        <a href="#" class="h6 title">Cowboy Champloo will have a live action adaptation, yay or nay?</a>
                                    </div>
                                    <div class="author-started">
                                        <span>Started by:</span>
                                        <div class="author-thumb">
                                            <img src="img/avatar80-sm.jpg" alt="author">
                                        </div>
                                        <a href="#" class="h6 title">Fred Summers</a>
                                    </div>
                                </div>
                            </td>
                            <td class="topics">

                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">1</a>
                            </td>
                            <td class="freshness">
                                <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img src="img/avatar80-sm.jpg" alt="author">
                                    </div>
                                    <a href="#" class="h6 title">Fred Summers</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">58 minutes ago</time>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="forum">
                                <div class="forum-item">
                                    <div class="content">
                                        <a href="#" class="h6 title">The Wonder cinematic universe keeps expanding!</a>
                                    </div>
                                    <div class="author-started">
                                        <span>Started by:</span>
                                        <div class="author-thumb">
                                            <img src="img/avatar53-sm.jpg" alt="author">
                                        </div>
                                        <a href="#" class="h6 title">Bruce Peterson</a>
                                    </div>
                                </div>
                            </td>
                            <td class="topics">

                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">15</a>
                            </td>
                            <td class="freshness">
                                <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img src="img/avatar52-sm.jpg" alt="author">
                                    </div>
                                    <a href="#" class="h6 title">Green Goo Rock</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">1 hour, 49 minutes ago</time>
                                </div>
                            </td>
                        </tr>

                        <tr class="bg-smoke-light">
                            <td class="forum">
                                <div class="forum-item">
                                    <div class="content">
                                        <a href="#" class="h6 title">The Masked Crusader #56 will be released in August 2018</a>
                                    </div>
                                    <div class="author-started">
                                        <span>Started by:</span>
                                        <div class="author-thumb">
                                            <img src="img/avatar81-sm.jpg" alt="author">
                                        </div>
                                        <a href="#" class="h6 title">Marc Roberts</a>
                                    </div>
                                </div>
                            </td>
                            <td class="topics">

                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">27</a>
                            </td>
                            <td class="freshness">
                                <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img src="img/avatar59-sm.jpg" alt="author">
                                    </div>
                                    <a href="#" class="h6 title">Diana Jameson</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">2 hours, 7 minutes ago</time>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="forum">
                                <div class="forum-item">
                                    <div class="content">
                                        <a href="#" class="h6 title">Benjamin Nolan is the new Masked Crusader</a>
                                    </div>
                                    <div class="author-started">
                                        <span>Started by:</span>
                                        <div class="author-thumb">
                                            <img src="img/avatar64-sm.jpg" alt="author">
                                        </div>
                                        <a href="#" class="h6 title">Sarah Hetfield</a>
                                    </div>
                                </div>
                            </td>
                            <td class="topics">

                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">20</a>
                            </td>
                            <td class="freshness">
                                <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img src="img/avatar82-sm.jpg" alt="author">
                                    </div>
                                    <a href="#" class="h6 title">Jenny Carter</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">2 hours, 33 minutes ago</time>
                                </div>
                            </td>
                        </tr>

                        <tr class="bg-smoke-light">
                            <td class="forum">
                                <div class="forum-item">
                                    <div class="content">
                                        <a href="#" class="h6 title">Do you think there should be a cinematic universe reboot? [Poll]</a>
                                    </div>
                                    <div class="author-started">
                                        <span>Started by:</span>
                                        <div class="author-thumb">
                                            <img src="img/avatar52-sm.jpg" alt="author">
                                        </div>
                                        <a href="#" class="h6 title">Green Goo Rock</a>
                                    </div>
                                </div>
                            </td>
                            <td class="topics">

                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">46</a>
                            </td>
                            <td class="freshness">
                                <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img src="img/avatar51-sm.jpg" alt="author">
                                    </div>
                                    <a href="#" class="h6 title">Nicholas Grissom</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">4 hours, 26 minutes ago</time>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="forum">
                                <div class="forum-item">
                                    <div class="content">
                                        <a href="#" class="h6 title">Iron Alchemist japanese live action has mixed reviews</a>
                                    </div>
                                    <div class="author-started">
                                        <span>Started by:</span>
                                        <div class="author-thumb">
                                            <img src="img/faved-page5.jpg" alt="author">
                                        </div>
                                        <a href="#" class="h6 title">Carol Summers</a>
                                    </div>
                                </div>
                            </td>
                            <td class="topics">

                            </td>
                            <td class="posts">
                                <a href="#" class="h6 count">33</a>
                            </td>
                            <td class="freshness">
                                <div class="author-freshness">
                                    <div class="author-thumb">
                                        <img src="img/faved-page10.jpg" alt="author">
                                    </div>
                                    <a href="#" class="h6 title">Matt Simpson</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">5 hours, 58 minutes ago</time>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <!-- ... end Forums Table -->

                </div>


                <!-- Pagination -->

                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">12</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

                <!-- ... end Pagination -->

            </div>

            <div class="col col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Featured Topics</h6>
                    </div>
                    <div class="ui-block-content">


                        <!-- Widget Featured Topics -->

                        <ul class="widget w-featured-topics">
                            <li>
                                <svg class="svg-inline--fa fa-star fa-w-18 icon" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="icon fa fa-star" aria-hidden="true"></i> -->
                                <div class="content">
                                    <a href="#" class="h6 title">The new Goddess of War trailer was launched at E3!</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">2 hours, 16 minutes ago</time>
                                </div>
                            </li>
                            <li>
                                <svg class="svg-inline--fa fa-star fa-w-18 icon" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="icon fa fa-star" aria-hidden="true"></i> -->
                                <div class="content">
                                    <a href="#" class="h6 title">This year’s ComixCon will have the best presentations</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">14 hours, 36 minutes ago</time>
                                </div>
                            </li>
                            <li>
                                <svg class="svg-inline--fa fa-star fa-w-18 icon" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="icon fa fa-star" aria-hidden="true"></i> -->
                                <div class="content">
                                    <a href="#" class="h6 title">Here are the behind-the-scenes photos of “Vilords”</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">9 hours, 8 minutes ago</time>
                                </div>
                            </li>
                        </ul>

                        <!-- ... end Widget Featured Topics -->
                    </div>
                </div>

                <div class="ui-block">
                    <div class="ui-block-title">
                        <h6 class="title">Recent Topics</h6>
                    </div>
                    <div class="ui-block-content">


                        <!-- Widget Recent Topics -->

                        <ul class="widget w-featured-topics">
                            <li>
                                <div class="content">
                                    <a href="#" class="h6 title">Summer is Coming! Picnic in the east boulevard park</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">26 minutes ago</time>
                                    <div class="forums">The Community</div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <a href="#" class="h6 title">Kung Fighters released a new video, check it out here!</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">44 minutes ago</time>
                                    <div class="forums">The Boombox</div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <a href="#" class="h6 title">What’s your favourite season?</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">59 minutes ago</time>
                                    <div class="forums">The Community</div>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <a href="#" class="h6 title">Who had the best presentation at this year’s E3? Rate them!</a>
                                    <time class="entry-date updated" datetime="2017-06-24T18:18">1 hour, 3 minutes ago</time>
                                    <div class="forums">Arcade Planet</div>
                                </div>
                            </li>
                        </ul>

                        <!-- ... end Widget Recent Topics -->
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
