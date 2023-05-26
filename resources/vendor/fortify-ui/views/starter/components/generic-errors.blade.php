<div>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    <span class="invalid-feedback" role="alert">
                        <strong>
                            {{ $error }}
                        </strong>
                    </span>
                </li>
            @endforeach
        </ul>
    @endif
</div>
