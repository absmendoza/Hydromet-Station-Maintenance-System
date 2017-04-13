@extends('layouts.app')

@section('content')
    <div class="row">
  <div id="admin" class="col s12">
    <div class="card material-table">
      <div class="table-header">
        <span class="table-title">Material Datatable</span>
        <div class="actions">
          <a href="#add_users" class="modal-trigger waves-effect btn-flat nopadding"><i class="material-icons">person_add</i></a>
          <a href="#" class="search-toggle waves-effect btn-flat nopadding"><i class="material-icons">search</i></a>
        </div>
      </div>
      <table id="datatable">
        <thead>
        <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>E-Mail</th>
            <th>Contact Number</th>
            <th>User</th>
            <th>Author</th>
            <th>Admin</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
          <tr>
                <form action="{{ route('user_list.assign') }}" method="post">
                    <td>{{ $user->emp_id }}</td>
                    <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                    <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td>{{ $user->contact_num }}</td>
                    <td><input type="checkbox" class="filled-in" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user" id="role_user"><label for="role_user"></label></td>
                    <td><input type="checkbox" class="filled-in" {{ $user->hasRole('Head') ? 'checked' : '' }} name="role_head" id="role_head"><label for="role_head"></label></td>
                    <td><input type="checkbox" class="filled-in" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin" id="role_admin"><label for="role_admin"></label></td>
                    {{ csrf_field() }}
                    <td><button type="submit">Assign Roles</button></td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
  </div>
</div>
@endsection