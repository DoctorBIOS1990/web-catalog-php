<?php 

class Consulta {
    private $baseDeDatos;
	private $table;

    // Constructor de la clase
    public function __construct($valueDB,  $nameTable) {
		$this->baseDeDatos = $valueDB;
		$this->table = $nameTable;
	}
    
	// Todos los aleatorios
	public function getAllRecords($SQLLine){
		$sentencia = $this->listById($SQLLine , $this->getAleatorio() );
		return $sentencia->fetchAll(PDO::FETCH_OBJ);
	}

    // Busqueda selectiva
	public function myQuery($SQLLine,$field){
		$result = $this->baseDeDatos->prepare($SQLLine);
		$result->bindValue(1, "%".$_POST[$field]."%", PDO::PARAM_STR);
		$result->execute();
		return $result->fetchAll(PDO::FETCH_OBJ);
	}
	
	// Busqueda por id
	public function listById($SQLLine, $field){
		$result = $this->baseDeDatos->prepare($SQLLine);
		$result->bindParam(":id", $field);
		$result->execute();
		return $result;
	}

	// Obtener todo
	public function fetchAllRecords($SQLLine){
		$result = $this->baseDeDatos->query($SQLLine);
		return $result->fetchAll(PDO::FETCH_OBJ);
	}

	// Obtener un numero aleatorio
	public function getAleatorio(){
		$conteo = $this->baseDeDatos->query("SELECT COUNT(*) AS CONTEO FROM {$this->table}");
		$TOTAL = $conteo->fetch(PDO::FETCH_OBJ);
		return mt_rand(0, $TOTAL->CONTEO);
	}
}

?>
