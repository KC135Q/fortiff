<div class="add-message">
    <h3>New Message</h3>
    <form action="/message/add" method="post">
        Name: <input type="text" name="name">&nbsp;
        Email: <input type="email" name="email">&nbsp;
        Message: <textarea name="message"></textarea>&nbsp;
        <input type="submit" name="Add">
        {{ csrf_field() }}
    </form>
</div>