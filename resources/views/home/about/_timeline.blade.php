<ul class="timeline">
    {{--@foreach $data['timeline'] as $timeline --}}
    <li {{-- $timeline->class --}}>
        <div class="timeline-image"{{-- $timeline->class --}}>
            <img class="img-circle img-responsive" src="img/about/1.jpg" {{-- $timeline->image --}} alt="">
        </div>
        <div class="timeline-panel">
            <div class="timeline-heading">
                <h4>2009-2011 {{-- $timeline->date format month and year --}}</h4>
                <h4 class="subheading">Our Humble Beginnings {{-- $timeline->subheading --}}</h4>
            </div>
            <div class="timeline-body">
                {{-- $timeline->body --}}
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
            </div>
        </div>
    </li>
    {{-- @endforeach --}}
@include('home.about._exampleTimeline')