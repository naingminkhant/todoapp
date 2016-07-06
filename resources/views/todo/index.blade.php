<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO</title>
    @include('layouts.head')
</head>
<body>
<!-- Navigation Bar -->
<div class="navbar navbar-default">
    <div class="container-fluid">
        <a class="navbar-brand"><i class="fa fa-book"></i>&nbsp To Do App</a>
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
                <!-- name entry -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-bell"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Name" v-model="event.name" autofocus>
                    </div>
                </div>
                <!-- description entry -->
                <div class="form-group">
                    <textarea class="form-control" placeholder="Description" v-model="event.description"></textarea>
                </div>
                <!-- date picker -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" id='datepicker' data-date-format="dd-mm-yyyy" class="input-append form-control datepicker" placeholder="dd-mm-yyyy" v-model="event.date">
                    </div>
                </div>
                <!-- submit button -->
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
                    <i class="fa fa-bell"></i>
                    @{{ event.name }}
                </h4>
                <h5>
                    <i class="fa fa-calendar" v-if="event.date">&nbsp;@{{ event.date }}</i>
                </h5>
                <p class="list-group-item-text" v-if="event.description">@{{ event.description }}</p>

                <button class="btn btn-danger" v-on:click="removeEvent($index)">Delete</button>
            </a>
        </div>
    </div>
</div>
</body>
@include('layouts.script')
</html>