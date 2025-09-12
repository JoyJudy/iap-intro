<?class DataBase {
    private $pdo;

    public function __construct($conf){
        try{
            $dsn = "mysql: host={$conf['db_host']};dbname={$conf['db_name']};charset=utf8mb4";
            $this->pdo = new PDO($dsn, $conf['db_user'], $conf['db_pass']);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            die("DB Connection failed: " . $e->getMessage());
        }
    }

    public function insertUser($username, $email, $password){
        $stmt = $this->pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        return $stmt->execute([$username, $email, $password]);
    }

    public function countUsers(){
        $stmt = $this->pdo->query("SELECT COUNT(*) AS total FROM users");
        return $stmt->fetch()['total'];
    }

    public function getUsersAscending(){
        $stmt = $this->pdo->query("SELECT username, email, created_at FROM users ORDER BY username ASC");
        return $stmt->fetchAll();
    }
}
