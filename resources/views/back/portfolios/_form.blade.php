<form method="POST" action={{ url('portfolios') }} accept-charset="UTF-8" class="form-horizontal"
      enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <image-upload-box name="photo_name" action="{{url('photos')}}"></image-upload-box>
    </div>
    <div>

        <label for="title" class="control-label">Title</label>
        <input class="form-control" name="title" type="text" id="title">


    </div>
    <div class="form-group">

        <label for="client" class="control-label">Client</label>
        <input class="form-control" name="client" type="text" id="client">


    </div>
    <div class="form-group">

        <label for="date" class="control-label">Date</label>
        <input class="form-control" name="date" type="date" id="date">


    </div>
    <div class="form-group">

        <label for="service" class="control-label">Service</label>
        <input class="form-control" name="service" type="text" id="service">


    </div>
    <div class="form-group">

        <label for="description" class="control-label">Description</label>
        <textarea class="form-control" rows="3" name="description" cols="50" id="description"></textarea>


    </div>
    <button class="btn btn-primary btn-raised" type="submit">Save form</button>
    <button class="btn btn-default btn-raised" type="reset">Clear form</button>
</form>

@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif