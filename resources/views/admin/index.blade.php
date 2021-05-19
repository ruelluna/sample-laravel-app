ADMIN HOME

<ul>

    @foreach($users as $user)
        <li>
            <a href="{{ route('admin_show_user', $user->id) }}">
                {{ $user->id }} | {{ $user->name }} {{ $user->email }}
            </a>
        </li>
    @endforeach

</ul>
