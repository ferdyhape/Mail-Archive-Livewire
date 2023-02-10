<table>
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Mail Number</th>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Activity</th>
            <th scope="col">Archive Time</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mails as $mail)
        <tr>
            <th scope="row">{{$mail->id}}</th>
            <td>{{$mail->mail_number}}</td>
            <td>{{$mail->name}}</td>
            <td>{{$mail->category->name}}</td>
            <td>{{$mail->activity->name}}</td>
            <td>{{$mail->archive_time}}</td>
        </tr>
        @endforeach
    </tbody>
</table>