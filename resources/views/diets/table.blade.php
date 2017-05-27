<table class="table table-responsive" id="diets-table">
    <thead>
        <th>Type</th>
        <th>Content</th>
        <th>Time</th>
        <th>Thumb</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($diets as $diet)
        <tr>
            <td>{!! $diet->type !!}</td>
            <td>{!! $diet->content !!}</td>
            <td>{!! $diet->time !!}</td>
            <td>{!! $diet->thumb !!}</td>
            <td>
                {!! Form::open(['route' => ['diets.destroy', $diet->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('diets.show', [$diet->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('diets.edit', [$diet->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>