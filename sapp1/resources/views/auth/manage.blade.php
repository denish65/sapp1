<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>




    
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">







</head>
<body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js" ></script>

<script>
    $(document).ready(function () {
 $('#tb').DataTable();
});
</script>

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                

                <style>

                    .body
                    {
                        width: 100%;
                        height: 600px;
                        /* background-color: antiquewhite; */
                    }
               
                    .bd1
                    {
                        width: 400px;
                        height: 600px;
                        background-color: rgb(224, 255, 255);
                        position: absolute;
                        top: 138px;
                        left: 0px;
                    }
                    .bd2
                    {
                       width: 1135px;
                        height: 600px;
                        background-color: rgb(255, 244, 244);
                        position: absolute;
                        top: 138px;
                        left: 400px;
                    }
               
                    form{
                        width: 70%;
                        margin-left: 5%;
                    }
                   </style>
               
                   <div class="body" >
               
               
                       <div class="bd1 " >

                        <div style="margin-left: 15%;">
                            <br><br>

                        <p><a href="dashboard"> Dashboard</a></p>
                        <p><a href="add"> Add</a></p>
                        <p><a href="manage"> Manage</a></p>
                        <p><a href="addproduct"> addproduct</a></p>
                        <p><a href="manageproduct"> manageproducts</a></p>
                      

                          </div>
                          
               
                       </div>
               
               
               
                       <div class="bd2" >
               
                           
               
               
                              
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
                                <th> catesdesc </th>
                                <th> Action </th>
                            </tr>
                        </thead>


                         
                                
                           <tbody>
                            @foreach ($data as $row )
                            <tr>
                                <td> {{ $row->id}}</td>
                                <td> {{ $row->catname}}</td>
                                <td>{{ $row->catdesc}} </td>
                                <td> 
                                    <a href="{{ URL("/manage/{$row->id}")}}" class="btn btn-danger btn-sm" title="click to delete Category?" onclick="return confirm('Are you sure to Delete your category ?')"><i class="bi bi-trash"></i> </a>

                                    <span class="text-center"> | </span>

                                    <a href="{{  URL("/edit/{$row->id}")}}"  class="btn btn-success btn-sm" title="click to Edit Category?" onclick="return confirm('Are you sure to Edit your category ?') " >  <i class="bi bi-pencil-square" ></i>  </a>



                                </td>
                            </tr>
                            @endforeach
                            </tbody>










                                   </div>
               
                           
               
               
               
               
                       </div>
               
               
               
               
               
                   </div>
               
               
               
               

            </div>
        </div>
    </div> 


   






</x-app-layout>
