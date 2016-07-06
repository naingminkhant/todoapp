/**
 * Created by bos on 07/05/2016.
 */
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
        removeEvent:function($index){
            if(confirm('Are you sure?'+$index))
            {
                this.events.splice($index,1);
            }
        },
    }
});
