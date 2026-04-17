@extends('admin.master')
@section('title', 'Donations Type')
@section('breadcrumb')
    <a href="{{ route('donations.index') }}" class="btn btn-primary btn-sm">List</a>
@endsection
@section('content')
    <form class="form-horizontal" role="form" action="{{ route('donations.store') }}" method="post"
        enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-8">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">New Circular Type</span>
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label">Circular Type</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="circular_type" name="circular_type" class="form-control"
                                    placeholder="" />
                                <input type="hidden" id="uri" name="uri" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Description</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <textarea name="description" id="description" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label"> Ordering </label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="number" min="1" id="ordering" name="ordering" class="form-control" value="{{ $ordering }}" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label" for="textArea3"></label>
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
  $(document).ready(function(){
    var circular_type;
    $('#circular_type').on('keyup', function(){
      circular_type = $('#circular_type').val();
      circular_type=circular_type.replace(/[^a-zA-Z0-9 ]+/g,"");
      circular_type=circular_type.replace(/\s+/g, "-");
      $('#uri').val(circular_type);
    });
  });
</script>
@endsection
