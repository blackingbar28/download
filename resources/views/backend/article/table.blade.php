<div id='load-item'>
    <table class="table table-responsive table-striped table-bordered table-hover" id="categories-table">
        <thead>
        <th class='text-center'>Id</th>
        <th class="text-center">Slug</th>
        <th class="text-center">Title En</th>
        <th class='text-center' >Title De</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td class="text-center">{{ $article->id }}</td>
                <td class="text-center">{{ $article->slug }}</td>
                <td class="text-center">{{ $article->title_en }}</td>
                <td class="text-center">{{ $article->title_de }}</td>
                <td class="text-center">
                    <a href="{!! route('articles.show', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('articles.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete', 'style' => 'display: inline-block']) !!}
                    {!! Form::submit('delete', ['class' => 'glyphicon glyphicon-edit']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="text-right">
    {!! $articles->links() !!}
</div>