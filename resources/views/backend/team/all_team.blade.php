@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
 
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">LISTE DE L'EQUIPE</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                @if(Auth::User()->can('equipe.ajouter'))
                <a href="{{route('add.team')}}" class="btn btn-primary px-5 "> Ajouter Dans L'équipe</a>
                @endif
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
   
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      
                            
                        
                        <tr>
                            <th>S1</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Postion</th>
                            <th>Facebook</th>
                            @if(Auth::User()->can('equipe,modifer'))
                            <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($team as $key=>$item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><img src="{{asset($item->image)}}" alt="" style="width: 70px; height: 40px;"></td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->postion}}</td>
                            <td>{{$item->facebook}}</td>
                            <td>
                                
                                <a href=" {{route('edit.team',$item->id)}} " class="btn btn-warning px-3 radius-30"> Modifier</a>
                               
                                @if(Auth::User()->can('equipe.supprimer'))
                                <a href="{{route('delete.team',$item->id)}}" class="btn btn-danger px-3 radius-30" id="delete"> Supprimer</a>
                                @endif
                            </td>
                        </tr>
                      @endforeach
                       
                    </tbody>
               
                </table>
            </div>
        </div>
    </div>
   
    <hr/>
   
</div>
@endsection