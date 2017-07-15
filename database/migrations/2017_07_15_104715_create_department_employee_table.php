<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepartmentEmployeeTable extends Migration {

	public function up()
	{
		Schema::create('department_employee', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('departmentid')->unsigned();
			$table->integer('teamid')->unsigned();
			$table->integer('employeeid')->unsigned();
			$table->tinyInteger('isteamleader')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('department_employee');
	}
}