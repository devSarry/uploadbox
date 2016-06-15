<!-- Header !!EDIT FORM Title - Table!!-->
<header style="background-image: url('{{url(( ! empty($data['title']) ? $title : 'img/header-bg.jpg')) }}')">
    <div class="container">
        <div class="intro-text">
            {{-- $data['banner']->lead_in --}}
            <div class="intro-lead-in">$some variable and db call that gets this info</div>
            {{-- $data['banner']->heading --}}
            <div class="intro-heading">It's Nice To Meet You</div>
            <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
        </div>
    </div>
</header>