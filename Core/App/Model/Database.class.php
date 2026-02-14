<?php

namespace Model;

use DotEnv;

class Database {

  private DotEnv $dotenv;
  private $host;
  private $user;
  private $pass;
  private $db_name;
  public $conn = null;

  public function __construct() {
    $this->dotenv = new DotEnv(APP_ROOT . DIRECTORY_SEPARATOR . '.env');
    $this->dotenv->load();
    $this->host = \getenv('HOST');
    $this->user = \getenv('USER');
    $this->pass = \getenv('PASS');
    $this->db_name = \getenv('DB_NAME');
    $this->connect();
  }

  public function connect() {
    $this->conn = new \mysqli($this->host, $this->user, $this->pass, $this->db_name);
    if ($this->conn->connect_error) {
      die('Error de conexión con MySQL: ' . $this->conn->connect_error);
    }
    return $this->conn;
  }

  public function exeQuery($sql, $data) {
    $stmt = $this->conn->prepare($sql);
    $valores = array_values($data);
    if (strpos($sql, 'UNION') !== false) {
      $valores = array_merge($valores, $valores);
    }
    $tipo = str_repeat('s', count($valores));
    $stmt->bind_param($tipo, ...$valores);
    $stmt->execute();
    return $stmt;
  }

  // fetch
  public function dbMYSQLCall_raw_ASSOC($sql) {
    $stmt = $this->conn->query($sql);
    $data = $stmt->fetch_array(MYSQLI_ASSOC);
    return $data;
  }
  public function dbMYSQLCall_raw_NUM($sql) {
    $stmt = $this->conn->query($sql);
    $data = $stmt->fetch_array(MYSQLI_NUM);
    return $data;
  }
  public function dbMYSQLCall_raw_BOTH($sql) {
    $stmt = $this->conn->query($sql);
    $data = $stmt->fetch_array(MYSQLI_BOTH);
    return $data;
  }

  // fetchAll
  public function dbMYSQLCall_raw_ALL_ASSOC($sql) {
    $stmt = $this->conn->query($sql);
    $data = $stmt->fetch_all(MYSQLI_ASSOC);
    return $data;
  }
  public function dbMYSQLCall_raw_ALL_NUM($sql) {
    $stmt = $this->conn->query($sql);
    $data = $stmt->fetch_all(MYSQLI_NUM);
    return $data;
  }
  public function dbMYSQLCall_raw_ALL_BOTH($sql) {
    $stmt = $this->conn->query($sql);
    $data = $stmt->fetch_all(MYSQLI_BOTH);
    return $data;
  }

  public function dbCall(string $type, $join, $cols, string $table, $data = [], $order = [], $limits = []) {
    $sql = "SELECT ";
    $i = 0;
    if (!is_array($join) && $join === false) {
      if ($cols[0] === 'all' || $cols === 'all') {
        $sql .= "*";
      } else {
        foreach ($cols as $key => $value) {
          if ($i === 0) {
            $sql .= " $value";
          } else {
            $sql .= " , $value";
          }
          $i++;
        }
      }
    } else {
      foreach ($join['cols'] as $key => $value) {
        if (preg_match('/[,]/', $value)) {
          $join['cols'] = explode(",", $value);
          foreach ($join['cols'] as $subkey => $subvalue) {
            if ($i === 0) {
              $sql .= " $key.$subvalue";
            } else {
              $sql .= " , $key.$subvalue";
            }
            $i++;
          }
        } else {
          if ($value === 'all') {
            $value = "*";
          }
          if ($i === 0) {
            $sql .= " $key.$value";
          } else {
            $sql .= " , $key.$value";
          }
        }
        $i++;
      }
    }
    $sql .= " FROM $table";
    if (!is_array($join) && $join === false) {
      if (!empty($data)) {
        $i = 0;
        foreach ($data as $key => $value) {
          $but = preg_match('/^!/', $key) ? true : false;
          $key = ($but === true) ? substr($key, 1) : $key;
          if ($i === 0) {
            $sql .= " WHERE $key";
            $sql .= ($but === true) ? '!=?' : '=?';
          } else {
            $sql .= " AND $key";
            $sql .= ($but === true) ? '!=?' : '=?';
          }
          $i++;
        }
      }
    } else {
      $i = 0;
      foreach ($join['on'] as $key => $value) {
        if ($i === 0) {
          $sql .= " $key LEFT JOIN";
        } else {
          $sql .= " $key";
        }
        $i++;
      }
      $sql .= " ON";
      $i = 0;
      foreach ($join['on'] as $key => $value) {
        if ($i === 0) {
          $sql .= " $key.$value=";
        } else {
          $sql .= "$key.$value";
        }
        $i++;
      }
      if (!empty($data)) {
        $i = 0;
        foreach ($data as $key => $value) {
          $but = preg_match('/^!/', $key) ? true : false;
          $key = ($but === true) ? substr($key, 1) : $key;
          if ($i === 0) {
            $sql .= " WHERE $key";
            $sql .= ($but === true) ? '!=?' : '=?';
          } else {
            $sql .= " AND $key";
            $sql .= ($but === true) ? '!=?' : '=?';
          }
          $i++;
        }
      }
      $sqlRight = str_replace("LEFT JOIN", "RIGHT JOIN", $sql);
      $sql = $sql . " UNION " . $sqlRight;
    }
    if (!empty($order)) {
      $i = 0;
      foreach ($order as $key => $value) {
        if ($i === 0) {
          $sql .= ' ORDER BY ' . $value;
          if (preg_match('/\d+/', $key) == true) {
            $key = preg_replace('/\d+/', '', $key);
          }
          $sql .= ' ' . $key;
        } else {
          $null = preg_match('/NULL/', $key) ? true : false;
          $key = ($null === true) ? '' : $key;
          $sql .= ', ' . $value;
          if ($null === false) {
            if (preg_match('/\d+/', $key) == true) {
              $key = preg_replace('/\d+/', '', $key);
            }
            $sql .= ' ' . $key;
          }
        }
        $i++;
      }
    }
    if ($type == 'one') {
      $sql .= " LIMIT 1";
      $stmt = $this->exeQuery($sql, $data);
      $records = $stmt->get_result()->fetch_assoc();
    } elseif ($type == 'limit') {
      $limit = isset($limits['limit']) ? (int) $limits['limit'] : 0;
      $offset = isset($limits['offset']) ? (int) $limits['offset'] : 0;
      $sql .= " LIMIT $limit";
      $sql .= " OFFSET $offset";
      if (empty($data)) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      } else {
        $stmt = $this->exeQuery($sql, $data);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      }
    } elseif ($type == 'all') {
      if (empty($data)) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      } else {
        $stmt = $this->exeQuery($sql, $data);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      }
    } else {
      $sql .= " LIMIT ";
      $sql .= $type;
      if (empty($data)) {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      } else {
        $stmt = $this->exeQuery($sql, $data);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      }
    }
    return $records;
  }

  public function dbCount(string $table, $data = []) {
    $sql = "SELECT COUNT(*) as total FROM $table";
    if (!empty($data)) {
      $i = 0;
      foreach ($data as $key => $value) {
        $but = preg_match('/^!/', $key) ? true : false;
        $key = ($but === true) ? substr($key, 1) : $key;

        if ($i === 0) {
          $sql .= " WHERE $key";
          $sql .= ($but === true) ? '!=?' : '=?';
        } else {
          $sql .= " AND $key";
          $sql .= ($but === true) ? '!=?' : '=?';
        }
        $i++;
      }
    }
    if (empty($data)) {
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result()->fetch_assoc();
    } else {
      $stmt = $this->exeQuery($sql, $data);
      $result = $stmt->get_result()->fetch_assoc();
    }
    return $result['total'];
  }

  public function crudCall(string $type, string $table, $data, $id, $context) {
    $i = 0;
    switch ($type) {
      case 'create':
        $sql = "INSERT INTO $table SET";
        foreach ($data as $key => $value) {
          if ($i === 0) {
            $sql .= " $key=?";
          } else {
            $sql .= ", $key=?";
          }
          $i++;
        }
        $stmt = $this->exeQuery($sql, $data);
        $new_id = $stmt->insert_id;
        return $new_id;
      case 'update':
        $sql = "UPDATE $table SET";
        foreach ($data as $key => $value) {
          if ($i === 0) {
            $sql .= " $key=?";
          } else {
            $sql .= ", $key=?";
          }
          $i++;
        }
        $sql .= " WHERE $context=?";
        $data[$context] = $id;
        $stmt = $this->exeQuery($sql, $data);
        return $stmt->affected_rows;
      case 'delete':
        foreach ($id as $key => $value) {
          $sql = "DELETE FROM $table WHERE $key=?";
        }
        $stmt = $this->exeQuery($sql, $id);
        return $stmt->affected_rows;
      case 'deleteall':
        $sql = "DELETE FROM $table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->affected_rows;
    }
  }

  // MÉTODOS PARA FETCH
  public function truncateTable(string $table) {
    $sql = "TRUNCATE TABLE $table";
    $result = $this->conn->query($sql);
    if (!$result) {
      throw new \Exception('Error al vaciar la tabla: ' . $this->conn->error);
    }
    return true;
  }

  public function beginTransaction() {
    return $this->conn->begin_transaction();
  }

  public function commit() {
    return $this->conn->commit();
  }

  public function rollback() {
    return $this->conn->rollback();
  }

  public function insertFromCSV(string $table, array $headers, $fileHandle) {
    $types = str_repeat('s', count($headers));
    $placeholders = implode(',', array_fill(0, count($headers), '?'));
    $columns = implode(',', $headers);

    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    $stmt = $this->conn->prepare($sql);

    if (!$stmt) {
      throw new \Exception('Error al preparar consulta: ' . $this->conn->error);
    }

    $rowCount = 0;

    while (($data = fgetcsv($fileHandle, 1000, ',')) !== false) {
      if (count($data) !== count($headers)) {
        throw new \Exception("Fila inválida en línea " . ($rowCount + 2) . ": se esperaban " . count($headers) . " columnas, se encontraron " . count($data));
      }

      $stmt->bind_param($types, ...$data);

      if (!$stmt->execute()) {
        throw new \Exception('Error al insertar fila ' . ($rowCount + 1) . ': ' . $stmt->error);
      }

      $rowCount++;
    }

    $stmt->close();
    return $rowCount;
  }

  public function replaceTableFromCSV(string $table, string $csvFilePath, array $expectedHeaders) {
    $handle = fopen($csvFilePath, 'r');

    if ($handle === false) {
      throw new \Exception('No se pudo leer el archivo CSV');
    }

    try {
      $headers = fgetcsv($handle, 1000, ',');

      if ($headers === false) {
        throw new \Exception('El archivo CSV está vacío');
      }

      if ($expectedHeaders !== null && $headers !== $expectedHeaders) {
        throw new \Exception('Formato de CSV inválido. Columnas esperadas: ' . implode(', ', $expectedHeaders));
      }

      $this->beginTransaction();

      $this->truncateTable($table);

      $rowCount = $this->insertFromCSV($table, $headers, $handle);

      $this->commit();

      fclose($handle);

      return [
        'success' => true,
        'message' => "Base de Datos actualizada exitosamente.",
        'rowCount' => $rowCount
      ];

    } catch (\Exception $e) {
      $this->rollback();
      fclose($handle);
      throw $e;
    }
  }

  public function __destruct() {
    mysqli_close($this->conn);
  }
}