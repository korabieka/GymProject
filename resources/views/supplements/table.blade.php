<table class="table table-responsive" id="supplements-table">
    <thead>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Thumb</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($supplements as $supplement)
        <tr>
            <td>{!! $supplement->name !!}</td>
            <td>{!! $supplement->price !!}</td>
            <td>{!! $supplement->description !!}</td>
            <td>{!! $supplement->thumb !!}</td>
            <td>
                {!! Form::open(['route' => ['supplements.destroy', $supplement->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('supplements.show', [$supplement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('supplements.edit', [$supplement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>