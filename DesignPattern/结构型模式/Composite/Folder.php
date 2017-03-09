<?php

namespace composite;

/**
 * Class Folder
 *
 * @package \composite
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class Folder implements CompositeInterface
{
    private $_composite = [];

    private $_name = '';

    public function __construct($name = '')
    {
        $this->_name = $name;
    }

    public function __get($name = '')
    {
        $name = '_' . $name;
        return $this->$name;
    }

    public function add(CompositeInterface $composite)
    {
        if (in_array($composite, $this->_composite, true)) {
            return ;
        }
        $this->_composite[] = $composite;
    }

    public function delete(CompositeInterface $composite)
    {
        $key = array_search($composite, $this->_composite, true);
        if (!$key) {
            throw new \Exception("not found", 404);
        }
        unset($this->_composite[$key]);
        $this->_composite = array_values($this->_composite);
    }

    public function printComposite()
    {
        foreach ($this->_composite as $v) {
            if ($v instanceof Folder) {
                echo "---" . $v->name . "---\n";
                $v->printComposite();
                continue;
            }
            echo $v->name . "\n";
        }
    }

    public function operation()
    {
        return;
    }

}