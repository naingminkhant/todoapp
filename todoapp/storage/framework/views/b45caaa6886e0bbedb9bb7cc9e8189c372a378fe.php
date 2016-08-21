<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div id="app">
    <template id="edit-data">
        <li>
            <span v-show="!inEdit">{{item.name}}</span>
            <input v-show="inEdit" type="text" v-model="item.name" />
            <a href="#" @click.prevent="toggle();">{{inEdit ? 'save' : 'edit'}}</a>
        </li>
    </template>
    <p>
        <edit-data v-for="item in items" :item="item"></edit-data>
    </p>
  <pre>
    {{$data.items | json}}
  </pre>
</div>
</body>
<script src="<?php echo e(asset('js/vue.js')); ?>"></script>
<script>
    Vue.component('edit-data', {
        template: '#edit-data',
        props: {
            item: Object,
        },
        data() {
            return {
                inEdit: false,
            }
        },
        methods:{
            toggle(){
                this.inEdit = !this.inEdit;
            }
        }
    });

    new Vue({
        el: '#app',
        data: {
            items: [{
                id: 1,
                name: 'test-1'
            }, {
                id: 2,
                name: 'test-2'
            }, {
                id: 3,
                name: 'test-3'
            }, ],
        }
    });

</script>
</html>