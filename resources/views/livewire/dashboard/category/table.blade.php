<table class="table" id="mail_table" class="display">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td class="d-flex justify-content-around">
                @livewire('dashboard.category.edit', ['category' => $category,])
                @livewire('dashboard.category.delete', ['category' => $category,])
            </td>
        </tr>
        @endforeach
    </tbody>
</table>