<?
class Node {
	private $value, $next, $prev;

	public function __construct($value=null) {
		$this->$value = $value;
		$this->next = null;
		$this->prev = null;
	}

	public function set_value($value) {
		$this->$value = $value;
	}

	public function set_next(Node $next) {
		$this->next = $next;
	}

	public function set_prev(Node $prev) {
		$this->prev = $prev;
	}

	public function get_value() {
		return $this->value;
	}

	public function get_next() {
		return $this->next;
	}

	public function get_prev() {
		return $this->prev;
	}
}