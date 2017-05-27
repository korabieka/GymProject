<table class="table table-responsive" id="workouts-table">
    <thead>
        <th>Type</th>
        <th>Content</th>
        <th>Time</th>
        <th>Photo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($workouts as $workout)
        <tr>
            <td>{!! $workout->type !!}</td>
            <td>{!! $workout->content !!}</td>
            <td>{!! $workout->time !!}</td>
            <td>{!! $workout->photo !!}</td>
            <td>
                {!! Form::open(['route' => ['workouts.destroy', $workout->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('workouts.show', [$workout->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('workouts.edit', [$workout->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>