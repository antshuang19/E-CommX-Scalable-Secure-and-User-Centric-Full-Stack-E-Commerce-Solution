<?php

class ChangeInfo{
	// Class properties
	private $id_student;
	private $name;
	private $username;
	private $password;
	public $error;
	public $success;
	private $storage = "data.json";
	private $stored_users; 
	private $money;

    public function __construct($name, $id_student,$username,$password,$money)
    {
        $this->name=$name;
        $this->id_student=$id_student;
        $this->username = $username;
		$this->password = $password;
        $this->money=$money;
		$this->stored_users = json_decode(file_get_contents($this->storage), true);
    }

    public function changename($username,$newname)
    {
        foreach ($this->stored_users as $user=>$v) {
			if($v['username'] == $this->username){
				$this->stored_users[$user]['name']=$newname;
                $v['name']=$newname;
                file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT));
                session_start();
					$_SESSION['user'] = $v['name'];
					$_SESSION['id'] = $v['id'];
					$_SESSION['pw'] = $v['password'];
					$_SESSION['email'] = $v['username'];
					$_SESSION['money'] = $v['money'];
					header("location: home.php"); exit();
			}
		}
    }
    public function changeid($username,$newid)
    {
        foreach ($this->stored_users as $user=>$v) {
			if($v['username'] == $this->username){
				$this->stored_users[$user]['id']=$newid;
                $v['id']=$newid;
                file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT));
                if (!session_id()) session_start();
					$_SESSION['user'] = $v['name'];
					$_SESSION['id'] = $v['id'];
					$_SESSION['pw'] = $v['password'];
					$_SESSION['email'] = $v['username'];
					$_SESSION['money'] = $v['money'];
					header("location: home.php"); exit();
			}
		}
    }
    public function changeemail($username,$newemail)
    {
        foreach ($this->stored_users as $user=>$v) {
			if($v['username'] == $this->username){
				$this->stored_users[$user]['username']=$newemail;
                $v['username']=$newemail;
                file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT));
                session_start();
					$_SESSION['user'] = $v['name'];
					$_SESSION['id'] = $v['id'];
					$_SESSION['pw'] = $v['password'];
					$_SESSION['email'] = $v['username'];
					$_SESSION['money'] = $v['money'];
					header("location: home.php"); exit();
			}
		}
    }
    public function changemoney($username,$newmoney)
    {
        foreach ($this->stored_users as $user=>$v) {
			if($v['username'] == $this->username){
				$this->stored_users[$user]['money']=$newmoney;
                $v['money']=$newmoney;
                file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT));
                session_start();
					$_SESSION['user'] = $v['name'];
					$_SESSION['id'] = $v['id'];
					$_SESSION['pw'] = $v['password'];
					$_SESSION['email'] = $v['username'];
					$_SESSION['money'] = $v['money'];
					header("location: home.php"); exit();
			}
		}
    }
    public function changepw($username,$oldpw,$newpw)
    {
        foreach ($this->stored_users as $user=>$v) {
			if($v['username'] == $this->username){
                if(password_verify($oldpw,$v['password']))
                {
				$this->stored_users[$user]['password']=password_hash($newpw, PASSWORD_DEFAULT);
                $v['password']=password_hash($newpw, PASSWORD_DEFAULT);
                file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT));
                session_start();
					$_SESSION['user'] = $user['name'];
					$_SESSION['id'] = $user['id'];
					$_SESSION['pw'] = $user['password'];
					$_SESSION['email'] = $user['username'];
					$_SESSION['money'] = $user['money'];
				    header("location: login.php"); exit();
                }
			}
		}
        return $this->error = "Wrong password";
    }
}
/**
* 定义redirect()跳转函数，是用来在用户操作后，页面根据要求跳转到指定页面
*
* @param  $ms 是用来调整跳转所需要的秒数
* @param  $url 是指定跳转到的地址
* @param  $text 是显示跳转时候的信息
*/
function redirect($ms ='', $url='', $text=''){
echo <<<EOT
<meta http-equiv="refresh" content=$ms;URL=$url>
<div align="center">
<table width="600" border="0" cellpadding="1" cellspacing="1" class="tableoutline">
<tr>
  <td colspan="3"><table width="100%" border="0" cellpadding="5" cellspacing="1">
       <tr>
      <td valign="bottom"><div align="center">页面操作提示</div></td>
      </tr>
       <tr>
      <td><div align="center">$text</div></td>
      </tr>
       <tr>
      <td><div align="center"><a href="$url" mce_href="$url">购买成功！本页面在 $ms 秒后自动跳转，如果您的浏览器没有跳转，点此链接返回。</a></div>
   </td>
      </tr>
   </table></td>
</tr>
   </table>
   </div>
EOT;
}
?>