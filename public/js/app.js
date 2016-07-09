/**
 * Created by bos on 07/05/2016.
 */
new Vue({
    el:"#events",
    data:{
        edit: false,
        count:0,
        event:{
            id:0,
            name:        '',
            description: '',
            date:        '',
        },
        events:[],
    },
    ready:function(){
        //this.fetchEvents();
        $('#name').focus();
    },
    methods:{
        // add example data ....
        //fetchEvents:function(){
        //    var events=[
        //        {
        //            id: 1,
        //            name:        'Cat',
        //            description: 'for healthy',
        //            date:        '20-9-2015'
        //        },
        //        {
        //            id: 2,
        //            name:        'Aleep',
        //            description: 'for healthy and brain',
        //            date:        '20-9-2015'
        //        },
        //        {
        //            id: 3,
        //            name:        'Relax',
        //            description: 'Massage and KTV',
        //            date:        '20-9-2015'
        //        },
        //    ];
        //    this.$set('events',events);
        //},
        // create Add Event Function
        addEvent: function () {
            //this function works when edit false
            if(this.event.name && this.edit==false){
                this.count+=1;
                this.event.id=this.count;
            }
            // this function works when edit true
            else
            {
                this.edit=false;
            }
            this.events.push(this.event);
            this.event={name:'',description:'',date:''};
            $('#name').focus();
        },
        //create Edit Event Function
        editEvent:function(event){
            this.edit=true; //edit is true
            if(!this.event.id)
            {
                this.event.id           = event.id;
                this.event.name         = event.name;
                this.event.description  = event.description;
                this.event.date         = event.date;
                this.events.$remove(event);
            }
        },
        //create Remove Event Function
        removeEvent:function($index){
            if(confirm('Are you sure?'))
            {
                this.events.splice($index,1);
            }
        },
    },
});
