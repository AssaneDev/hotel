@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Ajouter Admin</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Ajouter Un Admin</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">
               
         <div class="col-lg-12">
            <div class="card">
                <div class="card-body p-4">
                    
                        <form class="row g-3" id="myForm" action="{{route('store.admin')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-6">
                                <label for="input1" class="form-label">Nom Admin</label>
                                <input type="text" name="name" class="form-control" >
                                
                            </div>
                            <div class="col-md-6">
                                <label for="input1" class="form-label">Email Admin</label>
                                <input type="email" name="email" class="form-control" >
                                
                            </div>
                            <div class="col-md-6">
                                <label for="input1" class="form-label">Telephone Admin</label>
                                <input type="text" name="phone" class="form-control" >
                                
                            </div>
                            <div class="col-md-6">
                                <label for="input1" class="form-label">Adresse Admin</label>
                                <input type="text" name="address" class="form-control" >
                                
                            </div>
                            <div class="col-md-6">
                                <label for="input1" class="form-label">Mot de pass Admin</label>
                                <input type="password" name="password" class="form-control" >
                                
                            </div>

                            <div class="col-md-6">
                                <label for="input1" class="form-label">Role</label>
                                <select name="roles" class="form-select mb-3" aria-label="Default select example">
									<option  selected="">Selectionnez Une Role</option>

                                    @foreach ($roles as $role)
                                           <option value="{{$role->name}}">{{$role->name}}</option>
                                    @endforeach
									
								
								</select>
                               
                            </div>

                            
                            
                           

                        
                        
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Enrigistrer</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<
@endsection