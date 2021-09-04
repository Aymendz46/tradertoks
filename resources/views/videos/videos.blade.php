@extends('layout.master')

@section('page-style')
<link rel="stylesheet" href="./css/video.css">
@endsection

@section('page-script')
<!--<script src="./js/loading(fast).js"></script>-->
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('page-title')
<title>Trader Toks | Course</title>
@endsection

@section('content')


<!-------------------------->
        <!-----Main-------------->
        <main>
            <!-------------------------->
            <!-- Video player -->
            <div class="left">
                <h3>
                    The MW Academy - Ep 2
                </h3>

                <div class="video">
                    <div style="height: 100%; position:relative;"><iframe src="https://player.vimeo.com/video/582028664?h=eece6d507b&color=44A36F&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                    <!--img class="play-btn" src="images/components/play_btn.svg" alt=""-->
                </div>
            </div>

            <!-------------------------->
            <!-- Video list -->
            <div class="right">
                <!-------------------------->
                <div class="videos-section">
                    <div class="top">
                        <h5>
                            The MW Academy
                        </h5>
                        <p>
                            Cheems - Beginner
                        </p>
                    </div>
                    <!-------------------------->
                    <div class="bottom">
                        <!-------------------------->
                        <ul class="videos-list">
                            <?php
                                $user = Auth()->user();
                            ?>   
                            @foreach ($videos as $video)
                            <?php
                                $watched = $user->watched->where('id', $video->id)->count();
                            ?>
                            <!-- not Played -->
                            <li class="item" data-status="{{ $watched == 0 ? 'notPlayed' : 'played' }}" data-order="{{ $loop->index }}">
                                <input type="hidden" class="video-link" value="{{ $video->video_link }}">
                                <input type="hidden" class="video-id" value="{{ $video->id }}">
                                <div class="check">
                                    <img class="state-icon" src="images/components/{{ $watched == 0 ? 'not_played' : 'played' }}.svg" alt="">
                                </div>
                                <div class="detail fixed">
                                    <div class="title">
                                        {{ $video->title }} 
                                    </div>
                                    <div class="duration">
                                        <img src="images/components/duration.svg" alt="">
                                        <p>
                                            <span>4</span>
                                            <span>min</span>
                                        </p>
                                    </div>
                                    @if($watched != 0)
                                    <div class="state completed">
                                        <span>viewed</span>
                                    </div>
                                    @else
                                    <div class="state">
                                    </div>
                                    @endif
                                    
                                </div>
                            </li>
                            @endforeach
                            <script>
                                $(".item").click(function() {
                                    //check if video is playing
                                    if(!$(this).hasClass('active')) {

                                        //sign on the item as played
                                        $(this).data("status", "played");
                                        $(this).attr("data-status", "played");

                                        //get the link and inject it
                                        var link = $(this).find(".video-link").val();
                                        $("iframe").attr("src", link);

                                        //change style to playing
                                        $(this).addClass('active');

                                        //change state-icon img to playing
                                        $(this).find(".state-icon").attr("src", 'images/components/playing.svg');

                                        //change state-btn to playing
                                        $(this).find(".state").addClass('playing');
                                        $(this).find(".state").html('<span>playing</span>');
                                    }

                                    //make the visited completed
                                    itemRefresh($(this).attr('data-order'));
                                    //save what student have seen, they must watch the course more then half 
                                    sendAjax($(this).find('.video-id').val());

                                });

                                function itemRefresh(active) {
                                    $('.item').each(function() {
                                        if($(this).attr('data-order') != active) {
                                            if($(this).attr('data-status') == 'played') {
                                                $(this).removeClass('active');
                                                $(this).find(".state").removeClass('playing');
                                                $(this).find(".state").addClass('completed');
                                                $(this).find(".state").html('<span>viewed</span>')
                                            }
                                        }
                                    });
                                }

                                function sendAjax(number) {
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });

                                    jQuery.ajax({
                                        url: "{{ route('watched') }}",
                                        method: 'post',
                                        data: {
                                            video_id: number,
                                        },
                                        success: function(result){
                                            console.log(result);
                                        }
                                    });
                                }
                            </script>
                            <!-- Playing -->
                            <li class="item active">
                                <div class="check">
                                    <img src="images/components/playing.svg" alt="">
                                </div>
                                <div class="detail">
                                    <div class="title">
                                        The MW Academy - Ep 2
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
                                        The MW Academy - Ep 3
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
                                        The MW Academy - Ep 4
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
                                        The MW Academy - Ep 5
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
                    <p>Lorem ipsum amet consectetur adipisicing elit. Eaque facere ab, similique voluptate assumenda culpa debitis ut, rem libero, laborum perferendis sapiente maxime minus. Quia ea eligendi eveniet ducimus aliquam?</p>
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
@endsection