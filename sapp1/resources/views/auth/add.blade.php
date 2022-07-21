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
</head>
<body>

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
                               <div class="alert alert-success" >
                               <span class="text-center" >
                                   <b> {{ session('success')}} </b>
                               </span>
                           </div>
                           @endif
                                   
                                   <form role="form" method="POST"  enctype="multipart/form-data" >
                                               
                                       @csrf
                                       <div class="form-group">
                                                   <label> category add</label>
                                                   <input class="form-control" name="catname" type="text"  class="@error('catname') is-invalid @enderror form-control col-md-8" >
                                               
                                                   
                                                   <br>
                                                   @error('catname')
                                                   <div class="alert alert-danger col-md-8">{{ $message }}</div>
                                                   @enderror
                                                   <br><br><br>
                                               
                                               
                                                   
                                               
                                               </div>
               
                                               <div class="form-group">
                                                   <label>category description</label>
                                                   <textarea class="form-control" name="catdesc" rows="3" class="@error('catname') is-invalid @enderror form-control col-md-8"></textarea>
                                               
                                                   <br>
                                                   @error('catdesc')
                                                   <div class="alert alert-danger col-md-8">{{ $message }}</div>
                                                   @enderror
                                               <br><br><br>
                                               </div>
                                         
                                        
                                               <button type="submit" name="sub" class="btn btn-info">Send Message </button>
               
                                           </form>
                                   </div>
               
                           
               
               
               
               
                       </div>
               
               
               
               
               
                   </div>
               
               
               
               

            </div>
        </div>
    </div> 


   






</x-app-layout>
