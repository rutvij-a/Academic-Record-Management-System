<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "GET";
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "POST";
} else if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    echo "PUT";
} else if ($_SERVER['REQUEST_METHOD'] == 'PATCH') {
    echo "PATCH";
} else if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    echo "DELETE";
}
