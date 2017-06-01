<div id='load-item'>
    <table class="table table-responsive table-striped table-bordered table-hover" id="categories-table">
        <thead>
        <th class='text-center'>Id</th>
        <th class="text-center">Name_en</th>
        <th class="text-center">Name_de</th>
        <th class='text-center' colspan="3">Slug</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td class="text-center">{{ $category->id }}</td>
                <td class="text-center">{{ $category->name_en }}</td>
                <td class="text-center">{{ $category->name_de }}</td>
                <td class="text-center">{{ $category->slug }}</td>
                <td class="text-center">
                    <a href="{!! route('categories.show', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categories.edit', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete', 'style' => 'display: inline-block']) !!}
                        {!! Form::submit('delete', ['class' => 'glyphicon glyphicon-edit']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="text-right">
    {!! $categories->links() !!}
</div>