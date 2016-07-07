/**
 * Created by bos on 07/05/2016.
 */
new Vue({
    el:"#events",
    data:{
        edit: false,
        event:{
            id:'',
            index:       '',
            name:        '',
            description: '',
            date:        '',
        },
        events:[],
    },
    ready:function(){
        this.fetchEvents();
        $('#name').focus();
    },
    methods:{
        // add example data ....
        fetchEvents:function(){
            var events=[
                {
                    id: 1,
                    name:        'Eat',
                    description: 'for healthy',
                    date:        '2015-09-20'
                },
                {
                    id: 2,
                    name:        'Sleep',
                    description: 'for healthy and brain',
                    date:        '2015-09-20'
                },
                {
                    id: 3,
                    name:        'Relax',
                    description: 'Massage and KTV',
                    date:        '2015-09-20'
                },
            ];
            this.$set('events',events);
        },
        // create Add Event Function
        addEvent: function () {
            if(this.event.name && this.edit==false){
                this.events.push(this.event);
                console.log("event added");
            }
            else
            {
                this.events.set(this.event);
                this.edit=false;
            }
            this.event={name:'',description:'',date:''};
            $('#name').focus();
        },
        //create Edit Event Function
        editEvent:function(event,index){
            this.edit=true;
            if(event.name)
            {
                this.event.name         = event.name;
                this.event.description  = event.description;
                this.event.date         = event.date;
            }
        },
        //create Remove Event Function
        removeEvent:function($index){
            if(confirm('Are you sure?'+$index))
            {
                this.events.splice($index,1);
            }
        },
    }
});
