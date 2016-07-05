<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/datepicker3.css') }}">
</head>
<body>
<!-- Navigation Bar -->
<div class="navbar navbar-default">
    <div class="container-fluid">
        <a class="navbar-brand"><i class="glyphicon glyphicon-bullhorn"></i>&nbsp To Do App</a>
    </div>
</div>

<!-- main body of our app -->
<div class="container" id="events">
    <!-- add an events -->
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>ADD Events</h4>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" v-model="event.name" autofocus>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Description" v-model="event.description"></textarea>
                </div>
                <div class="form-group date">
                    <input type="datetime" id='date-popup' class="form-control" placeholder="Date" v-model="event.date">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" v-on:click="addEvent">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- lists all events -->
    <div class="col-sm-6">
        <div class="list-group">
            <a href="#" class="list-group-item" v-for="event in events">
                <h4 class="list-group-item-heading">
                    <i class="glyphicon glyphicon-bullhorn"></i>
                    @{{ event.name }}
                </h4>
                <h5>
                    <i class="glyphicon glyphicon-calendar" v-if="event.date">@{{ event.date }}</i>
                </h5>
                <p class="list-group-item-text" v-if="event.description">@{{ event.description }}</p>
            </a>
        </div>
    </div>
</div>
<script src="../node_modules/vue/dist/vue.js"></script>
<script src="../node_modules/vue-resource/dist/vue-resource.js"></script>
<script src="{{ asset('plugins/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>