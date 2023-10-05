<?php

class Customer
{
    // khai bao thuoc tinh c1
    protected string $name;
    protected int $age;
    protected string $phone;
    protected string $email;

    public static string $group = "C07Brse";

    public function __construct(string $name,
                                int $age,
                                string $phone,
                                string $email )
    {
        // dat gia tri cho thuoc tinh khi khoi tao object
        // $this dai dien cho doi tuong hien tai
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
        $this->email = $email;
    }

    private function getAge(): int
    {
        return $this->age;
    }

    static public function getGroups() {
        return Customer::$group;
    }
}