<?php

Class Car
{
    private $brand_id;
    private $model_id;
    private $year;
    private $mileage;
    private $price;
    private $city;
    private $body_id;
    private $steer_id;
    private $engine_capacity;
    private $engine_type_id;
    private $transmission_type_id;
    private $drive_type_id;
    private $color_id;
    private $condition_id;
    private $customs_cleared;
    private $garanty;

    public function __construct($brand_id, $model_id, $year, $mileage, $price, $city, $body_id, $steer_id, $engine_capacity, $engine_type_id, $transmission_type_id, $drive_type_id, $color_id, $condition_id, $customs_cleared, $garanty)
    {
        $this->brand_id = $brand_id;
        $this->model_id = $model_id;
        $this->year = $year;
        $this->mileage = $mileage;
        $this->price = $price;
        $this->city = $city;
        $this->body_id = $body_id;
        $this->steer_id = $steer_id;
        $this->engine_capacity = $engine_capacity;
        $this->engine_type_id = $engine_type_id;
        $this->transmission_type_id = $transmission_type_id;
        $this->drive_type_id = $drive_type_id;
        $this->color_id = $color_id;
        $this->condition_id = $condition_id;
        $this->customs_cleared = $customs_cleared;
        $this->garanty = $garanty;
    }

    public function add()
    {
        $sql = "INSERT INTO cars (brand_id, model_id, year, mileage, price, city, body_id, steer_id, engine_capacity, engine_type_id, transmission_type_id, drive_type_id, color_id, condition_id, customs_cleared, garanty)
        VALUES (
        $this->brand_id;
        $this->model_id;
        $this->year;
        $this->mileage;
        $this->price;
        $this->city;
        $this->body_id;
        $this->steer_id;
        $this->engine_capacity;
        $this->engine_type_id;
        $this->transmission_type_id;
        $this->drive_type_id;
        $this->color_id;
        $this->condition_id;
        $this->customs_cleared;
        $this->garanty;
        )";
    }

    public function full($brand, $model, $yearStart, $yearEnd, $city, $priceMin, $priceMax)
    {
        $this->$brand = $brand;
        $this->$model = $model;
        $this->$yearStart = $yearStart;
        $this->$yearEnd = $yearEnd;
        $this->$city = $city;
        $this->$priceMin = $priceMin;
        $this->$priceMax = $priceMax;
    }
}

?>