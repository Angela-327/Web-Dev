@extends('common.main')

@section('content')

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Username</th>
                    <th scope="col">City</th>
                    <th scope="col">Zip</th>
                </tr>
            </thead>

            <tbody>
                @forelse($users as $users)
                    <tr>
                        <th scope="row">{{  $users->id }}</th>
                        <td>{{  $users->first_name  }}</td>
                        <td>{{  $users->last_name  }}</td>
                        <td>{{  $users->username  }}</td>
                        <td>{{  $users->city  }}</td>
                        <td>{{  $users->zip  }}</td>
                
                @empty
                    <tr>
                        <td colspan="3">
                            No user found.
                        </td>
                    </tr>
                @endforelse
                </tr>
            </tbody>
        </table>
    </div>

@endsection