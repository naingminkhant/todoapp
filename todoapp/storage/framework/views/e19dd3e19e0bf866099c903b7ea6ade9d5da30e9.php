<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TO DO</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
</head>
<body>
<!-- Navigation Bar -->
<div class="navbar navbar-default">
    <div class="container-fluid">
        <a class="navbar-brand"><i class="glyphicon glyphicon-bullhorn"></i>To Do</a>
    </div>
</div>

<!-- main body of our app -->
<div class="container" id="events">
    <!-- add an events -->
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>ADD To Do</h4>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" v-model="event.name" autofocus>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Description" v-model="event.description"></textarea>
                </div>
                <div class="form-group">
                    <input type="datetime" class="form-control" placeholder="Date" v-model="event.date">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" v-on="click: addEvent">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- lists all events -->
    <div class="col-sm-6">
        <div class="list-group">
            <a href="#" class="list-group-item" v-repeat="events in event">
                <h4 class="list-group-item-heading">
                    <i class="glyphicon glyphicon-bullhorn"></i>
                    {{ event.name }}
                </h4>
                <h5>
                    <i class="glyphicon glyphicon-calendar" v-if="event.date">{{ event.date }}</i>
                </h5>
                <p class="list-group-item-text" v-if="event.description">{{ event.description }}</p>
            </a>
        </div>
    </div>
</div>
<script src="<?php echo e(asset('js/vue.js')); ?>"></script>
<?php /*<script src="<?php echo e(asset('js/app.js')); ?>"></script>*/ ?>
</body>
<script>
    new Vue({
        el:"#events",
        data:{
            event:{
                name:        '',
                description: '',
                date:        '',
            },
            events:[],
        },
        ready:function(){
            this.fetchEvents();
        },
        methods:{
            fetchEvents:function(){
                var events=[
                    {
                        id: 1,
                        name:        'Eat',
                        description: 'for healthy',
                        date:        '2015-09-20'
                    },
                    {
                        id: 1,
                        name:        'Sleep',
                        description: 'for healthy and brain',
                        date:        '2015-09-20'
                    },
                    {
                        id: 1,
                        name:        'Relax',
                        description: 'Massage and KTV',
                        date:        '2015-09-20'
                    },
                ];
                this.$set('events',events);
            },
            addEvent: function () {
                if(this.event.name){
                    this.events.push(this.event);
                    this.event={name:'',description:'',date:''};
                }
            },
        }
    });
</script>
</html>