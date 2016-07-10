/**
 * Created by bos on 07/05/2016.
 */
new Vue({
    el: "#events",
    data: {
        edit: false,
        count: 0,
        event: {
            //    id: 0,
            //    name: '',
            //    description: '',
            //    date: '',
        },
        events: [
            {
                id: 0,
                name: 'A',
                description: '',
                date: '',
                completed: false,
            },
            {
                id: 1,
                name: 'B',
                description: '',
                date: '',
                completed: false,
            },
        ]
    },
    ready: function () {
        $('#name').focus();
    },
    computed: {
        buttonColor: function () {
            if (this.edit == true) {
                return {'background-color': 'yellow', 'color': 'black'}
            }
        },
    },
    methods: {
        // create Add Event Function
        addEvent: function () {
            if (this.event.name != '') {
                if (this.edit == false) {
                    this.count += 1;
                    this.event.id = this.count;
                }
                else {
                    this.edit = false;
                }
                var that = this;
                //event.completed=false;
                that.event.completed=true;
                this.events.push(this.event);
            }
            this.event = {name: '', description: '', date: ''};
            $('#name').focus();
        },
        //create Edit Event Function
        editEvent: function (event) {
            this.edit = true; //edit is true
            this.event.id = event.id;
            this.event.name = event.name;
            this.event.description = event.description;
            this.event.date = event.date;
            this.events.$remove(event);
        },
        isCompleted: function(event) {
            return this.event.completed;
        },
        //
        finishEvent: function (event) {

            //event.completed=false;
            return event.completed=!event.completed;
        },
        //create Remove Event Function
        removeEvent: function ($index) {
            if (confirm('Are you sure?')) {
                this.events.splice($index, 1);
            }
        },
    },
});
