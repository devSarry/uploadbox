<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">$name of the section in settings</h2>
                <h3 class="section-subheading text-muted">$section sub heading</h3>
            </div>
        </div>
        <div class="row">
            @foreach($data['portfolio'] as $portfolio)
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal{{$portfolio->id}}" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{$portfolio->photo_path}}" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>$Portfolio title</h4>
                    <p class="text-muted">{{ $portfolio->description  }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
