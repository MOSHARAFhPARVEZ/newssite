@extends('layouts\dashboard\dashboardmaster')

@section('content')

{{-- pages tittle part --}}
<div class=" col-lg-12 page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Make News</a></li>
    </ol>
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


{{-- edit Make News part --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Make News</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('makenews.update',$makenews->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <img src="{{ asset('uploads/news_photo') }}/{{ $makenews->news_thamnil }}" width="100"
                            class="img-fluid">
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">News Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{ $makenews->news_title }}" name="news_title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">News Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="news_time_date" value="{{ $makenews->news_time_date }}">
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
                            <select class="form-control" name="category_name"  >
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
                            <input type="text" class="form-control" value="{{ $makenews->description }}"    name="description">
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
{{-- edit Make News part --}}

@endsection

