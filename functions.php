<?php
session_start();

// database contect

$database = new mysqli('localhost', 'root', '','travel');

function view($table, $fields = "*", $where = ""){
    global $database;
    // SELECT * FROM package_category
    $command = "SELECT $fields FROM $table ";
	if($where != "")
		$command .= "WHERE " . $where;
	//return $command;
    return mysqli_query($database,$command);
}

function insert($table, $fields, $data){
    global $database;
    $command = "INSERT INTO $table ($fields) VALUES ($data)";
    //return $command;
    return mysqli_query($database,$command);

}

function delete($table, $id){
    global $database;	
    $command = "DELETE FROM $table WHERE id=$id";
	//return $command;
	if(mysqli_query($database,$command))
		return "Deleted";
    else
		return "not deleted";

}