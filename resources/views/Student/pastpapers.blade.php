@extends('layouts.Student.dashboard')
@section('studentcontent')


<h2>Download Study Materials</h2>
<br>

<table class="table table-dark table-striped">
    <tr>
        <td>Sinhala medium</td>
        <td><a href="sinhala.pdf"><i class="fa fa-download"></i> Download</td>
    </tr>
    <tr>
        <td>Tamil medium</td>
        <td><a href="tamil.pdf"><i class="fa fa-download"></i> Download</td>

</tr>
<tr>
    <td>Sinhala medium Answer</td>
    <td><a href="sinhalaAnswer.pdf"><i class="fa fa-download"></i> Download</td>
    
</tr>

</table>
<button type="button" class="btn btn-primary">Home</button>
<a class="btn btn-primary" href="{{ route('quiz') }}">Quiz</a>

  @endsection