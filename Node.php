<?
class Node {
	private $value, $next, $prev;

	public function __construct($value=null) {
		$this->$value = $value;
		$this->next = null;
		$this->prev = null;
	}

	public function setValue($value) {
		$this->$value = $value;
	}

	public function setNext(Node $next) {
		$this->next = $next;
	}

	public function setPrev(Node $prev) {
		$this->prev = $prev;
	}

	public function getValue() {
		return $this->value;
	}

	public function getNext() {
		return $this->next;
	}

	public function getPrev() {
		return $this->prev;
	}
}