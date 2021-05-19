ONE USER


<ul>
    <li>
        Name: {{ $user->name }}
    </li>
    <li>
        Email: {{ $user->email }}
    </li>
</ul>

<a href="{{ route('admin_remove_user', $user->id) }}">
    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Remove User
        </div>
</a>
