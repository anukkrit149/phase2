@extends('layouts.wk')

@section('content')
    <!-- Main Content -->

    <main class="col col-xl-9 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">

        <div class="ui-block">

            <!-- News Feed Form  -->

        {{--            <div class="news-feed-form">--}}
        {{--                <!-- Nav tabs -->--}}
        {{--                <ul class="nav nav-tabs" role="tablist">--}}
        {{--                    <li class="nav-item">--}}
        {{--                        <a class="nav-link active inline-items" data-toggle="tab" href="#home-1" role="tab" aria-expanded="true">--}}

        {{--                            <svg class="olymp-status-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-status-icon"></use></svg>--}}

        {{--                            <span>Status</span>--}}
        {{--                        </a>--}}
        {{--                    </li>--}}
        {{--                    <li class="nav-item">--}}
        {{--                        <a class="nav-link inline-items" data-toggle="tab" href="#profile-1" role="tab" aria-expanded="false">--}}

        {{--                            <svg class="olymp-multimedia-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-multimedia-icon"></use></svg>--}}

        {{--                            <span>Multimedia</span>--}}
        {{--                        </a>--}}
        {{--                    </li>--}}

        {{--                    <li class="nav-item">--}}
        {{--                        <a class="nav-link inline-items" data-toggle="tab" href="#blog" role="tab" aria-expanded="false">--}}
        {{--                            <svg class="olymp-blog-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-blog-icon"></use></svg>--}}

        {{--                            <span>Blog Post</span>--}}
        {{--                        </a>--}}
        {{--                    </li>--}}
        {{--                </ul>--}}

        {{--                <!-- Tab panes -->--}}
        {{--                <div class="tab-content">--}}
        {{--                    <div class="tab-pane active" id="home-1" role="tabpanel" aria-expanded="true">--}}
        {{--                        <form>--}}
        {{--                            <div class="author-thumb">--}}
        {{--                                <img src="img/author-page.jpg" alt="author">--}}
        {{--                            </div>--}}
        {{--                            <div class="form-group with-icon label-floating is-empty">--}}
        {{--                                <label class="control-label">Share what you are thinking here...</label>--}}
        {{--                                <textarea class="form-control" placeholder=""></textarea>--}}
        {{--                            </div>--}}
        {{--                            <div class="add-options-message">--}}
        {{--                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">--}}
        {{--                                    <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>--}}
        {{--                                </a>--}}
        {{--                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">--}}
        {{--                                    <svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>--}}
        {{--                                </a>--}}

        {{--                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">--}}
        {{--                                    <svg class="olymp-small-pin-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>--}}
        {{--                                </a>--}}

        {{--                                <button class="btn btn-primary btn-md-2">Post Status</button>--}}
        {{--                                <button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>--}}

        {{--                            </div>--}}

        {{--                        </form>--}}
        {{--                    </div>--}}

        {{--                    <div class="tab-pane" id="profile-1" role="tabpanel" aria-expanded="true">--}}
        {{--                        <form>--}}
        {{--                            <div class="author-thumb">--}}
        {{--                                <img src="img/author-page.jpg" alt="author">--}}
        {{--                            </div>--}}
        {{--                            <div class="form-group with-icon label-floating is-empty">--}}
        {{--                                <label class="control-label">Share what you are thinking here...</label>--}}
        {{--                                <textarea class="form-control" placeholder=""  ></textarea>--}}
        {{--                            </div>--}}
        {{--                            <div class="add-options-message">--}}
        {{--                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">--}}
        {{--                                    <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>--}}
        {{--                                </a>--}}
        {{--                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">--}}
        {{--                                    <svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>--}}
        {{--                                </a>--}}

        {{--                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">--}}
        {{--                                    <svg class="olymp-small-pin-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>--}}
        {{--                                </a>--}}

        {{--                                <button class="btn btn-primary btn-md-2">Post Status</button>--}}
        {{--                                <button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>--}}

        {{--                            </div>--}}

        {{--                        </form>--}}
        {{--                    </div>--}}

        {{--                    <div class="tab-pane" id="blog" role="tabpanel" aria-expanded="true">--}}
        {{--                        <form>--}}
        {{--                            <div class="author-thumb">--}}
        {{--                                <img src="img/author-page.jpg" alt="author">--}}
        {{--                            </div>--}}
        {{--                            <div class="form-group with-icon label-floating is-empty">--}}
        {{--                                <label class="control-label">Share what you are thinking here...</label>--}}
        {{--                                <textarea class="form-control" placeholder=""  ></textarea>--}}
        {{--                            </div>--}}
        {{--                            <div class="add-options-message">--}}
        {{--                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD PHOTOS">--}}
        {{--                                    <svg class="olymp-camera-icon" data-toggle="modal" data-target="#update-header-photo"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>--}}
        {{--                                </a>--}}
        {{--                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="TAG YOUR FRIENDS">--}}
        {{--                                    <svg class="olymp-computer-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-computer-icon"></use></svg>--}}
        {{--                                </a>--}}

        {{--                                <a href="#" class="options-message" data-toggle="tooltip" data-placement="top"   data-original-title="ADD LOCATION">--}}
        {{--                                    <svg class="olymp-small-pin-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-small-pin-icon"></use></svg>--}}
        {{--                                </a>--}}

        {{--                                <button class="btn btn-primary btn-md-2">Post Status</button>--}}
        {{--                                <button   class="btn btn-md-2 btn-border-think btn-transparent c-grey">Preview</button>--}}

        {{--                            </div>--}}

        {{--                        </form>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}

        <!-- ... end News Feed Form  -->			</div>

        <div id="newsfeed-items-grid">

            <div class="ui-block">

                <article class="hentry post video">

                    <div class="post__author author vcard inline-items">
                        <img src="img/avatar7-sm.jpg" alt="author">

                        <div class="author-date">
                            <a class="h6 post__author-name fn" href="#">Anukkrit Shanker</a> shared a <a href="#">link</a>
                            <div class="post__date">
                                <time class="published" datetime="2004-07-24T18:18">
                                    March 16 at 2:05pm
                                </time>
                            </div>
                        </div>

                        <div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
                            <ul class="more-dropdown">
                                <li>

                                    <a href="#">Edit Post</a>
                                </li>
                                <li>
                                    <a href="#">Delete Post</a>
                                </li>
                                <li>
                                    <a href="#">Turn Off Notifications</a>
                                </li>
                                <li>
                                    <a href="#">Select as Featured</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <p> <a href="#">test link</a> paragraph area</p>

                    <div class="post-video">
{{--                        <div class="video-thumb">--}}
{{--                            <img src="img/video-youtube1.jpg" alt="photo">--}}
{{--                            <a href="https://youtube.com/watch?v=excVFQ2TWig" class="play-video">--}}
{{--                                <svg class="olymp-play-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-play-icon"></use></svg>--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div class="video-content">--}}
{{--                            <a href="#" class="h4 title">Iron Maid - ChillGroves</a>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt--}}
{{--                                ut labore et dolore magna aliqua...--}}
{{--                            </p>--}}
{{--                            <a href="#" class="link-site">YOUTUBE.COM</a>--}}
{{--                        </div>--}}
                    </div>

                    <div class="post-additional-info inline-items">

                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
                            <span>18</span>
                        </a>

                        <ul class="friends-harmonic">
                            <li>
                                <a href="#">
                                    <img src="img/friend-harmonic9.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/friend-harmonic10.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/friend-harmonic7.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/friend-harmonic8.jpg" alt="friend">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/friend-harmonic11.jpg" alt="friend">
                                </a>
                            </li>
                        </ul>

                        <div class="names-people-likes">
                            <a href="#">Jenny</a>, <a href="#">Robert</a> and
                            <br>18 more liked this
                        </div>

                        <div class="comments-shared">
                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>

                                <span>0</span>
                            </a>

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>

                                <span>16</span>
                            </a>
                        </div>


                    </div>

                    <div class="control-block-button post-control-button">

                        <a href="#" class="btn btn-control">
                            <i class="fa fa-heart"></i>
{{--                            <svg class="olymp-like-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>--}}
                        </a>

                        <a href="#" class="btn btn-control">
                            <i class="fa fa-comment"></i>
{{--                            <svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>--}}
                        </a>

                        <a href="#" class="btn btn-control">
                            <i class="fa fa-share"></i>
{{--                            <svg class="olymp-share-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use></svg>--}}
                        </a>

                    </div>

                </article>
                <!-- Comments -->

                <ul class="comments-list">

                    <li class="comment-item">
                        <div class="post__author author vcard inline-items">
                            <img src="img/avatar1-sm.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
                                <div class="post__date">
                                    <time class="published" datetime="2004-07-24T18:18">
                                        1 hour ago
                                    </time>
                                </div>
                            </div>

                            <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

                        </div>

                        <p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
                            quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                        </p>

                        <a href="#" class="post-add-icon inline-items">
                            <svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
                            <span>8</span>
                        </a>
{{--                        <a href="#" class="reply">Reply</a>--}}
                    </li>
                </ul>

                <!-- ... end Comments -->

                <a href="#" class="more-comments">View more comments <span>+</span></a>


                <!-- Comment Form  -->

                <form class="comment-form inline-items">

                    <div class="post__author author vcard inline-items">
                        <img src="img/author-page.jpg" alt="author">

                        <div class="form-group with-icon-right ">
                            <textarea class="form-control" placeholder=""></textarea>
                            <div class="add-options-message">
                                <a href="#" class="options-message" data-toggle="modal" data-target="#update-header-photo">
                                    <svg class="olymp-camera-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-md-2 btn-primary">Post Comment</button>

                    <button class="btn btn-md-2 btn-border-think c-grey btn-transparent custom-color">Cancel</button>

                </form>

                <!-- ... end Comment Form  -->
            </div>



        </div>

        <a id="load-more-button" href="#" class="btn btn-control btn-more" data-load-link="items-to-load.html" data-container="newsfeed-items-grid"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

    </main>

    <!-- ... end Main Content -->



    <!-- Right Sidebar -->

    <aside class="col col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-6 col-12">
        <div class="ui-block">


            <!-- W-Action -->

            <div class="widget w-action">

                <img src="img/WK2.png"  alt="wiseKreator">
                <div class="content">
                    {{--                            <h4 class="title">wiseKreator</h4>--}}
                    {{--                            <span>Digital Kreators</span>--}}
                    {{--                            <a href="#" class="btn btn-bg-secondary btn-md">Register Now!</a>--}}
                </div>
            </div>

            <!-- ... end W-Action -->
        </div>



        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Friend Suggestions</h6>
                <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
            </div>



            <!-- W-Action -->

            <ul class="widget w-friend-pages-added notification-list friend-requests">
                <li class="inline-items">
                    <div class="author-thumb">
                        <img src="img/avatar38-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Francine Smith</a>
                        <span class="chat-message-item">8 Friends in Common</span>
                    </div>
                    <span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
                </li>

                <li class="inline-items">
                    <div class="author-thumb">
                        <img src="img/avatar39-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Hugh Wilson</a>
                        <span class="chat-message-item">6 Friends in Common</span>
                    </div>
                    <span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
                </li>

                <li class="inline-items">
                    <div class="author-thumb">
                        <img src="img/avatar40-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Karen Masters</a>
                        <span class="chat-message-item">6 Friends in Common</span>
                    </div>
                    <span class="notification-icon">
							<a href="#" class="accept-request">
								<span class="icon-add without-text">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>
							</a>
						</span>
                </li>

            </ul>

            <!-- ... end W-Action -->
        </div>

        <div class="ui-block">

            <div class="ui-block-title">
                <h6 class="title">Activity Feed</h6>
                <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>
            </div>


            <!-- W-Activity-Feed -->

            <ul class="widget w-activity-feed notification-list">
                <li>
                    <div class="author-thumb">
                        <img src="img/avatar49-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Marina Polson</a> commented on Jason Mark’s <a href="#" class="notification-link">photo.</a>.
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 mins ago</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar9-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Jake Parker </a> liked Nicholas Grissom’s <a href="#" class="notification-link">status update.</a>.
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">5 mins ago</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar50-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Mary Jane Stark </a> added 20 new photos to her <a href="#" class="notification-link">gallery album.</a>.
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">12 mins ago</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar51-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Nicholas Grissom </a> updated his profile <a href="#" class="notification-link">photo</a>.
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
                    </div>
                </li>
                <li>
                    <div class="author-thumb">
                        <img src="img/avatar48-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Marina Valentine </a> commented on Chris Greyson’s <a href="#" class="notification-link">status update</a>.
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar52-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Green Goo Rock </a> posted a <a href="#" class="notification-link">status update</a>.
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">1 hour ago</time></span>
                    </div>
                </li>
                <li>
                    <div class="author-thumb">
                        <img src="img/avatar10-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Elaine Dreyfuss  </a> liked your <a href="#" class="notification-link">blog post</a>.
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar10-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Elaine Dreyfuss  </a> commented on your <a href="#" class="notification-link">blog post</a>.
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">2 hours ago</time></span>
                    </div>
                </li>

                <li>
                    <div class="author-thumb">
                        <img src="img/avatar53-sm.jpg" alt="author">
                    </div>
                    <div class="notification-event">
                        <a href="#" class="h6 notification-friend">Bruce Peterson </a> changed his <a href="#" class="notification-link">profile picture</a>.
                        <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">15 hours ago</time></span>
                    </div>
                </li>

            </ul>

            <!-- .. end W-Activity-Feed -->
        </div>




    </aside>

    <!-- ... end Right Sidebar -->
@endsection
