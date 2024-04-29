<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Add Scheduling</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>

            </div>
            <div class="modal-body text-left">
                <form class="form-horizontal" method="POST" action="{{ route('schedule.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="col-sm-6 control-label">Assing to Employee</label>

                        <select class="form-control" id="employees" name="name" required>
                            <option value="" selected>- Employees -</option>
                            @foreach($employees as $employee)
                                <option value="{{$employee->name}}">{{$employee->name}}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class="form-group">
                        <label for="time_in" class="col-sm-3 control-label">Time In</label>


                            <div class="bootstrap-timepicker">
                                <input type="datetime-local" class="form-control timepicker" id="time_in" name="time_in" required>
                            </div>

                    </div>
                    <div class="form-group">
                        <label for="time_out" class="col-sm-3 control-label">Time Out</label>


                            <div class="bootstrap-timepicker">
                                <input type="datetime-local" class="form-control timepicker" id="time_out" name="time_out" required>
                            </div>

                    </div>
                    <div class="form-group">
                        <label for="time_out" class="col-sm-3 control-label">Color</label>


                        <div class="bootstrap-timepicker">
                            <input type="color" class="form-control timepicker" id="color" name="color" required>
                        </div>

                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

