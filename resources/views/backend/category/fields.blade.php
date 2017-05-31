<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('name_en') ? ' has-error' : '' !!} ">
    {!! Form::label('name_en', 'name_en') !!}
    {!! Form::text('name_en', null, ['class' => 'form-control']) !!}

    @if ($errors->has('name_en'))
        <span class="help-block">
            <strong>{!! $errors->first('name_en') !!}</strong>
        </span>
    @endif
</div>
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('name_de') ? ' has-error' : '' !!} ">
    {!! Form::label('name_de', 'name_de') !!}
    {!! Form::text('name_de', null, ['class' => 'form-control']) !!}

    @if ($errors->has('name_de'))
        <span class="help-block">
            <strong>{!! $errors->first('name_de') !!}</strong>
        </span>
    @endif
</div>
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('slug') ? ' has-error' : '' !!} ">
    {!! Form::label('slug', 'slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}

    @if ($errors->has('slug'))
        <span class="help-block">
            <strong>{!! $errors->first('slug') !!}</strong>
        </span>
    @endif
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categories.index') !!}" class="btn btn-default">Cancel</a>
</div>