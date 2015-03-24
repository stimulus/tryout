@extends('template.master')

@section('content')


        <div class="callout callout-info">
        </div>
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Buddies</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                		<tr>
	                		<th>First Name</th>
	                		<th>Last Name</th>
	                		<th>Created</th>
	                		<th>Modified</th>
	                		<th>Availiblity</th>
	                	</tr>
                	<?php
                	if(!empty($buddies)){ 
	                	foreach ($buddies as $value){
	                ?>
	                	<tr>
	                		<td>{{$value['firstname']}}</td>
	                		<td>{{$value['lastname']}}</td>
	                		<td>{{$value['created']}}</td>
	                		<td>{{$value['modified']}}</td>
	                		<td><a href="{{URL::route('buddies_scheme',$value['id'])}}"><button type="button" class="btn btn-default">Check</button></a></td>
	                	</tr>
	                <?php 		
	                	}
                	}
                	?>
                </table>
            </div><!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div><!-- /.box-footer-->
        </div><!-- /.box -->





@stop
