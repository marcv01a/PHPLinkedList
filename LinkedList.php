<?
require 'Node.php';
class LinkedList {
	private $head, $tail;
	public function __construct() {
		$this->head = null;
		$this->tail = null;
	}

	public function addFirst($value) {
		$node = new Node($value);
		if($this->head == null)
		{
			$this->head = $node;
			$this->tail = $node;
		}
		else
		{
			$node->setNext($this->head);
			$this->head = $node;
		}
	}

	public function add($value) {
		$node = new Node($value);
		if($this->tail == null)
		{
			$this->head = $node;
			$this->tail = $node;
		}
		else
		{
			$this->tail->setNext($node);
			$this->tail = $node;
		}
	}

	public function addLast($value) {
		return $this->add($value);
	}
}