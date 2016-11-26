<div class="list-form">
    <h3>Listing messages</h3>
    @if (!empty($messages))
        @foreach ($messages as $message)
            <p>Message {{ $message->id }}:
                <a href="mailto:{{ $message->email }}">{{ $message->name }}</a>
                <p>{{ $message->message }}
                    <a class="btn btn-xs btn-info" href="message/{{ $message->id }}/edit">Edit</a> |
                    <a class="btn btn-xs btn-danger" href="message/{{ $message->id }}/delete">Delete</a>
                </p>
        <hr/>
            </p>
        @endforeach
    @endif
</div>