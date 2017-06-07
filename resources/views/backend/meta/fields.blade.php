<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('article_id') ? ' has-error' : '' !!} ">
    {!! Form::label('article_id', 'article_id') !!}
    {!! Form::select('article_id', $articles, isset($meta) ? $meta->article_id : null, ['class' => 'form-control']) !!}

    @if ($errors->has('article_id'))
        <span class="help-block">
            <strong>{!! $errors->first('article_id') !!}</strong>
        </span>
    @endif
</div>
<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('link_id') ? ' has-error' : '' !!} ">
    {!! Form::label('link_id', 'link_id') !!}
    {!! Form::select('link_id', $links, null, ['class' => 'form-control']) !!}

    @if ($errors->has('link_id'))
        <span class="help-block">
            <strong>{!! $errors->first('link_id') !!}</strong>
        </span>
    @endif
</div>
<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('name') ? ' has-error' : '' !!} ">
    {!! Form::label('name', 'name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}

    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{!! $errors->first('name') !!}</strong>
        </span>
    @endif
</div>
<!-- Title English Field -->
<div class="form-group col-sm-offset-3 col-sm-6 has-feedback {!! $errors->has('url') ? ' has-error' : '' !!} ">
    {!! Form::label('url', 'url') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}

    @if ($errors->has('url'))
        <span class="help-block">
            <strong>{!! $errors->first('url') !!}</strong>
        </span>
    @endif
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('categories.index') !!}" class="btn btn-default">Cancel</a>
</div>