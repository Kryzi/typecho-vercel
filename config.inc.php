addServer(array (
  'host' => '43.143.154.139',
  'user' => 'typecho',
  'password' => 'H3BDEXMRApCARHHp',
  'charset' => 'utf8mb4',
  'port' => '3306',
  'database' => 'typecho',
  'engine' => 'MyISAM',
), Typecho_Db::READ | Typecho_Db::WRITE);
Typecho_Db::set($db);