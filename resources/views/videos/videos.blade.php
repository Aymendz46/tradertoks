@extends('layout.master')

@section('page-style')
<link rel="stylesheet" href="./css/video.css">
@endsection

@section('page-title')
<title>Trader Toks | Course</title>
@endsection

@section('content')

@include('videos.navbar')

<!-------------------------->
        <!-----Main-------------->
        <main>
            <!-------------------------->
            <!-- Video player -->
            <div class="left">
                <h3>
                    Video title
                </h3>
                <div class="video">
                    Video
                    <img class="play-btn" src="images/components/play_btn.svg" alt="">
                </div>
            </div>
            <!-------------------------->
            <!-- Video list -->
            <div class="right">
                <!-------------------------->
                <div class="videos-section">
                    <div class="top">
                        <h5>
                            Course title
                        </h5>
                        <p>
                            level
                        </p>
                    </div>
                    <!-------------------------->
                    <div class="bottom">
                        <!-------------------------->
                        <ul class="videos-list">
                            <!-- Played -->
                            <li class="item">
                                <div class="check">
                                    <img src="images/components/played.svg" alt="">
                                </div>
                                <div class="detail">
                                    <div class="title">
                                        Lorem ipsum dolor sit
                                    </div>
                                    <div class="duration">
                                        <img src="images/components/duration.svg" alt="">
                                        <p>
                                            <span>4</span>
                                            <span>min</span>
                                        </p>
                                    </div>
                                    <div class="state completed">
                                        <span>
                                            Completed
                                        </span>
                                    </div>
                                </div>
                            </li>

                            <!-- Playing -->
                            <li class="item active">
                                <div class="check">
                                    <img src="images/components/playing.svg" alt="">
                                </div>
                                <div class="detail">
                                    <div class="title">
                                        Lorem ipsum dolor sit
                                    </div>
                                    <div class="duration">
                                        <img src="images/components/duration.svg" alt="">
                                        <p>
                                            <span>4</span>
                                            <span>min</span>
                                        </p>
                                    </div>
                                    <div class="state playing">
                                        <span>
                                            Playing
                                        </span>
                                    </div>
                                </div>
                            </li>

                            <!-- not Played -->
                            <li class="item">
                                <div class="check">
                                    <img src="images/components/not_played.svg" alt="">
                                </div>
                                <div class="detail fixed">
                                    <div class="title">
                                        Lorem ipsum dolor sit
                                    </div>
                                    <div class="duration">
                                        <img src="images/components/duration.svg" alt="">
                                        <p>
                                            <span>4</span>
                                            <span>min</span>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <!-- not Played -->
                            <li class="item">
                                <div class="check">
                                    <img src="images/components/not_played.svg" alt="">
                                </div>
                                <div class="detail fixed">
                                    <div class="title">
                                        Lorem ipsum dolor sit
                                    </div>
                                    <div class="duration">
                                        <img src="images/components/duration.svg" alt="">
                                        <p>
                                            <span>4</span>
                                            <span>min</span>
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <!-- not Played -->
                            <li class="item">
                                <div class="check">
                                    <img src="images/components/not_played.svg" alt="">
                                </div>
                                <div class="detail fixed">
                                    <div class="title">
                                        Lorem ipsum dolor sit
                                    </div>
                                    <div class="duration">
                                        <img src="images/components/duration.svg" alt="">
                                        <p>
                                            <span>4</span>
                                            <span>min</span>
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>

            <!-------------------------->
            <!-- DESCRIPTION -->
            <div class="description">
                <ul class="tabs">
                    <li class="tab active" id="overview"><span>Overview</span></li>
                    <li class="tab" id="resources"><span>Resources</span></li>
                    <li class="tab" id="qna"><span>Q n A</span></li>
                </ul>

                <!-------------------------->
                <!-- Overview -->
                <div class="overview show">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque facere ab, similique voluptate assumenda culpa debitis ut, rem libero, laborum perferendis sapiente maxime minus. Quia ea eligendi eveniet ducimus aliquam?</p>
                </div>
                <!-------------------------->
                <!-- Q n A -->
                <div class="qna">
                    <!-- Comment -->
                    <div class="comment-container">
                        <div class="comment-header">
                            <div class="user">
                                <img src="images/components/user_pic.svg" alt="">
                            </div>
                            <div class="username">
                                <span>username</span>
                                <span class="date">2 days ago</span>
                            </div>
                            <div class="vote">
                                <div class="up-vote">
                                    <img src="images/components/arrow_up_active.svg" alt="">
                                </div>
                                <div class="nb-votes">
                                    2
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <p class="text-comment">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias eligendi dicta ea doloribus, deleniti ducimus a culpa numquam velit impedit laborum. Eos magni quasi accusamus error voluptatem vitae, cumque amet?</p>
                            <div class="replies">
                                <span>2 </span>
                                <span> replies</span>
                            </div>
                        </div>
                    </div>

                    <div class="comment-container">
                        <div class="comment-header">
                            <div class="user">
                                <img src="images/components/user_pic.svg" alt="">
                            </div>
                            <div class="username">
                                <span>username</span>
                                <span class="date">2 days ago</span>
                            </div>
                            <div class="vote">
                                <div class="up-vote">
                                    <img src="images/components/arrow_up.svg" alt="">
                                </div>
                                <div class="nb-votes">
                                    0
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <p class="text-comment">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias eligendi dicta ea doloribus, deleniti ducimus a culpa numquam velit impedit laborum. Eos magni quasi accusamus error voluptatem vitae, cumque amet?</p>
                            <div class="replies">
                                <span>2 </span>
                                <span> replies</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------------------------->
                <!-- Notes -->
                <div class="notes">
                </div>
                <!-------------------------->
                <!-- Resources -->
                <div class="resources">
                    <ul class="files">
                        <li class="file notation">
                            <span>Filename</span>
                            <span>size</span>
                        </li>
                        <li class="file">
                            <span>starterpack.rar</span>
                            <span>4.2 mb</span>
                        </li>
                        <li class="file">
                            <span>speech.txt</span>
                            <span>0.2 mb</span>
                        </li>
                        <li class="file">
                            <span>image.png</span>
                            <span>1.2 mb</span>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
        
@include('videos.footer')

@endsection