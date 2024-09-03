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
                    <li class="breadcrumb-item active" aria-current="page">Message Contact</li>
                </ol>
            </nav>
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
                            <th>email</th>
                            <th>phone</th>
                            <th>sujet</th>
                            <th>message</th>
                            <th>heure</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($contact as $key=>$item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->subject}}</td>
                            <td>{{$item->message}}</td>
                            <td>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>

                            
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