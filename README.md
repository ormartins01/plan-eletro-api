<h1 align ='center'> <strong>API Documentation<strong> </h1>

## **Content Table**

- [**Content Table**](#content-table)
- [**1. Overview**](#1-overview)
  - [**Author**](#author)
- [\*\*1. Entity \*\*](#1-entity-)
- [**3. Endpoints**](#3-endpoints)
  - [Index](#index)
- [**1.** **PRODUCTS**](#1-products)
  - [**Requests for Products**:](#requests-for-products)

<br>

---

## **1. Overview**

This api is for registration of brands and appliances, was built 
for my technical selection test of Grupo Plan Marketing.

These were the main technologies used in this project:

- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [Docker](https://hub.docker.com/_/docker-docs)
- [MySQL](https://www.mysql.com/)

**Base URL: https://plan-eletro-api.onrender.com**

### **Author**

> - [Ricardo Martins](https://www.linkedin.com/in/ormartins02/) - Dev

<br>

## **1. Entity **

[ Back to the top ](#content-table)

![Diagram](DER_Products.png)

<br>

## **3. Endpoints**

[Back to the top](#content-table)

### Index

- [Products](#1-products)

<br>

## **1.** **PRODUCTS**

[Back to Endpoints](#3-endpoints)

<br>

The Products object is defined as:

| Field       | Type     | Description                                       |
| ----------  | -------- | ------------------------------------------------- |
| id          | string   | Product's unique identifier                       |
| name        | string   | Brand name \*                                     |
| description | string   | Last modified date  \*                            |
| tension     | integer  | Tension volts                                     |
| brand       | string   | brand of product                                  |

<br>

### **Requests for Products**:

- POST /api/products
- GET /api/products
- GET /api/products/id
- PUT /api/products/id
- DELETE /api/products/id
- Host: https://plan-eletro-api.onrender.com
- Authorization: None
- Content-type: application/json

<br>
