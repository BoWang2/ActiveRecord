<?php 
class collection
{
//	static public function create()
//	{
//		$model =  new static::$modelName;
//		return $model;
//	}

	static public function findAll()
	{
		$db = dbConn::getConnection();
		if(!empty($db))
		{
		//$class = static::$modelName;
		$tableName = get_called_class();
		$sql = 'SELECT * FROM ' . $tableName;
		try
		{
			$statement = $db->prepare($sql);
			$statement->execute();
			$class = static::$modelName;
			$statement->setFetchMode(PDO::FETCH_CLASS,$class);
			$recordsSet = $statement->fetchAll();
		//	foreach ($class as $key => $value) {
		//		$key=>
		//	}
			 foreach ($recordsSet as $key => $objects) 
			 {
                $recordsSet[$key] = (array) $objects;
            }
			return $recordsSet;
		}catch(PDOException $e)
		{
			echo "sql Error:".$e->getMessage();
		}

		}
	}



	static public function findOne($id)
	{
			$db = dbConn::getConnection();
			if(!empty($db))
			{
				//$class = static::$modelName;
				$tableName = get_called_class();
				$sql = 'SELECT * FROM ' . $tableName .' WHERE id = '.$id;
				try{
						$statement = $db->prepare($sql);
						$statement->execute();
						$class = static::$modelName;
						$statement->setFetchMode(PDO::FETCH_CLASS,$class);
						$recordsSet = $statement->fetchAll();
						foreach ($recordsSet as $key => $objects) 
						{
                			$recordsSet[$key] = (array) $objects;
            			}
						return $recordsSet;
				}catch(PDOException $e) 
				{
					echo "sql Error:".$e->getMessage();
				}

			}


	}

}




 ?>