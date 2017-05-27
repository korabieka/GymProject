<!-- Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'English Name:') !!}
    {!! Form::text('english_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Arabic Name:') !!}
    {!! Form::text('arabic_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    <select name="type" class="form-control">
        <option value="Bulking">Bulking</option>
        <option value="Shredding">Shredding</option>
    </select>
</div>

<!-- Content Field -->
<div class="form-group col-sm-12">
    {!! Form::label('content', 'English Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('content', 'Arabic Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Field -->
<div class="form-group col-sm-12">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::number('number', null, ['class' => '']) !!} Days 
</div>


<!-- Thumb Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumb', 'Thumb:') !!}

    <input type="file" name="thumb"> 
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('diets.index') !!}" class="btn btn-default">Cancel</a>
</div>
