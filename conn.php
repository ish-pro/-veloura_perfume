
<?php
$host = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USERNAME') ?: 'root';
$password = getenv('DB_PASSWORD') ?: '';
$dbname = getenv('DB_NAME') ?: 'veloura_parfum';
$port = getenv('DB_PORT') ?: 3306;

$conn = null;
$db_error = '';

function createDatabaseConnection($host, $username, $password, $dbname, $port) {
    $connection = @new mysqli($host, $username, $password, $dbname, $port);
    if ($connection->connect_errno) {
        return null;
    }

    $connection->set_charset('utf8mb4');
    return $connection;
}

try {
    $conn = createDatabaseConnection($host, $username, $password, $dbname, $port);

    if (!$conn) {
        $adminConn = @new mysqli($host, $username, $password, '', $port);
        if ($adminConn && !$adminConn->connect_errno) {
            $safeDbName = '`' . str_replace('`', '``', $dbname) . '`';
            $createDbSql = "CREATE DATABASE IF NOT EXISTS $safeDbName CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";

            if (!$adminConn->query($createDbSql)) {
                throw new Exception($adminConn->error);
            }

            $adminConn->close();
            $conn = createDatabaseConnection($host, $username, $password, $dbname, $port);
        }
    }

    if ($conn) {
        $usersTableSql = "
            CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(100) NOT NULL,
                email VARCHAR(150) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
        ";

        if (!$conn->query($usersTableSql)) {
            throw new Exception($conn->error);
        }
    }
} catch (Exception $e) {
    $db_error = $e->getMessage();
    $conn = null;
}

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>