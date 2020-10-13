<?php 

		//SELECT *  Method
		public function SelcetALl($db_name){
			$condition = '';
			$args = array();
			$query = "SELECT * FROM `" . $db_name . "`";
			$result = mysqli_query($this->connect, $query);
			while ($row = mysqli_fetch_assoc($result)){
				$args[] = $row; 
			}
			return $args;
		}

		//SELECT * FROM WHERE id=1 Methods
		public function SelectWhere($db_name,$data){
			$condition = '';
			$args = array();
			foreach ($data as $key => $value){
				$condition .= "`" . $key . "` ='" . $value . "' ";
			}
			$query = "SELECT * FROM `" . $db_name . "` WHERE ".$condition;
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


 ?>