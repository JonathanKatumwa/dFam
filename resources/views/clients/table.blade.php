<div class="table-responsive">
    <table class="table" id="clients-table">
        <thead>
            <tr>
                <th>First Name</th>
        <th>Last Name</th>
        <th>Dob</th>
        <th>Age</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Address</th>
        <th>Current Address</th>
        <th>Nationality</th>
        <th>Passport No</th>
        <th>Status</th>
        <th>Date Registered</th>
        <th>Image</th>
        <th>Role</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $clients)
            <tr>
                <td>{{ $clients->first_Name }}</td>
            <td>{{ $clients->last_Name }}</td>
            <td>{{ $clients->dob }}</td>
            <td>{{ $clients->age }}</td>
            <td>{{ $clients->email }}</td>
            <td>{{ $clients->phone_No }}</td>
            <td>{{ $clients->address }}</td>
            <td>{{ $clients->current_address }}</td>
            <td>{{ $clients->nationality }}</td>
            <td>{{ $clients->passport_No }}</td>
            <td>
            @if($clients->status=1)
            <div class="btn btn-success">Active</div>
            @else
            <div class="btn btn-danger">In-Active</div>
            @endif
            </td>
            <td>{{ $clients->date_Registered }}</td>
            <td>{{ $clients->image }}</td>
            <td>{{ $clients->role }}</td>
                <td>
                    {!! Form::open(['route' => ['clients.destroy', $clients->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clients.show', [$clients->id]) }}" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">VIEW</i></a>
                        <a href="{{ route('clients.edit', [$clients->id]) }}" class='btn btn-info btn-xs'><i class="glyphicon glyphicon-edit">UPDATE</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

