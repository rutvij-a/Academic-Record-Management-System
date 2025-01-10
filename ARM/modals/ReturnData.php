<?php
use Google\Cloud\Firestore\FieldValue;
class ReturnData
{
    private $status, $message;
    private $data = array();
    private $all_variable_name = array("status", "message", "data");

    // * Constructor
    public function __construct(?String $status, ?String $message, ?array $data)
    {
        $this->status = $status;
        $this->message = $message;
        $this->data = $data;
    }

    public function __call($name, $arguments)
    {
        // * Getters 
        if (str_contains($name, "get")) {
            $variable_name = camelToSnake(substr($name, 3));
            if (in_array($variable_name, $this->all_variable_name)) {
                return $this->$variable_name;
            }
        }
        //* Setters
        else if (str_contains($name, "set")) {
            $arguments[1] = isset($arguments[1]) ? $arguments[1] : true;
            $variable_name = camelToSnake(substr($name, 3));
            if (in_array($variable_name, $this->all_variable_name)) {
                $this->$variable_name = $arguments[0];
                if ($arguments[1]) {
                    $this->setUpdateArray($variable_name, $arguments[0]);
                }
            }
        }
        // * To Array Method
        else if ($name == "toArray") {
            if (count($arguments) == 0) {
                return getArray($this->all_variable_name, $this);
            } else if (count($arguments) == 1) {
                return getArray($arguments[0], $this);
            }
        }
        // * To JSON 
        else if ($name == "toJSON") {
            if (count($arguments) == 0) {
                return json_encode(getArray($this->all_variable_name, $this));
            } else if (count($arguments) == 1) {
                return json_encode(getArray($arguments[0], $this));
            }
        } else {
            return new Exception("Call to undefined method " . get_class($this) . "::" . $name . "()");
        }
    }
}
