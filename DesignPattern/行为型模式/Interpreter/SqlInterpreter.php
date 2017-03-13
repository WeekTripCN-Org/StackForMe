<?php

namespace interpreter;

/**
 * Class SqlInterpreter
 *
 * @package \interpreter
 *
 * @author  WeekTrip<weektrip@weektrip.cn>
 */
class SqlInterpreter
{
    //表名
    private $_tableName = '';

    //当前类的实例
    private static $_instance;

    public static function db($tableName = '')
    {
        if (empty($tableName)) {
            throw new \Exception("Argument tableName is null", 400);
        }

        //单例
        if (!self::$_instance instanceof self) {
            self::$_instance = new self();
        }

        //更新实例表名
        self::$_instance->_setTableName($tableName);

        //返回实例
        return self::$_instance;
    }

    private function _setTableName($tableName = '')
    {
        $this->_tableName = $tableName;
    }

    public function insert($data = [])
    {
        if (empty($data)) {
            throw new \Exception("Argument data is ull", 400);
        }

        $count = count($data);

        $field = array_keys($data);
        $fieldString = '';

        foreach ($field as $k => $v) {
            if ($k === (int)($count - 1)) {
                $fieldString .= "`{$v}`";
                continue;
            }
            $fieldString .= "`{$v}`".',';
        }
        unset($k);
        unset($v);

        //拼接值
        $value = array_values($data);
        $valueString = '';
        foreach ($value as $k => $v) {
            if ($k === (int)($count - 1)) {
                $valueString .= "'{$v}'";
                continue;
            }
            $valueString .= "'{$v}'" . ',';
        }
        unset($k);
        unset($v);

        $sql = "INSERT INTO `{$this->_tableName}` ({$fieldString}) VALUES ({$valueString})";
        echo $sql . "; \n";
    }

    public function delete($data = [])
    {
        if (empty($data)) {
            throw new \Exception("Argument data is null", 400);
        }

        $count = (int)count($data);
        $where = '';
        $dataCopy = $data;
        $pop = array_pop($dataCopy);
        if ($count === 1) {
            $field = array_keys($data)[0];
            $value = array_values($data)[0];
            $where = "`{$field}` = '{$value}'";
        } else {
            foreach ($data as $k => $v) {
                if ($v === $pop) {
                    $where .= "`{$k}` = '{$v}'";
                    continue;
                }
                $where .= "`{$k}` = '{$v}' AND ";
            }
        }
        $sql = "DELETE FROM `{$this->_tableName}` WHERE {$where}";
        echo $sql . "; \n";
    }

    public function update($data = [])
    {
        if (empty($data)) {
            throw new \Exception("Argument data is null", 400);
        }
        if (empty($data['id'])) {
            throw new \Exception("Argument data['id'] is null", 400);
        }
        $set = '';
        $dataCopy = $data;
        $pop = array_pop($dataCopy);
        foreach ($data as $k => $v) {
            if ($v === $pop) {
                $set .= "`{$k}` = '$v'";
                continue;
            }
            $set .= "`{$k}` = '$v', ";
        }
        $sqls = "UPDATE `{$this->_tableName}` SET {$set}";
        echo $sqls . "; \n";
    }

    public function find($data=[])
    {
        if (empty($data)) {
            throw new \Exception("Argument data is null", 400);
        }

        $count = (int)count($data);
        $where = '';
        $dataCopy = $data;
        $pop = array_pop($dataCopy);

        if ($count === 1) {
            $field = array_keys($data)[0];
            $value = array_values($data)[0];
            $where = "`{$field}` = '{$value}'";
        } else {
            foreach ($data as $k => $v) {
                if ($v === $pop) {
                    $where .= "`{$k}` = '{$v}'";
                    continue;
                }
                $where .= "`{$k}` = '{$v}' AND ";
            }
        }
        $sql = "SELECT * FROM `{$this->_tableName}` WHERE {$where}";

        echo $sql . "; \n";
    }
}