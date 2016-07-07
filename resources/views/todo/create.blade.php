<div class="col-sm-6" id="event">
    <div class="panel panel-default">
        <!-- Add event heading -->
        <div class="panel-heading">
            <h4><i class="glyphicon glyphicon-plus-sign">
                </i> Events</h4>
        </div>
        <!-- Add event body -->
        <div class="panel-body">
            <!-- name entry -->
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-bell"></i>
                    </div>
                    <input type="text" class="form-control" placeholder="Name" id="name" v-model="event.name">
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
                    <input type="text" id='datepicker' data-date-format="dd-mm-yyyy"
                           class="input-append form-control datepicker" placeholder="dd-mm-yyyy"
                           v-model="event.date">
                </div>
            </div>
            <!-- submit button -->
            <div class="form-group">
                <button class="btn btn-primary" v-model="edit"
                        v-on:click="addEvent">@{{ edit?'Update':'Submit' }}</button>
            </div>
        </div>
    </div>
</div>
