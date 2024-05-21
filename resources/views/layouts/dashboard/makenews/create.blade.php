@extends('layouts\dashboard\dashboardmaster')

@section('content')



{{-- pages tittle part --}}
<div class="container">
    <div class="row">
        <div class=" col-lg-12 page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Make News</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add News</a></li>
            </ol>
        </div>
    </div>
</div>
{{-- pages tittle part --}}


{{-- all error part --}}
@if($errors->all())
<div class="col-lg-12">
    <div class="alert alert-danger solid alert-dismissible fade show">
        @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
        @endforeach
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                    class="mdi mdi-close"></i></span>
        </button>
    </div>
</div>
@endif
{{-- all error part --}}



{{-- Add Category part --}}
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add News</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('makenews.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">News Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="News Title" name="news_title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">News Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="news_time_date">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">News Thamnil</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="news_thamnil"
                                onchange="document.getElementById('web').src = window.URL.createObjectURL(this.files[0])">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <img src="" id="web" style="width: 120px ; heighr: 120px;">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">News Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="category_name">
                                <option value="">Select One Category</option>
                                @foreach ($categories as $category )
                                <option value="{{ $category->id }}"> {{ $category->category_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Description" name="description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Add Category part --}}

@push('footer_script')
<script>
    $('#summernote').summernote({
        placeholder: 'Write Your News',
        tabsize: 2,
        height: 100,

    });

</script>
@endpush

@endsection
