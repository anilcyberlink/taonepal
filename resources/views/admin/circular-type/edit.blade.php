@extends('admin.master')
@section('title', 'Donations Type')
@section('breadcrumb')
    <a href="{{ route('donations.index') }}" class="btn btn-primary btn-sm">List</a>
@endsection
@section('content')
    <form class="form-horizontal" role="form" action="{{ route('donations.update', $data->id) }}" method="post"
        enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT" />
        <div class="col-md-8">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit Donation Type</span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Donation Type </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="circular_type" name="circular_type" class="form-control"
                                    placeholder="" value="{{ $data->circular_type }}" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Uri</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="uri" name="uri" class="form-control" placeholder=""
                                    value="{{ $data->uri }}" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Description</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <textarea name="description" id="description" class="form-control" rows="5">{{ $data->description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Ordering </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="number" min="1" id="ordering" name="ordering" class="form-control" placeholder=""
                                    value="{{ $data->ordering }}" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label" for="textArea3"> </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="submit" class="btn btn-primary btn-lg" value="Submit" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#circular_type').on('keyup', function() {
            var circular_type;
            circular_type = $('#circular_type').val();
            circular_type = circular_type.replace(/[^a-zA-Z0-9 ]+/g, "");
            circular_type = circular_type.replace(/\s+/g, "-");
            $('#uri').val(circular_type);
        });
    });
</script>
@endsection
