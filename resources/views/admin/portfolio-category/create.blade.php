@extends('admin.master')
@section('title', 'Post Category')
@section('breadcrumb')
    <a href="{{ route('programcategory.index') }}" class="btn btn-primary btn-sm">List</a>
@endsection
@section('content')
    <form class="form-horizontal" role="form" action="{{ route('programcategory.store') }}" method="post"
        enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="col-md-8">
            <!-- Input Fields -->
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Create Post Category</span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label">Category Title</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="category" name="category" class="form-control" placeholder="" required/>
                            </div>
                            <input type="hidden" id="uri" name="uri" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label">Caption</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <input type="text" id="" name="category_caption" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputStandard" class="col-lg-3 control-label">Content</label>
                        <div class="col-lg-8">
                            <div class="bs-component">
                                <div class="bs-component">
                                    <textarea class="form-control" id="" name="category_content" rows="3"
                                        autocomplete="off"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="admin-form">
                <div class="sid_bvijay mb10">
                    <div class="hd_show_con">
                        <div class="publice_edi">
                            Status: <a href="avoid:javascript;" data-toggle="collapse" data-target="#publish_1">Active</a>
                        </div>
                    </div>
                    <footer>
                        <div id="publishing-action">
                            <input type="submit" class="btn btn-primary btn-lg" value="Publish" />
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                    <div class="clearfix"></div>
                </div>
                <div class="sid_ mb10">
                    <label class="field select">
                        <select id="template" name="template">
                            @foreach ($templates as $key => $template)
                                <option value="{{ $key }}">{{ ucfirst($template) }}</option>
                            @endforeach
                        </select>
                        <i class="arrow"></i>
                    </label>
                </div>

                <div class="sid_bvijay mb10">
                    <label class="field text">
                        <input type="number" id="" name="ordering" class="form-control" placeholder="Order" value="{{ $post_order }}" min="0"/>
                    </label>
                </div>

                <div class="sid_bvijay mb10">
                    <h4> Thumbnail </h4>
                    <div class="hd_show_con">
                        <div id="xedit-demo">
                            <input type="file" name="thumbnail" />
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
            $('#category').on('keyup', function() {
                var category;
                category = $('#category').val();
                category = category.replace(/[^a-zA-Z0-9 ]+/g, "");
                category = category.replace(/\s+/g, "-");
                $('#uri').val(category);
            });
        });
    </script>
@endsection
