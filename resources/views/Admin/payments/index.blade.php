@extends('layouts.Admin.dashboard')

@section('admincontent')
<h3 class="text-center p-3">Package Price List</h3>
<table class="table table-hover p-3">

 <tr>
   <th>Updated Date</th>
   <th>Vehicle Class</th>
   <th>Price (Rs.)</th>
   <th>Action</th>
   
   <!-- <th width="280px">Action</th> -->
 </tr>
 @foreach ($costs as $cost)
  <tr>
    
    <td>{{ $cost->updated_at }}</td>
    <td>{{ $cost->class }}</td>
    <td>{{ $cost->cost}}</td>
    <td><a class="btn btn-xs btn-info" href="{{ route('costs.edit',$cost->id) }}">edit</a>
    
    </td>
    
    
  </tr>
  @endforeach
</table>

@endsection