@extends('layouts.wk')


@section('content')

    <div class="ui-block">

        <div class="ui-block-content">
            <form method="POST" action="#">
                @csrf
                <h2 class="presentation-margin">Create Articles</h2>
                <div class="row">
                    <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" placeholder="">
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group label-floating is-empty">
                            <label class="control-label">Content</label>
                            <textarea class="form-control" type="text" placeholder=""></textarea>
                            <span class="material-input"></span>
                        </div>


                        <label class="control-label">Tags</label>








                        <h6>Switch On</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

                        <div class="togglebutton">
                            <label>
                                <input type="checkbox" checked=""><span class="toggle"></span>
                            </label>
                        </div>



                    </div>
                </div>


                <div class="row mb30">
                    <div class="col col-lg-12 col-12">
                        <h6>Upload Buttons</h6>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
                        <div class="file-upload">
                            <label for="upload" class="file-upload__label">Upload Button</label>
                            <input id="upload" class="file-upload__input" type="file" name="file-upload">
                        </div>
                    </div>

                </div>
                <button class="btn btn-green">Submit</button>
                <a href="#" class="btn btn-grey">Preview</a>

            </form>


        </div>
    </div>
@endsection


@section('modal_content')
    <!-- Window-popup Blog Post Popup -->

    <div class="modal fade" id="blog-post-popup" tabindex="-1" role="dialog" aria-labelledby="blog-post-popup" aria-hidden="true">

        <div class="modal-dialog window-popup blog-post-popup" role="document">

            <div class="modal-content">

                <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
                    <svg class="olymp-close-icon">
                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use>
                    </svg>
                </a>

                <div class="modal-body">
                    <article class="hentry post has-post-thumbnail thumb-full-width">

                        <div class="post__author author vcard inline-items">
                            <img src="img/author-page.jpg" alt="author">

                            <div class="author-date">
                                <a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> wrote a
                                <a href="#">blog post</a>
                                <div class="post__date">
                                    <time class="published" datetime="2017-03-24T18:18">
                                        12 hours ago
                                    </time>
                                </div>
                            </div>

                            <div class="more">
                                <svg class="olymp-three-dots-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                </svg>
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

                        <div class="post-thumb">
                            <img src="img/post__thumb8.jpg" alt="photo">
                            <h2 class="h1 post-title">A Day as a Photographer with Maxxine Flames</h2>
                            <div class="overlay"></div>
                        </div>


                        <p>Lorem ipsum dolor sit amet, consectadipisicing elit, sed do eiusmod por incidid ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud lorem exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <p>Duis en aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi hitecto beatae vitae dicta sunt explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
                            eos qui ratione voluptatem sequi nesciunt Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                            odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        </p>

                        <p>
                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                            numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
                            veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
                            Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                            vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                        </p>

                        <p>
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                        </p>

                        <div class="post-additional-info inline-items">

                            <a href="#" class="post-add-icon inline-items">
                                <svg class="olymp-heart-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                </svg>
                                <span>8</span>
                            </a>

                            <ul class="friends-harmonic">
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic1.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic9.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic7.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic4.jpg" alt="friend">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="img/friend-harmonic8.jpg" alt="friend">
                                    </a>
                                </li>
                            </ul>

                            <div class="names-people-likes">
                                <a href="#">Diana </a>, <a href="#">Nicholas</a> and
                                <br>15 more liked this
                            </div>


                            <div class="comments-shared">
                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-speech-balloon-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use>
                                    </svg>
                                    <span>16</span>
                                </a>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-share-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use>
                                    </svg>
                                    <span>8</span>
                                </a>
                            </div>


                        </div>

                        <div class="control-block-button post-control-button">

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-like-post-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-comments-post-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use>
                                </svg>
                            </a>

                            <a href="#" class="btn btn-control">
                                <svg class="olymp-share-icon">
                                    <use xlink:href="svg-icons/sprites/icons.svg#olymp-share-icon"></use>
                                </svg>
                            </a>

                        </div>

                    </article>

                    <div class="mCustomScrollbar" data-mcs-theme="dark">

                        <ul class="comments-list">
                            <li class="comment-item">
                                <div class="post__author author vcard inline-items">
                                    <img src="img/author-page.jpg" alt="author">

                                    <div class="author-date">
                                        <a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                38 mins ago
                                            </time>
                                        </div>
                                    </div>

                                    <a href="#" class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                        </svg>
                                    </a>

                                </div>

                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                    </svg>
                                    <span>3</span>
                                </a>
                                <a href="#" class="reply">Reply</a>
                            </li>
                            <li class="comment-item">
                                <div class="post__author author vcard inline-items">
                                    <img src="img/avatar1-sm.jpg" alt="author">

                                    <div class="author-date">
                                        <a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                1 hour ago
                                            </time>
                                        </div>
                                    </div>

                                    <a href="#" class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                        </svg>
                                    </a>

                                </div>

                                <p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
                                    quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                </p>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                    </svg>
                                    <span>8</span>
                                </a>
                                <a href="#" class="reply">Reply</a>
                            </li>
                            <li class="comment-item">
                                <div class="post__author author vcard inline-items">
                                    <img src="img/avatar10-sm.jpg" alt="author">

                                    <div class="author-date">
                                        <a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
                                        <div class="post__date">
                                            <time class="published" datetime="2017-03-24T18:18">
                                                5 mins ago
                                            </time>
                                        </div>
                                    </div>

                                    <a href="#" class="more">
                                        <svg class="olymp-three-dots-icon">
                                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use>
                                        </svg>
                                    </a>

                                </div>

                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

                                <a href="#" class="post-add-icon inline-items">
                                    <svg class="olymp-heart-icon">
                                        <use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use>
                                    </svg>
                                    <span>8</span>
                                </a>
                                <a href="#" class="reply">Reply</a>
                            </li>
                        </ul>

                    </div>

                    <form class="comment-form inline-items">

                        <div class="post__author author vcard inline-items">
                            <img src="img/author-page.jpg" alt="author">

                            <div class="form-group with-icon-right ">
                                <textarea class="form-control" placeholder=""></textarea>
                                <div class="add-options-message">
                                    <a href="#" class="options-message">
                                        <svg class="olymp-camera-icon">
                                            <use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ... end Window-popup Blog Post Popup -->
@endsection
