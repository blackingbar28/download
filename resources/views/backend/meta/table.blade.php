<div id='load-item'>
    <table class="table table-responsive table-striped table-bordered table-hover" id="categories-table">
        <thead>
        <th class='text-center'>Id</th>
        <th class="text-center">Article</th>
        <th class="text-center">Link</th>
        <th class='text-center'>Url</th>
        <th class='text-center'>Name</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($metas as $meta)
            <tr>
                <td class="text-center">{{ $meta->article_id }}</td>
                <td class="text-center">{{ $meta->link_id }}</td>
                <td class="text-center">{{ $meta->url }}</td>
                <td class="text-center">{{ $meta->name }}</td>
                <td class="text-center">
                    <a href="{!! route('metas.show', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('metas.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::open(['route' => ['metas.destroy', $article->id], 'method' => 'delete', 'style' => 'display: inline-block']) !!}
                    {!! Form::submit('delete', ['class' => 'glyphicon glyphicon-edit']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="text-right">
    {!! $metas->links() !!}
</div>