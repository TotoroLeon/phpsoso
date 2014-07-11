<?php if (!defined('THINK_PATH')) exit();?>
<!--
          .,,,,,,,,,,. 
         ,;;;;;;;;;;;;;;, 
       ,;;;;;;;;;;;)));;(((,,;;;,,_ 
      ,;;;;;;;;;;'      |)))))))))))\\
      ;;;;;;/ )''    - /,)))((((((((((\
      ;;;;' \        ~|\  ))))))))))))))
      /     /         |   ((((((((((((((
    /'      \      _/~'    ')|()))))))))
  /'         `\   />     o_/)))(((((((( 
/          /' `~~(____ /  ()))))))))))
|     ---,   \        \     (((((((((( 
          `\   \~-_____|      )))))))) 
            `\  |      |_.---.  \ 

-->
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>php搜搜</title>
<style type="text/css">
  .box{
    background-color:#eeeeee;
    width: 1140px;
    height: 520px;
    margin: 0 auto;
    position: relative;
    top: 100px;
  }
  .box h1{ width: 100%; text-align: center;}
  .search{margin-top: 200px;text-align: center;}
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.428571429;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
       -o-user-select: none;
          user-select: none;
	color: #ffffff;
	background-color: #47a447;
	border-color: #398439;
}

.btn:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}

.btn:hover,
.btn:focus {
  color: #333333;
  text-decoration: none;
}

.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
</style>
</head>

<body>
  <div class="box">
      <h1>PHP搜搜</h1>
      <div class="search">
        <input type="text" placeholder="请输入..." style="font-size:36px;height: 56px;wight: 100px;display: inline-block;width:70%;" />
        <div style="margin-top:30px;"><input type="submit" value="查询" class="btn" /></div>
      </div>
  </div>


</body>
</html>