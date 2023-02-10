<table class="table" id="mail_table" class="display">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($activities as $activity)
        <tr>
            <th scope="row">{{$activity->id}}</th>
            <td>{{$activity->name}}</td>
            <td class="d-flex justify-content-around">
                @livewire('dashboard.activity.edit', ['activity' => $activity,])
                @livewire('dashboard.activity.delete', ['activity' => $activity,])
            </td>
        </tr>
        @endforeach
    </tbody>
</table>