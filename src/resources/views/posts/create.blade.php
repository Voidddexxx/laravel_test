<style>
    form {
        margin: 20px 0 0 30px;
        display: flex;
        flex-direction: column;
        max-width: 300px;
    }
</style>
<form method="post" action="{{ route('posts.store') }}">
    @csrf
    Title: <input type="text" name="title"/>
    Content: <textarea name="content"></textarea>
    <button>Send</button>
</form>
