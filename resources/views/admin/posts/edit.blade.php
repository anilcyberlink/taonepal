@extends('admin.master')
@section('title', Request::segment(2))
@section('breadcrumb')
<link href="{{ asset('themes-assets/css/all.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <a href="{{ route('admin.post.index', Request::segment(2)) }}" class="btn btn-primary btn-sm">List</a>
    <a href="{{ route('admin.post.index', Request::segment(2)) }}/create" class="btn btn-primary btn-sm">Create</a>
@endsection
@section('content')
    <form class="form-horizontal" role="form" action="{{ url('admin/' . Request::segment(2) . '/' . $data->id) }}"
        method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT" />
        <input type="hidden" name="post_type" value="{{ Request::segment(2) }}" />
        <input type="hidden" name="post_date" value="<?= date('Y-m-d h:i:s') ?>" />
        <div class="col-md-9">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit Post</span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="post_title" name="post_title" class="form-control"
                                    value="{{ $data->post_title }}" />
                                <input type="hidden" id="uri" name="uri" class="form-control"
                                    value="{{ $data->uri }}" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Sub Title</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="" name="sub_title" class="form-control"
                                    value="{{ $data->sub_title }}" />
                            </div>
                        </div>
                    </div>
                    @if (Request::segment(2) == 'find-a-doctor')
                        <div class="form-group">
                            <label for="inputStandard" class="col-lg-2 control-label">Facebook Link</label>
                            <div class="col-lg-9">
                                <div class="bs-component">
                                    <input type="text" id="" name="uid" class="form-control"
                                        value="{{ $data->uid }}" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="textArea3"> Twitter Link </label>
                            <div class="col-lg-9">
                                <div class="bs-component">
                                    <input type="text" class="form-control" id="" name="associated_title"
                                        value="{{ $data->associated_title }}" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="textArea3"> Contact </label>
                            <div class="col-lg-9">
                                <div class="bs-component">
                                    <input type="text" class="form-control" id="" name="post_tags"
                                        value="{{ $data->post_tags }}" />
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="inputSelect" class="col-lg-2 control-label"> Category </label>
                        <div class="col-lg-9">
                            <div class="bs-component">

                                <select name="category" class="form-control">
                                    <option value="0"> Select Category </option>
                                    @if ($category)
                                        @foreach ($category as $row)
                                            <option value="{{ $row->id }}"
                                                {{ $row->id == $data->post_category ? 'selected' : '' }}>
                                                {{ $row->category }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($parent_post->count() > 0)
                        <div class="form-group">
                            <label for="inputSelect" class="col-lg-2 control-label">Select Parent</label>
                            <div class="col-lg-9">
                                <div class="bs-component">
                                    <select name="post_parent" class="form-control">
                                        <option value="0"> Choose Parent </option>
                                        @foreach ($parent_post as $row)
                                            @if ($row->id == $data->id)
                                                @continue
                                            @endif

                                            <option value="{{ $row->id }}"
                                                {{ $row->id == $data->post_parent ? 'selected' : '' }}>
                                                {{ $row->post_title }}</option>
                                            @if (has_child_post($row->id))
                                                @foreach (has_child_post($row->id) as $child_row)
                                                    <option value="{{ $child_row->id }}"
                                                        {{ $child_row->id == $data->post_parent ? 'selected' : '' }}> —>
                                                        {{ $child_row->post_title }}</option>
                                                    @if (has_child_post($child_row->id))
                                                        @foreach (has_child_post($child_row->id) as $grand_child_row)
                                                            <option value="{{ $grand_child_row->id }}"
                                                                {{ $grand_child_row->id == $data->post_parent ? 'selected' : '' }}>
                                                                — —> {{ $grand_child_row->post_title }}</option>
                                                            @if (has_child_post($grand_child_row->id))
                                                                @foreach (has_child_post($grand_child_row->id) as $grand_child_row_x)
                                                                    <option value="{{ $grand_child_row_x->id }}"
                                                                        {{ $grand_child_row_x->id == $data->post_parent ? 'selected' : '' }}>
                                                                        — — —> {{ $grand_child_row_x->post_title }}
                                                                    </option>
                                                                @endforeach
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach
                                    </select>
                                    <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt;
                                        &gt;</div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="textArea3"> Brief </label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <textarea class="form-control my-editor" id="" name="post_excerpt" rows="3"> {{ $data->post_excerpt }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="textArea2">Content</label>
                        <div class="col-lg-10">
                            <div class="bs-component">
                                <textarea class="form-control my-editor" id="editor2" name="post_content" rows="30"> {{ $data->post_content }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label">Meta Key</label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="" name="meta_keyword" class="form-control"
                                    value="{{ $data->meta_keyword }}" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label" for="textArea3"> Meta Description </label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <textarea class="form-control" id="" name="meta_description" rows="3">{{ $data->meta_description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-2 control-label"> External Link </label>
                        <div class="col-lg-9">
                            <div class="bs-component">
                                <input type="text" id="" name="external_link" class="form-control"
                                    value="{{ $data->external_link }}" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="admin-form">
                <div class="sid_ mb10">
                    <div class="hd_show_con">
                        <div class="publice_edi">
                            Status: <span class="text-primary">{{ $data->status == 1 ? 'Active' : 'InActive' }}</span>
                        </div>
                    </div>
                    <footer>
                        <div id="publishing-action">
                            <input type="submit" class="btn btn-primary btn-sm" value="Update" />
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <div class="clearfix"></div>
                </div>

                <div class="sid_ mb10">
                    <label class="field select">
                        <select id="template" name="template">
                            @foreach ($templates as $key => $template)
                                <option value="{{ $key }}" {{ $template == $data->template ? 'selected' : '' }}>
                                    {{ ucfirst($template) }} </option>
                            @endforeach
                        </select>
                        <i class="arrow"></i>
                    </label>
                </div>
                <!--
                      <div class="sid_ mb10">
                        <label class="field select">
                          <select id="template_child" name="template_child">
                           @foreach ($templates_child as $key => $template_child)
    <option value="{{ $key }}" {{ $template_child == $data->template_child ? 'selected' : '' }} >{{ ucfirst($template_child) }} </option>
    @endforeach
                         </select>
                         <i class="arrow"></i>
                       </label>
                     </div> -->

                <div class="sid_ mb10">
                    <label class="field text"> Post Order
                        <input type="number" id="" name="post_order" class="form-control"
                            placeholder="Post Order" value="{{ $data->post_order }}" />
                    </label>
                </div>

                <div class="sid_ mb10">
                    <label class="field text"> Homepage Order
                        <input type="number" id="" name="home_order" class="form-control"
                            placeholder="Insert Order Here" value="{{ $data->home_order }}" />
                    </label>
                </div>

                <div class="sid_ mb10">
                    <div class="hd_show_con">
                        <input type="checkbox" name="show_in_home" value="{{ $data->show_in_home }}"
                            {{ $data->show_in_home == 1 ? 'checked' : '' }} />
                        Show in home <br>
                    </div>
                </div>
                <div class="sid_ mb10">
                    <h4> Icon </h4>
                    <label class="field select">
                        <select id="template" name="price" style="font-family: 'FontAwesome';">
                            @if ($data->price != null)
                                <option value="{{ $data->price }}" selected>{{ $data->price }}</option>
                            @else
                                <option value="" selected>Choose Icon</option>
                            @endif
                            <option value="coins">&#xf1c0; COINS </option>
                            <option value="chart-bar">&#xf080; BAR </option>
                            <option value="chart-line">&#xf201; LINE </option>
                            <option value="newspaper">&#xf1ea; NEWSPAPER </option>
                            <option value="user-plus">&#xf007; USER PLUS </option>
                            <option value="briefcase">&#xf0b1; BRIEFCASE </option>
                            <option value="lightbulb">&#xf0eb; LIGHTBULB </option>
                            <option value="glasses">&#xf000; GLASSESS </option>
                            <option value="clock">&#xf017; CLOCK </option>
                            <option value="bullseye">&#xf140; BULLSEYE </option>
                            <option value="wallet">&#xf07b; WALLET </option>
                            <option value="star"> &#xf005; STAR</option>
                            <option value="handshake"> HANDSHAKE </option>
                            <option value="fingerprint">FINGERPRINT </option>

                            <option value="fill-drip">fill-drip</option>
                            <option value="arrows-to-circle">arrows-to-circle</option>
                            <option value="circle-chevron-right">circle-chevron-right</option>
                            <option value="chevron-circle-right">chevron-circle-right</option>
                            <option value="at">at</option>
                            <option value="trash-can">trash-can</option>
                            <option value="trash-alt">trash-alt</option>
                            <option value="text-height">text-height</option>
                            <option value="user-xmark">user-xmark</option>
                            <option value="user-times">user-times</option>
                            <option value="stethoscope">stethoscope</option>
                            <option value="message">message</option>
                            <option value="comment-alt">comment-alt</option>
                            <option value="info">info</option>
                            <option value="down-left-and-up-right-to-center">down-left-and-up-right-to-center</option>
                            <option value="compress-alt">compress-alt</option>
                            <option value="explosion">explosion</option>
                            <option value="file-lines">file-lines</option>
                            <option value="file-alt">file-alt</option>
                            <option value="file-text">file-text</option>
                            <option value="wave-square">wave-square</option>
                            <option value="ring">ring</option>
                            <option value="building-un">building-un</option>
                            <option value="dice-three">dice-three</option>
                            <option value="calendar-days">calendar-days</option>
                            <option value="calendar-alt">calendar-alt</option>
                            <option value="anchor-circle-check">anchor-circle-check</option>
                            <option value="building-circle-arrow-right">building-circle-arrow-right</option>
                            <option value="volleyball">volleyball</option>
                            <option value="volleyball-ball">volleyball-ball</option>
                            <option value="arrows-up-to-line">arrows-up-to-line</option>
                            <option value="sort-down">sort-down</option>
                            <option value="sort-desc">sort-desc</option>
                            <option value="circle-minus">circle-minus</option>
                            <option value="minus-circle">minus-circle</option>
                            <option value="door-open">door-open</option>
                            <option value="right-from-bracket">right-from-bracket</option>
                            <option value="sign-out-alt">sign-out-alt</option>
                            <option value="atom">atom</option>
                            <option value="soap">soap</option>
                            <option value="icons">icons</option>
                            <option value="heart-music-camera-bolt">heart-music-camera-bolt</option>
                            <option value="microphone-lines-slash">microphone-lines-slash</option>
                            <option value="microphone-alt-slash">microphone-alt-slash</option>
                            <option value="bridge-circle-check">bridge-circle-check</option>
                            <option value="pump-medical">pump-medical</option>
                            <option value="fingerprint">fingerprint</option>
                            <option value="hand-point-right">hand-point-right</option>
                            <option value="magnifying-glass-location">magnifying-glass-location</option>
                            <option value="search-location">search-location</option>
                            <option value="forward-step">forward-step</option>
                            <option value="step-forward">step-forward</option>
                            <option value="face-smile-beam">face-smile-beam</option>
                            <option value="smile-beam">smile-beam</option>
                            <option value="flag-checkered">flag-checkered</option>
                            <option value="football">football</option>
                            <option value="football-ball">football-ball</option>
                            <option value="school-circle-exclamation">school-circle-exclamation</option>
                            <option value="crop">crop</option>
                            <option value="angles-down">angles-down</option>
                            <option value="angle-double-down">angle-double-down</option>
                            <option value="users-rectangle">users-rectangle</option>
                            <option value="people-roof">people-roof</option>
                            <option value="people-line">people-line</option>
                            <option value="beer-mug-empty">beer-mug-empty</option>
                            <option value="beer">beer</option>
                            <option value="diagram-predecessor">diagram-predecessor</option>
                            <option value="arrow-up-long">arrow-up-long</option>
                            <option value="long-arrow-up">long-arrow-up</option>
                            <option value="fire-flame-simple">fire-flame-simple</option>
                            <option value="burn">burn</option>
                            <option value="person">person</option>
                            <option value="male">male</option>
                            <option value="laptop">laptop</option>
                            <option value="file-csv">file-csv</option>
                            <option value="menorah">menorah</option>
                            <option value="truck-plane">truck-plane</option>
                            <option value="record-vinyl">record-vinyl</option>
                            <option value="face-grin-stars">face-grin-stars</option>
                            <option value="grin-stars">grin-stars</option>
                            <option value="bong">bong</option>
                            <option value="spaghetti-monster-flying">spaghetti-monster-flying</option>
                            <option value="pastafarianism">pastafarianism</option>
                            <option value="arrow-down-up-across-line">arrow-down-up-across-line</option>
                            <option value="spoon">spoon</option>
                            <option value="utensil-spoon">utensil-spoon</option>
                            <option value="jar-wheat">jar-wheat</option>
                            <option value="envelopes-bulk">envelopes-bulk</option>
                            <option value="mail-bulk">mail-bulk</option>
                            <option value="file-circle-exclamation">file-circle-exclamation</option>
                            <option value="circle-h">circle-h</option>
                            <option value="hospital-symbol">hospital-symbol</option>
                            <option value="pager">pager</option>
                            <option value="address-book">address-book</option>
                            <option value="contact-book">contact-book</option>
                            <option value="strikethrough">strikethrough</option>
                            <option value="k">k</option>
                            <option value="landmark-flag">landmark-flag</option>
                            <option value="pencil">pencil</option>
                            <option value="pencil-alt">pencil-alt</option>
                            <option value="backward">backward</option>
                            <option value="caret-right">caret-right</option>
                            <option value="comments">comments</option>
                            <option value="paste">paste</option>
                            <option value="file-clipboard">file-clipboard</option>
                            <option value="code-pull-request">code-pull-request</option>
                            <option value="clipboard-list">clipboard-list</option>
                            <option value="truck-ramp-box">truck-ramp-box</option>
                            <option value="truck-loading">truck-loading</option>
                            <option value="user-check">user-check</option>
                            <option value="vial-virus">vial-virus</option>
                            <option value="sheet-plastic">sheet-plastic</option>
                            <option value="blog">blog</option>
                            <option value="user-ninja">user-ninja</option>
                            <option value="person-arrow-up-from-line">person-arrow-up-from-line</option>
                            <option value="scroll-torah">scroll-torah</option>
                            <option value="torah">torah</option>
                            <option value="broom-ball">broom-ball</option>
                            <option value="quidditch">quidditch</option>
                            <option value="quidditch-broom-ball">quidditch-broom-ball</option>
                            <option value="toggle-off">toggle-off</option>
                            <option value="box-archive">box-archive</option>
                            <option value="archive">archive</option>
                            <option value="person-drowning">person-drowning</option>
                            <option value="arrow-down-9-1">arrow-down-9-1</option>
                            <option value="sort-numeric-desc">sort-numeric-desc</option>
                            <option value="sort-numeric-down-alt">sort-numeric-down-alt</option>
                            <option value="face-grin-tongue-squint">face-grin-tongue-squint</option>
                            <option value="grin-tongue-squint">grin-tongue-squint</option>
                            <option value="spray-can">spray-can</option>
                            <option value="truck-monster">truck-monster</option>
                            <option value="w">w</option>
                            <option value="earth-africa">earth-africa</option>
                            <option value="globe-africa">globe-africa</option>
                            <option value="rainbow">rainbow</option>
                            <option value="circle-notch">circle-notch</option>
                            <option value="tablet-screen-button">tablet-screen-button</option>
                            <option value="tablet-alt">tablet-alt</option>
                            <option value="paw">paw</option>
                            <option value="cloud">cloud</option>
                            <option value="trowel-bricks">trowel-bricks</option>
                            <option value="face-flushed">face-flushed</option>
                            <option value="flushed">flushed</option>
                            <option value="hospital-user">hospital-user</option>
                            <option value="tent-arrow-left-right">tent-arrow-left-right</option>
                            <option value="gavel">gavel</option>
                            <option value="legal">legal</option>
                            <option value="binoculars">binoculars</option>
                            <option value="microphone-slash">microphone-slash</option>
                            <option value="box-tissue">box-tissue</option>
                            <option value="motorcycle">motorcycle</option>
                            <option value="bell-concierge">bell-concierge</option>
                            <option value="concierge-bell">concierge-bell</option>
                            <option value="pen-ruler">pen-ruler</option>
                            <option value="pencil-ruler">pencil-ruler</option>
                            <option value="people-arrows">people-arrows</option>
                            <option value="people-arrows-left-right">people-arrows-left-right</option>
                            <option value="mars-and-venus-burst">mars-and-venus-burst</option>
                            <option value="square-caret-right">square-caret-right</option>
                            <option value="caret-square-right">caret-square-right</option>
                            <option value="scissors">scissors</option>
                            <option value="cut">cut</option>
                            <option value="sun-plant-wilt">sun-plant-wilt</option>
                            <option value="toilets-portable">toilets-portable</option>
                            <option value="hockey-puck">hockey-puck</option>
                            <option value="table">table</option>
                            <option value="magnifying-glass-arrow-right">magnifying-glass-arrow-right</option>
                            <option value="tachograph-digital">tachograph-digital</option>
                            <option value="digital-tachograph">digital-tachograph</option>
                            <option value="users-slash">users-slash</option>
                            <option value="clover">clover</option>
                            <option value="reply">reply</option>
                            <option value="mail-reply">mail-reply</option>
                            <option value="star-and-crescent">star-and-crescent</option>
                            <option value="house-fire">house-fire</option>
                            <option value="square-minus">square-minus</option>
                            <option value="minus-square">minus-square</option>
                            <option value="helicopter">helicopter</option>
                            <option value="compass">compass</option>
                            <option value="square-caret-down">square-caret-down</option>
                            <option value="caret-square-down">caret-square-down</option>
                            <option value="file-circle-question">file-circle-question</option>
                            <option value="laptop-code">laptop-code</option>
                            <option value="swatchbook">swatchbook</option>
                            <option value="prescription-bottle">prescription-bottle</option>
                            <option value="bars">bars</option>
                            <option value="navicon">navicon</option>
                            <option value="people-group">people-group</option>
                            <option value="hourglass-end">hourglass-end</option>
                            <option value="hourglass-3">hourglass-3</option>
                            <option value="heart-crack">heart-crack</option>
                            <option value="heart-broken">heart-broken</option>
                            <option value="square-up-right">square-up-right</option>
                            <option value="external-link-square-alt">external-link-square-alt</option>
                            <option value="face-kiss-beam">face-kiss-beam</option>
                            <option value="kiss-beam">kiss-beam</option>
                            <option value="film">film</option>
                            <option value="ruler-horizontal">ruler-horizontal</option>
                            <option value="people-robbery">people-robbery</option>
                            <option value="lightbulb">lightbulb</option>
                            <option value="caret-left">caret-left</option>
                            <option value="circle-exclamation">circle-exclamation</option>
                            <option value="exclamation-circle">exclamation-circle</option>
                            <option value="school-circle-xmark">school-circle-xmark</option>
                            <option value="arrow-right-from-bracket">arrow-right-from-bracket</option>
                            <option value="sign-out">sign-out</option>
                            <option value="circle-chevron-down">circle-chevron-down</option>
                            <option value="chevron-circle-down">chevron-circle-down</option>
                            <option value="unlock-keyhole">unlock-keyhole</option>
                            <option value="unlock-alt">unlock-alt</option>
                            <option value="cloud-showers-heavy">cloud-showers-heavy</option>
                            <option value="headphones-simple">headphones-simple</option>
                            <option value="headphones-alt">headphones-alt</option>
                            <option value="sitemap">sitemap</option>
                            <option value="circle-dollar-to-slot">circle-dollar-to-slot</option>
                            <option value="donate">donate</option>
                            <option value="memory">memory</option>
                            <option value="road-spikes">road-spikes</option>
                            <option value="fire-burner">fire-burner</option>
                            <option value="flag">flag</option>
                            <option value="hanukiah">hanukiah</option>
                            <option value="feather">feather</option>
                            <option value="volume-low">volume-low</option>
                            <option value="volume-down">volume-down</option>
                            <option value="comment-slash">comment-slash</option>
                            <option value="cloud-sun-rain">cloud-sun-rain</option>
                            <option value="compress">compress</option>
                            <option value="wheat-awn">wheat-awn</option>
                            <option value="wheat-alt">wheat-alt</option>
                            <option value="ankh">ankh</option>
                            <option value="hands-holding-child">hands-holding-child</option>
                            <option value="asterisk">asterisk</option>
                            <option value="square-check">square-check</option>
                            <option value="check-square">check-square</option>
                            <option value="peseta-sign">peseta-sign</option>
                            <option value="heading">heading</option>
                            <option value="header">header</option>
                            <option value="ghost">ghost</option>
                            <option value="list">list</option>
                            <option value="list-squares">list-squares</option>
                            <option value="square-phone-flip">square-phone-flip</option>
                            <option value="phone-square-alt">phone-square-alt</option>
                            <option value="cart-plus">cart-plus</option>
                            <option value="gamepad">gamepad</option>
                            <option value="circle-dot">circle-dot</option>
                            <option value="dot-circle">dot-circle</option>
                            <option value="face-dizzy">face-dizzy</option>
                            <option value="dizzy">dizzy</option>
                            <option value="egg">egg</option>
                            <option value="house-medical-circle-xmark">house-medical-circle-xmark</option>
                            <option value="campground">campground</option>
                            <option value="folder-plus">folder-plus</option>
                            <option value="futbol">futbol</option>
                            <option value="futbol-ball">futbol-ball</option>
                            <option value="soccer-ball">soccer-ball</option>
                            <option value="paintbrush">paintbrush</option>
                            <option value="paint-brush">paint-brush</option>
                            <option value="lock">lock</option>
                            <option value="gas-pump">gas-pump</option>
                            <option value="hot-tub-person">hot-tub-person</option>
                            <option value="hot-tub">hot-tub</option>
                            <option value="map-location">map-location</option>
                            <option value="map-marked">map-marked</option>
                            <option value="house-flood-water">house-flood-water</option>
                            <option value="tree">tree</option>
                            <option value="bridge-lock">bridge-lock</option>
                            <option value="sack-dollar">sack-dollar</option>
                            <option value="pen-to-square">pen-to-square</option>
                            <option value="edit">edit</option>
                            <option value="car-side">car-side</option>
                            <option value="share-nodes">share-nodes</option>
                            <option value="share-alt">share-alt</option>
                            <option value="heart-circle-minus">heart-circle-minus</option>
                            <option value="hourglass-half">hourglass-half</option>
                            <option value="hourglass-2">hourglass-2</option>
                            <option value="microscope">microscope</option>
                            <option value="sink">sink</option>
                            <option value="bag-shopping">bag-shopping</option>
                            <option value="shopping-bag">shopping-bag</option>
                            <option value="arrow-down-z-a">arrow-down-z-a</option>
                            <option value="sort-alpha-desc">sort-alpha-desc</option>
                            <option value="sort-alpha-down-alt">sort-alpha-down-alt</option>
                            <option value="mitten">mitten</option>
                            <option value="person-rays">person-rays</option>
                            <option value="users">users</option>
                            <option value="eye-slash">eye-slash</option>
                            <option value="flask-vial">flask-vial</option>
                            <option value="hand">hand</option>
                            <option value="hand-paper">hand-paper</option>
                            <option value="om">om</option>
                            <option value="worm">worm</option>
                            <option value="house-circle-xmark">house-circle-xmark</option>
                            <option value="plug">plug</option>
                            <option value="chevron-up">chevron-up</option>
                            <option value="hand-spock">hand-spock</option>
                            <option value="stopwatch">stopwatch</option>
                            <option value="face-kiss">face-kiss</option>
                            <option value="kiss">kiss</option>
                            <option value="bridge-circle-xmark">bridge-circle-xmark</option>
                            <option value="face-grin-tongue">face-grin-tongue</option>
                            <option value="grin-tongue">grin-tongue</option>
                            <option value="chess-bishop">chess-bishop</option>
                            <option value="face-grin-wink">face-grin-wink</option>
                            <option value="grin-wink">grin-wink</option>
                            <option value="ear-deaf">ear-deaf</option>
                            <option value="deaf">deaf</option>
                            <option value="deafness">deafness</option>
                            <option value="hard-of-hearing">hard-of-hearing</option>
                            <option value="road-circle-check">road-circle-check</option>
                            <option value="dice-five">dice-five</option>
                            <option value="square-rss">square-rss</option>
                            <option value="rss-square">rss-square</option>
                            <option value="land-mine-on">land-mine-on</option>
                            <option value="i-cursor">i-cursor</option>
                            <option value="stamp">stamp</option>
                            <option value="stairs">stairs</option>
                            <option value="i">i</option>
                            <option value="hryvnia-sign">hryvnia-sign</option>
                            <option value="hryvnia">hryvnia</option>
                            <option value="pills">pills</option>
                            <option value="face-grin-wide">face-grin-wide</option>
                            <option value="grin-alt">grin-alt</option>
                            <option value="tooth">tooth</option>
                            <option value="v">v</option>
                            <option value="bangladeshi-taka-sign">bangladeshi-taka-sign</option>
                            <option value="bicycle">bicycle</option>
                            <option value="staff-snake">staff-snake</option>
                            <option value="rod-asclepius">rod-asclepius</option>
                            <option value="rod-snake">rod-snake</option>
                            <option value="staff-aesculapius">staff-aesculapius</option>
                            <option value="head-side-cough-slash">head-side-cough-slash</option>
                            <option value="truck-medical">truck-medical</option>
                            <option value="ambulance">ambulance</option>
                            <option value="wheat-awn-circle-exclamation">wheat-awn-circle-exclamation</option>
                            <option value="snowman">snowman</option>
                            <option value="mortar-pestle">mortar-pestle</option>
                            <option value="road-barrier">road-barrier</option>
                            <option value="school">school</option>
                            <option value="igloo">igloo</option>
                            <option value="joint">joint</option>
                            <option value="angle-right">angle-right</option>
                            <option value="horse">horse</option>
                            <option value="q">q</option>
                            <option value="g">g</option>
                            <option value="notes-medical">notes-medical</option>
                            <option value="temperature-half">temperature-half</option>
                            <option value="temperature-2">temperature-2</option>
                            <option value="thermometer-2">thermometer-2</option>
                            <option value="thermometer-half">thermometer-half</option>
                            <option value="dong-sign">dong-sign</option>
                            <option value="capsules">capsules</option>
                            <option value="poo-storm">poo-storm</option>
                            <option value="poo-bolt">poo-bolt</option>
                            <option value="face-frown-open">face-frown-open</option>
                            <option value="frown-open">frown-open</option>
                            <option value="hand-point-up">hand-point-up</option>
                            <option value="money-bill">money-bill</option>
                            <option value="bookmark">bookmark</option>
                            <option value="align-justify">align-justify</option>
                            <option value="umbrella-beach">umbrella-beach</option>
                            <option value="helmet-un">helmet-un</option>
                            <option value="bullseye">bullseye</option>
                            <option value="bacon">bacon</option>
                            <option value="hand-point-down">hand-point-down</option>
                            <option value="arrow-up-from-bracket">arrow-up-from-bracket</option>
                            <option value="folder">folder</option>
                            <option value="folder-blank">folder-blank</option>
                            <option value="file-waveform">file-waveform</option>
                            <option value="file-medical-alt">file-medical-alt</option>
                            <option value="radiation">radiation</option>
                            <option value="chart-simple">chart-simple</option>
                            <option value="mars-stroke">mars-stroke</option>
                            <option value="vial">vial</option>
                            <option value="gauge">gauge</option>
                            <option value="dashboard">dashboard</option>
                            <option value="gauge-med">gauge-med</option>
                            <option value="tachometer-alt-average">tachometer-alt-average</option>
                            <option value="wand-magic-sparkles">wand-magic-sparkles</option>
                            <option value="magic-wand-sparkles">magic-wand-sparkles</option>
                            <option value="e">e</option>
                            <option value="pen-clip">pen-clip</option>
                            <option value="pen-alt">pen-alt</option>
                            <option value="bridge-circle-exclamation">bridge-circle-exclamation</option>
                            <option value="user">user</option>
                            <option value="school-circle-check">school-circle-check</option>
                            <option value="dumpster">dumpster</option>
                            <option value="van-shuttle">van-shuttle</option>
                            <option value="shuttle-van">shuttle-van</option>
                            <option value="building-user">building-user</option>
                            <option value="square-caret-left">square-caret-left</option>
                            <option value="caret-square-left">caret-square-left</option>
                            <option value="highlighter">highlighter</option>
                            <option value="key">key</option>
                            <option value="bullhorn">bullhorn</option>
                            <option value="globe">globe</option>
                            <option value="synagogue">synagogue</option>
                            <option value="person-half-dress">person-half-dress</option>
                            <option value="road-bridge">road-bridge</option>
                            <option value="location-arrow">location-arrow</option>
                            <option value="c">c</option>
                            <option value="tablet-button">tablet-button</option>
                            <option value="building-lock">building-lock</option>
                            <option value="pizza-slice">pizza-slice</option>
                            <option value="money-bill-wave">money-bill-wave</option>
                            <option value="chart-area">chart-area</option>
                            <option value="area-chart">area-chart</option>
                            <option value="house-flag">house-flag</option>
                            <option value="person-circle-minus">person-circle-minus</option>
                            <option value="ban">ban</option>
                            <option value="cancel">cancel</option>
                            <option value="camera-rotate">camera-rotate</option>
                            <option value="spray-can-sparkles">spray-can-sparkles</option>
                            <option value="air-freshener">air-freshener</option>
                            <option value="star">star</option>
                            <option value="repeat">repeat</option>
                            <option value="cross">cross</option>
                            <option value="box">box</option>
                            <option value="venus-mars">venus-mars</option>
                            <option value="arrow-pointer">arrow-pointer</option>
                            <option value="mouse-pointer">mouse-pointer</option>
                            <option value="maximize">maximize</option>
                            <option value="expand-arrows-alt">expand-arrows-alt</option>
                            <option value="charging-station">charging-station</option>
                            <option value="shapes">shapes</option>
                            <option value="triangle-circle-square">triangle-circle-square</option>
                            <option value="shuffle">shuffle</option>
                            <option value="random">random</option>
                            <option value="person-running">person-running</option>
                            <option value="running">running</option>
                            <option value="mobile-retro">mobile-retro</option>
                            <option value="grip-lines-vertical">grip-lines-vertical</option>
                            <option value="spider">spider</option>
                            <option value="hands-bound">hands-bound</option>
                            <option value="file-invoice-dollar">file-invoice-dollar</option>
                            <option value="plane-circle-exclamation">plane-circle-exclamation</option>
                            <option value="x-ray">x-ray</option>
                            <option value="spell-check">spell-check</option>
                            <option value="slash">slash</option>
                            <option value="computer-mouse">computer-mouse</option>
                            <option value="mouse">mouse</option>
                            <option value="arrow-right-to-bracket">arrow-right-to-bracket</option>
                            <option value="sign-in">sign-in</option>
                            <option value="shop-slash">shop-slash</option>
                            <option value="store-alt-slash">store-alt-slash</option>
                            <option value="server">server</option>
                            <option value="virus-covid-slash">virus-covid-slash</option>
                            <option value="shop-lock">shop-lock</option>
                            <option value="hourglass-start">hourglass-start</option>
                            <option value="hourglass-1">hourglass-1</option>
                            <option value="blender-phone">blender-phone</option>
                            <option value="building-wheat">building-wheat</option>
                            <option value="person-breastfeeding">person-breastfeeding</option>
                            <option value="right-to-bracket">right-to-bracket</option>
                            <option value="sign-in-alt">sign-in-alt</option>
                            <option value="venus">venus</option>
                            <option value="passport">passport</option>
                            <option value="heart-pulse">heart-pulse</option>
                            <option value="heartbeat">heartbeat</option>
                            <option value="people-carry-box">people-carry-box</option>
                            <option value="people-carry">people-carry</option>
                            <option value="temperature-high">temperature-high</option>
                            <option value="microchip">microchip</option>
                            <option value="crown">crown</option>
                            <option value="weight-hanging">weight-hanging</option>
                            <option value="xmarks-lines">xmarks-lines</option>
                            <option value="file-prescription">file-prescription</option>
                            <option value="weight-scale">weight-scale</option>
                            <option value="weight">weight</option>
                            <option value="user-group">user-group</option>
                            <option value="user-friends">user-friends</option>
                            <option value="arrow-up-a-z">arrow-up-a-z</option>
                            <option value="sort-alpha-up">sort-alpha-up</option>
                            <option value="chess-knight">chess-knight</option>
                            <option value="face-laugh-squint">face-laugh-squint</option>
                            <option value="laugh-squint">laugh-squint</option>
                            <option value="wheelchair">wheelchair</option>
                            <option value="circle-arrow-up">circle-arrow-up</option>
                            <option value="arrow-circle-up">arrow-circle-up</option>
                            <option value="toggle-on">toggle-on</option>
                            <option value="person-walking">person-walking</option>
                            <option value="walking">walking</option>
                            <option value="l">l</option>
                            <option value="fire">fire</option>
                            <option value="bed-pulse">bed-pulse</option>
                            <option value="procedures">procedures</option>
                            <option value="shuttle-space">shuttle-space</option>
                            <option value="space-shuttle">space-shuttle</option>
                            <option value="face-laugh">face-laugh</option>
                            <option value="laugh">laugh</option>
                            <option value="folder-open">folder-open</option>
                            <option value="heart-circle-plus">heart-circle-plus</option>
                            <option value="code-fork">code-fork</option>
                            <option value="city">city</option>
                            <option value="microphone-lines">microphone-lines</option>
                            <option value="microphone-alt">microphone-alt</option>
                            <option value="pepper-hot">pepper-hot</option>
                            <option value="unlock">unlock</option>
                            <option value="colon-sign">colon-sign</option>
                            <option value="headset">headset</option>
                            <option value="store-slash">store-slash</option>
                            <option value="road-circle-xmark">road-circle-xmark</option>
                            <option value="user-minus">user-minus</option>
                            <option value="mars-stroke-up">mars-stroke-up</option>
                            <option value="mars-stroke-v">mars-stroke-v</option>
                            <option value="champagne-glasses">champagne-glasses</option>
                            <option value="glass-cheers">glass-cheers</option>
                            <option value="clipboard">clipboard</option>
                            <option value="house-circle-exclamation">house-circle-exclamation</option>
                            <option value="file-arrow-up">file-arrow-up</option>
                            <option value="file-upload">file-upload</option>
                            <option value="wifi">wifi</option>
                            <option value="wifi-3">wifi-3</option>
                            <option value="wifi-strong">wifi-strong</option>
                            <option value="bath">bath</option>
                            <option value="bathtub">bathtub</option>
                            <option value="underline">underline</option>
                            <option value="user-pen">user-pen</option>
                            <option value="user-edit">user-edit</option>
                            <option value="signature">signature</option>
                            <option value="stroopwafel">stroopwafel</option>
                            <option value="bold">bold</option>
                            <option value="anchor-lock">anchor-lock</option>
                            <option value="building-ngo">building-ngo</option>
                            <option value="manat-sign">manat-sign</option>
                            <option value="not-equal">not-equal</option>
                            <option value="border-top-left">border-top-left</option>
                            <option value="border-style">border-style</option>
                            <option value="map-location-dot">map-location-dot</option>
                            <option value="map-marked-alt">map-marked-alt</option>
                            <option value="jedi">jedi</option>
                            <option value="square-poll-vertical">square-poll-vertical</option>
                            <option value="poll">poll</option>
                            <option value="mug-hot">mug-hot</option>
                            <option value="car-battery">car-battery</option>
                            <option value="battery-car">battery-car</option>
                            <option value="gift">gift</option>
                            <option value="dice-two">dice-two</option>
                            <option value="chess-queen">chess-queen</option>
                            <option value="glasses">glasses</option>
                            <option value="chess-board">chess-board</option>
                            <option value="building-circle-check">building-circle-check</option>
                            <option value="person-chalkboard">person-chalkboard</option>
                            <option value="mars-stroke-right">mars-stroke-right</option>
                            <option value="mars-stroke-h">mars-stroke-h</option>
                            <option value="hand-back-fist">hand-back-fist</option>
                            <option value="hand-rock">hand-rock</option>
                            <option value="square-caret-up">square-caret-up</option>
                            <option value="caret-square-up">caret-square-up</option>
                            <option value="cloud-showers-water">cloud-showers-water</option>
                            <option value="chart-bar">chart-bar</option>
                            <option value="bar-chart">bar-chart</option>
                            <option value="hands-bubbles">hands-bubbles</option>
                            <option value="hands-wash">hands-wash</option>
                            <option value="less-than-equal">less-than-equal</option>
                            <option value="train">train</option>
                            <option value="eye-low-vision">eye-low-vision</option>
                            <option value="low-vision">low-vision</option>
                            <option value="crow">crow</option>
                            <option value="sailboat">sailboat</option>
                            <option value="window-restore">window-restore</option>
                            <option value="square-plus">square-plus</option>
                            <option value="plus-square">plus-square</option>
                            <option value="torii-gate">torii-gate</option>
                            <option value="frog">frog</option>
                            <option value="bucket">bucket</option>
                            <option value="image">image</option>
                            <option value="microphone">microphone</option>
                            <option value="cow">cow</option>
                            <option value="caret-up">caret-up</option>
                            <option value="screwdriver">screwdriver</option>
                            <option value="folder-closed">folder-closed</option>
                            <option value="house-tsunami">house-tsunami</option>
                            <option value="square-nfi">square-nfi</option>
                            <option value="arrow-up-from-ground-water">arrow-up-from-ground-water</option>
                            <option value="martini-glass">martini-glass</option>
                            <option value="glass-martini-alt">glass-martini-alt</option>
                            <option value="rotate-left">rotate-left</option>
                            <option value="rotate-back">rotate-back</option>
                            <option value="rotate-backward">rotate-backward</option>
                            <option value="undo-alt">undo-alt</option>
                            <option value="table-columns">table-columns</option>
                            <option value="columns">columns</option>
                            <option value="lemon">lemon</option>
                            <option value="head-side-mask">head-side-mask</option>
                            <option value="handshake">handshake</option>
                            <option value="gem">gem</option>
                            <option value="dolly">dolly</option>
                            <option value="dolly-box">dolly-box</option>
                            <option value="smoking">smoking</option>
                            <option value="minimize">minimize</option>
                            <option value="compress-arrows-alt">compress-arrows-alt</option>
                            <option value="monument">monument</option>
                            <option value="snowplow">snowplow</option>
                            <option value="angles-right">angles-right</option>
                            <option value="angle-double-right">angle-double-right</option>
                            <option value="cannabis">cannabis</option>
                            <option value="circle-play">circle-play</option>
                            <option value="play-circle">play-circle</option>
                            <option value="tablets">tablets</option>
                            <option value="ethernet">ethernet</option>
                            <option value="euro-sign">euro-sign</option>
                            <option value="eur">eur</option>
                            <option value="euro">euro</option>
                            <option value="chair">chair</option>
                            <option value="circle-check">circle-check</option>
                            <option value="check-circle">check-circle</option>
                            <option value="circle-stop">circle-stop</option>
                            <option value="stop-circle">stop-circle</option>
                            <option value="compass-drafting">compass-drafting</option>
                            <option value="drafting-compass">drafting-compass</option>
                            <option value="plate-wheat">plate-wheat</option>
                            <option value="icicles">icicles</option>
                            <option value="person-shelter">person-shelter</option>
                            <option value="neuter">neuter</option>
                            <option value="id-badge">id-badge</option>
                            <option value="marker">marker</option>
                            <option value="face-laugh-beam">face-laugh-beam</option>
                            <option value="laugh-beam">laugh-beam</option>
                            <option value="helicopter-symbol">helicopter-symbol</option>
                            <option value="universal-access">universal-access</option>
                            <option value="circle-chevron-up">circle-chevron-up</option>
                            <option value="chevron-circle-up">chevron-circle-up</option>
                            <option value="lari-sign">lari-sign</option>
                            <option value="volcano">volcano</option>
                            <option value="person-walking-dashed-line-arrow-right">person-walking-dashed-line-arrow-right</option>
                            <option value="sterling-sign">sterling-sign</option>
                            <option value="gbp">gbp</option>
                            <option value="pound-sign">pound-sign</option>
                            <option value="viruses">viruses</option>
                            <option value="square-person-confined">square-person-confined</option>
                            <option value="user-tie">user-tie</option>
                            <option value="arrow-down-long">arrow-down-long</option>
                            <option value="long-arrow-down">long-arrow-down</option>
                            <option value="tent-arrow-down-to-line">tent-arrow-down-to-line</option>
                            <option value="certificate">certificate</option>
                            <option value="reply-all">reply-all</option>
                            <option value="mail-reply-all">mail-reply-all</option>
                            <option value="suitcase">suitcase</option>
                            <option value="person-skating">person-skating</option>
                            <option value="skating">skating</option>
                            <option value="filter-circle-dollar">filter-circle-dollar</option>
                            <option value="funnel-dollar">funnel-dollar</option>
                            <option value="camera-retro">camera-retro</option>
                            <option value="circle-arrow-down">circle-arrow-down</option>
                            <option value="arrow-circle-down">arrow-circle-down</option>
                            <option value="file-import">file-import</option>
                            <option value="arrow-right-to-file">arrow-right-to-file</option>
                            <option value="square-arrow-up-right">square-arrow-up-right</option>
                            <option value="external-link-square">external-link-square</option>
                            <option value="box-open">box-open</option>
                            <option value="scroll">scroll</option>
                            <option value="spa">spa</option>
                            <option value="location-pin-lock">location-pin-lock</option>
                            <option value="pause">pause</option>
                            <option value="hill-avalanche">hill-avalanche</option>
                            <option value="temperature-empty">temperature-empty</option>
                            <option value="temperature-0">temperature-0</option>
                            <option value="thermometer-0">thermometer-0</option>
                            <option value="thermometer-empty">thermometer-empty</option>
                            <option value="bomb">bomb</option>
                            <option value="registered">registered</option>
                            <option value="address-card">address-card</option>
                            <option value="contact-card">contact-card</option>
                            <option value="vcard">vcard</option>
                            <option value="scale-unbalanced-flip">scale-unbalanced-flip</option>
                            <option value="balance-scale-right">balance-scale-right</option>
                            <option value="subscript">subscript</option>
                            <option value="diamond-turn-right">diamond-turn-right</option>
                            <option value="directions">directions</option>
                            <option value="burst">burst</option>
                            <option value="house-laptop">house-laptop</option>
                            <option value="laptop-house">laptop-house</option>
                            <option value="face-tired">face-tired</option>
                            <option value="tired">tired</option>
                            <option value="money-bills">money-bills</option>
                            <option value="smog">smog</option>
                            <option value="crutch">crutch</option>
                            <option value="cloud-arrow-up">cloud-arrow-up</option>
                            <option value="cloud-upload">cloud-upload</option>
                            <option value="cloud-upload-alt">cloud-upload-alt</option>
                            <option value="palette">palette</option>
                            <option value="arrows-turn-right">arrows-turn-right</option>
                            <option value="vest">vest</option>
                            <option value="ferry">ferry</option>
                            <option value="arrows-down-to-people">arrows-down-to-people</option>
                            <option value="seedling">seedling</option>
                            <option value="sprout">sprout</option>
                            <option value="left-right">left-right</option>
                            <option value="arrows-alt-h">arrows-alt-h</option>
                            <option value="boxes-packing">boxes-packing</option>
                            <option value="circle-arrow-left">circle-arrow-left</option>
                            <option value="arrow-circle-left">arrow-circle-left</option>
                            <option value="group-arrows-rotate">group-arrows-rotate</option>
                            <option value="bowl-food">bowl-food</option>
                            <option value="candy-cane">candy-cane</option>
                            <option value="arrow-down-wide-short">arrow-down-wide-short</option>
                            <option value="sort-amount-asc">sort-amount-asc</option>
                            <option value="sort-amount-down">sort-amount-down</option>
                            <option value="cloud-bolt">cloud-bolt</option>
                            <option value="thunderstorm">thunderstorm</option>
                            <option value="text-slash">text-slash</option>
                            <option value="remove-format">remove-format</option>
                            <option value="face-smile-wink">face-smile-wink</option>
                            <option value="smile-wink">smile-wink</option>
                            <option value="file-word">file-word</option>
                            <option value="file-powerpoint">file-powerpoint</option>
                            <option value="arrows-left-right">arrows-left-right</option>
                            <option value="arrows-h">arrows-h</option>
                            <option value="house-lock">house-lock</option>
                            <option value="cloud-arrow-down">cloud-arrow-down</option>
                            <option value="cloud-download">cloud-download</option>
                            <option value="cloud-download-alt">cloud-download-alt</option>
                            <option value="children">children</option>
                            <option value="chalkboard">chalkboard</option>
                            <option value="blackboard">blackboard</option>
                            <option value="user-large-slash">user-large-slash</option>
                            <option value="user-alt-slash">user-alt-slash</option>
                            <option value="envelope-open">envelope-open</option>
                            <option value="handshake-simple-slash">handshake-simple-slash</option>
                            <option value="handshake-alt-slash">handshake-alt-slash</option>
                            <option value="mattress-pillow">mattress-pillow</option>
                            <option value="guarani-sign">guarani-sign</option>
                            <option value="arrows-rotate">arrows-rotate</option>
                            <option value="refresh">refresh</option>
                            <option value="sync">sync</option>
                            <option value="fire-extinguisher">fire-extinguisher</option>
                            <option value="cruzeiro-sign">cruzeiro-sign</option>
                            <option value="greater-than-equal">greater-than-equal</option>
                            <option value="shield-halved">shield-halved</option>
                            <option value="shield-alt">shield-alt</option>
                            <option value="book-atlas">book-atlas</option>
                            <option value="atlas">atlas</option>
                            <option value="virus">virus</option>
                            <option value="envelope-circle-check">envelope-circle-check</option>
                            <option value="layer-group">layer-group</option>
                            <option value="arrows-to-dot">arrows-to-dot</option>
                            <option value="archway">archway</option>
                            <option value="heart-circle-check">heart-circle-check</option>
                            <option value="house-chimney-crack">house-chimney-crack</option>
                            <option value="house-damage">house-damage</option>
                            <option value="file-zipper">file-zipper</option>
                            <option value="file-archive">file-archive</option>
                            <option value="square">square</option>
                            <option value="martini-glass-empty">martini-glass-empty</option>
                            <option value="glass-martini">glass-martini</option>
                            <option value="couch">couch</option>
                            <option value="cedi-sign">cedi-sign</option>
                            <option value="italic">italic</option>
                            <option value="church">church</option>
                            <option value="comments-dollar">comments-dollar</option>
                            <option value="democrat">democrat</option>
                            <option value="z">z</option>
                            <option value="person-skiing">person-skiing</option>
                            <option value="skiing">skiing</option>
                            <option value="road-lock">road-lock</option>
                            <option value="a">a</option>
                            <option value="temperature-arrow-down">temperature-arrow-down</option>
                            <option value="temperature-down">temperature-down</option>
                            <option value="feather-pointed">feather-pointed</option>
                            <option value="feather-alt">feather-alt</option>
                            <option value="p">p</option>
                            <option value="snowflake">snowflake</option>
                            <option value="newspaper">newspaper</option>
                            <option value="rectangle-ad">rectangle-ad</option>
                            <option value="ad">ad</option>
                            <option value="circle-arrow-right">circle-arrow-right</option>
                            <option value="arrow-circle-right">arrow-circle-right</option>
                            <option value="filter-circle-xmark">filter-circle-xmark</option>
                            <option value="locust">locust</option>
                            <option value="sort">sort</option>
                            <option value="unsorted">unsorted</option>
                            <option value="list-ol">list-ol</option>
                            <option value="list-1-2">list-1-2</option>
                            <option value="list-numeric">list-numeric</option>
                            <option value="person-dress-burst">person-dress-burst</option>
                            <option value="money-check-dollar">money-check-dollar</option>
                            <option value="money-check-alt">money-check-alt</option>
                            <option value="vector-square">vector-square</option>
                            <option value="bread-slice">bread-slice</option>
                            <option value="language">language</option>
                            <option value="face-kiss-wink-heart">face-kiss-wink-heart</option>
                            <option value="kiss-wink-heart">kiss-wink-heart</option>
                            <option value="filter">filter</option>
                            <option value="question">question</option>
                            <option value="file-signature">file-signature</option>
                            <option value="up-down-left-right">up-down-left-right</option>
                            <option value="arrows-alt">arrows-alt</option>
                            <option value="house-chimney-user">house-chimney-user</option>
                            <option value="hand-holding-heart">hand-holding-heart</option>
                            <option value="puzzle-piece">puzzle-piece</option>
                            <option value="money-check">money-check</option>
                            <option value="star-half-stroke">star-half-stroke</option>
                            <option value="star-half-alt">star-half-alt</option>
                            <option value="code">code</option>
                            <option value="whiskey-glass">whiskey-glass</option>
                            <option value="glass-whiskey">glass-whiskey</option>
                            <option value="building-circle-exclamation">building-circle-exclamation</option>
                            <option value="magnifying-glass-chart">magnifying-glass-chart</option>
                            <option value="arrow-up-right-from-square">arrow-up-right-from-square</option>
                            <option value="external-link">external-link</option>
                            <option value="cubes-stacked">cubes-stacked</option>
                            <option value="won-sign">won-sign</option>
                            <option value="krw">krw</option>
                            <option value="won">won</option>
                            <option value="virus-covid">virus-covid</option>
                            <option value="austral-sign">austral-sign</option>
                            <option value="f">f</option>
                            <option value="leaf">leaf</option>
                            <option value="road">road</option>
                            <option value="taxi">taxi</option>
                            <option value="cab">cab</option>
                            <option value="person-circle-plus">person-circle-plus</option>
                            <option value="chart-pie">chart-pie</option>
                            <option value="pie-chart">pie-chart</option>
                            <option value="bolt-lightning">bolt-lightning</option>
                            <option value="sack-xmark">sack-xmark</option>
                            <option value="file-excel">file-excel</option>
                            <option value="file-contract">file-contract</option>
                            <option value="fish-fins">fish-fins</option>
                            <option value="building-flag">building-flag</option>
                            <option value="face-grin-beam">face-grin-beam</option>
                            <option value="grin-beam">grin-beam</option>
                            <option value="object-ungroup">object-ungroup</option>
                            <option value="poop">poop</option>
                            <option value="location-pin">location-pin</option>
                            <option value="map-marker">map-marker</option>
                            <option value="kaaba">kaaba</option>
                            <option value="toilet-paper">toilet-paper</option>
                            <option value="helmet-safety">helmet-safety</option>
                            <option value="hard-hat">hard-hat</option>
                            <option value="hat-hard">hat-hard</option>
                            <option value="eject">eject</option>
                            <option value="circle-right">circle-right</option>
                            <option value="arrow-alt-circle-right">arrow-alt-circle-right</option>
                            <option value="plane-circle-check">plane-circle-check</option>
                            <option value="face-rolling-eyes">face-rolling-eyes</option>
                            <option value="meh-rolling-eyes">meh-rolling-eyes</option>
                            <option value="object-group">object-group</option>
                            <option value="chart-line">chart-line</option>
                            <option value="line-chart">line-chart</option>
                            <option value="mask-ventilator">mask-ventilator</option>
                            <option value="arrow-right">arrow-right</option>
                            <option value="signs-post">signs-post</option>
                            <option value="map-signs">map-signs</option>
                            <option value="cash-register">cash-register</option>
                            <option value="person-circle-question">person-circle-question</option>
                            <option value="h">h</option>
                            <option value="tarp">tarp</option>
                            <option value="screwdriver-wrench">screwdriver-wrench</option>
                            <option value="tools">tools</option>
                            <option value="arrows-to-eye">arrows-to-eye</option>
                            <option value="plug-circle-bolt">plug-circle-bolt</option>
                            <option value="heart">heart</option>
                            <option value="mars-and-venus">mars-and-venus</option>
                            <option value="house-user">house-user</option>
                            <option value="home-user">home-user</option>
                            <option value="dumpster-fire">dumpster-fire</option>
                            <option value="house-crack">house-crack</option>
                            <option value="martini-glass-citrus">martini-glass-citrus</option>
                            <option value="cocktail">cocktail</option>
                            <option value="face-surprise">face-surprise</option>
                            <option value="surprise">surprise</option>
                            <option value="bottle-water">bottle-water</option>
                            <option value="circle-pause">circle-pause</option>
                            <option value="pause-circle">pause-circle</option>
                            <option value="toilet-paper-slash">toilet-paper-slash</option>
                            <option value="apple-whole">apple-whole</option>
                            <option value="apple-alt">apple-alt</option>
                            <option value="kitchen-set">kitchen-set</option>
                            <option value="r">r</option>
                            <option value="temperature-quarter">temperature-quarter</option>
                            <option value="temperature-1">temperature-1</option>
                            <option value="thermometer-1">thermometer-1</option>
                            <option value="thermometer-quarter">thermometer-quarter</option>
                            <option value="cube">cube</option>
                            <option value="bitcoin-sign">bitcoin-sign</option>
                            <option value="shield-dog">shield-dog</option>
                            <option value="solar-panel">solar-panel</option>
                            <option value="lock-open">lock-open</option>
                            <option value="elevator">elevator</option>
                            <option value="money-bill-transfer">money-bill-transfer</option>
                            <option value="money-bill-trend-up">money-bill-trend-up</option>
                            <option value="house-flood-water-circle-arrow-right">house-flood-water-circle-arrow-right</option>
                            <option value="square-poll-horizontal">square-poll-horizontal</option>
                            <option value="poll-h">poll-h</option>
                            <option value="circle">circle</option>
                            <option value="backward-fast">backward-fast</option>
                            <option value="fast-backward">fast-backward</option>
                            <option value="recycle">recycle</option>
                            <option value="user-astronaut">user-astronaut</option>
                            <option value="plane-slash">plane-slash</option>
                            <option value="trademark">trademark</option>
                            <option value="basketball">basketball</option>
                            <option value="basketball-ball">basketball-ball</option>
                            <option value="satellite-dish">satellite-dish</option>
                            <option value="circle-up">circle-up</option>
                            <option value="arrow-alt-circle-up">arrow-alt-circle-up</option>
                            <option value="mobile-screen-button">mobile-screen-button</option>
                            <option value="mobile-alt">mobile-alt</option>
                            <option value="volume-high">volume-high</option>
                            <option value="volume-up">volume-up</option>
                            <option value="users-rays">users-rays</option>
                            <option value="wallet">wallet</option>
                            <option value="clipboard-check">clipboard-check</option>
                            <option value="file-audio">file-audio</option>
                            <option value="burger">burger</option>
                            <option value="hamburger">hamburger</option>
                            <option value="wrench">wrench</option>
                            <option value="bugs">bugs</option>
                            <option value="rupee-sign">rupee-sign</option>
                            <option value="rupee">rupee</option>
                            <option value="file-image">file-image</option>
                            <option value="circle-question">circle-question</option>
                            <option value="question-circle">question-circle</option>
                            <option value="plane-departure">plane-departure</option>
                            <option value="handshake-slash">handshake-slash</option>
                            <option value="book-bookmark">book-bookmark</option>
                            <option value="code-branch">code-branch</option>
                            <option value="hat-cowboy">hat-cowboy</option>
                            <option value="bridge">bridge</option>
                            <option value="phone-flip">phone-flip</option>
                            <option value="phone-alt">phone-alt</option>
                            <option value="truck-front">truck-front</option>
                            <option value="cat">cat</option>
                            <option value="anchor-circle-exclamation">anchor-circle-exclamation</option>
                            <option value="truck-field">truck-field</option>
                            <option value="route">route</option>
                            <option value="clipboard-question">clipboard-question</option>
                            <option value="panorama">panorama</option>
                            <option value="comment-medical">comment-medical</option>
                            <option value="teeth-open">teeth-open</option>
                            <option value="file-circle-minus">file-circle-minus</option>
                            <option value="tags">tags</option>
                            <option value="wine-glass">wine-glass</option>
                            <option value="forward-fast">forward-fast</option>
                            <option value="fast-forward">fast-forward</option>
                            <option value="face-meh-blank">face-meh-blank</option>
                            <option value="meh-blank">meh-blank</option>
                            <option value="square-parking">square-parking</option>
                            <option value="parking">parking</option>
                            <option value="house-signal">house-signal</option>
                            <option value="bars-progress">bars-progress</option>
                            <option value="tasks-alt">tasks-alt</option>
                            <option value="faucet-drip">faucet-drip</option>
                            <option value="cart-flatbed">cart-flatbed</option>
                            <option value="dolly-flatbed">dolly-flatbed</option>
                            <option value="ban-smoking">ban-smoking</option>
                            <option value="smoking-ban">smoking-ban</option>
                            <option value="terminal">terminal</option>
                            <option value="mobile-button">mobile-button</option>
                            <option value="house-medical-flag">house-medical-flag</option>
                            <option value="basket-shopping">basket-shopping</option>
                            <option value="shopping-basket">shopping-basket</option>
                            <option value="tape">tape</option>
                            <option value="bus-simple">bus-simple</option>
                            <option value="bus-alt">bus-alt</option>
                            <option value="eye">eye</option>
                            <option value="face-sad-cry">face-sad-cry</option>
                            <option value="sad-cry">sad-cry</option>
                            <option value="audio-description">audio-description</option>
                            <option value="person-military-to-person">person-military-to-person</option>
                            <option value="file-shield">file-shield</option>
                            <option value="user-slash">user-slash</option>
                            <option value="pen">pen</option>
                            <option value="tower-observation">tower-observation</option>
                            <option value="file-code">file-code</option>
                            <option value="signal">signal</option>
                            <option value="signal-5">signal-5</option>
                            <option value="signal-perfect">signal-perfect</option>
                            <option value="bus">bus</option>
                            <option value="heart-circle-xmark">heart-circle-xmark</option>
                            <option value="house-chimney">house-chimney</option>
                            <option value="home-lg">home-lg</option>
                            <option value="window-maximize">window-maximize</option>
                            <option value="face-frown">face-frown</option>
                            <option value="frown">frown</option>
                            <option value="prescription">prescription</option>
                            <option value="shop">shop</option>
                            <option value="store-alt">store-alt</option>
                            <option value="floppy-disk">floppy-disk</option>
                            <option value="save">save</option>
                            <option value="vihara">vihara</option>
                            <option value="scale-unbalanced">scale-unbalanced</option>
                            <option value="balance-scale-left">balance-scale-left</option>
                            <option value="sort-up">sort-up</option>
                            <option value="sort-asc">sort-asc</option>
                            <option value="comment-dots">comment-dots</option>
                            <option value="commenting">commenting</option>
                            <option value="plant-wilt">plant-wilt</option>
                            <option value="diamond">diamond</option>
                            <option value="face-grin-squint">face-grin-squint</option>
                            <option value="grin-squint">grin-squint</option>
                            <option value="hand-holding-dollar">hand-holding-dollar</option>
                            <option value="hand-holding-usd">hand-holding-usd</option>
                            <option value="bacterium">bacterium</option>
                            <option value="hand-pointer">hand-pointer</option>
                            <option value="drum-steelpan">drum-steelpan</option>
                            <option value="hand-scissors">hand-scissors</option>
                            <option value="hands-praying">hands-praying</option>
                            <option value="praying-hands">praying-hands</option>
                            <option value="arrow-rotate-right">arrow-rotate-right</option>
                            <option value="arrow-right-rotate">arrow-right-rotate</option>
                            <option value="arrow-rotate-forward">arrow-rotate-forward</option>
                            <option value="redo">redo</option>
                            <option value="biohazard">biohazard</option>
                            <option value="location-crosshairs">location-crosshairs</option>
                            <option value="location">location</option>
                            <option value="mars-double">mars-double</option>
                            <option value="child-dress">child-dress</option>
                            <option value="users-between-lines">users-between-lines</option>
                            <option value="lungs-virus">lungs-virus</option>
                            <option value="face-grin-tears">face-grin-tears</option>
                            <option value="grin-tears">grin-tears</option>
                            <option value="phone">phone</option>
                            <option value="calendar-xmark">calendar-xmark</option>
                            <option value="calendar-times">calendar-times</option>
                            <option value="child-reaching">child-reaching</option>
                            <option value="head-side-virus">head-side-virus</option>
                            <option value="user-gear">user-gear</option>
                            <option value="user-cog">user-cog</option>
                            <option value="arrow-up-1-9">arrow-up-1-9</option>
                            <option value="sort-numeric-up">sort-numeric-up</option>
                            <option value="door-closed">door-closed</option>
                            <option value="shield-virus">shield-virus</option>
                            <option value="dice-six">dice-six</option>
                            <option value="mosquito-net">mosquito-net</option>
                            <option value="bridge-water">bridge-water</option>
                            <option value="person-booth">person-booth</option>
                            <option value="text-width">text-width</option>
                            <option value="hat-wizard">hat-wizard</option>
                            <option value="pen-fancy">pen-fancy</option>
                            <option value="person-digging">person-digging</option>
                            <option value="digging">digging</option>
                            <option value="trash">trash</option>
                            <option value="gauge-simple">gauge-simple</option>
                            <option value="gauge-simple-med">gauge-simple-med</option>
                            <option value="tachometer-average">tachometer-average</option>
                            <option value="book-medical">book-medical</option>
                            <option value="poo">poo</option>
                            <option value="quote-right">quote-right</option>
                            <option value="quote-right-alt">quote-right-alt</option>
                            <option value="shirt">shirt</option>
                            <option value="t-shirt">t-shirt</option>
                            <option value="tshirt">tshirt</option>
                            <option value="cubes">cubes</option>
                            <option value="divide">divide</option>
                            <option value="tenge-sign">tenge-sign</option>
                            <option value="tenge">tenge</option>
                            <option value="headphones">headphones</option>
                            <option value="hands-holding">hands-holding</option>
                            <option value="hands-clapping">hands-clapping</option>
                            <option value="republican">republican</option>
                            <option value="arrow-left">arrow-left</option>
                            <option value="person-circle-xmark">person-circle-xmark</option>
                            <option value="ruler">ruler</option>
                            <option value="align-left">align-left</option>
                            <option value="dice-d6">dice-d6</option>
                            <option value="restroom">restroom</option>
                            <option value="j">j</option>
                            <option value="users-viewfinder">users-viewfinder</option>
                            <option value="file-video">file-video</option>
                            <option value="up-right-from-square">up-right-from-square</option>
                            <option value="external-link-alt">external-link-alt</option>
                            <option value="table-cells">table-cells</option>
                            <option value="th">th</option>
                            <option value="file-pdf">file-pdf</option>
                            <option value="book-bible">book-bible</option>
                            <option value="bible">bible</option>
                            <option value="o">o</option>
                            <option value="suitcase-medical">suitcase-medical</option>
                            <option value="medkit">medkit</option>
                            <option value="user-secret">user-secret</option>
                            <option value="otter">otter</option>
                            <option value="person-dress">person-dress</option>
                            <option value="female">female</option>
                            <option value="comment-dollar">comment-dollar</option>
                            <option value="business-time">business-time</option>
                            <option value="briefcase-clock">briefcase-clock</option>
                            <option value="table-cells-large">table-cells-large</option>
                            <option value="th-large">th-large</option>
                            <option value="book-tanakh">book-tanakh</option>
                            <option value="tanakh">tanakh</option>
                            <option value="phone-volume">phone-volume</option>
                            <option value="volume-control-phone">volume-control-phone</option>
                            <option value="hat-cowboy-side">hat-cowboy-side</option>
                            <option value="clipboard-user">clipboard-user</option>
                            <option value="child">child</option>
                            <option value="lira-sign">lira-sign</option>
                            <option value="satellite">satellite</option>
                            <option value="plane-lock">plane-lock</option>
                            <option value="tag">tag</option>
                            <option value="comment">comment</option>
                            <option value="cake-candles">cake-candles</option>
                            <option value="birthday-cake">birthday-cake</option>
                            <option value="cake">cake</option>
                            <option value="envelope">envelope</option>
                            <option value="angles-up">angles-up</option>
                            <option value="angle-double-up">angle-double-up</option>
                            <option value="paperclip">paperclip</option>
                            <option value="arrow-right-to-city">arrow-right-to-city</option>
                            <option value="ribbon">ribbon</option>
                            <option value="lungs">lungs</option>
                            <option value="arrow-up-9-1">arrow-up-9-1</option>
                            <option value="sort-numeric-up-alt">sort-numeric-up-alt</option>
                            <option value="litecoin-sign">litecoin-sign</option>
                            <option value="border-none">border-none</option>
                            <option value="circle-nodes">circle-nodes</option>
                            <option value="parachute-box">parachute-box</option>
                            <option value="indent">indent</option>
                            <option value="truck-field-un">truck-field-un</option>
                            <option value="hourglass">hourglass</option>
                            <option value="hourglass-empty">hourglass-empty</option>
                            <option value="mountain">mountain</option>
                            <option value="user-doctor">user-doctor</option>
                            <option value="user-md">user-md</option>
                            <option value="circle-info">circle-info</option>
                            <option value="info-circle">info-circle</option>
                            <option value="cloud-meatball">cloud-meatball</option>
                            <option value="camera">camera</option>
                            <option value="camera-alt">camera-alt</option>
                            <option value="square-virus">square-virus</option>
                            <option value="meteor">meteor</option>
                            <option value="car-on">car-on</option>
                            <option value="sleigh">sleigh</option>
                            <option value="arrow-down-1-9">arrow-down-1-9</option>
                            <option value="sort-numeric-asc">sort-numeric-asc</option>
                            <option value="sort-numeric-down">sort-numeric-down</option>
                            <option value="hand-holding-droplet">hand-holding-droplet</option>
                            <option value="hand-holding-water">hand-holding-water</option>
                            <option value="water">water</option>
                            <option value="calendar-check">calendar-check</option>
                            <option value="braille">braille</option>
                            <option value="prescription-bottle-medical">prescription-bottle-medical</option>
                            <option value="prescription-bottle-alt">prescription-bottle-alt</option>
                            <option value="landmark">landmark</option>
                            <option value="truck">truck</option>
                            <option value="crosshairs">crosshairs</option>
                            <option value="person-cane">person-cane</option>
                            <option value="tent">tent</option>
                            <option value="vest-patches">vest-patches</option>
                            <option value="check-double">check-double</option>
                            <option value="arrow-down-a-z">arrow-down-a-z</option>
                            <option value="sort-alpha-asc">sort-alpha-asc</option>
                            <option value="sort-alpha-down">sort-alpha-down</option>
                            <option value="money-bill-wheat">money-bill-wheat</option>
                            <option value="cookie">cookie</option>
                            <option value="arrow-rotate-left">arrow-rotate-left</option>
                            <option value="arrow-left-rotate">arrow-left-rotate</option>
                            <option value="arrow-rotate-back">arrow-rotate-back</option>
                            <option value="arrow-rotate-backward">arrow-rotate-backward</option>
                            <option value="undo">undo</option>
                            <option value="hard-drive">hard-drive</option>
                            <option value="hdd">hdd</option>
                            <option value="face-grin-squint-tears">face-grin-squint-tears</option>
                            <option value="grin-squint-tears">grin-squint-tears</option>
                            <option value="dumbbell">dumbbell</option>
                            <option value="rectangle-list">rectangle-list</option>
                            <option value="list-alt">list-alt</option>
                            <option value="tarp-droplet">tarp-droplet</option>
                            <option value="house-medical-circle-check">house-medical-circle-check</option>
                            <option value="person-skiing-nordic">person-skiing-nordic</option>
                            <option value="skiing-nordic">skiing-nordic</option>
                            <option value="calendar-plus">calendar-plus</option>
                            <option value="plane-arrival">plane-arrival</option>
                            <option value="circle-left">circle-left</option>
                            <option value="arrow-alt-circle-left">arrow-alt-circle-left</option>
                            <option value="train-subway">train-subway</option>
                            <option value="subway">subway</option>
                            <option value="chart-gantt">chart-gantt</option>
                            <option value="indian-rupee-sign">indian-rupee-sign</option>
                            <option value="indian-rupee">indian-rupee</option>
                            <option value="inr">inr</option>
                            <option value="crop-simple">crop-simple</option>
                            <option value="crop-alt">crop-alt</option>
                            <option value="money-bill-1">money-bill-1</option>
                            <option value="money-bill-alt">money-bill-alt</option>
                            <option value="left-long">left-long</option>
                            <option value="long-arrow-alt-left">long-arrow-alt-left</option>
                            <option value="dna">dna</option>
                            <option value="virus-slash">virus-slash</option>
                            <option value="minus">minus</option>
                            <option value="subtract">subtract</option>
                            <option value="chess">chess</option>
                            <option value="arrow-left-long">arrow-left-long</option>
                            <option value="long-arrow-left">long-arrow-left</option>
                            <option value="plug-circle-check">plug-circle-check</option>
                            <option value="street-view">street-view</option>
                            <option value="franc-sign">franc-sign</option>
                            <option value="volume-off">volume-off</option>
                            <option value="hands-asl-interpreting">hands-asl-interpreting</option>
                            <option value="american-sign-language-interpreting">american-sign-language-interpreting</option>
                            <option value="asl-interpreting">asl-interpreting</option>
                            <option value="hands-american-sign-language-interpreting">hands-american-sign-language-interpreting</option>
                            <option value="gear">gear</option>
                            <option value="cog">cog</option>
                            <option value="droplet-slash">droplet-slash</option>
                            <option value="tint-slash">tint-slash</option>
                            <option value="mosque">mosque</option>
                            <option value="mosquito">mosquito</option>
                            <option value="star-of-david">star-of-david</option>
                            <option value="person-military-rifle">person-military-rifle</option>
                            <option value="cart-shopping">cart-shopping</option>
                            <option value="shopping-cart">shopping-cart</option>
                            <option value="vials">vials</option>
                            <option value="plug-circle-plus">plug-circle-plus</option>
                            <option value="place-of-worship">place-of-worship</option>
                            <option value="grip-vertical">grip-vertical</option>
                            <option value="arrow-turn-up">arrow-turn-up</option>
                            <option value="level-up">level-up</option>
                            <option value="u">u</option>
                            <option value="square-root-variable">square-root-variable</option>
                            <option value="square-root-alt">square-root-alt</option>
                            <option value="clock">clock</option>
                            <option value="clock-four">clock-four</option>
                            <option value="backward-step">backward-step</option>
                            <option value="step-backward">step-backward</option>
                            <option value="pallet">pallet</option>
                            <option value="faucet">faucet</option>
                            <option value="baseball-bat-ball">baseball-bat-ball</option>
                            <option value="s">s</option>
                            <option value="timeline">timeline</option>
                            <option value="keyboard">keyboard</option>
                            <option value="caret-down">caret-down</option>
                            <option value="house-chimney-medical">house-chimney-medical</option>
                            <option value="clinic-medical">clinic-medical</option>
                            <option value="temperature-three-quarters">temperature-three-quarters</option>
                            <option value="temperature-3">temperature-3</option>
                            <option value="thermometer-3">thermometer-3</option>
                            <option value="thermometer-three-quarters">thermometer-three-quarters</option>
                            <option value="mobile-screen">mobile-screen</option>
                            <option value="mobile-android-alt">mobile-android-alt</option>
                            <option value="plane-up">plane-up</option>
                            <option value="piggy-bank">piggy-bank</option>
                            <option value="battery-half">battery-half</option>
                            <option value="battery-3">battery-3</option>
                            <option value="mountain-city">mountain-city</option>
                            <option value="coins">coins</option>
                            <option value="khanda">khanda</option>
                            <option value="sliders">sliders</option>
                            <option value="sliders-h">sliders-h</option>
                            <option value="folder-tree">folder-tree</option>
                            <option value="network-wired">network-wired</option>
                            <option value="map-pin">map-pin</option>
                            <option value="hamsa">hamsa</option>
                            <option value="cent-sign">cent-sign</option>
                            <option value="flask">flask</option>
                            <option value="person-pregnant">person-pregnant</option>
                            <option value="wand-sparkles">wand-sparkles</option>
                            <option value="ellipsis-vertical">ellipsis-vertical</option>
                            <option value="ellipsis-v">ellipsis-v</option>
                            <option value="ticket">ticket</option>
                            <option value="power-off">power-off</option>
                            <option value="right-long">right-long</option>
                            <option value="long-arrow-alt-right">long-arrow-alt-right</option>
                            <option value="flag-usa">flag-usa</option>
                            <option value="laptop-file">laptop-file</option>
                            <option value="tty">tty</option>
                            <option value="teletype">teletype</option>
                            <option value="diagram-next">diagram-next</option>
                            <option value="person-rifle">person-rifle</option>
                            <option value="house-medical-circle-exclamation">house-medical-circle-exclamation</option>
                            <option value="closed-captioning">closed-captioning</option>
                            <option value="person-hiking">person-hiking</option>
                            <option value="hiking">hiking</option>
                            <option value="venus-double">venus-double</option>
                            <option value="images">images</option>
                            <option value="calculator">calculator</option>
                            <option value="people-pulling">people-pulling</option>
                            <option value="n">n</option>
                            <option value="cable-car">cable-car</option>
                            <option value="tram">tram</option>
                            <option value="cloud-rain">cloud-rain</option>
                            <option value="building-circle-xmark">building-circle-xmark</option>
                            <option value="ship">ship</option>
                            <option value="arrows-down-to-line">arrows-down-to-line</option>
                            <option value="download">download</option>
                            <option value="face-grin">face-grin</option>
                            <option value="grin">grin</option>
                            <option value="delete-left">delete-left</option>
                            <option value="backspace">backspace</option>
                            <option value="eye-dropper">eye-dropper</option>
                            <option value="eye-dropper-empty">eye-dropper-empty</option>
                            <option value="eyedropper">eyedropper</option>
                            <option value="file-circle-check">file-circle-check</option>
                            <option value="forward">forward</option>
                            <option value="mobile">mobile</option>
                            <option value="mobile-android">mobile-android</option>
                            <option value="mobile-phone">mobile-phone</option>
                            <option value="face-meh">face-meh</option>
                            <option value="meh">meh</option>
                            <option value="align-center">align-center</option>
                            <option value="book-skull">book-skull</option>
                            <option value="book-dead">book-dead</option>
                            <option value="id-card">id-card</option>
                            <option value="drivers-license">drivers-license</option>
                            <option value="outdent">outdent</option>
                            <option value="dedent">dedent</option>
                            <option value="heart-circle-exclamation">heart-circle-exclamation</option>
                            <option value="house">house</option>
                            <option value="home">home</option>
                            <option value="home-alt">home-alt</option>
                            <option value="home-lg-alt">home-lg-alt</option>
                            <option value="calendar-week">calendar-week</option>
                            <option value="laptop-medical">laptop-medical</option>
                            <option value="b">b</option>
                            <option value="file-medical">file-medical</option>
                            <option value="dice-one">dice-one</option>
                            <option value="kiwi-bird">kiwi-bird</option>
                            <option value="arrow-right-arrow-left">arrow-right-arrow-left</option>
                            <option value="exchange">exchange</option>
                            <option value="rotate-right">rotate-right</option>
                            <option value="redo-alt">redo-alt</option>
                            <option value="rotate-forward">rotate-forward</option>
                            <option value="utensils">utensils</option>
                            <option value="cutlery">cutlery</option>
                            <option value="arrow-up-wide-short">arrow-up-wide-short</option>
                            <option value="sort-amount-up">sort-amount-up</option>
                            <option value="mill-sign">mill-sign</option>
                            <option value="bowl-rice">bowl-rice</option>
                            <option value="skull">skull</option>
                            <option value="tower-broadcast">tower-broadcast</option>
                            <option value="broadcast-tower">broadcast-tower</option>
                            <option value="truck-pickup">truck-pickup</option>
                            <option value="up-long">up-long</option>
                            <option value="long-arrow-alt-up">long-arrow-alt-up</option>
                            <option value="stop">stop</option>
                            <option value="code-merge">code-merge</option>
                            <option value="upload">upload</option>
                            <option value="hurricane">hurricane</option>
                            <option value="mound">mound</option>
                            <option value="toilet-portable">toilet-portable</option>
                            <option value="compact-disc">compact-disc</option>
                            <option value="file-arrow-down">file-arrow-down</option>
                            <option value="file-download">file-download</option>
                            <option value="caravan">caravan</option>
                            <option value="shield-cat">shield-cat</option>
                            <option value="bolt">bolt</option>
                            <option value="zap">zap</option>
                            <option value="glass-water">glass-water</option>
                            <option value="oil-well">oil-well</option>
                            <option value="vault">vault</option>
                            <option value="mars">mars</option>
                            <option value="toilet">toilet</option>
                            <option value="plane-circle-xmark">plane-circle-xmark</option>
                            <option value="yen-sign">yen-sign</option>
                            <option value="cny">cny</option>
                            <option value="jpy">jpy</option>
                            <option value="rmb">rmb</option>
                            <option value="yen">yen</option>
                            <option value="ruble-sign">ruble-sign</option>
                            <option value="rouble">rouble</option>
                            <option value="rub">rub</option>
                            <option value="ruble">ruble</option>
                            <option value="sun">sun</option>
                            <option value="guitar">guitar</option>
                            <option value="face-laugh-wink">face-laugh-wink</option>
                            <option value="laugh-wink">laugh-wink</option>
                            <option value="horse-head">horse-head</option>
                            <option value="bore-hole">bore-hole</option>
                            <option value="industry">industry</option>
                            <option value="circle-down">circle-down</option>
                            <option value="arrow-alt-circle-down">arrow-alt-circle-down</option>
                            <option value="arrows-turn-to-dots">arrows-turn-to-dots</option>
                            <option value="florin-sign">florin-sign</option>
                            <option value="arrow-down-short-wide">arrow-down-short-wide</option>
                            <option value="sort-amount-desc">sort-amount-desc</option>
                            <option value="sort-amount-down-alt">sort-amount-down-alt</option>
                            <option value="less-than">less-than</option>
                            <option value="angle-down">angle-down</option>
                            <option value="car-tunnel">car-tunnel</option>
                            <option value="head-side-cough">head-side-cough</option>
                            <option value="grip-lines">grip-lines</option>
                            <option value="thumbs-down">thumbs-down</option>
                            <option value="user-lock">user-lock</option>
                            <option value="arrow-right-long">arrow-right-long</option>
                            <option value="long-arrow-right">long-arrow-right</option>
                            <option value="anchor-circle-xmark">anchor-circle-xmark</option>
                            <option value="ellipsis">ellipsis</option>
                            <option value="ellipsis-h">ellipsis-h</option>
                            <option value="chess-pawn">chess-pawn</option>
                            <option value="kit-medical">kit-medical</option>
                            <option value="first-aid">first-aid</option>
                            <option value="person-through-window">person-through-window</option>
                            <option value="toolbox">toolbox</option>
                            <option value="hands-holding-circle">hands-holding-circle</option>
                            <option value="bug">bug</option>
                            <option value="credit-card">credit-card</option>
                            <option value="credit-card-alt">credit-card-alt</option>
                            <option value="car">car</option>
                            <option value="automobile">automobile</option>
                            <option value="hand-holding-hand">hand-holding-hand</option>
                            <option value="book-open-reader">book-open-reader</option>
                            <option value="book-reader">book-reader</option>
                            <option value="mountain-sun">mountain-sun</option>
                            <option value="arrows-left-right-to-line">arrows-left-right-to-line</option>
                            <option value="dice-d20">dice-d20</option>
                            <option value="truck-droplet">truck-droplet</option>
                            <option value="file-circle-xmark">file-circle-xmark</option>
                            <option value="temperature-arrow-up">temperature-arrow-up</option>
                            <option value="temperature-up">temperature-up</option>
                            <option value="medal">medal</option>
                            <option value="bed">bed</option>
                            <option value="square-h">square-h</option>
                            <option value="h-square">h-square</option>
                            <option value="podcast">podcast</option>
                            <option value="temperature-full">temperature-full</option>
                            <option value="temperature-4">temperature-4</option>
                            <option value="thermometer-4">thermometer-4</option>
                            <option value="thermometer-full">thermometer-full</option>
                            <option value="bell">bell</option>
                            <option value="superscript">superscript</option>
                            <option value="plug-circle-xmark">plug-circle-xmark</option>
                            <option value="star-of-life">star-of-life</option>
                            <option value="phone-slash">phone-slash</option>
                            <option value="paint-roller">paint-roller</option>
                            <option value="handshake-angle">handshake-angle</option>
                            <option value="hands-helping">hands-helping</option>
                            <option value="location-dot">location-dot</option>
                            <option value="map-marker-alt">map-marker-alt</option>
                            <option value="file">file</option>
                            <option value="greater-than">greater-than</option>
                            <option value="person-swimming">person-swimming</option>
                            <option value="swimmer">swimmer</option>
                            <option value="arrow-down">arrow-down</option>
                            <option value="droplet">droplet</option>
                            <option value="tint">tint</option>
                            <option value="eraser">eraser</option>
                            <option value="earth-americas">earth-americas</option>
                            <option value="earth">earth</option>
                            <option value="earth-america">earth-america</option>
                            <option value="globe-americas">globe-americas</option>
                            <option value="person-burst">person-burst</option>
                            <option value="dove">dove</option>
                            <option value="battery-empty">battery-empty</option>
                            <option value="battery-0">battery-0</option>
                            <option value="socks">socks</option>
                            <option value="inbox">inbox</option>
                            <option value="section">section</option>
                            <option value="gauge-high">gauge-high</option>
                            <option value="tachometer-alt">tachometer-alt</option>
                            <option value="tachometer-alt-fast">tachometer-alt-fast</option>
                            <option value="envelope-open-text">envelope-open-text</option>
                            <option value="hospital">hospital</option>
                            <option value="hospital-alt">hospital-alt</option>
                            <option value="hospital-wide">hospital-wide</option>
                            <option value="wine-bottle">wine-bottle</option>
                            <option value="chess-rook">chess-rook</option>
                            <option value="bars-staggered">bars-staggered</option>
                            <option value="reorder">reorder</option>
                            <option value="stream">stream</option>
                            <option value="dharmachakra">dharmachakra</option>
                            <option value="hotdog">hotdog</option>
                            <option value="person-walking-with-cane">person-walking-with-cane</option>
                            <option value="blind">blind</option>
                            <option value="drum">drum</option>
                            <option value="ice-cream">ice-cream</option>
                            <option value="heart-circle-bolt">heart-circle-bolt</option>
                            <option value="fax">fax</option>
                            <option value="paragraph">paragraph</option>
                            <option value="check-to-slot">check-to-slot</option>
                            <option value="vote-yea">vote-yea</option>
                            <option value="star-half">star-half</option>
                            <option value="boxes-stacked">boxes-stacked</option>
                            <option value="boxes">boxes</option>
                            <option value="boxes-alt">boxes-alt</option>
                            <option value="link">link</option>
                            <option value="chain">chain</option>
                            <option value="ear-listen">ear-listen</option>
                            <option value="assistive-listening-systems">assistive-listening-systems</option>
                            <option value="tree-city">tree-city</option>
                            <option value="play">play</option>
                            <option value="font">font</option>
                            <option value="rupiah-sign">rupiah-sign</option>
                            <option value="magnifying-glass">magnifying-glass</option>
                            <option value="search">search</option>
                            <option value="table-tennis-paddle-ball">table-tennis-paddle-ball</option>
                            <option value="ping-pong-paddle-ball">ping-pong-paddle-ball</option>
                            <option value="table-tennis">table-tennis</option>
                            <option value="person-dots-from-line">person-dots-from-line</option>
                            <option value="diagnoses">diagnoses</option>
                            <option value="trash-can-arrow-up">trash-can-arrow-up</option>
                            <option value="trash-restore-alt">trash-restore-alt</option>
                            <option value="naira-sign">naira-sign</option>
                            <option value="cart-arrow-down">cart-arrow-down</option>
                            <option value="walkie-talkie">walkie-talkie</option>
                            <option value="file-pen">file-pen</option>
                            <option value="file-edit">file-edit</option>
                            <option value="receipt">receipt</option>
                            <option value="square-pen">square-pen</option>
                            <option value="pen-square">pen-square</option>
                            <option value="pencil-square">pencil-square</option>
                            <option value="suitcase-rolling">suitcase-rolling</option>
                            <option value="person-circle-exclamation">person-circle-exclamation</option>
                            <option value="chevron-down">chevron-down</option>
                            <option value="battery-full">battery-full</option>
                            <option value="battery">battery</option>
                            <option value="battery-5">battery-5</option>
                            <option value="skull-crossbones">skull-crossbones</option>
                            <option value="code-compare">code-compare</option>
                            <option value="list-ul">list-ul</option>
                            <option value="list-dots">list-dots</option>
                            <option value="school-lock">school-lock</option>
                            <option value="tower-cell">tower-cell</option>
                            <option value="down-long">down-long</option>
                            <option value="long-arrow-alt-down">long-arrow-alt-down</option>
                            <option value="ranking-star">ranking-star</option>
                            <option value="chess-king">chess-king</option>
                            <option value="person-harassing">person-harassing</option>
                            <option value="brazilian-real-sign">brazilian-real-sign</option>
                            <option value="landmark-dome">landmark-dome</option>
                            <option value="landmark-alt">landmark-alt</option>
                            <option value="arrow-up">arrow-up</option>
                            <option value="tv">tv</option>
                            <option value="television">television</option>
                            <option value="tv-alt">tv-alt</option>
                            <option value="shrimp">shrimp</option>
                            <option value="list-check">list-check</option>
                            <option value="tasks">tasks</option>
                            <option value="jug-detergent">jug-detergent</option>
                            <option value="circle-user">circle-user</option>
                            <option value="user-circle">user-circle</option>
                            <option value="user-shield">user-shield</option>
                            <option value="wind">wind</option>
                            <option value="car-burst">car-burst</option>
                            <option value="car-crash">car-crash</option>
                            <option value="y">y</option>
                            <option value="person-snowboarding">person-snowboarding</option>
                            <option value="snowboarding">snowboarding</option>
                            <option value="truck-fast">truck-fast</option>
                            <option value="shipping-fast">shipping-fast</option>
                            <option value="fish">fish</option>
                            <option value="user-graduate">user-graduate</option>
                            <option value="circle-half-stroke">circle-half-stroke</option>
                            <option value="adjust">adjust</option>
                            <option value="clapperboard">clapperboard</option>
                            <option value="circle-radiation">circle-radiation</option>
                            <option value="radiation-alt">radiation-alt</option>
                            <option value="baseball">baseball</option>
                            <option value="baseball-ball">baseball-ball</option>
                            <option value="jet-fighter-up">jet-fighter-up</option>
                            <option value="diagram-project">diagram-project</option>
                            <option value="project-diagram">project-diagram</option>
                            <option value="copy">copy</option>
                            <option value="volume-xmark">volume-xmark</option>
                            <option value="volume-mute">volume-mute</option>
                            <option value="volume-times">volume-times</option>
                            <option value="hand-sparkles">hand-sparkles</option>
                            <option value="grip">grip</option>
                            <option value="grip-horizontal">grip-horizontal</option>
                            <option value="share-from-square">share-from-square</option>
                            <option value="share-square">share-square</option>
                            <option value="child-combatant">child-combatant</option>
                            <option value="child-rifle">child-rifle</option>
                            <option value="gun">gun</option>
                            <option value="square-phone">square-phone</option>
                            <option value="phone-square">phone-square</option>
                            <option value="plus">plus</option>
                            <option value="add">add</option>
                            <option value="expand">expand</option>
                            <option value="computer">computer</option>
                            <option value="xmark">xmark</option>
                            <option value="close">close</option>
                            <option value="multiply">multiply</option>
                            <option value="remove">remove</option>
                            <option value="times">times</option>
                            <option value="arrows-up-down-left-right">arrows-up-down-left-right</option>
                            <option value="arrows">arrows</option>
                            <option value="chalkboard-user">chalkboard-user</option>
                            <option value="chalkboard-teacher">chalkboard-teacher</option>
                            <option value="peso-sign">peso-sign</option>
                            <option value="building-shield">building-shield</option>
                            <option value="baby">baby</option>
                            <option value="users-line">users-line</option>
                            <option value="quote-left">quote-left</option>
                            <option value="quote-left-alt">quote-left-alt</option>
                            <option value="tractor">tractor</option>
                            <option value="trash-arrow-up">trash-arrow-up</option>
                            <option value="trash-restore">trash-restore</option>
                            <option value="arrow-down-up-lock">arrow-down-up-lock</option>
                            <option value="lines-leaning">lines-leaning</option>
                            <option value="ruler-combined">ruler-combined</option>
                            <option value="copyright">copyright</option>
                            <option value="equals">equals</option>
                            <option value="blender">blender</option>
                            <option value="teeth">teeth</option>
                            <option value="shekel-sign">shekel-sign</option>
                            <option value="ils">ils</option>
                            <option value="shekel">shekel</option>
                            <option value="sheqel">sheqel</option>
                            <option value="sheqel-sign">sheqel-sign</option>
                            <option value="map">map</option>
                            <option value="rocket">rocket</option>
                            <option value="photo-film">photo-film</option>
                            <option value="photo-video">photo-video</option>
                            <option value="folder-minus">folder-minus</option>
                            <option value="store">store</option>
                            <option value="arrow-trend-up">arrow-trend-up</option>
                            <option value="plug-circle-minus">plug-circle-minus</option>
                            <option value="sign-hanging">sign-hanging</option>
                            <option value="sign">sign</option>
                            <option value="bezier-curve">bezier-curve</option>
                            <option value="bell-slash">bell-slash</option>
                            <option value="tablet">tablet</option>
                            <option value="tablet-android">tablet-android</option>
                            <option value="school-flag">school-flag</option>
                            <option value="fill">fill</option>
                            <option value="angle-up">angle-up</option>
                            <option value="drumstick-bite">drumstick-bite</option>
                            <option value="holly-berry">holly-berry</option>
                            <option value="chevron-left">chevron-left</option>
                            <option value="bacteria">bacteria</option>
                            <option value="hand-lizard">hand-lizard</option>
                            <option value="notdef">notdef</option>
                            <option value="disease">disease</option>
                            <option value="briefcase-medical">briefcase-medical</option>
                            <option value="genderless">genderless</option>
                            <option value="chevron-right">chevron-right</option>
                            <option value="retweet">retweet</option>
                            <option value="car-rear">car-rear</option>
                            <option value="car-alt">car-alt</option>
                            <option value="pump-soap">pump-soap</option>
                            <option value="video-slash">video-slash</option>
                            <option value="battery-quarter">battery-quarter</option>
                            <option value="battery-2">battery-2</option>
                            <option value="radio">radio</option>
                            <option value="baby-carriage">baby-carriage</option>
                            <option value="carriage-baby">carriage-baby</option>
                            <option value="traffic-light">traffic-light</option>
                            <option value="thermometer">thermometer</option>
                            <option value="vr-cardboard">vr-cardboard</option>
                            <option value="hand-middle-finger">hand-middle-finger</option>
                            <option value="percent">percent</option>
                            <option value="percentage">percentage</option>
                            <option value="truck-moving">truck-moving</option>
                            <option value="glass-water-droplet">glass-water-droplet</option>
                            <option value="display">display</option>
                            <option value="face-smile">face-smile</option>
                            <option value="smile">smile</option>
                            <option value="thumbtack">thumbtack</option>
                            <option value="thumb-tack">thumb-tack</option>
                            <option value="trophy">trophy</option>
                            <option value="person-praying">person-praying</option>
                            <option value="pray">pray</option>
                            <option value="hammer">hammer</option>
                            <option value="hand-peace">hand-peace</option>
                            <option value="rotate">rotate</option>
                            <option value="sync-alt">sync-alt</option>
                            <option value="spinner">spinner</option>
                            <option value="robot">robot</option>
                            <option value="peace">peace</option>
                            <option value="gears">gears</option>
                            <option value="cogs">cogs</option>
                            <option value="warehouse">warehouse</option>
                            <option value="arrow-up-right-dots">arrow-up-right-dots</option>
                            <option value="splotch">splotch</option>
                            <option value="face-grin-hearts">face-grin-hearts</option>
                            <option value="grin-hearts">grin-hearts</option>
                            <option value="dice-four">dice-four</option>
                            <option value="sim-card">sim-card</option>
                            <option value="transgender">transgender</option>
                            <option value="transgender-alt">transgender-alt</option>
                            <option value="mercury">mercury</option>
                            <option value="arrow-turn-down">arrow-turn-down</option>
                            <option value="level-down">level-down</option>
                            <option value="person-falling-burst">person-falling-burst</option>
                            <option value="award">award</option>
                            <option value="ticket-simple">ticket-simple</option>
                            <option value="ticket-alt">ticket-alt</option>
                            <option value="building">building</option>
                            <option value="angles-left">angles-left</option>
                            <option value="angle-double-left">angle-double-left</option>
                            <option value="qrcode">qrcode</option>
                            <option value="clock-rotate-left">clock-rotate-left</option>
                            <option value="history">history</option>
                            <option value="face-grin-beam-sweat">face-grin-beam-sweat</option>
                            <option value="grin-beam-sweat">grin-beam-sweat</option>
                            <option value="file-export">file-export</option>
                            <option value="arrow-right-from-file">arrow-right-from-file</option>
                            <option value="shield">shield</option>
                            <option value="shield-blank">shield-blank</option>
                            <option value="arrow-up-short-wide">arrow-up-short-wide</option>
                            <option value="sort-amount-up-alt">sort-amount-up-alt</option>
                            <option value="house-medical">house-medical</option>
                            <option value="golf-ball-tee">golf-ball-tee</option>
                            <option value="golf-ball">golf-ball</option>
                            <option value="circle-chevron-left">circle-chevron-left</option>
                            <option value="chevron-circle-left">chevron-circle-left</option>
                            <option value="house-chimney-window">house-chimney-window</option>
                            <option value="pen-nib">pen-nib</option>
                            <option value="tent-arrow-turn-left">tent-arrow-turn-left</option>
                            <option value="tents">tents</option>
                            <option value="wand-magic">wand-magic</option>
                            <option value="magic">magic</option>
                            <option value="dog">dog</option>
                            <option value="carrot">carrot</option>
                            <option value="moon">moon</option>
                            <option value="wine-glass-empty">wine-glass-empty</option>
                            <option value="wine-glass-alt">wine-glass-alt</option>
                            <option value="cheese">cheese</option>
                            <option value="yin-yang">yin-yang</option>
                            <option value="music">music</option>
                            <option value="code-commit">code-commit</option>
                            <option value="temperature-low">temperature-low</option>
                            <option value="person-biking">person-biking</option>
                            <option value="biking">biking</option>
                            <option value="broom">broom</option>
                            <option value="shield-heart">shield-heart</option>
                            <option value="gopuram">gopuram</option>
                            <option value="earth-oceania">earth-oceania</option>
                            <option value="globe-oceania">globe-oceania</option>
                            <option value="square-xmark">square-xmark</option>
                            <option value="times-square">times-square</option>
                            <option value="xmark-square">xmark-square</option>
                            <option value="hashtag">hashtag</option>
                            <option value="up-right-and-down-left-from-center">up-right-and-down-left-from-center</option>
                            <option value="expand-alt">expand-alt</option>
                            <option value="oil-can">oil-can</option>
                            <option value="t">t</option>
                            <option value="hippo">hippo</option>
                            <option value="chart-column">chart-column</option>
                            <option value="infinity">infinity</option>
                            <option value="vial-circle-check">vial-circle-check</option>
                            <option value="person-arrow-down-to-line">person-arrow-down-to-line</option>
                            <option value="voicemail">voicemail</option>
                            <option value="fan">fan</option>
                            <option value="person-walking-luggage">person-walking-luggage</option>
                            <option value="up-down">up-down</option>
                            <option value="arrows-alt-v">arrows-alt-v</option>
                            <option value="cloud-moon-rain">cloud-moon-rain</option>
                            <option value="calendar">calendar</option>
                            <option value="trailer">trailer</option>
                            <option value="bahai">bahai</option>
                            <option value="haykal">haykal</option>
                            <option value="sd-card">sd-card</option>
                            <option value="dragon">dragon</option>
                            <option value="shoe-prints">shoe-prints</option>
                            <option value="circle-plus">circle-plus</option>
                            <option value="plus-circle">plus-circle</option>
                            <option value="face-grin-tongue-wink">face-grin-tongue-wink</option>
                            <option value="grin-tongue-wink">grin-tongue-wink</option>
                            <option value="hand-holding">hand-holding</option>
                            <option value="plug-circle-exclamation">plug-circle-exclamation</option>
                            <option value="link-slash">link-slash</option>
                            <option value="chain-broken">chain-broken</option>
                            <option value="chain-slash">chain-slash</option>
                            <option value="unlink">unlink</option>
                            <option value="clone">clone</option>
                            <option value="person-walking-arrow-loop-left">person-walking-arrow-loop-left</option>
                            <option value="arrow-up-z-a">arrow-up-z-a</option>
                            <option value="sort-alpha-up-alt">sort-alpha-up-alt</option>
                            <option value="fire-flame-curved">fire-flame-curved</option>
                            <option value="fire-alt">fire-alt</option>
                            <option value="tornado">tornado</option>
                            <option value="file-circle-plus">file-circle-plus</option>
                            <option value="book-quran">book-quran</option>
                            <option value="quran">quran</option>
                            <option value="anchor">anchor</option>
                            <option value="border-all">border-all</option>
                            <option value="face-angry">face-angry</option>
                            <option value="angry">angry</option>
                            <option value="cookie-bite">cookie-bite</option>
                            <option value="arrow-trend-down">arrow-trend-down</option>
                            <option value="rss">rss</option>
                            <option value="feed">feed</option>
                            <option value="draw-polygon">draw-polygon</option>
                            <option value="scale-balanced">scale-balanced</option>
                            <option value="balance-scale">balance-scale</option>
                            <option value="gauge-simple-high">gauge-simple-high</option>
                            <option value="tachometer">tachometer</option>
                            <option value="tachometer-fast">tachometer-fast</option>
                            <option value="shower">shower</option>
                            <option value="desktop">desktop</option>
                            <option value="desktop-alt">desktop-alt</option>
                            <option value="m">m</option>
                            <option value="table-list">table-list</option>
                            <option value="th-list">th-list</option>
                            <option value="comment-sms">comment-sms</option>
                            <option value="sms">sms</option>
                            <option value="book">book</option>
                            <option value="user-plus">user-plus</option>
                            <option value="check">check</option>
                            <option value="battery-three-quarters">battery-three-quarters</option>
                            <option value="battery-4">battery-4</option>
                            <option value="house-circle-check">house-circle-check</option>
                            <option value="angle-left">angle-left</option>
                            <option value="diagram-successor">diagram-successor</option>
                            <option value="truck-arrow-right">truck-arrow-right</option>
                            <option value="arrows-split-up-and-left">arrows-split-up-and-left</option>
                            <option value="hand-fist">hand-fist</option>
                            <option value="fist-raised">fist-raised</option>
                            <option value="cloud-moon">cloud-moon</option>
                            <option value="briefcase">briefcase</option>
                            <option value="person-falling">person-falling</option>
                            <option value="image-portrait">image-portrait</option>
                            <option value="portrait">portrait</option>
                            <option value="user-tag">user-tag</option>
                            <option value="rug">rug</option>
                            <option value="earth-europe">earth-europe</option>
                            <option value="globe-europe">globe-europe</option>
                            <option value="cart-flatbed-suitcase">cart-flatbed-suitcase</option>
                            <option value="luggage-cart">luggage-cart</option>
                            <option value="rectangle-xmark">rectangle-xmark</option>
                            <option value="rectangle-times">rectangle-times</option>
                            <option value="times-rectangle">times-rectangle</option>
                            <option value="window-close">window-close</option>
                            <option value="baht-sign">baht-sign</option>
                            <option value="book-open">book-open</option>
                            <option value="book-journal-whills">book-journal-whills</option>
                            <option value="journal-whills">journal-whills</option>
                            <option value="handcuffs">handcuffs</option>
                            <option value="triangle-exclamation">triangle-exclamation</option>
                            <option value="exclamation-triangle">exclamation-triangle</option>
                            <option value="warning">warning</option>
                            <option value="database">database</option>
                            <option value="share">share</option>
                            <option value="arrow-turn-right">arrow-turn-right</option>
                            <option value="mail-forward">mail-forward</option>
                            <option value="bottle-droplet">bottle-droplet</option>
                            <option value="mask-face">mask-face</option>
                            <option value="hill-rockslide">hill-rockslide</option>
                            <option value="right-left">right-left</option>
                            <option value="exchange-alt">exchange-alt</option>
                            <option value="paper-plane">paper-plane</option>
                            <option value="road-circle-exclamation">road-circle-exclamation</option>
                            <option value="dungeon">dungeon</option>
                            <option value="align-right">align-right</option>
                            <option value="money-bill-1-wave">money-bill-1-wave</option>
                            <option value="money-bill-wave-alt">money-bill-wave-alt</option>
                            <option value="life-ring">life-ring</option>
                            <option value="hands">hands</option>
                            <option value="sign-language">sign-language</option>
                            <option value="signing">signing</option>
                            <option value="calendar-day">calendar-day</option>
                            <option value="water-ladder">water-ladder</option>
                            <option value="ladder-water">ladder-water</option>
                            <option value="swimming-pool">swimming-pool</option>
                            <option value="arrows-up-down">arrows-up-down</option>
                            <option value="arrows-v">arrows-v</option>
                            <option value="face-grimace">face-grimace</option>
                            <option value="grimace">grimace</option>
                            <option value="wheelchair-move">wheelchair-move</option>
                            <option value="wheelchair-alt">wheelchair-alt</option>
                            <option value="turn-down">turn-down</option>
                            <option value="level-down-alt">level-down-alt</option>
                            <option value="person-walking-arrow-right">person-walking-arrow-right</option>
                            <option value="square-envelope">square-envelope</option>
                            <option value="envelope-square">envelope-square</option>
                            <option value="dice">dice</option>
                            <option value="bowling-ball">bowling-ball</option>
                            <option value="brain">brain</option>
                            <option value="bandage">bandage</option>
                            <option value="band-aid">band-aid</option>
                            <option value="calendar-minus">calendar-minus</option>
                            <option value="circle-xmark">circle-xmark</option>
                            <option value="times-circle">times-circle</option>
                            <option value="xmark-circle">xmark-circle</option>
                            <option value="gifts">gifts</option>
                            <option value="hotel">hotel</option>
                            <option value="earth-asia">earth-asia</option>
                            <option value="globe-asia">globe-asia</option>
                            <option value="id-card-clip">id-card-clip</option>
                            <option value="id-card-alt">id-card-alt</option>
                            <option value="magnifying-glass-plus">magnifying-glass-plus</option>
                            <option value="search-plus">search-plus</option>
                            <option value="thumbs-up">thumbs-up</option>
                            <option value="user-clock">user-clock</option>
                            <option value="hand-dots">hand-dots</option>
                            <option value="allergies">allergies</option>
                            <option value="file-invoice">file-invoice</option>
                            <option value="window-minimize">window-minimize</option>
                            <option value="mug-saucer">mug-saucer</option>
                            <option value="coffee">coffee</option>
                            <option value="brush">brush</option>
                            <option value="mask">mask</option>
                            <option value="magnifying-glass-minus">magnifying-glass-minus</option>
                            <option value="search-minus">search-minus</option>
                            <option value="ruler-vertical">ruler-vertical</option>
                            <option value="user-large">user-large</option>
                            <option value="user-alt">user-alt</option>
                            <option value="train-tram">train-tram</option>
                            <option value="user-nurse">user-nurse</option>
                            <option value="syringe">syringe</option>
                            <option value="cloud-sun">cloud-sun</option>
                            <option value="stopwatch-20">stopwatch-20</option>
                            <option value="square-full">square-full</option>
                            <option value="magnet">magnet</option>
                            <option value="jar">jar</option>
                            <option value="note-sticky">note-sticky</option>
                            <option value="sticky-note">sticky-note</option>
                            <option value="bug-slash">bug-slash</option>
                            <option value="arrow-up-from-water-pump">arrow-up-from-water-pump</option>
                            <option value="bone">bone</option>
                            <option value="user-injured">user-injured</option>
                            <option value="face-sad-tear">face-sad-tear</option>
                            <option value="sad-tear">sad-tear</option>
                            <option value="plane">plane</option>
                            <option value="tent-arrows-down">tent-arrows-down</option>
                            <option value="exclamation">exclamation</option>
                            <option value="arrows-spin">arrows-spin</option>
                            <option value="print">print</option>
                            <option value="turkish-lira-sign">turkish-lira-sign</option>
                            <option value="try">try</option>
                            <option value="turkish-lira">turkish-lira</option>
                            <option value="dollar-sign">dollar-sign</option>
                            <option value="dollar">dollar</option>
                            <option value="usd">usd</option>
                            <option value="x">x</option>
                            <option value="magnifying-glass-dollar">magnifying-glass-dollar</option>
                            <option value="search-dollar">search-dollar</option>
                            <option value="users-gear">users-gear</option>
                            <option value="users-cog">users-cog</option>
                            <option value="person-military-pointing">person-military-pointing</option>
                            <option value="building-columns">building-columns</option>
                            <option value="bank">bank</option>
                            <option value="institution">institution</option>
                            <option value="museum">museum</option>
                            <option value="university">university</option>
                            <option value="umbrella">umbrella</option>
                            <option value="trowel">trowel</option>
                            <option value="d">d</option>
                            <option value="stapler">stapler</option>
                            <option value="masks-theater">masks-theater</option>
                            <option value="theater-masks">theater-masks</option>
                            <option value="kip-sign">kip-sign</option>
                            <option value="hand-point-left">hand-point-left</option>
                            <option value="handshake-simple">handshake-simple</option>
                            <option value="handshake-alt">handshake-alt</option>
                            <option value="jet-fighter">jet-fighter</option>
                            <option value="fighter-jet">fighter-jet</option>
                            <option value="square-share-nodes">square-share-nodes</option>
                            <option value="share-alt-square">share-alt-square</option>
                            <option value="barcode">barcode</option>
                            <option value="plus-minus">plus-minus</option>
                            <option value="video">video</option>
                            <option value="video-camera">video-camera</option>
                            <option value="graduation-cap">graduation-cap</option>
                            <option value="mortar-board">mortar-board</option>
                            <option value="hand-holding-medical">hand-holding-medical</option>
                            <option value="person-circle-check">person-circle-check</option>
                            <option value="turn-up">turn-up</option>
                            <option value="level-up-alt">level-up-alt</option>
                            .sr-only,
                            <option value="sr-only ">sr-only </option>  width: 1px;
                              height: 1px;
                              padding: 0;
                              margin: -1px;
                              overflow: hidden;
                              clip: rect(0, 0, 0, 0);
                              white-space: nowrap;
                              border-width: 0; }

                            .sr-only-focusable:not(:focus),
                            <option value="sr-only-focusable:not(:focus) ">sr-only-focusable:not(:focus) </option>  width: 1px;
                              height: 1px;
                              padding: 0;
                              margin: -1px;
                              overflow: hidden;
                              clip: rect(0, 0, 0, 0);
                              white-space: nowrap;
                              border-width: 0; }
                            :root, :host {
                              --fa-style-family-brands: 'Font Awesome 6 Brands';
                              --fa-font-brands: normal 400 1em/1 'Font Awesome 6 Brands'; }

                            @font-face {
                              font-family: 'Font Awesome 6 Brands';
                              font-style: normal;
                              font-weight: 400;
                              font-display: block;
                              src: url("../webfonts/fa-brands-400.woff2") format("woff2"), url("../webfonts/fa-brands-400.ttf") format("truetype"); }

                            .fab,
                            <option value="brands ">brands </option>
                            <option value="monero ">monero </option>
                            <option value="hooli ">hooli </option>
                            <option value="yelp ">yelp </option>
                            <option value="cc-visa ">cc-visa </option>
                            <option value="lastfm ">lastfm </option>
                            <option value="shopware ">shopware </option>
                            <option value="creative-commons-nc ">creative-commons-nc </option>
                            <option value="aws ">aws </option>
                            <option value="redhat ">redhat </option>
                            <option value="yoast ">yoast </option>
                            <option value="cloudflare ">cloudflare </option>
                            <option value="ups ">ups </option>
                            <option value="wpexplorer ">wpexplorer </option>
                            <option value="dyalog ">dyalog </option>
                            <option value="bity ">bity </option>
                            <option value="stackpath ">stackpath </option>
                            <option value="buysellads ">buysellads </option>
                            <option value="first-order ">first-order </option>
                            <option value="modx ">modx </option>
                            <option value="guilded ">guilded </option>
                            <option value="vnv ">vnv </option>
                            <option value="square-js ">square-js </option>
                            <option value="js-square ">js-square </option>
                            <option value="microsoft ">microsoft </option>
                            <option value="qq ">qq </option>
                            <option value="orcid ">orcid </option>
                            <option value="java ">java </option>
                            <option value="invision ">invision </option>
                            <option value="creative-commons-pd-alt ">creative-commons-pd-alt </option>
                            <option value="centercode ">centercode </option>
                            <option value="glide-g ">glide-g </option>
                            <option value="drupal ">drupal </option>
                            <option value="hire-a-helper ">hire-a-helper </option>
                            <option value="creative-commons-by ">creative-commons-by </option>
                            <option value="unity ">unity </option>
                            <option value="whmcs ">whmcs </option>
                            <option value="rocketchat ">rocketchat </option>
                            <option value="vk ">vk </option>
                            <option value="untappd ">untappd </option>
                            <option value="mailchimp ">mailchimp </option>
                            <option value="css3-alt ">css3-alt </option>
                            <option value="square-reddit ">square-reddit </option>
                            <option value="reddit-square ">reddit-square </option>
                            <option value="vimeo-v ">vimeo-v </option>
                            <option value="contao ">contao </option>
                            <option value="square-font-awesome ">square-font-awesome </option>
                            <option value="deskpro ">deskpro </option>
                            <option value="sistrix ">sistrix </option>
                            <option value="square-instagram ">square-instagram </option>
                            <option value="instagram-square ">instagram-square </option>
                            <option value="battle-net ">battle-net </option>
                            <option value="the-red-yeti ">the-red-yeti </option>
                            <option value="square-hacker-news ">square-hacker-news </option>
                            <option value="hacker-news-square ">hacker-news-square </option>
                            <option value="edge ">edge </option>
                            <option value="threads ">threads </option>
                            <option value="napster ">napster </option>
                            <option value="square-snapchat ">square-snapchat </option>
                            <option value="snapchat-square ">snapchat-square </option>
                            <option value="google-plus-g ">google-plus-g </option>
                            <option value="artstation ">artstation </option>
                            <option value="markdown ">markdown </option>
                            <option value="sourcetree ">sourcetree </option>
                            <option value="google-plus ">google-plus </option>
                            <option value="diaspora ">diaspora </option>
                            <option value="foursquare ">foursquare </option>
                            <option value="stack-overflow ">stack-overflow </option>
                            <option value="github-alt ">github-alt </option>
                            <option value="phoenix-squadron ">phoenix-squadron </option>
                            <option value="pagelines ">pagelines </option>
                            <option value="algolia ">algolia </option>
                            <option value="red-river ">red-river </option>
                            <option value="creative-commons-sa ">creative-commons-sa </option>
                            <option value="safari ">safari </option>
                            <option value="google ">google </option>
                            <option value="square-font-awesome-stroke ">square-font-awesome-stroke </option>
                            <option value="font-awesome-alt ">font-awesome-alt </option>
                            <option value="atlassian ">atlassian </option>
                            <option value="linkedin-in ">linkedin-in </option>
                            <option value="digital-ocean ">digital-ocean </option>
                            <option value="nimblr ">nimblr </option>
                            <option value="chromecast ">chromecast </option>
                            <option value="evernote ">evernote </option>
                            <option value="hacker-news ">hacker-news </option>
                            <option value="creative-commons-sampling ">creative-commons-sampling </option>
                            <option value="adversal ">adversal </option>
                            <option value="creative-commons ">creative-commons </option>
                            <option value="watchman-monitoring ">watchman-monitoring </option>
                            <option value="fonticons ">fonticons </option>
                            <option value="weixin ">weixin </option>
                            <option value="shirtsinbulk ">shirtsinbulk </option>
                            <option value="codepen ">codepen </option>
                            <option value="git-alt ">git-alt </option>
                            <option value="lyft ">lyft </option>
                            <option value="rev ">rev </option>
                            <option value="windows ">windows </option>
                            <option value="wizards-of-the-coast ">wizards-of-the-coast </option>
                            <option value="square-viadeo ">square-viadeo </option>
                            <option value="viadeo-square ">viadeo-square </option>
                            <option value="meetup ">meetup </option>
                            <option value="centos ">centos </option>
                            <option value="adn ">adn </option>
                            <option value="cloudsmith ">cloudsmith </option>
                            <option value="pied-piper-alt ">pied-piper-alt </option>
                            <option value="square-dribbble ">square-dribbble </option>
                            <option value="dribbble-square ">dribbble-square </option>
                            <option value="codiepie ">codiepie </option>
                            <option value="node ">node </option>
                            <option value="mix ">mix </option>
                            <option value="steam ">steam </option>
                            <option value="cc-apple-pay ">cc-apple-pay </option>
                            <option value="scribd ">scribd </option>
                            <option value="debian ">debian </option>
                            <option value="openid ">openid </option>
                            <option value="instalod ">instalod </option>
                            <option value="expeditedssl ">expeditedssl </option>
                            <option value="sellcast ">sellcast </option>
                            <option value="square-twitter ">square-twitter </option>
                            <option value="twitter-square ">twitter-square </option>
                            <option value="r-project ">r-project </option>
                            <option value="delicious ">delicious </option>
                            <option value="freebsd ">freebsd </option>
                            <option value="vuejs ">vuejs </option>
                            <option value="accusoft ">accusoft </option>
                            <option value="ioxhost ">ioxhost </option>
                            <option value="fonticons-fi ">fonticons-fi </option>
                            <option value="app-store ">app-store </option>
                            <option value="cc-mastercard ">cc-mastercard </option>
                            <option value="itunes-note ">itunes-note </option>
                            <option value="golang ">golang </option>
                            <option value="kickstarter ">kickstarter </option>
                            <option value="grav ">grav </option>
                            <option value="weibo ">weibo </option>
                            <option value="uncharted ">uncharted </option>
                            <option value="firstdraft ">firstdraft </option>
                            <option value="square-youtube ">square-youtube </option>
                            <option value="youtube-square ">youtube-square </option>
                            <option value="wikipedia-w ">wikipedia-w </option>
                            <option value="wpressr ">wpressr </option>
                            <option value="rendact ">rendact </option>
                            <option value="angellist ">angellist </option>
                            <option value="galactic-republic ">galactic-republic </option>
                            <option value="nfc-directional ">nfc-directional </option>
                            <option value="skype ">skype </option>
                            <option value="joget ">joget </option>
                            <option value="fedora ">fedora </option>
                            <option value="stripe-s ">stripe-s </option>
                            <option value="meta ">meta </option>
                            <option value="laravel ">laravel </option>
                            <option value="hotjar ">hotjar </option>
                            <option value="bluetooth-b ">bluetooth-b </option>
                            <option value="sticker-mule ">sticker-mule </option>
                            <option value="creative-commons-zero ">creative-commons-zero </option>
                            <option value="hips ">hips </option>
                            <option value="behance ">behance </option>
                            <option value="reddit ">reddit </option>
                            <option value="discord ">discord </option>
                            <option value="chrome ">chrome </option>
                            <option value="app-store-ios ">app-store-ios </option>
                            <option value="cc-discover ">cc-discover </option>
                            <option value="wpbeginner ">wpbeginner </option>
                            <option value="confluence ">confluence </option>
                            <option value="mdb ">mdb </option>
                            <option value="dochub ">dochub </option>
                            <option value="accessible-icon ">accessible-icon </option>
                            <option value="ebay ">ebay </option>
                            <option value="amazon ">amazon </option>
                            <option value="unsplash ">unsplash </option>
                            <option value="yarn ">yarn </option>
                            <option value="square-steam ">square-steam </option>
                            <option value="steam-square ">steam-square </option>
                            <option value="500px ">500px </option>
                            <option value="square-vimeo ">square-vimeo </option>
                            <option value="vimeo-square ">vimeo-square </option>
                            <option value="asymmetrik ">asymmetrik </option>
                            <option value="font-awesome ">font-awesome </option>
                            <option value="font-awesome-flag ">font-awesome-flag </option>
                            <option value="font-awesome-logo-full ">font-awesome-logo-full </option>
                            <option value="gratipay ">gratipay </option>
                            <option value="apple ">apple </option>
                            <option value="hive ">hive </option>
                            <option value="gitkraken ">gitkraken </option>
                            <option value="keybase ">keybase </option>
                            <option value="apple-pay ">apple-pay </option>
                            <option value="padlet ">padlet </option>
                            <option value="amazon-pay ">amazon-pay </option>
                            <option value="square-github ">square-github </option>
                            <option value="github-square ">github-square </option>
                            <option value="stumbleupon ">stumbleupon </option>
                            <option value="fedex ">fedex </option>
                            <option value="phoenix-framework ">phoenix-framework </option>
                            <option value="shopify ">shopify </option>
                            <option value="neos ">neos </option>
                            <option value="square-threads ">square-threads </option>
                            <option value="hackerrank ">hackerrank </option>
                            <option value="researchgate ">researchgate </option>
                            <option value="swift ">swift </option>
                            <option value="angular ">angular </option>
                            <option value="speakap ">speakap </option>
                            <option value="angrycreative ">angrycreative </option>
                            <option value="y-combinator ">y-combinator </option>
                            <option value="empire ">empire </option>
                            <option value="envira ">envira </option>
                            <option value="square-gitlab ">square-gitlab </option>
                            <option value="gitlab-square ">gitlab-square </option>
                            <option value="studiovinari ">studiovinari </option>
                            <option value="pied-piper ">pied-piper </option>
                            <option value="wordpress ">wordpress </option>
                            <option value="product-hunt ">product-hunt </option>
                            <option value="firefox ">firefox </option>
                            <option value="linode ">linode </option>
                            <option value="goodreads ">goodreads </option>
                            <option value="square-odnoklassniki ">square-odnoklassniki </option>
                            <option value="odnoklassniki-square ">odnoklassniki-square </option>
                            <option value="jsfiddle ">jsfiddle </option>
                            <option value="sith ">sith </option>
                            <option value="themeisle ">themeisle </option>
                            <option value="page4 ">page4 </option>
                            <option value="hashnode ">hashnode </option>
                            <option value="react ">react </option>
                            <option value="cc-paypal ">cc-paypal </option>
                            <option value="squarespace ">squarespace </option>
                            <option value="cc-stripe ">cc-stripe </option>
                            <option value="creative-commons-share ">creative-commons-share </option>
                            <option value="bitcoin ">bitcoin </option>
                            <option value="keycdn ">keycdn </option>
                            <option value="opera ">opera </option>
                            <option value="itch-io ">itch-io </option>
                            <option value="umbraco ">umbraco </option>
                            <option value="galactic-senate ">galactic-senate </option>
                            <option value="ubuntu ">ubuntu </option>
                            <option value="draft2digital ">draft2digital </option>
                            <option value="stripe ">stripe </option>
                            <option value="houzz ">houzz </option>
                            <option value="gg ">gg </option>
                            <option value="dhl ">dhl </option>
                            <option value="square-pinterest ">square-pinterest </option>
                            <option value="pinterest-square ">pinterest-square </option>
                            <option value="xing ">xing </option>
                            <option value="blackberry ">blackberry </option>
                            <option value="creative-commons-pd ">creative-commons-pd </option>
                            <option value="playstation ">playstation </option>
                            <option value="quinscape ">quinscape </option>
                            <option value="less ">less </option>
                            <option value="blogger-b ">blogger-b </option>
                            <option value="opencart ">opencart </option>
                            <option value="vine ">vine </option>
                            <option value="paypal ">paypal </option>
                            <option value="gitlab ">gitlab </option>
                            <option value="typo3 ">typo3 </option>
                            <option value="reddit-alien ">reddit-alien </option>
                            <option value="yahoo ">yahoo </option>
                            <option value="dailymotion ">dailymotion </option>
                            <option value="affiliatetheme ">affiliatetheme </option>
                            <option value="pied-piper-pp ">pied-piper-pp </option>
                            <option value="bootstrap ">bootstrap </option>
                            <option value="odnoklassniki ">odnoklassniki </option>
                            <option value="nfc-symbol ">nfc-symbol </option>
                            <option value="ethereum ">ethereum </option>
                            <option value="speaker-deck ">speaker-deck </option>
                            <option value="creative-commons-nc-eu ">creative-commons-nc-eu </option>
                            <option value="patreon ">patreon </option>
                            <option value="avianex ">avianex </option>
                            <option value="ello ">ello </option>
                            <option value="gofore ">gofore </option>
                            <option value="bimobject ">bimobject </option>
                            <option value="facebook-f ">facebook-f </option>
                            <option value="square-google-plus ">square-google-plus </option>
                            <option value="google-plus-square ">google-plus-square </option>
                            <option value="mandalorian ">mandalorian </option>
                            <option value="first-order-alt ">first-order-alt </option>
                            <option value="osi ">osi </option>
                            <option value="google-wallet ">google-wallet </option>
                            <option value="d-and-d-beyond ">d-and-d-beyond </option>
                            <option value="periscope ">periscope </option>
                            <option value="fulcrum ">fulcrum </option>
                            <option value="cloudscale ">cloudscale </option>
                            <option value="forumbee ">forumbee </option>
                            <option value="mizuni ">mizuni </option>
                            <option value="schlix ">schlix </option>
                            <option value="square-xing ">square-xing </option>
                            <option value="xing-square ">xing-square </option>
                            <option value="bandcamp ">bandcamp </option>
                            <option value="wpforms ">wpforms </option>
                            <option value="cloudversify ">cloudversify </option>
                            <option value="usps ">usps </option>
                            <option value="megaport ">megaport </option>
                            <option value="magento ">magento </option>
                            <option value="spotify ">spotify </option>
                            <option value="optin-monster ">optin-monster </option>
                            <option value="fly ">fly </option>
                            <option value="aviato ">aviato </option>
                            <option value="itunes ">itunes </option>
                            <option value="cuttlefish ">cuttlefish </option>
                            <option value="blogger ">blogger </option>
                            <option value="flickr ">flickr </option>
                            <option value="viber ">viber </option>
                            <option value="soundcloud ">soundcloud </option>
                            <option value="digg ">digg </option>
                            <option value="tencent-weibo ">tencent-weibo </option>
                            <option value="symfony ">symfony </option>
                            <option value="maxcdn ">maxcdn </option>
                            <option value="etsy ">etsy </option>
                            <option value="facebook-messenger ">facebook-messenger </option>
                            <option value="audible ">audible </option>
                            <option value="think-peaks ">think-peaks </option>
                            <option value="bilibili ">bilibili </option>
                            <option value="erlang ">erlang </option>
                            <option value="x-twitter ">x-twitter </option>
                            <option value="cotton-bureau ">cotton-bureau </option>
                            <option value="dashcube ">dashcube </option>
                            <option value="42-group ">42-group </option>
                            <option value="innosoft ">innosoft </option>
                            <option value="stack-exchange ">stack-exchange </option>
                            <option value="elementor ">elementor </option>
                            <option value="square-pied-piper ">square-pied-piper </option>
                            <option value="pied-piper-square ">pied-piper-square </option>
                            <option value="creative-commons-nd ">creative-commons-nd </option>
                            <option value="palfed ">palfed </option>
                            <option value="superpowers ">superpowers </option>
                            <option value="resolving ">resolving </option>
                            <option value="xbox ">xbox </option>
                            <option value="searchengin ">searchengin </option>
                            <option value="tiktok ">tiktok </option>
                            <option value="square-facebook ">square-facebook </option>
                            <option value="facebook-square ">facebook-square </option>
                            <option value="renren ">renren </option>
                            <option value="linux ">linux </option>
                            <option value="glide ">glide </option>
                            <option value="linkedin ">linkedin </option>
                            <option value="hubspot ">hubspot </option>
                            <option value="deploydog ">deploydog </option>
                            <option value="twitch ">twitch </option>
                            <option value="ravelry ">ravelry </option>
                            <option value="mixer ">mixer </option>
                            <option value="square-lastfm ">square-lastfm </option>
                            <option value="lastfm-square ">lastfm-square </option>
                            <option value="vimeo ">vimeo </option>
                            <option value="mendeley ">mendeley </option>
                            <option value="uniregistry ">uniregistry </option>
                            <option value="figma ">figma </option>
                            <option value="creative-commons-remix ">creative-commons-remix </option>
                            <option value="cc-amazon-pay ">cc-amazon-pay </option>
                            <option value="dropbox ">dropbox </option>
                            <option value="instagram ">instagram </option>
                            <option value="cmplid ">cmplid </option>
                            <option value="facebook ">facebook </option>
                            <option value="gripfire ">gripfire </option>
                            <option value="jedi-order ">jedi-order </option>
                            <option value="uikit ">uikit </option>
                            <option value="fort-awesome-alt ">fort-awesome-alt </option>
                            <option value="phabricator ">phabricator </option>
                            <option value="ussunnah ">ussunnah </option>
                            <option value="earlybirds ">earlybirds </option>
                            <option value="trade-federation ">trade-federation </option>
                            <option value="autoprefixer ">autoprefixer </option>
                            <option value="whatsapp ">whatsapp </option>
                            <option value="slideshare ">slideshare </option>
                            <option value="google-play ">google-play </option>
                            <option value="viadeo ">viadeo </option>
                            <option value="line ">line </option>
                            <option value="google-drive ">google-drive </option>
                            <option value="servicestack ">servicestack </option>
                            <option value="simplybuilt ">simplybuilt </option>
                            <option value="bitbucket ">bitbucket </option>
                            <option value="imdb ">imdb </option>
                            <option value="deezer ">deezer </option>
                            <option value="raspberry-pi ">raspberry-pi </option>
                            <option value="jira ">jira </option>
                            <option value="docker ">docker </option>
                            <option value="screenpal ">screenpal </option>
                            <option value="bluetooth ">bluetooth </option>
                            <option value="gitter ">gitter </option>
                            <option value="d-and-d ">d-and-d </option>
                            <option value="microblog ">microblog </option>
                            <option value="cc-diners-club ">cc-diners-club </option>
                            <option value="gg-circle ">gg-circle </option>
                            <option value="pied-piper-hat ">pied-piper-hat </option>
                            <option value="kickstarter-k ">kickstarter-k </option>
                            <option value="yandex ">yandex </option>
                            <option value="readme ">readme </option>
                            <option value="html5 ">html5 </option>
                            <option value="sellsy ">sellsy </option>
                            <option value="sass ">sass </option>
                            <option value="wirsindhandwerk ">wirsindhandwerk </option>
                            <option value="wsh ">wsh </option>
                            <option value="buromobelexperte ">buromobelexperte </option>
                            <option value="salesforce ">salesforce </option>
                            <option value="octopus-deploy ">octopus-deploy </option>
                            <option value="medapps ">medapps </option>
                            <option value="ns8 ">ns8 </option>
                            <option value="pinterest-p ">pinterest-p </option>
                            <option value="apper ">apper </option>
                            <option value="fort-awesome ">fort-awesome </option>
                            <option value="waze ">waze </option>
                            <option value="cc-jcb ">cc-jcb </option>
                            <option value="snapchat ">snapchat </option>
                            <option value="snapchat-ghost ">snapchat-ghost </option>
                            <option value="fantasy-flight-games ">fantasy-flight-games </option>
                            <option value="rust ">rust </option>
                            <option value="wix ">wix </option>
                            <option value="square-behance ">square-behance </option>
                            <option value="behance-square ">behance-square </option>
                            <option value="supple ">supple </option>
                            <option value="rebel ">rebel </option>
                            <option value="css3 ">css3 </option>
                            <option value="staylinked ">staylinked </option>
                            <option value="kaggle ">kaggle </option>
                            <option value="space-awesome ">space-awesome </option>
                            <option value="deviantart ">deviantart </option>
                            <option value="cpanel ">cpanel </option>
                            <option value="goodreads-g ">goodreads-g </option>
                            <option value="square-git ">square-git </option>
                            <option value="git-square ">git-square </option>
                            <option value="square-tumblr ">square-tumblr </option>
                            <option value="tumblr-square ">tumblr-square </option>
                            <option value="trello ">trello </option>
                            <option value="creative-commons-nc-jp ">creative-commons-nc-jp </option>
                            <option value="get-pocket ">get-pocket </option>
                            <option value="perbyte ">perbyte </option>
                            <option value="grunt ">grunt </option>
                            <option value="weebly ">weebly </option>
                            <option value="connectdevelop ">connectdevelop </option>
                            <option value="leanpub ">leanpub </option>
                            <option value="black-tie ">black-tie </option>
                            <option value="themeco ">themeco </option>
                            <option value="python ">python </option>
                            <option value="android ">android </option>
                            <option value="bots ">bots </option>
                            <option value="free-code-camp ">free-code-camp </option>
                            <option value="hornbill ">hornbill </option>
                            <option value="js ">js </option>
                            <option value="ideal ">ideal </option>
                            <option value="git ">git </option>
                            <option value="dev ">dev </option>
                            <option value="sketch ">sketch </option>
                            <option value="yandex-international ">yandex-international </option>
                            <option value="cc-amex ">cc-amex </option>
                            <option value="uber ">uber </option>
                            <option value="github ">github </option>
                            <option value="php ">php </option>
                            <option value="alipay ">alipay </option>
                            <option value="youtube ">youtube </option>
                            <option value="skyatlas ">skyatlas </option>
                            <option value="firefox-browser ">firefox-browser </option>
                            <option value="replyd ">replyd </option>
                            <option value="suse ">suse </option>
                            <option value="jenkins ">jenkins </option>
                            <option value="twitter ">twitter </option>
                            <option value="rockrms ">rockrms </option>
                            <option value="pinterest ">pinterest </option>
                            <option value="buffer ">buffer </option>
                            <option value="npm ">npm </option>
                            <option value="yammer ">yammer </option>
                            <option value="btc ">btc </option>
                            <option value="dribbble ">dribbble </option>
                            <option value="stumbleupon-circle ">stumbleupon-circle </option>
                            <option value="internet-explorer ">internet-explorer </option>
                            <option value="stubber ">stubber </option>
                            <option value="telegram ">telegram </option>
                            <option value="telegram-plane ">telegram-plane </option>
                            <option value="old-republic ">old-republic </option>
                            <option value="odysee ">odysee </option>
                            <option value="square-whatsapp ">square-whatsapp </option>
                            <option value="whatsapp-square ">whatsapp-square </option>
                            <option value="node-js ">node-js </option>
                            <option value="edge-legacy ">edge-legacy </option>
                            <option value="slack ">slack </option>
                            <option value="slack-hash ">slack-hash </option>
                            <option value="medrt ">medrt </option>
                            <option value="usb ">usb </option>
                            <option value="tumblr ">tumblr </option>
                            <option value="vaadin ">vaadin </option>
                            <option value="quora ">quora </option>
                            <option value="square-x-twitter ">square-x-twitter </option>
                            <option value="reacteurope ">reacteurope </option>
                            <option value="medium ">medium </option>
                            <option value="medium-m ">medium-m </option>
                            <option value="amilia ">amilia </option>
                            <option value="mixcloud ">mixcloud </option>
                            <option value="flipboard ">flipboard </option>
                            <option value="viacoin ">viacoin </option>
                            <option value="critical-role ">critical-role </option>
                            <option value="sitrox ">sitrox </option>
                            <option value="discourse ">discourse </option>
                            <option value="joomla ">joomla </option>
                            <option value="mastodon ">mastodon </option>
                            <option value="airbnb ">airbnb </option>
                            <option value="wolf-pack-battalion ">wolf-pack-battalion </option>
                            <option value="buy-n-large ">buy-n-large </option>
                            <option value="gulp ">gulp </option>
                            <option value="creative-commons-sampling-plus ">creative-commons-sampling-plus </option>
                            <option value="strava ">strava </option>
                            <option value="ember ">ember </option>
                            <option value="canadian-maple-leaf ">canadian-maple-leaf </option>
                            <option value="teamspeak ">teamspeak </option>
                            <option value="pushed ">pushed </option>
                            <option value="wordpress-simple ">wordpress-simple </option>
                            <option value="nutritionix ">nutritionix </option>
                            <option value="wodu ">wodu </option>
                            <option value="google-pay ">google-pay </option>
                            <option value="intercom ">intercom </option>
                            <option value="zhihu ">zhihu </option>
                            <option value="korvue ">korvue </option>
                            <option value="pix ">pix </option>
                            <option value="steam-symbol ">steam-symbol </option>
                        </select> <i class="arrow"></i>
                    </label>
                </div>

                <?php /* ?> ?> ?> ?>
                <div class="sid_ mb10">
                    <h4> Icon </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            @if ($data->icon)
                                <span class="iconid{{ $data->id }}">
                                    <a href="#{{ $data->id }}" class="delete_icon">X</a>
                                    <img src="{{ asset(env('PUBLIC_PATH') . 'uploads/medium/' . $data->icon) }}"
                                        width="150" />
                                    <hr>
                                </span>
                            @endif
                            <input type="file" name="icon" />
                        </div>
                    </div>
                </div>


                <div class="sid_ mb10">
                    <h4> Thumbnail </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            @if ($data->thumbnail)
                                <span class="thumbnailid{{ $data->id }}">
                                    <a href="#{{ $data->id }}" class="delete_thumbnail">X</a>
                                    <img src="{{ asset(env('PUBLIC_PATH') . 'uploads/medium/' . $data->thumbnail) }}"
                                        width="150" />
                                    <hr>
                                </span>
                            @endif
                            <input type="file" name="thumbnail" />
                        </div>
                    </div>
                </div>
                <?php */?>
                <div class="sid_ mb10">
                    <h4> Featured Image </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            @if ($data->page_thumbnail)
                                <span class="page_thumbnailid{{ $data->id }}">
                                    <a href="#{{ $data->id }}" class="delete_pagethumbnail">X</a>
                                    <img src="{{ asset(env('PUBLIC_PATH') . 'uploads/medium/' . $data->page_thumbnail) }}"
                                        width="150" />
                                    <hr>
                                </span>
                            @endif
                            <input type="file" name="page_thumbnail" />
                        </div>
                    </div>
                </div>

                <div class="sid_ mb10">
                    <h4> Banner </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            @if ($data->banner)
                                <span class="bannerid{{ $data->id }}">
                                    <a href="#{{ $data->id }}" class="delete_banner">X</a>
                                    <img src="{{ asset(env('PUBLIC_PATH') . 'uploads/medium/' . $data->banner) }}"
                                        width="150" />
                                    <hr>
                                </span>
                            @endif
                            <input type="file" name="banner" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
@endsection

@section('libraries')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript">
        $('.delete_icon').on('click', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
                type: 'delete',
                url: "{{ url('delete_icon') . '/' }}" + id,
                data: {
                    _token: csrf
                },
                success: function(data) {
                    $('span.iconid' + id).remove();
                },
                error: function(data) {
                    alert(data + 'Error!');
                }
            });
        });
        /****************/
        $('.delete_thumbnail').on('click', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
                type: 'delete',
                url: "{{ url('delete_thumbnail') . '/' }}" + id,
                data: {
                    _token: csrf
                },
                success: function(data) {
                    $('span.thumbnailid' + id).remove();
                },
                error: function(data) {
                    alert(data + 'Error!');
                }
            });
        });
        /**************/
        $('.delete_pagethumbnail').on('click', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
                type: 'delete',
                url: "{{ url('delete_pagethumbnail') . '/' }}" + id,
                data: {
                    _token: csrf
                },
                success: function(data) {
                    $('span.page_thumbnailid' + id).remove();
                },
                error: function(data) {
                    alert(data + 'Error!');
                }
            });
        });
        /****************/
        $('.delete_banner').on('click', function(e) {
            e.preventDefault();
            if (!confirm('Are you sure to delete?')) return false;
            var csrf = $('meta[name="csrf-token"]').attr('content');
            var str = $(this).attr('href');
            var id = str.slice(1);
            $.ajax({
                type: 'delete',
                url: "{{ url('delete_banner') . '/' }}" + id,
                data: {
                    _token: csrf
                },
                success: function(data) {
                    $('span.bannerid' + id).remove();
                },
                error: function(data) {
                    alert(data + 'Error!');
                }
            });
        });

        //
        $(document).ready(function() {
            $('#post_title').on('keyup', function() {
                var post_title;
                post_title = $('#post_title').val();
                post_title = post_title.replace(/[^a-zA-Z0-9 ]+/g, "");
                post_title = post_title.replace(/\s+/g, "-");
                $('#uri').val(post_title);
            });
        });
        // $(function() {
        //     $('select#template[name="price"]').selectpicker();
        // });
    </script>

@endsection
