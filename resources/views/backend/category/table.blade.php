<div id='load-item'>
    <table class="table table-responsive table-striped table-bordered table-hover" id="categories-table">
        <thead>
        <th class='text-center'>Id</th>
        <th>Name_en</th>
        <th class="text-center">Name_de</th>
        <th class='text-center' colspan="3">Slug</th>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td class="text-center">{{ $category->id }}</td>
                <td class="text-center">{{ $category->name_en }}</td>
                <td class="text-center">{{ $category->name_de }}</td>
                <td class="text-center">{{ $category->slug }}</td>
                {{--<td class="text-center">--}}
                    {{--<a href="{!! route('category-managements.show', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>--}}
                    {{--<a href="{!! route('category-managements.edit', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {{--{!! buttonDelete(route('category-managements.destroy', $category->id)) !!}--}}
                {{--</td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="text-right">
    {!! $categories->links() !!}
</div>