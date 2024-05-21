@extends('layouts\dashboard\dashboardmaster')

@section('content')

{{-- pages tittle part --}}
<div class=" col-lg-12 page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit News Tag</a></li>
    </ol>
</div>
{{-- pages tittle part --}}


{{-- edit Category part --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit News Tag</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('newstag.update',$news_tag->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">News Tag Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="news_tag"
                                value="{{ $news_tag->news_tag }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- edit Category part --}}

@endsection

