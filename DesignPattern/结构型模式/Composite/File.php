<?php

namespace composite;

/**
 * Class File
 *
 * @package \composite
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class File implements CompositeInterface
{
    private $_name = '';
    private $_content = '';

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
        throw new \Exception('not support', 500);
    }

    public function delete(CompositeInterface $composite)
    {
        throw new \Exception('not support', 500);
    }

    public function printComposite()
    {
        throw new \Exception('not support', 500);
    }

    public function operation($operation = '', $content = '')
    {
        switch ($operation) {
            case 'write':
                $this->_content .= $content;
                echo "write success";
                break;
            case 'read':
                echo $this->_content;
                break;
            default:
                throw new \Exception('not support', 400);
                break;
        }
    }
}