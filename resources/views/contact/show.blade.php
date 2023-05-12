@include('inc.navbar')
@extends('layouts.account')

@section('content')
  <div class="account-layout  border">
    <div class="account-hdr bg-primary text-white border">
      Viewing Contact Us items
    </div>
    <div class="account-bdy p-3">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="table-responsive pt-3">
            <table class="table table-hover table-striped small">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Created On</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contactUs as $contact)
                  <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->full_name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>{{ $contact->created_at }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
