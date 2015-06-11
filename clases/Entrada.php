<html>
<?php 
class Entrada{

	private $sidEntrada;
	private $stitulo;
	private $scuerpo;
	private $dtfecha;
	private $querysel;

	function __construct($sident= NULL,$sti= NULL,$scuer = NULL,$dtfe = NULL){
		$this->sidEntrada=$sident;
		$this->stitulo=$sti;
		$this->scuerpo=$scuer;
		$this->dtfecha=$dtfe;
		
	}

	function IdEntrada(){
		return $this->sidEntrada;
	}
	function Titulo(){
		return $this->stitulo;
	}
	function Cuerpo(){
		return $this->scuerpo;
	}
	function Fecha(){
		return $this->dtfecha;
	}

	function Selecciona(){
		
		if (!$this->querysel){
		$db=dbconnect();
		/*Definición del query que permitira ingresar un nuevo registro*/
		
			$sqlsel="select identrada,titulo,cuerpo,fecha from entrada order by identrada";
		
			/*Preparación SQL*/
			$this->querysel=$db->prepare($sqlsel);
		
			$this->querysel->execute();
		}
		
		$registro = $this->querysel->fetch();
		if ($registro){
			return new self($registro['identrada'],$registro['titulo'],$registro['cuerpo'],$registro['fecha']);			
		}
		else {
			return false;
			
		}
	}
	
	function Elimina($id){
	
		$db=dbconnect();
		
			/*Definición del query que permitira eliminar un registro*/
			$sqldel="delete from entradas where identrada=:id";
	
			/*Preparación SQL*/
			$querydel=$db->prepare($sqldel);
			
			$querydel->bindParam(':id',$id);
			
			$valaux=$querydel->execute();
	
		return $valaux;
	}

}

 ?>
</html>