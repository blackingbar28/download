<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('category_id') ? ' has-error' : '' !!} ">
    {!! Form::label('category_id', 'category_id') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @if ($errors->has('category_id'))
        <span class="help-block">
            <strong>{!! $errors->first('category_id') !!}</strong>
        </span>
    @endif
</div>
<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('title_en') ? ' has-error' : '' !!} ">
    {!! Form::label('title_en', 'title_en') !!}
    {!! Form::text('title_en', null, ['class' => 'form-control']) !!}

    @if ($errors->has('title_en'))
        <span class="help-block">
            <strong>{!! $errors->first('title_en') !!}</strong>
        </span>
    @endif
</div>
<!-- Title de -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('title_de') ? ' has-error' : '' !!} ">
    {!! Form::label('title_de', 'title_de') !!}
    {!! Form::text('title_de', null, ['class' => 'form-control']) !!}

    @if ($errors->has('title_de'))
        <span class="help-block">
            <strong>{!! $errors->first('title_de') !!}</strong>
        </span>
    @endif
</div>
<!-- description -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('description') ? ' has-error' : '' !!} ">
    {!! Form::label('description', 'description') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}

    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{!! $errors->first('description') !!}</strong>
        </span>
    @endif
</div>
<!-- content_en -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('content_en') ? ' has-error' : '' !!} ">
    {!! Form::label('content_en', 'content_en') !!}
    {!! Form::textarea('content_en', null, ['class' => 'form-control']) !!}

    @if ($errors->has('content_en'))
        <span class="help-block">
            <strong>{!! $errors->first('content_en') !!}</strong>
        </span>
    @endif
</div>
<!-- content_de -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('content_de') ? ' has-error' : '' !!} ">
    {!! Form::label('content_de', 'content_de') !!}
    {!! Form::textarea('content_de', null, ['class' => 'form-control']) !!}

    @if ($errors->has('content_de'))
        <span class="help-block">
            <strong>{!! $errors->first('content_de') !!}</strong>
        </span>
    @endif
</div>
<!-- year -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('year') ? ' has-error' : '' !!} ">
    {!! Form::label('year', 'year') !!}
    {!! Form::text('year', null, ['class' => 'form-control']) !!}

    @if ($errors->has('year'))
        <span class="help-block">
            <strong>{!! $errors->first('year') !!}</strong>
        </span>
    @endif
</div>
<!-- Image -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('image') ? ' has-error' : '' !!} ">
    {!! Form::label('image', 'image') !!}
    {!! Form::file('image', ['name' => 'image', 'id' => 'image']) !!}

    @if ($errors->has('image'))
        <span class="help-block">
            <strong>{!! $errors->first('image') !!}</strong>
        </span>
    @endif
</div>
<!-- star -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('star') ? ' has-error' : '' !!} ">
    {!! Form::label('star', 'star') !!}
    {!! Form::text('star', null, ['class' => 'form-control']) !!}

    @if ($errors->has('star'))
        <span class="help-block">
            <strong>{!! $errors->first('star') !!}</strong>
        </span>
    @endif
</div>
<!-- slug -->
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