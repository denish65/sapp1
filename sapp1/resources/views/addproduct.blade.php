
@extends("index")
@section("title")
add product
@endsection
@section("addproduct")

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Forms Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Element Examples
                        </div>
                        <div class="panel-body">
                          
                                    <h3>Add category</h3>
                                   
                                   
                                   
                                   

                            @if(Session("success"))
                        <div class="alert alert-success" >
                        <span class="text-center" >
                            <b> {{ session('success')}} </b>
                        </span>
                    </div>
                    @endif
                       
                            <form role="form" method="POST" enctype="multipart/form-data" >
                                        
                                @csrf
                                <div class="form-group">
                                            <label> category name</label>
                                            <select class="form-control" name="catname" type="text"  class="@error('catname') is-invalid @enderror form-control col-md-8" >
                                            
                                                <option value="">select category</option>

                                                @foreach ($category as $key=>$category)
                                                    
                                                

                                                <option value="{{ $key }}">{{ $category}}</option>
                                                @endforeach

                                            </select>
                                                <br>
                                            @error('catname')
                                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                                            @enderror
                                            <br><br><br>
                                        </div>



                                        <div class="form-group">
                                            <label> product name</label>
                                            <input class="form-control" name="pname" type="text"  class="@error('pname') is-invalid @enderror form-control col-md-8" >
                                            <br>
                                            @error('pname')
                                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                                            @enderror
                                            <br><br><br>
                                        </div>




                                        <div class="form-group">
                                            <label> product image</label>
                                            <input class="form-control" name="pimg" type="file"  class="@error('pimg') is-invalid @enderror form-control col-md-8" >
                                            <br>
                                            @error('pimg')
                                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                                            @enderror
                                            <br><br><br>
                                        </div>






                                        <div class="form-group">
                                            <label> product qty</label>
                                            <input class="form-control" name="qty" type="number"  class="@error('qty') is-invalid @enderror form-control col-md-8" >
                                            <br>
                                            @error('qty')
                                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                                            @enderror
                                            <br><br><br>
                                        </div>




                                        <div class="form-group">
                                            <label> product price</label>
                                            <input class="form-control" name="price" type="text"  class="@error('price') is-invalid @enderror form-control col-md-8" >
                                            <br>
                                            @error('price')
                                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                                            @enderror
                                            <br><br><br>
                                        </div>















                                        <div class="form-group">
                                            <label>product description</label>
                                            <textarea class="form-control" name="pdesc" rows="3" class="@error('pdesc') is-invalid @enderror form-control col-md-8"></textarea>
                                        
                                            <br>
                                            @error('pdesc')
                                            <div class="alert alert-danger col-md-8">{{ $message }}</div>
                                            @enderror
                                        <br><br><br>
                                        </div>
                                  
                                 
                                        <button type="submit" name="sub" class="btn btn-info">Add Product </button>

                                    </form>
                            </div>
                                 
    </div>
                                
                               
        @endsection