<?php 

	class Database{
		public $connect;//For db connect
		public $error;


		public function __construct(){
			$this->connect = mysqli_connect('localhost','root','','oop_lesson');
			if(!$this->connect){
				echo "<script>alert('failed to Connect Database')</script>" . mysqli_connect_error($this->connect);
			}
		}

		//Insert Method 
		public function Create($db_name,$data){

			$insert_data = "INSERT INTO `".$db_name. "`(";
			$insert_data .= "`". implode("`, `", array_keys($data)) ."`) VALUES (";
			$insert_data .= "'" . implode("','", array_values($data)) . "')";  
			$confirm_query = mysqli_query($this->connect, $insert_data);
			if($confirm_query){
				return true;
			}else{
				echo mysqli_error($this->connect);
			}
		}

		//SELECT *  Method
		public function SelcetALl($db_name){
			$args = array();
			$query = "SELECT * FROM `" . $db_name . "`";
			$confirm_query = mysqli_query($this->connect, $query);
			while ($result = mysqli_fetch_assoc($confirm_query)){
				$args[] = $result; 
			}
			return $args;
		}

		//SELECT * FROM WHERE id=1 Methods
		public function SelectWhere($db_name,$data){
			$condition = '';
			$args = array();
			foreach ($data as $key => $value){		// `id` = '1'
				$condition .= "`" . $key . "` ='" . $value . "' ";
			}//SELECT * FROM `crud` WHERE 1
			$query = "SELECT * FROM `" . $db_name . "` WHERE ".$condition;
			// var_dump($query);
			$result = mysqli_query($this->connect, $query);
			while ($row = mysqli_fetch_assoc($result)){
				$args[] = $row;
			}
			return $args;
		}

		public function Selected($db_name,$data){
			$condition = '';
			$args = array();
			if($data){

			}else{
				
			}
		}

		//Update WHERE id = input
		public function Update($db_name, $data, $where){
			//UPDATE `crud` SET `id`=[value-1],`title`=[value-2],`docs`=[value-3],`date`=[value-4] WHERE 
			$condition = '';
			$args = '';
			
			foreach ($data as $key => $value){		//`id` = '[value]';
				$args .= "`" . $key . "` = '" . $value . "' , ";  
			}
			$args = substr($args, 0, -2);
			// var_dump($args);

			foreach ($where as $key => $value){		// WHERE `id` = '1'
				$condition .= "`" . $key . "` ='" . $value . "' ";
			}
			// var_dump($condition);
			$update = "UPDATE `" . $db_name . "` SET " . $args . " WHERE " . $condition . "";
			// var_dump($update);
			if(mysqli_query($this->connect, $update)){
				return true;
			}else{
				echo mysqli_error($this->connect);
			}
		}

		//
		public function Delete($db_name, $where){
			$condition = '';
			foreach ($where as $key => $value){		// WHERE `id` = '1'
				$condition .= "`" . $key . "` ='" . $value . "' ";
			}//DELETE FROM `crud` WHERE 0
			$query = "DELETE FROM " . $db_name . " WHERE " . $condition ."";
			// var_dump($query);
			if(mysqli_query($this->connect,$query)){
				return true;
			}else{
				echo mysqli_error($this->connect);
			}
		}
	}

	$CRUD = new Database();
 ?>
