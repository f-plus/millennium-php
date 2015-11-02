<?php

namespace FPlus\Millennium\Model;

class ArrayOfEmployee
{
    /**
     * @var Employee[]
     */
    protected $Employee;

    public function __construct()
    {
    }

    /**
     * @return Employee[]
     */
    public function getEmployee()
    {
        return $this->Employee;
    }

    /**
     * @param Employee[] $Employee
     *
     * @return ArrayOfEmployee
     */
    public function setEmployee(array $Employee = null)
    {
        $this->Employee = $Employee;

        return $this;
    }
}
