<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.css" integrity="sha512-3uVpgbpX33N/XhyD3eWlOgFVAraGn3AfpxywfOTEQeBDByJ/J7HkLvl4mJE1fvArGh4ye1EiPfSBnJo2fgfZmg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript" src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<style type="text/css">
    .bootstrap-tagsinput .tag {
        background: #428bca;;
        border: 1px solid white;
        padding: 1 6px;
        padding-left: 2px;
        margin-right: 2px;
        color: white;
        border-radius: 4px;
    }
</style>
<div class="modal fade"  id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-xl">

        <div class="modal-content" style="margin-left: 9%">
            <form  id="form-item" method="post"  class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" >
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-header">
                    <h3 style="text-align:left " class="modal-title"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>


                <div class="modal-body">
                    <input type="hidden" id="id" name="id">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add New Product</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputEmail1">Product Name <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"  required="">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputPassword1">Product Code <span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" id="code"value="{{ old('code') }}" name="code" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputEmail1">Category <span class="text-danger">*</span> </label>
                                        <select class="form-control ddd" name="category_id"  id="category_d">
                                            <option disabled="" selected="">==choose category==</option>
                                            @foreach($categories as $row)

                                                <option value="{{ $row->id }}"> {{ $row->category_name }}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputEmail1"> Sub Category <span class="text-danger">*</span> </label>
                                        <select class="form-control" name="sub_category_id"  id="sub_category">
                                            <option disabled="" selected="">==choose category==</option>
{{--                                            @foreach($subcategories as $row)--}}

{{--                                                <option value="{{ $row->id }}"> {{ $row->name }}</option>--}}

{{--                                            @endforeach--}}

                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">

                                        <label for="exampleInputEmail1">Brand <span class="text-danger">*</span> </label>
                                        <select class="form-control" name="brand_id" id="brand">
                                            <option disabled="" selected="">==choose brand==</option>
                                            @foreach($brands as $row)
                                                <option value="{{ $row->id }}">{{ $row->brand_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputPassword1">Pickup Point</label>
                                        <select class="form-control" name="pickup_point_id" id="pickup_point">
                                            <option disabled="" selected="">==choose Pickup point==</option>
                                            @foreach($pickup_point as $row)
                                                <option value="{{ $row->id }}">{{ $row->pickup_point_name  }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputEmail1">Unit <span class="text-danger">*</span> </label>
                                        <input type="text" class=form-control name="unit" id="unit" value="{{ old('unit') }}" required="">
                                    </div>

                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputPassword1">Tags</label><br>
                                        <input type="text"  class="form-control tag"   name="tags" id="tags" data-role="tagsinput">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label for="exampleInput">Purchase Price  </label>
                                        <input type="text" class="form-control" {{ old('purchase_price') }} name="purchase_price" id="purchase_price">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="exampleInput">Selling Price <span class="text-danger">*</span> </label>
                                        <input type="text" name="selling_price" id="selling_price" value="{{ old('selling_price') }}" class="form-control" required="">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="exampleInput">Discount Price </label>
                                        <input type="text" name="discount_price" id="discount_price" value="{{ old('discount_price') }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputPassword1">Warehouse</label>
                                        <select class="form-control" name="warehouse_id" id="warehouse_id">
                                            <option disabled="" selected="">==choose Warehouse==</option>
                                            @foreach($warehouses as $row)
                                                <option value="{{ $row->id }}">{{ $row->warehouse_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputPassword1">Stock</label>
                                        <input type="text" name="stock_quantity" id="stock_quantity" value="{{ old('stock_quantity') }}" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputEmail1">Color</label><br>
                                        <input type="text" class="form-control" value="{{ old('color') }}" data-role="tagsinput" name="color" id="color" />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="exampleInputPassword1">Size</label><br>
                                        <input type="text" class="form-control" value="{{ old('size') }}" data-role="tagsinput" name="size" id="size"  />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="exampleInputPassword1">Product Details</label>
                                        <textarea class="form-control textarea" name="description" id="description">{{ old('description') }}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="exampleInputPassword1">Video Embed Code</label>
                                        <input class="form-control" name="video" id="video" value="{{ old('video') }}" placeholder="Only code after embed word">
                                        <small class="text-danger">Only code after embed word</small>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card -->
                    <!-- right column -->
                    <div class="col-md-6">
                        <!-- Form Element sizes -->
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Main Thumbnail <span class="text-danger">*</span> </label><br>
                                    <input type="file" name="thumbnail" id="thumbnail"required="" accept="image/*" class="dropify">
                                </div><br>
                                <div class="">
                                    <table class="table table-bordered" id="dynamic_field">
                                        <div class="card-header">
                                            <h3 class="card-title">More Images (Click Add For More Image)</h3>
                                        </div>
                                        <tr>
                                            <td><input type="file" accept="image/*" id="images" name="images[]" class="form-control name_list" /></td>
                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card p-4">
                                    <h6>Featured Product</h6>
                                    <input type="checkbox" name="featured" id="featured" value="1" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                </div>

                                <div class="card p-4">
                                    <h6>Today Deal</h6>
                                    <input type="checkbox" name="today_deal" id="today_deal" value="1" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                </div>

                                <div class="card p-4">
                                    <h6>Slider Product</h6>
                                    <input type="checkbox" name="product_slider" id="product_slider" value="1"  data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                </div>

                                <div class="card p-4">
                                    <h6>Trendy Product</h6>
                                    <input type="checkbox" name="trendy" id="trendy" value="1"  data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                </div>

                                <div class="card p-4">
                                    <h6>Status</h6>
                                    <input type="checkbox" name="status" id="status" value="1" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>

<script type="text/javascript">

    $(document).ready(function (){

        $('#category_d').on('change',function (){

            let cat_id=this.value;

            $.get('/cat?category='+cat_id,function (data){
                $('#sub_category').html(data);
            })
        });
    })
    $(document).ready(function(){
        var postURL = "<?php echo url('addmore'); ?>";
        var i=1;

        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" accept="image/*" name="images[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id+'').remove();
        });
    });
</script>
</div>
