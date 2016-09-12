<?
/**
* 
*/
class Caixa_model extends CI_Model
{
	
	function __construct(argument)
	{
		parent::Model();
	}

	private $id;
	private $estado;
	private $valor_inicial;
	private $valor_final;

	public function get_id(){
		return $this->id;
	}
	public function set_id($id){
		$this->id = $id;
	}
}