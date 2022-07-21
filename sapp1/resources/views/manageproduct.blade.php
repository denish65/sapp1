
@extends("index")
@section("title")
add product
@endsection
@section("manageproduct")






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
                


                            <center>
                                @if(Session("success"))
                                <div class="alert alert-success">
                                   <span class="text-center">
                                       <b> {{ session('success') }} </b>
                                   </span>
                                </div>
                                @endif
                                
                                @if(Session("del"))
                                <div class="alert alert-danger">
                                   <span class="text-center">
                                       <b> {{ session('del') }} </b>
                                   </span>
                                </div>
                                @endif

                                <table id="tb" class="table" style="width: 80%">
                                     
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th> catname</th>
                                        <th> pname </th>
                                        <th> pimg </th>
                                        <th> qty </th>
                                        <th> price </th>
                                        <th> pdesc </th>
                                        <th> Action </th>

                                        
                                    </tr>
                                </thead>
                                   <tbody>
                                    @foreach ($data as $row )
                                    <tr>
                                        <td> {{ $row->id}}</td>
                                        <td> {{ $row->catname}} </td>
                                        <td>  {{ $row->pname}} </td>
                                        <td> <img src="{{ asset('uploads/products/'.$row->img)}}"  width="150px" height="150px" alt=""> </td>
                                        <td> {{ $row->qty}} </td>
                                        <td> {{ $row->price}} </td>
                                        <td> {{ $row->pdesc}} </td>
                                      
                                        <td> 
                                            <a href="{{ URL("manageproduct/{$row->id}")}}" class="btn btn-danger btn-sm" title="click to delete Category?" onclick="return confirm('Are you sure to Delete your category ?')"><i class="bi bi-trash"></i> </a>

                                            <span class="text-center"> | </span>

                                            <a href="{{ URL("editproduct/{$row->id}")}}"  class="btn btn-success btn-sm" title="click to Edit Category?" onclick="return confirm('Are you sure to Edit your category ?') " >  <i class="bi bi-pencil-square" ></i>  </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>








                            </center>



                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div>
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>


        @endsection