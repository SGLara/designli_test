# Designli Test

This is a Laravel project that includes a Mail Parser and JSON mapper functionality. Follow the steps below to set up the project and understand how to use its features.

## Installation

To get started with the project, follow these steps:

1. **Clone the repository**:
    ```bash
    git clone https://github.com/SGLara/designli_test
    cd designli_test
    ```

2. **Install dependencies**:
    ```bash
    composer install
    ```

3. **Copy the `.env` file**:
    ```bash
    cp .env.example .env
    ```

4. **Generate the Laravel application key**:
    ```bash
    php artisan key:generate
    ```

5. **Start the local development server**:
    ```bash
    php artisan serve
    ```

## Features

### 1. Mail Parser

The Mail Parser functionality allows you to parse `.eml` files via an API route.

- **Endpoint**: `/api/email-parser`
- **Method**: `POST`
- **Parameters**:
  - `file` (required): The `.eml` file to be parsed.
- **Usage**: Upload the `.eml` file to the API endpoint using a tool like Postman or cURL.
- **Response**: The API will parse the file and return the relevant email data attachments.

> Note: You can use the file located in the `tests/fixtures/email-test.eml` file for testing purposes. You can use a client like Postman or cURL to send the `.eml` file to the API endpoint.

### 2. JSON Mapper

The JSON Mapper functionality is designed to process AWS SES (Simple Email Service) SNS (Simple Notification Service) notifications.

- **Endpoint:** `/api/json-mapper` 
- **Method:** `POST`
- **Parameters:**
  - `json` (required): The JSON body containing the AWS SES SNS notification.
- **Usage**: Send a POST request to the API endpoint with the JSON body containing the AWS SES SNS notification.
- **Response**: The API will process the JSON body and return a simplified object containing only the most important information from the notification.

> Note: You can use the file located in the `tests/fixtures/sns-example.json` file for testing purposes. You can use a client like Postman or cURL to send the JSON body to the API endpoint.

---
Thanks for reading! If you have any questions or feedback, please don't hesitate to reach me out at [steven.gustavo.lara@gmail.com](mailto:steven.gustavo.lara@gmail.com).
