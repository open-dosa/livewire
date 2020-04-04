<div>
    @foreach ($posts as $post)
        @include('includes.post', $post)
        @livewire('delete-post', ['post' => $post])
    @endforeach
</div>