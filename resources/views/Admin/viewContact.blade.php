@extends('layouts.Admin.dashboard')
@section('admincontent')


<style>

html,
body,
.intro {
  height: 100%;
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

thead th {
  color: #fff;
}

.card {
  border-radius: .5rem;
}

.table-scroll {
  border-radius: .5rem;
}

.table-scroll table thead th {
  font-size: 1.25rem;
}
thead {
  top: 0;
  position: sticky;
}

    </style>

<section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <h1>Community Messages</h1>
                <table class="table table-striped mb-0">
                    <thead style="background-color: #002d72;">
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Message</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                      <tr>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->message}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection