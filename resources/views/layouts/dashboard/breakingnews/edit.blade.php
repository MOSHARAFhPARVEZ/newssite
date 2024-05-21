@extends('layouts\dashboard\dashboardmaster')

@section('content')

{{-- pages tittle part --}}
<div class=" col-lg-12 page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Breaking News</a></li>
    </ol>
</div>
{{-- pages tittle part --}}


{{-- edit Breaking News part --}}
<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Edit Breaking News </h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="{{ route('breakingnews.update',$breakingnews->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">News Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="breaking_title"
                                value="{{ $breakingnews->breaking_title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">News Stutas</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="stutas">
                                <option value="">Select One Category</option>
                                <option value="0"> Hide </option>
                                <option value="1"> Show </option>
                            </select>
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
{{-- edit Breaking News part --}}

@endsection

