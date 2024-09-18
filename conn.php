<?

class conexion{
    public $host = '127.0.0.1';
    public $db ='rrhh';
    public $user = 'root';
    public $pass = ' ';
    public $port = '3306';
    public $charset = 'utf8mb4';
    public $option = [
        \PDO::ATTR_ERRMODE => \PDO::ATTR_ERRMODE_EXEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR__EMULATE_PREPARES => false
    ];

    public function conectar(){
        try{
            $pdo = new PDO("mysql:host={$this->host};dbname={$this->db};charset={$this->charset};port={$this->port}",$this->user,$this->pass,$this->option);
            return$pdo;
        }catch(PDOExeption $exp) {
            echo("HUBO UN ERROR EN LA CONEXIÓN".$exp->getMessage());
        }
    }
}


?>