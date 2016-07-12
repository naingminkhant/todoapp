/**
 * Created by bos on 07/05/2016.
 */
new Vue({
    el: "#events",
    data: {
        edit: false,
        count: 1,
        event:{
            id:'',
            name:'',
            description:'',
            date:'',
            completed:'',
        },
        events: [
            {
                id: 0,
                name: 'Relax',
                description: 'kaung khant lynn and kaung myat aung, beer bar, massage and ktv',
                date: '25-10-2016',
                completed: false,
            },
            {
                id: 1,
                name: 'Meeting',
                description: 'Yoon Wadi..... hee hee ...',
                date: 'Everyday',
                completed: false,
            },
        ]
    },
    ready: function () {
        $('#name').focus();
        this.event={name:'',description:'',date:''};
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
                    this.event.completed=false;
                }
                else {
                    this.edit = false;
                }
                this.events.push({
                    id          :this.event.id,
                    name        :this.event.name,
                    description :this.event.description,
                    date        :this.event.date,
                    completed   :this.event.completed,
                });
            }
            this.event = {name: '', description: '', date: ''};
            $('#name').focus();
        },
        //create Edit Event Function
        editEvent: function (event) {
            if(!this.edit)
            {
                this.edit = true;

                this.event.id = event.id;
                this.event.name = event.name;
                this.event.description = event.description;
                this.event.date = event.date;
                this.event.completed=event.completed;
                this.events.$remove(event);
            }
        },
        //
        finishEvent: function (event) {
            if(event.completed)
            {
                if(confirm('Are you sure return?')){
                    return event.completed=!event.completed;
                }
            }
            else {
                return event.completed=!event.completed;
            }
        },
        //create Remove Event Function
        removeEvent: function ($index) {
            if (confirm('Are you sure?')) {
                this.events.splice($index, 1);
            }
        },
    },
});
