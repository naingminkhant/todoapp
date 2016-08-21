<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Blog</title>
</head>
<body>
<div>
    <form class="col-sm-9">
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" placeholder="Author" name="author">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" class="form-control" placeholder="Body" name="body">
        </div>
        <button class="form-group btn btn-default" type="submit">Save</button>
    </form>
    <div class="list-group-item col-sm-9" v-for="author in authors">
        <label>@{{ author }}</label>
    </div>
</div>
</body>
</html>
<script src="{{ asset('js/vue.js') }}"></script>
<script>


</script>
</body>
</html>